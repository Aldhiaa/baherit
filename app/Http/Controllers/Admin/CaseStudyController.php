<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use App\Models\CaseStudy;
use Illuminate\Http\Request;

class CaseStudyController extends AdminController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $caseStudies = CaseStudy::all();
        return view('admin.case-studies.index', compact('caseStudies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.case-studies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'title_en' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
            'industry' => 'required|string|max:255',
            'description_en' => 'required|string',
            'description_ar' => 'required|string',
            'challenge_en' => 'required|string',
            'challenge_ar' => 'required|string',
            'solution_en' => 'required|string',
            'solution_ar' => 'required|string',
            'results_en' => 'required|string',
            'results_ar' => 'required|string',
            'metrics' => 'nullable|array',
            'metrics.*.label_en' => 'required_with:metrics|string|max:255',
            'metrics.*.label_ar' => 'required_with:metrics|string|max:255',
            'metrics.*.value' => 'required_with:metrics|string|max:255',
            'image_url' => 'nullable|string|max:255',
            'is_featured' => 'boolean',
            'completed_at' => 'nullable|date',
        ]);

        // Prepare multilingual data
        $data = [
            'title' => [
                'en' => $validatedData['title_en'],
                'ar' => $validatedData['title_ar'],
            ],
            'industry' => $validatedData['industry'],
            'description' => [
                'en' => $validatedData['description_en'],
                'ar' => $validatedData['description_ar'],
            ],
            'challenge' => [
                'en' => $validatedData['challenge_en'],
                'ar' => $validatedData['challenge_ar'],
            ],
            'solution' => [
                'en' => $validatedData['solution_en'],
                'ar' => $validatedData['solution_ar'],
            ],
            'results' => [
                'en' => $validatedData['results_en'],
                'ar' => $validatedData['results_ar'],
            ],
            'image_url' => $validatedData['image_url'] ?? null,
            'is_featured' => $validatedData['is_featured'] ?? false,
            'completed_at' => $validatedData['completed_at'] ?? null,
        ];

        // Process metrics with multilingual support
        if (isset($validatedData['metrics'])) {
            $metrics = [];
            foreach ($validatedData['metrics'] as $metric) {
                if (!empty($metric['label_en']) && !empty($metric['label_ar']) && !empty($metric['value'])) {
                    $metrics[] = [
                        'label' => [
                            'en' => $metric['label_en'],
                            'ar' => $metric['label_ar'],
                        ],
                        'value' => $metric['value'],
                    ];
                }
            }
            $data['metrics'] = $metrics;
        }

        CaseStudy::create($data);

        return redirect()->route('admin.case-studies.index')
            ->with('success', 'Case study created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(CaseStudy $caseStudy)
    {
        return view('admin.case-studies.show', compact('caseStudy'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CaseStudy $caseStudy)
    {
        return view('admin.case-studies.edit', compact('caseStudy'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CaseStudy $caseStudy)
    {
        // Validate the request
        $validatedData = $request->validate([
            'title_en' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
            'industry' => 'required|string|max:255',
            'description_en' => 'required|string',
            'description_ar' => 'required|string',
            'challenge_en' => 'required|string',
            'challenge_ar' => 'required|string',
            'solution_en' => 'required|string',
            'solution_ar' => 'required|string',
            'results_en' => 'required|string',
            'results_ar' => 'required|string',
            'metrics' => 'nullable|array',
            'metrics.*.label_en' => 'required_with:metrics|string|max:255',
            'metrics.*.label_ar' => 'required_with:metrics|string|max:255',
            'metrics.*.value' => 'required_with:metrics|string|max:255',
            'image_url' => 'nullable|string|max:255',
            'is_featured' => 'boolean',
            'completed_at' => 'nullable|date',
        ]);

        // Prepare multilingual data
        $data = [
            'title' => [
                'en' => $validatedData['title_en'],
                'ar' => $validatedData['title_ar'],
            ],
            'industry' => $validatedData['industry'],
            'description' => [
                'en' => $validatedData['description_en'],
                'ar' => $validatedData['description_ar'],
            ],
            'challenge' => [
                'en' => $validatedData['challenge_en'],
                'ar' => $validatedData['challenge_ar'],
            ],
            'solution' => [
                'en' => $validatedData['solution_en'],
                'ar' => $validatedData['solution_ar'],
            ],
            'results' => [
                'en' => $validatedData['results_en'],
                'ar' => $validatedData['results_ar'],
            ],
            'image_url' => $validatedData['image_url'] ?? null,
            'is_featured' => $validatedData['is_featured'] ?? false,
            'completed_at' => $validatedData['completed_at'] ?? null,
        ];

        // Process metrics with multilingual support
        if (isset($validatedData['metrics'])) {
            $metrics = [];
            foreach ($validatedData['metrics'] as $metric) {
                if (!empty($metric['label_en']) && !empty($metric['label_ar']) && !empty($metric['value'])) {
                    $metrics[] = [
                        'label' => [
                            'en' => $metric['label_en'],
                            'ar' => $metric['label_ar'],
                        ],
                        'value' => $metric['value'],
                    ];
                }
            }
            $data['metrics'] = $metrics;
        }

        $caseStudy->update($data);

        return redirect()->route('admin.case-studies.index')
            ->with('success', 'Case study updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CaseStudy $caseStudy)
    {
        $caseStudy->delete();

        return redirect()->route('admin.case-studies.index')
            ->with('success', 'Case study deleted successfully.');
    }
}
