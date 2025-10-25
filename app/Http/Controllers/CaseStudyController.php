<?php

namespace App\Http\Controllers;

use App\Models\CaseStudy;
use Illuminate\Http\Request;

class CaseStudyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $caseStudies = CaseStudy::all();
        $featuredCaseStudy = CaseStudy::where('is_featured', true)->first();
        return view('case_studies', compact('caseStudies', 'featuredCaseStudy'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CaseStudy $caseStudy)
    {
        return view('case_study_detail', compact('caseStudy'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CaseStudy $caseStudy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CaseStudy $caseStudy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CaseStudy $caseStudy)
    {
        //
    }

    /**
     * Get case studies by industry
     */
    public function getByIndustry($industry)
    {
        $caseStudies = CaseStudy::where('industry', $industry)->get();
        return response()->json($caseStudies);
    }
}
