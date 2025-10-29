@extends('layouts.app')

@section('title', __('case_studies.meta_title'))
@section('description', __('case_studies.description'))

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-primary-50 to-accent-50 overflow-hidden">
        <div class="absolute inset-0 bg-white/50"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-32">
            <div class="text-center">
                <h1 class="text-4xl lg:text-6xl font-bold text-secondary-900 mb-6 leading-tight">
                    {{ __('case_studies.hero_title') }}
                </h1>
                <p class="text-xl text-secondary-600 mb-8 leading-relaxed max-w-3xl mx-auto">
                    {{ __('case_studies.hero_description') }}
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('contact.index') }}" class="btn-primary text-lg px-8 py-4">{{ __('case_studies.hero_button_primary') }}</a>
                    <a href="#case-studies" class="btn-secondary text-lg px-8 py-4">{{ __('case_studies.hero_button_secondary') }}</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Search and Filter Section -->
    <section class="py-12 bg-white border-b border-secondary-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-6 items-center">
                <!-- Search Bar -->
                <div class="flex-1 relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-secondary-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <input type="text" id="search-input" placeholder="{{ __('case_studies.search_placeholder') }}"
                           class="input-field pl-10 pr-4 py-3 w-full">
                </div>

                <!-- Filter Buttons -->
                <div class="flex flex-wrap gap-3">
                    <button onclick="filterCaseStudies('all')" class="filter-btn active" data-filter="all">
                        {{ __('case_studies.filter_all') }}
                    </button>
                    <button onclick="filterCaseStudies('healthcare')" class="filter-btn" data-filter="healthcare">
                        {{ __('case_studies.filter_healthcare') }}
                    </button>
                    <button onclick="filterCaseStudies('finance')" class="filter-btn" data-filter="finance">
                        {{ __('case_studies.filter_finance') }}
                    </button>
                    <button onclick="filterCaseStudies('manufacturing')" class="filter-btn" data-filter="manufacturing">
                        {{ __('case_studies.filter_manufacturing') }}
                    </button>
                    <button onclick="filterCaseStudies('retail')" class="filter-btn" data-filter="retail">
                        {{ __('case_studies.filter_retail') }}
                    </button>
                </div>

                <!-- Reset Filter -->
                <button onclick="resetFilters()" class="text-secondary-600 hover:text-primary transition-smooth flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                    </svg>
                    {{ __('case_studies.reset') }}
                </button>
            </div>
        </div>
    </section>

    <!-- Featured Case Study -->
    <section class="py-20 bg-surface">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-secondary-900 mb-4">
                    {{ __('case_studies.featured_title') }}
                </h2>
                <p class="text-xl text-secondary-600">
                    {{ __('case_studies.featured_subtitle') }}
                </p>
            </div>

            @if($featuredCaseStudy)
            <div class="card-elevated">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <div class="flex items-center mb-4">
                            <span class="bg-primary-100 text-primary px-3 py-1 rounded-full text-sm font-semibold mr-3">{{ ucfirst($featuredCaseStudy->industry) }}</span>
                            <span class="text-secondary-500 text-sm">{{ __('case_studies.completed') }} {{ $featuredCaseStudy->completed_at->format('F Y') }}</span>
                        </div>
                        <h3 class="text-2xl lg:text-3xl font-bold text-secondary-900 mb-4">
                            {{ $featuredCaseStudy->title }}
                        </h3>
                        <p class="text-secondary-600 mb-6 text-lg">
                            {{ $featuredCaseStudy->description }}
                        </p>

                        <!-- Key Metrics -->
                        <div class="grid grid-cols-3 gap-4 mb-6">
                            @foreach($featuredCaseStudy->metrics as $metric)
                            <div class="text-center">
                                <div class="text-2xl font-bold text-success">{{ $metric['value'] }}</div>
                                <div class="text-sm text-secondary-600">{{ $metric['label'] }}</div>
                            </div>
                            @endforeach
                        </div>

                        <div class="flex flex-col sm:flex-row gap-4">
                            @if($featuredCaseStudy->project_url)
                                <a href="{{ $featuredCaseStudy->project_url }}" target="_blank" class="btn-primary">
                                    {{ __('case_studies.view_full_case_study') }}
                                </a>
                            @else
                                <a href="javascript:void(0)" onclick="openCaseStudyModal('{{ $featuredCaseStudy->id }}')" class="btn-primary">
                                    {{ __('case_studies.view_full_case_study') }}
                                </a>
                            @endif
                            <a href="{{ route('contact.index') }}" class="btn-secondary">
                                {{ __('case_studies.start_similar_project') }}
                            </a>
                        </div>
                    </div>
                    <div class="relative">
                        <img src="{{ $featuredCaseStudy->image_url }}"
                             alt="{{ $featuredCaseStudy->title }}"
                             class="rounded-lg shadow-deep w-full h-auto max-h-96 object-cover"
                             loading="lazy"
                             onerror="this.src='https://images.pexels.com/photos/4386466/pexels-photo-4386466.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;">
                        <div class="absolute -top-4 -right-4 w-72 h-72 bg-primary/10 rounded-full blur-3xl"></div>
                        <div class="absolute -bottom-4 -left-4 w-72 h-72 bg-accent/10 rounded-full blur-3xl"></div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </section>

    <!-- Case Studies Grid -->
    <section id="case-studies" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-secondary-900 mb-4">
                    {{ __('case_studies.grid_title') }}
                </h2>
                <p class="text-xl text-secondary-600">
                    {{ __('case_studies.grid_subtitle') }}
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8" id="case-studies-grid">
                @foreach($caseStudies as $caseStudy)
                <div class="case-study-card card group hover:shadow-lg transition-all duration-300" data-industry="{{ $caseStudy->industry }}">
                    <div class="relative mb-6">
                        <img src="{{ $caseStudy->image_url }}"
                             alt="{{ $caseStudy->title }}"
                             class="w-full h-auto max-h-48 object-cover rounded-lg"
                             loading="lazy"
                             onerror="this.src='https://images.pexels.com/photos/590022/pexels-photo-590022.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;">
                        <div class="absolute top-4 left-4">
                            <span class="bg-{{ $caseStudy->industry }}-100 text-{{ $caseStudy->industry }} px-3 py-1 rounded-full text-sm font-semibold">{{ ucfirst($caseStudy->industry) }}</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary-900 mb-3">
                        {{ $caseStudy->title }}
                    </h3>
                    <p class="text-secondary-600 mb-4">
                        {{ Str::limit($caseStudy->description, 100) }}
                    </p>
                    <div class="flex justify-between items-center mb-4">
                        <div class="text-sm text-secondary-500">{{ __('case_studies.completed') }} {{ $caseStudy->completed_at->format('M Y') }}</div>
                    </div>
                    @if($caseStudy->project_url)
                        <a href="{{ $caseStudy->project_url }}" target="_blank" class="w-full btn-secondary group-hover:btn-primary transition-all duration-300 text-center block">
                            {{ __('case_studies.view_case_study') }}
                        </a>
                    @else
                        <button onclick="openCaseStudyModal('{{ $caseStudy->id }}')" class="w-full btn-secondary group-hover:btn-primary transition-all duration-300">
                            {{ __('case_studies.view_case_study') }}
                        </button>
                    @endif
                </div>
                @endforeach
            </div>

            <!-- Load More Button -->
            <div class="text-center mt-12">
                <button onclick="loadMoreCaseStudies()" class="btn-secondary text-lg px-8 py-4" id="load-more-btn">
                    {{ __('case_studies.load_more') }}
                </button>
            </div>
        </div>
    </section>

    <!-- Success Metrics Section -->
    <section class="py-20 bg-gradient-to-r from-primary to-primary-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4">
                    {{ __('case_studies.metrics_title') }}
                </h2>
                <p class="text-xl text-primary-100">
                    {{ __('case_studies.metrics_subtitle') }}
                </p>
            </div>

            <div class="grid md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-4xl lg:text-5xl font-bold text-white mb-2">150+</div>
                    <div class="text-primary-100">{{ __('case_studies.projects_delivered') }}</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl lg:text-5xl font-bold text-white mb-2">98%</div>
                    <div class="text-primary-100">{{ __('case_studies.client_satisfaction') }}</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl lg:text-5xl font-bold text-white mb-2">320%</div>
                    <div class="text-primary-100">{{ __('case_studies.avg_roi') }}</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl lg:text-5xl font-bold text-white mb-2">7</div>
                    <div class="text-primary-100">{{ __('case_studies.years_experience') }}</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-primary to-primary-700">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl lg:text-4xl font-bold text-white mb-6">
                {{ __('case_studies.cta_title') }}
            </h2>
            <p class="text-xl text-primary-100 mb-8 max-w-2xl mx-auto">
                {{ __('case_studies.cta_description') }}
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact.index') }}" class="bg-white text-primary px-8 py-4 rounded-lg font-semibold text-lg hover:bg-primary-50 transition-all duration-300 shadow-lg hover:shadow-xl">
                    {{ __('case_studies.cta_button_primary') }}
                </a>
                <a href="{{ route('case-studies.index') }}" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white hover:text-primary transition-all duration-300">
                    {{ __('case_studies.cta_button_secondary') }}
                </a>
            </div>
        </div>
    </section>
@endsection
