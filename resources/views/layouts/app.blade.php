<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}" data-lang="{{ app()->getLocale() }}">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ setting('meta_title', __('layout.site_title')) }}</title>
    <meta name="description" content="{{ setting('meta_description', setting('site_description')) }}">
    <meta name="keywords" content="{{ setting('meta_keywords') }}">
    <meta name="author" content="{{ setting('site_name') }}">

    <link rel="shortcut icon" href="{{ site_favicon() }}" type="image/x-icon">
    <link rel="icon" href="{{ site_favicon() }}" type="image/x-icon">
    <!--- End favicon-->

    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Instrument+Sans:ital,wght@0,400..700;1,400..700&amp;family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/niceselect.css') }}">


    <!-- Code Editor  -->

    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}">

    <!-- RTL Support for Arabic -->
    <link rel="stylesheet" href="{{ asset('assets/css/rtl.css') }}" id="rtl-css">

    @stack('styles')
</head>

<body>

    <div class="techin-preloader-wrap">
        <div class="techin-preloader">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- End preloader -->

    <div class="progress-bar-container">
        <div class="progress-bar"></div>
    </div>

    <!-- progress circle -->
    <div class="paginacontainer">
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
            <div class="top-arrow">
                <img src="{{ asset('assets/images/v1/arrow.svg') }}" alt="">
            </div>
        </div>
    </div>
    <!-- End All Js -->



    <!-- Mobile Menu -->
    <div class="techin-menu-wrapper">
        <div class="techin-menu-area text-center">
            <div class="techin-menu-mobile-top">
                <div class="mobile-logo">
                    <a href='{{ LaravelLocalization::localizeUrl('/') }}'>
                        <img src="{{ site_logo() }}" alt="{{ setting('site_name') }}">
                    </a>
                </div>
                <button class="techin-menu-toggle mobile">
                    <i class="ri-close-line"></i>
                </button>
            </div>
            <div class="techin-mobile-menu">
                <ul>
                    <li>
                        <a href="{{ LaravelLocalization::localizeUrl('/') }}">{{ __('layout.menu.home') }}</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">{{ __('layout.menu.pages') }}</a>
                        <ul class="sub-menu">
                            <li><a href='{{ LaravelLocalization::localizeUrl('/about-us') }}'>{{ __('layout.menu.about') }}</a></li>
                            <li><a href='{{ LaravelLocalization::localizeUrl('/services') }}'>{{ __('layout.menu.service') }}</a></li>
                            <li><a href='{{ LaravelLocalization::localizeUrl('/blog') }}'>{{ __('layout.menu.blog') }}</a></li>
                            <li><a href='{{ LaravelLocalization::localizeUrl('/portfolio') }}'>{{ __('layout.menu.portfolio') }}</a></li>
                            <li><a href='{{ LaravelLocalization::localizeUrl('/faq') }}'>{{ __('layout.menu.faq') }}</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href='{{ LaravelLocalization::localizeUrl('/portfolio') }}'>{{ __('layout.menu.portfolio') }}</a>
                    </li>
                    <li>
                        <a href='{{ LaravelLocalization::localizeUrl('/blog') }}'>{{ __('layout.menu.blog') }}</a>
                    </li>
                    <li>
                        <a href='{{ LaravelLocalization::localizeUrl('/contact-us') }}'>{{ __('layout.menu.contact') }}</a>
                    </li>
                </ul>
            </div>
            <div class="techin-mobile-menu-btn">
                @php($getInTouch = __('layout.buttons.get_in_touch'))
                <a class='techin-default-btn sm-size' data-text='{{ $getInTouch }}' href='{{ LaravelLocalization::localizeUrl('/contact-us') }}'><span
                        class="btn-wraper">{{ $getInTouch }}</span></a>
            </div>
        </div>
    </div>
    <!-- End mobile menu -->



    @include('partial.header')

    <div class="search-overlay"></div>
    <!--End landex-header-section -->

    <!-- strat sidebar menu -->

    @include('partial.sidebar')

    @yield('content')
    <!-- Footer  -->

    @include('partial.footer')


    <!-- scripts -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/menu/menu.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/pricing.min.js') }}"></script>
    <script src="{{ asset('assets/js/countdown.js') }}"></script>
    <script src="{{ asset('assets/js/skillbar.js') }}"></script>
    <script src="{{ asset('assets/js/slick-animation.js') }}"></script>
    <script src="{{ asset('assets/js/slick-animation.min.js') }}"></script>
    <script src="{{ asset('assets/js/faq.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/tabs-slider.js') }}"></script>
    <script src="{{ asset('assets/js/product-increment.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker-jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/niceselect.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3&amp;key=AIzaSyArZVfNvjnLNwJZlLJKuOiWHZ6vtQzzb1Y"></script>

    <script src="{{ asset('assets/js/app.js') }}"></script>

    @stack('scripts')

    <!-- RTL Language Detection & Switching Script -->
    <script>
        /**
         * RTL Language Support Script
         * This script handles automatic RTL/LTR switching for Arabic and other RTL languages
         * Laravel-ready: Works with both static HTML and Laravel Blade
         */
        (function() {
            'use strict';

            // Configuration
            const RTL_LANGUAGES = ['ar', 'he', 'fa', 'ur', 'yi']; // Arabic, Hebrew, Farsi, Urdu, Yiddish
            const STORAGE_KEY = 'preferred_language';

            /**
             * Get the current language from various sources
             * Priority: 1. HTML attribute, 2. localStorage, 3. Browser settings
             */
            function getCurrentLanguage() {
                // Check HTML lang attribute (set by Laravel)
                const htmlLang = document.documentElement.getAttribute('lang') ||
                    document.documentElement.getAttribute('data-lang');
                if (htmlLang) return htmlLang;

                // Check localStorage
                const storedLang = localStorage.getItem(STORAGE_KEY);
                if (storedLang) return storedLang;

                // Check browser language
                const browserLang = navigator.language || navigator.userLanguage;
                return browserLang ? browserLang.split('-')[0] : 'en';
            }

            /**
             * Check if a language is RTL
             */
            function isRTL(lang) {
                return RTL_LANGUAGES.includes(lang.toLowerCase());
            }

            /**
             * Apply RTL/LTR direction to the document
             */
            function applyDirection(lang) {
                const html = document.documentElement;
                const isRtl = isRTL(lang);

                // Set direction and lang attributes
                html.setAttribute('dir', isRtl ? 'rtl' : 'ltr');
                html.setAttribute('lang', lang);
                html.setAttribute('data-lang', lang);

                // Store preference
                localStorage.setItem(STORAGE_KEY, lang);

                // Log for debugging (remove in production)
                console.log(`Language set to: ${lang}, Direction: ${isRtl ? 'RTL' : 'LTR'}`);
            }

            /**
             * Initialize language settings
             */
            function initLanguage() {
                const currentLang = getCurrentLanguage();
                applyDirection(currentLang);
            }

            /**
             * Public API for language switching (can be called from Laravel)
             */
            window.switchLanguage = function(lang) {
                if (!lang) {
                    console.error('Language parameter is required');
                    return;
                }

                applyDirection(lang);
                updateLanguageButton();

                // Reload page if needed (uncomment for Laravel integration)
                // window.location.reload();
            };

            /**
             * Get current language (can be called from Laravel)
             */
            window.getCurrentLanguage = getCurrentLanguage;

            // Initialize on DOM ready
            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', initLanguage);
            } else {
                initLanguage();
            }

            /**
             * Toggle between languages
             */
            window.toggleLanguage = function() {
                const currentLang = getCurrentLanguage();
                const newLang = currentLang === 'ar' ? 'en' : 'ar';
                switchLanguage(newLang);
            };

            /**
             * Update language button text
             */
            function updateLanguageButton() {
                const langBtn = document.getElementById('currentLangText');
                if (langBtn) {
                    const currentLang = getCurrentLanguage();
                    langBtn.textContent = currentLang === 'ar' ? 'AR' : 'EN';
                }
            }

            // Update button text on page load
            document.addEventListener('DOMContentLoaded', function() {
                updateLanguageButton();
            });

            /**
             * Reinitialize sliders for RTL support
             */
            function reinitializeSliders() {
                const isRtl = document.documentElement.getAttribute('dir') === 'rtl';

                // Destroy existing sliders
                $('.techin-brand-slider').slick('unslick');

                // Reinitialize with RTL support
                $('.techin-brand-slider').slick({
                    slidesToShow: 5,
                    slidesToScroll: 1,
                    autoplay: false,
                    arrows: true,
                    infinite: true,
                    speed: 500,
                    centerMode: true,
                    lazyLoad: 'progressive',
                    rtl: isRtl, // Enable RTL mode
                    prevArrow: '<button class="slide-arrow techin-brand-next"></button>',
                    nextArrow: '<button class="slide-arrow techin-brand-prev"></button>',
                    responsive: [{
                        breakpoint: 1399,
                        settings: {
                            slidesToShow: 4,
                            rtl: isRtl
                        }
                    }, {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 3,
                            rtl: isRtl
                        }
                    }, {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 2,
                            rtl: isRtl
                        }
                    }, {
                        breakpoint: 575,
                        settings: {
                            slidesToShow: 1,
                            rtl: isRtl
                        }
                    }]
                });
            }

            // Override the switchLanguage function to reinitialize sliders
            const originalSwitchLanguage = window.switchLanguage;
            window.switchLanguage = function(lang) {
                originalSwitchLanguage(lang);

                // Wait for DOM update then reinitialize sliders
                setTimeout(function() {
                    if (typeof $ !== 'undefined' && $('.techin-brand-slider').length > 0) {
                        reinitializeSliders();
                    }
                }, 100);
            };

        })();
    </script>

</body>

<!-- Mirrored from techinhtml.netlify.app/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Nov 2025 21:13:39 GMT -->

</html>
