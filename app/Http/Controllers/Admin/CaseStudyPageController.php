<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CaseStudyPage;
use Illuminate\Http\Request;

class CaseStudyPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $caseStudyPages = CaseStudyPage::all();
        return view('admin.case-study-pages.index', compact('caseStudyPages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.case-study-pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'page_name' => 'required|unique:case_study_pages',
        ]);

        $caseStudyPage = new CaseStudyPage();
        $caseStudyPage->page_name = $request->page_name;
        $caseStudyPage->is_active = $request->has('is_active');

        // Hero section
        $caseStudyPage->hero_title = [
            'en' => $request->hero_title_en,
            'ar' => $request->hero_title_ar,
        ];
        $caseStudyPage->hero_description = [
            'en' => $request->hero_description_en,
            'ar' => $request->hero_description_ar,
        ];
        $caseStudyPage->hero_button_primary = [
            'en' => $request->hero_button_primary_en,
            'ar' => $request->hero_button_primary_ar,
        ];
        $caseStudyPage->hero_button_secondary = [
            'en' => $request->hero_button_secondary_en,
            'ar' => $request->hero_button_secondary_ar,
        ];

        // Search and filter section
        $caseStudyPage->search_placeholder = [
            'en' => $request->search_placeholder_en,
            'ar' => $request->search_placeholder_ar,
        ];
        $caseStudyPage->filter_all = [
            'en' => $request->filter_all_en,
            'ar' => $request->filter_all_ar,
        ];
        $caseStudyPage->filter_healthcare = [
            'en' => $request->filter_healthcare_en,
            'ar' => $request->filter_healthcare_ar,
        ];
        $caseStudyPage->filter_finance = [
            'en' => $request->filter_finance_en,
            'ar' => $request->filter_finance_ar,
        ];
        $caseStudyPage->filter_manufacturing = [
            'en' => $request->filter_manufacturing_en,
            'ar' => $request->filter_manufacturing_ar,
        ];
        $caseStudyPage->filter_retail = [
            'en' => $request->filter_retail_en,
            'ar' => $request->filter_retail_ar,
        ];
        $caseStudyPage->reset = [
            'en' => $request->reset_en,
            'ar' => $request->reset_ar,
        ];

        // Featured section
        $caseStudyPage->featured_title = [
            'en' => $request->featured_title_en,
            'ar' => $request->featured_title_ar,
        ];
        $caseStudyPage->featured_subtitle = [
            'en' => $request->featured_subtitle_en,
            'ar' => $request->featured_subtitle_ar,
        ];
        $caseStudyPage->completed = [
            'en' => $request->completed_en,
            'ar' => $request->completed_ar,
        ];
        $caseStudyPage->view_full_case_study = [
            'en' => $request->view_full_case_study_en,
            'ar' => $request->view_full_case_study_ar,
        ];
        $caseStudyPage->start_similar_project = [
            'en' => $request->start_similar_project_en,
            'ar' => $request->start_similar_project_ar,
        ];

        // Grid section
        $caseStudyPage->grid_title = [
            'en' => $request->grid_title_en,
            'ar' => $request->grid_title_ar,
        ];
        $caseStudyPage->grid_subtitle = [
            'en' => $request->grid_subtitle_en,
            'ar' => $request->grid_subtitle_ar,
        ];
        $caseStudyPage->view_case_study = [
            'en' => $request->view_case_study_en,
            'ar' => $request->view_case_study_ar,
        ];
        $caseStudyPage->load_more = [
            'en' => $request->load_more_en,
            'ar' => $request->load_more_ar,
        ];

        // Metrics section
        $caseStudyPage->metrics_title = [
            'en' => $request->metrics_title_en,
            'ar' => $request->metrics_title_ar,
        ];
        $caseStudyPage->metrics_subtitle = [
            'en' => $request->metrics_subtitle_en,
            'ar' => $request->metrics_subtitle_ar,
        ];
        $caseStudyPage->projects_delivered = [
            'en' => $request->projects_delivered_en,
            'ar' => $request->projects_delivered_ar,
        ];
        $caseStudyPage->client_satisfaction = [
            'en' => $request->client_satisfaction_en,
            'ar' => $request->client_satisfaction_ar,
        ];
        $caseStudyPage->avg_roi = [
            'en' => $request->avg_roi_en,
            'ar' => $request->avg_roi_ar,
        ];
        $caseStudyPage->years_experience = [
            'en' => $request->years_experience_en,
            'ar' => $request->years_experience_ar,
        ];

        // CTA section
        $caseStudyPage->cta_title = [
            'en' => $request->cta_title_en,
            'ar' => $request->cta_title_ar,
        ];
        $caseStudyPage->cta_description = [
            'en' => $request->cta_description_en,
            'ar' => $request->cta_description_ar,
        ];
        $caseStudyPage->cta_button_primary = [
            'en' => $request->cta_button_primary_en,
            'ar' => $request->cta_button_primary_ar,
        ];
        $caseStudyPage->cta_button_secondary = [
            'en' => $request->cta_button_secondary_en,
            'ar' => $request->cta_button_secondary_ar,
        ];

        $caseStudyPage->save();

        return redirect()->route('admin.case-study-pages.index')
            ->with('success', 'Case study page created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(CaseStudyPage $caseStudyPage)
    {
        return view('admin.case-study-pages.show', compact('caseStudyPage'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CaseStudyPage $caseStudyPage)
    {
        return view('admin.case-study-pages.edit', compact('caseStudyPage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CaseStudyPage $caseStudyPage)
    {
        $request->validate([
            'page_name' => 'required|unique:case_study_pages,page_name,' . $caseStudyPage->id,
        ]);

        $caseStudyPage->page_name = $request->page_name;
        $caseStudyPage->is_active = $request->has('is_active');

        // Hero section
        $caseStudyPage->hero_title = [
            'en' => $request->hero_title_en,
            'ar' => $request->hero_title_ar,
        ];
        $caseStudyPage->hero_description = [
            'en' => $request->hero_description_en,
            'ar' => $request->hero_description_ar,
        ];
        $caseStudyPage->hero_button_primary = [
            'en' => $request->hero_button_primary_en,
            'ar' => $request->hero_button_primary_ar,
        ];
        $caseStudyPage->hero_button_secondary = [
            'en' => $request->hero_button_secondary_en,
            'ar' => $request->hero_button_secondary_ar,
        ];

        // Search and filter section
        $caseStudyPage->search_placeholder = [
            'en' => $request->search_placeholder_en,
            'ar' => $request->search_placeholder_ar,
        ];
        $caseStudyPage->filter_all = [
            'en' => $request->filter_all_en,
            'ar' => $request->filter_all_ar,
        ];
        $caseStudyPage->filter_healthcare = [
            'en' => $request->filter_healthcare_en,
            'ar' => $request->filter_healthcare_ar,
        ];
        $caseStudyPage->filter_finance = [
            'en' => $request->filter_finance_en,
            'ar' => $request->filter_finance_ar,
        ];
        $caseStudyPage->filter_manufacturing = [
            'en' => $request->filter_manufacturing_en,
            'ar' => $request->filter_manufacturing_ar,
        ];
        $caseStudyPage->filter_retail = [
            'en' => $request->filter_retail_en,
            'ar' => $request->filter_retail_ar,
        ];
        $caseStudyPage->reset = [
            'en' => $request->reset_en,
            'ar' => $request->reset_ar,
        ];

        // Featured section
        $caseStudyPage->featured_title = [
            'en' => $request->featured_title_en,
            'ar' => $request->featured_title_ar,
        ];
        $caseStudyPage->featured_subtitle = [
            'en' => $request->featured_subtitle_en,
            'ar' => $request->featured_subtitle_ar,
        ];
        $caseStudyPage->completed = [
            'en' => $request->completed_en,
            'ar' => $request->completed_ar,
        ];
        $caseStudyPage->view_full_case_study = [
            'en' => $request->view_full_case_study_en,
            'ar' => $request->view_full_case_study_ar,
        ];
        $caseStudyPage->start_similar_project = [
            'en' => $request->start_similar_project_en,
            'ar' => $request->start_similar_project_ar,
        ];

        // Grid section
        $caseStudyPage->grid_title = [
            'en' => $request->grid_title_en,
            'ar' => $request->grid_title_ar,
        ];
        $caseStudyPage->grid_subtitle = [
            'en' => $request->grid_subtitle_en,
            'ar' => $request->grid_subtitle_ar,
        ];
        $caseStudyPage->view_case_study = [
            'en' => $request->view_case_study_en,
            'ar' => $request->view_case_study_ar,
        ];
        $caseStudyPage->load_more = [
            'en' => $request->load_more_en,
            'ar' => $request->load_more_ar,
        ];

        // Metrics section
        $caseStudyPage->metrics_title = [
            'en' => $request->metrics_title_en,
            'ar' => $request->metrics_title_ar,
        ];
        $caseStudyPage->metrics_subtitle = [
            'en' => $request->metrics_subtitle_en,
            'ar' => $request->metrics_subtitle_ar,
        ];
        $caseStudyPage->projects_delivered = [
            'en' => $request->projects_delivered_en,
            'ar' => $request->projects_delivered_ar,
        ];
        $caseStudyPage->client_satisfaction = [
            'en' => $request->client_satisfaction_en,
            'ar' => $request->client_satisfaction_ar,
        ];
        $caseStudyPage->avg_roi = [
            'en' => $request->avg_roi_en,
            'ar' => $request->avg_roi_ar,
        ];
        $caseStudyPage->years_experience = [
            'en' => $request->years_experience_en,
            'ar' => $request->years_experience_ar,
        ];

        // CTA section
        $caseStudyPage->cta_title = [
            'en' => $request->cta_title_en,
            'ar' => $request->cta_title_ar,
        ];
        $caseStudyPage->cta_description = [
            'en' => $request->cta_description_en,
            'ar' => $request->cta_description_ar,
        ];
        $caseStudyPage->cta_button_primary = [
            'en' => $request->cta_button_primary_en,
            'ar' => $request->cta_button_primary_ar,
        ];
        $caseStudyPage->cta_button_secondary = [
            'en' => $request->cta_button_secondary_en,
            'ar' => $request->cta_button_secondary_ar,
        ];

        $caseStudyPage->save();

        return redirect()->route('admin.case-study-pages.index')
            ->with('success', 'Case study page updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CaseStudyPage $caseStudyPage)
    {
        $caseStudyPage->delete();

        return redirect()->route('admin.case-study-pages.index')
            ->with('success', 'Case study page deleted successfully.');
    }
}
