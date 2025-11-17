<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreBlogRequest;
use App\Http\Requests\Admin\UpdateBlogRequest;
use App\Models\Blog;
use App\Models\BlogTranslation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(Request $request): View
    {
        $query = Blog::query()
            ->with(['translations'])
            ->when($request->filled('search'), function ($q) use ($request) {
                $search = $request->string('search')->toString();
                $q->whereHas('translations', function ($translationQuery) use ($search) {
                    $translationQuery->where('title', 'like', "%{$search}%")
                        ->orWhere('excerpt', 'like', "%{$search}%")
                        ->orWhere('content', 'like', "%{$search}%");
                });
            })
            ->when($request->filled('status'), function ($q) use ($request) {
                $status = $request->string('status')->toString();
                if ($status === 'featured') {
                    $q->where('is_featured', true);
                } else {
                    $q->where('status', $status);
                }
            });

        if ($request->filled('published_from')) {
            $query->whereDate('published_at', '>=', $request->date('published_from'));
        }

        if ($request->filled('published_to')) {
            $query->whereDate('published_at', '<=', $request->date('published_to'));
        }

        $blogs = $query
            ->orderByDesc('published_at')
            ->orderByDesc('created_at')
            ->paginate(15)
            ->withQueryString();

        $statusOptions = [
            Blog::STATUS_PUBLISHED => 'Published',
            Blog::STATUS_SCHEDULED => 'Scheduled',
            Blog::STATUS_DRAFT => 'Draft',
            'featured' => 'Featured Only',
        ];

        return view('admin.blogs.index', compact('blogs', 'statusOptions'));
    }

    public function create(): View
    {
        $statusOptions = [
            Blog::STATUS_PUBLISHED => 'Published',
            Blog::STATUS_SCHEDULED => 'Scheduled',
            Blog::STATUS_DRAFT => 'Draft',
        ];

        return view('admin.blogs.create', compact('statusOptions'));
    }

    public function store(StoreBlogRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        DB::beginTransaction();
        try {
            $featuredImage = null;
            /** @var \Illuminate\Http\UploadedFile|null $image */
            $image = $request->file('featured_image');
            if ($image) {
                $featuredImage = $image->store('blogs/featured', 'public');
            }

            $blog = Blog::create([
                'slug' => $validated['slug'],
                'featured_image' => $featuredImage,
                'author_name' => $validated['author_name'] ?? null,
                'read_time_minutes' => $validated['read_time_minutes'] ?? null,
                'published_at' => $validated['published_at'] ?? null,
                'status' => $validated['status'],
                'is_featured' => !empty($validated['is_featured']),
            ]);

            BlogTranslation::create([
                'blog_id' => $blog->id,
                'locale' => 'en',
                'title' => $validated['title_en'],
                'excerpt' => $validated['excerpt_en'],
                'content' => $validated['content_en'],
            ]);

            BlogTranslation::create([
                'blog_id' => $blog->id,
                'locale' => 'ar',
                'title' => $validated['title_ar'],
                'excerpt' => $validated['excerpt_ar'],
                'content' => $validated['content_ar'],
            ]);

            DB::commit();

            return redirect()
                ->route('admin.blogs.index')
                ->with('success', 'Blog post created successfully.');
        } catch (\Throwable $th) {
            DB::rollBack();

            if (isset($featuredImage)) {
                Storage::disk('public')->delete($featuredImage);
            }

            return back()
                ->withInput()
                ->with('error', 'Failed to create blog post: ' . $th->getMessage());
        }
    }

    public function edit(Blog $blog): View
    {
        $blog->load('translations');

        $statusOptions = [
            Blog::STATUS_PUBLISHED => 'Published',
            Blog::STATUS_SCHEDULED => 'Scheduled',
            Blog::STATUS_DRAFT => 'Draft',
        ];

        $enTranslation = $blog->translations->firstWhere('locale', 'en');
        $arTranslation = $blog->translations->firstWhere('locale', 'ar');

        return view('admin.blogs.edit', compact('blog', 'statusOptions', 'enTranslation', 'arTranslation'));
    }

    public function update(UpdateBlogRequest $request, Blog $blog): RedirectResponse
    {
        $validated = $request->validated();

        DB::beginTransaction();
        try {
            /** @var \Illuminate\Http\UploadedFile|null $image */
            $image = $request->file('featured_image');
            if ($image) {
                if ($blog->featured_image) {
                    Storage::disk('public')->delete($blog->featured_image);
                }
                $blog->featured_image = $image->store('blogs/featured', 'public');
            }

            $blog->update([
                'slug' => $validated['slug'],
                'featured_image' => $blog->featured_image ?? null,
                'author_name' => $validated['author_name'] ?? null,
                'read_time_minutes' => $validated['read_time_minutes'] ?? null,
                'published_at' => $validated['published_at'] ?? null,
                'status' => $validated['status'],
                'is_featured' => !empty($validated['is_featured']),
            ]);

            BlogTranslation::updateOrCreate(
                ['blog_id' => $blog->id, 'locale' => 'en'],
                [
                    'title' => $validated['title_en'],
                    'excerpt' => $validated['excerpt_en'],
                    'content' => $validated['content_en'],
                ]
            );

            BlogTranslation::updateOrCreate(
                ['blog_id' => $blog->id, 'locale' => 'ar'],
                [
                    'title' => $validated['title_ar'],
                    'excerpt' => $validated['excerpt_ar'],
                    'content' => $validated['content_ar'],
                ]
            );

            DB::commit();

            return redirect()
                ->route('admin.blogs.index')
                ->with('success', 'Blog post updated successfully.');
        } catch (\Throwable $th) {
            DB::rollBack();

            return back()
                ->withInput()
                ->with('error', 'Failed to update blog post: ' . $th->getMessage());
        }
    }

    public function destroy(Blog $blog): RedirectResponse
    {
        try {
            DB::transaction(function () use ($blog) {
                if ($blog->featured_image) {
                    Storage::disk('public')->delete($blog->featured_image);
                }

                $blog->translations()->delete();
                $blog->delete();
            });

            return redirect()
                ->route('admin.blogs.index')
                ->with('success', 'Blog post deleted successfully.');
        } catch (\Throwable $th) {
            return back()->with('error', 'Failed to delete blog post: ' . $th->getMessage());
        }
    }
}
