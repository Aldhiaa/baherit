<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Counter;
use App\Models\Page;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $locale = app()->getLocale();

        $hero = Banner::query()
            ->where('page_context', 'home-hero')
            ->active()
            ->ordered()
            ->withTranslations($locale)
            ->first();

        $about = Page::query()
            ->where('slug', 'about')
            ->withTranslations($locale)
            ->first();

        $services = Service::query()
            ->active()
            ->ordered()
            ->withTranslations($locale)
            ->limit(8)
            ->get();

        $counters = Counter::query()
            ->active()
            ->ordered()
            ->withTranslations($locale)
            ->get();

        $testimonials = Testimonial::query()
            ->active()
            ->ordered()
            ->withTranslations($locale)
            ->get();

        return view('index', compact('hero', 'about', 'services', 'counters', 'testimonials'));
    }
    
}
