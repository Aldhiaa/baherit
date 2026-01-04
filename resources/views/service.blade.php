@extends('layouts.app')

@section('content')
  <div class="techin-header-search-section">
    <div class="container">
      <div class="techin-header-search-box">
        <input type="search" placeholder="{{ __('service.search_placeholder') }}">
        <button id="header-search" type="button"><i class="ri-search-line"></i></button>
        <p>{{ __('service.search_instruction') }}</p>
      </div>
    </div>
    <div class="techin-header-search-close">
      <i class="ri-close-line"></i>
    </div>
  </div>
  <div class="search-overlay"></div>
  <!--End landex-header-section -->

  <!-- strat sidebar menu -->
  @include('partial.sidebar')

  <div class="breadcrumb-wrapper" style="background-image: url({{ asset('assets/images/blog/blog-thumb.png') }})">
    <div class="container">

      <div class="breadcrumb-content">
        <h1 class="breadcrumb-title">{{ __('service.breadcrumb_title') }}</h1>
        <div class="breadcrumb-menu-wrapper">
          <div class="breadcrumb-menu-wrap">
            <div class="breadcrumb-menu">
              <ul>
                <li><a href='{{ route('home') }}'>{{ __('layout.menu.home') }}</a></li>
                <li><img src="{{ asset('assets/images/breadcrumb/line.svg') }}" alt="right-arrow"></li>
                <li aria-current="page">{{ __('service.breadcrumb_title') }}</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- End breadcrumb -->

  <div class="techin-section-padding2">
    <div class="container">
      <div class="techin-section-title center">
        <div class="techin-title-tag center2">
          <span><img src="{{ asset('assets/images/v1/shape1.svg') }}" alt=""></span>
          <h6>{{ __('service.section_label') }}</h6>
          <span><img src="{{ asset('assets/images/v1/shape1.svg') }}" alt=""></span>
        </div>
        <h2>{{ __('service.section_title') }}</h2>
      </div>
      </div>
      <div class="row">
        @forelse($services as $service)
          <div class="col-xl-4 col-md-6">
            <div class="techin-service-wrap2 wrap3">
              <div class="techin-service-thumb">
                @if($service->image_path)
                  <img src="{{ asset('storage/' . $service->image_path) }}" alt="{{ optional($service->translation)->name }}">
                @else
                  <img src="{{ asset('assets/images/v2/s1.png') }}" alt="{{ optional($service->translation)->name }}">
                @endif
              </div>
              <div class="techin-service-content2">
                <h5>{{ optional($service->translation)->name }}</h5>
                <p class="service-description-short">
                  {{ optional($service->translation)->short_description }}
                </p>
                @if(optional($service->translation)->long_description && strlen(optional($service->translation)->long_description) > 0)
                  <p class="service-description-full" style="display: none;">
                    {{ optional($service->translation)->long_description }}
                  </p>
                  <a class='techin-default-btn techin-service-btn read-more-btn' data-text='{{ __('service.read_more') }}' href='javascript:void(0);'>
                    <span class="button-wraper">{{ __('service.read_more') }}</span>
                  </a>
                @endif
              </div>
            </div>
          </div>
        @empty
          <div class="col-12">
            <p class="text-center">{{ __('service.no_services') }}</p>
          </div>
        @endforelse
      </div>
    </div>
  </div>
  <!-- end -->

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const readMoreBtns = document.querySelectorAll('.read-more-btn');
      
      readMoreBtns.forEach(btn => {
        btn.addEventListener('click', function(e) {
          e.preventDefault();
          const serviceContent = this.closest('.techin-service-content2');
          const shortDesc = serviceContent.querySelector('.service-description-short');
          const fullDesc = serviceContent.querySelector('.service-description-full');
          
          if (fullDesc.style.display === 'none') {
            shortDesc.style.display = 'none';
            fullDesc.style.display = 'block';
            this.querySelector('.button-wraper').textContent = '{{ __('service.read_less') }}';
            this.setAttribute('data-text', '{{ __('service.read_less') }}');
          } else {
            shortDesc.style.display = 'block';
            fullDesc.style.display = 'none';
            this.querySelector('.button-wraper').textContent = '{{ __('service.read_more') }}';
            this.setAttribute('data-text', '{{ __('service.read_more') }}');
          }
        });
      });
    });
  </script>


  <div class="techin-cta-section" style="background-image: url( {{ asset('assets/images/cta/cta-bg1.png') }} )">
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
              <a class="techin-default-btn pill techin-cta-btn" href="{{ route('contact') }}" data-text="{{ __('index.cta.button') }}">
                <span class="button-wraper">{{ __('index.cta.button') }}</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
