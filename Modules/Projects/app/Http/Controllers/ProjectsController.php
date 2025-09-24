<?php

namespace Modules\Projects\App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Projects\Models\Project;
use Modules\Projects\Models\ProjectCategory;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::with('category')
            ->where('is_active', true)
            ->latest()
            ->paginate(12);

        $featuredProjects = Project::with('category')
            ->where('is_active', true)
            ->where('is_featured', true)
            ->latest()
            ->take(6)
            ->get();

        $categories = ProjectCategory::with('projects')
            ->withCount('projects')
            ->get();

        return view('projects::index', compact('projects', 'featuredProjects', 'categories'));
    }

    public function show($slug)
    {
        $project = Project::with('category')
            ->where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        $relatedProjects = Project::with('category')
            ->where('category_id', $project->category_id)
            ->where('id', '!=', $project->id)
            ->where('is_active', true)
            ->latest()
            ->take(3)
            ->get();

        return view('projects::show', compact('project', 'relatedProjects'));
    }

    public function byCategory($slug)
    {
        $category = ProjectCategory::where('slug', $slug)->firstOrFail();

        $projects = Project::with('category')
            ->where('category_id', $category->id)
            ->where('is_active', true)
            ->latest()
            ->paginate(12);

        $categories = ProjectCategory::has('projects')
            ->withCount('projects')
            ->get();

        return view('project::category', compact('projects', 'category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) {}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) {}
}
