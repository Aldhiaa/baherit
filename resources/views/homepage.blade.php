@extends('layouts.app')

@section('title', __('homepage.title'))
@section('description', __('homepage.description'))

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-primary-50 to-accent-50 overflow-hidden">
        <div class="absolute inset-0 bg-white/50"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-32">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="text-center lg:text-left">
                    <h1 class="text-4xl lg:text-6xl font-bold text-secondary-900 mb-6 leading-tight">
                        {{ __('homepage.hero_title') }}
                        <span class="text-gradient">{{ __('homepage.hero_highlight') }}</span>
                    </h1>
                    <p class="text-xl text-secondary-600 mb-8 leading-relaxed">
                        {{ __('homepage.hero_description') }}
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="{{ route('contact.index') }}" class="btn-primary text-lg px-8 py-4">{{ __('navigation.get_started') }}</a>
                        <a href="{{ route('case-studies.index') }}" class="btn-secondary text-lg px-8 py-4">{{ __('homepage.hero_button_secondary') }}</a>
                    </div>
                    <div class="mt-8 flex items-center justify-center lg:justify-start space-x-6 text-sm text-secondary-500">
                        <div class="flex items-center">
                            <svg class="h-5 w-5 text-success mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            {{ __('homepage.services_title') }}
                        </div>
                        <div class="flex items-center">
                            <svg class="h-5 w-5 text-success mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            {{ __('homepage.technology_title') }}
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="relative z-10">
                        <img src="https://images.unsplash.com/photo-1690192078982-d3d2f89059ee"
                             alt="{{ __('homepage.hero_title') }} {{ __('homepage.hero_highlight') }}"
                             class="rounded-lg shadow-deep w-full h-96 object-cover"
                             loading="lazy"
                             onerror="this.src='https://images.pexels.com/photos/3184292/pexels-photo-3184292.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;">
                    </div>
                    <div class="absolute -top-4 -right-4 w-72 h-72 bg-accent/10 rounded-full blur-3xl"></div>
                    <div class="absolute -bottom-4 -left-4 w-72 h-72 bg-primary/10 rounded-full blur-3xl"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Interactive Service Selector -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-secondary-900 mb-4">
                    {{ __('homepage.services_title') }}
                </h2>
                <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                    {{ __('homepage.services_description') }}
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Enterprise Decision Maker -->
                <div class="card-elevated group cursor-pointer hover:scale-105 transition-all duration-300" onclick="showUserJourney('enterprise')">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-primary-200 transition-colors">
                            <svg class="w-8 h-8 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-secondary-900 mb-3">{{ __('navigation.about') }}</h3>
                        <p class="text-secondary-600 mb-4">
                            {{ __('homepage.hero_description') }}
                        </p>
                        <div class="text-primary font-semibold group-hover:text-primary-700">
                            {{ __('homepage.hero_button_primary') }} →
                        </div>
                    </div>
                </div>

                <!-- Technical Evaluator -->
                <div class="card-elevated group cursor-pointer hover:scale-105 transition-all duration-300" onclick="showUserJourney('technical')">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-accent-200 transition-colors">
                            <svg class="w-8 h-8 text-accent" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-secondary-900 mb-3">{{ __('homepage.technology_title') }}</h3>
                        <p class="text-secondary-600 mb-4">
                            {{ __('homepage.technology_description') }}
                        </p>
                        <div class="text-accent font-semibold group-hover:text-accent-700">
                            {{ __('navigation.technology') }} →
                        </div>
                    </div>
                </div>

                <!-- Startup Founder -->
                <div class="card-elevated group cursor-pointer hover:scale-105 transition-all duration-300" onclick="showUserJourney('startup')">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-success-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-success-200 transition-colors">
                            <svg class="w-8 h-8 text-success" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-secondary-900 mb-3">{{ __('navigation.services') }}</h3>
                        <p class="text-secondary-600 mb-4">
                            {{ __('homepage.services_description') }}
                        </p>
                        <div class="text-success font-semibold group-hover:text-success-700">
                            {{ __('homepage.hero_button_primary') }} →
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Services Overview -->
    <section class="py-20 bg-surface">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-secondary-900 mb-4">
                    {{ __('homepage.services_title') }}
                </h2>
                <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                    {{ __('homepage.services_description') }}
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="card text-center group hover:shadow-lg transition-all duration-300">
                    <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center mx-auto mb-4 group-hover:bg-primary-200 transition-colors">
                        <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h4a1 1 0 010 2H6.414l2.293 2.293a1 1 0 01-1.414 1.414L5 6.414V8a1 1 0 01-2 0V4zm9 1a1 1 0 010-2h4a1 1 0 011 1v4a1 1 0 01-2 0V6.414l-2.293 2.293a1 1 0 11-1.414-1.414L13.586 5H12zm-9 7a1 1 0 012 0v1.586l2.293-2.293a1 1 0 111.414 1.414L6.414 15H8a1 1 0 010 2H4a1 1 0 01-1-1v-4zm13-1a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 010-2h1.586l-2.293-2.293a1 1 0 111.414-1.414L15 13.586V12a1 1 0 011-1z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-secondary-900 mb-2">{{ __('navigation.services') }}</h3>
                    <p class="text-secondary-600 text-sm">{{ __('homepage.services_description') }}</p>
                </div>

                <div class="card text-center group hover:shadow-lg transition-all duration-300">
                    <div class="w-12 h-12 bg-accent-100 rounded-lg flex items-center justify-center mx-auto mb-4 group-hover:bg-accent-200 transition-colors">
                        <svg class="w-6 h-6 text-accent" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd"></path>
                            <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V9a1 1 0 00-1-1h-1v-1z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-secondary-900 mb-2">{{ __('navigation.technology') }}</h3>
                    <p class="text-secondary-600 text-sm">{{ __('homepage.technology_description') }}</p>
                </div>

                <div class="card text-center group hover:shadow-lg transition-all duration-300">
                    <div class="w-12 h-12 bg-success-100 rounded-lg flex items-center justify-center mx-auto mb-4 group-hover:bg-success-200 transition-colors">
                        <svg class="w-6 h-6 text-success" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-secondary-900 mb-2">{{ __('homepage.technology_title') }}</h3>
                    <p class="text-secondary-600 text-sm">{{ __('homepage.technology_description') }}</p>
                </div>

                <div class="card text-center group hover:shadow-lg transition-all duration-300">
                    <div class="w-12 h-12 bg-warning-100 rounded-lg flex items-center justify-center mx-auto mb-4 group-hover:bg-warning-200 transition-colors">
                        <svg class="w-6 h-6 text-warning" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V8a2 2 0 012-2h2zm-1 0a1 1 0 011-1h8a1 1 0 011 1v1H5V6zm1 5a1 1 0 011-1h.01a1 1 0 110 2H7a1 1 0 01-1-1zm3 0a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1zm3 0a1 1 0 011-1h.01a1 1 0 110 2H13a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-secondary-900 mb-2">{{ __('homepage.services_title') }}</h3>
                    <p class="text-secondary-600 text-sm">{{ __('homepage.services_description') }}</p>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('services.index') }}" class="btn-primary text-lg px-8 py-4">{{ __('homepage.hero_button_primary') }}</a>
            </div>
        </div>
    </section>

    <!-- Social Proof Carousel -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-secondary-900 mb-4">
                    {{ __('homepage.case_studies_title') }}
                </h2>
                <p class="text-xl text-secondary-600">
                    {{ __('homepage.case_studies_description') }}
                </p>
            </div>

            <!-- Client Logos -->
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8 items-center opacity-60 mb-16">
                <div class="flex justify-center">
                    <img src="https://images.unsplash.com/photo-1565598469107-2bd14ae7e7e4"
                         alt="{{ __('common.company_name') }} {{ __('navigation.about') }}"
                         class="h-12 w-auto grayscale hover:grayscale-0 transition-all duration-300"
                         loading="lazy"
                         onerror="this.src='https://images.pexels.com/photos/590016/pexels-photo-590016.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;">
                </div>
                <div class="flex justify-center">
                    <img src="https://images.unsplash.com/photo-1565598469107-2bd14ae7e7e4"
                         alt="{{ __('common.company_name') }} {{ __('navigation.services') }}"
                         class="h-12 w-auto grayscale hover:grayscale-0 transition-all duration-300"
                         loading="lazy"
                         onerror="this.src='https://images.pixabay.com/photo/2016/12/27/13/10/logo-2150297_1280.png'; this.onerror=null;">
                </div>
                <div class="flex justify-center">
                    <img src="https://images.unsplash.com/photo-1565152620035-4adb600ba7ac"
                         alt="{{ __('common.company_name') }} {{ __('homepage.technology_title') }}"
                         class="h-12 w-auto grayscale hover:grayscale-0 transition-all duration-300"
                         loading="lazy"
                         onerror="this.src='https://images.pexels.com/photos/267350/pexels-photo-267350.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;">
                </div>
                <div class="flex justify-center">
                    <img src="https://images.unsplash.com/photo-1565598469107-2bd14ae7e7e4"
                         alt="{{ __('common.company_name') }} {{ __('homepage.technology_title') }}"
                         class="h-12 w-auto grayscale hover:grayscale-0 transition-all duration-300"
                         loading="lazy"
                         onerror="this.src='https://images.pixabay.com/photo/2017/03/16/21/18/logo-2150297_1280.png'; this.onerror=null;">
                </div>
                <div class="flex justify-center">
                    <img src="https://images.unsplash.com/photo-1589228214608-d1cff79644f9"
                         alt="{{ __('common.company_name') }} {{ __('navigation.services') }}"
                         class="h-12 w-auto grayscale hover:grayscale-0 transition-all duration-300"
                         loading="lazy"
                         onerror="this.src='https://images.pexels.com/photos/1181467/pexels-photo-1181467.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;">
                </div>
                <div class="flex justify-center">
                    <img src="https://images.unsplash.com/photo-1565598469107-2bd14ae7e7e4"
                         alt="{{ __('common.company_name') }} {{ __('navigation.about') }}"
                         class="h-12 w-auto grayscale hover:grayscale-0 transition-all duration-300"
                         loading="lazy"
                         onerror="this.src='https://images.pixabay.com/photo/2013/02/12/09/07/microsoft-80660_1280.png'; this.onerror=null;">
                </div>
            </div>

            <!-- Testimonials -->
            <div class="grid md:grid-cols-3 gap-8">
                <div class="card-elevated">
                    <div class="flex items-center mb-4">
                        <img src="https://images.unsplash.com/photo-1573315094050-874c98e31f8d"
                             alt="Michael Chen, CTO at TechCorp"
                             class="w-12 h-12 rounded-full object-cover mr-4"
                             loading="lazy"
                             onerror="this.src='https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;">
                        <div>
                            <div class="font-semibold text-secondary-900">Michael Chen</div>
                            <div class="text-sm text-secondary-600">CTO, TechCorp</div>
                        </div>
                    </div>
                    <p class="text-secondary-700 italic">
                        {{ __('homepage.hero_description') }}
                    </p>
                    <div class="flex text-warning mt-4">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    </div>
                </div>

                <div class="card-elevated">
                    <div class="flex items-center mb-4">
                        <img src="https://images.unsplash.com/photo-1652841190565-b96e0acbae17"
                             alt="Sarah Rodriguez, Founder at InnovateLabs"
                             class="w-12 h-12 rounded-full object-cover mr-4"
                             loading="lazy"
                             onerror="this.src='https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;">
                        <div>
                            <div class="font-semibold text-secondary-900">Sarah Rodriguez</div>
                            <div class="text-sm text-secondary-600">Founder, InnovateLabs</div>
                        </div>
                    </div>
                    <p class="text-secondary-700 italic">
                        {{ __('homepage.services_description') }}
                    </p>
                    <div class="flex text-warning mt-4">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    </div>
                </div>

                <div class="card-elevated">
                    <div class="flex items-center mb-4">
                        <img src="https://images.unsplash.com/photo-1603650664750-506f35f30760"
                             alt="David Thompson, IT Director at DataFlow Systems"
                             class="w-12 h-12 rounded-full object-cover mr-4"
                             loading="lazy"
                             onerror="this.src='https://images.pixabay.com/photo/2016/11/21/12/42/beard-1845166_1280.jpg'; this.onerror=null;">
                        <div>
                            <div class="font-semibold text-secondary-900">David Thompson</div>
                            <div class="text-sm text-secondary-600">IT Director, DataFlow</div>
                        </div>
                    </div>
                    <p class="text-secondary-700 italic">
                        {{ __('homepage.technology_description') }}
                    </p>
                    <div class="flex text-warning mt-4">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-primary to-primary-700">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl lg:text-4xl font-bold text-white mb-6">
                {{ __('homepage.cta_title') }}
            </h2>
            <p class="text-xl text-primary-100 mb-8 max-w-2xl mx-auto">
                {{ __('homepage.cta_description') }}
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact.index') }}" class="bg-white text-primary px-8 py-4 rounded-lg font-semibold text-lg hover:bg-primary-50 transition-all duration-300 shadow-lg hover:shadow-xl">
                    {{ __('homepage.cta_button_primary') }}
                </a>
                <a href="{{ route('case-studies.index') }}" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white hover:text-primary transition-all duration-300">
                    {{ __('homepage.cta_button_secondary') }}
                </a>
            </div>
        </div>
    </section>

    <script>
        // User journey selector
        function showUserJourney(type) {
            switch(type) {
                case 'enterprise':
                    window.location.href = '{{ route("services.index") }}';
                    break;
                case 'technical':
                    window.location.href = '{{ route("technology-stack.index") }}';
                    break;
                case 'startup':
                    window.location.href = '{{ route("case-studies.index") }}';
                    break;
            }
        }

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
