<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class TeamMemberController extends AdminController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teamMembers = TeamMember::orderBy('sort_order')->get();
        return view('admin.team-members.index', compact('teamMembers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.team-members.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_en' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'position_en' => 'required|string|max:255',
            'position_ar' => 'required|string|max:255',
            'bio_en' => 'nullable|string',
            'bio_ar' => 'nullable|string',
            'image_url' => 'nullable|string|max:255',
            'linkedin_url' => 'nullable|string|max:255',
            'twitter_url' => 'nullable|string|max:255',
            'is_featured' => 'boolean',
            'sort_order' => 'integer',
        ]);

        // Create team member with multilingual data
        $teamMember = TeamMember::create([
            'name' => [
                'en' => $request->name_en,
                'ar' => $request->name_ar,
            ],
            'position' => [
                'en' => $request->position_en,
                'ar' => $request->position_ar,
            ],
            'bio' => [
                'en' => $request->bio_en,
                'ar' => $request->bio_ar,
            ],
            'image_url' => $request->image_url,
            'linkedin_url' => $request->linkedin_url,
            'twitter_url' => $request->twitter_url,
            'is_featured' => $request->has('is_featured'),
            'sort_order' => $request->sort_order ?? 0,
        ]);

        return redirect()->route('admin.team-members.index')
            ->with('success', 'Team member created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(TeamMember $teamMember)
    {
        return view('admin.team-members.show', compact('teamMember'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TeamMember $teamMember)
    {
        // Get translations for form fields
        $translations = [
            'en' => [
                'name' => $teamMember->getTranslation('name', 'en', false),
                'position' => $teamMember->getTranslation('position', 'en', false),
                'bio' => $teamMember->getTranslation('bio', 'en', false),
            ],
            'ar' => [
                'name' => $teamMember->getTranslation('name', 'ar', false),
                'position' => $teamMember->getTranslation('position', 'ar', false),
                'bio' => $teamMember->getTranslation('bio', 'ar', false),
            ],
        ];

        return view('admin.team-members.edit', compact('teamMember', 'translations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TeamMember $teamMember)
    {
        $request->validate([
            'name_en' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'position_en' => 'required|string|max:255',
            'position_ar' => 'required|string|max:255',
            'bio_en' => 'nullable|string',
            'bio_ar' => 'nullable|string',
            'image_url' => 'nullable|string|max:255',
            'linkedin_url' => 'nullable|string|max:255',
            'twitter_url' => 'nullable|string|max:255',
            'is_featured' => 'boolean',
            'sort_order' => 'integer',
        ]);

        // Update team member with multilingual data
        $teamMember->update([
            'name' => [
                'en' => $request->name_en,
                'ar' => $request->name_ar,
            ],
            'position' => [
                'en' => $request->position_en,
                'ar' => $request->position_ar,
            ],
            'bio' => [
                'en' => $request->bio_en,
                'ar' => $request->bio_ar,
            ],
            'image_url' => $request->image_url,
            'linkedin_url' => $request->linkedin_url,
            'twitter_url' => $request->twitter_url,
            'is_featured' => $request->has('is_featured'),
            'sort_order' => $request->sort_order ?? 0,
        ]);

        return redirect()->route('admin.team-members.index')
            ->with('success', 'Team member updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TeamMember $teamMember)
    {
        $teamMember->delete();

        return redirect()->route('admin.team-members.index')
            ->with('success', 'Team member deleted successfully.');
    }
}
