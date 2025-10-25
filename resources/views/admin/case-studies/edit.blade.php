@extends('layouts.admin')

@section('header')
    <div class="flex items-center justify-between">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Case Study') }}
        </h2>
        <a href="{{ route('admin.case-studies.index') }}"
           class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
            {{ __('Back to List') }}
        </a>
    </div>
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if ($errors->any())
                        <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <strong>{{ __('Whoops! Something went wrong.') }}</strong>
                            <ul class="mt-2 list-disc list-inside">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.case-studies.update', $caseStudy) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Language Tabs -->
                        <div class="mb-6">
                            <div class="border-b border-gray-200 dark:border-gray-700">
                                <nav class="flex space-x-8" aria-label="Tabs">
                                    <button type="button"
                                            class="language-tab border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm active"
                                            data-lang="en">
                                        {{ __('English') }}
                                    </button>
                                    <button type="button"
                                            class="language-tab border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm"
                                            data-lang="ar">
                                        {{ __('Arabic') }}
                                    </button>
                                </nav>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Left Column -->
                            <div class="space-y-6">
                                <!-- English Title -->
                                <div class="lang-section" data-lang="en">
                                    <label for="title_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Title (English)') }}
                                    </label>
                                    <input type="text" name="title_en" id="title_en"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                                           value="{{ old('title_en', $caseStudy->getTitleInLocale('en')) }}" required>
                                </div>

                                <!-- Arabic Title -->
                                <div class="lang-section hidden" data-lang="ar">
                                    <label for="title_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Title (Arabic)') }}
                                    </label>
                                    <input type="text" name="title_ar" id="title_ar" dir="rtl"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                                           value="{{ old('title_ar', $caseStudy->getTitleInLocale('ar')) }}" required>
                                </div>

                                <!-- Industry -->
                                <div>
                                    <label for="industry" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Industry') }}
                                    </label>
                                    <select name="industry" id="industry"
                                            class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                                            required>
                                        <option value="">{{ __('Select Industry') }}</option>
                                        <option value="healthcare" {{ old('industry', $caseStudy->industry) == 'healthcare' ? 'selected' : '' }}>{{ __('Healthcare') }}</option>
                                        <option value="finance" {{ old('industry', $caseStudy->industry) == 'finance' ? 'selected' : '' }}>{{ __('Finance') }}</option>
                                        <option value="manufacturing" {{ old('industry', $caseStudy->industry) == 'manufacturing' ? 'selected' : '' }}>{{ __('Manufacturing') }}</option>
                                        <option value="retail" {{ old('industry', $caseStudy->industry) == 'retail' ? 'selected' : '' }}>{{ __('Retail') }}</option>
                                        <option value="technology" {{ old('industry', $caseStudy->industry) == 'technology' ? 'selected' : '' }}>{{ __('Technology') }}</option>
                                        <option value="education" {{ old('industry', $caseStudy->industry) == 'education' ? 'selected' : '' }}>{{ __('Education') }}</option>
                                    </select>
                                </div>

                                <!-- English Description -->
                                <div class="lang-section" data-lang="en">
                                    <label for="description_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Description (English)') }}
                                    </label>
                                    <textarea name="description_en" id="description_en" rows="4"
                                              class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                                              required>{{ old('description_en', $caseStudy->getDescriptionInLocale('en')) }}</textarea>
                                </div>

                                <!-- Arabic Description -->
                                <div class="lang-section hidden" data-lang="ar">
                                    <label for="description_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Description (Arabic)') }}
                                    </label>
                                    <textarea name="description_ar" id="description_ar" rows="4" dir="rtl"
                                              class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                                              required>{{ old('description_ar', $caseStudy->getDescriptionInLocale('ar')) }}</textarea>
                                </div>

                                <!-- English Challenge -->
                                <div class="lang-section" data-lang="en">
                                    <label for="challenge_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Challenge (English)') }}
                                    </label>
                                    <textarea name="challenge_en" id="challenge_en" rows="4"
                                              class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                                              required>{{ old('challenge_en', $caseStudy->getChallengeInLocale('en')) }}</textarea>
                                </div>

                                <!-- Arabic Challenge -->
                                <div class="lang-section hidden" data-lang="ar">
                                    <label for="challenge_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Challenge (Arabic)') }}
                                    </label>
                                    <textarea name="challenge_ar" id="challenge_ar" rows="4" dir="rtl"
                                              class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                                              required>{{ old('challenge_ar', $caseStudy->getChallengeInLocale('ar')) }}</textarea>
                                </div>
                            </div>

                            <!-- Right Column -->
                            <div class="space-y-6">
                                <!-- English Solution -->
                                <div class="lang-section" data-lang="en">
                                    <label for="solution_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Solution (English)') }}
                                    </label>
                                    <textarea name="solution_en" id="solution_en" rows="4"
                                              class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                                              required>{{ old('solution_en', $caseStudy->getSolutionInLocale('en')) }}</textarea>
                                </div>

                                <!-- Arabic Solution -->
                                <div class="lang-section hidden" data-lang="ar">
                                    <label for="solution_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Solution (Arabic)') }}
                                    </label>
                                    <textarea name="solution_ar" id="solution_ar" rows="4" dir="rtl"
                                              class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                                              required>{{ old('solution_ar', $caseStudy->getSolutionInLocale('ar')) }}</textarea>
                                </div>

                                <!-- English Results -->
                                <div class="lang-section" data-lang="en">
                                    <label for="results_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Results (English)') }}
                                    </label>
                                    <textarea name="results_en" id="results_en" rows="4"
                                              class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                                              required>{{ old('results_en', $caseStudy->getResultsInLocale('en')) }}</textarea>
                                </div>

                                <!-- Arabic Results -->
                                <div class="lang-section hidden" data-lang="ar">
                                    <label for="results_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Results (Arabic)') }}
                                    </label>
                                    <textarea name="results_ar" id="results_ar" rows="4" dir="rtl"
                                              class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                                              required>{{ old('results_ar', $caseStudy->getResultsInLocale('ar')) }}</textarea>
                                </div>

                                <!-- Image URL -->
                                <div>
                                    <label for="image_url" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Image URL') }}
                                    </label>
                                    <input type="text" name="image_url" id="image_url"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                                           value="{{ old('image_url', $caseStudy->image_url) }}">
                                </div>

                                <!-- Completed At -->
                                <div>
                                    <label for="completed_at" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Completed At') }}
                                    </label>
                                    <input type="date" name="completed_at" id="completed_at"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                                           value="{{ old('completed_at', $caseStudy->completed_at ? $caseStudy->completed_at->format('Y-m-d') : '') }}">
                                </div>

                                <!-- Featured -->
                                <div class="flex items-center">
                                    <input type="checkbox" name="is_featured" id="is_featured"
                                           class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded"
                                           {{ old('is_featured', $caseStudy->is_featured) ? 'checked' : '' }}>
                                    <label for="is_featured" class="ml-2 block text-sm text-gray-900 dark:text-gray-100">
                                        {{ __('Featured Case Study') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Metrics Section -->
                        <div class="mt-8">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-4">{{ __('Key Metrics') }}</h3>
                            <div id="metrics-container">
                                @if(old('metrics') || $caseStudy->metrics)
                                    @php
                                        $metrics = old('metrics', $caseStudy->metrics ?? []);
                                        $index = 0;
                                    @endphp
                                    @foreach($metrics as $metric)
                                        <div class="metric-row grid grid-cols-1 md:grid-cols-12 gap-4 mb-3">
                                            <div class="md:col-span-4">
                                                <input type="text" name="metrics[{{ $index }}][label_en]" placeholder="{{ __('Metric Label (English)') }}"
                                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                                                       value="{{ old('metrics.' . $index . '.label_en', $metric['label']['en'] ?? '') }}">
                                            </div>
                                            <div class="md:col-span-4">
                                                <input type="text" name="metrics[{{ $index }}][label_ar]" placeholder="{{ __('Metric Label (Arabic)') }}" dir="rtl"
                                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                                                       value="{{ old('metrics.' . $index . '.label_ar', $metric['label']['ar'] ?? '') }}">
                                            </div>
                                            <div class="md:col-span-3">
                                                <input type="text" name="metrics[{{ $index }}][value]" placeholder="{{ __('Metric Value') }}"
                                                       class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                                                       value="{{ old('metrics.' . $index . '.value', $metric['value'] ?? '') }}">
                                            </div>
                                            <div class="md:col-span-1">
                                                <button type="button" class="remove-metric bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                                    {{ __('Remove') }}
                                                </button>
                                            </div>
                                        </div>
                                        @php $index++; @endphp
                                    @endforeach
                                @else
                                    <div class="metric-row grid grid-cols-1 md:grid-cols-12 gap-4 mb-3">
                                        <div class="md:col-span-4">
                                            <input type="text" name="metrics[0][label_en]" placeholder="{{ __('Metric Label (English)') }}"
                                                   class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                        </div>
                                        <div class="md:col-span-4">
                                            <input type="text" name="metrics[0][label_ar]" placeholder="{{ __('Metric Label (Arabic)') }}" dir="rtl"
                                                   class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                        </div>
                                        <div class="md:col-span-3">
                                            <input type="text" name="metrics[0][value]" placeholder="{{ __('Metric Value') }}"
                                                   class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                        </div>
                                        <div class="md:col-span-1">
                                            <button type="button" class="remove-metric bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                                {{ __('Remove') }}
                                            </button>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <button type="button" id="add-metric" class="mt-2 bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                                {{ __('Add Metric') }}
                            </button>
                        </div>

                        <!-- Submit Button -->
                        <div class="mt-8">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                {{ __('Update Case Study') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Language tab switching
        document.querySelectorAll('.language-tab').forEach(tab => {
            tab.addEventListener('click', function() {
                // Remove active class from all tabs
                document.querySelectorAll('.language-tab').forEach(t => {
                    t.classList.remove('active');
                    t.classList.remove('border-blue-500');
                    t.classList.remove('text-blue-600');
                    t.classList.add('border-transparent');
                    t.classList.add('text-gray-500');
                });

                // Add active class to clicked tab
                this.classList.add('active');
                this.classList.remove('border-transparent');
                this.classList.remove('text-gray-500');
                this.classList.add('border-blue-500');
                this.classList.add('text-blue-600');

                // Show/hide language sections
                const lang = this.getAttribute('data-lang');
                document.querySelectorAll('.lang-section').forEach(section => {
                    if (section.getAttribute('data-lang') === lang) {
                        section.classList.remove('hidden');
                    } else {
                        section.classList.add('hidden');
                    }
                });
            });
        });

        // Metrics functionality
        document.addEventListener('DOMContentLoaded', function() {
            let metricIndex = {{ old('metrics') || $caseStudy->metrics ? (old('metrics', $caseStudy->metrics ?? []) ? count(old('metrics', $caseStudy->metrics ?? [])) : 1) : 1 }};

            document.getElementById('add-metric').addEventListener('click', function() {
                const container = document.getElementById('metrics-container');
                const newRow = document.createElement('div');
                newRow.className = 'metric-row grid grid-cols-1 md:grid-cols-12 gap-4 mb-3';
                newRow.innerHTML = `
                    <div class="md:col-span-4">
                        <input type="text" name="metrics[${metricIndex}][label_en]" placeholder="{{ __('Metric Label (English)') }}"
                               class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                    </div>
                    <div class="md:col-span-4">
                        <input type="text" name="metrics[${metricIndex}][label_ar]" placeholder="{{ __('Metric Label (Arabic)') }}" dir="rtl"
                               class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                    </div>
                    <div class="md:col-span-3">
                        <input type="text" name="metrics[${metricIndex}][value]" placeholder="{{ __('Metric Value') }}"
                               class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                    </div>
                    <div class="md:col-span-1">
                        <button type="button" class="remove-metric bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                            {{ __('Remove') }}
                        </button>
                    </div>
                `;
                container.appendChild(newRow);
                metricIndex++;
            });

            document.getElementById('metrics-container').addEventListener('click', function(e) {
                if (e.target.classList.contains('remove-metric')) {
                    e.target.closest('.metric-row').remove();
                }
            });
        });
    </script>
@endsection
