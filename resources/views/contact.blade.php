@extends('layouts.app')

@section('title', 'Contact Us - Baherit Software Solutions | Strategic Technology Consultation')
@section('description', 'Connect with Baherit\'s technology experts for strategic consultation. Schedule discovery calls, access technical support, and explore custom software solutions tailored to your business needs.')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-primary-50 to-accent-50 overflow-hidden">
        <div class="absolute inset-0 bg-white/50"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-32">
            <div class="text-center">
                <h1 class="text-4xl lg:text-6xl font-bold text-secondary-900 mb-6 leading-tight">
                    Let's Build Something
                    <span class="text-gradient">Extraordinary</span>
                </h1>
                <p class="text-xl text-secondary-600 mb-8 leading-relaxed max-w-3xl mx-auto">
                    Ready to transform your business with custom software solutions? Our strategic consultation process ensures we understand your unique challenges and deliver technology that drives real results.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#consultation-form" class="btn-primary text-lg px-8 py-4">Schedule Consultation</a>
                    <a href="#contact-methods" class="btn-secondary text-lg px-8 py-4">Explore Contact Options</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Method Selector -->
    <section class="py-20 bg-white" id="contact-methods">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-secondary-900 mb-4">
                    Choose Your Preferred Way to Connect
                </h2>
                <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                    Whether you need immediate technical support or want to explore strategic partnership opportunities, we're here to help
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
                    <h3 class="text-xl font-semibold text-secondary-900 mb-3">Strategic Consultation</h3>
                    <p class="text-secondary-600 mb-6">
                        Schedule a discovery call with our technology strategists to explore custom software solutions tailored to your business goals.
                    </p>
                    <div class="space-y-3 text-sm text-secondary-500 mb-6">
                        <div class="flex items-center justify-center">
                            <svg class="h-4 w-4 text-success mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            45-minute discovery session
                        </div>
                        <div class="flex items-center justify-center">
                            <svg class="h-4 w-4 text-success mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Custom solution roadmap
                        </div>
                        <div class="flex items-center justify-center">
                            <svg class="h-4 w-4 text-success mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            No-obligation proposal
                        </div>
                    </div>
                    <button onclick="showConsultationForm()" class="btn-primary w-full">Book Consultation</button>
                </div>

                <!-- Technical Support -->
                <div class="card-elevated text-center group hover:scale-105 transition-all duration-300">
                    <div class="w-16 h-16 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-accent-200 transition-colors">
                        <svg class="w-8 h-8 text-accent" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.98 5.98 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-1.588-1.588A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.539-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary-900 mb-3">Technical Support</h3>
                    <p class="text-secondary-600 mb-6">
                        Get immediate assistance with technical questions, project updates, or access our comprehensive knowledge base.
                    </p>
                    <div class="space-y-3 text-sm text-secondary-500 mb-6">
                        <div class="flex items-center justify-center">
                            <svg class="h-4 w-4 text-success mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Live chat available 9-5 EST
                        </div>
                        <div class="flex items-center justify-center">
                            <svg class="h-4 w-4 text-success mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            24/7 knowledge base access
                        </div>
                        <div class="flex items-center justify-center">
                            <svg class="h-4 w-4 text-success mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Priority client support
                        </div>
                    </div>
                    <button onclick="openLiveChat()" class="btn-accent w-full">Start Live Chat</button>
                </div>

                <!-- General Inquiry -->
                <div class="card-elevated text-center group hover:scale-105 transition-all duration-300">
                    <div class="w-16 h-16 bg-success-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-success-200 transition-colors">
                        <svg class="w-8 h-8 text-success" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary-900 mb-3">General Inquiry</h3>
                    <p class="text-secondary-600 mb-6">
                        Have questions about our services, want to explore partnership opportunities, or need information about our company?
                    </p>
                    <div class="space-y-3 text-sm text-secondary-500 mb-6">
                        <div class="flex items-center justify-center">
                            <svg class="h-4 w-4 text-success mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Response within 24 hours
                        </div>
                        <div class="flex items-center justify-center">
                            <svg class="h-4 w-4 text-success mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Detailed information packet
                        </div>
                        <div class="flex items-center justify-center">
                            <svg class="h-4 w-4 text-success mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Follow-up consultation offer
                        </div>
                    </div>
                    <button onclick="showGeneralForm()" class="btn-secondary w-full">Send Message</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Multi-Step Consultation Form -->
    <section class="py-20 bg-surface hidden" id="consultation-form">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl lg:text-4xl font-bold text-secondary-900 mb-4">
                    Strategic Consultation Request
                </h2>
                <p class="text-xl text-secondary-600">
                    Help us understand your needs so we can provide the most valuable consultation experience
                </p>
            </div>

            <div class="card-elevated">
                <!-- Progress Indicator -->
                <div class="mb-8">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-primary text-white rounded-full flex items-center justify-center text-sm font-semibold" id="step1-indicator">1</div>
                            <span class="ml-2 text-sm font-medium text-primary" id="step1-label">Project Overview</span>
                        </div>
                        <div class="flex-1 mx-4 h-1 bg-secondary-200 rounded">
                            <div class="h-1 bg-primary rounded transition-all duration-300" id="progress-bar" style="width: 33%"></div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-secondary-200 text-secondary-500 rounded-full flex items-center justify-center text-sm font-semibold" id="step2-indicator">2</div>
                            <span class="ml-2 text-sm font-medium text-secondary-500" id="step2-label">Technical Details</span>
                        </div>
                        <div class="flex-1 mx-4 h-1 bg-secondary-200 rounded">
                            <div class="h-1 bg-secondary-200 rounded transition-all duration-300" id="progress-bar-2"></div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-secondary-200 text-secondary-500 rounded-full flex items-center justify-center text-sm font-semibold" id="step3-indicator">3</div>
                            <span class="ml-2 text-sm font-medium text-secondary-500" id="step3-label">Schedule & Contact</span>
                        </div>
                    </div>
                </div>

                <form id="consultation-request-form" action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="submission_type" value="consultation">
                    <!-- Step 1: Project Overview -->
                    <div id="step1" class="consultation-step">
                        <h3 class="text-xl font-semibold text-secondary-900 mb-6">Tell Us About Your Project</h3>

                        <div class="grid md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="company-name" class="block text-sm font-medium text-secondary-700 mb-2">Company Name *</label>
                                <input type="text" id="company-name" name="company" required class="input-field" placeholder="Your Company Name">
                            </div>
                            <div>
                                <label for="industry" class="block text-sm font-medium text-secondary-700 mb-2">Industry *</label>
                                <select id="industry" name="service_interest" required class="input-field">
                                    <option value="">Select Industry</option>
                                    <option value="healthcare">Healthcare</option>
                                    <option value="finance">Financial Services</option>
                                    <option value="manufacturing">Manufacturing</option>
                                    <option value="retail">Retail & E-commerce</option>
                                    <option value="technology">Technology</option>
                                    <option value="education">Education</option>
                                    <option value="government">Government</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium text-secondary-700 mb-2">Project Type *</label>
                            <div class="grid md:grid-cols-2 gap-4">
                                <label class="flex items-center p-4 border border-secondary-200 rounded-lg cursor-pointer hover:bg-secondary-50 transition-colors">
                                    <input type="radio" name="project-type" value="new-development" class="mr-3 text-primary">
                                    <div>
                                        <div class="font-medium text-secondary-900">New Development</div>
                                        <div class="text-sm text-secondary-600">Build custom software from scratch</div>
                                    </div>
                                </label>
                                <label class="flex items-center p-4 border border-secondary-200 rounded-lg cursor-pointer hover:bg-secondary-50 transition-colors">
                                    <input type="radio" name="project-type" value="modernization" class="mr-3 text-primary">
                                    <div>
                                        <div class="font-medium text-secondary-900">Legacy Modernization</div>
                                        <div class="text-sm text-secondary-600">Update existing systems</div>
                                    </div>
                                </label>
                                <label class="flex items-center p-4 border border-secondary-200 rounded-lg cursor-pointer hover:bg-secondary-50 transition-colors">
                                    <input type="radio" name="project-type" value="integration" class="mr-3 text-primary">
                                    <div>
                                        <div class="font-medium text-secondary-900">System Integration</div>
                                        <div class="text-sm text-secondary-600">Connect existing platforms</div>
                                    </div>
                                </label>
                                <label class="flex items-center p-4 border border-secondary-200 rounded-lg cursor-pointer hover:bg-secondary-50 transition-colors">
                                    <input type="radio" name="project-type" value="consulting" class="mr-3 text-primary">
                                    <div>
                                        <div class="font-medium text-secondary-900">Strategic Consulting</div>
                                        <div class="text-sm text-secondary-600">Technology strategy guidance</div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div class="mb-8">
                            <label for="project-description" class="block text-sm font-medium text-secondary-700 mb-2">Project Description *</label>
                            <textarea id="project-description" name="message" rows="4" required class="input-field" placeholder="Describe your project goals, challenges, and desired outcomes..."></textarea>
                        </div>

                        <div class="flex justify-end">
                            <button type="button" onclick="nextStep(2)" class="btn-primary">Continue to Technical Details</button>
                        </div>
                    </div>

                    <!-- Step 2: Technical Details -->
                    <div id="step2" class="consultation-step hidden">
                        <h3 class="text-xl font-semibold text-secondary-900 mb-6">Technical Requirements</h3>

                        <div class="grid md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="timeline" class="block text-sm font-medium text-secondary-700 mb-2">Desired Timeline *</label>
                                <select id="timeline" name="timeline" required class="input-field">
                                    <option value="">Select Timeline</option>
                                    <option value="asap">ASAP (Rush Project)</option>
                                    <option value="1-3-months">1-3 Months</option>
                                    <option value="3-6-months">3-6 Months</option>
                                    <option value="6-12-months">6-12 Months</option>
                                    <option value="12-months-plus">12+ Months</option>
                                    <option value="flexible">Flexible</option>
                                </select>
                            </div>
                            <div>
                                <label for="budget-range" class="block text-sm font-medium text-secondary-700 mb-2">Budget Range</label>
                                <select id="budget-range" name="budget-range" class="input-field">
                                    <option value="">Select Budget Range</option>
                                    <option value="under-50k">Under $50,000</option>
                                    <option value="50k-100k">$50,000 - $100,000</option>
                                    <option value="100k-250k">$100,000 - $250,000</option>
                                    <option value="250k-500k">$250,000 - $500,000</option>
                                    <option value="500k-plus">$500,000+</option>
                                    <option value="tbd">To Be Determined</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium text-secondary-700 mb-2">Technology Preferences</label>
                            <div class="grid md:grid-cols-3 gap-4">
                                <label class="flex items-center">
                                    <input type="checkbox" name="tech-preferences[]" value="web-applications" class="mr-2 text-primary">
                                    <span class="text-sm">Web Applications</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" name="tech-preferences[]" value="mobile-apps" class="mr-2 text-primary">
                                    <span class="text-sm">Mobile Apps</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" name="tech-preferences[]" value="cloud-solutions" class="mr-2 text-primary">
                                    <span class="text-sm">Cloud Solutions</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" name="tech-preferences[]" value="api-development" class="mr-2 text-primary">
                                    <span class="text-sm">API Development</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" name="tech-preferences[]" value="data-analytics" class="mr-2 text-primary">
                                    <span class="text-sm">Data Analytics</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" name="tech-preferences[]" value="ai-ml" class="mr-2 text-primary">
                                    <span class="text-sm">AI/ML Integration</span>
                                </label>
                            </div>
                        </div>

                        <div class="mb-8">
                            <label for="current-systems" class="block text-sm font-medium text-secondary-700 mb-2">Current Systems & Integrations</label>
                            <textarea id="current-systems" name="current-systems" rows="3" class="input-field" placeholder="Describe your current technology stack, systems that need integration, or specific technical requirements..."></textarea>
                        </div>

                        <div class="flex justify-between">
                            <button type="button" onclick="previousStep(1)" class="btn-secondary">Back to Project Overview</button>
                            <button type="button" onclick="nextStep(3)" class="btn-primary">Continue to Schedule</button>
                        </div>
                    </div>

                    <!-- Step 3: Schedule & Contact -->
                    <div id="step3" class="consultation-step hidden">
                        <h3 class="text-xl font-semibold text-secondary-900 mb-6">Contact Information & Scheduling</h3>

                        <div class="grid md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="contact-name" class="block text-sm font-medium text-secondary-700 mb-2">Full Name *</label>
                                <input type="text" id="contact-name" name="name" required class="input-field" placeholder="Your Full Name">
                            </div>
                            <div>
                                <label for="job-title" class="block text-sm font-medium text-secondary-700 mb-2">Job Title *</label>
                                <input type="text" id="job-title" name="job-title" required class="input-field" placeholder="Your Job Title">
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="email" class="block text-sm font-medium text-secondary-700 mb-2">Email Address *</label>
                                <input type="email" id="email" name="email" required class="input-field" placeholder="your.email@company.com">
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-medium text-secondary-700 mb-2">Phone Number</label>
                                <input type="tel" id="phone" name="phone" class="input-field" placeholder="+1 (555) 123-4567">
                            </div>
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium text-secondary-700 mb-2">Preferred Meeting Time *</label>
                            <div class="grid md:grid-cols-2 gap-4">
                                <label class="flex items-center p-3 border border-secondary-200 rounded-lg cursor-pointer hover:bg-secondary-50 transition-colors">
                                    <input type="radio" name="meeting-time" value="morning" class="mr-3 text-primary">
                                    <span class="text-sm">Morning (9:00 AM - 12:00 PM EST)</span>
                                </label>
                                <label class="flex items-center p-3 border border-secondary-200 rounded-lg cursor-pointer hover:bg-secondary-50 transition-colors">
                                    <input type="radio" name="meeting-time" value="afternoon" class="mr-3 text-primary">
                                    <span class="text-sm">Afternoon (1:00 PM - 5:00 PM EST)</span>
                                </label>
                            </div>
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium text-secondary-700 mb-2">Preferred Days</label>
                            <div class="grid grid-cols-3 md:grid-cols-5 gap-2">
                                <label class="flex items-center justify-center p-2 border border-secondary-200 rounded cursor-pointer hover:bg-secondary-50 transition-colors">
                                    <input type="checkbox" name="preferred-days[]" value="monday" class="mr-1 text-primary">
                                    <span class="text-sm">Mon</span>
                                </label>
                                <label class="flex items-center justify-center p-2 border border-secondary-200 rounded cursor-pointer hover:bg-secondary-50 transition-colors">
                                    <input type="checkbox" name="preferred-days[]" value="tuesday" class="mr-1 text-primary">
                                    <span class="text-sm">Tue</span>
                                </label>
                                <label class="flex items-center justify-center p-2 border border-secondary-200 rounded cursor-pointer hover:bg-secondary-50 transition-colors">
                                    <input type="checkbox" name="preferred-days[]" value="wednesday" class="mr-1 text-primary">
                                    <span class="text-sm">Wed</span>
                                </label>
                                <label class="flex items-center justify-center p-2 border border-secondary-200 rounded cursor-pointer hover:bg-secondary-50 transition-colors">
                                    <input type="checkbox" name="preferred-days[]" value="thursday" class="mr-1 text-primary">
                                    <span class="text-sm">Thu</span>
                                </label>
                                <label class="flex items-center justify-center p-2 border border-secondary-200 rounded cursor-pointer hover:bg-secondary-50 transition-colors">
                                    <input type="checkbox" name="preferred-days[]" value="friday" class="mr-1 text-primary">
                                    <span class="text-sm">Fri</span>
                                </label>
                            </div>
                        </div>

                        <div class="mb-8">
                            <label for="additional-notes" class="block text-sm font-medium text-secondary-700 mb-2">Additional Notes</label>
                            <textarea id="additional-notes" name="additional-notes" rows="3" class="input-field" placeholder="Any specific questions, requirements, or information you'd like us to know before our consultation..."></textarea>
                        </div>

                        <div class="flex justify-between">
                            <button type="button" onclick="previousStep(2)" class="btn-secondary">Back to Technical Details</button>
                            <button type="submit" class="btn-primary">Schedule Consultation</button>
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
                    Send Us a Message
                </h2>
                <p class="text-xl text-secondary-600">
                    We'd love to hear from you. Send us a message and we'll respond as soon as possible.
                </p>
            </div>

            <div class="card-elevated">
                <form id="general-contact-form" action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="submission_type" value="general">
                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="general-name" class="block text-sm font-medium text-secondary-700 mb-2">Full Name *</label>
                            <input type="text" id="general-name" name="name" required class="input-field" placeholder="Your Full Name">
                        </div>
                        <div>
                            <label for="general-email" class="block text-sm font-medium text-secondary-700 mb-2">Email Address *</label>
                            <input type="email" id="general-email" name="email" required class="input-field" placeholder="your.email@company.com">
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="general-company" class="block text-sm font-medium text-secondary-700 mb-2">Company Name</label>
                            <input type="text" id="general-company" name="company" class="input-field" placeholder="Your Company Name">
                        </div>
                        <div>
                            <label for="general-subject" class="block text-sm font-medium text-secondary-700 mb-2">Subject *</label>
                            <select id="general-subject" name="service_interest" required class="input-field">
                                <option value="">Select Subject</option>
                                <option value="services-inquiry">Services Inquiry</option>
                                <option value="partnership">Partnership Opportunity</option>
                                <option value="career">Career Opportunities</option>
                                <option value="media">Media & Press</option>
                                <option value="support">Technical Support</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-6">
                        <label for="general-message" class="block text-sm font-medium text-secondary-700 mb-2">Message *</label>
                        <textarea id="general-message" name="message" rows="6" required class="input-field" placeholder="Tell us about your inquiry, project, or how we can help you..."></textarea>
                    </div>

                    <div class="mb-6">
                        <label class="flex items-center">
                            <input type="checkbox" name="newsletter-signup" class="mr-3 text-primary">
                            <span class="text-sm text-secondary-600">I'd like to receive updates about Baherit's services and industry insights</span>
                        </label>
                    </div>

                    <div class="flex justify-between items-center">
                        <button type="button" onclick="hideAllForms()" class="btn-secondary">Back to Contact Options</button>
                        <button type="submit" class="btn-primary">Send Message</button>
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
                    Get in Touch
                </h2>
                <p class="text-xl text-secondary-600">
                    Multiple ways to connect with our team
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
                    <h3 class="text-lg font-semibold text-secondary-900 mb-2">Office Location</h3>
                    <p class="text-secondary-600 text-sm mb-2">
                        123 Innovation Drive<br>
                        Tech District, Suite 400<br>
                        San Francisco, CA 94105
                    </p>
                    <p class="text-xs text-secondary-500">
                        Open Monday - Friday, 9:00 AM - 6:00 PM PST
                    </p>
                </div>

                <!-- Phone & Email -->
                <div class="card text-center">
                    <div class="w-12 h-12 bg-accent-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-accent" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-secondary-900 mb-2">Direct Contact</h3>
                    <p class="text-secondary-600 text-sm mb-2">
                        <a href="tel:+1-555-123-4567" class="hover:text-primary transition-colors">+1 (555) 123-4567</a><br>
                        <a href="mailto:hello@baherit.com" class="hover:text-primary transition-colors">hello@baherit.com</a>
                    </p>
                    <p class="text-xs text-secondary-500">
                        Response within 24 hours
                    </p>
                </div>

                <!-- Emergency Support -->
                <div class="card text-center">
                    <div class="w-12 h-12 bg-success-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-success" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-secondary-900 mb-2">Client Support</h3>
                    <p class="text-secondary-600 text-sm mb-2">
                        <a href="tel:+1-555-123-4568" class="hover:text-primary transition-colors">+1 (555) 123-4568</a><br>
                        <a href="mailto:support@baherit.com" class="hover:text-primary transition-colors">support@baherit.com</a>
                    </p>
                    <p class="text-xs text-secondary-500">
                        Priority support for existing clients
                    </p>
                </div>
            </div>

            <!-- Interactive Map Placeholder -->
            <div class="card">
                <div class="aspect-w-16 aspect-h-9 bg-secondary-100 rounded-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1663250934966-916a88f543e5"
                         alt="Interactive map showing Baherit Software Solutions office location in San Francisco Tech District"
                         class="w-full h-64 object-cover"
                         loading="lazy"
                         onerror="this.src='https://images.pexels.com/photos/1647962/pexels-photo-1647962.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;">
                    <div class="absolute inset-0 bg-primary/10 flex items-center justify-center">
                        <div class="text-center text-white">
                            <svg class="w-12 h-12 mx-auto mb-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 000 4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                            <p class="font-semibold">Visit Our Office</p>
                            <p class="text-sm opacity-90">123 Innovation Drive, San Francisco</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Resource Center Access -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-secondary-900 mb-4">
                    Immediate Value Resources
                </h2>
                <p class="text-xl text-secondary-600">
                    Access valuable resources while you consider your next steps
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Technology Assessment Tool -->
                <div class="card-elevated text-center group hover:scale-105 transition-all duration-300">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-primary-200 transition-colors">
                        <svg class="w-8 h-8 text-primary" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary-900 mb-3">Technology Assessment</h3>
                    <p class="text-secondary-600 mb-6">
                        Free 15-minute assessment of your current technology stack with actionable recommendations.
                    </p>
                    <button onclick="openAssessmentTool()" class="btn-primary w-full">Start Assessment</button>
                </div>

                <!-- Project Estimation Calculator -->
                <div class="card-elevated text-center group hover:scale-105 transition-all duration-300">
                    <div class="w-16 h-16 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-accent-200 transition-colors">
                        <svg class="w-8 h-8 text-accent" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary-900 mb-3">Project Calculator</h3>
                    <p class="text-secondary-600 mb-6">
                        Get instant project estimates based on your requirements and complexity factors.
                    </p>
                    <button onclick="openCalculator()" class="btn-accent w-full">Calculate Estimate</button>
                </div>

                <!-- Industry Insights -->
                <div class="card-elevated text-center group hover:scale-105 transition-all duration-300">
                    <div class="w-16 h-16 bg-success-100 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-success-200 transition-colors">
                        <svg class="w-8 h-8 text-success" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-secondary-900 mb-3">Industry Insights</h3>
                    <p class="text-secondary-600 mb-6">
                        Download our latest whitepaper on digital transformation trends in your industry.
                    </p>
                    <button onclick="downloadWhitepaper()" class="btn-secondary w-full">Download Report</button>
                </div>
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
                        <div class="font-semibold text-secondary-900">Live Support</div>
                        <div class="text-sm text-success">Online now</div>
                    </div>
                </div>
                <button onclick="closeLiveChat()" class="text-secondary-400 hover:text-secondary-600">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <p class="text-secondary-600 text-sm mb-4">
                Hi! I'm here to help with any questions about our services or to connect you with the right team member.
            </p>
            <div class="space-y-2">
                <button onclick="startChat('general')" class="w-full text-left p-2 text-sm bg-secondary-50 hover:bg-secondary-100 rounded transition-colors">
                    General Questions
                </button>
                <button onclick="startChat('technical')" class="w-full text-left p-2 text-sm bg-secondary-50 hover:bg-secondary-100 rounded transition-colors">
                    Technical Support
                </button>
                <button onclick="startChat('consultation')" class="w-full text-left p-2 text-sm bg-secondary-50 hover:bg-secondary-100 rounded transition-colors">
                    Schedule Consultation
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
                alert(`Starting ${type} chat session. In a real implementation, this would connect to your live chat system.`);
                closeLiveChat();
            };

            // Resource functions
            window.openAssessmentTool = function() {
                alert('Technology Assessment Tool would open here. This would be a separate interactive tool for evaluating current tech stack.');
            };

            window.openCalculator = function() {
                alert('Project Estimation Calculator would open here. This would be an interactive tool for project cost estimation.');
            };

            window.downloadWhitepaper = function() {
                alert('Industry Insights whitepaper download would start here. This would trigger a PDF download and capture lead information.');
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
