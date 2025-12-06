@extends('layouts.app')
@section('content')
  <div class="breadcrumb-wrapper" style="background-image: url({{ asset('assets/images/blog/blog-thumb.png') }})">
    <div class="container">

      <div class="breadcrumb-content">
        <h1 class="breadcrumb-title">{{ __('service.service_details_breadcrumb') }}</h1>
        <div class="breadcrumb-menu-wrapper">
          <div class="breadcrumb-menu-wrap">
            <div class="breadcrumb-menu">
              <ul>
                <li><a href='{{ route('home') }}'>{{ __('layout.menu.home') }}</a></li>
                <li><img src="{{ asset('assets/images/breadcrumb/line.svg') }}" alt="right-arrow"></li>
                <li aria-current="page">{{ __('service.service_details_breadcrumb') }}</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- End breadcrumb -->

  <section class="techin-section-padding6">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="techin-service-d-wrap">
            <div class="techin-service-d-thumb">
                @if($service->icon_path) <!-- Using icon_path as featured image for now based on migration, or add featured_image column if needed. schema says icon_path, maybe we use that or add image? Using placeholder if null -->
                    <img src="{{ Storage::url($service->icon_path) }}" alt="{{ $service->translation->name }}">
                @else
                  <img src="{{ asset('assets/images/service/img1.png') }}" alt="{{ __('service.default_image_alt') }}">
                @endif
            </div>
            <div class="techin-service-d-title">
              <h3>{{ $service->translation->name }}</h3>
              <img src="{{ asset('assets/images/service/Line.svg') }}" alt="">
            </div>
            <div class="techin-service-d-data">
                {!! $service->translation->long_description !!}
            </div>

            @php
                $details = json_decode($service->translation->details ?? '{}', true);
                $features = $details['features'] ?? [];
                $benefits = $details['benefits'] ?? []; // Or "Why Choose Us" items
            @endphp

            @if(!empty($features))
            <div class="techin-service-d-sub-title">
              <h4>{{ __('service.key_features') }}</h4>
            </div>
            <div class="techin-service-d-list-wraper">
              <div class="techin-service-d-list-wrap">
                  @foreach($features as $feature)
                    <div class="techin-service-d-list-item">
                    <a href='#'>
                        <img src="{{ asset('assets/images/service/icon1.svg') }}" alt="">
                        {{ $feature }}
                    </a>
                    </div>
                  @endforeach
              </div>
            </div>
            @endif
            
            <div class="row">
              <div class="col-lg-6">
                <div class="techin-service-d-thumb2">
                  <a href='#'><img src="{{ asset('assets/images/service/img2.png') }}" alt=""></a>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="techin-service-d-thumb2 pb-0">
                  <a href='#'><img src="{{ asset('assets/images/service/img3.png') }}" alt=""></a>
                </div>
              </div>
            </div>

            @if(!empty($benefits))
            <div class="techin-service-d-sub-title">
              <h4>{{ __('service.why_choose_us', ['service' => $service->translation->name]) }}</h4>
              <!-- <p>Description regarding benefits if available</p> -->
            </div>
            <div class="techin-service-d-list-wraper pb-0">
               <div class="techin-service-d-list-wrap">
                  @foreach($benefits as $benefit)
                    <div class="techin-service-d-list-item">
                    <a href='#'>
                        <img src="{{ asset('assets/images/service/icon1.svg') }}" alt="">
                        {{ $benefit }}
                    </a>
                    </div>
                  @endforeach
              </div>
            </div>
            @endif

          </div>
        </div>
        <div class="col-lg-4">
          <aside class="sidebar-area pl-25">
            <div class="widget widget2 widget_categories widget-categories">
              <h4 class="widget_title">{{ __('service.our_services_sidebar') }}</h4>
              <img src="{{ asset('assets/images/blog/line1.svg') }}" alt="">
              <ul>
                @foreach($services as $sidebarService)
                <li>
                  <a href='{{ route('service.show', $sidebarService->slug) }}'>
                    {{ $sidebarService->translation->name }}
                    <div class="techin-blog-meta-btn">
                      <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.3594 9.39844L11.1094 15.6484C10.6406 16.1562 9.82031 16.1562 9.35156 15.6484C8.84375 15.1797 8.84375 14.3594 9.35156 13.8906L13.4531 9.75L1.5 9.75C0.796875 9.75 0.25 9.20312 0.25 8.5C0.25 7.83594 0.796875 7.25 1.5 7.25L13.4531 7.25L9.35156 3.14844C8.84375 2.67969 8.84375 1.85937 9.35156 1.39062C9.82031 0.882812 10.6406 0.882812 11.1094 1.39062L17.3594 7.64062C17.8672 8.10937 17.8672 8.92969 17.3594 9.39844Z" fill="#fff" />
                      </svg>
                    </div>
                  </a>
                </li>
                @endforeach
              </ul>
            </div>
            <div class="widget widget_tag_cloud blog-update">
              <h4>{{ __('service.get_updates') }}</h4>
              <img src="{{ asset('assets/images/blog/line2.svg') }}" alt="">
              <div class="update-content">
                <p>{{ __('service.subscribe_text') }}</p>
              </div>
              <form class="input-form">
                <input type="email" placeholder="{{ __('service.email_placeholder') }}">
                <button type="submit">{{ __('service.search_btn') }}</button>
              </form>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </section>



  <div class="techin-cta-section" style="background-image: url({{ asset('assets/images/cta/cta-bg1.png') }})">
    <div class="container">
      <div class="techin-cta-wrap">
        <div class="row">
          <div class="col-xl-8 col-lg-8">
            <div class="techin-cta-content">
              <div class="techin-cta-content-top">
                <img src="{{ asset('assets/images/shape/cta-shape1.svg') }}" alt="">
                <h6>{{ __('portfolio.cta_subtitle') }}</h6>
                <img src="{{ asset('assets/images/shape/cta-shape1.svg') }}" alt="">
              </div>
              <div class="techin-cta-content-bottom">
                <h2>{{ __('portfolio.cta_title') }}</h2>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 d-flex align-items-center justify-content-end">
            <div class="techin-title-btn">
              <a class="techin-default-btn pill techin-cta-btn" href="{{ route('contact') }}" data-text="{{ __('portfolio.cta_button') }}">
                <span class="button-wraper">{{ __('portfolio.cta_button') }}</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
