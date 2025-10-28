@extends('layouts.app')

@section('title', $aboutSections->where('section_name', 'hero')->first()->title ?? __('about.meta_title'))
@section('description', $aboutSections->where('section_name', 'hero')->first()->description ?? __('about.description'))

@section('content')
    @php
        $heroSection = $aboutSections->where('section_name', 'hero')->first();
        $storySection = $aboutSections->where('section_name', 'company_story')->first();
        $foundationSection = $aboutSections->where('section_name', 'foundation')->first();
        $cultureSection = $aboutSections->where('section_name', 'culture')->first();
        $ctaSection = $aboutSections->where('section_name', 'cta')->first();
    @endphp

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-primary-50 to-accent-50 overflow-hidden">
        <div class="absolute inset-0 bg-white/50"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-32">
            <div class="text-center">
                <h1 class="text-4xl lg:text-6xl font-bold text-secondary-900 mb-6 leading-tight">
                    {{ $heroSection->title ?? __('about.hero_title') }}
                    <span class="text-gradient">{{ __('about.hero_highlight') }}</span>
                </h1>
                <p class="text-xl text-secondary-600 mb-8 max-w-3xl mx-auto leading-relaxed">
                    {{ $heroSection->description ?? __('about.hero_description') }}
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('contact.index') }}" class="btn-primary text-lg px-8 py-4">{{ $heroSection->content['hero_button_primary'] ?? __('about.hero_button_primary') }}</a>
                    <a href="{{ route('case-studies.index') }}" class="btn-secondary text-lg px-8 py-4">{{ $heroSection->content['hero_button_secondary'] ?? __('about.hero_button_secondary') }}</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Story -->
    @if($storySection)
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-3xl lg:text-4xl font-bold text-secondary-900 mb-6">
                        {{ $storySection->title ?? __('about.story_title') }}
                    </h2>
                    <div class="space-y-6 text-lg text-secondary-600">
                        <p>
                            {{ $storySection->content['story_description_1'] ?? __('about.story_description_1') }}
                        </p>
                        <p>
                            {{ $storySection->content['story_description_2'] ?? __('about.story_description_2') }}
                        </p>
                        <p>
                            {{ $storySection->content['story_description_3'] ?? __('about.story_description_3') }}
                        </p>
                    </div>
                    <div class="mt-8 grid grid-cols-3 gap-8">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-primary mb-2">150+</div>
                            <div class="text-sm text-secondary-600">{{ $storySection->content['projects_delivered'] ?? __('about.projects_delivered') }}</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-primary mb-2">98%</div>
                            <div class="text-sm text-secondary-600">{{ $storySection->content['client_satisfaction'] ?? __('about.client_satisfaction') }}</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-primary mb-2">7</div>
                            <div class="text-sm text-secondary-600">{{ $storySection->content['years_of_excellence'] ?? __('about.years_of_excellence') }}</div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="relative z-10">
                        <img src="https://images.unsplash.com/photo-1690192078982-d3d2f89059ee"
                             alt="{{ $storySection->title ?? __('about.story_title') }}"
                             class="rounded-lg shadow-deep w-full h-96 object-cover"
                             loading="lazy"
                             onerror="this.src='https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;">
                    </div>
                    <div class="absolute -top-4 -right-4 w-72 h-72 bg-accent/10 rounded-full blur-3xl"></div>
                    <div class="absolute -bottom-4 -left-4 w-72 h-72 bg-primary/10 rounded-full blur-3xl"></div>
                </div>
            </div>
        </div>
    </section>
    @endif

    <!-- Mission, Vision & Values -->
    @if($foundationSection)
    <section class="py-20 bg-surface">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-secondary-900 mb-4">
                    {{ $foundationSection->title ?? __('about.foundation_title') }}
                </h2>
                <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                    {{ $foundationSection->description ?? __('about.foundation_description') }}
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Mission -->
                <div class="card-elevated text-center">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-primary" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.293l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary-900 mb-4">{{ $foundationSection->content['mission_title'] ?? __('about.mission_title') }}</h3>
                    <p class="text-secondary-600">
                        {{ $foundationSection->content['mission_description'] ?? __('about.mission_description') }}
                    </p>
                </div>

                <!-- Vision -->
                <div class="card-elevated text-center">
                    <div class="w-16 h-16 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-accent" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary-900 mb-4">{{ $foundationSection->content['vision_title'] ?? __('about.vision_title') }}</h3>
                    <p class="text-secondary-600">
                        {{ $foundationSection->content['vision_description'] ?? __('about.vision_description') }}
                    </p>
                </div>

                <!-- Values -->
                <div class="card-elevated text-center">
                    <div class="w-16 h-16 bg-success-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-success" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary-900 mb-4">{{ $foundationSection->content['values_title'] ?? __('about.values_title') }}</h3>
                    <p class="text-secondary-600">
                        {{ $foundationSection->content['values_description'] ?? __('about.values_description') }}
                    </p>
                </div>
            </div>

            <!-- Detailed Values -->
            <div class="mt-16 grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                    <h4 class="font-semibold text-secondary-900 mb-2">{{ __('about.innovation') }}</h4>
                    <p class="text-secondary-600 text-sm">{{ __('about.innovation_desc') }}</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                    <h4 class="font-semibold text-secondary-900 mb-2">{{ __('about.quality') }}</h4>
                    <p class="text-secondary-600 text-sm">{{ __('about.quality_desc') }}</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                    <h4 class="font-semibold text-secondary-900 mb-2">{{ __('about.transparency') }}</h4>
                    <p class="text-secondary-600 text-sm">{{ __('about.transparency_desc') }}</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                    <h4 class="font-semibold text-secondary-900 mb-2">{{ __('about.flexibility') }}</h4>
                    <p class="text-secondary-600 text-sm">{{ __('about.flexibility_desc') }}</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                    <h4 class="font-semibold text-secondary-900 mb-2">{{ __('about.security') }}</h4>
                    <p class="text-secondary-600 text-sm">{{ __('about.security_desc') }}</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                    <h4 class="font-semibold text-secondary-900 mb-2">{{ __('about.professionalism') }}</h4>
                    <p class="text-secondary-600 text-sm">{{ __('about.professionalism_desc') }}</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                    <h4 class="font-semibold text-secondary-900 mb-2">{{ __('about.customer_service') }}</h4>
                    <p class="text-secondary-600 text-sm">{{ __('about.customer_service_desc') }}</p>
                </div>
            </div>
        </div>
    </section>
    @endif

    <!-- Company Services -->
    @if($cultureSection)
    <section class="py-20 bg-surface">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-secondary-900 mb-4">
                    {{ $cultureSection->content['culture_title'] ?? __('about.culture_title') }}
                </h2>
                <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                    {{ $cultureSection->content['culture_description'] ?? __('about.culture_description') }}
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-16 items-center mb-16">
                <div>
                    <h3 class="text-2xl font-bold text-secondary-900 mb-6">{{ $cultureSection->content['culture_subtitle'] ?? __('about.culture_subtitle') }}</h3>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-primary-100 rounded-full flex items-center justify-center mr-4 mt-1">
                                <svg class="w-4 h-4 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-secondary-900 mb-2">{{ $cultureSection->content['technical_excellence'] ?? __('about.technical_excellence') }}</h4>
                                <p class="text-secondary-600">{{ $cultureSection->content['technical_excellence_desc'] ?? __('about.technical_excellence_desc') }}</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-accent-100 rounded-full flex items-center justify-center mr-4 mt-1">
                                <svg class="w-4 h-4 text-accent" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-secondary-900 mb-2">{{ $cultureSection->content['continuous_learning'] ?? __('about.continuous_learning') }}</h4>
                                <p class="text-secondary-600">{{ $cultureSection->content['continuous_learning_desc'] ?? __('about.continuous_learning_desc') }}</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-success-100 rounded-full flex items-center justify-center mr-4 mt-1">
                                <svg class="w-4 h-4 text-success" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-secondary-900 mb-2">{{ $cultureSection->content['collaborative_environment'] ?? __('about.collaborative_environment') }}</h4>
                                <p class="text-secondary-600">{{ $cultureSection->content['collaborative_environment_desc'] ?? __('about.collaborative_environment_desc') }}</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-warning-100 rounded-full flex items-center justify-center mr-4 mt-1">
                                <svg class="w-4 h-4 text-warning" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-secondary-900 mb-2">{{ $cultureSection->content['work_life_balance'] ?? __('about.work_life_balance') }}</h4>
                                <p class="text-secondary-600">{{ $cultureSection->content['work_life_balance_desc'] ?? __('about.work_life_balance_desc') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="relative z-10">
                        <img src="https://images.unsplash.com/photo-1690192078982-d3d2f89059ee"
                             alt="{{ $cultureSection->content['culture_title'] ?? __('about.culture_title') }}"
                             class="rounded-lg shadow-deep w-full h-96 object-cover"
                             loading="lazy"
                             onerror="this.src='https://images.pexels.com/photos/3184292/pexels-photo-3184292.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;">
                    </div>
                    <div class="absolute -top-4 -right-4 w-72 h-72 bg-accent/10 rounded-full blur-3xl"></div>
                    <div class="absolute -bottom-4 -left-4 w-72 h-72 bg-primary/10 rounded-full blur-3xl"></div>
                </div>
            </div>

            <!-- Services Grid -->
            <div class="text-center">
                <h2 class="text-3xl lg:text-4xl font-bold text-secondary-900 mb-4">
                    {{ __('about.recognition_title') }}
                </h2>
                <p class="text-xl text-secondary-600 mb-12 max-w-3xl mx-auto">
                    {{ __('about.recognition_description') }}
                </p>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="card-elevated text-center p-6">
                        <div class="text-4xl text-primary mb-4">📱</div>
                        <h3 class="text-lg font-semibold text-secondary-900 mb-2">{{ __('about.certification_1') }}</h3>
                    </div>
                    <div class="card-elevated text-center p-6">
                        <div class="text-4xl text-accent mb-4">🔒</div>
                        <h3 class="text-lg font-semibold text-secondary-900 mb-2">{{ __('about.certification_2') }}</h3>
                    </div>
                    <div class="card-elevated text-center p-6">
                        <div class="text-4xl text-success mb-4">🌐</div>
                        <h3 class="text-lg font-semibold text-secondary-900 mb-2">{{ __('about.certification_3') }}</h3>
                    </div>
                    <div class="card-elevated text-center p-6">
                        <div class="text-4xl text-warning mb-4">💻</div>
                        <h3 class="text-lg font-semibold text-secondary-900 mb-2">{{ __('about.award_1') }}</h3>
                    </div>
                    <div class="card-elevated text-center p-6">
                        <div class="text-4xl text-primary mb-4">☁️</div>
                        <h3 class="text-lg font-semibold text-secondary-900 mb-2">{{ __('about.award_2') }}</h3>
                    </div>
                    <div class="card-elevated text-center p-6">
                        <div class="text-4xl text-accent mb-4">🤝</div>
                        <h3 class="text-lg font-semibold text-secondary-900 mb-2">{{ __('about.award_3') }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    <!-- Timeline Section -->
    @php
        $timelineSection = $aboutSections->where('section_name', 'timeline')->first();
    @endphp
    @if($timelineSection)
    <section class="py-20 bg-surface">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-secondary-900 mb-4">
                    {{ $timelineSection->title }}
                </h2>
                <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                    {{ $timelineSection->description }}
                </p>
            </div>

            <div class="relative max-w-4xl mx-auto">
                <!-- Vertical line -->
                <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-gradient-to-b from-primary to-accent rounded-full"></div>

                <!-- Timeline items -->
                <div class="space-y-12">
                    <!-- 2019 -->
                    <div class="relative flex items-center">
                        <div class="flex-1 pr-8 text-right">
                            <div class="card">
                                <h3 class="text-xl font-semibold text-secondary-900 mb-2">{{ $timelineSection->content['timeline_2019_title'] ?? __('about.timeline_2019_title') }}</h3>
                                <p class="text-secondary-600 mb-2">{{ $timelineSection->content['timeline_2019_description'] ?? __('about.timeline_2019_description') }}</p>
                                <span class="text-sm text-accent font-semibold">2019</span>
                            </div>
                        </div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-accent rounded-full border-4 border-white shadow-lg"></div>
                        <div class="flex-1 pl-8"></div>
                    </div>

                    <!-- 2020 -->
                    <div class="relative flex items-center">
                        <div class="flex-1 pr-8"></div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-success rounded-full border-4 border-white shadow-lg"></div>
                        <div class="flex-1 pl-8">
                            <div class="card">
                                <h3 class="text-xl font-semibold text-secondary-900 mb-2">{{ $timelineSection->content['timeline_2020_title'] ?? __('about.timeline_2020_title') }}</h3>
                                <p class="text-secondary-600 mb-2">{{ $timelineSection->content['timeline_2020_description'] ?? __('about.timeline_2020_description') }}</p>
                                <span class="text-sm text-success font-semibold">2020</span>
                            </div>
                        </div>
                    </div>

                    <!-- 2022 -->
                    <div class="relative flex items-center">
                        <div class="flex-1 pr-8 text-right">
                            <div class="card">
                                <h3 class="text-xl font-semibold text-secondary-900 mb-2">{{ $timelineSection->content['timeline_2022_title'] ?? __('about.timeline_2022_title') }}</h3>
                                <p class="text-secondary-600 mb-2">{{ $timelineSection->content['timeline_2022_description'] ?? __('about.timeline_2022_description') }}</p>
                                <span class="text-sm text-warning font-semibold">2022</span>
                            </div>
                        </div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-warning rounded-full border-4 border-white shadow-lg"></div>
                        <div class="flex-1 pl-8"></div>
                    </div>

                    <!-- 2024 -->
                    <div class="relative flex items-center">
                        <div class="flex-1 pr-8"></div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-primary rounded-full border-4 border-white shadow-lg"></div>
                        <div class="flex-1 pl-8">
                            <div class="card">
                                <h3 class="text-xl font-semibold text-secondary-900 mb-2">{{ $timelineSection->content['timeline_2024_title'] ?? __('about.timeline_2024_title') }}</h3>
                                <p class="text-secondary-600 mb-2">{{ $timelineSection->content['timeline_2024_description'] ?? __('about.timeline_2024_description') }}</p>
                                <span class="text-sm text-primary font-semibold">2024</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    <!-- Team Expertise -->
    @php
        $teamExpertiseSection = $aboutSections->where('section_name', 'team_expertise')->first();
    @endphp
    @if($teamExpertiseSection)
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-secondary-900 mb-4">
                    {{ $teamExpertiseSection->title ?? __('about.team_expertise_title') }}
                </h2>
                <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                    {{ $teamExpertiseSection->description ?? __('about.team_expertise_description') }}
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
                <!-- Technical Expertise -->
                <div class="card text-center">
                    <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-secondary-900 mb-2">{{ $teamExpertiseSection->content['development_title'] ?? __('about.development_title') }}</h3>
                    <p class="text-secondary-600 text-sm mb-4">{{ $teamExpertiseSection->content['development_description'] ?? __('about.development_description') }}</p>
                    <div class="text-2xl font-bold text-primary">25+</div>
                    <div class="text-xs text-secondary-500">Technologies</div>
                </div>

                <!-- Cloud Certifications -->
                <div class="card text-center">
                    <div class="w-12 h-12 bg-accent-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-accent" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M5.5 16a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 16h-8z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-secondary-900 mb-2">{{ $teamExpertiseSection->content['cloud_title'] ?? __('about.cloud_title') }}</h3>
                    <p class="text-secondary-600 text-sm mb-4">{{ $teamExpertiseSection->content['cloud_description'] ?? __('about.cloud_description') }}</p>
                    <div class="text-2xl font-bold text-accent">15+</div>
                    <div class="text-xs text-secondary-500">Certifications</div>
                </div>

                <!-- Industry Recognition -->
                <div class="card text-center">
                    <div class="w-12 h-12 bg-success-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-success" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-secondary-900 mb-2">{{ $teamExpertiseSection->content['awards_title'] ?? __('about.awards_title') }}</h3>
                    <p class="text-secondary-600 text-sm mb-4">{{ $teamExpertiseSection->content['awards_description'] ?? __('about.awards_description') }}</p>
                    <div class="text-2xl font-bold text-success">8+</div>
                    <div class="text-xs text-secondary-500">Awards</div>
                </div>

                <!-- Speaking Engagements -->
                <div class="card text-center">
                    <div class="w-12 h-12 bg-warning-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-warning" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-secondary-900 mb-2">{{ $teamExpertiseSection->content['speaking_title'] ?? __('about.speaking_title') }}</h3>
                    <p class="text-secondary-600 text-sm mb-4">{{ $teamExpertiseSection->content['speaking_description'] ?? __('about.speaking_description') }}</p>
                    <div class="text-2xl font-bold text-warning">20+</div>
                    <div class="text-xs text-secondary-500">Engagements</div>
                </div>
            </div>

            <!-- Certification Badges -->
            <div class="text-center">
                <h3 class="text-xl font-semibold text-secondary-900 mb-8">{{ $teamExpertiseSection->content['certifications_title'] ?? __('about.certifications_title') }}</h3>
                <div class="flex flex-wrap justify-center items-center gap-8 opacity-70">
                    <img src="https://images.unsplash.com/photo-1669865015890-4dbd855de0f7"
                         alt="Technology certifications"
                         class="h-16 w-auto grayscale hover:grayscale-0 transition-all duration-300"
                         loading="lazy"
                         onerror="this.src='https://images.pexels.com/photos/590016/pexels-photo-590016.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;">
                    <img src="https://images.unsplash.com/photo-1629640341147-e597cad2840e"
                         alt="Cloud technology badges"
                         class="h-16 w-auto grayscale hover:grayscale-0 transition-all duration-300"
                         loading="lazy"
                         onerror="this.src='https://images.pixabay.com/photo/2016/12/27/13/10/logo-2150297_1280.png'; this.onerror=null;">
                    <img src="https://images.unsplash.com/photo-1566304660263-c15041ac11c0"
                         alt="Development frameworks"
                         class="h-16 w-auto grayscale hover:grayscale-0 transition-all duration-300"
                         loading="lazy"
                         onerror="this.src='https://images.pexels.com/photos/267350/pexels-photo-267350.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;">
                    <img src="https://images.unsplash.com/photo-1653299269669-a3386d39888a"
                         alt="Security certifications"
                         class="h-16 w-auto grayscale hover:grayscale-0 transition-all duration-300"
                         loading="lazy"
                         onerror="this.src='https://images.pixabay.com/photo/2017/03/16/21/18/logo-2150297_1280.png'; this.onerror=null;">
                </div>
            </div>
        </div>
    </section>
    @endif

    <!-- CTA Section -->
    @if($ctaSection)
    <section class="py-20 bg-gradient-to-r from-primary to-primary-700">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl lg:text-4xl font-bold text-white mb-6">
                {{ $ctaSection->title ?? __('about.cta_title') }}
            </h2>
            <p class="text-xl text-primary-100 mb-8 max-w-2xl mx-auto">
                {{ $ctaSection->description ?? __('about.cta_description') }}
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact.index') }}" class="bg-white text-primary px-8 py-4 rounded-lg font-semibold text-lg hover:bg-primary-50 transition-all duration-300 shadow-lg hover:shadow-xl">
                    {{ $ctaSection->content['cta_button_primary'] ?? __('about.cta_button_primary') }}
                </a>
                <a href="{{ route('services.index') }}" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white hover:text-primary transition-all duration-300">
                    {{ $ctaSection->content['cta_button_secondary'] ?? __('about.cta_button_secondary') }}
                </a>
            </div>
        </div>
    </section>
    @endif

    <script>
        // Add animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.card, .card-elevated').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';
            observer.observe(el);
        });
    </script>
@endsection
