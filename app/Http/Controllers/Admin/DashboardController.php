<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Blog;
use App\Models\Portfolio;
use App\Models\Faq;
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
            'blogs' => Blog::count(),
            'portfolios' => Portfolio::count(),
            'faqs' => Faq::count(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
}
