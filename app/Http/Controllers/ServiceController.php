<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\View\View;

class ServiceController extends Controller
{
    public function index(): View
    {
        $locale = app()->getLocale();

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

        return view('service', compact('services', 'testimonials', 'faqs', 'blogs'));
    }
}
