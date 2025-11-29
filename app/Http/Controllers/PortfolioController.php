<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Blog;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        // Fetch all published projects with translations
        $projects = Project::published()
            ->withTranslations()
            ->orderByDesc('created_at')
            ->get();

        // Fetch recent blog posts for the sidebar
        $recentBlogs = Blog::published()
            ->withTranslations()
            ->orderByDesc('created_at')
            ->take(3)
            ->get();

        return view('portfolio', compact('projects', 'recentBlogs'));
    }
}
