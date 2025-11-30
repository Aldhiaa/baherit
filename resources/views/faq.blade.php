@extends('layouts.app')

@section('content')
  <div class="breadcrumb-wrapper" style="background-image: url({{ asset('assets/images/blog/blog-thumb.png') }})">
    <div class="container">

      <div class="breadcrumb-content">
        <h1 class="breadcrumb-title">{{ __('faq.breadcrumb_title') }}</h1>
        <div class="breadcrumb-menu-wrapper">
          <div class="breadcrumb-menu-wrap">
            <div class="breadcrumb-menu">
              <ul>
                <li><a href='{{ route('home') }}'>{{ __('layout.menu.home') }}</a></li>
                <li><img src="{{ asset('assets/images/breadcrumb/line.svg') }}" alt="right-arrow"></li>
                <li aria-current="page">{{ __('faq.breadcrumb_title') }}</li>
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
          <h6>{{ __('faq.section_label') }}</h6>
          <span><img src="{{ asset('assets/images/v1/shape1.svg') }}" alt=""></span>
        </div>
        <h2>{{ __('faq.section_title') }}</h2>
      </div>
      <div class="techin-faq-wrap1">
        @forelse(($faqs ?? collect()) as $index => $faq)
        <div class="techin-faq-item {{ $index === 0 ? 'open' : '' }}">
          <div class="techin-faq-header headr-2">
            <h6>{{ optional($faq->translation)->question ?? 'FAQ Question' }}</h6>
            <div class="techin-active-icon">
              <img src="{{ asset('assets/images/v1/top-arrow.svg') }}" alt="">
            </div>
          </div>
          <div class="techin-faq-body light-bg1">
            <p>{{ optional($faq->translation)->answer ?? 'FAQ Answer' }}</p>
          </div>
        </div>
        @empty
          @for($i = 0; $i < 10; $i++)
            @if(Lang::has('faq.fallback.'.$i.'.question'))
              <div class="techin-faq-item {{ $i === 0 ? 'open' : '' }}">
                <div class="techin-faq-header headr-2">
                  <h6>{{ __('faq.fallback.'.$i.'.question') }}</h6>
                  <div class="techin-active-icon">
                    <img src="{{ asset('assets/images/v1/top-arrow.svg') }}" alt="">
                  </div>
                </div>
                <div class="techin-faq-body light-bg1">
                  <p>{{ __('faq.fallback.'.$i.'.answer') }}</p>
                </div>
              </div>
            @endif
          @endfor
        @endforelse
      </div>
    </div>
  </div>
  <!-- end faq section -->

  <div class="techin-cta-section" style="background-image: url({{ asset('assets/images/cta/cta-bg1.png') }})">
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
