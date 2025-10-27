@extends('layouts.app')

@section('title', $servicePage ? $servicePage->getTranslation('hero_title', app()->getLocale()) : __('services.meta_title'))
@section('description', $servicePage ? $servicePage->getTranslation('hero_description', app()->getLocale()) : __('services.description'))

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-primary-50 to-accent-50 overflow-hidden">
        <div class="absolute inset-0 bg-white/50"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-32">
            <div class="text-center">
                <h1 class="text-4xl lg:text-6xl font-bold text-secondary-900 mb-6 leading-tight">
                    {{ $servicePage ? $servicePage->getTranslation('hero_title', app()->getLocale()) : __('services.hero_title') }}
                    <span class="text-gradient">{{ $servicePage ? $servicePage->getTranslation('hero_highlight', app()->getLocale()) : __('services.hero_highlight') }}</span>
                </h1>
                <p class="text-xl text-secondary-600 mb-8 max-w-3xl mx-auto leading-relaxed">
                    {{ $servicePage ? $servicePage->getTranslation('hero_description', app()->getLocale()) : __('services.hero_description') }}
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('contact.index') }}" class="btn-primary text-lg px-8 py-4">{{ $servicePage ? $servicePage->getTranslation('hero_button_primary', app()->getLocale()) : __('services.hero_button_primary') }}</a>
                    <a href="{{ route('case-studies.index') }}" class="btn-secondary text-lg px-8 py-4">{{ $servicePage ? $servicePage->getTranslation('hero_button_secondary', app()->getLocale()) : __('services.hero_button_secondary') }}</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Interactive Service Filter -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-bold text-secondary-900 mb-4">
                    {{ $servicePage ? $servicePage->getTranslation('find_title', app()->getLocale()) : __('services.find_title') }}
                </h2>
                <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                    {{ $servicePage ? $servicePage->getTranslation('find_description', app()->getLocale()) : __('services.find_description') }}
                </p>
            </div>

            <!-- Filter Controls -->
            <div class="flex flex-wrap justify-center gap-4 mb-12">
                <button class="filter-btn active" data-filter="all">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    </svg>
                    {{ $servicePage ? $servicePage->getTranslation('filter_all', app()->getLocale()) : __('services.filter_all') }}
                </button>
                <button class="filter-btn" data-filter="development">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                    {{ $servicePage ? $servicePage->getTranslation('filter_development', app()->getLocale()) : __('services.filter_development') }}
                </button>
                <button class="filter-btn" data-filter="cloud">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M5.5 16a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 16h-8z"></path>
                    </svg>
                    {{ $servicePage ? $servicePage->getTranslation('filter_cloud', app()->getLocale()) : __('services.filter_cloud') }}
                </button>
                <button class="filter-btn" data-filter="consulting">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                    </svg>
                    {{ $servicePage ? $servicePage->getTranslation('filter_consulting', app()->getLocale()) : __('services.filter_consulting') }}
                </button>
                <button class="reset-btn" onclick="resetFilters()">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 110-2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd"></path>
                    </svg>
                    {{ $servicePage ? $servicePage->getTranslation('reset', app()->getLocale()) : __('services.reset') }}
                </button>
            </div>
        </div>
    </section>

    <!-- Core Services Grid -->
    <section class="py-20 bg-surface">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12" id="services-grid">
                @foreach($services as $service)
                <div class="service-card {{ $service->category }}" data-category="{{ $service->category }}">
                    <div class="card-elevated h-full">
                        <div class="flex items-start space-x-4 mb-6">
                            <div class="w-16 h-16 bg-primary-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                @if($service->icon == 'code')
                                <svg class="w-8 h-8 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h4a1 1 0 010 2H6.414l2.293 2.293a1 1 0 01-1.414 1.414L5 6.414V8a1 1 0 01-2 0V4zm9 1a1 1 0 010-2h4a1 1 0 011 1v4a1 1 0 01-2 0V6.414l-2.293 2.293a1 1 0 11-1.414-1.414L13.586 5H12zm-9 7a1 1 0 012 0v1.586l2.293-2.293a1 1 0 111.414 1.414L6.414 15H8a1 1 0 010 2H4a1 1 0 01-1-1v-4zm13-1a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 010-2h1.586l-2.293-2.293a1 1 0 111.414-1.414L15 13.586V12a1 1 0 011-1z" clip-rule="evenodd"></path>
                                </svg>
                                @elseif($service->icon == 'web')
                                <svg class="w-8 h-8 text-accent" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd"></path>
                                    <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V9a1 1 0 00-1-1h-1v-1z"></path>
                                </svg>
                                @elseif($service->icon == 'cloud')
                                <svg class="w-8 h-8 text-success" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M5.5 16a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 16h-8z"></path>
                                </svg>
                                @elseif($service->icon == 'consulting')
                                <svg class="w-8 h-8 text-warning" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                                </svg>
                                @elseif($service->icon == 'mobile')
                                <svg class="w-8 h-8 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7 2a2 2 0 00-2 2v12a2 2 0 002 2h6a2 2 0 002-2V4a2 2 0 00-2-2H7zm3 14a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                                </svg>
                                @elseif($service->icon == 'api')
                                <svg class="w-8 h-8 text-accent" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M3 4a1 1 0 000 2h.01a1 1 0 100-2H3zm2.01 0a1 1 0 000 2h.01a1 1 0 100-2h-.01zM7 4a1 1 0 000 2h.01a1 1 0 100-2H7zM3 8a1 1 0 000 2h.01a1 1 0 100-2H3zm2.01 0a1 1 0 000 2h.01a1 1 0 100-2h-.01zM7 8a1 1 0 000 2h.01a1 1 0 100-2H7zm2 0a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1zm1 4a1 1 0 100 2h6a1 1 0 100-2h-6z" clip-rule="evenodd"></path>
                                </svg>
                                @endif
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold text-secondary-900 mb-2">{{ $service->title }}</h3>
                                <p class="text-secondary-600 mb-4">{{ $service->description }}</p>
                            </div>
                        </div>

                        <div class="space-y-4 mb-6">
                            @foreach($service->features as $feature)
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-secondary-700">{{ $feature }}</span>
                            </div>
                            @endforeach
                        </div>

                        <div class="bg-secondary-50 rounded-lg p-4 mb-6">
                            <div class="flex items-center justify-between text-sm">
                                <span class="text-secondary-600">{{ __('services.typical_timeline') }}</span>
                                <span class="font-semibold text-secondary-900">{{ $service->timeline }}</span>
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <a href="{{ route('case-studies.index') }}" class="text-primary font-semibold hover:text-primary-700 transition-colors">
                                {{ __('services.view_case_studies') }}
                            </a>
                            <a href="{{ route('contact.index') }}" class="btn-primary">{{ __('services.get_quote') }}</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Technology Showcase -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-secondary-900 mb-4">
                    {{ $servicePage ? $servicePage->getTranslation('technology_title', app()->getLocale()) : __('services.technology_title') }}
                </h2>
                <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                    {{ $servicePage ? $servicePage->getTranslation('technology_description', app()->getLocale()) : __('services.technology_description') }}
                </p>
            </div>

            <div class="grid md:grid-cols-4 gap-8">
                @foreach($technologyCategories as $category)
                <div class="text-center">
                    <div class="w-16 h-16 {{ $category->color_class ?? 'bg-primary-100' }} rounded-full flex items-center justify-center mx-auto mb-4">
                        @if($category->name == 'Frontend' || $category->getNameInLocale('en') == 'Frontend')
                            <i class="fas fa-code text-primary text-2xl"></i>
                        @elseif($category->name == 'Backend' || $category->getNameInLocale('en') == 'Backend')
                            <i class="fas fa-server text-accent text-2xl"></i>
                        @elseif($category->name == 'Database' || $category->getNameInLocale('en') == 'Database')
                            <i class="fas fa-database text-success text-2xl"></i>
                        @elseif($category->name == 'Cloud' || $category->getNameInLocale('en') == 'Cloud')
                            <i class="fas fa-cloud text-warning text-2xl"></i>
                        @elseif($category->name == 'Mobile' || $category->getNameInLocale('en') == 'Mobile')
                            <i class="fas fa-mobile-alt text-accent text-2xl"></i>
                        @elseif($category->name == 'Emerging' || $category->getNameInLocale('en') == 'Emerging')
                            <i class="fas fa-lightbulb text-primary text-2xl"></i>
                        @else
                            <i class="fas fa-cube text-primary text-2xl"></i>
                        @endif
                    </div>
                    <h3 class="text-lg font-semibold text-secondary-900 mb-2">{{ $category->name }}</h3>
                    <p class="text-secondary-600 text-sm mb-3">{{ $category->description }}</p>
                    <a href="{{ route('technology-stack.index') }}" class="text-primary text-sm font-semibold hover:text-primary-700">
                        {{ $servicePage ? $servicePage->getTranslation('learn_more', app()->getLocale()) : __('services.learn_more') }}
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Process Overview -->
    <section class="py-20 bg-surface">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-secondary-900 mb-4">
                    {{ $servicePage ? $servicePage->getTranslation('process_title', app()->getLocale()) : __('services.process_title') }}
                </h2>
                <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                    {{ $servicePage ? $servicePage->getTranslation('process_description', app()->getLocale()) : __('services.process_description') }}
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Discovery & Planning -->
                <div class="card-elevated text-center">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-primary" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary-900 mb-3">{{ $servicePage ? $servicePage->getTranslation('process_discovery', app()->getLocale()) : __('services.process_discovery') }}</h3>
                    <p class="text-secondary-600 text-sm">{{ $servicePage ? $servicePage->getTranslation('process_discovery_desc', app()->getLocale()) : __('services.process_discovery_desc') }}</p>
                </div>

                <!-- Design & Prototyping -->
                <div class="card-elevated text-center">
                    <div class="w-16 h-16 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-accent" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4 2a2 2 0 00-2 2v11a3 3 0 106 0V4a2 2 0 00-2-2H4zm1 14a1 1 0 100-2 1 1 0 000 2zm5-1.757l4.9-4.9a2 2 0 000-2.828L13.485 5.1a2 2 0 00-2.828 0L10 5.757v8.486zM16 18H9.071l6-6H16a2 2 0 012 2v2a2 2 0 01-2 2z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary-900 mb-3">{{ $servicePage ? $servicePage->getTranslation('process_design', app()->getLocale()) : __('services.process_design') }}</h3>
                    <p class="text-secondary-600 text-sm">{{ $servicePage ? $servicePage->getTranslation('process_design_desc', app()->getLocale()) : __('services.process_design_desc') }}</p>
                </div>

                <!-- Development & Testing -->
                <div class="card-elevated text-center">
                    <div class="w-16 h-16 bg-success-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-success" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary-900 mb-3">{{ $servicePage ? $servicePage->getTranslation('process_development', app()->getLocale()) : __('services.process_development') }}</h3>
                    <p class="text-secondary-600 text-sm">{{ $servicePage ? $servicePage->getTranslation('process_development_desc', app()->getLocale()) : __('services.process_development_desc') }}</p>
                </div>

                <!-- Deployment & Support -->
                <div class="card-elevated text-center">
                    <div class="w-16 h-16 bg-warning-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-warning" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 4a1 1 0 000 2h.01a1 1 0 100-2H3zm2.01 0a1 1 0 000 2h.01a1 1 0 100-2h-.01zM7 4a1 1 0 000 2h.01a1 1 0 100-2H7zM3 8a1 1 0 000 2h.01a1 1 0 100-2H3zm2.01 0a1 1 0 000 2h.01a1 1 0 100-2h-.01zM7 8a1 1 0 000 2h.01a1 1 0 100-2H7zm2 0a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1zm1 4a1 1 0 100 2h6a1 1 0 100-2h-6z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary-900 mb-3">{{ $servicePage ? $servicePage->getTranslation('process_deployment', app()->getLocale()) : __('services.process_deployment') }}</h3>
                    <p class="text-secondary-600 text-sm">{{ $servicePage ? $servicePage->getTranslation('process_deployment_desc', app()->getLocale()) : __('services.process_deployment_desc') }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-primary to-primary-700">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl lg:text-4xl font-bold text-white mb-6">
                {{ $servicePage ? $servicePage->getTranslation('cta_title', app()->getLocale()) : __('services.cta_title') }}
            </h2>
            <p class="text-xl text-primary-100 mb-8 max-w-2xl mx-auto">
                {{ $servicePage ? $servicePage->getTranslation('cta_description', app()->getLocale()) : __('services.cta_description') }}
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact.index') }}" class="bg-white text-primary px-8 py-4 rounded-lg font-semibold text-lg hover:bg-primary-50 transition-all duration-300 shadow-lg hover:shadow-xl">
                    {{ $servicePage ? $servicePage->getTranslation('cta_button_primary', app()->getLocale()) : __('services.cta_button_primary') }}
                </a>
                <a href="{{ route('case-studies.index') }}" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white hover:text-primary transition-all duration-300">
                    {{ $servicePage ? $servicePage->getTranslation('cta_button_secondary', app()->getLocale()) : __('services.cta_button_secondary') }}
                </a>
            </div>
        </div>
    </section>
@endsection
