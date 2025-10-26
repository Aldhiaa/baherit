<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServicePage;
use Illuminate\Http\Request;

class ServicePageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servicePages = ServicePage::all();
        return view('admin.service-pages.index', compact('servicePages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.service-pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'page_name' => 'required|unique:service_pages',
        ]);

        $servicePage = new ServicePage();
        $servicePage->page_name = $request->page_name;
        $servicePage->is_active = $request->has('is_active');

        // Hero section
        $servicePage->hero_title = [
            'en' => $request->hero_title_en,
            'ar' => $request->hero_title_ar,
        ];
        $servicePage->hero_highlight = [
            'en' => $request->hero_highlight_en,
            'ar' => $request->hero_highlight_ar,
        ];
        $servicePage->hero_description = [
            'en' => $request->hero_description_en,
            'ar' => $request->hero_description_ar,
        ];
        $servicePage->hero_button_primary = [
            'en' => $request->hero_button_primary_en,
            'ar' => $request->hero_button_primary_ar,
        ];
        $servicePage->hero_button_secondary = [
            'en' => $request->hero_button_secondary_en,
            'ar' => $request->hero_button_secondary_ar,
        ];

        // Find section
        $servicePage->find_title = [
            'en' => $request->find_title_en,
            'ar' => $request->find_title_ar,
        ];
        $servicePage->find_description = [
            'en' => $request->find_description_en,
            'ar' => $request->find_description_ar,
        ];
        $servicePage->filter_all = [
            'en' => $request->filter_all_en,
            'ar' => $request->filter_all_ar,
        ];
        $servicePage->filter_development = [
            'en' => $request->filter_development_en,
            'ar' => $request->filter_development_ar,
        ];
        $servicePage->filter_cloud = [
            'en' => $request->filter_cloud_en,
            'ar' => $request->filter_cloud_ar,
        ];
        $servicePage->filter_consulting = [
            'en' => $request->filter_consulting_en,
            'ar' => $request->filter_consulting_ar,
        ];
        $servicePage->reset = [
            'en' => $request->reset_en,
            'ar' => $request->reset_ar,
        ];

        // Technology section
        $servicePage->technology_title = [
            'en' => $request->technology_title_en,
            'ar' => $request->technology_title_ar,
        ];
        $servicePage->technology_description = [
            'en' => $request->technology_description_en,
            'ar' => $request->technology_description_ar,
        ];
        $servicePage->frontend = [
            'en' => $request->frontend_en,
            'ar' => $request->frontend_ar,
        ];
        $servicePage->backend = [
            'en' => $request->backend_en,
            'ar' => $request->backend_ar,
        ];
        $servicePage->database = [
            'en' => $request->database_en,
            'ar' => $request->database_ar,
        ];
        $servicePage->cloud = [
            'en' => $request->cloud_en,
            'ar' => $request->cloud_ar,
        ];
        $servicePage->learn_more = [
            'en' => $request->learn_more_en,
            'ar' => $request->learn_more_ar,
        ];

        // Process section
        $servicePage->process_title = [
            'en' => $request->process_title_en,
            'ar' => $request->process_title_ar,
        ];
        $servicePage->process_description = [
            'en' => $request->process_description_en,
            'ar' => $request->process_description_ar,
        ];
        $servicePage->process_discovery = [
            'en' => $request->process_discovery_en,
            'ar' => $request->process_discovery_ar,
        ];
        $servicePage->process_discovery_desc = [
            'en' => $request->process_discovery_desc_en,
            'ar' => $request->process_discovery_desc_ar,
        ];
        $servicePage->process_design = [
            'en' => $request->process_design_en,
            'ar' => $request->process_design_ar,
        ];
        $servicePage->process_design_desc = [
            'en' => $request->process_design_desc_en,
            'ar' => $request->process_design_desc_ar,
        ];
        $servicePage->process_development = [
            'en' => $request->process_development_en,
            'ar' => $request->process_development_ar,
        ];
        $servicePage->process_development_desc = [
            'en' => $request->process_development_desc_en,
            'ar' => $request->process_development_desc_ar,
        ];
        $servicePage->process_deployment = [
            'en' => $request->process_deployment_en,
            'ar' => $request->process_deployment_ar,
        ];
        $servicePage->process_deployment_desc = [
            'en' => $request->process_deployment_desc_en,
            'ar' => $request->process_deployment_desc_ar,
        ];

        // CTA section
        $servicePage->cta_title = [
            'en' => $request->cta_title_en,
            'ar' => $request->cta_title_ar,
        ];
        $servicePage->cta_description = [
            'en' => $request->cta_description_en,
            'ar' => $request->cta_description_ar,
        ];
        $servicePage->cta_button_primary = [
            'en' => $request->cta_button_primary_en,
            'ar' => $request->cta_button_primary_ar,
        ];
        $servicePage->cta_button_secondary = [
            'en' => $request->cta_button_secondary_en,
            'ar' => $request->cta_button_secondary_ar,
        ];

        $servicePage->save();

        return redirect()->route('admin.service-pages.index')
            ->with('success', 'Service page created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(ServicePage $servicePage)
    {
        return view('admin.service-pages.show', compact('servicePage'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ServicePage $servicePage)
    {
        return view('admin.service-pages.edit', compact('servicePage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ServicePage $servicePage)
    {
        $request->validate([
            'page_name' => 'required|unique:service_pages,page_name,' . $servicePage->id,
        ]);

        $servicePage->page_name = $request->page_name;
        $servicePage->is_active = $request->has('is_active');

        // Hero section
        $servicePage->hero_title = [
            'en' => $request->hero_title_en,
            'ar' => $request->hero_title_ar,
        ];
        $servicePage->hero_highlight = [
            'en' => $request->hero_highlight_en,
            'ar' => $request->hero_highlight_ar,
        ];
        $servicePage->hero_description = [
            'en' => $request->hero_description_en,
            'ar' => $request->hero_description_ar,
        ];
        $servicePage->hero_button_primary = [
            'en' => $request->hero_button_primary_en,
            'ar' => $request->hero_button_primary_ar,
        ];
        $servicePage->hero_button_secondary = [
            'en' => $request->hero_button_secondary_en,
            'ar' => $request->hero_button_secondary_ar,
        ];

        // Find section
        $servicePage->find_title = [
            'en' => $request->find_title_en,
            'ar' => $request->find_title_ar,
        ];
        $servicePage->find_description = [
            'en' => $request->find_description_en,
            'ar' => $request->find_description_ar,
        ];
        $servicePage->filter_all = [
            'en' => $request->filter_all_en,
            'ar' => $request->filter_all_ar,
        ];
        $servicePage->filter_development = [
            'en' => $request->filter_development_en,
            'ar' => $request->filter_development_ar,
        ];
        $servicePage->filter_cloud = [
            'en' => $request->filter_cloud_en,
            'ar' => $request->filter_cloud_ar,
        ];
        $servicePage->filter_consulting = [
            'en' => $request->filter_consulting_en,
            'ar' => $request->filter_consulting_ar,
        ];
        $servicePage->reset = [
            'en' => $request->reset_en,
            'ar' => $request->reset_ar,
        ];

        // Technology section
        $servicePage->technology_title = [
            'en' => $request->technology_title_en,
            'ar' => $request->technology_title_ar,
        ];
        $servicePage->technology_description = [
            'en' => $request->technology_description_en,
            'ar' => $request->technology_description_ar,
        ];
        $servicePage->frontend = [
            'en' => $request->frontend_en,
            'ar' => $request->frontend_ar,
        ];
        $servicePage->backend = [
            'en' => $request->backend_en,
            'ar' => $request->backend_ar,
        ];
        $servicePage->database = [
            'en' => $request->database_en,
            'ar' => $request->database_ar,
        ];
        $servicePage->cloud = [
            'en' => $request->cloud_en,
            'ar' => $request->cloud_ar,
        ];
        $servicePage->learn_more = [
            'en' => $request->learn_more_en,
            'ar' => $request->learn_more_ar,
        ];

        // Process section
        $servicePage->process_title = [
            'en' => $request->process_title_en,
            'ar' => $request->process_title_ar,
        ];
        $servicePage->process_description = [
            'en' => $request->process_description_en,
            'ar' => $request->process_description_ar,
        ];
        $servicePage->process_discovery = [
            'en' => $request->process_discovery_en,
            'ar' => $request->process_discovery_ar,
        ];
        $servicePage->process_discovery_desc = [
            'en' => $request->process_discovery_desc_en,
            'ar' => $request->process_discovery_desc_ar,
        ];
        $servicePage->process_design = [
            'en' => $request->process_design_en,
            'ar' => $request->process_design_ar,
        ];
        $servicePage->process_design_desc = [
            'en' => $request->process_design_desc_en,
            'ar' => $request->process_design_desc_ar,
        ];
        $servicePage->process_development = [
            'en' => $request->process_development_en,
            'ar' => $request->process_development_ar,
        ];
        $servicePage->process_development_desc = [
            'en' => $request->process_development_desc_en,
            'ar' => $request->process_development_desc_ar,
        ];
        $servicePage->process_deployment = [
            'en' => $request->process_deployment_en,
            'ar' => $request->process_deployment_ar,
        ];
        $servicePage->process_deployment_desc = [
            'en' => $request->process_deployment_desc_en,
            'ar' => $request->process_deployment_desc_ar,
        ];

        // CTA section
        $servicePage->cta_title = [
            'en' => $request->cta_title_en,
            'ar' => $request->cta_title_ar,
        ];
        $servicePage->cta_description = [
            'en' => $request->cta_description_en,
            'ar' => $request->cta_description_ar,
        ];
        $servicePage->cta_button_primary = [
            'en' => $request->cta_button_primary_en,
            'ar' => $request->cta_button_primary_ar,
        ];
        $servicePage->cta_button_secondary = [
            'en' => $request->cta_button_secondary_en,
            'ar' => $request->cta_button_secondary_ar,
        ];

        $servicePage->save();

        return redirect()->route('admin.service-pages.index')
            ->with('success', 'Service page updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ServicePage $servicePage)
    {
        $servicePage->delete();

        return redirect()->route('admin.service-pages.index')
            ->with('success', 'Service page deleted successfully.');
    }
}
