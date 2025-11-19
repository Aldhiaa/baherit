<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function index(): View
    {
        $projects = Project::with('translations')
            ->orderBy('created_at', 'desc')
            ->paginate(15);

        return view('admin.projects.index', compact('projects'));
    }

    public function create(): View
    {
        return view('admin.projects.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'client_name' => 'required|string|max:255',
            'project_url' => 'nullable|url|max:255',
            'completion_date' => 'required|date',
            'status' => 'required|in:draft,published',
            'is_featured' => 'boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title_en' => 'required|string|max:255',
            'description_en' => 'required|string',
            'technologies_en' => 'nullable|string',
            'title_ar' => 'nullable|string|max:255',
            'description_ar' => 'nullable|string',
            'technologies_ar' => 'nullable|string',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('projects', 'public');
        }

        // Create project
        $project = Project::create([
            'client_name' => $validated['client_name'],
            'project_url' => $validated['project_url'],
            'completion_date' => $validated['completion_date'],
            'status' => $validated['status'],
            'is_featured' => $request->boolean('is_featured'),
            'image' => $validated['image'] ?? null,
        ]);

        // Create translations
        $project->translateOrNew('en')->fill([
            'title' => $validated['title_en'],
            'description' => $validated['description_en'],
            'technologies' => $validated['technologies_en'],
        ]);

        if ($validated['title_ar']) {
            $project->translateOrNew('ar')->fill([
                'title' => $validated['title_ar'],
                'description' => $validated['description_ar'],
                'technologies' => $validated['technologies_ar'],
            ]);
        }

        $project->save();

        return redirect()->route('admin.projects.index')
            ->with('success', 'Project created successfully.');
    }

    public function edit(Project $project): View
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project): RedirectResponse
    {
        $validated = $request->validate([
            'client_name' => 'required|string|max:255',
            'project_url' => 'nullable|url|max:255',
            'completion_date' => 'required|date',
            'status' => 'required|in:draft,published',
            'is_featured' => 'boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title_en' => 'required|string|max:255',
            'description_en' => 'required|string',
            'technologies_en' => 'nullable|string',
            'title_ar' => 'nullable|string|max:255',
            'description_ar' => 'nullable|string',
            'technologies_ar' => 'nullable|string',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image
            if ($project->image) {
                Storage::disk('public')->delete($project->image);
            }
            $validated['image'] = $request->file('image')->store('projects', 'public');
        }

        // Update project
        $project->update([
            'client_name' => $validated['client_name'],
            'project_url' => $validated['project_url'],
            'completion_date' => $validated['completion_date'],
            'status' => $validated['status'],
            'is_featured' => $request->boolean('is_featured'),
            'image' => $validated['image'] ?? $project->image,
        ]);

        // Update translations
        $project->translateOrNew('en')->fill([
            'title' => $validated['title_en'],
            'description' => $validated['description_en'],
            'technologies' => $validated['technologies_en'],
        ]);

        if ($validated['title_ar']) {
            $project->translateOrNew('ar')->fill([
                'title' => $validated['title_ar'],
                'description' => $validated['description_ar'],
                'technologies' => $validated['technologies_ar'],
            ]);
        }

        $project->save();

        return redirect()->route('admin.projects.index')
            ->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project): RedirectResponse
    {
        // Delete image if exists
        if ($project->image) {
            Storage::disk('public')->delete($project->image);
        }

        $project->delete();

        return redirect()->route('admin.projects.index')
            ->with('success', 'Project deleted successfully.');
    }
}
