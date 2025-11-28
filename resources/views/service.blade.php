@extends('layouts.app')

@section('content')
  <div class="techin-header-search-section">
    <div class="container">
      <div class="techin-header-search-box">
        <input type="search" placeholder="Search here...">
        <button id="header-search" type="button"><i class="ri-search-line"></i></button>
        <p>Type above and press Enter to search. Press Close to cancel.</p>
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
        <h1 class="breadcrumb-title">Services</h1>
        <div class="breadcrumb-menu-wrapper">
          <div class="breadcrumb-menu-wrap">
            <div class="breadcrumb-menu">
              <ul>
                <li><a href='{{ LaravelLocalization::localizeUrl('/index') }}'>Home</a></li>
                <li><img src="{{ asset('assets/images/breadcrumb/line.svg') }}" alt="right-arrow"></li>
                <li aria-current="page">Services</li>
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
          <h6>{{ __('service.working_process') }}</h6>
          <span><img src="{{ asset('assets/images/v1/shape1.svg') }}" alt=""></span>
        </div>
        <h2>{{ __('service.our_unique_services') }}</h2>
      </div>
      </div>
      <div class="row">
        @forelse($services as $service)
          <div class="col-xl-4 col-md-6">
            <div class="techin-service-wrap2 wrap3">
              <div class="techin-service-thumb">
                @if($service->icon_path)
                  <img src="{{ asset('storage/' . $service->icon_path) }}" alt="{{ $service->translation?->name ?? '' }}">
                @else
                  <img src="{{ asset('assets/images/v2/s1.png') }}" alt="{{ $service->translation?->name ?? '' }}">
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
                <h5>{{ $service->translation?->name ?? '' }}</h5>
                <p class="service-description-short">
                  {{ $service->translation?->short_description ?? '' }}
                </p>
                @if($service->translation?->long_description && strlen($service->translation->long_description) > 0)
                  <p class="service-description-full" style="display: none;">
                    {{ $service->translation->long_description }}
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
          } else {
            shortDesc.style.display = 'block';
            fullDesc.style.display = 'none';
            this.querySelector('.button-wraper').textContent = '{{ __('service.read_more') }}';
          }
        });
      });
    });
  </script>


  <section class="techin-section-padding2 light-bg1">
    <div class="container">
      <div class="techin-section-title">
        <div class="row">
          <div class="col-xl-6 col-lg-8">
            <div class="techin-title-tag">
              <span><img src="assets/images/v1/shape1.svg" alt=""></span>
              <h6>Testimonials</h6>
              <span><img src="assets/images/v1/shape1.svg" alt=""></span>
            </div>
            <h2>Here Is Some Nice Client’s Feedback & Review</h2>
          </div>
          <div class="col-xl-6 col-lg-4 d-flex justify-content-end align-items-center">
          </div>
        </div>
      </div>
      <div class="techin-three-column">
        @forelse(($testimonials ?? collect()) as $testimonial)
          <div class="techin-t-slider-item">
            <div class="techin-t-slider-author-wrap">
              <div class="techin-t-slider-author-thumb">
                @if($testimonial->avatar_path)
                  <img src="{{ asset('storage/' . $testimonial->avatar_path) }}" alt="{{ $testimonial->translation?->author_name ?? '' }}">
                @else
                  <img src="{{ asset('assets/images/v3/Img2.png') }}" alt="{{ $testimonial->translation?->author_name ?? '' }}">
                @endif
              </div>
              <div class="techin-t-slider-author-data">
                <h6>{{ $testimonial->translation?->author_name ?? '' }}</h6>
                <p>{{ $testimonial->translation?->author_title ?? '' }}</p>
                <div class="techin-t-ratting2">
                  <svg width="116" height="19" viewBox="0 0 116 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.2844 0.882812L13.5695 5.55859L18.5969 6.29688C19.0187 6.36719 19.3703 6.64844 19.5109 7.07031C19.6516 7.45703 19.5461 7.91406 19.2297 8.19531L15.5734 11.8164L16.4523 16.9492C16.5227 17.3711 16.3469 17.793 15.9953 18.0391C15.6437 18.3203 15.1867 18.3203 14.8 18.1445L10.3 15.7188L5.76484 18.1445C5.41328 18.3203 4.95625 18.3203 4.60469 18.0391C4.25312 17.793 4.07734 17.3711 4.14766 16.9492L4.99141 11.8164L1.33516 8.19531C1.05391 7.91406 0.948437 7.45703 1.05391 7.07031C1.19453 6.64844 1.54609 6.36719 1.96797 6.29688L7.03047 5.55859L9.28047 0.882812C9.45625 0.496094 9.84297 0.25 10.3 0.25C10.7219 0.25 11.1086 0.496094 11.2844 0.882812ZM35.1344 0.882812L37.4195 5.55859L42.4469 6.29688C42.8687 6.36719 43.2203 6.64844 43.3609 7.07031C43.5016 7.45703 43.3961 7.91406 43.0797 8.19531L39.4234 11.8164L40.3023 16.9492C40.3727 17.3711 40.1969 17.793 39.8453 18.0391C39.4937 18.3203 39.0367 18.3203 38.65 18.1445L34.15 15.7188L29.6148 18.1445C29.2633 18.3203 28.8062 18.3203 28.4547 18.0391C28.1031 17.793 27.9273 17.3711 27.9977 16.9492L28.8414 11.8164L25.1852 8.19531C24.9039 7.91406 24.7984 7.45703 24.9039 7.07031C25.0445 6.64844 25.3961 6.36719 25.818 6.29688L30.8805 5.55859L33.1305 0.882812C33.3062 0.496094 33.693 0.25 34.15 0.25C34.5719 0.25 34.9586 0.496094 35.1344 0.882812ZM58.9844 0.882812L61.2695 5.55859L66.2969 6.29688C66.7188 6.36719 67.0703 6.64844 67.2109 7.07031C67.3516 7.45703 67.2461 7.91406 66.9297 8.19531L63.2734 11.8164L64.1523 16.9492C64.2227 17.3711 64.0469 17.793 63.6953 18.0391C63.3438 18.3203 62.8867 18.3203 62.5 18.1445L58 15.7188L53.4648 18.1445C53.1133 18.3203 52.6562 18.3203 52.3047 18.0391C51.9531 17.793 51.7773 17.3711 51.8477 16.9492L52.6914 11.8164L49.0352 8.19531C48.7539 7.91406 48.6484 7.45703 48.7539 7.07031C48.8945 6.64844 49.2461 6.36719 49.668 6.29688L54.7305 5.55859L56.9805 0.882812C57.1562 0.496094 57.543 0.25 58 0.25C58.4219 0.25 58.8086 0.496094 58.9844 0.882812ZM82.8344 0.882812L85.1195 5.55859L90.1469 6.29688C90.5688 6.36719 90.9203 6.64844 91.0609 7.07031C91.2016 7.45703 91.0961 7.91406 90.7797 8.19531L87.1234 11.8164L88.0023 16.9492C88.0727 17.3711 87.8969 17.793 87.5453 18.0391C87.1938 18.3203 86.7367 18.3203 86.35 18.1445L81.85 15.7188L77.3148 18.1445C76.9633 18.3203 76.5063 18.3203 76.1547 18.0391C75.8031 17.793 75.6273 17.3711 75.6977 16.9492L76.5414 11.8164L72.8852 8.19531C72.6039 7.91406 72.4984 7.45703 72.6039 7.07031C72.7445 6.64844 73.0961 6.36719 73.518 6.29688L78.5805 5.55859L80.8305 0.882812C81.0063 0.496094 81.393 0.25 81.85 0.25C82.2719 0.25 82.6586 0.496094 82.8344 0.882812ZM106.684 0.882812L108.97 5.55859L113.997 6.29688C114.419 6.36719 114.77 6.64844 114.911 7.07031C115.052 7.45703 114.946 7.91406 114.63 8.19531L110.973 11.8164L111.852 16.9492C111.923 17.3711 111.747 17.793 111.395 18.0391C111.044 18.3203 110.587 18.3203 110.2 18.1445L105.7 15.7188L101.165 18.1445C100.813 18.3203 100.356 18.3203 100.005 18.0391C99.6531 17.793 99.4773 17.3711 99.5477 16.9492L100.391 11.8164L96.7352 8.19531C96.4539 7.91406 96.3484 7.45703 96.4539 7.07031C96.5945 6.64844 96.9461 6.36719 97.368 6.29688L102.43 5.55859L104.68 0.882812C104.856 0.496094 105.243 0.25 105.7 0.25C106.122 0.25 106.509 0.496094 106.684 0.882812Z" fill="#2BC8EB" />
                  </svg>
                </div>
              </div>
            </div>
            <p class="text">"{{ $testimonial->translation?->quote ?? '' }}"</p>
            <div class="techin-t-shape">
              <img src="{{ asset('assets/images/v3/icon1.svg') }}" alt="">
            </div>
          </div>
        @empty
          <div class="techin-t-slider-item">
            <div class="techin-t-slider-author-wrap">
              <div class="techin-t-slider-author-thumb">
                <img src="{{ asset('assets/images/v3/Img2.png') }}" alt="">
              </div>
              <div class="techin-t-slider-author-data">
                <h6>No Testimonials Available</h6>
                <p>Check back soon</p>
              </div>
            </div>
            <p class="text">"Please add testimonials from the admin panel."</p>
            <div class="techin-t-shape">
              <img src="{{ asset('assets/images/v3/icon1.svg') }}" alt="">
            </div>
          </div>
        @endforelse
       
      </div>
    </div>
  </section>
  <!-- end testimonial -->

 
  
  

  <div class="techin-section-padding2 light-bg1">
    <div class="container">
      <div class="techin-section-title center">
        <div class="techin-title-tag center2">
          <span><img src="assets/images/v1/shape1.svg" alt=""></span>
          <h6>faqS</h6>
          <span><img src="assets/images/v1/shape1.svg" alt=""></span>
        </div>
        <h2>Frequently Asked Any Questions</h2>
      </div>
      <div class="techin-faq-wrap1">
        @forelse(($faqs ?? collect()) as $index => $faq)
          <div class="techin-faq-item {{ $index === 0 ? 'open' : '' }}">
            <div class="techin-faq-header">
              <h6>{{ $faq->translation?->question ?? '' }}</h6>
              <div class="techin-active-icon">
                <img src="{{ asset('assets/images/v1/top-arrow.svg') }}" alt="">
              </div>
            </div>
            <div class="techin-faq-body">
              <p>{{ $faq->translation?->answer ?? '' }}</p>
            </div>
          </div>
        @empty
          <div class="techin-faq-item open">
            <div class="techin-faq-header">
              <h6>No FAQs available</h6>
              <div class="techin-active-icon">
                <img src="{{ asset('assets/images/v1/top-arrow.svg') }}" alt="">
              </div>
            </div>
            <div class="techin-faq-body">
              <p>Please check back later for frequently asked questions.</p>
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
          <span><img src="assets/images/v1/shape1.svg" alt=""></span>
          <h6>News & Blog</h6>
          <span><img src="assets/images/v1/shape1.svg" alt=""></span>
        </div>
        <h2>Our Latest News And Updates</h2>
      </div>
      <div class="row">
        @forelse(($blogs ?? collect()) as $blog)
          @php
            $title = $blog->translation?->title ?? '';
            $excerpt = $blog->translation?->excerpt ?? '';
            $slug = $blog->slug;
            $publishedAt = $blog->published_at;
            $publishedYear = $publishedAt ? $publishedAt->format('Y') : now()->format('Y');
            $publishedDay = $publishedAt ? $publishedAt->format('d') : now()->format('d');
            $publishedMonth = $publishedAt ? $publishedAt->format('M') : now()->format('M');
            $authorName = $blog->author_name ?? 'Admin';
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
                <a class='techin-default-btn blog-btn1' data-text='Read More' href='{{ $permalink }}'>
                  <span class="button-wraper">Read More</span>
                </a>
              </div>
            </div>
          </div>
        @empty
          <div class="col-12">
            <p class="text-center">No blog posts available at the moment.</p>
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
                <h6>Knock Us To Know 24/7</h6>
                <img src="{{ asset('assets/images/shape/cta-shape1.svg') }}" alt="">
              </div>
              <div class="techin-cta-content-bottom">
                <h2>Need A Consultation?</h2>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 d-flex align-items-center justify-content-end">
            <div class="techin-title-btn">
              <a class="techin-default-btn pill techin-cta-btn" href="contact-us.html" data-text="Get A Quote">
                <span class="button-wraper">Get A Quote</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
