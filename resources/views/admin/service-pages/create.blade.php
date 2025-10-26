@extends('layouts.admin')

@section('header')
    <div class="flex items-center">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Service Page') }}
        </h2>
    </div>
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('admin.service-pages.store') }}" method="POST">
                        @csrf

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

                        <!-- Page Name -->
                        <div class="mb-6">
                            <label for="page_name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                {{ __('Page Name') }}
                            </label>
                            <input type="text"
                                   name="page_name"
                                   id="page_name"
                                   value="{{ old('page_name') }}"
                                   class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                                   required>
                            @error('page_name')
                                <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Active Status -->
                        <div class="mb-6">
                            <div class="flex items-center">
                                <input type="checkbox"
                                       name="is_active"
                                       id="is_active"
                                       class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded"
                                       {{ old('is_active', true) ? 'checked' : '' }}>
                                <label for="is_active" class="ml-2 block text-sm text-gray-900 dark:text-gray-100">
                                    {{ __('Active') }}
                                </label>
                            </div>
                        </div>

                        <!-- Hero Section -->
                        <div class="mb-8">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-4">{{ __('Hero Section') }}</h3>

                            <div class="lang-section" data-lang="en">
                                <div class="mb-4">
                                    <label for="hero_title_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Hero Title (English)') }}
                                    </label>
                                    <input type="text"
                                           name="hero_title_en"
                                           id="hero_title_en"
                                           value="{{ old('hero_title_en') }}"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                </div>

                                <div class="mb-4">
                                    <label for="hero_highlight_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Hero Highlight (English)') }}
                                    </label>
                                    <input type="text"
                                           name="hero_highlight_en"
                                           id="hero_highlight_en"
                                           value="{{ old('hero_highlight_en') }}"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                </div>

                                <div class="mb-4">
                                    <label for="hero_description_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Hero Description (English)') }}
                                    </label>
                                    <textarea name="hero_description_en"
                                              id="hero_description_en"
                                              rows="3"
                                              class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">{{ old('hero_description_en') }}</textarea>
                                </div>

                                <div class="mb-4">
                                    <label for="hero_button_primary_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Hero Primary Button (English)') }}
                                    </label>
                                    <input type="text"
                                           name="hero_button_primary_en"
                                           id="hero_button_primary_en"
                                           value="{{ old('hero_button_primary_en') }}"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                </div>

                                <div class="mb-4">
                                    <label for="hero_button_secondary_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Hero Secondary Button (English)') }}
                                    </label>
                                    <input type="text"
                                           name="hero_button_secondary_en"
                                           id="hero_button_secondary_en"
                                           value="{{ old('hero_button_secondary_en') }}"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                </div>
                            </div>

                            <div class="lang-section hidden" data-lang="ar">
                                <div class="mb-4">
                                    <label for="hero_title_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Hero Title (Arabic)') }}
                                    </label>
                                    <input type="text"
                                           name="hero_title_ar"
                                           id="hero_title_ar"
                                           dir="rtl"
                                           value="{{ old('hero_title_ar') }}"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                </div>

                                <div class="mb-4">
                                    <label for="hero_highlight_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Hero Highlight (Arabic)') }}
                                    </label>
                                    <input type="text"
                                           name="hero_highlight_ar"
                                           id="hero_highlight_ar"
                                           dir="rtl"
                                           value="{{ old('hero_highlight_ar') }}"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                </div>

                                <div class="mb-4">
                                    <label for="hero_description_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Hero Description (Arabic)') }}
                                    </label>
                                    <textarea name="hero_description_ar"
                                              id="hero_description_ar"
                                              rows="3"
                                              dir="rtl"
                                              class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">{{ old('hero_description_ar') }}</textarea>
                                </div>

                                <div class="mb-4">
                                    <label for="hero_button_primary_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Hero Primary Button (Arabic)') }}
                                    </label>
                                    <input type="text"
                                           name="hero_button_primary_ar"
                                           id="hero_button_primary_ar"
                                           dir="rtl"
                                           value="{{ old('hero_button_primary_ar') }}"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                </div>

                                <div class="mb-4">
                                    <label for="hero_button_secondary_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Hero Secondary Button (Arabic)') }}
                                    </label>
                                    <input type="text"
                                           name="hero_button_secondary_ar"
                                           id="hero_button_secondary_ar"
                                           dir="rtl"
                                           value="{{ old('hero_button_secondary_ar') }}"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                </div>
                            </div>
                        </div>

                        <!-- Find Section -->
                        <div class="mb-8">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-4">{{ __('Find Section') }}</h3>

                            <div class="lang-section" data-lang="en">
                                <div class="mb-4">
                                    <label for="find_title_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Find Title (English)') }}
                                    </label>
                                    <input type="text"
                                           name="find_title_en"
                                           id="find_title_en"
                                           value="{{ old('find_title_en') }}"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                </div>

                                <div class="mb-4">
                                    <label for="find_description_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Find Description (English)') }}
                                    </label>
                                    <textarea name="find_description_en"
                                              id="find_description_en"
                                              rows="3"
                                              class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">{{ old('find_description_en') }}</textarea>
                                </div>

                                <div class="mb-4">
                                    <label for="filter_all_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Filter All (English)') }}
                                    </label>
                                    <input type="text"
                                           name="filter_all_en"
                                           id="filter_all_en"
                                           value="{{ old('filter_all_en') }}"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                </div>

                                <div class="mb-4">
                                    <label for="filter_development_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Filter Development (English)') }}
                                    </label>
                                    <input type="text"
                                           name="filter_development_en"
                                           id="filter_development_en"
                                           value="{{ old('filter_development_en') }}"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                </div>

                                <div class="mb-4">
                                    <label for="filter_cloud_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Filter Cloud (English)') }}
                                    </label>
                                    <input type="text"
                                           name="filter_cloud_en"
                                           id="filter_cloud_en"
                                           value="{{ old('filter_cloud_en') }}"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                </div>

                                <div class="mb-4">
                                    <label for="filter_consulting_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Filter Consulting (English)') }}
                                    </label>
                                    <input type="text"
                                           name="filter_consulting_en"
                                           id="filter_consulting_en"
                                           value="{{ old('filter_consulting_en') }}"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                </div>

                                <div class="mb-4">
                                    <label for="reset_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Reset (English)') }}
                                    </label>
                                    <input type="text"
                                           name="reset_en"
                                           id="reset_en"
                                           value="{{ old('reset_en') }}"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                </div>
                            </div>

                            <div class="lang-section hidden" data-lang="ar">
                                <div class="mb-4">
                                    <label for="find_title_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Find Title (Arabic)') }}
                                    </label>
                                    <input type="text"
                                           name="find_title_ar"
                                           id="find_title_ar"
                                           dir="rtl"
                                           value="{{ old('find_title_ar') }}"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                </div>

                                <div class="mb-4">
                                    <label for="find_description_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Find Description (Arabic)') }}
                                    </label>
                                    <textarea name="find_description_ar"
                                              id="find_description_ar"
                                              rows="3"
                                              dir="rtl"
                                              class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">{{ old('find_description_ar') }}</textarea>
                                </div>

                                <div class="mb-4">
                                    <label for="filter_all_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Filter All (Arabic)') }}
                                    </label>
                                    <input type="text"
                                           name="filter_all_ar"
                                           id="filter_all_ar"
                                           dir="rtl"
                                           value="{{ old('filter_all_ar') }}"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                </div>

                                <div class="mb-4">
                                    <label for="filter_development_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Filter Development (Arabic)') }}
                                    </label>
                                    <input type="text"
                                           name="filter_development_ar"
                                           id="filter_development_ar"
                                           dir="rtl"
                                           value="{{ old('filter_development_ar') }}"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                </div>

                                <div class="mb-4">
                                    <label for="filter_cloud_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Filter Cloud (Arabic)') }}
                                    </label>
                                    <input type="text"
                                           name="filter_cloud_ar"
                                           id="filter_cloud_ar"
                                           dir="rtl"
                                           value="{{ old('filter_cloud_ar') }}"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                </div>

                                <div class="mb-4">
                                    <label for="filter_consulting_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Filter Consulting (Arabic)') }}
                                    </label>
                                    <input type="text"
                                           name="filter_consulting_ar"
                                           id="filter_consulting_ar"
                                           dir="rtl"
                                           value="{{ old('filter_consulting_ar') }}"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                </div>

                                <div class="mb-4">
                                    <label for="reset_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Reset (Arabic)') }}
                                    </label>
                                    <input type="text"
                                           name="reset_ar"
                                           id="reset_ar"
                                           dir="rtl"
                                           value="{{ old('reset_ar') }}"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                </div>
                            </div>
                        </div>

                        <!-- Technology Section -->
                        <div class="mb-8">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-4">{{ __('Technology Section') }}</h3>

                            <div class="lang-section" data-lang="en">
                                <div class="mb-4">
                                    <label for="technology_title_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Technology Title (English)') }}
                                    </label>
                                    <input type="text"
                                           name="technology_title_en"
                                           id="technology_title_en"
                                           value="{{ old('technology_title_en') }}"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                </div>

                                <div class="mb-4">
                                    <label for="technology_description_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Technology Description (English)') }}
                                    </label>
                                    <textarea name="technology_description_en"
                                              id="technology_description_en"
                                              rows="3"
                                              class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">{{ old('technology_description_en') }}</textarea>
                                </div>

                                <div class="mb-4">
                                    <label for="frontend_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Frontend (English)') }}
                                    </label>
                                    <input type="text"
                                           name="frontend_en"
                                           id="frontend_en"
                                           value="{{ old('frontend_en') }}"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                </div>

                                <div class="mb-4">
                                    <label for="backend_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Backend (English)') }}
                                    </label>
                                    <input type="text"
                                           name="backend_en"
                                           id="backend_en"
                                           value="{{ old('backend_en') }}"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                </div>

                                <div class="mb-4">
                                    <label for="database_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Database (English)') }}
                                    </label>
                                    <input type="text"
                                           name="database_en"
                                           id="database_en"
                                           value="{{ old('database_en') }}"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                </div>

                                <div class="mb-4">
                                    <label for="cloud_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Cloud (English)') }}
                                    </label>
                                    <input type="text"
                                           name="cloud_en"
                                           id="cloud_en"
                                           value="{{ old('cloud_en') }}"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                </div>

                                <div class="mb-4">
                                    <label for="learn_more_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Learn More (English)') }}
                                    </label>
                                    <input type="text"
                                           name="learn_more_en"
                                           id="learn_more_en"
                                           value="{{ old('learn_more_en') }}"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                </div>
                            </div>

                            <div class="lang-section hidden" data-lang="ar">
                                <div class="mb-4">
                                    <label for="technology_title_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Technology Title (Arabic)') }}
                                    </label>
                                    <input type="text"
                                           name="technology_title_ar"
                                           id="technology_title_ar"
                                           dir="rtl"
                                           value="{{ old('technology_title_ar') }}"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                </div>

                                <div class="mb-4">
                                    <label for="technology_description_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Technology Description (Arabic)') }}
                                    </label>
                                    <textarea name="technology_description_ar"
                                              id="technology_description_ar"
                                              rows="3"
                                              dir="rtl"
                                              class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">{{ old('technology_description_ar') }}</textarea>
                                </div>

                                <div class="mb-4">
                                    <label for="frontend_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Frontend (Arabic)') }}
                                    </label>
                                    <input type="text"
                                           name="frontend_ar"
                                           id="frontend_ar"
                                           dir="rtl"
                                           value="{{ old('frontend_ar') }}"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                </div>

                                <div class="mb-4">
                                    <label for="backend_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Backend (Arabic)') }}
                                    </label>
                                    <input type="text"
                                           name="backend_ar"
                                           id="backend_ar"
                                           dir="rtl"
                                           value="{{ old('backend_ar') }}"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                </div>

                                <div class="mb-4">
                                    <label for="database_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Database (Arabic)') }}
                                    </label>
                                    <input type="text"
                                           name="database_ar"
                                           id="database_ar"
                                           dir="rtl"
                                           value="{{ old('database_ar') }}"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                </div>

                                <div class="mb-4">
                                    <label for="cloud_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Cloud (Arabic)') }}
                                    </label>
                                    <input type="text"
                                           name="cloud_ar"
                                           id="cloud_ar"
                                           dir="rtl"
                                           value="{{ old('cloud_ar') }}"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                </div>

                                <div class="mb-4">
                                    <label for="learn_more_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Learn More (Arabic)') }}
                                    </label>
                                    <input type="text"
                                           name="learn_more_ar"
                                           id="learn_more_ar"
                                           dir="rtl"
                                           value="{{ old('learn_more_ar') }}"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                </div>
                            </div>
                        </div>

                        <!-- Process Section -->
                        <div class="mb-8">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-4">{{ __('Process Section') }}</h3>

                            <div class="lang-section" data-lang="en">
                                <div class="mb-4">
                                    <label for="process_title_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Process Title (English)') }}
                                    </label>
                                    <input type="text"
                                           name="process_title_en"
                                           id="process_title_en"
                                           value="{{ old('process_title_en') }}"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                </div>

                                <div class="mb-4">
                                    <label for="process_description_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Process Description (English)') }}
                                    </label>
                                    <textarea name="process_description_en"
                                              id="process_description_en"
                                              rows="3"
                                              class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">{{ old('process_description_en') }}</textarea>
                                </div>

                                <div class="mb-4">
                                    <label for="process_discovery_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Process Discovery (English)') }}
                                    </label>
                                    <input type="text"
                                           name="process_discovery_en"
                                           id="process_discovery_en"
                                           value="{{ old('process_discovery_en') }}"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                </div>

                                <div class="mb-4">
                                    <label for="process_discovery_desc_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Process Discovery Description (English)') }}
                                    </label>
                                    <textarea name="process_discovery_desc_en"
                                              id="process_discovery_desc_en"
                                              rows="3"
                                              class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">{{ old('process_discovery_desc_en') }}</textarea>
                                </div>

                                <div class="mb-4">
                                    <label for="process_design_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Process Design (English)') }}
                                    </label>
                                    <input type="text"
                                           name="process_design_en"
                                           id="process_design_en"
                                           value="{{ old('process_design_en') }}"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                </div>

                                <div class="mb-4">
                                    <label for="process_design_desc_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Process Design Description (English)') }}
                                    </label>
                                    <textarea name="process_design_desc_en"
                                              id="process_design_desc_en"
                                              rows="3"
                                              class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">{{ old('process_design_desc_en') }}</textarea>
                                </div>

                                <div class="mb-4">
                                    <label for="process_development_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Process Development (English)') }}
                                    </label>
                                    <input type="text"
                                           name="process_development_en"
                                           id="process_development_en"
                                           value="{{ old('process_development_en') }}"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                </div>

                                <div class="mb-4">
                                    <label for="process_development_desc_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Process Development Description (English)') }}
                                    </label>
                                    <textarea name="process_development_desc_en"
                                              id="process_development_desc_en"
                                              rows="3"
                                              class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">{{ old('process_development_desc_en') }}</textarea>
                                </div>

                                <div class="mb-4">
                                    <label for="process_deployment_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Process Deployment (English)') }}
                                    </label>
                                    <input type="text"
                                           name="process_deployment_en"
                                           id="process_deployment_en"
                                           value="{{ old('process_deployment_en') }}"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                </div>

                                <div class="mb-4">
                                    <label for="process_deployment_desc_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Process Deployment Description (English)') }}
                                    </label>
                                    <textarea name="process_deployment_desc_en"
                                              id="process_deployment_desc_en"
                                              rows="3"
                                              class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">{{ old('process_deployment_desc_en') }}</textarea>
                                </div>
                            </div>

                            <div class="lang-section hidden" data-lang="ar">
                                <div class="mb-4">
                                    <label for="process_title_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Process Title (Arabic)') }}
                                    </label>
                                    <input type="text"
                                           name="process_title_ar"
                                           id="process_title_ar"
                                           dir="rtl"
                                           value="{{ old('process_title_ar') }}"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                </div>

                                <div class="mb-4">
                                    <label for="process_description_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Process Description (Arabic)') }}
                                    </label>
                                    <textarea name="process_description_ar"
                                              id="process_description_ar"
                                              rows="3"
                                              dir="rtl"
                                              class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">{{ old('process_description_ar') }}</textarea>
                                </div>

                                <div class="mb-4">
                                    <label for="process_discovery_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Process Discovery (Arabic)') }}
                                    </label>
                                    <input type="text"
                                           name="process_discovery_ar"
                                           id="process_discovery_ar"
                                           dir="rtl"
                                           value="{{ old('process_discovery_ar') }}"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                </div>

                                <div class="mb-4">
                                    <label for="process_discovery_desc_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Process Discovery Description (Arabic)') }}
                                    </label>
                                    <textarea name="process_discovery_desc_ar"
                                              id="process_discovery_desc_ar"
                                              rows="3"
                                              dir="rtl"
                                              class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">{{ old('process_discovery_desc_ar') }}</textarea>
                                </div>

                                <div class="mb-4">
                                    <label for="process_design_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Process Design (Arabic)') }}
                                    </label>
                                    <input type="text"
                                           name="process_design_ar"
                                           id="process_design_ar"
                                           dir="rtl"
                                           value="{{ old('process_design_ar') }}"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                </div>

                                <div class="mb-4">
                                    <label for="process_design_desc_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Process Design Description (Arabic)') }}
                                    </label>
                                    <textarea name="process_design_desc_ar"
                                              id="process_design_desc_ar"
                                              rows="3"
                                              dir="rtl"
                                              class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">{{ old('process_design_desc_ar') }}</textarea>
                                </div>

                                <div class="mb-4">
                                    <label for="process_development_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Process Development (Arabic)') }}
                                    </label>
                                    <input type="text"
                                           name="process_development_ar"
                                           id="process_development_ar"
                                           dir="rtl"
                                           value="{{ old('process_development_ar') }}"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                </div>

                                <div class="mb-4">
                                    <label for="process_development_desc_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Process Development Description (Arabic)') }}
                                    </label>
                                    <textarea name="process_development_desc_ar"
                                              id="process_development_desc_ar"
                                              rows="3"
                                              dir="rtl"
                                              class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">{{ old('process_development_desc_ar') }}</textarea>
                                </div>

                                <div class="mb-4">
                                    <label for="process_deployment_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Process Deployment (Arabic)') }}
                                    </label>
                                    <input type="text"
                                           name="process_deployment_ar"
                                           id="process_deployment_ar"
                                           dir="rtl"
                                           value="{{ old('process_deployment_ar') }}"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                </div>

                                <div class="mb-4">
                                    <label for="process_deployment_desc_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('Process Deployment Description (Arabic)') }}
                                    </label>
                                    <textarea name="process_deployment_desc_ar"
                                              id="process_deployment_desc_ar"
                                              rows="3"
                                              dir="rtl"
                                              class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">{{ old('process_deployment_desc_ar') }}</textarea>
                                </div>
                            </div>
                        </div>

                        <!-- CTA Section -->
                        <div class="mb-8">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-4">{{ __('CTA Section') }}</h3>

                            <div class="lang-section" data-lang="en">
                                <div class="mb-4">
                                    <label for="cta_title_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('CTA Title (English)') }}
                                    </label>
                                    <input type="text"
                                           name="cta_title_en"
                                           id="cta_title_en"
                                           value="{{ old('cta_title_en') }}"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                </div>

                                <div class="mb-4">
                                    <label for="cta_description_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('CTA Description (English)') }}
                                    </label>
                                    <textarea name="cta_description_en"
                                              id="cta_description_en"
                                              rows="3"
                                              class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">{{ old('cta_description_en') }}</textarea>
                                </div>

                                <div class="mb-4">
                                    <label for="cta_button_primary_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('CTA Primary Button (English)') }}
                                    </label>
                                    <input type="text"
                                           name="cta_button_primary_en"
                                           id="cta_button_primary_en"
                                           value="{{ old('cta_button_primary_en') }}"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                </div>

                                <div class="mb-4">
                                    <label for="cta_button_secondary_en" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('CTA Secondary Button (English)') }}
                                    </label>
                                    <input type="text"
                                           name="cta_button_secondary_en"
                                           id="cta_button_secondary_en"
                                           value="{{ old('cta_button_secondary_en') }}"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                </div>
                            </div>

                            <div class="lang-section hidden" data-lang="ar">
                                <div class="mb-4">
                                    <label for="cta_title_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('CTA Title (Arabic)') }}
                                    </label>
                                    <input type="text"
                                           name="cta_title_ar"
                                           id="cta_title_ar"
                                           dir="rtl"
                                           value="{{ old('cta_title_ar') }}"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                </div>

                                <div class="mb-4">
                                    <label for="cta_description_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('CTA Description (Arabic)') }}
                                    </label>
                                    <textarea name="cta_description_ar"
                                              id="cta_description_ar"
                                              rows="3"
                                              dir="rtl"
                                              class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">{{ old('cta_description_ar') }}</textarea>
                                </div>

                                <div class="mb-4">
                                    <label for="cta_button_primary_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('CTA Primary Button (Arabic)') }}
                                    </label>
                                    <input type="text"
                                           name="cta_button_primary_ar"
                                           id="cta_button_primary_ar"
                                           dir="rtl"
                                           value="{{ old('cta_button_primary_ar') }}"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                </div>

                                <div class="mb-4">
                                    <label for="cta_button_secondary_ar" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        {{ __('CTA Secondary Button (Arabic)') }}
                                    </label>
                                    <input type="text"
                                           name="cta_button_secondary_ar"
                                           id="cta_button_secondary_ar"
                                           dir="rtl"
                                           value="{{ old('cta_button_secondary_ar') }}"
                                           class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white">
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="flex items-center justify-between">
                            <a href="{{ route('admin.service-pages.index') }}"
                               class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                                {{ __('Cancel') }}
                            </a>
                            <button type="submit"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                {{ __('Create Service Page') }}
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
    </script>
@endsection
