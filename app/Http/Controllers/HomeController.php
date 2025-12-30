<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Blog;
use App\Models\Counter;
use App\Models\Page;
use App\Models\Project;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Customer;
use App\Models\WorkingProcess;
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

        $projects = Project::query()
            ->published()
            ->withTranslations($locale)
            ->orderByDesc('is_featured')
            ->orderByDesc('completion_date')
            ->limit(6)
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

        $customers = Customer::query()
            ->active()
            ->ordered()
            ->get();

        $blogs = Blog::query()
            ->published()
            ->withTranslations($locale)
            ->orderByDesc('published_at')
            ->orderByDesc('created_at')
            ->limit(3)
            ->get();

        $workingProcesses = WorkingProcess::query()
            ->active()
            ->ordered()
            ->withTranslations($locale)
            ->get();

        $faqs = \App\Models\Faq::query()
            ->active()
            ->ordered()
            ->withTranslations($locale)
            ->limit(5)
            ->get();

        $settingsCollection = \App\Models\Setting::withTranslations($locale)->get();
        $settings = $settingsCollection->mapWithKeys(function ($setting) {
            $value = $setting->is_translatable ? optional($setting->translation)->value : $setting->value;
            return [$setting->key => $value];
        });

        return view('index', compact('hero', 'about', 'services', 'projects', 'counters', 'testimonials', 'customers', 'blogs', 'workingProcesses', 'faqs', 'settings'));
    }
    
}
