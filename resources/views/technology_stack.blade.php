@extends('layouts.app')

@section('title', __('technology_stack.meta_title'))
@section('description', __('technology_stack.description'))

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-primary-50 to-accent-50 overflow-hidden">
        <div class="absolute inset-0 bg-white/50"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-32">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="text-center lg:text-left">
                    <h1 class="text-4xl lg:text-6xl font-bold text-secondary-900 mb-6 leading-tight">
                        {{ __('technology_stack.hero_title') }}
                        <span class="text-gradient">{{ __('technology_stack.hero_highlight') }}</span>
                    </h1>
                    <p class="text-xl text-secondary-600 mb-8 leading-relaxed">
                        {{ __('technology_stack.hero_description') }}
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="{{ route('contact.index') }}" class="btn-primary text-lg px-8 py-4">{{ __('technology_stack.hero_button_primary') }}</a>
                        <a href="{{ route('case-studies.index') }}" class="btn-secondary text-lg px-8 py-4">{{ __('technology_stack.hero_button_secondary') }}</a>
                    </div>
                    <div class="mt-8 flex items-center justify-center lg:justify-start space-x-6 text-sm text-secondary-500">
                        <div class="flex items-center">
                            <svg class="h-5 w-5 text-success mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            {{ __('technology_stack.enterprise_security') }}
                        </div>
                        <div class="flex items-center">
                            <svg class="h-5 w-5 text-success mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            {{ __('technology_stack.cloud_native') }}
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="relative z-10">
                        <img src="https://images.unsplash.com/photo-1635114332743-719b5e0702b9"
                             alt="{{ __('technology_stack.hero_title') }} {{ __('technology_stack.hero_highlight') }}"
                             class="rounded-lg shadow-deep w-full h-96 object-cover"
                             loading="lazy"
                             onerror="this.src='https://images.pexels.com/photos/574071/pexels-photo-574071.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;">
                    </div>
                    <div class="absolute -top-4 -right-4 w-72 h-72 bg-accent/10 rounded-full blur-3xl"></div>
                    <div class="absolute -bottom-4 -left-4 w-72 h-72 bg-primary/10 rounded-full blur-3xl"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Interactive Technology Matrix -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-secondary-900 mb-4">
                    {{ __('technology_stack.matrix_title') }}
                </h2>
                <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                    {{ __('technology_stack.matrix_description') }}
                </p>
            </div>

            <!-- Technology Category Tabs -->
            <div class="flex flex-wrap justify-center mb-12 border-b border-secondary-200">
                @php
                    $categories = $technologies->pluck('category')->unique();
                    $categoryLabels = [
                        'frontend' => __('technology_stack.frontend_title'),
                        'backend' => __('technology_stack.backend_title'),
                        'cloud' => __('technology_stack.cloud_title'),
                        'database' => __('technology_stack.database_title'),
                        'mobile' => __('technology_stack.mobile_title'),
                        'emerging' => __('technology_stack.emerging_title')
                    ];
                @endphp

                @foreach($categories as $index => $category)
                    <button class="tech-tab {{ $index == 0 ? 'active' : '' }} px-6 py-3 font-semibold {{ $index == 0 ? 'text-primary border-b-2 border-primary' : 'text-secondary-600 hover:text-primary' }} transition-smooth"
                            data-category="{{ $category }}">
                        {{ $categoryLabels[$category] ?? ucfirst($category) }}
                    </button>
                @endforeach
            </div>

            <!-- Technology Content Panels -->
            <div class="tech-content">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8" id="technologies-grid">
                    @foreach($technologies as $tech)
                    <div class="card group hover:shadow-lg transition-all duration-300 technology-item" data-category="{{ $tech->category }}">
                        <div class="flex items-center mb-4">
                            @if($tech->icon_class)
                                <div class="w-12 h-12 rounded-lg bg-primary-100 flex items-center justify-center mr-4">
                                    <i class="{{ $tech->icon_class }} text-primary text-2xl"></i>
                                </div>
                            @else
                                <img src="{{ $tech->logo_url }}"
                                     alt="{{ $tech->name }}"
                                     class="w-12 h-12 rounded-lg object-cover mr-4"
                                     loading="lazy"
                                     onerror="this.src='https://images.unsplash.com/photo-1633356122544-f1575ac72d75'; this.onerror=null;">
                            @endif
                            <div>
                                <h3 class="text-lg font-semibold text-secondary-900">{{ $tech->name }}</h3>
                                <div class="flex items-center">
                                    <div class="w-16 bg-secondary-200 rounded-full h-2 mr-2">
                                        <div class="h-2 rounded-full
                                            @if($tech->proficiency_level >= 90) bg-success
                                            @elseif($tech->proficiency_level >= 80) bg-warning
                                            @else bg-secondary-400
                                            @endif" style="width: {{ $tech->proficiency_level }}%"></div>
                                    </div>
                                    <span class="text-sm text-secondary-600">
                                        @if($tech->proficiency_level >= 90) {{ __('technology_stack.proficiency_expert') }}
                                        @elseif($tech->proficiency_level >= 80) {{ __('technology_stack.proficiency_advanced') }}
                                        @elseif($tech->proficiency_level >= 70) {{ __('technology_stack.proficiency_intermediate') }}
                                        @else {{ __('technology_stack.proficiency_learning') }}
                                        @endif
                                    </span>
                                </div>
                            </div>
                        </div>
                        <p class="text-secondary-600 text-sm mb-3">{{ $tech->description }}</p>
                        <div class="flex flex-wrap gap-2">
                            @foreach($tech->tags as $tag)
                            <span class="px-2 py-1
                                @if($tech->category == 'frontend') bg-primary-100 text-primary-700
                                @elseif($tech->category == 'backend') bg-success-100 text-success-700
                                @elseif($tech->category == 'cloud') bg-warning-100 text-warning-700
                                @elseif($tech->category == 'database') bg-accent-100 text-accent-700
                                @elseif($tech->category == 'mobile') bg-error-100 text-error-700
                                @else bg-secondary-100 text-secondary-700
                                @endif text-xs rounded">{{ $tag }}</span>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Technology Categories Overview -->
    <section class="py-20 bg-surface">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-secondary-900 mb-4">
                    {{ __('technology_stack.categories_title') }}
                </h2>
                <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                    {{ __('technology_stack.categories_description') }}
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($technologyCategories as $category)
                <div class="card-elevated text-center">
                    <div class="w-16 h-16 bg-{{ $category->color_class }}-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        @if($category->name == 'Frontend' || $category->getNameInLocale('en') == 'Frontend')
                            <i class="fas fa-code text-{{ $category->color_class }} text-2xl"></i>
                        @elseif($category->name == 'Backend' || $category->getNameInLocale('en') == 'Backend')
                            <i class="fas fa-server text-{{ $category->color_class }} text-2xl"></i>
                        @elseif($category->name == 'Database' || $category->getNameInLocale('en') == 'Database')
                            <i class="fas fa-database text-{{ $category->color_class }} text-2xl"></i>
                        @elseif($category->name == 'Cloud' || $category->getNameInLocale('en') == 'Cloud')
                            <i class="fas fa-cloud text-{{ $category->color_class }} text-2xl"></i>
                        @elseif($category->name == 'Mobile' || $category->getNameInLocale('en') == 'Mobile')
                            <i class="fas fa-mobile-alt text-{{ $category->color_class }} text-2xl"></i>
                        @elseif($category->name == 'Emerging' || $category->getNameInLocale('en') == 'Emerging')
                            <i class="fas fa-lightbulb text-{{ $category->color_class }} text-2xl"></i>
                        @else
                            <i class="fas fa-cube text-{{ $category->color_class }} text-2xl"></i>
                        @endif
                    </div>
                    <h3 class="text-xl font-semibold text-secondary-900 mb-3">{{ $category->name }}</h3>
                    <p class="text-secondary-600 mb-4">
                        {{ $category->description }}
                    </p>
                    @php
                        // Get sample technologies for this category
                        $sampleTechs = $technologies->where('category', $category->name)->take(3);
                    @endphp
                    @if($sampleTechs->count() > 0)
                    <div class="flex flex-wrap justify-center gap-2">
                        @foreach($sampleTechs as $tech)
                        <span class="px-2 py-1 bg-{{ $category->color_class }}-100 text-{{ $category->color_class }}-700 text-xs rounded">{{ $tech->name }}</span>
                        @endforeach
                    </div>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-primary to-primary-700">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl lg:text-4xl font-bold text-white mb-6">
                {{ __('technology_stack.cta_title') }}
            </h2>
            <p class="text-xl text-primary-100 mb-8 max-w-2xl mx-auto">
                {{ __('technology_stack.cta_description') }}
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact.index') }}" class="bg-white text-primary px-8 py-4 rounded-lg font-semibold text-lg hover:bg-primary-50 transition-all duration-300 shadow-lg hover:shadow-xl">
                    {{ __('technology_stack.cta_button_primary') }}
                </a>
                <a href="{{ route('services.index') }}" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white hover:text-primary transition-all duration-300">
                    {{ __('technology_stack.cta_button_secondary') }}
                </a>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Tab switching functionality
        const techTabs = document.querySelectorAll('.tech-tab');
        const techItems = document.querySelectorAll('.technology-item');

        techTabs.forEach(tab => {
            tab.addEventListener('click', function() {
                const category = this.getAttribute('data-category');

                // Update active tab
                techTabs.forEach(t => {
                    t.classList.remove('active', 'text-primary', 'border-b-2', 'border-primary');
                    t.classList.add('text-secondary-600', 'hover:text-primary');
                });
                this.classList.add('active', 'text-primary', 'border-b-2', 'border-primary');
                this.classList.remove('text-secondary-600', 'hover:text-primary');

                // Filter technology items
                techItems.forEach(item => {
                    if (category === 'all' || item.getAttribute('data-category') === category) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    });
</script>
@endsection
