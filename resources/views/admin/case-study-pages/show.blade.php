@extends('layouts.admin')

@section('title', 'Case Study Page Details')

@section('content')
<div class="py-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-semibold text-gray-800">Case Study Page Details</h2>
                    <div>
                        <a href="{{ route('admin.case-study-pages.edit', $caseStudyPage) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">Edit</a>
                        <a href="{{ route('admin.case-study-pages.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Back</a>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Page Information</h3>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <div class="mb-3">
                                <label class="block text-sm font-medium text-gray-700">Page Name</label>
                                <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->page_name }}</div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Status</label>
                                <div class="mt-1">
                                    @if($caseStudyPage->is_active)
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                                    @else
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Inactive</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Timestamps</h3>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <div class="mb-3">
                                <label class="block text-sm font-medium text-gray-700">Created At</label>
                                <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->created_at->format('M d, Y H:i:s') }}</div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Updated At</label>
                                <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->updated_at->format('M d, Y H:i:s') }}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Hero Section -->
                <div class="mt-8">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Hero Section</h3>
                    <div class="bg-gray-50 p-4 rounded-lg grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Hero Title (English)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('hero_title', 'en') }}</div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Hero Title (Arabic)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('hero_title', 'ar') }}</div>
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700">Hero Description (English)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('hero_description', 'en') }}</div>
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700">Hero Description (Arabic)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('hero_description', 'ar') }}</div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Primary Button (English)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('hero_button_primary', 'en') }}</div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Primary Button (Arabic)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('hero_button_primary', 'ar') }}</div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Secondary Button (English)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('hero_button_secondary', 'en') }}</div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Secondary Button (Arabic)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('hero_button_secondary', 'ar') }}</div>
                        </div>
                    </div>
                </div>

                <!-- Search and Filter Section -->
                <div class="mt-8">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Search and Filter Section</h3>
                    <div class="bg-gray-50 p-4 rounded-lg grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Search Placeholder (English)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('search_placeholder', 'en') }}</div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Search Placeholder (Arabic)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('search_placeholder', 'ar') }}</div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Filter All (English)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('filter_all', 'en') }}</div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Filter All (Arabic)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('filter_all', 'ar') }}</div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Filter Healthcare (English)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('filter_healthcare', 'en') }}</div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Filter Healthcare (Arabic)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('filter_healthcare', 'ar') }}</div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Filter Finance (English)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('filter_finance', 'en') }}</div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Filter Finance (Arabic)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('filter_finance', 'ar') }}</div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Filter Manufacturing (English)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('filter_manufacturing', 'en') }}</div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Filter Manufacturing (Arabic)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('filter_manufacturing', 'ar') }}</div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Filter Retail (English)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('filter_retail', 'en') }}</div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Filter Retail (Arabic)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('filter_retail', 'ar') }}</div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Reset (English)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('reset', 'en') }}</div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Reset (Arabic)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('reset', 'ar') }}</div>
                        </div>
                    </div>
                </div>

                <!-- Featured Section -->
                <div class="mt-8">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Featured Section</h3>
                    <div class="bg-gray-50 p-4 rounded-lg grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Featured Title (English)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('featured_title', 'en') }}</div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Featured Title (Arabic)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('featured_title', 'ar') }}</div>
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700">Featured Subtitle (English)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('featured_subtitle', 'en') }}</div>
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700">Featured Subtitle (Arabic)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('featured_subtitle', 'ar') }}</div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Completed (English)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('completed', 'en') }}</div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Completed (Arabic)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('completed', 'ar') }}</div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">View Full Case Study (English)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('view_full_case_study', 'en') }}</div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">View Full Case Study (Arabic)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('view_full_case_study', 'ar') }}</div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Start Similar Project (English)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('start_similar_project', 'en') }}</div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Start Similar Project (Arabic)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('start_similar_project', 'ar') }}</div>
                        </div>
                    </div>
                </div>

                <!-- Grid Section -->
                <div class="mt-8">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Grid Section</h3>
                    <div class="bg-gray-50 p-4 rounded-lg grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Grid Title (English)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('grid_title', 'en') }}</div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Grid Title (Arabic)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('grid_title', 'ar') }}</div>
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700">Grid Subtitle (English)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('grid_subtitle', 'en') }}</div>
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700">Grid Subtitle (Arabic)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('grid_subtitle', 'ar') }}</div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">View Case Study (English)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('view_case_study', 'en') }}</div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">View Case Study (Arabic)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('view_case_study', 'ar') }}</div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Load More (English)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('load_more', 'en') }}</div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Load More (Arabic)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('load_more', 'ar') }}</div>
                        </div>
                    </div>
                </div>

                <!-- Metrics Section -->
                <div class="mt-8">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Metrics Section</h3>
                    <div class="bg-gray-50 p-4 rounded-lg grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Metrics Title (English)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('metrics_title', 'en') }}</div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Metrics Title (Arabic)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('metrics_title', 'ar') }}</div>
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700">Metrics Subtitle (English)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('metrics_subtitle', 'en') }}</div>
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700">Metrics Subtitle (Arabic)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('metrics_subtitle', 'ar') }}</div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Projects Delivered (English)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('projects_delivered', 'en') }}</div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Projects Delivered (Arabic)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('projects_delivered', 'ar') }}</div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Client Satisfaction (English)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('client_satisfaction', 'en') }}</div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Client Satisfaction (Arabic)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('client_satisfaction', 'ar') }}</div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Average ROI (English)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('avg_roi', 'en') }}</div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Average ROI (Arabic)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('avg_roi', 'ar') }}</div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Years Experience (English)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('years_experience', 'en') }}</div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Years Experience (Arabic)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('years_experience', 'ar') }}</div>
                        </div>
                    </div>
                </div>

                <!-- CTA Section -->
                <div class="mt-8">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">CTA Section</h3>
                    <div class="bg-gray-50 p-4 rounded-lg grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">CTA Title (English)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('cta_title', 'en') }}</div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">CTA Title (Arabic)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('cta_title', 'ar') }}</div>
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700">CTA Description (English)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('cta_description', 'en') }}</div>
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700">CTA Description (Arabic)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('cta_description', 'ar') }}</div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Primary Button (English)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('cta_button_primary', 'en') }}</div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Primary Button (Arabic)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('cta_button_primary', 'ar') }}</div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Secondary Button (English)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('cta_button_secondary', 'en') }}</div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Secondary Button (Arabic)</label>
                            <div class="mt-1 text-sm text-gray-900">{{ $caseStudyPage->getTranslation('cta_button_secondary', 'ar') }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
