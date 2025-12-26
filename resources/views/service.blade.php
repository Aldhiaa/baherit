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
                @if($service->icon_path)
                  <img src="{{ asset('storage/' . $service->icon_path) }}" alt="{{ optional($service->translation)->name }}">
                @else
                  <img src="{{ asset('assets/images/v2/s1.png') }}" alt="{{ optional($service->translation)->name }}">
                @endif
                <div class="techin-service-icon2">
                  @if($service->icon_path)
                    <img src="{{ asset('storage/' . $service->icon_path) }}" alt="">
                  @else
                    <img src="{{ asset('assets/images/v2/icon4.svg') }}" alt="">
                  @endif
                </div>
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


  
  <div class="techin-section-padding2 light-bg1">
    <div class="container">
      <div class="techin-section-title center">
        <div class="techin-title-tag center2">
          <span><img src="{{ asset('assets/images/v1/shape1.svg') }}" alt=""></span>
          <h6>{{ __('faq.tagline') }}</h6>
          <span><img src="{{ asset('assets/images/v1/shape1.svg') }}" alt=""></span>
        </div>
        <h2>{{ __('faq.title') }}</h2>
      </div>
      <div class="techin-faq-wrap1">
        @forelse(($faqs ?? collect()) as $index => $faq)
          <div class="techin-faq-item {{ $index === 0 ? 'open' : '' }}">
            <div class="techin-faq-header">
              <h6>{{ optional($faq->translation)->question }}</h6>
              <div class="techin-active-icon">
                <img src="{{ asset('assets/images/v1/top-arrow.svg') }}" alt="">
              </div>
            </div>
            <div class="techin-faq-body">
              <p>{{ optional($faq->translation)->answer }}</p>
            </div>
          </div>
        @empty
          <div class="techin-faq-item open">
            <div class="techin-faq-header">
              <h6>{{ __('faq.empty') }}</h6>
              <div class="techin-active-icon">
                <img src="{{ asset('assets/images/v1/top-arrow.svg') }}" alt="">
              </div>
            </div>
            <div class="techin-faq-body">
              <p>{{ __('faq.empty') }}</p>
            </div>
          </div>
        @endforelse
      </div>
    </div>
  </div>
  <!-- end faq section -->
  <div class="techin-section-padding2">
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
            $title = $translation->title ?? (optional($fallbackTranslation)->title ?? '');
            $excerpt = $translation->excerpt ?? (optional($fallbackTranslation)->excerpt ?? '');
            $slug = $blog->slug;
            $publishedAt = $blog->published_at;
            $publishedYear = $publishedAt ? $publishedAt->format('Y') : now()->format('Y');
            $publishedDay = $publishedAt ? $publishedAt->format('d') : now()->format('d');
            $publishedMonth = $publishedAt ? $publishedAt->format('M') : now()->format('M');
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
          @endphp
          <div class="col-xl-4 col-md-6">
            <div class="blog-wrapper">
              <div class="blog-content">
                <div class="blog-meta">
                  <a href='{{ $permalink }}'>
                    <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M7 8C5.5625 8 4.25 7.25 3.53125 6C2.8125 4.78125 2.8125 3.25 3.53125 2C4.25 0.78125 5.5625 0 7 0C8.40625 0 9.71875 0.78125 10.4375 2C11.1562 3.25 11.1562 4.78125 10.4375 6C9.71875 7.25 8.40625 8 7 8ZM5.5625 9.5H8.40625C11.5 9.5 14 12 14 15.0938C14 15.5938 13.5625 16 13.0625 16H0.90625C0.40625 16 0 15.5938 0 15.0938C0 12 2.46875 9.5 5.5625 9.5Z" fill="#222627" />
                    </svg>By {{ $authorName }}
                  </a>
                  <a href='{{ $permalink }}'>
                    <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M7.5 11C6.28125 11 5.1875 10.75 4.21875 10.2812C3.96875 10.4062 3.71875 10.5 3.4375 10.625C2.84375 10.8438 2.15625 11 1.5 11C1.28125 11 1.09375 10.875 1 10.6562C0.9375 10.4688 1.03125 10.25 1.1875 10.125V10.0938H1.21875C1.25 10.0625 1.3125 10 1.375 9.96875C1.46875 9.875 1.625 9.71875 1.78125 9.53125C1.9375 9.3125 2.125 9.03125 2.21875 8.75C1.4375 7.84375 1 6.71875 1 5.5C1 2.46875 3.90625 0 7.5 0C11.0625 0 14 2.46875 14 5.5C14 8.5625 11.0625 11 7.5 11ZM15 5.5H14.9688C14.9688 5.34375 14.9688 5.1875 14.9688 5.03125C18.3438 5.21875 20.9688 7.625 20.9688 10.5C20.9688 11.7188 20.5312 12.8438 19.75 13.75C19.8438 14.0312 20.0312 14.2812 20.1875 14.5C20.3438 14.7188 20.5 14.8438 20.5938 14.9688C20.6562 15 20.7188 15.0625 20.75 15.0625C20.75 15.0938 20.7812 15.0938 20.7812 15.0938C20.9688 15.25 21.0312 15.4688 20.9688 15.6562C20.9062 15.875 20.6875 16 20.5 16C19.8125 16 19.125 15.8438 18.5312 15.625C18.25 15.5 18 15.4062 17.75 15.2812C16.7812 15.75 15.6875 16 14.5 16C11.5 16 8.96875 14.3125 8.21875 11.9688C11.875 11.6562 15 9.03125 15 5.5Z" fill="#222627" />
                    </svg>{{ $publishedDay }} {{ $publishedMonth }}, {{ $publishedYear }}
                  </a>
                </div>
                <h5 class="blog-title"><a href='{{ $permalink }}'>{{ $title }}</a></h5>
              </div>
              <div class="blog-img">
                <a href='{{ $permalink }}'><img src="{{ $imageUrl }}" alt="{{ $title }}">
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
                <a class='techin-default-btn blog-btn1' data-text='{{ __('index.blog.read_more') }}' href='{{ $permalink }}'>
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
