<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WorkingProcess;
use App\Models\WorkingProcessTranslation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class WorkingProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = WorkingProcess::with(['translations']);

        // Search functionality
        if ($request->filled('search')) {
            $search = $request->search;
            $query->whereHas('translations', function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%");
            });
        }

        // Filter by status
        if ($request->filled('status')) {
            $query->where('is_active', $request->status);
        }

        $workingProcesses = $query->ordered()->paginate(15);

        return view('admin.working-processes.index', compact('workingProcesses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.working-processes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'icon_path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'number_tag_path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'display_order' => 'nullable|integer|min:0',
            'is_active' => 'boolean',
            
            // English translations
            'title_en' => 'required|string|max:255',
            'description_en' => 'required|string',
            
            // Arabic translations
            'title_ar' => 'required|string|max:255',
            'description_ar' => 'required|string',
        ]);

        DB::beginTransaction();
        try {
            // Handle icon upload
            $iconPath = null;
            if ($request->hasFile('icon_path')) {
                $iconPath = $request->file('icon_path')->store('working-processes/icons', 'public');
            }

            // Handle number tag upload
            $numberTagPath = null;
            if ($request->hasFile('number_tag_path')) {
                $numberTagPath = $request->file('number_tag_path')->store('working-processes/tags', 'public');
            }

            // Create working process
            $workingProcess = WorkingProcess::create([
                'icon_path' => $iconPath,
                'number_tag_path' => $numberTagPath,
                'display_order' => $validated['display_order'] ?? 0,
                'is_active' => $request->boolean('is_active', true),
            ]);

            // Create English translation
            WorkingProcessTranslation::create([
                'working_process_id' => $workingProcess->id,
                'locale' => 'en',
                'title' => $validated['title_en'],
                'description' => $validated['description_en'],
            ]);

            // Create Arabic translation
            WorkingProcessTranslation::create([
                'working_process_id' => $workingProcess->id,
                'locale' => 'ar',
                'title' => $validated['title_ar'],
                'description' => $validated['description_ar'],
            ]);

            DB::commit();

            return redirect()->route('admin.working-processes.index')
                ->with('success', 'Working Process created successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            
            // Delete uploaded files if they exist
            if (isset($iconPath)) {
                Storage::disk('public')->delete($iconPath);
            }
            if (isset($numberTagPath)) {
                Storage::disk('public')->delete($numberTagPath);
            }

            return back()->withInput()
                ->with('error', 'Failed to create working process: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(WorkingProcess $workingProcess)
    {
        $workingProcess->load('translations');
        return view('admin.working-processes.show', compact('workingProcess'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WorkingProcess $workingProcess)
    {
        $workingProcess->load('translations');
        
        // Get translations by locale
        $enTranslation = $workingProcess->translations->where('locale', 'en')->first();
        $arTranslation = $workingProcess->translations->where('locale', 'ar')->first();

        return view('admin.working-processes.edit', compact('workingProcess', 'enTranslation', 'arTranslation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, WorkingProcess $workingProcess)
    {
        $validated = $request->validate([
            'icon_path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'number_tag_path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'display_order' => 'nullable|integer|min:0',
            'is_active' => 'boolean',
            
            // English translations
            'title_en' => 'required|string|max:255',
            'description_en' => 'required|string',
            
            // Arabic translations
            'title_ar' => 'required|string|max:255',
            'description_ar' => 'required|string',
        ]);

        DB::beginTransaction();
        try {
            $updateData = [
                'display_order' => $validated['display_order'] ?? 0,
                'is_active' => $request->boolean('is_active', true),
            ];

            // Handle icon upload
            if ($request->hasFile('icon_path')) {
                // Delete old icon
                if ($workingProcess->icon_path) {
                    Storage::disk('public')->delete($workingProcess->icon_path);
                }
                $updateData['icon_path'] = $request->file('icon_path')->store('working-processes/icons', 'public');
            }

            // Handle number tag upload
            if ($request->hasFile('number_tag_path')) {
                // Delete old number tag
                if ($workingProcess->number_tag_path) {
                    Storage::disk('public')->delete($workingProcess->number_tag_path);
                }
                $updateData['number_tag_path'] = $request->file('number_tag_path')->store('working-processes/tags', 'public');
            }

            // Update working process
            $workingProcess->update($updateData);

            // Update English translation
            $workingProcess->translations()->updateOrCreate(
                ['locale' => 'en'],
                [
                    'title' => $validated['title_en'],
                    'description' => $validated['description_en'],
                ]
            );

            // Update Arabic translation
            $workingProcess->translations()->updateOrCreate(
                ['locale' => 'ar'],
                [
                    'title' => $validated['title_ar'],
                    'description' => $validated['description_ar'],
                ]
            );

            DB::commit();

            return redirect()->route('admin.working-processes.index')
                ->with('success', 'Working Process updated successfully!');
        } catch (\Exception $e) {
            DB::rollBack();

            return back()->withInput()
                ->with('error', 'Failed to update working process: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WorkingProcess $workingProcess)
    {
        try {
            // Delete associated files
            if ($workingProcess->icon_path) {
                Storage::disk('public')->delete($workingProcess->icon_path);
            }
            if ($workingProcess->number_tag_path) {
                Storage::disk('public')->delete($workingProcess->number_tag_path);
            }

            $workingProcess->delete();

            return redirect()->route('admin.working-processes.index')
                ->with('success', 'Working Process deleted successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to delete working process: ' . $e->getMessage());
        }
    }
}
