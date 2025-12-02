@extends('layouts.app')

@section('content')
    <div class="techin-hero-section" style="background-image: url({{ $hero && $hero->image_path ? asset($hero->image_path) : 'assets/images/hero/bg1.png' }})">
        <div class="container">
            <div class="row techin_screenfix_right2">
                <div class="col-lg-5">
                    <div class="techin-hero-content">
                        <div class="techin-hero-tag">
                            <img src="assets/images/hero/shape1.svg" alt="">
                            {{ optional(optional($hero)->translation)->subheading ?? __('index.hero.subheading') }}
                        </div>
                        <h1>{{ optional(optional($hero)->translation)->heading ?? __('index.hero.heading') }}</h1>
                        <p>{{ optional(optional($hero)->translation)->description ?? __('index.hero.description') }}</p>
                        <div class="techin-extra-mt">
                            <a class='techin-default-btn' data-text='{{ optional(optional($hero)->translation)->button_label ?? __('index.hero.button') }}' href='{{ $hero && $hero->button_url ? $hero->button_url : 'contact-us.html' }}'>
                                <span class="button-wraper">{{ optional(optional($hero)->translation)->button_label ?? __('index.hero.button') }}</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="techin-hero-thumb" data-aos="fade-left" data-aos-duration="700">
                        <img src="assets/images/hero/1.png" alt="">
                    </div>
                    <div class="techin-hero-thumb2">
                        <img src="assets/images/hero/Img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end hero -->

    <section class="techin-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="techin-about-thumb position-r">
                        <img src="assets/images/v1/about-thumb1.png" alt="">
                        <div class="techin-about-thumb2">
                            <img src="assets/images/v1/about-thumb2.png" alt="">
                        </div>
                        <div class="techin-about-tag">
                            <img src="assets/images/v1/tag1.svg" alt="">
                        </div>
                        <div class="techin-about-frame">
                            <img src="assets/images/v1/Frame.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 d-flex align-items-center">
                    <div class="techin-about-content pl-60">
                        <div class="techin-title-tag">
                            <span><img src="assets/images/v1/shape1.svg" alt=""></span>
                            <h6>{{ __('index.about.tagline') }}</h6>
                            <span><img src="assets/images/v1/shape1.svg" alt=""></span>
                        </div>
                        <h2>{{ optional(optional($about)->translation)->title ?? __('index.about.title') }}</h2>
                        {!! optional(optional($about)->translation)->content ?? __('index.about.description') !!}
                        <div class="techin-iconbox-wraper">
                            <div class="techin-iconbox-wrap">
                                <div class="techin-iconbox-icon">
                                    <img src="assets/images/v1/icon1.svg" alt="">
                                </div>
                                <div class="techin-iconbox-data">
                                    <h5>{{ __('index.about.service_1') }}</h5>
                                </div>
                            </div>
                            <div class="techin-iconbox-wrap">
                                <div class="techin-iconbox-icon">
                                    <img src="assets/images/v1/icon2.svg" alt="">
                                </div>
                                <div class="techin-iconbox-data">
                                    <h5>{{ __('index.about.service_2') }}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="techin-about-info-wraper">
                            <a class='techin-default-btn' data-text='{{ __('index.about.more_info') }}' href='about-us.html'>
                                <span class="button-wraper">{{ __('index.about.more_info') }}</span>
                            </a>
                            <div class="techin-about-info-wrap">
                                <div class="techin-about-info-icon">
                                    <a href="tel:{{ $settings['phone'] ?? '009' }}">
                                        <img src="assets/images/v1/phone.svg" alt="">
                                    </a>
                                </div>
                                <div class="techin-about-info-text">
                                    <a href="tel:{{ $settings['phone'] ?? '009' }}">{{ __('index.about.call_us') }}</a>
                                    <a href="tel:{{ $settings['phone'] ?? '009' }}"><span>{{ $settings['phone'] ?? '+(009) 1888 000 2222' }}</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  end about -->

   
    <!-- end brand -->

    <div class="techin-section-padding2 light-bg1">
        <div class="container">
            <div class="techin-section-title center">
                <div class="techin-title-tag center2">
                    <span><img src="assets/images/v1/shape1.svg" alt=""></span>
                    <h6>{{ __('index.services.tagline') }}</h6>
                    <span><img src="assets/images/v1/shape1.svg" alt=""></span>
                </div>
                <h2>{{ __('index.services.title') }}</h2>
            </div>
            <div class="row">
                @foreach(($services ?? collect()) as $service)
                <div class="col-xl-3 col-md-6">
                        <div class="techin-service-wrap">
                            <div class="techin-service-icon">
                                @if($service->icon_path)
                                    <img src="{{ asset($service->icon_path) }}" alt="">
                                @endif
                            </div>
                            <div class="techin-service-content">
                                <h5>{{ optional($service->translation)->name }}</h5>
                                <p>{{ optional($service->translation)->short_description }}</p>
                            </div>
                            <a class='techin-default-btn techin-service-btn' data-text='{{ __('index.services.read_more') }}' href='#'>
                                <span class="button-wraper">{{ __('index.services.read_more') }}</span>
                            </a>
                        </div>
                    </div>
                @endforeach
                @if(($services ?? collect())->isEmpty())
                <div class="col-12 text-center">
                    <p class="text-muted">{{ __('index.services.empty') }}</p>
                </div>
                @endif
            </div>
        </div>
    </div>
    <!-- end service -->

    <div class="techin-section-padding3 techin-counter-v1"
        style="background-image: url(assets/images/v1/counter-bg.png);">
        <div id="techin-counter"></div>
        <div class="container">
            <div class="techin-counter-column">
                @foreach(($counters ?? collect()) as $counter)
                <div class="techin-counter-wrap">
                        <div class="techin-counter-icon">
                            @if($counter->icon_path)
                                <img src="{{ asset($counter->icon_path) }}" alt="">
                            @endif
                        </div>
                        <div class="techin-counter-data">
                            <div class="techin-counter-number">
                                <span data-percentage="{{ $counter->target_value }}" class="techin-counter"></span>
                            </div>
                            <p>{{ optional($counter->translation)->label }}</p>
                        </div>
                    </div>
                @endforeach
                @if(($counters ?? collect())->isEmpty())
                <!-- Empty counters -->
                @endif
            </div>
        </div>
    </div>
    <!-- end counter -->

    <div class="techin-cta-section cta-v1" style="background-image: url(assets/images/cta/cta-bg1.png)">
        <div class="container">
            <div class="techin-cta-wrap">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="techin-cta-content">
                            <div class="techin-cta-content-top">
                                <img src="{{ asset('assets/images/shape/cta-shape1.svg') }}" alt="">
                                <h6>{{ __('index.cta.tagline') }}</h6>
                                <img src="{{ asset('assets/images/shape/cta-shape1.svg') }}" alt="">
                            </div>
                            <div class="techin-cta-content-bottom">
                                <h2>{{ __('index.cta.title') }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 d-flex align-items-center justify-content-end">
                        <div class="techin-title-btn">
                            <a class="techin-default-btn pill techin-cta-btn" href="contact-us.html"
                                data-text="{{ __('index.cta.button') }}">
                                <span class="button-wraper">{{ __('index.cta.button') }}</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end cta -->

    <div class="techin-section-padding2">
        <div class="container">
            <div class="techin-section-title center">
                <div class="techin-title-tag center2">
                    <span><img src="{{ asset('assets/images/v1/shape1.svg') }}" alt=""></span>
                    <h6>{{ __('index.working_process.label') }}</h6>
                    <span><img src="{{ asset('assets/images/v1/shape1.svg') }}" alt=""></span>
                </div>
                <h2>{{ __('index.working_process.title') }}</h2>
            </div>
            @if(($workingProcesses ?? collect())->count() > 0)
            <div class="row">
                @php
                    $processesArray = $workingProcesses->toArray();
                    $leftProcesses = array_slice($processesArray, 0, 2);
                    $rightProcesses = array_slice($processesArray, 2, 2);
                @endphp
                
                <!-- Left Column -->
                <div class="col-xl-4 col-md-6">
                    @foreach($leftProcesses as $process)
                        @php
                            $processObj = (object) $process;
                            $translation = optional($processObj->translation ?? null);
                            $fallbackTranslation = collect($processObj->translations ?? [])->firstWhere('locale', config('app.fallback_locale'));
                            $title = $translation->title ?? optional($fallbackTranslation)->title ?? __('index.working_process.fallback.title');
                            $description = $translation->description ?? optional($fallbackTranslation)->description ?? __('index.working_process.fallback.description');
                            
                            // Handle icon path
                            $iconPath = $processObj->icon_path ?? null;
                            if ($iconPath && (str_starts_with($iconPath, 'http://') || str_starts_with($iconPath, 'https://'))) {
                                $iconUrl = $iconPath;
                            } elseif ($iconPath) {
                                $relativeIconPath = ltrim($iconPath, '/');
                                $publicIconPath = public_path('storage/' . $relativeIconPath);
                                $iconUrl = file_exists($publicIconPath) ? asset('storage/' . $relativeIconPath) : asset('assets/images/v1/icon-s1.svg');
                            } else {
                                $iconUrl = asset('assets/images/v1/icon-s1.svg');
                            }
                            
                            // Handle number tag path
                            $numberTagPath = $processObj->number_tag_path ?? null;
                            if ($numberTagPath && (str_starts_with($numberTagPath, 'http://') || str_starts_with($numberTagPath, 'https://'))) {
                                $numberTagUrl = $numberTagPath;
                            } elseif ($numberTagPath) {
                                $relativeTagPath = ltrim($numberTagPath, '/');
                                $publicTagPath = public_path('storage/' . $relativeTagPath);
                                $numberTagUrl = file_exists($publicTagPath) ? asset('storage/' . $relativeTagPath) : asset('assets/images/v1/tag2.svg');
                            } else {
                                $numberTagUrl = asset('assets/images/v1/tag2.svg');
                            }
                        @endphp
                        <div class="techin-iconbox-wrap2-item1">
                            <div class="techin-iconbox-title-wrap2">
                                <div class="techin-iconbox-title-icon">
                                    <img src="{{ $iconUrl }}" alt="{{ $title }}">
                                </div>
                                <div class="techin-iconbox-title-content">
                                    <h5>{{ $title }}</h5>
                                </div>
                            </div>
                            <div class="techin-iconbox-title-text">
                                <p>{{ $description }}</p>
                            </div>
                            <div class="techin-iconbox-number">
                                <img src="{{ $numberTagUrl }}" alt="">
                            </div>
                        </div>
                    @endforeach
                </div>
                
                <!-- Right Column -->
                <div class="col-xl-4 col-md-6 order-xl-2">
                    @foreach($rightProcesses as $process)
                        @php
                            $processObj = (object) $process;
                            $translation = optional($processObj->translation ?? null);
                            $fallbackTranslation = collect($processObj->translations ?? [])->firstWhere('locale', config('app.fallback_locale'));
                            $title = $translation->title ?? optional($fallbackTranslation)->title ?? __('index.working_process.fallback.title');
                            $description = $translation->description ?? optional($fallbackTranslation)->description ?? __('index.working_process.fallback.description');
                            
                            // Handle icon path
                            $iconPath = $processObj->icon_path ?? null;
                            if ($iconPath && (str_starts_with($iconPath, 'http://') || str_starts_with($iconPath, 'https://'))) {
                                $iconUrl = $iconPath;
                            } elseif ($iconPath) {
                                $relativeIconPath = ltrim($iconPath, '/');
                                $publicIconPath = public_path('storage/' . $relativeIconPath);
                                $iconUrl = file_exists($publicIconPath) ? asset('storage/' . $relativeIconPath) : asset('assets/images/v1/icon-s2.svg');
                            } else {
                                $iconUrl = asset('assets/images/v1/icon-s2.svg');
                            }
                            
                            // Handle number tag path
                            $numberTagPath = $processObj->number_tag_path ?? null;
                            if ($numberTagPath && (str_starts_with($numberTagPath, 'http://') || str_starts_with($numberTagPath, 'https://'))) {
                                $numberTagUrl = $numberTagPath;
                            } elseif ($numberTagPath) {
                                $relativeTagPath = ltrim($numberTagPath, '/');
                                $publicTagPath = public_path('storage/' . $relativeTagPath);
                                $numberTagUrl = file_exists($publicTagPath) ? asset('storage/' . $relativeTagPath) : asset('assets/images/v1/tag3.svg');
                            } else {
                                $numberTagUrl = asset('assets/images/v1/tag3.svg');
                            }
                        @endphp
                        <div class="techin-iconbox-wrap2-item1">
                            <div class="techin-iconbox-title-wrap2">
                                <div class="techin-iconbox-title-icon">
                                    <img src="{{ $iconUrl }}" alt="{{ $title }}">
                                </div>
                                <div class="techin-iconbox-title-content">
                                    <h5>{{ $title }}</h5>
                                </div>
                            </div>
                            <div class="techin-iconbox-title-text">
                                <p>{{ $description }}</p>
                            </div>
                            <div class="techin-iconbox-number">
                                <img src="{{ $numberTagUrl }}" alt="">
                            </div>
                        </div>
                    @endforeach
                </div>
                
                <!-- Center Image -->
                <div class="col-xl-4 col-lg-6">
                    <div class="techin-iconbox-title-thumb">
                        <img data-aos="zoom-out" data-aos-duration="700" src="{{ asset('assets/images/v1/img1.png') }}" alt="">
                    </div>
                </div>
            </div>
            @else
            <div class="row">
                <div class="col-12 text-center">
                    <p class="text-muted">{{ __('index.working_process.empty') }}</p>
                </div>
            </div>
            @endif
        </div>
    </div>
    <!-- end section -->

    <section class="techin-faq-section-padding bg-light3">
        <div class="container">
            <div class="row techin_screenfix_left3">
                <div class="col-lg-6">
                    <div class="techin-faq-thumb">
                        <img src="{{ asset('assets/images/v1/img2.png') }}" alt="">
                        <a class="techin-popup-video video-init" href="https://www.youtube.com/watch?v=zE_WFiHnSlY">
                            <img src="{{ asset('assets/images/blog/play-btn.svg') }}" alt="">
                            <div class="waves wave-1"></div>
                            <div class="waves wave-2"></div>
                            <div class="waves wave-3"></div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="techin-faq-content-wrap">
                        <div class="techin-title-tag">
                            <span><img src="{{ asset('assets/images/v1/shape1.svg') }}" alt=""></span>
                            <h6>{{ __('index.faq.tagline') }}</h6>
                            <span><img src="{{ asset('assets/images/v1/shape1.svg') }}" alt=""></span>
                        </div>
                        <h2 class="faq-title">{{ __('index.faq.title') }}</h2>
                        <div class="techin-faq-wrap1">
                            @forelse($faqs as $index => $faq)
                            <div class="techin-faq-item {{ $index === 0 ? 'open' : '' }}">
                                <div class="techin-faq-header">
                                    <h6>{{ $faq->translation->question }}</h6>
                                    <div class="techin-active-icon">
                                        <img class="active-icon" src="{{ asset('assets/images/v1/top-arrow.svg') }}" alt="">
                                    </div>
                                </div>
                                <div class="techin-faq-body body2" style="{{ $index === 0 ? 'display: block;' : 'display: none;' }}">
                                    <p>{!! $faq->translation->answer !!}</p>
                                </div>
                            </div>
                            @empty
                            <div class="techin-faq-item">
                                <div class="techin-faq-header">
                                    <h6>{{ __('index.faq.empty') }}</h6>
                                </div>
                            </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end faq -->

    <div class="techin-section-padding2">
        <div class="container">
            <div class="techin-section-title">
                <div class="row">
                    <div class="col-xl-6 col-lg-8">
                        <div class="techin-title-tag">
                            <span><img src="{{ asset('assets/images/v1/shape1.svg') }}" alt=""></span>
                            <h6>{{ __('index.projects.label') }}</h6>
                            <span><img src="{{ asset('assets/images/v1/shape1.svg') }}" alt=""></span>
                        </div>
                        <h2>{{ __('index.projects.title') }}</h2>
                    </div>
                </div>
            </div>
            <div class="techin-three-column">
                @forelse(($projects ?? collect()) as $project)
                    @php
                        $translation = optional($project->translation);
                        $fallbackTranslation = $project->translations->firstWhere('locale', config('app.fallback_locale'));
                        $title = $translation->title ?? optional($fallbackTranslation)->title ?? __('index.projects.fallback.title');
                        $excerpt = $translation->excerpt ?? optional($fallbackTranslation)->excerpt ?? __('index.projects.fallback.description');
                        $deliverables = $translation->deliverables ?? optional($fallbackTranslation)->deliverables;
                        $deliverables = $deliverables ? json_decode($deliverables, true) : [];
                        $category = $deliverables['industry'] ?? __('index.projects.fallback.category');
                        $projectUrl = $deliverables['project_url'] ?? '#';
                        $imagePath = $project->featured_image;
                        if ($imagePath && (str_starts_with($imagePath, 'http://') || str_starts_with($imagePath, 'https://'))) {
                            $imageUrl = $imagePath;
                        } elseif ($imagePath) {
                            $relativePath = ltrim($imagePath, '/');
                            $publicPath = public_path($relativePath);
                            $imageUrl = file_exists($publicPath) ? asset($relativePath) : asset('assets/images/v1/img5.png');
                        } else {
                            $imageUrl = asset('assets/images/v1/img5.png');
                        }
                    @endphp
                    <div class="techin-p-item">
                        <div class="techin-p-thumb">
                            <img src="{{ $imageUrl }}" alt="{{ $title }}">
                        </div>
                        <div class="techin-p-content">
                            <p>{{ $category }}</p>
                            <h6>{{ $title }}</h6>
                            <div class="btn-icon">
                                <a href="{{ $projectUrl }}" target="_blank" rel="noopener">
                                    <img src="{{ asset('assets/images/v1/r-arrow.svg') }}" alt="{{ __('index.projects.button') }}">
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p>{{ __('index.projects.empty') }}</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
    <!-- end section -->

    <section class="techin-section-padding6 bg-light3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center order-lg-2">
                    <div class="techin-appointment-content">
                        <div class="techin-title-tag">
                            <span><img src="{{ asset('assets/images/v1/shape1.svg') }}" alt=""></span>
                            <h6>{{ __('index.contact.tagline') }}</h6>
                            <span><img src="{{ asset('assets/images/v1/shape1.svg') }}" alt=""></span>
                        </div>
                        <h2 class="appointment-title">{{ __('index.contact.title') }}</h2>
                        <p class="text">{{ __('index.contact.description') }}</p>
                        <div class="techin-about-info-wrap techin-appointment-info">
                            <div class="techin-about-info-icon">
                                <a href="tel:{{ $settings['phone'] ?? '009' }}">
                                    <img src="{{ asset('assets/images/v1/phone.svg') }}" alt="">
                                </a>
                            </div>
                            <div class="techin-about-info-text">
                                <a href="tel:{{ $settings['phone'] ?? '009' }}">{{ __('index.contact.call_us') }}</a>
                                <a href="tel:{{ $settings['phone'] ?? '009' }}">
                                    <h5>{{ $settings['phone'] ?? '+(009) 1888 000 2222' }}</h5>
                                </a>
                            </div>
                        </div>
                        <div class="techin-about-info-wrap techin-appointment-info">
                            <div class="techin-about-info-icon">
                                <a href="mailto:{{ $settings['email'] ?? 'info@techin.com' }}"><img src="{{ asset('assets/images/v1/6.svg') }}" alt=""></a>
                            </div>
                            <div class="techin-about-info-text">
                                <a href="mailto:{{ $settings['email'] ?? 'info@techin.com' }}">{{ __('index.contact.email_address') }}</a>
                                <a href="mailto:{{ $settings['email'] ?? 'info@techin.com' }}">
                                    <h5>{{ $settings['email'] ?? 'info@techin.com' }}</h5>
                                </a>
                            </div>
                        </div>
                        <div class="techin-about-info-wrap techin-appointment-info">
                            <div class="techin-about-info-icon">
                                <img src="{{ asset('assets/images/v1/7.svg') }}" alt="">
                            </div>
                            <div class="techin-about-info-text">
                                <a href="#">{{ __('index.contact.office_address') }}</a>
                                <a href="#">
                                    <h5>{{ $settings['address'] ?? '12th Street, New York, USA' }}</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="techin-appointment-box">
                        <div class="techin-appointment-title">
                            <div class="techin-title-tag center2">
                                <span><img src="{{ asset('assets/images/v1/shape1.svg') }}" alt=""></span>
                                <h6>{{ __('index.contact.appointment.tagline') }}</h6>
                                <span><img src="{{ asset('assets/images/v1/shape1.svg') }}" alt=""></span>
                            </div>
                            <h3>{{ __('index.contact.appointment.title') }}</h3>
                        </div>
                        <form action="#">
                            <div class="techin-main-field">
                                <input type="text" placeholder="{{ __('index.contact.appointment.name_placeholder') }}">
                                <img src="{{ asset('assets/images/v1/a1.svg') }}" alt="">
                            </div>
                            <div class="techin-main-field">
                                <input type="email" placeholder="{{ __('index.contact.appointment.email_placeholder') }}">
                                <img src="{{ asset('assets/images/v1/a2.svg') }}" alt="">
                            </div>
                            <div class="teching-slect-wrapper">
                                <select class="techin-a-select">
                                    <option data-display="{{ __('index.contact.appointment.service_placeholder') }}">{{ __('index.contact.appointment.service_placeholder') }}</option>
                                    <option value="1">Some option</option>
                                    <option value="2">Another option</option>
                                    <option value="4">Potato</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="techin-main-field field5 mb-20">
                                        <input type="date" id="birthday" name="birthday">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="techin-main-field field5 mb-20">
                                        <input type="time" id="appt" name="appt">
                                    </div>
                                </div>
                            </div>
                            <div class="techin-main-field-textarea">
                                <textarea class="button-text" name="textarea" placeholder="{{ __('index.contact.appointment.message_placeholder') }}"></textarea>
                            </div>
                            <div class="techin-appointment-submit-btn mt-30">
                                <button id="techin-submit-btn" type="button" data-text="{{ __('index.contact.appointment.submit_btn') }}">
                                    <span class="button-wraper">{{ __('index.contact.appointment.submit_btn') }}</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <div class="techin-t-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="techin-t-wrap">
                        <div class="techin-title-tag">
                            <span><img src="{{ asset('assets/images/v1/shape1.svg') }}" alt=""></span>
                            <h6>{{ __('index.testimonials.label') }}</h6>
                            <span><img src="{{ asset('assets/images/v1/shape1.svg') }}" alt=""></span>
                        </div>
                        <h2>{{ __('index.testimonials.title') }}</h2>
                        <p>{{ __('index.testimonials.description') }}</p>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="techin-t-slider-init">
                        @forelse(($testimonials ?? collect()) as $testimonial)
                            @php
                                $translation = optional($testimonial->translation);
                                $fallbackTranslation = $testimonial->translations->firstWhere('locale', config('app.fallback_locale'));
                                $authorName = $translation->author_name ?? optional($fallbackTranslation)->author_name ?? __('index.testimonials.fallback.author_name');
                                $authorTitle = $translation->author_title ?? optional($fallbackTranslation)->author_title ?? __('index.testimonials.fallback.author_title');
                                $quote = $translation->quote ?? optional($fallbackTranslation)->quote ?? __('index.testimonials.fallback.quote');
                                $avatarPath = $testimonial->avatar_path;
                                if ($avatarPath && (str_starts_with($avatarPath, 'http://') || str_starts_with($avatarPath, 'https://'))) {
                                    $avatarUrl = $avatarPath;
                                } elseif ($avatarPath) {
                                    $relativeAvatarPath = ltrim($avatarPath, '/');
                                    $publicAvatarPath = public_path($relativeAvatarPath);
                                    if (file_exists($publicAvatarPath)) {
                                        $avatarUrl = asset($relativeAvatarPath);
                                    } else {
                                        $avatarUrl = asset('storage/' . $relativeAvatarPath);
                                    }
                                } else {
                                    $avatarUrl = asset('assets/images/v1/img8.png');
                                }
                                $rating = (int) ($testimonial->rating ?? 5);
                                $rating = $rating < 1 ? 1 : ($rating > 5 ? 5 : $rating);
                            @endphp
                            <div class="techin-t-slider-wrap">
                                <div class="techin-t-slider-title">
                                    <h6>{{ $authorName }}</h6>
                                    @if ($authorTitle)
                                        <p>{{ $authorTitle }}</p>
                                    @endif
                                </div>
                                <div class="techin-t-slider-thumb">
                                    <img src="{{ $avatarUrl }}" alt="{{ $authorName }}">
                                </div>
                                <div class="techin-t-slider-rating" aria-label="Rating {{ $rating }} / 5">
                                    <span>{{ str_repeat('★', $rating) . str_repeat('☆', 5 - $rating) }}</span>
                                </div>
                                <div class="techin-t-slider-text">
                                    <p>“{{ $quote }}”</p>
                                </div>
                                <div class="techin-t-slider-icon">
                                    <img src="{{ asset('assets/images/v1/8.svg') }}" alt="">
                                </div>
                            </div>
                        @empty
                            <div class="techin-t-slider-wrap">
                                <p class="text-center">{{ __('index.testimonials.empty') }}</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->

    <div class="techin-section-padding7">
        <div class="container">
            <div class="techin-section-title center">
                <div class="techin-title-tag center2">
                    <span><img src="{{ asset('assets/images/v1/shape1.svg') }}" alt=""></span>
                    <h6>{{ __('index.blog.label') }}</h6>
                    <span><img src="{{ asset('assets/images/v1/shape1.svg') }}" alt=""></span>
                </div>
                <h2>{{ __('index.blog.title') }}</h2>
            </div>
            <div class="row">
                @forelse(($blogs ?? collect()) as $blog)
                    @php
                        $translation = optional($blog->translation);
                        $fallbackTranslation = $blog->translations->firstWhere('locale', config('app.fallback_locale'));
                        $title = $translation->title ?? optional($fallbackTranslation)->title ?? '';
                        $excerpt = $translation->excerpt ?? optional($fallbackTranslation)->excerpt ?? '';
                        $slug = $blog->slug;
                        $readTime = $blog->getReadTime();
                        $publishedAt = $blog->published_at;
                        $publishedYear = $publishedAt ? $publishedAt->format('Y') : now()->format('Y');
                        $publishedDay = $publishedAt ? $publishedAt->format('d') : now()->format('d');
                        $publishedMonth = $publishedAt ? $publishedAt->format(app()->isLocale('ar') ? 'M' : 'M') : now()->format(app()->isLocale('ar') ? 'M' : 'M');
                        $authorName = $blog->author_name ?? __('index.blog.default_author');
                        $imagePath = $blog->featured_image;
                        if ($imagePath && (str_starts_with($imagePath, 'http://') || str_starts_with($imagePath, 'https://'))) {
                            $imageUrl = $imagePath;
                        } elseif ($imagePath) {
                            $relativeImagePath = ltrim($imagePath, '/');
                            $publicBlogPath = public_path($relativeImagePath);
                            if (file_exists($publicBlogPath)) {
                                $imageUrl = asset($relativeImagePath);
                            } else {
                                $imageUrl = asset('storage/' . $relativeImagePath);
                            }
                        } else {
                            $imageUrl = asset('assets/images/blog/img1.png');
                        }
                        $permalink = \Illuminate\Support\Facades\Route::has('blog.show')
                            ? route('blog.show', $slug)
                            : url('/blog/' . $slug);
                        $readTimeLabel = trans_choice('index.blog.read_time', $readTime, ['count' => $readTime]);
                    @endphp
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-wrapper">
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span>
                                        <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7 8C5.5625 8 4.25 7.25 3.53125 6C2.8125 4.78125 2.8125 3.25 3.53125 2C4.25 0.78125 5.5625 0 7 0C8.40625 0 9.71875 0.78125 10.4375 2C11.1562 3.25 11.1562 4.78125 10.4375 6C9.71875 7.25 8.40625 8 7 8ZM5.5625 9.5H8.40625C11.5 9.5 14 12 14 15.0938C14 15.5938 13.5625 16 13.0625 16H0.90625C0.40625 16 0 15.5938 0 15.0938C0 12 2.46875 9.5 5.5625 9.5Z" fill="#222627" />
                                        </svg>
                                        {{ $authorName }} · {{ $readTimeLabel }}
                                    </span>
                                    <span>
                                        <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.5 11C6.28125 11 5.1875 10.75 4.21875 10.2812C3.96875 10.4062 3.71875 10.5 3.4375 10.625C2.84375 10.8438 2.15625 11 1.5 11C1.28125 11 1.09375 10.875 1 10.6562C0.9375 10.4688 1.03125 10.25 1.1875 10.125V10.0938H1.21875C1.25 10.0625 1.3125 10 1.375 9.96875C1.46875 9.875 1.625 9.71875 1.78125 9.53125C1.9375 9.3125 2.125 9.03125 2.21875 8.75C1.4375 7.84375 1 6.71875 1 5.5C1 2.46875 3.90625 0 7.5 0C11.0625 0 14 2.46875 14 5.5C14 8.5625 11.0625 11 7.5 11ZM15 5.5H14.9688C14.9688 5.34375 14.9688 5.1875 14.9688 5.03125C18.3438 5.21875 20.9688 7.625 20.9688 10.5C20.9688 11.7188 20.5312 12.8438 19.75 13.75C19.8438 14.0312 20.0312 14.2812 20.1875 14.5C20.3438 14.7188 20.5 14.8438 20.5938 14.9688C20.6562 15 20.7188 15.0625 20.75 15.0625C20.75 15.0938 20.7812 15.0938 20.7812 15.0938C20.9688 15.25 21.0312 15.4688 20.9688 15.6562C20.9062 15.875 20.6875 16 20.5 16C19.8125 16 19.125 15.8438 18.5312 15.625C18.25 15.5 18 15.4062 17.75 15.2812C16.7812 15.75 15.6875 16 14.5 16C11.5 16 8.96875 14.3125 8.21875 11.9688C11.875 11.6562 15 9.03125 15 5.5Z" fill="#222627" />
                                        </svg>
                                        {{ $publishedYear }} · {{ $publishedDay }} {{ $publishedMonth }}
                                    </span>
                                </div>
                                <h5 class="blog-title"><a href="{{ $permalink }}">{{ $title }}</a></h5>
                                <p>{{ \Illuminate\Support\Str::limit(strip_tags($excerpt), 150) }}</p>
                            </div>
                            <div class="blog-img">
                                <a href="{{ $permalink }}"><img src="{{ $imageUrl }}" alt="{{ $title }}">
                                    <div class="blog-date-wrap">
                                        <div class="blog-year">
                                            <span>{{ $publishedYear }}</span>
                                        </div>
                                        <div class="blog-month">
                                            <h4>{{ $publishedDay }}</h4>
                                            <h6>{{ $publishedMonth }}</h6>
                                        </div>
                                    </div>
                                </a>
                                <a class='techin-default-btn blog-btn1' data-text='{{ __('index.blog.read_more') }}' href="{{ $permalink }}">
                                    <span class="button-wraper">{{ __('index.blog.read_more') }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <p class="text-center">{{ __('index.blog.empty') }}</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
    <!--  end blog -->

@endsection
