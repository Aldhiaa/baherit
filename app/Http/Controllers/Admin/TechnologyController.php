<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Technology;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $technologies = Technology::orderBy('sort_order')->get();
        return view('admin.technologies.index', compact('technologies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = [
            'frontend' => 'Frontend',
            'backend' => 'Backend',
            'cloud' => 'Cloud',
            'database' => 'Database',
            'mobile' => 'Mobile',
            'emerging' => 'Emerging Technologies'
        ];
        
        return view('admin.technologies.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_en' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'description_en' => 'nullable|string',
            'description_ar' => 'nullable|string',
            'category' => 'required|string|max:255',
            'logo_url' => 'nullable|string|max:255',
            'proficiency_level' => 'nullable|integer|min:0|max:100',
            'tags' => 'nullable|string',
            'is_featured' => 'boolean',
            'sort_order' => 'integer',
        ]);

        // Process tags
        $tags = [];
        if ($request->tags) {
            $tags = array_map('trim', explode(',', $request->tags));
        }

        // Create technology with multilingual data
        $technology = Technology::create([
            'name' => [
                'en' => $request->name_en,
                'ar' => $request->name_ar,
            ],
            'description' => [
                'en' => $request->description_en,
                'ar' => $request->description_ar,
            ],
            'category' => $request->category,
            'logo_url' => $request->logo_url,
            'proficiency_level' => $request->proficiency_level ?? 0,
            'tags' => $tags,
            'is_featured' => $request->has('is_featured'),
            'sort_order' => $request->sort_order ?? 0,
        ]);

        return redirect()->route('admin.technologies.index')
            ->with('success', 'Technology created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Technology $technology)
    {
        return view('admin.technologies.show', compact('technology'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Technology $technology)
    {
        $categories = [
            'frontend' => 'Frontend',
            'backend' => 'Backend',
            'cloud' => 'Cloud',
            'database' => 'Database',
            'mobile' => 'Mobile',
            'emerging' => 'Emerging Technologies'
        ];
        
        // Get translations for form fields
        $translations = [
            'en' => [
                'name' => $technology->getTranslation('name', 'en', false),
                'description' => $technology->getTranslation('description', 'en', false),
            ],
            'ar' => [
                'name' => $technology->getTranslation('name', 'ar', false),
                'description' => $technology->getTranslation('description', 'ar', false),
            ],
        ];
        
        // Format tags for display
        $tagsString = implode(', ', $technology->tags ?? []);
        
        return view('admin.technologies.edit', compact('technology', 'categories', 'translations', 'tagsString'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Technology $technology)
    {
        $request->validate([
            'name_en' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'description_en' => 'nullable|string',
            'description_ar' => 'nullable|string',
            'category' => 'required|string|max:255',
            'logo_url' => 'nullable|string|max:255',
            'proficiency_level' => 'nullable|integer|min:0|max:100',
            'tags' => 'nullable|string',
            'is_featured' => 'boolean',
            'sort_order' => 'integer',
        ]);

        // Process tags
        $tags = [];
        if ($request->tags) {
            $tags = array_map('trim', explode(',', $request->tags));
        }

        // Update technology with multilingual data
        $technology->update([
            'name' => [
                'en' => $request->name_en,
                'ar' => $request->name_ar,
            ],
            'description' => [
                'en' => $request->description_en,
                'ar' => $request->description_ar,
            ],
            'category' => $request->category,
            'logo_url' => $request->logo_url,
            'proficiency_level' => $request->proficiency_level ?? 0,
            'tags' => $tags,
            'is_featured' => $request->has('is_featured'),
            'sort_order' => $request->sort_order ?? 0,
        ]);

        return redirect()->route('admin.technologies.index')
            ->with('success', 'Technology updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Technology $technology)
    {
        $technology->delete();

        return redirect()->route('admin.technologies.index')
            ->with('success', 'Technology deleted successfully.');
    }
}
