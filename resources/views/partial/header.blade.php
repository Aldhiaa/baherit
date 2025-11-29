<header class="site-header techin-header-section techin-header-one" id="sticky-menu">
        <div class="container">
            <div class="techin-header-menu ">
                <nav class="navbar site-navbar">
                    <!-- Brand Logo-->
                    <div class="w-100 d-flex justify-content-between align-items-center">
                        <div class=" ">
                            <div class="header-logo1  techin_screenfix_left">
                                <a href='{{ LaravelLocalization::localizeUrl('/') }}'>
                                    <img src="{{ site_logo(true) }}" alt="{{ setting('site_name') }}" style="max-height: 158px; height: auto;">
                                </a>
                            </div>
                        </div>
                        <div class="flex-grow-1 w-100">
                            <div class="techin-main-menu-item d-flex align-items-center techin_screenfix_right px-2">
                                <nav class="main-menu menu-style1 d-none d-xl-block menu-left">
                                    <ul>
                                        <li class="menu-item">
                                            <a href="{{ LaravelLocalization::localizeUrl('/') }}">{{ __('layout.menu.home') }}</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ LaravelLocalization::localizeUrl('/about-us') }}">{{ __('layout.menu.about') }}</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ LaravelLocalization::localizeUrl('/services') }}">{{ __('layout.menu.service') }}</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ LaravelLocalization::localizeUrl('/blog') }}">{{ __('layout.menu.blog') }}</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ LaravelLocalization::localizeUrl('/portfolio') }}">{{ __('layout.menu.portfolio') }}</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ LaravelLocalization::localizeUrl('/contact-us') }}">{{ __('layout.menu.contact') }}</a>
                                        </li>
                                    </ul>
                                </nav>
                                <!-- Language Switcher - Always visible -->
                                <a href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale() == 'en' ? 'ar' : 'en') }}"
                                   class="language-switcher-btn"
                                   id="languageSwitcher">
                                    <span id="currentLangText">{{ strtoupper(app()->getLocale()) }}</span>
                                </a>

                                <div
                                    class="header-btn header-btn-l1 ms-auto d-none d-xs-inline-flex align-items-center">
                                    <form class="header-search-form">
                                        <input type="text" placeholder="{{ __('layout.search.placeholder') }}">
                                        <i class="ri-search-line"></i>
                                    </form>
                                    <div class="techin-header-triger">
                                        <img src="{{ asset('assets/images/hero/1.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- search -->

                    <!-- mobile menu trigger -->
                    <button class="techin-menu-toggle d-inline-block d-xl-none">
                        <span></span>
                    </button>
                    <!--/.Mobile Menu Hamburger Ends-->
                </nav>
            </div>
        </div>

        <div class="techin-header-search-section">
            <div class="container">
                <div class="techin-header-search-box">
                    <input type="search" placeholder="{{ __('layout.search.placeholder_alt') }}">
                    <button id="header-search" type="button"><i class="ri-search-line"></i></button>
                    <p>{{ __('layout.search.type_to_search') }}</p>
                </div>
            </div>
            <div class="techin-header-search-close">
                <i class="ri-close-line"></i>
            </div>
        </div>
    </header>
