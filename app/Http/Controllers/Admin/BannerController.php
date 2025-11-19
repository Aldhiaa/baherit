<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index(): View
    {
        $banners = Banner::with('translations')
            ->orderBy('created_at', 'desc')
            ->paginate(15);

        return view('admin.banners.index', compact('banners'));
    }

    public function create(): View
    {
        return view('admin.banners.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'page_context' => 'required|string|max:255',
            'display_order' => 'required|integer|min:1',
            'button_text' => 'nullable|string|max:255',
            'button_url' => 'nullable|url|max:255',
            'is_active' => 'boolean',
            'background_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title_en' => 'required|string|max:255',
            'subtitle_en' => 'nullable|string|max:255',
            'description_en' => 'nullable|string',
            'title_ar' => 'nullable|string|max:255',
            'subtitle_ar' => 'nullable|string|max:255',
            'description_ar' => 'nullable|string',
        ]);

        // Handle background image upload
        if ($request->hasFile('background_image')) {
            $validated['background_image'] = $request->file('background_image')->store('banners', 'public');
        }

        // Create banner
        $banner = Banner::create([
            'page_context' => $validated['page_context'],
            'display_order' => $validated['display_order'],
            'button_text' => $validated['button_text'],
            'button_url' => $validated['button_url'],
            'is_active' => $request->boolean('is_active'),
            'background_image' => $validated['background_image'] ?? null,
        ]);

        // Create translations
        $banner->translateOrNew('en')->fill([
            'title' => $validated['title_en'],
            'subtitle' => $validated['subtitle_en'],
            'description' => $validated['description_en'],
        ]);

        if ($validated['title_ar']) {
            $banner->translateOrNew('ar')->fill([
                'title' => $validated['title_ar'],
                'subtitle' => $validated['subtitle_ar'],
                'description' => $validated['description_ar'],
            ]);
        }

        $banner->save();

        return redirect()->route('admin.banners.index')
            ->with('success', 'Banner created successfully.');
    }

    public function edit(Banner $banner): View
    {
        return view('admin.banners.edit', compact('banner'));
    }

    public function update(Request $request, Banner $banner): RedirectResponse
    {
        $validated = $request->validate([
            'page_context' => 'required|string|max:255',
            'display_order' => 'required|integer|min:1',
            'button_text' => 'nullable|string|max:255',
            'button_url' => 'nullable|url|max:255',
            'is_active' => 'boolean',
            'background_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title_en' => 'required|string|max:255',
            'subtitle_en' => 'nullable|string|max:255',
            'description_en' => 'nullable|string',
            'title_ar' => 'nullable|string|max:255',
            'subtitle_ar' => 'nullable|string|max:255',
            'description_ar' => 'nullable|string',
        ]);

        // Handle background image upload
        if ($request->hasFile('background_image')) {
            // Delete old image
            if ($banner->background_image) {
                Storage::disk('public')->delete($banner->background_image);
            }
            $validated['background_image'] = $request->file('background_image')->store('banners', 'public');
        }

        // Update banner
        $banner->update([
            'page_context' => $validated['page_context'],
            'display_order' => $validated['display_order'],
            'button_text' => $validated['button_text'],
            'button_url' => $validated['button_url'],
            'is_active' => $request->boolean('is_active'),
            'background_image' => $validated['background_image'] ?? $banner->background_image,
        ]);

        // Update translations
        $banner->translateOrNew('en')->fill([
            'title' => $validated['title_en'],
            'subtitle' => $validated['subtitle_en'],
            'description' => $validated['description_en'],
        ]);

        if ($validated['title_ar']) {
            $banner->translateOrNew('ar')->fill([
                'title' => $validated['title_ar'],
                'subtitle' => $validated['subtitle_ar'],
                'description' => $validated['description_ar'],
            ]);
        }

        $banner->save();

        return redirect()->route('admin.banners.index')
            ->with('success', 'Banner updated successfully.');
    }

    public function destroy(Banner $banner): RedirectResponse
    {
        // Delete background image if exists
        if ($banner->background_image) {
            Storage::disk('public')->delete($banner->background_image);
        }

        $banner->delete();

        return redirect()->route('admin.banners.index')
            ->with('success', 'Banner deleted successfully.');
    }
}
