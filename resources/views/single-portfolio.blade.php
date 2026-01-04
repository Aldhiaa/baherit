@extends('layouts.app')
@section('content')
  <div class="breadcrumb-wrapper" style="background-image: url(assets/images/blog/blog-thumb.png)">
    <div class="container">

      <div class="breadcrumb-content">
        <h1 class="breadcrumb-title">{{ __('portfolio.breadcrumb_title_single') }}</h1>
        <div class="breadcrumb-menu-wrapper">
          <div class="breadcrumb-menu-wrap">
            <div class="breadcrumb-menu">
              <ul>
                <li><a href='{{ route('home') }}'>{{ __('layout.menu.home') }}</a></li>
                <li><img src="{{ asset('assets/images/breadcrumb/line.svg') }}" alt="right-arrow"></li>
                <li aria-current="page">{{ __('portfolio.breadcrumb_title_single') }}</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- End breadcrumb -->

  <div class="techin-section-padding6">
    <div class="container">
      <div class="techin-p-d-wrap">
        <div class="techin-p-d-thumb">
          @if($project->featured_image)
            <img src="{{ Storage::url($project->featured_image) }}" alt="{{ $project->translation->title }}">
          @else
            <img src="{{ asset('assets/images/portfolio/img4.png') }}" alt="{{ __('portfolio.default_image_alt') }}">
          @endif
          <div class="techin-p-d-content-box">
            <div class="techin-p-d-content">
              <h3>{{ $project->translation->title }}</h3>
              <p>{!! nl2br(e($project->translation->description)) !!}</p>
              
              <div class="techin-p-d-author-info-wraper">
                <div class="techin-p-d-author-info-wrap">
                  <div class="techin-p-d-author-info">
                    <h6>{{ __('portfolio.client') }}</h6>
                  </div>
                  <div class="techin-p-d-author-info">
                    <p>{{ $project->client }}</p>
                  </div>
                </div>
                
                <div class="techin-p-d-author-info-wrap">
                  <div class="techin-p-d-author-info">
                    <h6>{{ __('portfolio.completion_date') }}</h6>
                  </div>
                  <div class="techin-p-d-author-info">
                     <p>{{ optional($project->completion_date)->format('d-m-Y') }}</p>
                  </div>
                </div>

                @php
                    $deliverables = json_decode($project->translation->deliverables ?? '{}', true);
                @endphp

                <div class="techin-p-d-author-info-wrap">
                  <div class="techin-p-d-author-info">
                    <h6>{{ __('portfolio.website') }}</h6>
                  </div>
                  <div class="techin-p-d-author-info">
                    @if(!empty($deliverables['project_url']))
                    <a href="{{ $deliverables['project_url'] }}" target="_blank">
                      <p>{{ parse_url($deliverables['project_url'], PHP_URL_HOST) }}</p>
                    </a>
                    @else
                    <p>-</p>
                    @endif
                  </div>
                </div>
              </div>

              @if(!empty($deliverables['technologies']))
              <div class="mt-4">
                  <h5>{{ __('portfolio.technologies_used') }}</h5>
                  <p>{{ $deliverables['technologies'] }}</p>
              </div>
              @endif

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="techin-section-padding5 light-bg1">
    <div class="container">
      <div class="techin-section-title center">
        <div class="techin-title-tag center2">
          <span><img src="{{ asset('assets/images/v1/shape1.svg') }}" alt=""></span>
          <h6>{{ __('portfolio.related_news_tagline') }}</h6>
          <span><img src="{{ asset('assets/images/v1/shape1.svg') }}" alt=""></span>
        </div>
        <h2>{{ __('portfolio.related_news_title') }}</h2>
      </div>
   

  <div class="techin-cta-section mt-160" style="background-image: url(assets/images/cta/cta-bg1.png)">
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
