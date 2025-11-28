<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Counter;
use App\Models\Faq;
use App\Models\Page;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\WorkingProcess;
use Illuminate\View\View;

class AboutController extends Controller
{
    public function index(): View
    {
        $locale = app()->getLocale();

        // About page content
        $about = Page::query()
            ->where('slug', 'about')
            ->withTranslations($locale)
            ->first();

        // Services section
        $services = Service::query()
            ->active()
            ->ordered()
            ->withTranslations($locale)
            ->limit(5)
            ->get();

        // Working processes section
        $workingProcesses = WorkingProcess::query()
            ->active()
            ->ordered()
            ->withTranslations($locale)
            ->get();

        // Testimonials/Brand logos section
        $testimonials = Testimonial::query()
            ->active()
            ->ordered()
            ->withTranslations($locale)
            ->get();

        // Counters/Facts section
        $counters = Counter::query()
            ->active()
            ->ordered()
            ->withTranslations($locale)
            ->get();

        // FAQs section
        $faqs = Faq::query()
            ->active()
            ->ordered()
            ->withTranslations($locale)
            ->limit(3)
            ->get();

        return view('about-us', compact('about', 'services', 'workingProcesses', 'testimonials', 'counters', 'faqs'));
    }
}
