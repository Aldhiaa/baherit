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
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('projects', 'public');
        }

        // Create project
        $project = Project::create([
            'slug' => $this->createUniqueSlug($validated['title_en']),
            'client' => $validated['client_name'],
            'completion_date' => $validated['completion_date'],
            'status' => $validated['status'],
            'is_featured' => $request->boolean('is_featured'),
            'featured_image' => $imagePath,
        ]);

        // Create translations
        $deliverablesEn = [
            'project_url' => $validated['project_url'] ?? null,
            'technologies' => $validated['technologies_en'] ?? null,
        ];

        $translationEn = $project->translateOrNew('en');
        $translationEn->fill([
            'title' => $validated['title_en'],
            'description' => $validated['description_en'],
            'deliverables' => json_encode($deliverablesEn),
        ]);
        $translationEn->firstOrNew(['project_id' => $project->id, 'locale' => 'en']); // Ensure relationships
        $translationEn->project_id = $project->id;
        $translationEn->save();

        if ($request->filled('title_ar')) {
            $deliverablesAr = [
                'project_url' => $validated['project_url'] ?? null,
                'technologies' => $validated['technologies_ar'] ?? null,
            ];

            $translationAr = $project->translateOrNew('ar');
            $translationAr->fill([
                'title' => $validated['title_ar'],
                'description' => $validated['description_ar'],
                'deliverables' => json_encode($deliverablesAr),
            ]);
            $translationAr->project_id = $project->id;
            $translationAr->save();
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
            if ($project->featured_image) {
                Storage::disk('public')->delete($project->featured_image);
            }
            $project->featured_image = $request->file('image')->store('projects', 'public');
        }

        // Update project
        $project->client = $validated['client_name'];
        $project->completion_date = $validated['completion_date'];
        $project->status = $validated['status'];
        $project->is_featured = $request->boolean('is_featured');
        
        // Update slug only if changed
        if (Str::slug($validated['title_en']) !== $project->slug) {
             $project->slug = $this->createUniqueSlug($validated['title_en'], $project->id);
        }
        
        $project->save();

        // Update translations
        $deliverablesEn = [
            'project_url' => $validated['project_url'] ?? null,
            'technologies' => $validated['technologies_en'] ?? null,
        ];

        $translationEn = $project->translateOrNew('en');
        $translationEn->fill([
            'title' => $validated['title_en'],
            'description' => $validated['description_en'],
            'deliverables' => json_encode($deliverablesEn),
        ]);
        $translationEn->save();

        if ($request->filled('title_ar')) {
            $deliverablesAr = [
                'project_url' => $validated['project_url'] ?? null,
                'technologies' => $validated['technologies_ar'] ?? null,
            ];

            $translationAr = $project->translateOrNew('ar');
            $translationAr->fill([
                'title' => $validated['title_ar'],
                'description' => $validated['description_ar'],
                'deliverables' => json_encode($deliverablesAr),
            ]);
            $translationAr->save();
        }

        return redirect()->route('admin.projects.index')
            ->with('success', 'Project updated successfully.');
    }

    private function createUniqueSlug(string $title, int $ignoreId = 0): string
    {
        $slug = Str::slug($title);
        $originalSlug = $slug;
        $count = 1;

        while (Project::where('slug', $slug)->where('id', '!=', $ignoreId)->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        return $slug;
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
