@extends('layouts.admin')

@section('header')
    <div class="flex items-center justify-between">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Case Study Details') }}
        </h2>
        <div class="flex space-x-2">
            <a href="{{ route('admin.case-studies.edit', $caseStudy) }}"
               class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                {{ __('Edit') }}
            </a>
            <a href="{{ route('admin.case-studies.index') }}"
               class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                {{ __('Back to List') }}
            </a>
        </div>
    </div>
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
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

                    <!-- Case Study Header -->
                    <div class="mb-8">
                        <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-6">
                            <div>
                                <h1 class="text-2xl font-bold text-gray-900 dark:text-white lang-content" data-lang="en">{{ $caseStudy->getTitleInLocale('en') }}</h1>
                                <h1 class="text-2xl font-bold text-gray-900 dark:text-white lang-content hidden" data-lang="ar" dir="rtl">{{ $caseStudy->getTitleInLocale('ar') }}</h1>
                                <div class="mt-2 flex flex-wrap items-center gap-4">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200">
                                        {{ $caseStudy->industry }}
                                    </span>
                                    @if($caseStudy->is_featured)
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200">
                                            {{ __('Featured') }}
                                        </span>
                                    @endif
                                    @if($caseStudy->completed_at)
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">
                                            {{ __('Completed') }}: {{ $caseStudy->completed_at->format('M d, Y') }}
                                        </span>
                                    @endif
                                </div>
                            </div>

                            @if($caseStudy->image_url)
                                <div class="flex-shrink-0">
                                    <img src="{{ $caseStudy->image_url }}" alt="{{ $caseStudy->getTitleInLocale('en') }}"
                                         class="w-32 h-32 object-cover rounded-lg border border-gray-200 dark:border-gray-700">
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Case Study Content -->
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                        <!-- Main Content -->
                        <div class="lg:col-span-2 space-y-8">
                            <!-- Description -->
                            <div>
                                <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-3 lang-content" data-lang="en">{{ __('Description (English)') }}</h3>
                                <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-3 lang-content hidden" data-lang="ar" dir="rtl">{{ __('Description (Arabic)') }}</h3>
                                <div class="prose max-w-none dark:prose-invert">
                                    <p class="text-gray-700 dark:text-gray-300 lang-content" data-lang="en">{{ $caseStudy->getDescriptionInLocale('en') }}</p>
                                    <p class="text-gray-700 dark:text-gray-300 lang-content hidden" data-lang="ar" dir="rtl">{{ $caseStudy->getDescriptionInLocale('ar') }}</p>
                                </div>
                            </div>

                            <!-- Challenge -->
                            <div>
                                <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-3 lang-content" data-lang="en">{{ __('Challenge (English)') }}</h3>
                                <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-3 lang-content hidden" data-lang="ar" dir="rtl">{{ __('Challenge (Arabic)') }}</h3>
                                <div class="prose max-w-none dark:prose-invert">
                                    <p class="text-gray-700 dark:text-gray-300 lang-content" data-lang="en">{{ $caseStudy->getChallengeInLocale('en') }}</p>
                                    <p class="text-gray-700 dark:text-gray-300 lang-content hidden" data-lang="ar" dir="rtl">{{ $caseStudy->getChallengeInLocale('ar') }}</p>
                                </div>
                            </div>

                            <!-- Solution -->
                            <div>
                                <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-3 lang-content" data-lang="en">{{ __('Solution (English)') }}</h3>
                                <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-3 lang-content hidden" data-lang="ar" dir="rtl">{{ __('Solution (Arabic)') }}</h3>
                                <div class="prose max-w-none dark:prose-invert">
                                    <p class="text-gray-700 dark:text-gray-300 lang-content" data-lang="en">{{ $caseStudy->getSolutionInLocale('en') }}</p>
                                    <p class="text-gray-700 dark:text-gray-300 lang-content hidden" data-lang="ar" dir="rtl">{{ $caseStudy->getSolutionInLocale('ar') }}</p>
                                </div>
                            </div>

                            <!-- Results -->
                            <div>
                                <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-3 lang-content" data-lang="en">{{ __('Results (English)') }}</h3>
                                <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-3 lang-content hidden" data-lang="ar" dir="rtl">{{ __('Results (Arabic)') }}</h3>
                                <div class="prose max-w-none dark:prose-invert">
                                    <p class="text-gray-700 dark:text-gray-300 lang-content" data-lang="en">{{ $caseStudy->getResultsInLocale('en') }}</p>
                                    <p class="text-gray-700 dark:text-gray-300 lang-content hidden" data-lang="ar" dir="rtl">{{ $caseStudy->getResultsInLocale('ar') }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Sidebar -->
                        <div class="space-y-6">
                            <!-- Key Metrics -->
                            @if($caseStudy->metrics && count($caseStudy->metrics) > 0)
                                <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-6">
                                    <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-4">{{ __('Key Metrics') }}</h3>
                                    <div class="space-y-4">
                                        @foreach($caseStudy->metrics as $metric)
                                            <div class="flex justify-between items-center pb-2 border-b border-gray-200 dark:border-gray-600">
                                                <div>
                                                    <span class="text-gray-600 dark:text-gray-300 lang-content" data-lang="en">{{ $metric['label']['en'] ?? '' }}</span>
                                                    <span class="text-gray-600 dark:text-gray-300 lang-content hidden" data-lang="ar" dir="rtl">{{ $metric['label']['ar'] ?? '' }}</span>
                                                </div>
                                                <span class="font-semibold text-gray-900 dark:text-white">{{ $metric['value'] }}</span>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif

                            <!-- Metadata -->
                            <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-6">
                                <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-4">{{ __('Metadata') }}</h3>
                                <div class="space-y-3">
                                    <div class="flex justify-between">
                                        <span class="text-gray-600 dark:text-gray-300">{{ __('Created') }}</span>
                                        <span class="text-gray-900 dark:text-white">{{ $caseStudy->created_at->format('M d, Y H:i') }}</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-gray-600 dark:text-gray-300">{{ __('Last Updated') }}</span>
                                        <span class="text-gray-900 dark:text-white">{{ $caseStudy->updated_at->format('M d, Y H:i') }}</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-gray-600 dark:text-gray-300">{{ __('Status') }}</span>
                                        <span class="text-gray-900 dark:text-white">
                                            @if($caseStudy->is_featured)
                                                <span class="px-2 py-1 text-xs rounded-full bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200">
                                                    {{ __('Featured') }}
                                                </span>
                                            @else
                                                <span class="px-2 py-1 text-xs rounded-full bg-gray-100 text-gray-800 dark:bg-gray-600 dark:text-gray-200">
                                                    {{ __('Standard') }}
                                                </span>
                                            @endif
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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

                // Show/hide language content
                const lang = this.getAttribute('data-lang');
                document.querySelectorAll('.lang-content').forEach(content => {
                    if (content.getAttribute('data-lang') === lang) {
                        content.classList.remove('hidden');
                    } else {
                        content.classList.add('hidden');
                    }
                });
            });
        });
    </script>
@endsection
