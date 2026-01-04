<footer class="techin-footer-section1 section" style="background-image: url({{ asset('assets/images/v1/pricing-bg.png') }});">
        <div class="container">
            <div class="techin-footer-top">
                <div class="row">
                    <div class="col-xl-4 col-lg-12">
                        <div class="techin-footer-textarea footer1">
                            <a href='{{ LaravelLocalization::localizeUrl('/') }}'>
                                <img src="{{ site_logo(true) }}" alt="{{ setting('site_name') }}" style="max-height: 148px; height: auto;">
                            </a>
                            <p>{{ setting('site_description', __('layout.footer.description')) }}</p>
                            <form class="subscribe-form">
                                <input type="email" placeholder="{{ __('layout.footer.email_placeholder') }}">
                                <button class="button2" type="submit"><img src="{{ asset('assets/images/footer/plane.svg') }}"
                                        alt="">{{ __('layout.buttons.subscribe') }}</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4">
                        <div class="techin-footer-menu ml-60">
                            <div class="techin-footer-title footer-one">
                                <h5>{{ __('layout.footer.quick_links') }}</h5>
                            </div>
                            <ul>
                                <li>
                                    <a href='{{ LaravelLocalization::localizeUrl('/about-us') }}'>
                                        <svg width="9" height="14" viewBox="0 0 9 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.6875 6.3125C8.09375 6.6875 8.09375 7.34375 7.6875 7.71875L2.6875 12.7188C2.3125 13.125 1.65625 13.125 1.28125 12.7188C0.875 12.3438 0.875 11.6875 1.28125 11.3125L5.5625 7L1.28125 2.71875C0.875 2.34375 0.875 1.6875 1.28125 1.3125C1.65625 0.90625 2.3125 0.90625 2.6875 1.3125L7.6875 6.3125Z"
                                                fill="white" />
                                        </svg>{{ __('layout.menu.about') }}
                                    </a>
                                </li>
                                <li>
                                    <a href='{{ LaravelLocalization::localizeUrl('/services') }}'>
                                        <svg width="9" height="14" viewBox="0 0 9 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.6875 6.3125C8.09375 6.6875 8.09375 7.34375 7.6875 7.71875L2.6875 12.7188C2.3125 13.125 1.65625 13.125 1.28125 12.7188C0.875 12.3438 0.875 11.6875 1.28125 11.3125L5.5625 7L1.28125 2.71875C0.875 2.34375 0.875 1.6875 1.28125 1.3125C1.65625 0.90625 2.3125 0.90625 2.6875 1.3125L7.6875 6.3125Z"
                                                fill="white" />
                                        </svg>{{ __('layout.menu.service') }}
                                    </a>
                                </li>
                                <li>
                                    <a href='{{ LaravelLocalization::localizeUrl('/portfolio') }}'>
                                        <svg width="9" height="14" viewBox="0 0 9 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.6875 6.3125C8.09375 6.6875 8.09375 7.34375 7.6875 7.71875L2.6875 12.7188C2.3125 13.125 1.65625 13.125 1.28125 12.7188C0.875 12.3438 0.875 11.6875 1.28125 11.3125L5.5625 7L1.28125 2.71875C0.875 2.34375 0.875 1.6875 1.28125 1.3125C1.65625 0.90625 2.3125 0.90625 2.6875 1.3125L7.6875 6.3125Z"
                                                fill="white" />
                                        </svg>{{ __('layout.menu.portfolio') }}
                                    </a>
                                </li>                               
                                <li>
                                    <a href='{{ LaravelLocalization::localizeUrl('/blog') }}'>
                                        <svg width="9" height="14" viewBox="0 0 9 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.6875 6.3125C8.09375 6.6875 8.09375 7.34375 7.6875 7.71875L2.6875 12.7188C2.3125 13.125 1.65625 13.125 1.28125 12.7188C0.875 12.3438 0.875 11.6875 1.28125 11.3125L5.5625 7L1.28125 2.71875C0.875 2.34375 0.875 1.6875 1.28125 1.3125C1.65625 0.90625 2.3125 0.90625 2.6875 1.3125L7.6875 6.3125Z"
                                                fill="white" />
                                        </svg>{{ __('layout.menu.blog') }}
                                    </a>
                                </li>
                                <li>
                                    <a href='{{ LaravelLocalization::localizeUrl('/contact-us') }}'>
                                        <svg width="9" height="14" viewBox="0 0 9 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.6875 6.3125C8.09375 6.6875 8.09375 7.34375 7.6875 7.71875L2.6875 12.7188C2.3125 13.125 1.65625 13.125 1.28125 12.7188C0.875 12.3438 0.875 11.6875 1.28125 11.3125L5.5625 7L1.28125 2.71875C0.875 2.34375 0.875 1.6875 1.28125 1.3125C1.65625 0.90625 2.3125 0.90625 2.6875 1.3125L7.6875 6.3125Z"
                                                fill="white" />
                                        </svg>{{ __('layout.menu.contact') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4">
                        <div class="techin-footer-menu ml-35">
                            <div class="techin-footer-title footer-one">
                                <h5>{{ __('layout.footer.explore') }}</h5>
                            </div>
                            <ul>
                                <li>
                                    <a href='{{ LaravelLocalization::localizeUrl('/portfolio') }}'>
                                        <svg width="9" height="14" viewBox="0 0 9 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.6875 6.3125C8.09375 6.6875 8.09375 7.34375 7.6875 7.71875L2.6875 12.7188C2.3125 13.125 1.65625 13.125 1.28125 12.7188C0.875 12.3438 0.875 11.6875 1.28125 11.3125L5.5625 7L1.28125 2.71875C0.875 2.34375 0.875 1.6875 1.28125 1.3125C1.65625 0.90625 2.3125 0.90625 2.6875 1.3125L7.6875 6.3125Z"
                                                fill="white" />
                                        </svg>{{ __('layout.menu.our_services') }}
                                    </a>
                                </li>
                                <li>
                                    <a href='{{ LaravelLocalization::localizeUrl('/contact-us') }}'>
                                        <svg width="9" height="14" viewBox="0 0 9 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.6875 6.3125C8.09375 6.6875 8.09375 7.34375 7.6875 7.71875L2.6875 12.7188C2.3125 13.125 1.65625 13.125 1.28125 12.7188C0.875 12.3438 0.875 11.6875 1.28125 11.3125L5.5625 7L1.28125 2.71875C0.875 2.34375 0.875 1.6875 1.28125 1.3125C1.65625 0.90625 2.3125 0.90625 2.6875 1.3125L7.6875 6.3125Z"
                                                fill="white" />
                                        </svg>{{ __('layout.menu.contact') }}
                                    </a>
                                </li>
                                <li>
                                    <a href='{{ LaravelLocalization::localizeUrl('/blog') }}'>
                                        <svg width="9" height="14" viewBox="0 0 9 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.6875 6.3125C8.09375 6.6875 8.09375 7.34375 7.6875 7.71875L2.6875 12.7188C2.3125 13.125 1.65625 13.125 1.28125 12.7188C0.875 12.3438 0.875 11.6875 1.28125 11.3125L5.5625 7L1.28125 2.71875C0.875 2.34375 0.875 1.6875 1.28125 1.3125C1.65625 0.90625 2.3125 0.90625 2.6875 1.3125L7.6875 6.3125Z"
                                                fill="white" />
                                        </svg>{{ __('layout.menu.blog') }}
                                    </a>
                                </li>
                                <li>
                                    <a href='{{ LaravelLocalization::localizeUrl('/faq') }}'>
                                        <svg width="9" height="14" viewBox="0 0 9 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.6875 6.3125C8.09375 6.6875 8.09375 7.34375 7.6875 7.71875L2.6875 12.7188C2.3125 13.125 1.65625 13.125 1.28125 12.7188C0.875 12.3438 0.875 11.6875 1.28125 11.3125L5.5625 7L1.28125 2.71875C0.875 2.34375 0.875 1.6875 1.28125 1.3125C1.65625 0.90625 2.3125 0.90625 2.6875 1.3125L7.6875 6.3125Z"
                                                fill="white" />
                                        </svg>{{ __('layout.menu.faq') }}
                                    </a>
                                </li>
                                <li>
                                    <a href='{{ LaravelLocalization::localizeUrl('/contact-us') }}'>
                                        <svg width="9" height="14" viewBox="0 0 9 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.6875 6.3125C8.09375 6.6875 8.09375 7.34375 7.6875 7.71875L2.6875 12.7188C2.3125 13.125 1.65625 13.125 1.28125 12.7188C0.875 12.3438 0.875 11.6875 1.28125 11.3125L5.5625 7L1.28125 2.71875C0.875 2.34375 0.875 1.6875 1.28125 1.3125C1.65625 0.90625 2.3125 0.90625 2.6875 1.3125L7.6875 6.3125Z"
                                                fill="white" />
                                        </svg>{{ __('layout.menu.contact') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4">
                        <div class="techin-footer-menu2 ml-60">
                            <div class="techin-footer-title footer-one">
                                <h5>Instagram</h5>
                            </div>
                            <div class="techin-instagram-wrap">
                                <div class="techin-instagram-thumb">
                                    <a href='{{ LaravelLocalization::localizeUrl('/portfolio') }}'><img src="{{ asset('assets/images/footer/f1.png') }}"
                                            alt=""></a>
                                </div>
                                <div class="techin-instagram-thumb">
                                    <a href='{{ LaravelLocalization::localizeUrl('/portfolio') }}'><img src="{{ asset('assets/images/footer/f4.png') }}"
                                            alt=""></a>
                                </div>
                                <div class="techin-instagram-thumb">
                                    <a href='{{ LaravelLocalization::localizeUrl('/portfolio') }}'><img src="{{ asset('assets/images/footer/f2.png') }}"
                                            alt=""></a>
                                </div>
                                <div class="techin-instagram-thumb">
                                    <a href='{{ LaravelLocalization::localizeUrl('/portfolio') }}'><img src="{{ asset('assets/images/footer/f5.png') }}"
                                            alt=""></a>
                                </div>
                                <div class="techin-instagram-thumb">
                                    <a href='{{ LaravelLocalization::localizeUrl('/portfolio') }}'><img src="{{ asset('assets/images/footer/f6.png') }}"
                                            alt=""></a>
                                </div>
                                <div class="techin-instagram-thumb">
                                    <a href='{{ LaravelLocalization::localizeUrl('/portfolio') }}'><img src="{{ asset('assets/images/footer/f3.png') }}"
                                            alt=""></a>
                                </div>
                            </div>
                            <ul>
                                <li>
                                    <a href='{{ LaravelLocalization::localizeUrl('/portfolio') }}'>

                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="techin-footer-info2">
                <div class="techin-footer-info-wraper">
                    <div class="techin-footer-info-item">
                        <div class="techin-footer-info-icon">
                            <img src="{{ asset('assets/images/footer/icon1.svg') }}" alt="">
                        </div>
                        <div class="techin-footer-info-text info1">
                            <span>{{ __('layout.sidebar.address') }}</span>
                            <h5>{{ setting('site_address', 'Yemen') }}</h5>
                        </div>
                    </div>
                    <a href="mailto:{{ setting('site_email') }}">
                        <div class="techin-footer-info-item">
                            <div class="techin-footer-info-icon">
                                <img src="{{ asset('assets/images/footer/icon2.svg') }}" alt="">
                            </div>
                            <div class="techin-footer-info-text info1">
                                <span>{{ __('layout.sidebar.email') }}</span>
                                <h5>{{ setting('site_email', 'info@baherit.com') }}</h5>
                            </div>
                        </div>
                    </a>

                    <a href="tel:{{ setting('site_phone') }}">
                        <div class="techin-footer-info-item">
                            <div class="techin-footer-info-icon">
                                <img src="{{ asset('assets/images/footer/icon3.svg') }}" alt="">
                            </div>
                            <div class="techin-footer-info-text info1">
                                <span>{{ __('layout.buttons.get_in_touch') }}</span>
                                <h5>{{ setting('site_phone', '+967782788810') }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="techin-footer-bottom bottom2">
                <div class="techin-copywright">
                    <p>{!! __('layout.footer.copyright', ['year' => now()->year]) !!}</p>
                </div>
                <div class="techin-header-social">
                    @php
    $icons = [
        'facebook'  => '<i class="ri-facebook-fill"></i>',
        'twitter'   => '<i class="ri-twitter-fill"></i>',
        'linkedin'  => '<i class="ri-linkedin-fill"></i>',
        'youtube'   => '<i class="ri-youtube-fill"></i>',
        'github'    => '<i class="ri-github-fill"></i>',
    ];
@endphp

<ul>
    @foreach (social_links() as $platform => $social)
        <li>
            <a href="{{ $social['url'] }}" target="_blank" rel="noopener noreferrer">
                {!! $icons[$platform] ?? instagram_svg() ?? '<i class="ri-link"></i>' !!}
            </a>
        </li>
    @endforeach
</ul>

                </div>
            </div>
        </div>
    </footer>
