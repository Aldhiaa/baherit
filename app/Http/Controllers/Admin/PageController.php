<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function index(): View
    {
        $pages = Page::with('translations')
            ->orderBy('created_at', 'desc')
            ->paginate(15);

        return view('admin.pages.index', compact('pages'));
    }

    public function create(): View
    {
        return view('admin.pages.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'slug' => 'required|string|max:255|unique:pages,slug',
            'template' => 'nullable|string|max:255',
            'status' => 'required|in:draft,published',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title_en' => 'required|string|max:255',
            'meta_description_en' => 'nullable|string|max:500',
            'content_en' => 'required|string',
            'title_ar' => 'nullable|string|max:255',
            'meta_description_ar' => 'nullable|string|max:500',
            'content_ar' => 'nullable|string',
        ]);

        // Generate slug if not provided
        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['title_en']);
        }

        // Handle featured image upload
        if ($request->hasFile('featured_image')) {
            $validated['featured_image'] = $request->file('featured_image')->store('pages', 'public');
        }

        // Create page
        $page = Page::create([
            'slug' => $validated['slug'],
            'template' => $validated['template'] ?? 'default',
            'status' => $validated['status'],
            'featured_image' => $validated['featured_image'] ?? null,
        ]);

        // Create translations
        $page->translateOrNew('en')->fill([
            'title' => $validated['title_en'],
            'meta_description' => $validated['meta_description_en'],
            'content' => $validated['content_en'],
        ]);

        if ($validated['title_ar']) {
            $page->translateOrNew('ar')->fill([
                'title' => $validated['title_ar'],
                'meta_description' => $validated['meta_description_ar'],
                'content' => $validated['content_ar'],
            ]);
        }

        $page->save();

        return redirect()->route('admin.pages.index')
            ->with('success', 'Page created successfully.');
    }

    public function edit(Page $page): View
    {
        return view('admin.pages.edit', compact('page'));
    }

    public function update(Request $request, Page $page): RedirectResponse
    {
        $validated = $request->validate([
            'slug' => 'required|string|max:255|unique:pages,slug,' . $page->id,
            'template' => 'nullable|string|max:255',
            'status' => 'required|in:draft,published',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title_en' => 'required|string|max:255',
            'meta_description_en' => 'nullable|string|max:500',
            'content_en' => 'required|string',
            'title_ar' => 'nullable|string|max:255',
            'meta_description_ar' => 'nullable|string|max:500',
            'content_ar' => 'nullable|string',
        ]);

        // Handle featured image upload
        if ($request->hasFile('featured_image')) {
            // Delete old image
            if ($page->featured_image) {
                Storage::disk('public')->delete($page->featured_image);
            }
            $validated['featured_image'] = $request->file('featured_image')->store('pages', 'public');
        }

        // Update page
        $page->update([
            'slug' => $validated['slug'],
            'template' => $validated['template'] ?? 'default',
            'status' => $validated['status'],
            'featured_image' => $validated['featured_image'] ?? $page->featured_image,
        ]);

        // Update translations
        $page->translateOrNew('en')->fill([
            'title' => $validated['title_en'],
            'meta_description' => $validated['meta_description_en'],
            'content' => $validated['content_en'],
        ]);

        if ($validated['title_ar']) {
            $page->translateOrNew('ar')->fill([
                'title' => $validated['title_ar'],
                'meta_description' => $validated['meta_description_ar'],
                'content' => $validated['content_ar'],
            ]);
        }

        $page->save();

        return redirect()->route('admin.pages.index')
            ->with('success', 'Page updated successfully.');
    }

    public function destroy(Page $page): RedirectResponse
    {
        // Delete featured image if exists
        if ($page->featured_image) {
            Storage::disk('public')->delete($page->featured_image);
        }

        $page->delete();

        return redirect()->route('admin.pages.index')
            ->with('success', 'Page deleted successfully.');
    }
}
