<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceTranslation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Service::with(['translations']);

        // Search functionality
        if ($request->filled('search')) {
            $search = $request->search;
            $query->whereHas('translations', function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('short_description', 'like', "%{$search}%");
            });
        }

        // Filter by status
        if ($request->filled('status')) {
            $query->where('is_active', $request->status);
        }

        $services = $query->ordered()->paginate(15);

        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'slug' => 'required|string|unique:services,slug|max:255',
            'icon_path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'display_order' => 'nullable|integer|min:0',
            'is_featured' => 'boolean',
            'is_active' => 'boolean',
            
            // English translations
            'name_en' => 'required|string|max:255',
            'short_description_en' => 'required|string|max:500',
            'long_description_en' => 'nullable|string',
            
            // Arabic translations
            'name_ar' => 'required|string|max:255',
            'short_description_ar' => 'required|string|max:500',
            'long_description_ar' => 'nullable|string',
        ]);

        DB::beginTransaction();
        try {
            // Handle icon upload
            $iconPath = null;
            if ($request->hasFile('icon_path')) {
                $iconPath = $request->file('icon_path')->store('services/icons', 'public');
            }

            // Create service
            $service = Service::create([
                'slug' => $validated['slug'],
                'icon_path' => $iconPath,
                'display_order' => $validated['display_order'] ?? 0,
                'is_featured' => $request->boolean('is_featured'),
                'is_active' => $request->boolean('is_active', true),
            ]);

            // Create English translation
            ServiceTranslation::create([
                'service_id' => $service->id,
                'locale' => 'en',
                'name' => $validated['name_en'],
                'short_description' => $validated['short_description_en'],
                'long_description' => $validated['long_description_en'],
            ]);

            // Create Arabic translation
            ServiceTranslation::create([
                'service_id' => $service->id,
                'locale' => 'ar',
                'name' => $validated['name_ar'],
                'short_description' => $validated['short_description_ar'],
                'long_description' => $validated['long_description_ar'],
            ]);

            DB::commit();

            return redirect()->route('admin.services.index')
                ->with('success', 'Service created successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            
            // Delete uploaded icon if exists
            if (isset($iconPath)) {
                Storage::disk('public')->delete($iconPath);
            }

            return back()->withInput()
                ->with('error', 'Failed to create service: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        $service->load('translations');
        return view('admin.services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        $service->load('translations');
        
        // Get translations by locale
        $enTranslation = $service->translations->where('locale', 'en')->first();
        $arTranslation = $service->translations->where('locale', 'ar')->first();

        return view('admin.services.edit', compact('service', 'enTranslation', 'arTranslation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $validated = $request->validate([
            'slug' => 'required|string|max:255|unique:services,slug,' . $service->id,
            'icon_path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'display_order' => 'nullable|integer|min:0',
            'is_featured' => 'boolean',
            'is_active' => 'boolean',
            
            // English translations
            'name_en' => 'required|string|max:255',
            'short_description_en' => 'required|string|max:500',
            'long_description_en' => 'nullable|string',
            
            // Arabic translations
            'name_ar' => 'required|string|max:255',
            'short_description_ar' => 'required|string|max:500',
            'long_description_ar' => 'nullable|string',
        ]);

        DB::beginTransaction();
        try {
            // Handle icon upload
            if ($request->hasFile('icon_path')) {
                // Delete old icon
                if ($service->icon_path) {
                    Storage::disk('public')->delete($service->icon_path);
                }
                $iconPath = $request->file('icon_path')->store('services/icons', 'public');
                $service->icon_path = $iconPath;
            }

            // Update service
            $service->update([
                'slug' => $validated['slug'],
                'display_order' => $validated['display_order'] ?? 0,
                'is_featured' => $request->boolean('is_featured'),
                'is_active' => $request->boolean('is_active'),
            ]);

            // Update or create English translation
            ServiceTranslation::updateOrCreate(
                ['service_id' => $service->id, 'locale' => 'en'],
                [
                    'name' => $validated['name_en'],
                    'short_description' => $validated['short_description_en'],
                    'long_description' => $validated['long_description_en'],
                ]
            );

            // Update or create Arabic translation
            ServiceTranslation::updateOrCreate(
                ['service_id' => $service->id, 'locale' => 'ar'],
                [
                    'name' => $validated['name_ar'],
                    'short_description' => $validated['short_description_ar'],
                    'long_description' => $validated['long_description_ar'],
                ]
            );

            DB::commit();

            return redirect()->route('admin.services.index')
                ->with('success', 'Service updated successfully!');
        } catch (\Exception $e) {
            DB::rollBack();

            return back()->withInput()
                ->with('error', 'Failed to update service: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        try {
            // Delete icon if exists
            if ($service->icon_path) {
                Storage::disk('public')->delete($service->icon_path);
            }

            // Delete translations
            $service->translations()->delete();

            // Delete service
            $service->delete();

            return redirect()->route('admin.services.index')
                ->with('success', 'Service deleted successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to delete service: ' . $e->getMessage());
        }
    }
}
