<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\FaqCategory;
use App\Models\FaqTranslation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class FaqController extends Controller
{
    public function index(Request $request): View
    {
        $query = Faq::query()->with(['translations', 'category.translations']);

        if ($request->filled('search')) {
            $search = $request->string('search')->toString();
            $query->whereHas('translations', function ($q) use ($search) {
                $q->where('question', 'like', "%{$search}%")
                    ->orWhere('answer', 'like', "%{$search}%");
            });
        }

        if ($request->filled('category_id')) {
            $query->where('faq_category_id', $request->integer('category_id'));
        }

        if ($request->filled('status')) {
            $query->where('is_active', $request->boolean('status'));
        }

        $faqs = $query->ordered()->paginate(15)->withQueryString();
        $categories = FaqCategory::ordered()->with('translations')->get();

        return view('admin.faqs.index', compact('faqs', 'categories'));
    }

    public function create(): View
    {
        $categories = FaqCategory::ordered()->with('translations')->get();

        return view('admin.faqs.create', compact('categories'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'faq_category_id' => ['required', 'exists:faq_categories,id'],
            'display_order' => ['nullable', 'integer', 'min:0'],
            'is_active' => ['sometimes', 'boolean'],
            'question_en' => ['required', 'string', 'max:255'],
            'answer_en' => ['required', 'string'],
            'question_ar' => ['required', 'string', 'max:255'],
            'answer_ar' => ['required', 'string'],
        ]);

        DB::transaction(function () use ($validated, $request) {
            $faq = Faq::create([
                'faq_category_id' => $validated['faq_category_id'],
                'display_order' => $validated['display_order'] ?? 0,
                'is_active' => $request->boolean('is_active', true),
            ]);

            FaqTranslation::create([
                'faq_id' => $faq->id,
                'locale' => 'en',
                'question' => $validated['question_en'],
                'answer' => $validated['answer_en'],
            ]);

            FaqTranslation::create([
                'faq_id' => $faq->id,
                'locale' => 'ar',
                'question' => $validated['question_ar'],
                'answer' => $validated['answer_ar'],
            ]);
        });

        return redirect()->route('admin.faqs.index')
            ->with('success', 'FAQ created successfully.');
    }

    public function edit(Faq $faq): View
    {
        $faq->load(['translations', 'category']);
        $categories = FaqCategory::ordered()->with('translations')->get();

        $enTranslation = $faq->translations->firstWhere('locale', 'en');
        $arTranslation = $faq->translations->firstWhere('locale', 'ar');

        return view('admin.faqs.edit', compact('faq', 'categories', 'enTranslation', 'arTranslation'));
    }

    public function update(Request $request, Faq $faq): RedirectResponse
    {
        $validated = $request->validate([
            'faq_category_id' => ['required', 'exists:faq_categories,id'],
            'display_order' => ['nullable', 'integer', 'min:0'],
            'is_active' => ['sometimes', 'boolean'],
            'question_en' => ['required', 'string', 'max:255'],
            'answer_en' => ['required', 'string'],
            'question_ar' => ['required', 'string', 'max:255'],
            'answer_ar' => ['required', 'string'],
        ]);

        DB::transaction(function () use ($faq, $validated, $request) {
            $faq->update([
                'faq_category_id' => $validated['faq_category_id'],
                'display_order' => $validated['display_order'] ?? 0,
                'is_active' => $request->boolean('is_active'),
            ]);

            FaqTranslation::updateOrCreate(
                ['faq_id' => $faq->id, 'locale' => 'en'],
                [
                    'question' => $validated['question_en'],
                    'answer' => $validated['answer_en'],
                ]
            );

            FaqTranslation::updateOrCreate(
                ['faq_id' => $faq->id, 'locale' => 'ar'],
                [
                    'question' => $validated['question_ar'],
                    'answer' => $validated['answer_ar'],
                ]
            );
        });

        return redirect()->route('admin.faqs.index')
            ->with('success', 'FAQ updated successfully.');
    }

    public function destroy(Faq $faq): RedirectResponse
    {
        try {
            $faq->translations()->delete();
            $faq->delete();

            return redirect()->route('admin.faqs.index')
                ->with('success', 'FAQ deleted successfully.');
        } catch (\Throwable $th) {
            return back()->with('error', 'Unable to delete FAQ: ' . $th->getMessage());
        }
    }
}
