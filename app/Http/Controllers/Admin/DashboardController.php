<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Blog;
use App\Models\Project;
use App\Models\Faq;
use App\Models\FaqCategory;
use App\Models\Testimonial;
use App\Models\Counter;
use App\Models\WorkingProcess;
use App\Models\Banner;
use App\Models\Page;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display the admin dashboard.
     */
    public function index()
    {
        $stats = [
            'services' => Service::count(),
            'projects' => Project::count(),
            'blogs' => Blog::count(),
            'testimonials' => Testimonial::count(),
            'faqs' => Faq::count(),
            'faq_categories' => FaqCategory::count(),
            'counters' => Counter::count(),
            'working_processes' => WorkingProcess::count(),
            'banners' => Banner::count(),
            'pages' => Page::count(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
}
