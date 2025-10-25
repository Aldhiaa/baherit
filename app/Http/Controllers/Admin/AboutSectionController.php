<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutSections = AboutSection::orderBy('sort_order')->get();
        return view('admin.about-sections.index', compact('aboutSections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about-sections.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'section_name' => 'required|string|max:255|unique:about_sections',
            'title.en' => 'required|string|max:255',
            'title.ar' => 'required|string|max:255',
            'description.en' => 'required|string',
            'description.ar' => 'required|string',
            'sort_order' => 'required|integer',
            'is_active' => 'boolean',
            'image' => 'nullable|image|max:2048',
        ]);
        
        $data = [
            'section_name' => $request->section_name,
            'title' => json_encode([
                'en' => $request->title['en'],
                'ar' => $request->title['ar'],
            ]),
            'description' => json_encode([
                'en' => $request->description['en'],
                'ar' => $request->description['ar'],
            ]),
            'sort_order' => $request->sort_order,
            'is_active' => $request->has('is_active'),
        ];
        
        // Handle content JSON field
        if ($request->has('content')) {
            $data['content'] = json_encode($request->content);
        }
        
        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('about-sections', 'public');
            $data['image'] = $imagePath;
        }
        
        AboutSection::create($data);
        
        return redirect()->route('admin.about-sections.index')
            ->with('success', 'About section created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(AboutSection $aboutSection)
    {
        return view('admin.about-sections.show', compact('aboutSection'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AboutSection $aboutSection)
    {
        return view('admin.about-sections.edit', compact('aboutSection'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AboutSection $aboutSection)
    {
        $request->validate([
            'section_name' => 'required|string|max:255|unique:about_sections,section_name,' . $aboutSection->id,
            'title.en' => 'required|string|max:255',
            'title.ar' => 'required|string|max:255',
            'description.en' => 'required|string',
            'description.ar' => 'required|string',
            'sort_order' => 'required|integer',
            'is_active' => 'boolean',
            'image' => 'nullable|image|max:2048',
            'remove_image' => 'nullable|boolean',
        ]);
        
        $data = [
            'section_name' => $request->section_name,
            'title' => json_encode([
                'en' => $request->title['en'],
                'ar' => $request->title['ar'],
            ]),
            'description' => json_encode([
                'en' => $request->description['en'],
                'ar' => $request->description['ar'],
            ]),
            'sort_order' => $request->sort_order,
            'is_active' => $request->has('is_active'),
        ];
        
        // Handle content JSON field
        if ($request->has('content')) {
            $data['content'] = json_encode($request->content);
        }
        
        // Handle image upload or removal
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($aboutSection->image) {
                Storage::disk('public')->delete($aboutSection->image);
            }
            
            $imagePath = $request->file('image')->store('about-sections', 'public');
            $data['image'] = $imagePath;
        } elseif ($request->has('remove_image') && $aboutSection->image) {
            // Remove image if checkbox is checked
            Storage::disk('public')->delete($aboutSection->image);
            $data['image'] = null;
        }
        
        $aboutSection->update($data);
        
        return redirect()->route('admin.about-sections.index')
            ->with('success', 'About section updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AboutSection $aboutSection)
    {
        // Delete image if exists
        if ($aboutSection->image) {
            Storage::disk('public')->delete($aboutSection->image);
        }
        
        $aboutSection->delete();
        
        return redirect()->route('admin.about-sections.index')
            ->with('success', 'About section deleted successfully.');
    }
}
