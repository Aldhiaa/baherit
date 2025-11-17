<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreCounterRequest;
use App\Http\Requests\Admin\UpdateCounterRequest;
use App\Models\Counter;
use App\Models\CounterTranslation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Illuminate\View\View;

class CounterController extends Controller
{
    public function index(Request $request): View
    {
        $query = Counter::query()->with(['translations']);

        if ($request->filled('search')) {
            $search = $request->string('search')->toString();
            $query->whereHas('translations', function ($translationQuery) use ($search) {
                $translationQuery->where('label', 'like', "%{$search}%");
            });
        }

        if ($request->filled('status')) {
            $status = $request->string('status')->toString();
            if ($status === 'active') {
                $query->where('is_active', true);
            } elseif ($status === 'inactive') {
                $query->where('is_active', false);
            }
        }

        $counters = $query
            ->orderBy('display_order')
            ->paginate(15)
            ->withQueryString();

        return view('admin.counters.index', compact('counters'));
    }

    public function create(): View
    {
        return view('admin.counters.create');
    }

    public function store(StoreCounterRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        DB::beginTransaction();
        try {
            $iconPath = null;
            /** @var \Illuminate\Http\UploadedFile|null $icon */
            $icon = $request->file('icon');
            if ($icon instanceof UploadedFile) {
                $iconPath = $icon->store('counters/icons', 'public');
            }

            $counter = Counter::create([
                'key' => $validated['key'],
                'icon_path' => $iconPath,
                'target_value' => $validated['target_value'],
                'display_order' => $validated['display_order'],
                'is_active' => !empty($validated['is_active']),
            ]);

            CounterTranslation::create([
                'counter_id' => $counter->id,
                'locale' => 'en',
                'label' => $validated['label_en'],
            ]);

            CounterTranslation::create([
                'counter_id' => $counter->id,
                'locale' => 'ar',
                'label' => $validated['label_ar'],
            ]);

            DB::commit();

            return redirect()
                ->route('admin.counters.index')
                ->with('success', 'Counter created successfully.');
        } catch (\Throwable $th) {
            DB::rollBack();

            if (isset($iconPath)) {
                Storage::disk('public')->delete($iconPath);
            }

            return back()
                ->withInput()
                ->with('error', 'Failed to create counter: ' . $th->getMessage());
        }
    }

    public function edit(Counter $counter): View
    {
        $counter->load('translations');

        $enTranslation = $counter->translations->firstWhere('locale', 'en');
        $arTranslation = $counter->translations->firstWhere('locale', 'ar');

        return view('admin.counters.edit', compact('counter', 'enTranslation', 'arTranslation'));
    }

    public function update(UpdateCounterRequest $request, Counter $counter): RedirectResponse
    {
        $validated = $request->validated();

        DB::beginTransaction();
        try {
            /** @var UploadedFile|null $icon */
            $icon = $request->file('icon');
            if ($icon instanceof UploadedFile) {
                if ($counter->icon_path) {
                    Storage::disk('public')->delete($counter->icon_path);
                }
                $counter->icon_path = $icon->store('counters/icons', 'public');
            }

            $counter->update([
                'key' => $validated['key'],
                'icon_path' => $counter->icon_path ?? null,
                'target_value' => $validated['target_value'],
                'display_order' => $validated['display_order'],
                'is_active' => !empty($validated['is_active']),
            ]);

            CounterTranslation::updateOrCreate(
                ['counter_id' => $counter->id, 'locale' => 'en'],
                ['label' => $validated['label_en']]
            );

            CounterTranslation::updateOrCreate(
                ['counter_id' => $counter->id, 'locale' => 'ar'],
                ['label' => $validated['label_ar']]
            );

            DB::commit();

            return redirect()
                ->route('admin.counters.index')
                ->with('success', 'Counter updated successfully.');
        } catch (\Throwable $th) {
            DB::rollBack();

            return back()
                ->withInput()
                ->with('error', 'Failed to update counter: ' . $th->getMessage());
        }
    }

    public function destroy(Counter $counter): RedirectResponse
    {
        try {
            DB::transaction(function () use ($counter) {
                if ($counter->icon_path) {
                    Storage::disk('public')->delete($counter->icon_path);
                }

                $counter->translations()->delete();
                $counter->delete();
            });

            return redirect()
                ->route('admin.counters.index')
                ->with('success', 'Counter deleted successfully.');
        } catch (\Throwable $th) {
            return back()->with('error', 'Failed to delete counter: ' . $th->getMessage());
        }
    }
}
