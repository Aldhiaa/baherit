<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use App\Models\Service;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ServiceController extends AdminController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::orderBy('id', 'desc')->get();
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = [
            'development' => 'Development',
            'cloud' => 'Cloud Services',
            'consulting' => 'Consulting',
            'design' => 'Design',
            'support' => 'Support & Maintenance',
        ];
        
        return view('admin.services.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title_en' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
            'description_en' => 'required|string',
            'description_ar' => 'required|string',
            'category' => 'required|string|max:255',
            'icon' => 'nullable|string|max:255',
            'features' => 'nullable|string',
            'timeline' => 'nullable|string|max:255',
        ]);

        // Process features if provided
        $features = null;
        if ($request->filled('features')) {
            $featuresArray = array_filter(array_map('trim', explode("\n", $request->features)));
            $features = !empty($featuresArray) ? $featuresArray : null;
        }

        // Create service with multilingual data
        Service::create([
            'title' => [
                'en' => $request->title_en,
                'ar' => $request->title_ar,
            ],
            'description' => [
                'en' => $request->description_en,
                'ar' => $request->description_ar,
            ],
            'category' => $request->category,
            'icon' => $request->icon,
            'features' => $features,
            'timeline' => $request->timeline,
        ]);

        return redirect()->route('admin.services.index')
            ->with('success', 'Service created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return view('admin.services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        $categories = [
            'development' => 'Development',
            'cloud' => 'Cloud Services',
            'consulting' => 'Consulting',
            'design' => 'Design',
            'support' => 'Support & Maintenance',
        ];
        
        // Get translations for each language
        $translations = [
            'en' => [
                'title' => $service->getTranslation('title', 'en'),
                'description' => $service->getTranslation('description', 'en'),
            ],
            'ar' => [
                'title' => $service->getTranslation('title', 'ar'),
                'description' => $service->getTranslation('description', 'ar'),
            ],
        ];
        
        // Format features for display
        $featuresString = '';
        if (is_array($service->features) && count($service->features) > 0) {
            $featuresString = implode("\n", $service->features);
        }
        
        return view('admin.services.edit', compact('service', 'categories', 'translations', 'featuresString'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title_en' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
            'description_en' => 'required|string',
            'description_ar' => 'required|string',
            'category' => 'required|string|max:255',
            'icon' => 'nullable|string|max:255',
            'features' => 'nullable|string',
            'timeline' => 'nullable|string|max:255',
        ]);

        // Process features if provided
        $features = null;
        if ($request->filled('features')) {
            $featuresArray = array_filter(array_map('trim', explode("\n", $request->features)));
            $features = !empty($featuresArray) ? $featuresArray : null;
        }

        // Update service with multilingual data
        $service->update([
            'title' => [
                'en' => $request->title_en,
                'ar' => $request->title_ar,
            ],
            'description' => [
                'en' => $request->description_en,
                'ar' => $request->description_ar,
            ],
            'category' => $request->category,
            'icon' => $request->icon,
            'features' => $features,
            'timeline' => $request->timeline,
        ]);

        return redirect()->route('admin.services.index')
            ->with('success', 'Service updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();

        return redirect()->route('admin.services.index')
            ->with('success', 'Service deleted successfully.');
    }
}