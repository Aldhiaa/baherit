<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Baherit Software Solutions')</title>
    <meta name="description" content="@yield('description', 'Enterprise software development company specializing in custom solutions, digital transformation, and technology consulting. Your trusted partner for scalable software solutions.')">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @if(app()->getLocale() === 'ar')
        <link rel="stylesheet" href="{{ asset('css/rtl.css') }}">
    @endif
     @if (app()->getLocale() === 'ar')
      <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- وسوم تحسين محركات البحث -->
    <title>بحر التكنولوجيا – للحلول التقنيةو الرقمية المتقدمة | تطوير مواقع، تطبيقات، تسويق رقمي، وأمن سيبراني</title>
    <meta name="description" content="بحر التكنولوجيا شركة رائدة تقدم حلول رقمية متكاملة تشمل تطوير المواقع والتطبيقات، الأمن السيبراني، التسويق الرقمي، ودعم تقني متخصص." />
    <meta name="keywords" content="بحر التكنولوجيا, شركة تقنية, تطوير مواقع, تصميم تطبيقات, الأمن السيبراني, التسويق الرقمي, خدمات تقنية المعلومات, شركات تقنية , شركة برمجة " />
    <meta name="author" content="بحر التكنولوجيا" />

    <!-- أيقونة الموقع -->
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />

    <!-- وسوم المشاركة على وسائل التواصل -->
    <meta property="og:title" content="بحر التكنولوجيا – حلول رقمية متكاملة" />
    <meta property="og:description" content="خدمات تطوير مواقع وتطبيقات، أمن سيبراني، وتسويق رقمي ." />
    <meta property="og:image" content="/assets/images/og-image.jpg" />
    <meta property="og:url" content="https://www.baherit.com" />
    <meta property="og:type" content="website" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="بحر التكنولوجيا – للحلول الرقمية المتكاملة" />
    <meta name="twitter:description" content="شركة تقنية  تقدم خدمات شاملة تشمل البرمجة، الأمن السيبراني، والتسويق الرقمي." />
    <meta name="twitter:image" content="/assets/images/twitter-card.jpg" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/bootstrap.rtl.min.css') }}?v={{time()}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/rtl_style.css') }}?v={{time()}}" />
    @else
    <title>Baher Technology – for Advanced Digital and Technical Solutions | Website Development, Apps, Digital Marketing, and Cybersecurity</title>
    <meta name="description" content="Baher Technology – for Advanced Digital and Technical Solutions including website and app development, cybersecurity, digital marketing, and  technical support." />
    <meta name="keywords" content="Baher Technology, Tech Company, Website Development, App Design, Cybersecurity, Digital Marketing, IT Services, Tech Companies, Programming Company" />
    <meta name="author" content="Baher Technology" />

    <!-- Website Icon -->
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />

    <!-- Social Media Sharing Tags -->
    <meta property="og:title" content="Baher Technology – Integrated Digital Solutions" />
    <meta property="og:description" content="Website and app development services, cybersecurity, and digital marketing." />
    <meta property="og:image" content="/assets/images/og-image.jpg" />
    <meta property="og:url" content="https://www.baherit.com" />
    <meta property="og:type" content="website" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Baher Technology – Integrated Digital Solutions" />
    <meta name="twitter:description" content="A Saudi tech company providing comprehensive services including programming, cybersecurity, and digital marketing." />
    <meta name="twitter:image" content="/assets/images/twitter-card.jpg" />
    @endif
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    @yield('head')
</head>
<body class="bg-background text-text-primary">
    
    <!-- Navigation Header -->
    <nav class="bg-white shadow-soft sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="{{ route('home') }}" class="flex items-center">
                        <svg class="h-8 w-8 text-primary" viewBox="0 0 32 32" fill="currentColor">
                            <path d="M16 2L4 8v16l12 6 12-6V8L16 2zm0 4l8 4v12l-8 4-8-4V10l8-4z"/>
                            <circle cx="16" cy="16" r="4"/>
                        </svg>
                        <span class="ml-2 text-xl font-bold text-primary">Baherit</span>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-primary font-semibold' : 'text-secondary-600 hover:text-primary' }} px-3 py-2 rounded-md text-sm transition-smooth">{{ __('navigation.home') }}</a>
                        <a href="{{ route('services.index') }}" class="{{ request()->routeIs('services.index') ? 'text-primary font-semibold' : 'text-secondary-600 hover:text-primary' }} px-3 py-2 rounded-md text-sm transition-smooth">{{ __('navigation.services') }}</a>
                        <a href="{{ route('case-studies.index') }}" class="{{ request()->routeIs('case-studies.index') ? 'text-primary font-semibold' : 'text-secondary-600 hover:text-primary' }} px-3 py-2 rounded-md text-sm transition-smooth">{{ __('navigation.case_studies') }}</a>
                        <a href="{{ route('technology-stack.index') }}" class="{{ request()->routeIs('technology-stack.index') ? 'text-primary font-semibold' : 'text-secondary-600 hover:text-primary' }} px-3 py-2 rounded-md text-sm transition-smooth">{{ __('navigation.technology') }}</a>
                        <a href="{{ route('about.index') }}" class="{{ request()->routeIs('about.index') ? 'text-primary font-semibold' : 'text-secondary-600 hover:text-primary' }} px-3 py-2 rounded-md text-sm transition-smooth">{{ __('navigation.about') }}</a>
                        <x-language-switcher />
                        <a href="{{ route('contact.index') }}" class="btn-primary">{{ __('navigation.get_started') }}</a>
                    </div>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button type="button" class="text-secondary-600 hover:text-primary focus:outline-none focus:text-primary" id="mobile-menu-button">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div class="md:hidden hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white border-t border-secondary-200">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-primary font-semibold' : 'text-secondary-600 hover:text-primary' }} block px-3 py-2 rounded-md text-base transition-smooth">{{ __('navigation.home') }}</a>
                <a href="{{ route('services.index') }}" class="{{ request()->routeIs('services.index') ? 'text-primary font-semibold' : 'text-secondary-600 hover:text-primary' }} block px-3 py-2 rounded-md text-base transition-smooth">{{ __('navigation.services') }}</a>
                <a href="{{ route('case-studies.index') }}" class="{{ request()->routeIs('case-studies.index') ? 'text-primary font-semibold' : 'text-secondary-600 hover:text-primary' }} block px-3 py-2 rounded-md text-base transition-smooth">{{ __('navigation.case_studies') }}</a>
                <a href="{{ route('technology-stack.index') }}" class="{{ request()->routeIs('technology-stack.index') ? 'text-primary font-semibold' : 'text-secondary-600 hover:text-primary' }} block px-3 py-2 rounded-md text-base transition-smooth">{{ __('navigation.technology') }}</a>
                <a href="{{ route('about.index') }}" class="{{ request()->routeIs('about.index') ? 'text-primary font-semibold' : 'text-secondary-600 hover:text-primary' }} block px-3 py-2 rounded-md text-base transition-smooth">{{ __('navigation.about') }}</a>
                <div class="px-3 py-2">
                    <x-language-switcher />
                </div>
                <a href="{{ route('contact.index') }}" class="btn-primary w-full text-center mt-4">{{ __('navigation.get_started') }}</a>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Footer -->
    <footer class="bg-secondary-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div class="md:col-span-2">
                    <div class="flex items-center mb-6">
                        <svg class="h-8 w-8 text-primary" viewBox="0 0 32 32" fill="currentColor">
                            <path d="M16 2L4 8v16l12 6 12-6V8L16 2zm0 4l8 4v12l-8 4-8-4V10l8-4z"/>
                            <circle cx="16" cy="16" r="4"/>
                        </svg>
                        <span class="ml-2 text-xl font-bold">{{ __('common.company_name') }}</span>
                    </div>
                    <p class="text-secondary-300 mb-6 max-w-md">
                        {{ __('common.tagline') }}
                    </p>
                    <div class="flex space-x-4">
                        <a href="javascript:void(0)" class="text-secondary-400 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="javascript:void(0)" class="text-secondary-400 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="javascript:void(0)" class="text-secondary-400 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24c6.624 0 11.99-5.367 11.99-12.013C24.007 5.367 18.641.001 12.017.001z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Services</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('services.index') }}" class="text-secondary-300 hover:text-white transition-colors">{{ __('navigation.services') }}</a></li>
                        <li><a href="{{ route('services.index') }}" class="text-secondary-300 hover:text-white transition-colors">{{ __('navigation.services') }}</a></li>
                        <li><a href="{{ route('services.index') }}" class="text-secondary-300 hover:text-white transition-colors">{{ __('navigation.services') }}</a></li>
                        <li><a href="{{ route('services.index') }}" class="text-secondary-300 hover:text-white transition-colors">{{ __('navigation.services') }}</a></li>
                    </ul>
                </div>

                <!-- Company -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">{{ __('navigation.about') }}</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('about.index') }}" class="text-secondary-300 hover:text-white transition-colors">{{ __('navigation.about') }}</a></li>
                        <li><a href="{{ route('case-studies.index') }}" class="text-secondary-300 hover:text-white transition-colors">{{ __('navigation.case_studies') }}</a></li>
                        <li><a href="{{ route('technology-stack.index') }}" class="text-secondary-300 hover:text-white transition-colors">{{ __('navigation.technology') }}</a></li>
                        <li><a href="{{ route('contact.index') }}" class="text-secondary-300 hover:text-white transition-colors">{{ __('navigation.contact') }}</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-secondary-700 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-secondary-400 text-sm">
                    © 2025 {{ __('common.company_name') }}. {{ __('common.all_rights_reserved') }}.
                </p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="javascript:void(0)" class="text-secondary-400 hover:text-white text-sm transition-colors">{{ __('common.privacy_policy') }}</a>
                    <a href="javascript:void(0)" class="text-secondary-400 hover:text-white text-sm transition-colors">{{ __('common.terms_of_service') }}</a>
                    <a href="javascript:void(0)" class="text-secondary-400 hover:text-white text-sm transition-colors">{{ __('common.security') }}</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });

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
    </script>

    @yield('scripts')
</body>
</html>
