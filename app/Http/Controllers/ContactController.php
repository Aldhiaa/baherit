<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Faq;
use Illuminate\Http\Request;

use App\Models\Setting;

class ContactController extends Controller
{
    public function index()
    {
        $locale = app()->getLocale();

        // Global Settings
        $settings = Setting::withTranslations($locale)->get()->mapWithKeys(function ($setting) {
            return [$setting->key => $setting->value];
        });

        // Fetch services for the contact form dropdown
        $services = Service::active()
            ->withTranslations()
            ->orderBy('display_order')
            ->get();

        // Fetch FAQs for the contact page
        $faqs = Faq::active()
            ->withTranslations()
            ->orderBy('display_order')
            ->take(6) // Limit to 6 FAQs for contact page
            ->get();

        return view('contact-us', compact('services', 'faqs', 'settings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'service_id' => 'nullable|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        // Here you can handle the contact form submission
        // For example: save to database, send email, etc.

        // For now, just redirect back with success message
        return redirect()->back()->with('success', 'Thank you for your message! We will get back to you soon.');
    }
}
