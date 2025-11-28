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
                                        </svg>About Us
                                    </a>
                                </li>
                                <li>
                                    <a href='{{ LaravelLocalization::localizeUrl('/services') }}'>
                                        <svg width="9" height="14" viewBox="0 0 9 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.6875 6.3125C8.09375 6.6875 8.09375 7.34375 7.6875 7.71875L2.6875 12.7188C2.3125 13.125 1.65625 13.125 1.28125 12.7188C0.875 12.3438 0.875 11.6875 1.28125 11.3125L5.5625 7L1.28125 2.71875C0.875 2.34375 0.875 1.6875 1.28125 1.3125C1.65625 0.90625 2.3125 0.90625 2.6875 1.3125L7.6875 6.3125Z"
                                                fill="white" />
                                        </svg>Our Services
                                    </a>
                                </li>
                                <li>
                                    <a href='{{ LaravelLocalization::localizeUrl('/portfolio') }}'>
                                        <svg width="9" height="14" viewBox="0 0 9 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.6875 6.3125C8.09375 6.6875 8.09375 7.34375 7.6875 7.71875L2.6875 12.7188C2.3125 13.125 1.65625 13.125 1.28125 12.7188C0.875 12.3438 0.875 11.6875 1.28125 11.3125L5.5625 7L1.28125 2.71875C0.875 2.34375 0.875 1.6875 1.28125 1.3125C1.65625 0.90625 2.3125 0.90625 2.6875 1.3125L7.6875 6.3125Z"
                                                fill="white" />
                                        </svg> Our Project
                                    </a>
                                </li>
                                <li>
                                    <a href='{{ LaravelLocalization::localizeUrl('/team') }}'>
                                        <svg width="9" height="14" viewBox="0 0 9 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.6875 6.3125C8.09375 6.6875 8.09375 7.34375 7.6875 7.71875L2.6875 12.7188C2.3125 13.125 1.65625 13.125 1.28125 12.7188C0.875 12.3438 0.875 11.6875 1.28125 11.3125L5.5625 7L1.28125 2.71875C0.875 2.34375 0.875 1.6875 1.28125 1.3125C1.65625 0.90625 2.3125 0.90625 2.6875 1.3125L7.6875 6.3125Z"
                                                fill="white" />
                                        </svg>Team
                                    </a>
                                </li>
                                <li>
                                    <a href='{{ LaravelLocalization::localizeUrl('/blog') }}'>
                                        <svg width="9" height="14" viewBox="0 0 9 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.6875 6.3125C8.09375 6.6875 8.09375 7.34375 7.6875 7.71875L2.6875 12.7188C2.3125 13.125 1.65625 13.125 1.28125 12.7188C0.875 12.3438 0.875 11.6875 1.28125 11.3125L5.5625 7L1.28125 2.71875C0.875 2.34375 0.875 1.6875 1.28125 1.3125C1.65625 0.90625 2.3125 0.90625 2.6875 1.3125L7.6875 6.3125Z"
                                                fill="white" />
                                        </svg>Blog Us
                                    </a>
                                </li>
                                <li>
                                    <a href='{{ LaravelLocalization::localizeUrl('/contact-us') }}'>
                                        <svg width="9" height="14" viewBox="0 0 9 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.6875 6.3125C8.09375 6.6875 8.09375 7.34375 7.6875 7.71875L2.6875 12.7188C2.3125 13.125 1.65625 13.125 1.28125 12.7188C0.875 12.3438 0.875 11.6875 1.28125 11.3125L5.5625 7L1.28125 2.71875C0.875 2.34375 0.875 1.6875 1.28125 1.3125C1.65625 0.90625 2.3125 0.90625 2.6875 1.3125L7.6875 6.3125Z"
                                                fill="white" />
                                        </svg>Contact Us
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
                                    <a href='portfolio.html'>
                                        <svg width="9" height="14" viewBox="0 0 9 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.6875 6.3125C8.09375 6.6875 8.09375 7.34375 7.6875 7.71875L2.6875 12.7188C2.3125 13.125 1.65625 13.125 1.28125 12.7188C0.875 12.3438 0.875 11.6875 1.28125 11.3125L5.5625 7L1.28125 2.71875C0.875 2.34375 0.875 1.6875 1.28125 1.3125C1.65625 0.90625 2.3125 0.90625 2.6875 1.3125L7.6875 6.3125Z"
                                                fill="white" />
                                        </svg>What We Offer
                                    </a>
                                </li>
                                <li>
                                    <a href='contact-us.html'>
                                        <svg width="9" height="14" viewBox="0 0 9 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.6875 6.3125C8.09375 6.6875 8.09375 7.34375 7.6875 7.71875L2.6875 12.7188C2.3125 13.125 1.65625 13.125 1.28125 12.7188C0.875 12.3438 0.875 11.6875 1.28125 11.3125L5.5625 7L1.28125 2.71875C0.875 2.34375 0.875 1.6875 1.28125 1.3125C1.65625 0.90625 2.3125 0.90625 2.6875 1.3125L7.6875 6.3125Z"
                                                fill="white" />
                                        </svg>Customer Feedback
                                    </a>
                                </li>
                                <li>
                                    <a href='contact-us.html'>
                                        <svg width="9" height="14" viewBox="0 0 9 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.6875 6.3125C8.09375 6.6875 8.09375 7.34375 7.6875 7.71875L2.6875 12.7188C2.3125 13.125 1.65625 13.125 1.28125 12.7188C0.875 12.3438 0.875 11.6875 1.28125 11.3125L5.5625 7L1.28125 2.71875C0.875 2.34375 0.875 1.6875 1.28125 1.3125C1.65625 0.90625 2.3125 0.90625 2.6875 1.3125L7.6875 6.3125Z"
                                                fill="white" />
                                        </svg>Latest Post
                                    </a>
                                </li>
                                <li>
                                    <a href='contact-us.html'>
                                        <svg width="9" height="14" viewBox="0 0 9 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.6875 6.3125C8.09375 6.6875 8.09375 7.34375 7.6875 7.71875L2.6875 12.7188C2.3125 13.125 1.65625 13.125 1.28125 12.7188C0.875 12.3438 0.875 11.6875 1.28125 11.3125L5.5625 7L1.28125 2.71875C0.875 2.34375 0.875 1.6875 1.28125 1.3125C1.65625 0.90625 2.3125 0.90625 2.6875 1.3125L7.6875 6.3125Z"
                                                fill="white" />
                                        </svg>Help Center
                                    </a>
                                </li>
                                <li>
                                    <a href='contact-us.html'>
                                        <svg width="9" height="14" viewBox="0 0 9 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.6875 6.3125C8.09375 6.6875 8.09375 7.34375 7.6875 7.71875L2.6875 12.7188C2.3125 13.125 1.65625 13.125 1.28125 12.7188C0.875 12.3438 0.875 11.6875 1.28125 11.3125L5.5625 7L1.28125 2.71875C0.875 2.34375 0.875 1.6875 1.28125 1.3125C1.65625 0.90625 2.3125 0.90625 2.6875 1.3125L7.6875 6.3125Z"
                                                fill="white" />
                                        </svg>Terms & Condition
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
                                    <a href='portfolio.html'><img src="{{ asset('assets/images/footer/f1.png') }}"
                                            alt=""></a>
                                </div>
                                <div class="techin-instagram-thumb">
                                    <a href='portfolio.html'><img src="{{ asset('assets/images/footer/f4.png') }}"
                                            alt=""></a>
                                </div>
                                <div class="techin-instagram-thumb">
                                    <a href='portfolio.html'><img src="{{ asset('assets/images/footer/f2.png') }}"
                                            alt=""></a>
                                </div>
                                <div class="techin-instagram-thumb">
                                    <a href='portfolio.html'><img src="{{ asset('assets/images/footer/f5.png') }}"
                                            alt=""></a>
                                </div>
                                <div class="techin-instagram-thumb">
                                    <a href='portfolio.html'><img src="{{ asset('assets/images/footer/f6.png') }}"
                                            alt=""></a>
                                </div>
                                <div class="techin-instagram-thumb">
                                    <a href='portfolio.html'><img src="{{ asset('assets/images/footer/f3.png') }}"
                                            alt=""></a>
                                </div>
                            </div>
                            <ul>
                                <li>
                                    <a href='portfolio.html'>

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
                            <img src="assets/images/footer/icon1.svg" alt="">
                        </div>
                        <div class="techin-footer-info-text info1">
                            <span>Office Address</span>
                            <h5>{{ setting('site_address', '12th Street, New York, USA') }}</h5>
                        </div>
                    </div>
                    <a href="mailto:{{ setting('site_email') }}">
                        <div class="techin-footer-info-item">
                            <div class="techin-footer-info-icon">
                                <img src="assets/images/footer/icon2.svg" alt="">
                            </div>
                            <div class="techin-footer-info-text info1">
                                <span>Email Address</span>
                                <h5>{{ setting('site_email', 'info@techin.com') }}</h5>
                            </div>
                        </div>
                    </a>

                    <a href="tel:{{ setting('site_phone') }}">
                        <div class="techin-footer-info-item">
                            <div class="techin-footer-info-icon">
                                <img src="assets/images/footer/icon3.svg" alt="">
                            </div>
                            <div class="techin-footer-info-text info1">
                                <span>Call Us For Support</span>
                                <h5>{{ setting('site_phone', '+(009) 1888 000 2222') }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="techin-footer-bottom bottom2">
                <div class="techin-copywright">
                    <p>Copyright &copy; <span id="current-year"></span> <span class="footer-text">{{ setting('site_name', 'Baherit') }}</span>. All
                        rights reserved.</p>
                </div>
                <div class="techin-header-social">
                    <ul>
                        @foreach(social_links() as $platform => $social)
                            <li>
                                <a href="{{ $social['url'] }}" target="_blank" rel="noopener noreferrer">
                                    @if($platform === 'facebook')
                                        <i class="ri-facebook-fill"></i>
                                    @elseif($platform === 'twitter')
                                        <i class="ri-twitter-fill"></i>
                                    @elseif($platform === 'instagram')
                                        <svg width="16" height="16" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.5 3.60547C8.22266 3.60547 9.64453 5.02734 9.64453 6.75C9.64453 8.5 8.22266 9.89453 6.5 9.89453C4.75 9.89453 3.35547 8.5 3.35547 6.75C3.35547 5.02734 4.75 3.60547 6.5 3.60547ZM6.5 8.80078C7.62109 8.80078 8.52344 7.89844 8.52344 6.75C8.52344 5.62891 7.62109 4.72656 6.5 4.72656C5.35156 4.72656 4.44922 5.62891 4.44922 6.75C4.44922 7.89844 5.37891 8.80078 6.5 8.80078ZM10.4922 3.49609C10.4922 3.08594 10.1641 2.75781 9.75391 2.75781C9.34375 2.75781 9.01562 3.08594 9.01562 3.49609C9.01562 3.90625 9.34375 4.23438 9.75391 4.23438C10.1641 4.23438 10.4922 3.90625 10.4922 3.49609ZM12.5703 4.23438C12.625 5.24609 12.625 8.28125 12.5703 9.29297C12.5156 10.2773 12.2969 11.125 11.5859 11.8633C10.875 12.5742 10 12.793 9.01562 12.8477C8.00391 12.9023 4.96875 12.9023 3.95703 12.8477C2.97266 12.793 2.125 12.5742 1.38672 11.8633C0.675781 11.125 0.457031 10.2773 0.402344 9.29297C0.347656 8.28125 0.347656 5.24609 0.402344 4.23438C0.457031 3.25 0.675781 2.375 1.38672 1.66406C2.125 0.953125 2.97266 0.734375 3.95703 0.679688C4.96875 0.625 8.00391 0.625 9.01562 0.679688C10 0.734375 10.875 0.953125 11.5859 1.66406C12.2969 2.375 12.5156 3.25 12.5703 4.23438ZM11.2578 10.3594C11.5859 9.56641 11.5039 7.65234 11.5039 6.75C11.5039 5.875 11.5859 3.96094 11.2578 3.14062C11.0391 2.62109 10.6289 2.18359 10.1094 1.99219C9.28906 1.66406 7.375 1.74609 6.5 1.74609C5.59766 1.74609 3.68359 1.66406 2.89062 1.99219C2.34375 2.21094 1.93359 2.62109 1.71484 3.14062C1.38672 3.96094 1.46875 5.875 1.46875 6.75C1.46875 7.65234 1.38672 9.56641 1.71484 10.3594C1.93359 10.9062 2.34375 11.3164 2.89062 11.5352C3.68359 11.8633 5.59766 11.7812 6.5 11.7812C7.375 11.7812 9.28906 11.8633 10.1094 11.5352C10.6289 11.3164 11.0664 10.9062 11.2578 10.3594Z" fill="white" />
                                        </svg>
                                    @elseif($platform === 'linkedin')
                                        <i class="ri-linkedin-fill"></i>
                                    @elseif($platform === 'youtube')
                                        <i class="ri-youtube-fill"></i>
                                    @elseif($platform === 'github')
                                        <i class="ri-github-fill"></i>
                                    @else
                                        <i class="ri-link"></i>
                                    @endif
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </footer>
