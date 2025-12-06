<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Faq;
use App\Models\Blog;
use Illuminate\View\View;

class ServiceController extends Controller
{
    public function index(): View
    {
        $locale = app()->getLocale();

        // Global Settings
        $settings = Setting::withTranslations($locale)->get()->mapWithKeys(function ($setting) {
            return [$setting->key => $setting->value];
        });

        $services = Service::query()
            ->active()
            ->ordered()
            ->withTranslations($locale)
            ->get();

        $testimonials = \App\Models\Testimonial::query()
            ->active()
            ->ordered()
            ->withTranslations($locale)
            ->get();

        $faqs = \App\Models\Faq::query()
            ->active()
            ->ordered()
            ->withTranslations($locale)
            ->get();

        $blogs = \App\Models\Blog::query()
            ->published()
            ->withTranslations($locale)
            ->orderByDesc('published_at')
            ->orderByDesc('created_at')
            ->limit(3)
            ->get();

        return view('service', compact('services', 'testimonials', 'faqs', 'blogs', 'settings'));
    }

    public function show($slug): View
    {
        $locale = app()->getLocale();

        $service = Service::where('slug', $slug)
            ->withTranslations($locale)
            ->firstOrFail();

        // Global Settings
        $settings = Setting::withTranslations($locale)->get()->mapWithKeys(function ($setting) {
            return [$setting->key => $setting->value];
        });

        // Sidebar Data
        $services = Service::query()
            ->active()
            ->ordered()
            ->withTranslations($locale)
            ->get();

        $recentBlogs = Blog::query()
            ->published()
            ->withTranslations($locale)
            ->orderByDesc('published_at')
            ->orderByDesc('created_at')
            ->limit(3)
            ->get();

        return view('single-service', compact('service', 'services', 'recentBlogs', 'settings'));
    }
}
