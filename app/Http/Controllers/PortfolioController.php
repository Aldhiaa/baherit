<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Blog;
use Illuminate\Http\Request;

use App\Models\Setting;

class PortfolioController extends Controller
{
    public function index()
    {
        $locale = app()->getLocale();

        // Global Settings
        $settings = Setting::withTranslations($locale)->get()->mapWithKeys(function ($setting) {
            return [$setting->key => $setting->value];
        });

        // Fetch all published projects with translations
        $projects = Project::published()
            ->withTranslations()
            ->orderByDesc('created_at')
            ->get();

        // Fetch recent blog posts for the sidebar (if needed, though portfolio usually doesn't have sidebar)
        // But keeping it as it was in original code
        $recentBlogs = Blog::published()
            ->withTranslations()
            ->orderByDesc('created_at')
            ->take(3)
            ->get();

        return view('portfolio', compact('projects', 'recentBlogs', 'settings'));
    }
}
