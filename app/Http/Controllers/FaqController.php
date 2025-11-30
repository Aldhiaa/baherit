<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\View\View;

use App\Models\Setting;

class FaqController extends Controller
{
    public function index(): View
    {
        $locale = app()->getLocale();

        // Global Settings
        $settings = Setting::withTranslations($locale)->get()->mapWithKeys(function ($setting) {
            return [$setting->key => $setting->value];
        });

        $faqs = Faq::query()
            ->active()
            ->ordered()
            ->withTranslations($locale)
            ->get();

        return view('faq', compact('faqs', 'settings'));
    }
}
