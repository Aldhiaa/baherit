<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\FaqCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        // Fetch published blogs with translations, paginated
        $blogs = Blog::published()
            ->withTranslations()
            ->orderByDesc('published_at')
            ->orderByDesc('created_at')
            ->paginate(6);

        // Fetch recent posts for sidebar (latest 3)
        $recentPosts = Blog::published()
            ->withTranslations()
            ->orderByDesc('published_at')
            ->orderByDesc('created_at')
            ->take(3)
            ->get();

        // Since no BlogCategory model exists, we'll use FAQ categories as fallback
        // or create a simple categories array from existing data
        $categories = collect([
            ['name' => __('index.services.fallback.it_management.title'), 'count' => $blogs->where('author_name', 'like', '%IT%')->count()],
            ['name' => __('index.services.fallback.cloud_solutions.title'), 'count' => $blogs->where('author_name', 'like', '%Cloud%')->count()],
            ['name' => __('index.services.fallback.cybersecurity.title'), 'count' => $blogs->where('author_name', 'like', '%Security%')->count()],
            ['name' => __('index.services.fallback.backup_recovery.title'), 'count' => $blogs->where('author_name', 'like', '%Backup%')->count()],
        ])->filter(function ($category) {
            return $category['count'] > 0;
        });

        // If no categories from above, create fallback categories
        if ($categories->isEmpty()) {
            $categories = collect([
                ['name' => 'Technology', 'count' => $blogs->count()],
                ['name' => 'IT Solutions', 'count' => $blogs->count()],
                ['name' => 'Digital Innovation', 'count' => $blogs->count()],
            ]);
        }

        return view('blog', compact('blogs', 'recentPosts', 'categories'));
    }
}
