<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\View\View;

class FaqController extends Controller
{
    public function index(): View
    {
        $locale = app()->getLocale();

        $faqs = Faq::query()
            ->active()
            ->ordered()
            ->withTranslations($locale)
            ->get();

        return view('faq', compact('faqs'));
    }
}
