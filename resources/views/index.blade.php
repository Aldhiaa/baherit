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
                                    
                                </div>
                                <div class="techin-iconbox-data">
                                </div>
                            </div>
                            <div class="techin-iconbox-wrap">
                                <div class="techin-iconbox-icon">
                                    
                                </div>
                                <div class="techin-iconbox-data">
                                </div>
                            </div>
                        </div>
                        <div class="techin-about-info-wraper">
                        
                            
                            </a>
                            <div class="techin-about-info-wrap">
                                <div class="techin-about-info-icon">
                                    <a href="tel:{{ $settings['phone'] ?? '009' }}">
                                        <img src="assets/images/v1/phone.svg" alt="">
                                    </a>
                                </div>
                                <div class="techin-about-info-text">
                                    <a href="tel:{{ $settings['phone'] ?? '009' }}">{{ __('index.about.call_us') }}</a>
                                    <a href="tel:{{ $settings['phone'] ?? '009' }}"><span>{{ $settings['phone'] ?? '782788810' }}</span></a>
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
                                    <img src="{{ asset('storage/' . $service->icon_path) }}" alt="">
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
                            $storagePath = storage_path('app/public/' . $relativePath);
                            $imageUrl = file_exists($storagePath) ? asset('storage/' . $relativePath) : asset('assets/images/v1/img5.png');
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
                                    <h5>{{ $settings['phone'] ?? '+967782788810' }}</h5>
                                </a>
                            </div>
                        </div>
                        <div class="techin-about-info-wrap techin-appointment-info">
                            <div class="techin-about-info-icon">
                                <a href="mailto:{{ $settings['email'] ?? 'info@baherit.com' }}"><img src="{{ asset('assets/images/v1/6.svg') }}" alt=""></a>
                            </div>
                            <div class="techin-about-info-text">
                                <a href="mailto:{{ $settings['email'] ?? 'info@baherit.com' }}">{{ __('index.contact.email_address') }}</a>
                                <a href="mailto:{{ $settings['email'] ?? 'info@baherit.com' }}">
                                    <h5>{{ $settings['email'] ?? 'info@baherit.com' }}</h5>
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
                                    <h5>{{ $settings['address'] ?? 'Yemen اليمن' }}</h5>
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
@endsection
