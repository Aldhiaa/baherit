@extends('layouts.admin')

@section('title', 'Create Case Study Page')

@section('content')
<div class="py-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6">Create Case Study Page</h2>

                @if($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.case-study-pages.store') }}" method="POST">
                    @csrf

                    <!-- Page Information -->
                    <div class="mb-8">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Page Information</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="page_name" class="block text-sm font-medium text-gray-700">Page Name</label>
                                <input type="text" name="page_name" id="page_name" value="{{ old('page_name') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="is_active" class="block text-sm font-medium text-gray-700">Status</label>
                                <select name="is_active" id="is_active" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                    <option value="1" {{ old('is_active', 1) ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ !old('is_active', 1) ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Hero Section -->
                    <div class="mb-8">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Hero Section</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="hero_title_en" class="block text-sm font-medium text-gray-700">Hero Title (English)</label>
                                <input type="text" name="hero_title_en" id="hero_title_en" value="{{ old('hero_title_en') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="hero_title_ar" class="block text-sm font-medium text-gray-700">Hero Title (Arabic)</label>
                                <input type="text" name="hero_title_ar" id="hero_title_ar" value="{{ old('hero_title_ar') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div class="md:col-span-2">
                                <label for="hero_description_en" class="block text-sm font-medium text-gray-700">Hero Description (English)</label>
                                <textarea name="hero_description_en" id="hero_description_en" rows="3" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">{{ old('hero_description_en') }}</textarea>
                            </div>
                            <div class="md:col-span-2">
                                <label for="hero_description_ar" class="block text-sm font-medium text-gray-700">Hero Description (Arabic)</label>
                                <textarea name="hero_description_ar" id="hero_description_ar" rows="3" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">{{ old('hero_description_ar') }}</textarea>
                            </div>
                            <div>
                                <label for="hero_button_primary_en" class="block text-sm font-medium text-gray-700">Primary Button (English)</label>
                                <input type="text" name="hero_button_primary_en" id="hero_button_primary_en" value="{{ old('hero_button_primary_en') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="hero_button_primary_ar" class="block text-sm font-medium text-gray-700">Primary Button (Arabic)</label>
                                <input type="text" name="hero_button_primary_ar" id="hero_button_primary_ar" value="{{ old('hero_button_primary_ar') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="hero_button_secondary_en" class="block text-sm font-medium text-gray-700">Secondary Button (English)</label>
                                <input type="text" name="hero_button_secondary_en" id="hero_button_secondary_en" value="{{ old('hero_button_secondary_en') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="hero_button_secondary_ar" class="block text-sm font-medium text-gray-700">Secondary Button (Arabic)</label>
                                <input type="text" name="hero_button_secondary_ar" id="hero_button_secondary_ar" value="{{ old('hero_button_secondary_ar') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                        </div>
                    </div>

                    <!-- Search and Filter Section -->
                    <div class="mb-8">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Search and Filter Section</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="search_placeholder_en" class="block text-sm font-medium text-gray-700">Search Placeholder (English)</label>
                                <input type="text" name="search_placeholder_en" id="search_placeholder_en" value="{{ old('search_placeholder_en') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="search_placeholder_ar" class="block text-sm font-medium text-gray-700">Search Placeholder (Arabic)</label>
                                <input type="text" name="search_placeholder_ar" id="search_placeholder_ar" value="{{ old('search_placeholder_ar') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="filter_all_en" class="block text-sm font-medium text-gray-700">Filter All (English)</label>
                                <input type="text" name="filter_all_en" id="filter_all_en" value="{{ old('filter_all_en') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="filter_all_ar" class="block text-sm font-medium text-gray-700">Filter All (Arabic)</label>
                                <input type="text" name="filter_all_ar" id="filter_all_ar" value="{{ old('filter_all_ar') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="filter_healthcare_en" class="block text-sm font-medium text-gray-700">Filter Healthcare (English)</label>
                                <input type="text" name="filter_healthcare_en" id="filter_healthcare_en" value="{{ old('filter_healthcare_en') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="filter_healthcare_ar" class="block text-sm font-medium text-gray-700">Filter Healthcare (Arabic)</label>
                                <input type="text" name="filter_healthcare_ar" id="filter_healthcare_ar" value="{{ old('filter_healthcare_ar') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="filter_finance_en" class="block text-sm font-medium text-gray-700">Filter Finance (English)</label>
                                <input type="text" name="filter_finance_en" id="filter_finance_en" value="{{ old('filter_finance_en') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="filter_finance_ar" class="block text-sm font-medium text-gray-700">Filter Finance (Arabic)</label>
                                <input type="text" name="filter_finance_ar" id="filter_finance_ar" value="{{ old('filter_finance_ar') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="filter_manufacturing_en" class="block text-sm font-medium text-gray-700">Filter Manufacturing (English)</label>
                                <input type="text" name="filter_manufacturing_en" id="filter_manufacturing_en" value="{{ old('filter_manufacturing_en') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="filter_manufacturing_ar" class="block text-sm font-medium text-gray-700">Filter Manufacturing (Arabic)</label>
                                <input type="text" name="filter_manufacturing_ar" id="filter_manufacturing_ar" value="{{ old('filter_manufacturing_ar') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="filter_retail_en" class="block text-sm font-medium text-gray-700">Filter Retail (English)</label>
                                <input type="text" name="filter_retail_en" id="filter_retail_en" value="{{ old('filter_retail_en') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="filter_retail_ar" class="block text-sm font-medium text-gray-700">Filter Retail (Arabic)</label>
                                <input type="text" name="filter_retail_ar" id="filter_retail_ar" value="{{ old('filter_retail_ar') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="reset_en" class="block text-sm font-medium text-gray-700">Reset (English)</label>
                                <input type="text" name="reset_en" id="reset_en" value="{{ old('reset_en') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="reset_ar" class="block text-sm font-medium text-gray-700">Reset (Arabic)</label>
                                <input type="text" name="reset_ar" id="reset_ar" value="{{ old('reset_ar') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                        </div>
                    </div>

                    <!-- Featured Section -->
                    <div class="mb-8">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Featured Section</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="featured_title_en" class="block text-sm font-medium text-gray-700">Featured Title (English)</label>
                                <input type="text" name="featured_title_en" id="featured_title_en" value="{{ old('featured_title_en') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="featured_title_ar" class="block text-sm font-medium text-gray-700">Featured Title (Arabic)</label>
                                <input type="text" name="featured_title_ar" id="featured_title_ar" value="{{ old('featured_title_ar') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div class="md:col-span-2">
                                <label for="featured_subtitle_en" class="block text-sm font-medium text-gray-700">Featured Subtitle (English)</label>
                                <textarea name="featured_subtitle_en" id="featured_subtitle_en" rows="2" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">{{ old('featured_subtitle_en') }}</textarea>
                            </div>
                            <div class="md:col-span-2">
                                <label for="featured_subtitle_ar" class="block text-sm font-medium text-gray-700">Featured Subtitle (Arabic)</label>
                                <textarea name="featured_subtitle_ar" id="featured_subtitle_ar" rows="2" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">{{ old('featured_subtitle_ar') }}</textarea>
                            </div>
                            <div>
                                <label for="completed_en" class="block text-sm font-medium text-gray-700">Completed (English)</label>
                                <input type="text" name="completed_en" id="completed_en" value="{{ old('completed_en') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="completed_ar" class="block text-sm font-medium text-gray-700">Completed (Arabic)</label>
                                <input type="text" name="completed_ar" id="completed_ar" value="{{ old('completed_ar') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="view_full_case_study_en" class="block text-sm font-medium text-gray-700">View Full Case Study (English)</label>
                                <input type="text" name="view_full_case_study_en" id="view_full_case_study_en" value="{{ old('view_full_case_study_en') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="view_full_case_study_ar" class="block text-sm font-medium text-gray-700">View Full Case Study (Arabic)</label>
                                <input type="text" name="view_full_case_study_ar" id="view_full_case_study_ar" value="{{ old('view_full_case_study_ar') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="start_similar_project_en" class="block text-sm font-medium text-gray-700">Start Similar Project (English)</label>
                                <input type="text" name="start_similar_project_en" id="start_similar_project_en" value="{{ old('start_similar_project_en') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="start_similar_project_ar" class="block text-sm font-medium text-gray-700">Start Similar Project (Arabic)</label>
                                <input type="text" name="start_similar_project_ar" id="start_similar_project_ar" value="{{ old('start_similar_project_ar') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                        </div>
                    </div>

                    <!-- Grid Section -->
                    <div class="mb-8">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Grid Section</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="grid_title_en" class="block text-sm font-medium text-gray-700">Grid Title (English)</label>
                                <input type="text" name="grid_title_en" id="grid_title_en" value="{{ old('grid_title_en') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="grid_title_ar" class="block text-sm font-medium text-gray-700">Grid Title (Arabic)</label>
                                <input type="text" name="grid_title_ar" id="grid_title_ar" value="{{ old('grid_title_ar') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div class="md:col-span-2">
                                <label for="grid_subtitle_en" class="block text-sm font-medium text-gray-700">Grid Subtitle (English)</label>
                                <textarea name="grid_subtitle_en" id="grid_subtitle_en" rows="2" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">{{ old('grid_subtitle_en') }}</textarea>
                            </div>
                            <div class="md:col-span-2">
                                <label for="grid_subtitle_ar" class="block text-sm font-medium text-gray-700">Grid Subtitle (Arabic)</label>
                                <textarea name="grid_subtitle_ar" id="grid_subtitle_ar" rows="2" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">{{ old('grid_subtitle_ar') }}</textarea>
                            </div>
                            <div>
                                <label for="view_case_study_en" class="block text-sm font-medium text-gray-700">View Case Study (English)</label>
                                <input type="text" name="view_case_study_en" id="view_case_study_en" value="{{ old('view_case_study_en') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="view_case_study_ar" class="block text-sm font-medium text-gray-700">View Case Study (Arabic)</label>
                                <input type="text" name="view_case_study_ar" id="view_case_study_ar" value="{{ old('view_case_study_ar') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="load_more_en" class="block text-sm font-medium text-gray-700">Load More (English)</label>
                                <input type="text" name="load_more_en" id="load_more_en" value="{{ old('load_more_en') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="load_more_ar" class="block text-sm font-medium text-gray-700">Load More (Arabic)</label>
                                <input type="text" name="load_more_ar" id="load_more_ar" value="{{ old('load_more_ar') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                        </div>
                    </div>

                    <!-- Metrics Section -->
                    <div class="mb-8">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Metrics Section</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="metrics_title_en" class="block text-sm font-medium text-gray-700">Metrics Title (English)</label>
                                <input type="text" name="metrics_title_en" id="metrics_title_en" value="{{ old('metrics_title_en') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="metrics_title_ar" class="block text-sm font-medium text-gray-700">Metrics Title (Arabic)</label>
                                <input type="text" name="metrics_title_ar" id="metrics_title_ar" value="{{ old('metrics_title_ar') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div class="md:col-span-2">
                                <label for="metrics_subtitle_en" class="block text-sm font-medium text-gray-700">Metrics Subtitle (English)</label>
                                <textarea name="metrics_subtitle_en" id="metrics_subtitle_en" rows="2" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">{{ old('metrics_subtitle_en') }}</textarea>
                            </div>
                            <div class="md:col-span-2">
                                <label for="metrics_subtitle_ar" class="block text-sm font-medium text-gray-700">Metrics Subtitle (Arabic)</label>
                                <textarea name="metrics_subtitle_ar" id="metrics_subtitle_ar" rows="2" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">{{ old('metrics_subtitle_ar') }}</textarea>
                            </div>
                            <div>
                                <label for="projects_delivered_en" class="block text-sm font-medium text-gray-700">Projects Delivered (English)</label>
                                <input type="text" name="projects_delivered_en" id="projects_delivered_en" value="{{ old('projects_delivered_en') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="projects_delivered_ar" class="block text-sm font-medium text-gray-700">Projects Delivered (Arabic)</label>
                                <input type="text" name="projects_delivered_ar" id="projects_delivered_ar" value="{{ old('projects_delivered_ar') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="client_satisfaction_en" class="block text-sm font-medium text-gray-700">Client Satisfaction (English)</label>
                                <input type="text" name="client_satisfaction_en" id="client_satisfaction_en" value="{{ old('client_satisfaction_en') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="client_satisfaction_ar" class="block text-sm font-medium text-gray-700">Client Satisfaction (Arabic)</label>
                                <input type="text" name="client_satisfaction_ar" id="client_satisfaction_ar" value="{{ old('client_satisfaction_ar') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="avg_roi_en" class="block text-sm font-medium text-gray-700">Average ROI (English)</label>
                                <input type="text" name="avg_roi_en" id="avg_roi_en" value="{{ old('avg_roi_en') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="avg_roi_ar" class="block text-sm font-medium text-gray-700">Average ROI (Arabic)</label>
                                <input type="text" name="avg_roi_ar" id="avg_roi_ar" value="{{ old('avg_roi_ar') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="years_experience_en" class="block text-sm font-medium text-gray-700">Years Experience (English)</label>
                                <input type="text" name="years_experience_en" id="years_experience_en" value="{{ old('years_experience_en') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="years_experience_ar" class="block text-sm font-medium text-gray-700">Years Experience (Arabic)</label>
                                <input type="text" name="years_experience_ar" id="years_experience_ar" value="{{ old('years_experience_ar') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                        </div>
                    </div>

                    <!-- CTA Section -->
                    <div class="mb-8">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">CTA Section</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="cta_title_en" class="block text-sm font-medium text-gray-700">CTA Title (English)</label>
                                <input type="text" name="cta_title_en" id="cta_title_en" value="{{ old('cta_title_en') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="cta_title_ar" class="block text-sm font-medium text-gray-700">CTA Title (Arabic)</label>
                                <input type="text" name="cta_title_ar" id="cta_title_ar" value="{{ old('cta_title_ar') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div class="md:col-span-2">
                                <label for="cta_description_en" class="block text-sm font-medium text-gray-700">CTA Description (English)</label>
                                <textarea name="cta_description_en" id="cta_description_en" rows="3" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">{{ old('cta_description_en') }}</textarea>
                            </div>
                            <div class="md:col-span-2">
                                <label for="cta_description_ar" class="block text-sm font-medium text-gray-700">CTA Description (Arabic)</label>
                                <textarea name="cta_description_ar" id="cta_description_ar" rows="3" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">{{ old('cta_description_ar') }}</textarea>
                            </div>
                            <div>
                                <label for="cta_button_primary_en" class="block text-sm font-medium text-gray-700">Primary Button (English)</label>
                                <input type="text" name="cta_button_primary_en" id="cta_button_primary_en" value="{{ old('cta_button_primary_en') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="cta_button_primary_ar" class="block text-sm font-medium text-gray-700">Primary Button (Arabic)</label>
                                <input type="text" name="cta_button_primary_ar" id="cta_button_primary_ar" value="{{ old('cta_button_primary_ar') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="cta_button_secondary_en" class="block text-sm font-medium text-gray-700">Secondary Button (English)</label>
                                <input type="text" name="cta_button_secondary_en" id="cta_button_secondary_en" value="{{ old('cta_button_secondary_en') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="cta_button_secondary_ar" class="block text-sm font-medium text-gray-700">Secondary Button (Arabic)</label>
                                <input type="text" name="cta_button_secondary_ar" id="cta_button_secondary_ar" value="{{ old('cta_button_secondary_ar') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-end mt-6">
                        <a href="{{ route('admin.case-study-pages.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mr-3">Cancel</a>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create Case Study Page</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
