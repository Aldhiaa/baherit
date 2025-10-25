<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use App\Models\TechnologyCategory;
use Illuminate\Http\Request;

class TechnologyCategoryController extends AdminController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = TechnologyCategory::ordered()->get();
        return view('admin.technology-categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.technology-categories.create');
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
            'icon_svg_path' => 'required|string',
            'color_class' => 'required|string|in:primary,accent,success,warning,error,secondary',
            'sort_order' => 'integer',
            'is_active' => 'boolean',
        ]);

        $category = TechnologyCategory::create([
            'name' => [
                'en' => $request->name_en,
                'ar' => $request->name_ar,
            ],
            'description' => [
                'en' => $request->description_en,
                'ar' => $request->description_ar,
            ],
            'icon_svg_path' => $request->icon_svg_path,
            'color_class' => $request->color_class,
            'sort_order' => $request->sort_order ?? 0,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('admin.technology-categories.index')
            ->with('success', 'Technology category created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(TechnologyCategory $technologyCategory)
    {
        return view('admin.technology-categories.show', compact('technologyCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TechnologyCategory $technologyCategory)
    {
        return view('admin.technology-categories.edit', compact('technologyCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TechnologyCategory $technologyCategory)
    {
        $request->validate([
            'name_en' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'description_en' => 'nullable|string',
            'description_ar' => 'nullable|string',
            'icon_svg_path' => 'required|string',
            'color_class' => 'required|string|in:primary,accent,success,warning,error,secondary',
            'sort_order' => 'integer',
            'is_active' => 'boolean',
        ]);

        $technologyCategory->update([
            'name' => [
                'en' => $request->name_en,
                'ar' => $request->name_ar,
            ],
            'description' => [
                'en' => $request->description_en,
                'ar' => $request->description_ar,
            ],
            'icon_svg_path' => $request->icon_svg_path,
            'color_class' => $request->color_class,
            'sort_order' => $request->sort_order ?? 0,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('admin.technology-categories.index')
            ->with('success', 'Technology category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TechnologyCategory $technologyCategory)
    {
        $technologyCategory->delete();

        return redirect()->route('admin.technology-categories.index')
            ->with('success', 'Technology category deleted successfully.');
    }
}
