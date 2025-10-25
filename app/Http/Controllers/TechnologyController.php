<?php

namespace App\Http\Controllers;

use App\Models\Technology;
use App\Models\TechnologyCategory;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $technologies = Technology::orderBy('sort_order')->get();
        $featuredTechnologies = Technology::where('is_featured', true)->orderBy('sort_order')->get();
        $technologyCategories = TechnologyCategory::active()->ordered()->get();

        return view('technology_stack', compact('technologies', 'featuredTechnologies', 'technologyCategories'));
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
    public function show(Technology $technology)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Technology $technology)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Technology $technology)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Technology $technology)
    {
        //
    }

    /**
     * Get technologies by category
     */
    public function getByCategory($category)
    {
        $technologies = Technology::where('category', $category)->orderBy('sort_order')->get();
        return response()->json($technologies);
    }


}
