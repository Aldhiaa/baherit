<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Baherit Software Solutions')</title>
    <meta name="description" content="@yield('description', 'Enterprise software development company specializing in custom solutions, digital transformation, and technology consulting. Your trusted partner for scalable software solutions.')">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
                        @if(App\Facades\Setting::setting('site_logo'))
                            <img src="{{ asset('storage/' . App\Facades\Setting::setting('site_logo')) }}" alt="{{ App\Facades\Setting::settingTranslated('site_name') }}" class="h-8 w-auto">
                        @else
                            <svg class="h-8 w-8 text-primary" viewBox="0 0 32 32" fill="currentColor">
                                <path d="M16 2L4 8v16l12 6 12-6V8L16 2zm0 4l8 4v12l-8 4-8-4V10l8-4z"/>
                                <circle cx="16" cy="16" r="4"/>
                            </svg>
                        @endif
                        <span class="ml-2 text-xl font-bold text-primary">{{ App\Facades\Setting::settingTranslated('site_name') }}</span>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:block">
                    <div class="md:flex space-x-1">
                            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-primary font-semibold' : 'text-secondary-600 hover:text-primary' }} px-3 py-2 rounded-md text-sm transition-smooth">{{ __('navigation.home') }}</a>
                            <a href="{{ route('services.index') }}" class="{{ request()->routeIs('services.*') ? 'text-primary font-semibold' : 'text-secondary-600 hover:text-primary' }} px-3 py-2 rounded-md text-sm transition-smooth">{{ __('navigation.services') }}</a>
                            <a href="{{ route('case-studies.index') }}" class="{{ request()->routeIs('case-studies.index') ? 'text-primary font-semibold' : 'text-secondary-600 hover:text-primary' }} px-3 py-2 rounded-md text-sm transition-smooth">{{ __('navigation.projects') }}</a>
                            <a href="{{ route('technology-stack.index') }}" class="{{ request()->routeIs('technology-stack.*') ? 'text-primary font-semibold' : 'text-secondary-600 hover:text-primary' }} px-3 py-2 rounded-md text-sm transition-smooth">{{ __('navigation.technology') }}</a>
                            <a href="{{ route('about.index') }}" class="{{ request()->routeIs('about.index') ? 'text-primary font-semibold' : 'text-secondary-600 hover:text-primary' }} px-3 py-2 rounded-md text-sm transition-smooth">{{ __('navigation.about') }}</a>
                            <a href="{{ route('contact.index') }}" class="{{ request()->routeIs('contact.index') ? 'text-primary font-semibold' : 'text-secondary-600 hover:text-primary' }} px-3 py-2 rounded-md text-sm transition-smooth">{{ __('navigation.contact') }}</a>
                        </div>
                </div>

                <!-- Language Switcher and Mobile menu button -->
                <div class="flex items-center">
                    <!-- Language Switcher Dropdown -->
                    <div class="relative ml-3">
                        <button type="button" class="text-secondary-600 hover:text-primary focus:outline-none focus:text-primary flex items-center text-sm" id="language-menu-button">
                            <span class="mr-1">{{ strtoupper(app()->getLocale()) }}</span>
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <div class="origin-top-right absolute right-0 mt-2 w-32 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden" id="language-dropdown">
                            <div class="py-1" role="none">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    @if($localeCode !== app()->getLocale())
                                        <a href="{{ LaravelLocalization::getLocalizedUrl($localeCode, null, [], true) }}" class="block px-4 py-2 text-sm text-secondary-700 hover:bg-secondary-100" role="menuitem">
                                            {{ $properties['native'] }}
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Mobile menu button -->
                    <div class="md:hidden ml-2">
                        <button type="button" class="text-secondary-600 hover:text-primary focus:outline-none focus:text-primary" id="mobile-menu-button">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div class="md:hidden" id="mobile-menu">
                    <div class="px-2 pt-2 pb-3 space-y-1">
                        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-primary font-semibold' : 'text-secondary-600 hover:text-primary' }} block px-3 py-2 rounded-md text-base transition-smooth">{{ __('navigation.home') }}</a>
                        <a href="{{ route('services.index') }}" class="{{ request()->routeIs('services.*') ? 'text-primary font-semibold' : 'text-secondary-600 hover:text-primary' }} block px-3 py-2 rounded-md text-base transition-smooth">{{ __('navigation.services') }}</a>
                        <a href="{{ route('case-studies.index') }}" class="{{ request()->routeIs('case-studies.index') ? 'text-primary font-semibold' : 'text-secondary-600 hover:text-primary' }} block px-3 py-2 rounded-md text-base transition-smooth">{{ __('navigation.projects') }}</a>
                        <a href="{{ route('technology-stack.index') }}" class="{{ request()->routeIs('technology-stack.*') ? 'text-primary font-semibold' : 'text-secondary-600 hover:text-primary' }} block px-3 py-2 rounded-md text-base transition-smooth">{{ __('navigation.technology') }}</a>
                        <a href="{{ route('about.index') }}" class="{{ request()->routeIs('about.index') ? 'text-primary font-semibold' : 'text-secondary-600 hover:text-primary' }} block px-3 py-2 rounded-md text-base transition-smooth">{{ __('navigation.about') }}</a>
                        <a href="{{ route('contact.index') }}" class="{{ request()->routeIs('contact.index') ? 'text-primary font-semibold' : 'text-secondary-600 hover:text-primary' }} block px-3 py-2 rounded-md text-base transition-smooth">{{ __('navigation.contact') }}</a>

                        <!-- Mobile Language Switcher -->
                        <div class="border-t border-secondary-200 pt-2 mt-2">
                            <div class="px-3 py-2 text-secondary-500 text-sm">{{ __('common.language') }}</div>
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <a href="{{ LaravelLocalization::getLocalizedUrl($localeCode, null, [], true) }}" class="block px-3 py-2 rounded-md text-base {{ app()->getLocale() === $localeCode ? 'text-primary font-semibold' : 'text-secondary-600 hover:text-primary' }} transition-smooth">
                                    {{ $properties['native'] }}
                                </a>
                            @endforeach
                        </div>
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
                        @if(App\Facades\Setting::setting('site_logo'))
                            <img src="{{ asset('storage/' . App\Facades\Setting::setting('site_logo')) }}" alt="{{ App\Facades\Setting::settingTranslated('site_name') }}" class="h-8 w-auto">
                        @else
                            <svg class="h-8 w-8 text-primary" viewBox="0 0 32 32" fill="currentColor">
                                <path d="M16 2L4 8v16l12 6 12-6V8L16 2zm0 4l8 4v12l-8 4-8-4V10l8-4z"/>
                                <circle cx="16" cy="16" r="4"/>
                            </svg>
                        @endif
                        <span class="ml-2 text-xl font-bold">{{ App\Facades\Setting::settingTranslated('site_name') }}</span>
                    </div>
                    <p class="text-secondary-300 mb-6 max-w-md">
                        {{ __('common.tagline') }}
                    </p>
                    <div class="flex space-x-4">
                        @if(App\Facades\Setting::settingTranslated('facebook'))
                            <a href="{{ App\Facades\Setting::settingTranslated('facebook') }}" target="_blank" class="text-secondary-400 hover:text-white transition-colors">
                                <i class="fab fa-facebook-f w-6 h-6"></i>
                            </a>
                        @endif

                        @if(App\Facades\Setting::settingTranslated('twitter'))
                            <a href="{{ App\Facades\Setting::settingTranslated('twitter') }}" target="_blank" class="text-secondary-400 hover:text-white transition-colors">
                                <i class="fab fa-twitter w-6 h-6"></i>
                            </a>
                        @endif

                        @if(App\Facades\Setting::settingTranslated('instagram'))
                            <a href="{{ App\Facades\Setting::settingTranslated('instagram') }}" target="_blank" class="text-secondary-400 hover:text-white transition-colors">
                                <i class="fab fa-instagram w-6 h-6"></i>
                            </a>
                        @endif

                        @if(App\Facades\Setting::settingTranslated('linkedin'))
                            <a href="{{ App\Facades\Setting::settingTranslated('linkedin') }}" target="_blank" class="text-secondary-400 hover:text-white transition-colors">
                                <i class="fab fa-linkedin-in w-6 h-6"></i>
                            </a>
                        @endif

                        @if(App\Facades\Setting::settingTranslated('youtube'))
                            <a href="{{ App\Facades\Setting::settingTranslated('youtube') }}" target="_blank" class="text-secondary-400 hover:text-white transition-colors">
                                <i class="fab fa-youtube w-6 h-6"></i>
                            </a>
                        @endif
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
                        <li><a href="{{ route('case-studies.index') }}" class="text-secondary-300 hover:text-white transition-colors">{{ __('navigation.projects') }}</a></li>
                        <li><a href="{{ route('technology-stack.index') }}" class="text-secondary-300 hover:text-white transition-colors">{{ __('navigation.technology') }}</a></li>
                        <li><a href="{{ route('contact.index') }}" class="text-secondary-300 hover:text-white transition-colors">{{ __('navigation.contact') }}</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-secondary-700 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-secondary-400 text-sm">
                    © 2025 {{ App\Facades\Setting::settingTranslated('site_name') }}. {{ __('common.all_rights_reserved') }}.
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

        // Language dropdown toggle
        document.getElementById('language-menu-button').addEventListener('click', function() {
            const languageDropdown = document.getElementById('language-dropdown');
            languageDropdown.classList.toggle('hidden');
        });

        // Close dropdowns when clicking outside
        document.addEventListener('click', function(event) {
            const languageButton = document.getElementById('language-menu-button');
            const languageDropdown = document.getElementById('language-dropdown');

            if (languageButton && languageDropdown &&
                !languageButton.contains(event.target) &&
                !languageDropdown.contains(event.target)) {
                languageDropdown.classList.add('hidden');
            }
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
