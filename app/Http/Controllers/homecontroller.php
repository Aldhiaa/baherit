<?php

namespace App\Http\Controllers;

use Modules\Faq\Models\Faq;
use Illuminate\Http\Request;
use Modules\About\Models\About;
use Modules\Projects\Models\Project;
use Modules\Services\Models\Service;
use Modules\Settings\Models\Setting;
use Illuminate\Support\Facades\Cache;

class homecontroller extends Controller
{
    public function index()
    {
        // Cache settings for performance
        $settings = Cache::rememberForever('site_settings', function () {
            return Setting::all()->pluck('value', 'key'); // Simple pluck, assumes non-image text values
            // Or use the helper if defined and handling images:
            // return Setting::all()->mapWithKeys(fn($s) => [$s->key => Setting::getValue($s->key)]);
        });

        $services = Service::where('is_active', true)
            // ->where('is_featured', true) // Uncomment if you want only featured
            // ->orderBy('display_order')
            ->take(8) // Limit as per your HTML
            ->get();

        $projects = Project::where('is_active', true)
            // ->where('is_featured', true) // Uncomment if you want only featured
            // ->orderBy('display_order')
            ->take(3) // Your HTML seems to show 3 sections
            ->get();

        $faqs = Faq::
            // ->orderBy('display_order')
            take(8) // Limit as per your HTML
            ->get();

            

        $abouts = About::orderBy('order')->get();

        // $aboutMain = AboutSection::where('is_active', true)
        //     ->where('type', 'main_content') // Get the main description section
        //     // ->orderBy('display_order')
        //     ->first();


        return view('home.index', compact( // Assuming you use welcome.blade.php for home
            'settings',
            'services',
            'projects',
            'faqs',
            'abouts',
            // 'aboutMain'
        ));
    }

    public function about()
    {
        return view('home.about');
    }

    public function services()
    {
        return view('home.services');
    }

    public function contact()
    {
        return view('home.contact');
    }
}
