@extends('layouts.app')

@section('content')
  <div class="breadcrumb-wrapper" style="background-image: url(assets/images/blog/blog-thumb.png)">
    <div class="container">

      <div class="breadcrumb-content">
        <h1 class="breadcrumb-title">{{ __('faq.breadcrumb_title') }}</h1>
        <div class="breadcrumb-menu-wrapper">
          <div class="breadcrumb-menu-wrap">
            <div class="breadcrumb-menu">
              <ul>
                <li><a href='{{ LaravelLocalization::localizeUrl('/') }}'>{{ __('common.breadcrumb.home') }}</a></li>
                <li><img src="assets/images/breadcrumb/line.svg" alt="right-arrow"></li>
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
          <span><img src="assets/images/v1/shape1.svg" alt=""></span>
          <h6>{{ __('faq.section_label') }}</h6>
          <span><img src="assets/images/v1/shape1.svg" alt=""></span>
        </div>
        <h2>{{ __('faq.section_title') }}</h2>
      </div>
      <div class="techin-faq-wrap1">
        @forelse(($faqs ?? collect()) as $faq)
        <div class="techin-faq-item">
          <div class="techin-faq-header headr-2">
            <h6>{{ optional($faq->translation)->question }}</h6>
            <div class="techin-active-icon">
              <img src="assets/images/v1/top-arrow.svg" alt="">
            </div>
          </div>
          <div class="techin-faq-body body3 light-bg1">
            {!! optional($faq->translation)->answer !!}
          </div>
        </div>
        @empty
        <div class="techin-faq-item open">
          <div class="techin-faq-header headr-2">
            <h6>{{ __('faq.fallback.0.question') }}</h6>
            <div class="techin-active-icon">
              <img src="assets/images/v1/top-arrow.svg" alt="">
            </div>
          </div>
          <div class="techin-faq-body body3 light-bg1">
            <p>{{ __('faq.fallback.0.answer') }}</p>
          </div>
        </div>
        <div class="techin-faq-item">
          <div class="techin-faq-header headr-2">
            <h6>{{ __('faq.fallback.1.question') }}</h6>
            <div class="techin-active-icon">
              <img src="assets/images/v1/top-arrow.svg" alt="">
            </div>
          </div>
          <div class="techin-faq-body body3 light-bg1">
            <p>{{ __('faq.fallback.0.answer') }}</p>
          </div>
        </div>
        <div class="techin-faq-item">
          <div class="techin-faq-header headr-2">
            <h6>{{ __('faq.fallback.2.question') }}</h6>
            <div class="techin-active-icon">
              <img src="assets/images/v1/top-arrow.svg" alt="">
            </div>
          </div>
          <div class="techin-faq-body body3 light-bg1">
            <p>{{ __('faq.fallback.0.answer') }}</p>
          </div>
        </div>
        <div class="techin-faq-item">
          <div class="techin-faq-header headr-2">
            <h6>{{ __('faq.fallback.3.question') }}</h6>
            <div class="techin-active-icon">
              <img src="assets/images/v1/top-arrow.svg" alt="">
            </div>
          </div>
          <div class="techin-faq-body body3 light-bg1">
            <p>{{ __('faq.fallback.0.answer') }}</p>
          </div>
        </div>
        <div class="techin-faq-item">
          <div class="techin-faq-header headr-2">
            <h6>{{ __('faq.fallback.4.question') }}</h6>
            <div class="techin-active-icon">
              <img src="assets/images/v1/top-arrow.svg" alt="">
            </div>
          </div>
          <div class="techin-faq-body body3 light-bg1">
            <p>{{ __('faq.fallback.0.answer') }}</p>
          </div>
        </div>
        <div class="techin-faq-item">
          <div class="techin-faq-header headr-2">
            <h6>{{ __('faq.fallback.5.question') }}</h6>
            <div class="techin-active-icon">
              <img src="assets/images/v1/top-arrow.svg" alt="">
            </div>
          </div>
          <div class="techin-faq-body body3 light-bg1">
            <p>{{ __('faq.fallback.0.answer') }}</p>
          </div>
        </div>
        <div class="techin-faq-item">
          <div class="techin-faq-header headr-2">
            <h6>{{ __('faq.fallback.6.question') }}</h6>
            <div class="techin-active-icon">
              <img src="assets/images/v1/top-arrow.svg" alt="">
            </div>
          </div>
          <div class="techin-faq-body body3 light-bg1">
            <p>{{ __('faq.fallback.0.answer') }}</p>
          </div>
        </div>
        <div class="techin-faq-item">
          <div class="techin-faq-header headr-2">
            <h6>{{ __('faq.fallback.7.question') }}</h6>
            <div class="techin-active-icon">
              <img src="assets/images/v1/top-arrow.svg" alt="">
            </div>
          </div>
          <div class="techin-faq-body body3 light-bg1">
            <p>{{ __('faq.fallback.0.answer') }}</p>
          </div>
        </div>
        <div class="techin-faq-item">
          <div class="techin-faq-header headr-2">
            <h6>{{ __('faq.fallback.8.question') }}</h6>
            <div class="techin-active-icon">
              <img src="assets/images/v1/top-arrow.svg" alt="">
            </div>
          </div>
          <div class="techin-faq-body body3 light-bg1">
            <p>{{ __('faq.fallback.0.answer') }}</p>
          </div>
        </div>
        <div class="techin-faq-item">
          <div class="techin-faq-header headr-2">
            <h6>{{ __('faq.fallback.9.question') }}</h6>
            <div class="techin-active-icon">
              <img src="assets/images/v1/top-arrow.svg" alt="">
            </div>
          </div>
          <div class="techin-faq-body body3 light-bg1">
            <p>{{ __('faq.fallback.0.answer') }}</p>
          </div>
        </div>
        @endforelse
      </div>
      <div class="techin-pagination center">
        <a class='pagi-btn' href='faq.html'>
          <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.601562 7.64062L6.85156 1.39062C7.32031 0.882812 8.14062 0.882812 8.60938 1.39062C9.11719 1.85938 9.11719 2.67969 8.60938 3.14844L4.50781 7.25H16.5C17.1641 7.25 17.75 7.83594 17.75 8.5C17.75 9.20312 17.1641 9.75 16.5 9.75H4.50781L8.60938 13.8906C9.11719 14.3594 9.11719 15.1797 8.60938 15.6484C8.14062 16.1562 7.32031 16.1562 6.85156 15.6484L0.601562 9.39844C0.09375 8.92969 0.09375 8.10938 0.601562 7.64062Z" fill="#2F2BEB" />
          </svg>
        </a>
        <ul>
          <li><a class="current" href="#">1</a></li>
          <li><a href='faq.html'>2</a></li>
          <li><a href='faq.html'>3</a></li>
          <li><a href='faq.html'>4</a></li>
        </ul>
        <a class='pagi-btn' href='faq.html'>
          <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.3984 7.64062L11.1484 1.39062C10.6797 0.882812 9.85938 0.882812 9.39062 1.39062C8.88281 1.85938 8.88281 2.67969 9.39062 3.14844L13.4922 7.25H1.5C0.835938 7.25 0.25 7.83594 0.25 8.5C0.25 9.20312 0.835938 9.75 1.5 9.75H13.4922L9.39062 13.8906C8.88281 14.3594 8.88281 15.1797 9.39062 15.6484C9.85938 16.1562 10.6797 16.1562 11.1484 15.6484L17.3984 9.39844C17.9062 8.92969 17.9062 8.10938 17.3984 7.64062Z" fill="#2F2BEB" />
          </svg>
        </a>
      </div>
    </div>
  </div>
  <!-- end faq section -->

  <div class="techin-cta-section" style="background-image: url(assets/images/cta/cta-bg1.png)">
    <div class="container">
      <div class="techin-cta-wrap">
        <div class="row">
          <div class="col-xl-8 col-lg-8">
            <div class="techin-cta-content">
              <div class="techin-cta-content-top">
                <img src="assets/images/shape/cta-shape1.svg" alt="">
                <h6>{{ __('common.cta.tagline') }}</h6>
                <img src="assets/images/shape/cta-shape1.svg" alt="">
              </div>
              <div class="techin-cta-content-bottom">
                <h2>{{ __('common.cta.title') }}</h2>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 d-flex align-items-center justify-content-end">
            <div class="techin-title-btn">
              <a class="techin-default-btn pill techin-cta-btn" href="{{ LaravelLocalization::localizeUrl('/contact-us') }}" data-text="{{ __('common.cta.button') }}">
                <span class="button-wraper">{{ __('common.cta.button') }}</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
