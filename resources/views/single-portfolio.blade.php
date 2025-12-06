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
      <div class="row">
        @foreach($recentBlogs as $blog)
        <div class="col-xl-4 col-md-6">
          <div class="blog-wrapper">
            <div class="blog-content white-bg">
              <div class="blog-meta">
                <a href='{{ route('blog.show', $blog->slug) }}'>
                  <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 8C5.5625 8 4.25 7.25 3.53125 6C2.8125 4.78125 2.8125 3.25 3.53125 2C4.25 0.78125 5.5625 0 7 0C8.40625 0 9.71875 0.78125 10.4375 2C11.1562 3.25 11.1562 4.78125 10.4375 6C9.71875 7.25 8.40625 8 7 8ZM5.5625 9.5H8.40625C11.5 9.5 14 12 14 15.0938C14 15.5938 13.5625 16 13.0625 16H0.90625C0.40625 16 0 15.5938 0 15.0938C0 12 2.46875 9.5 5.5625 9.5Z" fill="#222627" />
                  </svg>{{ $blog->author ?? 'Admin' }}
                </a>
              </div>
              <h5 class="blog-title"><a href='{{ route('blog.show', $blog->slug) }}'>{{ $blog->translation->title }}</a></h5>
            </div>
            <div class="blog-img">
              <a href='{{ route('blog.show', $blog->slug) }}'>
                @if($blog->image)
                  <img src="{{ Storage::url($blog->image) }}" alt="{{ $blog->translation->title }}">
                @else
                  <img src="assets/images/blog/img1.png" alt="Blog Image">
                @endif
                <div class="blog-date-wrap">
                  <div class="blog-year">
                    <span>{{ $blog->created_at->format('Y') }}</span>
                  </div>
                  <div class="blog-month">
                    <h4>{{ $blog->created_at->format('d') }}</h4>
                    <h6>{{ $blog->created_at->format('M') }}</h6>
                  </div>
                </div>
              </a>
            </div>
            <a class='techin-default-btn blog-btn1' data-text='{{ __('portfolio.read_more') }}' href='{{ route('blog.show', $blog->slug) }}'>
              <span class="button-wraper">{{ __('portfolio.read_more') }}</span>
            </a>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <!--  end blog -->

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
