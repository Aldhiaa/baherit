<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use App\Models\TestimonialTranslation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Testimonial::with(['translations']);

        // Search functionality
        if ($request->filled('search')) {
            $search = $request->search;
            $query->whereHas('translations', function ($q) use ($search) {
                $q->where('author_name', 'like', "%{$search}%")
                  ->orWhere('author_title', 'like', "%{$search}%");
            });
        }

        // Filter by status
        if ($request->filled('status')) {
            $query->where('is_active', $request->status);
        }

        $testimonials = $query->ordered()->paginate(15);

        return view('admin.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'avatar_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'rating' => 'required|integer|min:1|max:5',
            'display_order' => 'nullable|integer|min:0',
            'is_active' => 'boolean',
            
            // English translations
            'author_name_en' => 'required|string|max:255',
            'author_title_en' => 'required|string|max:255',
            'quote_en' => 'required|string',
            
            // Arabic translations
            'author_name_ar' => 'required|string|max:255',
            'author_title_ar' => 'required|string|max:255',
            'quote_ar' => 'required|string',
        ]);

        DB::beginTransaction();
        try {
            // Handle avatar upload
            $avatarPath = null;
            if ($request->hasFile('avatar_path')) {
                $avatarPath = $request->file('avatar_path')->store('testimonials/avatars', 'public');
            }

            // Create testimonial
            $testimonial = Testimonial::create([
                'avatar_path' => $avatarPath,
                'rating' => $validated['rating'],
                'display_order' => $validated['display_order'] ?? 0,
                'is_active' => $request->boolean('is_active', true),
            ]);

            // Create English translation
            TestimonialTranslation::create([
                'testimonial_id' => $testimonial->id,
                'locale' => 'en',
                'author_name' => $validated['author_name_en'],
                'author_title' => $validated['author_title_en'],
                'quote' => $validated['quote_en'],
            ]);

            // Create Arabic translation
            TestimonialTranslation::create([
                'testimonial_id' => $testimonial->id,
                'locale' => 'ar',
                'author_name' => $validated['author_name_ar'],
                'author_title' => $validated['author_title_ar'],
                'quote' => $validated['quote_ar'],
            ]);

            DB::commit();

            return redirect()->route('admin.testimonials.index')
                ->with('success', 'Testimonial created successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            
            // Delete uploaded avatar if exists
            if (isset($avatarPath)) {
                Storage::disk('public')->delete($avatarPath);
            }

            return back()->withInput()
                ->with('error', 'Failed to create testimonial: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        $testimonial->load('translations');
        return view('admin.testimonials.show', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        $testimonial->load('translations');
        
        // Get translations by locale
        $enTranslation = $testimonial->translations->where('locale', 'en')->first();
        $arTranslation = $testimonial->translations->where('locale', 'ar')->first();

        return view('admin.testimonials.edit', compact('testimonial', 'enTranslation', 'arTranslation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $validated = $request->validate([
            'avatar_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'rating' => 'required|integer|min:1|max:5',
            'display_order' => 'nullable|integer|min:0',
            'is_active' => 'boolean',
            
            // English translations
            'author_name_en' => 'required|string|max:255',
            'author_title_en' => 'required|string|max:255',
            'quote_en' => 'required|string',
            
            // Arabic translations
            'author_name_ar' => 'required|string|max:255',
            'author_title_ar' => 'required|string|max:255',
            'quote_ar' => 'required|string',
        ]);

        DB::beginTransaction();
        try {
            // Handle avatar upload
            if ($request->hasFile('avatar_path')) {
                // Delete old avatar
                if ($testimonial->avatar_path) {
                    Storage::disk('public')->delete($testimonial->avatar_path);
                }
                $avatarPath = $request->file('avatar_path')->store('testimonials/avatars', 'public');
                $testimonial->avatar_path = $avatarPath;
            }

            // Update testimonial
            $testimonial->update([
                'rating' => $validated['rating'],
                'display_order' => $validated['display_order'] ?? 0,
                'is_active' => $request->boolean('is_active'),
            ]);

            // Update or create English translation
            TestimonialTranslation::updateOrCreate(
                ['testimonial_id' => $testimonial->id, 'locale' => 'en'],
                [
                    'author_name' => $validated['author_name_en'],
                    'author_title' => $validated['author_title_en'],
                    'quote' => $validated['quote_en'],
                ]
            );

            // Update or create Arabic translation
            TestimonialTranslation::updateOrCreate(
                ['testimonial_id' => $testimonial->id, 'locale' => 'ar'],
                [
                    'author_name' => $validated['author_name_ar'],
                    'author_title' => $validated['author_title_ar'],
                    'quote' => $validated['quote_ar'],
                ]
            );

            DB::commit();

            return redirect()->route('admin.testimonials.index')
                ->with('success', 'Testimonial updated successfully!');
        } catch (\Exception $e) {
            DB::rollBack();

            return back()->withInput()
                ->with('error', 'Failed to update testimonial: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        try {
            // Delete avatar if exists
            if ($testimonial->avatar_path) {
                Storage::disk('public')->delete($testimonial->avatar_path);
            }

            // Delete translations
            $testimonial->translations()->delete();

            // Delete testimonial
            $testimonial->delete();

            return redirect()->route('admin.testimonials.index')
                ->with('success', 'Testimonial deleted successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to delete testimonial: ' . $e->getMessage());
        }
    }
}
