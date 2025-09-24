@extends('layouts')

@section('content')
    <!-- Home Section -->
    <div class="tm-section-active tm-fix-bar d-none d-xl-block">
        <ul>
            <ul>
                <li><a href="#home"   class="nav-link"></a></li>
                <li><a href="#about"  class="nav-link"></a></li>
                <li><a href="#feature"class="nav-link"></a></li>
                <li><a href="#work"   class="nav-link"></a></li>
                <li><a href="#faq"    class="nav-link"></a></li>
                <li><a href="#contact"class="nav-link"></a></li>
            </ul>
        </ul>
    </div>
    <section class="home-section" id="home">
        <div class="container">
            <div class="row align-items-center">
                {{-- text --}}
                <div class="col-lg-7">
                    <div class="home-content">
                        <h1 class="wow fadeInLeft">
                            {{-- Banner titles from settings or fallback translations --}}
                            {{ $siteSettings['banner_title']   ?? __('messages.banner.title')   }}
                            <div class="title-effect">
                                <img src="{{ asset('assets/images/title-effect.png') }}" alt="">
                                <span class="txt-gradient">
                                    {{ $siteSettings['banner_title2'] ?? __('messages.banner.title2') }}
                                </span>
                            </div>
                            {{ $siteSettings['banner_subtitle'] ?? __('messages.banner.subtitle') }}
                        </h1>
                        <p>
                            {{ $siteSettings['banner_subtitle2']
                                ?? __('messages.banner.subtitle2') }}
                        </p>
                    </div>
                </div>
                {{-- illustration --}}
                <div class="col-lg-5">
                    <div class="home-sec-img wow zoomIn">
                        <img src="{{ asset('assets/svg/home.svg') }}" alt="" style="width: 100%">
                    </div>
                </div>
            </div>
        </div>
    </section>


    @php
        $items = $abouts->whereBetween('order', [1, 4])->sortBy('order');
        $main  = $abouts->firstWhere('order', 0);

        use Illuminate\Support\Str;
    @endphp


    <section class="about-section section-b-space" id="about">
        <div class="container">
            <div class="row g-5 flex-column-reverse flex-lg-row">
                {{-- four small boxes (order 1‑4) --}}
                <div class="col-lg-6">
                    <div class="row g-4 about-row">
                        @foreach($items as $section)
                            <div class="col-sm-6">
                                <div class="about-box wow slideInUp">
                                    @if($section->icon)
                                        <div class="about-icon">
                                            <img src="{{ asset('storage/' . $section->icon) }}" class="img-fluid outline-icon" alt="">
                                            <img src="{{ asset('assets/svg/copy-bold.svg') }}" class="img-fluid bold-icon" alt="">
                                        </div>
                                    @endif
                                    <div class="about-content">
                                        <h3>
                                            <img src="{{ asset('assets/svg/about-title.svg') }}" alt="" class="img-fluid">
                                            {{ $section->title }}
                                        </h3>
                                        <p>{!! Str::limit(
                                            strip_tags($section->description),
                                            100,
                                            '…'
                                        ) !!}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- main info (order 0) --}}
                <div class="col-lg-6">
                    <div class="about-info">
                        <div>
                            <div class="title">
                                <h2 class="wow zoomIn animate-item">
                                    {{ $siteSettings['about_heading'] ?? __('messages.ABOUT BAHER TECHNOLOGY') }}
                                </h2>
                                @if($main) <h3>{{ $main->title }}</h3> @endif
                            </div>

                            @if($main)
                                <p class="c-dark">{!! $main->description !!}</p>
                                <a class="wow slideInUp btn-arrow" href="{{ route('about.index') }}">
                                    <div class="icon-arrow"><i class="fa-sharp fa-regular fa-arrow-right"></i></div>
                                    {{ __('messages.Read more') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Services Section -->
    <section class="feature-section section-b-space" id="feature">
        <div class="container">
            <div class="title-basic">
                <h2 class="text-white">
                    {{ $siteSettings['our_skills'] ?? __('messages.Our Skills') }}
                </h2>
            </div>
            <div class="featureSlider">
                <div id="featureSlider" class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="row g-xxl-5 g-4">
                            @foreach($services as $service)
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="feature-box wow slideInUp" data-wow-delay="0.1s">
                                    <div class="feature-top">
                                        <div class="feature-icon">
                                            <img src="{{ asset('storage/' . $service->icon) }}" class="img-fluid outline-icon"
                                                alt="{{ $service->title }}" />
                                            <img src="{{ asset('storage/' . $service->image) }}" class="img-fluid bold-icon"
                                                alt="{{ $service->title }}" />
                                        </div>
                                        <h3>{{ $service->title }}</h3>
                                    </div>
                                    <h4>
                                        {!! $service->short_description !!}
                                    </h4>
                                    <div class="link-overflow">
                                        <!-- <a href="service.html"
                                                >Read more
                                                <i class="fa-sharp fa-regular fa-arrow-right"></i
                                            ></a> -->
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="our-work" id="work">
        <div class="title-basic">
            <h2 class="wow zoomIn animate-item text-white">
                {{ $siteSettings['browse_project'] ?? __('messages.projects.heading') }}
            </h2>
        </div>

        @foreach($projects as $project)
            @php
                $gallery = is_array($project->gallery) ? $project->gallery : json_decode($project->gallery, true) ?? [];
                $chunks = array_chunk($gallery, 2);
            @endphp

            <section class="our-work-section section-b-space section-mb-space">
                <div class="container">
                    <div class="row g-md-5 g-4">
                        <div class="col-lg-6 order-lg-0 order-1">
                            <div class="about-content">
                                <div>
                                    <div class="title">
                                        <span class="number-pattern"> {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}.</span>
                                        <h2 class="text-white">{{ $project->title }}</h2>
                                    </div>
                                    <p>{!! $project->description !!}</p>

                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <img src="{{ asset('storage/' . $project->featured_image) }}"
                                                 class="img-fluid" alt="">
                                        </li>

                                        @foreach($gallery as $image)
                                            <li class="list-inline-item">
                                                <img src="{{ asset('storage/' . $image) }}"
                                                     class="img-fluid" alt="">
                                            </li>
                                        @endforeach
                                    </ul>

                                    <a href="{{ route('project.show', $project->slug) }}"
                                       class="wow slideInUp btn-arrow text-white">
                                        <div class="icon-arrow">
                                            <i class="fa-sharp fa-regular fa-arrow-right"></i>
                                        </div>
                                        {{ __('messages.projects.visit') }}
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="work-img">
                                <div class="row gap-2">
                                    <div class="col-12 mb-3">
                                        <img src="{{ asset('storage/' . $project->featured_image) }}"
                                             class="img-fluid rounded-3" alt="{{ $project->title }}">
                                    </div>
                                    @foreach($chunks as $rowIndex => $chunk)
                                        @if($rowIndex < 2)
                                            <div class="col-12">
                                                <div class="row g-2">
                                                    @foreach($chunk as $img)
                                                        <div class="col-6">
                                                            <img src="{{ asset('storage/' . $img) }}"
                                                                 class="img-fluid rounded-3" alt="{{ $project->title }}">
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endforeach
    </section>




    <!-- FAQ Section -->
    <section id="faq" class="faq-section">
        <div class="title-basic">
            <h2 class="text-center">{{ $siteSettings['frequently_asked_questions'] ?? __('messages.faq.heading') }}</h2>
        </div>
        <div class="container wow fadeInLeft">
            <div class="row">
                <div class="col-lg-12">
                    <div class="animated-fade">
                        <div class="tab-content">
                            <div class="tab active">
                                <div class="tm-faq">
                                    <div class="accordian-wrapper">
                                        @foreach($faqs as $faq)
                                            <div class="single-accordian">
                                                <h3 class="accordian-head tm-md-f16">{{ $faq->question }}</h3>
                                                <div class="accordian-body">
                                                    {!! $faq->answer !!}
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- .tm-faq -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .col -->
            </div>
        </div>
    </section>


    <!-- Contact Section -->
    <section class="contact-section section-b-space tm-bg" id="contact">
        <div class="tm-top-contact">
            <div class="container">
                <div class="row">
                    <div class="title-basic">
                        <h2 style="color: #fff">   {{ $siteSettings['contact_us'] ?? __('messages.contact.heading') }}</h2>
                    </div>
                    <div class="col-lg-5">
                        <form action="{{ route('contact.store') }}" method="POST" class="auth-form">
                            @csrf
                            <div class="row g-4">
                                <div class="col-sm-6">
                                    <label for="name" class="form-label">{{ __('messages.contact.name') }}</label>
                                    <input name="name" type="text" class="form-control" id="name" required>
                                </div>
                                <div class="col-sm-6">
                                    <label for="email" class="form-label">{{ __('messages.contact.email') }}</label>
                                    <input name="email" type="email" class="form-control" id="email" required>
                                </div>
                                <div class="col-12">
                                    <label for="phoneNumber" class="form-label">{{ __('messages.contact.phone') }}</label>
                                    <input name="phone" type="tel" class="form-control" id="phoneNumber">
                                </div>
                                <div class="col-12">
                                    <label for="message" class="form-label">{{ __('messages.contact.message') }}</label>
                                    <textarea name="message" class="form-control" id="message" rows="3" required></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn-solid">{{ __('messages.contact.send') }}</button>
                                </div>
                            </div>
                        </form>
                </div>
                <div class="col-lg-7">
                    <h2 class="tm-contact-bar text-center" style="color: #fff">
                        {{ $siteSettings['join_community'] ?? __('messages.contact.join_community') }}
                    </h2>
                    </h2>
                    <div class=""></div>
                    <div class="tm-social-btn-wrap tm-style1 wow zoomIn">
                        <div class="tm-socil-bar-wrap">
                            <div class="tm-socil-bar bar1"></div>
                            <div class="tm-socil-bar bar2"></div>
                            <div class="tm-socil-bar bar3"></div>
                            <div class="tm-socil-bar bar4"></div>
                            <div class="tm-socil-bar bar5"></div>
                            <div class="tm-socil-bar bar6"></div>
                            <div class="tm-socil-bar bar7"></div>
                            <div class="tm-socil-bar bar8"></div>
                        </div>
                        <div class="tm-single-social-btn tm-active">
                            <a href="mailto:info@baherit.com" class="tm-email-btn">
                              <span><i class="fa-regular fa-envelope"></i></span>
                            </a>
                            <div class="tm-social-btn-text">info@baherit.com</div>
                          </div>

                        <div class="tm-single-social-btn">
                            <a href="https://www.facebook.com/baherits" class="tm-social-btn tm-facebook"><span><i
                                        class="fa-brands fa-facebook-f"></i></span></a>
                            <div class="tm-social-btn-text">Facebook</div>
                        </div>
                        <div class="tm-single-social-btn">
                            <a href="https://www.linkedin.com/in/baherits" class="tm-social-btn tm-linkedin"><span><i
                                        class="fa-brands fa-linkedin-in"></i></span></a>
                            <div class="tm-social-btn-text">Linkedin</div>
                        </div>
                        <div class="tm-single-social-btn">
                            <a href="https://www.x.com/baherits1" class="tm-social-btn tm-twitter"><span><i
                                        class="fa-brands fa-twitter"></i></span></a>
                            <div class="tm-social-btn-text">Twitter</div>
                        </div>
                        <div class="tm-single-social-btn">
                            <a href="https://www.reddit.com/user/baherits" class="tm-social-btn tm-reddit"><span><i
                                        class="fa-brands fa-reddit-alien"></i></span></a>
                            <div class="tm-social-btn-text">Reddit</div>
                        </div>
                        <div class="tm-single-social-btn">
                            <a href="#" class="tm-social-btn tm-telegram"><span><i
                                        class="fa-brands fa-telegram"></i></span></a>
                            <div class="tm-social-btn-text">Telegram</div>
                        </div>
                        <div class="tm-single-social-btn">
                            <a href="https://www.instagram.com/baherits" class="tm-social-btn tm-medium"><span><i
                                        class="fa-brands fa-instagram"></i></span></a>
                            <div class="tm-social-btn-text">Instagram</div>
                        </div>
                        <div class="tm-single-social-btn">
                            <a href="https://github.com/baherits" class="tm-social-btn tm-github"><span><i
                                        class="fa fa-github-alt"></i></span></a>
                            <div class="tm-social-btn-text">Github</div>
                        </div>
                        <div class="tm-single-social-btn">
                            <a href="https://www.youtube.com/@baherits" class="tm-social-btn tm-youtube"><span><i
                                        class="fa-brands fa-youtube"></i></span></a>
                            <div class="tm-social-btn-text">Youtube</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
