<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq as FaqModel;
use App\Models\FaqCategory;
use App\Models\FaqCategoryTranslation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class FaqCategoryController extends Controller
{
    public function index(Request $request): View
    {
        $query = FaqCategory::query()
            ->with('translations')
            ->withCount('faqs');

        if ($request->filled('search')) {
            $search = $request->string('search')->toString();
            $query->whereHas('translations', function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%");
            });
        }

        if ($request->filled('status')) {
            $status = $request->boolean('status');
            $query->where('is_active', $status);
        }

        $categories = $query->ordered()->paginate(15)->withQueryString();

        return view('admin.faq_categories.index', compact('categories'));
    }

    public function create(): View
    {
        return view('admin.faq_categories.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'display_order' => ['nullable', 'integer', 'min:0'],
            'is_active' => ['sometimes', 'boolean'],
            'name_en' => ['required', 'string', 'max:255'],
            'name_ar' => ['required', 'string', 'max:255'],
        ]);

        DB::transaction(function () use ($validated, $request) {
            $category = FaqCategory::create([
                'display_order' => $validated['display_order'] ?? 0,
                'is_active' => $request->boolean('is_active', true),
            ]);

            FaqCategoryTranslation::create([
                'faq_category_id' => $category->id,
                'locale' => 'en',
                'name' => $validated['name_en'],
            ]);

            FaqCategoryTranslation::create([
                'faq_category_id' => $category->id,
                'locale' => 'ar',
                'name' => $validated['name_ar'],
            ]);
        });

        return redirect()->route('admin.faq-categories.index')
            ->with('success', 'FAQ category created successfully.');
    }

    public function edit(FaqCategory $faqCategory): View
    {
        $faqCategory->load('translations');

        $enTranslation = $faqCategory->translations->firstWhere('locale', 'en');
        $arTranslation = $faqCategory->translations->firstWhere('locale', 'ar');

        return view('admin.faq_categories.edit', compact('faqCategory', 'enTranslation', 'arTranslation'));
    }

    public function update(Request $request, FaqCategory $faqCategory): RedirectResponse
    {
        $validated = $request->validate([
            'display_order' => ['nullable', 'integer', 'min:0'],
            'is_active' => ['sometimes', 'boolean'],
            'name_en' => ['required', 'string', 'max:255'],
            'name_ar' => ['required', 'string', 'max:255'],
        ]);

        DB::transaction(function () use ($faqCategory, $validated, $request) {
            $faqCategory->update([
                'display_order' => $validated['display_order'] ?? 0,
                'is_active' => $request->boolean('is_active'),
            ]);

            FaqCategoryTranslation::updateOrCreate(
                ['faq_category_id' => $faqCategory->id, 'locale' => 'en'],
                ['name' => $validated['name_en']]
            );

            FaqCategoryTranslation::updateOrCreate(
                ['faq_category_id' => $faqCategory->id, 'locale' => 'ar'],
                ['name' => $validated['name_ar']]
            );
        });

        return redirect()->route('admin.faq-categories.index')
            ->with('success', 'FAQ category updated successfully.');
    }

    public function destroy(FaqCategory $faqCategory): RedirectResponse
    {
        try {
            DB::transaction(function () use ($faqCategory) {
                $faqCategory->faqs()->with('translations')->get()->each(function (FaqModel $faq) {
                    $faq->translations()->delete();
                    $faq->delete();
                });

                $faqCategory->translations()->delete();
                $faqCategory->delete();
            });

            return redirect()->route('admin.faq-categories.index')
                ->with('success', 'FAQ category deleted successfully.');
        } catch (\Throwable $th) {
            return back()->with('error', 'Unable to delete category: ' . $th->getMessage());
        }
    }
}
