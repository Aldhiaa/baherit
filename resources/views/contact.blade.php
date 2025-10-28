@extends('layouts.app')

@section('title', __('contact.meta_title'))
@section('description', __('contact.description'))

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-primary-50 to-accent-50 overflow-hidden">
        <div class="absolute inset-0 bg-white/50"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-32">
            <div class="text-center">
                <h1 class="text-4xl lg:text-6xl font-bold text-secondary-900 mb-6 leading-tight">
                    {{ __('contact.hero_title') }}
                    <span class="text-gradient">{{ __('contact.hero_highlight') }}</span>
                </h1>
                <p class="text-xl text-secondary-600 mb-8 leading-relaxed max-w-3xl mx-auto">
                    {{ __('contact.hero_description') }}
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#consultation-form" class="btn-primary text-lg px-8 py-4">{{ __('contact.hero_button_primary') }}</a>
                    <a href="#contact-methods" class="btn-secondary text-lg px-8 py-4">{{ __('contact.hero_button_secondary') }}</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Method Selector -->
    <section class="py-20 bg-white" id="contact-methods">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-secondary-900 mb-4">
                    {{ __('contact.methods_title') }}
                </h2>
                <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                    {{ __('contact.methods_subtitle') }}
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Strategic Consultation -->
                <div class="card-elevated text-center group hover:scale-105 transition-all duration-300">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-primary-200 transition-colors">
                        <svg class="w-8 h-8 text-primary" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary-900 mb-3">{{ __('contact.strategic_title') }}</h3>
                    <p class="text-secondary-600 mb-6">
                        {{ __('contact.strategic_description') }}
                    </p>
                    <div class="space-y-3 text-sm text-secondary-500 mb-6">
                        <div class="flex items-center justify-center">
                            <svg class="h-4 w-4 text-success mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            {{ __('contact.strategic_benefit_1') }}
                        </div>
                        <div class="flex items-center justify-center">
                            <svg class="h-4 w-4 text-success mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            {{ __('contact.strategic_benefit_2') }}
                        </div>
                        <div class="flex items-center justify-center">
                            <svg class="h-4 w-4 text-success mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            {{ __('contact.strategic_benefit_3') }}
                        </div>
                    </div>
                    <button onclick="showConsultationForm()" class="btn-primary w-full">{{ __('contact.strategic_button') }}</button>
                </div>

                <!-- Technical Support -->
                <div class="card-elevated text-center group hover:scale-105 transition-all duration-300">
                    <div class="w-16 h-16 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-accent-200 transition-colors">
                        <svg class="w-8 h-8 text-accent" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.98 5.98 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-1.588-1.588A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.539-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary-900 mb-3">{{ __('contact.technical_title') }}</h3>
                    <p class="text-secondary-600 mb-6">
                        {{ __('contact.technical_description') }}
                    </p>
                    <div class="space-y-3 text-sm text-secondary-500 mb-6">
                        <div class="flex items-center justify-center">
                            <svg class="h-4 w-4 text-success mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            {{ __('contact.technical_benefit_1') }}
                        </div>
                        <div class="flex items-center justify-center">
                            <svg class="h-4 w-4 text-success mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            {{ __('contact.technical_benefit_2') }}
                        </div>
                        <div class="flex items-center justify-center">
                            <svg class="h-4 w-4 text-success mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            {{ __('contact.technical_benefit_3') }}
                        </div>
                    </div>
                    <button onclick="openLiveChat()" class="btn-accent w-full">{{ __('contact.technical_button') }}</button>
                </div>

                <!-- General Inquiry -->
                <div class="card-elevated text-center group hover:scale-105 transition-all duration-300">
                    <div class="w-16 h-16 bg-success-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-success-200 transition-colors">
                        <svg class="w-8 h-8 text-success" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary-900 mb-3">{{ __('contact.general_title') }}</h3>
                    <p class="text-secondary-600 mb-6">
                        {{ __('contact.general_description') }}
                    </p>
                    <div class="space-y-3 text-sm text-secondary-500 mb-6">
                        <div class="flex items-center justify-center">
                            <svg class="h-4 w-4 text-success mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            {{ __('contact.general_benefit_1') }}
                        </div>
                        <div class="flex items-center justify-center">
                            <svg class="h-4 w-4 text-success mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            {{ __('contact.general_benefit_2') }}
                        </div>
                        <div class="flex items-center justify-center">
                            <svg class="h-4 w-4 text-success mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            {{ __('contact.general_benefit_3') }}
                        </div>
                    </div>
                    <button onclick="showGeneralForm()" class="btn-secondary w-full">{{ __('contact.general_button') }}</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Multi-Step Consultation Form -->
    <section class="py-20 bg-surface hidden" id="consultation-form">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-bold text-secondary-900 mb-4">
                    {{ __('contact.form_title') }}
                </h2>
                <p class="text-xl text-secondary-600">
                    {{ __('contact.form_subtitle') }}
                </p>
            </div>

            <div class="card-elevated">
                <!-- Progress Indicator -->
                <div class="mb-8">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-primary text-white rounded-full flex items-center justify-center text-sm font-semibold" id="step1-indicator">1</div>
                            <span class="ml-2 text-sm font-medium text-primary" id="step1-label">{{ __('contact.form_step1_title') }}</span>
                        </div>
                        <div class="flex-1 mx-4 h-1 bg-secondary-200 rounded">
                            <div class="h-1 bg-primary rounded transition-all duration-300" id="progress-bar" style="width: 33%"></div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-secondary-200 text-secondary-500 rounded-full flex items-center justify-center text-sm font-semibold" id="step2-indicator">2</div>
                            <span class="ml-2 text-sm font-medium text-secondary-500" id="step2-label">{{ __('contact.form_step2_title') }}</span>
                        </div>
                        <div class="flex-1 mx-4 h-1 bg-secondary-200 rounded">
                            <div class="h-1 bg-secondary-200 rounded transition-all duration-300" id="progress-bar-2"></div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-secondary-200 text-secondary-500 rounded-full flex items-center justify-center text-sm font-semibold" id="step3-indicator">3</div>
                            <span class="ml-2 text-sm font-medium text-secondary-500" id="step3-label">{{ __('contact.form_step3_title') }}</span>
                        </div>
                    </div>
                </div>

                <form id="consultation-request-form" action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="submission_type" value="consultation">
                    <!-- Step 1: Project Overview -->
                    <div id="step1" class="consultation-step">
                        <h3 class="text-xl font-semibold text-secondary-900 mb-6">{{ __('contact.form_step1_title') }}</h3>

                        <div class="grid md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="company-name" class="block text-sm font-medium text-secondary-700 mb-2">{{ __('contact.form_company') }}</label>
                                <input type="text" id="company-name" name="company" required class="input-field" placeholder="{{ __('contact.form_company_placeholder') }}">
                            </div>
                            <div>
                                <label for="industry" class="block text-sm font-medium text-secondary-700 mb-2">{{ __('contact.form_industry') }}</label>
                                <select id="industry" name="service_interest" required class="input-field">
                                    <option value="">{{ __('contact.form_industry_placeholder') }}</option>
                                    <option value="healthcare">{{ __('contact.form_industry_healthcare') }}</option>
                                    <option value="finance">{{ __('contact.form_industry_finance') }}</option>
                                    <option value="manufacturing">{{ __('contact.form_industry_manufacturing') }}</option>
                                    <option value="retail">{{ __('contact.form_industry_retail') }}</option>
                                    <option value="telecom">{{ __('contact.form_industry_telecom') }}</option>
                                    <option value="government">{{ __('contact.form_industry_government') }}</option>
                                    <option value="education">{{ __('contact.form_industry_education') }}</option>
                                    <option value="other">{{ __('contact.form_industry_other') }}</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium text-secondary-700 mb-2">{{ __('contact.form_project_type') }}</label>
                            <div class="grid md:grid-cols-2 gap-4">
                                <label class="flex items-center p-4 border border-secondary-200 rounded-lg cursor-pointer hover:bg-secondary-50 transition-colors">
                                    <input type="radio" name="project-type" value="new-development" class="mr-3 text-primary">
                                    <div>
                                        <div class="font-medium text-secondary-900">{{ __('contact.form_project_type_new') }}</div>
                                    </div>
                                </label>
                                <label class="flex items-center p-4 border border-secondary-200 rounded-lg cursor-pointer hover:bg-secondary-50 transition-colors">
                                    <input type="radio" name="project-type" value="migration" class="mr-3 text-primary">
                                    <div>
                                        <div class="font-medium text-secondary-900">{{ __('contact.form_project_type_migration') }}</div>
                                    </div>
                                </label>
                                <label class="flex items-center p-4 border border-secondary-200 rounded-lg cursor-pointer hover:bg-secondary-50 transition-colors">
                                    <input type="radio" name="project-type" value="integration" class="mr-3 text-primary">
                                    <div>
                                        <div class="font-medium text-secondary-900">{{ __('contact.form_project_type_integration') }}</div>
                                    </div>
                                </label>
                                <label class="flex items-center p-4 border border-secondary-200 rounded-lg cursor-pointer hover:bg-secondary-50 transition-colors">
                                    <input type="radio" name="project-type" value="optimization" class="mr-3 text-primary">
                                    <div>
                                        <div class="font-medium text-secondary-900">{{ __('contact.form_project_type_optimization') }}</div>
                                    </div>
                                </label>
                                <label class="flex items-center p-4 border border-secondary-200 rounded-lg cursor-pointer hover:bg-secondary-50 transition-colors">
                                    <input type="radio" name="project-type" value="support" class="mr-3 text-primary">
                                    <div>
                                        <div class="font-medium text-secondary-900">{{ __('contact.form_project_type_support') }}</div>
                                    </div>
                                </label>
                                <label class="flex items-center p-4 border border-secondary-200 rounded-lg cursor-pointer hover:bg-secondary-50 transition-colors">
                                    <input type="radio" name="project-type" value="consultation" class="mr-3 text-primary">
                                    <div>
                                        <div class="font-medium text-secondary-900">{{ __('contact.form_project_type_consultation') }}</div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div class="mb-8">
                            <label for="project-description" class="block text-sm font-medium text-secondary-700 mb-2">{{ __('contact.form_additional_info') }}</label>
                            <textarea id="project-description" name="message" rows="4" required class="input-field" placeholder="{{ __('contact.form_additional_info_placeholder') }}"></textarea>
                        </div>

                        <div class="flex justify-end">
                            <button type="button" onclick="nextStep(2)" class="btn-primary">{{ __('contact.form_next') }}</button>
                        </div>
                    </div>

                    <!-- Step 2: Technical Details -->
                    <div id="step2" class="consultation-step hidden">
                        <h3 class="text-xl font-semibold text-secondary-900 mb-6">{{ __('contact.form_step2_title') }}</h3>

                        <div class="grid md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="timeline" class="block text-sm font-medium text-secondary-700 mb-2">{{ __('contact.form_timeline') }}</label>
                                <select id="timeline" name="timeline" required class="input-field">
                                    <option value="">{{ __('contact.form_industry_placeholder') }}</option>
                                    <option value="immediate">{{ __('contact.form_timeline_1') }}</option>
                                    <option value="short-term">{{ __('contact.form_timeline_2') }}</option>
                                    <option value="medium-term">{{ __('contact.form_timeline_3') }}</option>
                                    <option value="long-term">{{ __('contact.form_timeline_4') }}</option>
                                    <option value="flexible">{{ __('contact.form_timeline_flexible') }}</option>
                                </select>
                            </div>
                            <div>
                                <label for="budget-range" class="block text-sm font-medium text-secondary-700 mb-2">{{ __('contact.form_budget') }}</label>
                                <select id="budget-range" name="budget-range" class="input-field">
                                    <option value="">{{ __('contact.form_industry_placeholder') }}</option>
                                    <option value="under-10k">{{ __('contact.form_budget_1') }}</option>
                                    <option value="10k-50k">{{ __('contact.form_budget_2') }}</option>
                                    <option value="50k-100k">{{ __('contact.form_budget_3') }}</option>
                                    <option value="100k-250k">{{ __('contact.form_budget_4') }}</option>
                                    <option value="250k-plus">{{ __('contact.form_budget_5') }}</option>
                                    <option value="undecided">{{ __('contact.form_budget_undecided') }}</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium text-secondary-700 mb-2">{{ __('contact.form_technologies') }}</label>
                            <div class="grid md:grid-cols-3 gap-4">
                                <label class="flex items-center">
                                    <input type="checkbox" name="tech-preferences[]" value="frontend" class="mr-2 text-primary">
                                    <span class="text-sm">{{ __('contact.form_technologies_frontend') }}</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" name="tech-preferences[]" value="backend" class="mr-2 text-primary">
                                    <span class="text-sm">{{ __('contact.form_technologies_backend') }}</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" name="tech-preferences[]" value="mobile" class="mr-2 text-primary">
                                    <span class="text-sm">{{ __('contact.form_technologies_mobile') }}</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" name="tech-preferences[]" value="cloud" class="mr-2 text-primary">
                                    <span class="text-sm">{{ __('contact.form_technologies_cloud') }}</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" name="tech-preferences[]" value="database" class="mr-2 text-primary">
                                    <span class="text-sm">{{ __('contact.form_technologies_database') }}</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" name="tech-preferences[]" value="devops" class="mr-2 text-primary">
                                    <span class="text-sm">{{ __('contact.form_technologies_devops') }}</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" name="tech-preferences[]" value="ai" class="mr-2 text-primary">
                                    <span class="text-sm">{{ __('contact.form_technologies_ai') }}</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" name="tech-preferences[]" value="other" class="mr-2 text-primary">
                                    <span class="text-sm">{{ __('contact.form_technologies_other') }}</span>
                                </label>
                            </div>
                        </div>

                        <div class="mb-8">
                            <label for="current-systems" class="block text-sm font-medium text-secondary-700 mb-2">{{ __('contact.form_integration') }}</label>
                            <textarea id="current-systems" name="current-systems" rows="3" class="input-field" placeholder="{{ __('contact.form_additional_info_placeholder') }}"></textarea>
                        </div>

                        <div class="flex justify-between">
                            <button type="button" onclick="previousStep(1)" class="btn-secondary">{{ __('contact.form_back') }}</button>
                            <button type="button" onclick="nextStep(3)" class="btn-primary">{{ __('contact.form_next') }}</button>
                        </div>
                    </div>

                    <!-- Step 3: Schedule & Contact -->
                    <div id="step3" class="consultation-step hidden">
                        <h3 class="text-xl font-semibold text-secondary-900 mb-6">{{ __('contact.form_step3_title') }}</h3>

                        <div class="grid md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="contact-name" class="block text-sm font-medium text-secondary-700 mb-2">{{ __('contact.form_name') }}</label>
                                <input type="text" id="contact-name" name="name" required class="input-field" placeholder="{{ __('contact.form_name_placeholder') }}">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-secondary-700 mb-2">{{ __('contact.form_email') }}</label>
                                <input type="email" id="email" name="email" required class="input-field" placeholder="{{ __('contact.form_email_placeholder') }}">
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="phone" class="block text-sm font-medium text-secondary-700 mb-2">{{ __('contact.form_phone') }}</label>
                                <input type="tel" id="phone" name="phone" class="input-field" placeholder="{{ __('contact.form_phone_placeholder') }}">
                            </div>
                            <div>
                                <label for="job-title" class="block text-sm font-medium text-secondary-700 mb-2">{{ __('contact.form_meeting_preference') }}</label>
                                <select id="job-title" name="job-title" class="input-field">
                                    <option value="video">{{ __('contact.form_meeting_video') }}</option>
                                    <option value="phone">{{ __('contact.form_meeting_phone') }}</option>
                                    <option value="inperson">{{ __('contact.form_meeting_inperson') }}</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium text-secondary-700 mb-2">{{ __('contact.form_best_time') }}</label>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                                <label class="flex items-center justify-center p-2 border border-secondary-200 rounded cursor-pointer hover:bg-secondary-50 transition-colors">
                                    <input type="checkbox" name="preferred-days[]" value="morning" class="mr-1 text-primary">
                                    <span class="text-sm">{{ __('contact.form_best_time_morning') }}</span>
                                </label>
                                <label class="flex items-center justify-center p-2 border border-secondary-200 rounded cursor-pointer hover:bg-secondary-50 transition-colors">
                                    <input type="checkbox" name="preferred-days[]" value="afternoon" class="mr-1 text-primary">
                                    <span class="text-sm">{{ __('contact.form_best_time_afternoon') }}</span>
                                </label>
                                <label class="flex items-center justify-center p-2 border border-secondary-200 rounded cursor-pointer hover:bg-secondary-50 transition-colors">
                                    <input type="checkbox" name="preferred-days[]" value="evening" class="mr-1 text-primary">
                                    <span class="text-sm">{{ __('contact.form_best_time_evening') }}</span>
                                </label>
                                <label class="flex items-center justify-center p-2 border border-secondary-200 rounded cursor-pointer hover:bg-secondary-50 transition-colors">
                                    <input type="checkbox" name="preferred-days[]" value="weekend" class="mr-1 text-primary">
                                    <span class="text-sm">{{ __('contact.form_best_time_weekend') }}</span>
                                </label>
                            </div>
                        </div>

                        <div class="mb-8">
                            <label for="additional-notes" class="block text-sm font-medium text-secondary-700 mb-2">{{ __('contact.form_additional_info') }}</label>
                            <textarea id="additional-notes" name="additional-notes" rows="3" class="input-field" placeholder="{{ __('contact.form_additional_info_placeholder') }}"></textarea>
                        </div>

                        <div class="flex justify-between">
                            <button type="button" onclick="previousStep(2)" class="btn-secondary">{{ __('contact.form_back') }}</button>
                            <button type="submit" class="btn-primary">{{ __('contact.form_submit') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- General Contact Form -->
    <section class="py-20 bg-white hidden" id="general-form">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-bold text-secondary-900 mb-4">
                    {{ __('contact.general_title') }}
                </h2>
                <p class="text-xl text-secondary-600">
                    {{ __('contact.general_description') }}
                </p>
            </div>

            <div class="card-elevated">
                <form id="general-contact-form" action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="submission_type" value="general">
                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="general-name" class="block text-sm font-medium text-secondary-700 mb-2">{{ __('contact.form_name') }}</label>
                            <input type="text" id="general-name" name="name" required class="input-field" placeholder="{{ __('contact.form_name_placeholder') }}">
                        </div>
                        <div>
                            <label for="general-email" class="block text-sm font-medium text-secondary-700 mb-2">{{ __('contact.form_email') }}</label>
                            <input type="email" id="general-email" name="email" required class="input-field" placeholder="{{ __('contact.form_email_placeholder') }}">
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="general-company" class="block text-sm font-medium text-secondary-700 mb-2">{{ __('contact.form_company') }}</label>
                            <input type="text" id="general-company" name="company" class="input-field" placeholder="{{ __('contact.form_company_placeholder') }}">
                        </div>
                        <div>
                            <label for="general-subject" class="block text-sm font-medium text-secondary-700 mb-2">{{ __('contact.form_industry') }}</label>
                            <select id="general-subject" name="service_interest" required class="input-field">
                                <option value="">{{ __('contact.form_industry_placeholder') }}</option>
                                <option value="services-inquiry">{{ __('contact.form_project_type_new') }}</option>
                                <option value="partnership">{{ __('contact.form_project_type_integration') }}</option>
                                <option value="career">{{ __('contact.form_project_type_support') }}</option>
                                <option value="media">{{ __('contact.form_project_type_consultation') }}</option>
                                <option value="support">{{ __('contact.technical_title') }}</option>
                                <option value="other">{{ __('contact.form_industry_other') }}</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-6">
                        <label for="general-message" class="block text-sm font-medium text-secondary-700 mb-2">{{ __('contact.form_additional_info') }}</label>
                        <textarea id="general-message" name="message" rows="6" required class="input-field" placeholder="{{ __('contact.form_additional_info_placeholder') }}"></textarea>
                    </div>

                    <div class="mb-6">
                        <label class="flex items-center">
                            <input type="checkbox" name="newsletter-signup" class="mr-3 text-primary">
                            <span class="text-sm text-secondary-600">{{ __('contact.I\'d like to receive updates about Baher Technology\'s services and industry insights') }}</span>
                        </label>
                    </div>

                    <div class="flex justify-between items-center">
                        <button type="button" onclick="hideAllForms()" class="btn-secondary">{{ __('contact.form_back') }}</button>
                        <button type="submit" class="btn-primary">{{ __('contact.form_submit') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Contact Information & Office Details -->
    <section class="py-20 bg-surface">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-secondary-900 mb-4">
                    {{ __('contact.Get in Touch') }}
                </h2>
                <p class="text-xl text-secondary-600">
                    {{ __('contact.Multiple ways to connect with our team') }}
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 mb-16">
                <!-- Office Location -->
                <div class="card text-center">
                    <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-secondary-900 mb-2">{{ __('contact.Office Location') }}</h3>
                    <p class="text-secondary-600 text-sm mb-2">
                        {{ __('contact.Yemen') }}<br>
                        {{ __('contact.info@baherit.com') }}
                    </p>
                </div>

                <!-- Phone & Email -->
                <div class="card text-center">
                    <div class="w-12 h-12 bg-accent-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-accent" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-secondary-900 mb-2">{{ __('contact.Direct Contact') }}</h3>
                    <p class="text-secondary-600 text-sm mb-2">
                        <a href="mailto:info@baherit.com" class="hover:text-primary transition-colors">info@baherit.com</a>
                    </p>
                    <p class="text-xs text-secondary-500">
                        {{ __('contact.Response within 24 hours') }}
                    </p>
                </div>

                <!-- Social Media -->
                <div class="card text-center">
                    <div class="w-12 h-12 bg-success-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-success" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 12.586l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-secondary-900 mb-2">{{ __('contact.Follow Us') }}</h3>
                    <div class="flex justify-center space-x-4">
                        <a href="https://www.facebook.com/BaherITS/" target="_blank" class="text-secondary-400 hover:text-primary transition-colors">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https0://www.youtube.com/@BaherITS" target="_blank" class="text-secondary-400 hover:text-primary transition-colors">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="https://www.instagram.com/baherits/" target="_blank" class="text-secondary-400 hover:text-primary transition-colors">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Interactive Map Placeholder -->
            <div class="card">
                <div class="aspect-w-16 aspect-h-9 bg-secondary-100 rounded-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad"
                         alt="{{ __('contact.Interactive map showing Baher Technology office location') }}"
                         class="w-full h-64 object-cover"
                         loading="lazy"
                         onerror="this.src='https://images.pexels.com/photos/1647962/pexels-photo-1647962.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;">
                    <div class="absolute inset-0 bg-primary/10 flex items-center justify-center">
                        <div class="text-center text-white">
                            <svg class="w-12 h-12 mx-auto mb-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                            <p class="font-semibold">{{ __('contact.Visit Our Office') }}</p>
                            <p class="text-sm opacity-90">{{ __('contact.Yemen') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-primary to-primary-700">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl lg:text-4xl font-bold text-white mb-6">
                {{ __('contact.cta_title') }}
            </h2>
            <p class="text-xl text-primary-100 mb-8 max-w-2xl mx-auto">
                {{ __('contact.cta_description') }}
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#consultation-form" class="bg-white text-primary px-8 py-4 rounded-lg font-semibold text-lg hover:bg-primary-50 transition-all duration-300 shadow-lg hover:shadow-xl">
                    {{ __('contact.cta_button_primary') }}
                </a>
                <a href="{{ route('case-studies.index') }}" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white hover:text-primary transition-all duration-300">
                    {{ __('contact.cta_button_secondary') }}
                </a>
            </div>
        </div>
    </section>

    <!-- Live Chat Widget -->
    <div id="live-chat-widget" class="fixed bottom-6 right-6 z-50 hidden">
        <div class="bg-white rounded-lg shadow-deep p-6 w-80 max-w-sm">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center mr-3">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div>
                        <div class="font-semibold text-secondary-900">{{ __('contact.Live Support') }}</div>
                        <div class="text-sm text-success">{{ __('contact.Online now') }}</div>
                    </div>
                </div>
                <button onclick="closeLiveChat()" class="text-secondary-400 hover:text-secondary-600">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <p class="text-secondary-600 text-sm mb-4">
                {{ __('contact.Hi! I\'m here to help with any questions about our services or to connect you with the right team member.') }}
            </p>
            <div class="space-y-2">
                <button onclick="startChat('general')" class="w-full text-left p-2 text-sm bg-secondary-50 hover:bg-secondary-100 rounded transition-colors">
                    {{ __('contact.General Questions') }}
                </button>
                <button onclick="startChat('technical')" class="w-full text-left p-2 text-sm bg-secondary-50 hover:bg-secondary-100 rounded transition-colors">
                    {{ __('contact.Technical Support') }}
                </button>
                <button onclick="startChat('consultation')" class="w-full text-left p-2 text-sm bg-secondary-50 hover:bg-secondary-100 rounded transition-colors">
                    {{ __('contact.Schedule Consultation') }}
                </button>
            </div>
        </div>
    </div>

    <!-- Chat Trigger Button -->
    <button id="chat-trigger" onclick="openLiveChat()" class="fixed bottom-6 right-6 bg-primary text-white p-4 rounded-full shadow-deep hover:bg-primary-700 transition-all duration-300 z-50">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd"></path>
        </svg>
    </button>

    <script>
        // Mobile menu toggle
        document.addEventListener('DOMContentLoaded', function() {
            // Form management functions
            window.showConsultationForm = function() {
                hideAllForms();
                document.getElementById('consultation-form').classList.remove('hidden');
                document.getElementById('consultation-form').scrollIntoView({ behavior: 'smooth' });
            };

            window.showGeneralForm = function() {
                hideAllForms();
                document.getElementById('general-form').classList.remove('hidden');
                document.getElementById('general-form').scrollIntoView({ behavior: 'smooth' });
            };

            window.hideAllForms = function() {
                document.getElementById('consultation-form').classList.add('hidden');
                document.getElementById('general-form').classList.add('hidden');
            };

            // Multi-step form navigation
            let currentStep = 1;

            window.nextStep = function(step) {
                if (validateCurrentStep()) {
                    document.getElementById(`step${currentStep}`).classList.add('hidden');
                    document.getElementById(`step${step}`).classList.remove('hidden');
                    updateProgressIndicator(step);
                    currentStep = step;
                }
            };

            window.previousStep = function(step) {
                document.getElementById(`step${currentStep}`).classList.add('hidden');
                document.getElementById(`step${step}`).classList.remove('hidden');
                updateProgressIndicator(step);
                currentStep = step;
            };

            function updateProgressIndicator(step) {
                // Reset all indicators
                for (let i = 1; i <= 3; i++) {
                    const indicator = document.getElementById(`step${i}-indicator`);
                    const label = document.getElementById(`step${i}-label`);

                    if (i <= step) {
                        indicator.classList.remove('bg-secondary-200', 'text-secondary-500');
                        indicator.classList.add('bg-primary', 'text-white');
                        label.classList.remove('text-secondary-500');
                        label.classList.add('text-primary');
                    } else {
                        indicator.classList.remove('bg-primary', 'text-white');
                        indicator.classList.add('bg-secondary-200', 'text-secondary-500');
                        label.classList.remove('text-primary');
                        label.classList.add('text-secondary-500');
                    }
                }

                // Update progress bars
                const progressBar = document.getElementById('progress-bar');
                const progressBar2 = document.getElementById('progress-bar-2');

                if (step >= 2) {
                    progressBar.style.width = '100%';
                } else {
                    progressBar.style.width = '33%';
                }

                if (step >= 3) {
                    progressBar2.style.width = '100%';
                    progressBar2.classList.remove('bg-secondary-200');
                    progressBar2.classList.add('bg-primary');
                } else {
                    progressBar2.style.width = '0%';
                    progressBar2.classList.remove('bg-primary');
                    progressBar2.classList.add('bg-secondary-200');
                }
            }

            function validateCurrentStep() {
                const currentStepElement = document.getElementById(`step${currentStep}`);
                const requiredFields = currentStepElement.querySelectorAll('[required]');

                for (let field of requiredFields) {
                    if (!field.value.trim()) {
                        field.focus();
                        field.classList.add('border-error');
                        setTimeout(() => field.classList.remove('border-error'), 3000);
                        return false;
                    }
                }
                return true;
            }

            // Live chat functions
            window.openLiveChat = function() {
                document.getElementById('live-chat-widget').classList.remove('hidden');
                document.getElementById('chat-trigger').classList.add('hidden');
            };

            window.closeLiveChat = function() {
                document.getElementById('live-chat-widget').classList.add('hidden');
                document.getElementById('chat-trigger').classList.remove('hidden');
            };

            window.startChat = function(type) {
                alert(`{{ __('contact.Starting') }} ${type} {{ __('contact.chat session. In a real implementation, this would connect to your live chat system.') }}`);
                closeLiveChat();
            };

            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

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
        });
    </script>
@endsection
