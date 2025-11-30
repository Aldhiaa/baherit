@extends('layouts.app')

@section('content')
    <div class="breadcrumb-wrapper" style="background-image: url({{ asset('assets/images/blog/blog-thumb.png') }})">
        <div class="container">

            <div class="breadcrumb-content">
                <h1 class="breadcrumb-title">{{ __('about.title') }}</h1>
                <div class="breadcrumb-menu-wrapper">
                    <div class="breadcrumb-menu-wrap">
                        <div class="breadcrumb-menu">
                            <ul>
                                <li><a href='{{ route('home') }}'>{{ __('layout.menu.home') }}</a></li>
                                <li><img src="{{ asset('assets/images/breadcrumb/line.svg') }}" alt="right-arrow"></li>
                                <li aria-current="page">{{ __('about.title') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End breadcrumb -->

    <section class="techin-section-padding12">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="techin-about-thumb thumb2 position-r">
                        <img src="{{ asset('assets/images/v1/about-thumb1.png') }}" alt="">
                        <div class="techin-about-thumb2 thumb2">
                            <img src="{{ asset('assets/images/v2/img1.png') }}" alt="">
                        </div>
                        <div class="techin-about-info-wrap wrap2">
                            <div class="techin-about-info-icon">
                                <a href="tel:{{ $settings['site_phone'] ?? '' }}"><img src="{{ asset('assets/images/v2/Icon1.svg') }}" alt=""></a>
                            </div>
                            <div class="techin-about-info-text text2">
                                <a href="tel:{{ $settings['site_phone'] ?? '' }}">{{ __('about.call_us') }}</a>
                                <a href="tel:{{ $settings['site_phone'] ?? '' }}"><span>{{ $settings['site_phone'] ?? '+(009) 1888 000 2222' }}</span></a>
                            </div>
                        </div>
                        <div class="techin-about-frame frame1">
                            <img src="{{ asset('assets/images/v2/Bg1.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="techin-about-content">
                        <div class="techin-title-tag">
                            <span><img src="{{ asset('assets/images/v1/shape1.svg') }}" alt=""></span>
                            <h6>{{ __('about.tagline') }}</h6>
                            <span><img src="{{ asset('assets/images/v1/shape1.svg') }}" alt=""></span>
                        </div>
                        <h2>{{ optional(optional($about)->translation)->title ?? __('about.title') }}
                        </h2>
                        {!! optional(optional($about)->translation)->content ??
                            '<p>' . __('about.description') . '</p>' !!}
                        <div class="techin-iconbox-wraper">
                            <div class="techin-iconbox-wrap">
                                <div class="techin-iconbox-icon">
                                    <img src="{{ asset('assets/images/v1/icon1.svg') }}" alt="">
                                </div>
                                <div class="techin-iconbox-data">
                                    <h5>{{ __('about.service_1') }}</h5>
                                </div>
                            </div>
                            <div class="techin-iconbox-wrap">
                                <div class="techin-iconbox-icon">
                                    <img src="{{ asset('assets/images/v1/icon2.svg') }}" alt="">
                                </div>
                                <div class="techin-iconbox-data">
                                    <h5>{{ __('about.service_2') }}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="techin-about-info-wraper">
                            <a class='techin-default-btn' data-text='{{ __('about.more_info') }}' href='{{ route('about') }}'>
                                <span class="button-wraper">{{ __('about.more_info') }}</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  end about -->

    <div class="techin-section-padding2 light-bg1">
        <div class="container">
            <div class="techin-section-title">
                <div class="row">
                    <div class="col-xl-6 col-lg-8">
                        <div class="techin-title-tag">
                            <span><img src="{{ asset('assets/images/v1/shape1.svg') }}" alt=""></span>
                            <h6>{{ __('services.tagline') }}</h6>
                            <span><img src="{{ asset('assets/images/v1/shape1.svg') }}" alt=""></span>
                        </div>
                        <h2>{{ __('services.title') }}</h2>
                    </div>
                    <div class="col-xl-6 col-lg-4 d-flex justify-content-end align-items-center">
                    </div>
                </div>
            </div>
            <div class="techin-three-column2">
                @forelse ($services ?? collect() as $service)
                    <div class="techin-service-wrap2">
                        <div class="techin-service-thumb">
                            @if ($service->image_path)
                                <img src="{{ asset($service->image_path) }}" alt="">
                            @else
                                <img src="{{ asset('assets/images/v2/s1.png') }}" alt="">
                            @endif
                            <div class="techin-service-icon2">
                                @if ($service->icon_path)
                                    <img src="{{ asset($service->icon_path) }}" alt="">
                                @else
                                    <img src="{{ asset('assets/images/v2/icon4.svg') }}" alt="">
                                @endif
                            </div>
                        </div>
                        <div class="techin-service-content2">
                            <h5>{{ optional($service->translation)->name }}</h5>
                            <p>{{ optional($service->translation)->short_description }}</p>
                            <a class='techin-default-btn techin-service-btn' data-text='{{ __('services.read_more') }}' href='#'>
                                <span class="button-wraper">{{ __('services.read_more') }}</span>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p>{{ __('services.empty') }}</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
    <!-- end service slider section -->

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
            <div class="row">
                @if (($workingProcesses ?? collect())->count() > 0)
                    @php
                        $leftProcesses = $workingProcesses->take(2);
                        $rightProcesses = $workingProcesses->slice(2, 2);
                    @endphp
                    <div class="col-xl-4 col-md-6">
                        @foreach ($leftProcesses as $process)
                            <div class="techin-iconbox-wrap2-item1">
                                <div class="techin-iconbox-title-wrap2">
                                    <div class="techin-iconbox-title-icon">
                                        @if ($process->icon_path)
                                            <img src="{{ asset($process->icon_path) }}" alt="">
                                        @else
                                            <img src="{{ asset('assets/images/v1/icon-s1.svg') }}" alt="">
                                        @endif
                                    </div>
                                    <div class="techin-iconbox-title-content">
                                        <h5>{{ optional($process->translation)->title }}</h5>
                                    </div>
                                </div>
                                <div class="techin-iconbox-title-text">
                                    <p>{{ optional($process->translation)->description }}</p>
                                </div>
                                <div class="techin-iconbox-number">
                                    @if ($process->number_tag_path)
                                        <img src="{{ asset($process->number_tag_path) }}" alt="">
                                    @else
                                        <img src="{{ asset('assets/images/v1/tag2.svg') }}" alt="">
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-xl-4 col-md-6 order-xl-2">
                        @foreach ($rightProcesses as $process)
                            <div class="techin-iconbox-wrap2-item1">
                                <div class="techin-iconbox-title-wrap2">
                                    <div class="techin-iconbox-title-icon">
                                        @if ($process->icon_path)
                                            <img src="{{ asset($process->icon_path) }}" alt="">
                                        @else
                                            <img src="{{ asset('assets/images/v1/icon-s2.svg') }}" alt="">
                                        @endif
                                    </div>
                                    <div class="techin-iconbox-title-content">
                                        <h5>{{ optional($process->translation)->title }}</h5>
                                    </div>
                                </div>
                                <div class="techin-iconbox-title-text">
                                    <p>{{ optional($process->translation)->description }}</p>
                                </div>
                                <div class="techin-iconbox-number">
                                    @if ($process->number_tag_path)
                                        <img src="{{ asset($process->number_tag_path) }}" alt="">
                                    @else
                                        <img src="{{ asset('assets/images/v1/tag3.svg') }}" alt="">
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="techin-iconbox-title-thumb">
                            <img data-aos="zoom-out" data-aos-duration="700"
                                src="{{ asset('assets/images/v1/img1.png') }}" alt="">
                        </div>
                    </div>
                @else
                    <div class="col-12 text-center">
                        <p>{{ __('index.working_process.empty') }}</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!-- end section -->


    <!-- end brand -->
    <div class="techin-section-padding2 section"
        style="background-image: url({{ asset('assets/images/v2/counter.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="techin-counter-content">
                        <div class="techin-title-tag tag2">
                            <span><img src="{{ asset('assets/images/v1/shape2.svg') }}" alt=""></span>
                            <h6>{{ __('index.counters.label') }}</h6>
                            <span><img src="{{ asset('assets/images/v1/shape2.svg') }}" alt=""></span>
                        </div>
                        <h2>{{ __('index.counters.title') }}</h2>
                        <div class="techin-counter-author">
                            <div class="techin-counter-author-thumb">
                                <img src="{{ asset('assets/images/v2/c1.png') }}" alt="">
                            </div>
                            <div class="techin-counter-author-text">
                                <h6>{{ __('index.counters.clients_count') }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div id="techin-counter"></div>
                    <div class="row">
                        @forelse(($counters ?? collect()) as $counter)
                            <div class="col-lg-3 col-md-6">
                                <div class="techin-counter-wrap wrap2">
                                    <div class="techin-counter-icon">
                                        @if ($counter->icon_path)
                                            <img src="{{ asset($counter->icon_path) }}" alt=""
                                                style="width: 60px; height: 60px;">
                                        @else
                                            <img src="{{ asset('assets/images/v1/icon-s1.svg') }}" alt=""
                                                style="width: 60px; height: 60px;">
                                        @endif
                                    </div>
                                    <div class="techin-counter-data">
                                        <div class="techin-counter-number"><span
                                                data-percentage="{{ $counter->target_value }}"
                                                class="techin-counter"></span></div>
                                        <p>{{ optional($counter->translation)->label }}</p>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12 text-center">
                                <p>{{ __('index.counters.empty') }}</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end counter -->

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
                            <h6>{{ __('faq.tagline') }}</h6>
                            <span><img src="{{ asset('assets/images/v1/shape1.svg') }}" alt=""></span>
                        </div>
                        <h2 class="faq-title">{{ __('faq.title') }}</h2>
                        <div class="techin-faq-wrap1">
                            @forelse ($faqs ?? collect() as $index => $faq)
                                <div class="techin-faq-item {{ $index === 0 ? 'open' : '' }}">
                                    <div class="techin-faq-header">
                                        <h6>{{ optional($faq->translation)->question }}</h6>
                                        <div class="techin-active-icon">
                                            <img src="{{ asset('assets/images/v1/top-arrow.svg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="techin-faq-body body2">
                                        <p>{{ optional($faq->translation)->answer }}</p>
                                    </div>
                                </div>
                            @empty
                                <div class="col-12">
                                    <p>{{ __('faq.empty') }}</p>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end faq -->


    <!-- end section -->
    <section class="techin-section-padding6">
        <div class="container">
            <div class="techin-section-title">
                <div class="row">
                    <div class="col-xl-6 col-lg-8">
                        <div class="techin-title-tag">
                            <span><img src="{{ asset('assets/images/v1/shape1.svg') }}" alt=""></span>
                            <h6>{{ __('index.testimonials.label') }}</h6>
                            <span><img src="{{ asset('assets/images/v1/shape1.svg') }}" alt=""></span>
                        </div>
                        <h2>{{ __('index.testimonials.title') }}</h2>
                    </div>
                </div>
            </div>
            @php
                $testimonialGrid = ($testimonials ?? collect())->take(3);
            @endphp
            <div class="techin-three-column">
                @forelse($testimonialGrid as $testimonial)
                    @php
                        $translation = optional($testimonial->translation);
                        $fallbackTranslation = $testimonial->translations->firstWhere(
                            'locale',
                            config('app.fallback_locale'),
                        );
                        $authorName =
                            $translation->author_name ??
                            (optional($fallbackTranslation)->author_name ??
                                __('index.testimonials.fallback.author_name'));
                        $authorTitle =
                            $translation->author_title ??
                            (optional($fallbackTranslation)->author_title ??
                                __('index.testimonials.fallback.author_title'));
                        $quote =
                            $translation->quote ??
                            (optional($fallbackTranslation)->quote ?? __('index.testimonials.fallback.quote'));
                        $avatarPath = $testimonial->avatar_path;
                        if (
                            $avatarPath &&
                            (str_starts_with($avatarPath, 'http://') || str_starts_with($avatarPath, 'https://'))
                        ) {
                            $avatarUrl = $avatarPath;
                        } elseif ($avatarPath) {
                            $relativeAvatarPath = ltrim($avatarPath, '/');
                            $publicAvatarPath = public_path($relativeAvatarPath);
                            $avatarUrl = file_exists($publicAvatarPath)
                                ? asset($relativeAvatarPath)
                                : asset('storage/' . $relativeAvatarPath);
                        } else {
                            $avatarUrl = asset('assets/images/v1/img8.png');
                        }
                        $rating = (int) ($testimonial->rating ?? 5);
                        $rating = $rating < 1 ? 1 : ($rating > 5 ? 5 : $rating);
                        $stars = str_repeat('★', $rating) . str_repeat('☆', 5 - $rating);
                    @endphp
                    <div class="techin-t-wrap2">
                        <div class="techin-t-thumb">
                            <img src="{{ $avatarUrl }}" alt="{{ $authorName }}">
                        </div>
                        <div class="techin-pricing-shape shape-show">
                            <img src="{{ asset('assets/images/v1/shape-show.png') }}" alt="">
                        </div>
                        <div class="techin-pricing-shape shape-hide">
                            <img src="{{ asset('assets/images/v1/shape-hide.png') }}" alt="">
                        </div>
                        <div class="techin-t-ratting" aria-label="Rating {{ $rating }} / 5">
                            <span>{{ $stars }}</span>
                        </div>
                        <div class="techin-t-text">
                            <p>“{{ $quote }}”</p>
                        </div>
                        <div class="techin-t-author-wrap">
                            <div class="techin-t-author-content">
                                <h6>{{ $authorName }}</h6>
                                @if ($authorTitle)
                                    <p>{{ $authorTitle }}</p>
                                @endif
                            </div>
                            <div class="techin-t-author-icon">
                                <img src="{{ asset('assets/images/v2/quote.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="techin-t-wrap2">
                        <div class="techin-t-thumb">
                            <img src="{{ asset('assets/images/v1/img8.png') }}"
                                alt="{{ __('index.testimonials.fallback.author_name') }}">
                        </div>
                        <div class="techin-t-ratting" aria-label="Rating 5 / 5">
                            <span>{{ str_repeat('★', 5) }}</span>
                        </div>
                        <div class="techin-t-text">
                            <p>“{{ __('index.testimonials.fallback.quote') }}”</p>
                        </div>
                        <div class="techin-t-author-wrap">
                            <div class="techin-t-author-content">
                                <h6>{{ __('index.testimonials.fallback.author_name') }}</h6>
                                <p>{{ __('index.testimonials.fallback.author_title') }}</p>
                            </div>
                            <div class="techin-t-author-icon">
                                <img src="{{ asset('assets/images/v2/quote.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
    <!-- end -->

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
                        $title = $translation->title ?? (optional($fallbackTranslation)->title ?? '');
                        $excerpt = $translation->excerpt ?? (optional($fallbackTranslation)->excerpt ?? '');
                        $slug = $blog->slug;
                        $readTime = $blog->getReadTime();
                        $publishedAt = $blog->published_at;
                        $publishedYear = $publishedAt ? $publishedAt->format('Y') : now()->format('Y');
                        $publishedDay = $publishedAt ? $publishedAt->format('d') : now()->format('d');
                        $publishedMonth = $publishedAt
                            ? $publishedAt->format(app()->isLocale('ar') ? 'M' : 'M')
                            : now()->format(app()->isLocale('ar') ? 'M' : 'M');
                        $authorName = $blog->author_name ?? __('index.blog.default_author');
                        $imagePath = $blog->featured_image;
                        if (
                            $imagePath &&
                            (str_starts_with($imagePath, 'http://') || str_starts_with($imagePath, 'https://'))
                        ) {
                            $imageUrl = $imagePath;
                        } elseif ($imagePath) {
                            $relativeImagePath = ltrim($imagePath, '/');
                            $publicBlogPath = public_path($relativeImagePath);
                            $imageUrl = file_exists($publicBlogPath)
                                ? asset($relativeImagePath)
                                : asset('storage/' . $relativeImagePath);
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
                                        <svg width="14" height="16" viewBox="0 0 14 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7 8C5.5625 8 4.25 7.25 3.53125 6C2.8125 4.78125 2.8125 3.25 3.53125 2C4.25 0.78125 5.5625 0 7 0C8.40625 0 9.71875 0.78125 10.4375 2C11.1562 3.25 11.1562 4.78125 10.4375 6C9.71875 7.25 8.40625 8 7 8ZM5.5625 9.5H8.40625C11.5 9.5 14 12 14 15.0938C14 15.5938 13.5625 16 13.0625 16H0.90625C0.40625 16 0 15.5938 0 15.0938C0 12 2.46875 9.5 5.5625 9.5Z"
                                                fill="#222627" />
                                        </svg>
                                        {{ $authorName }} · {{ $readTimeLabel }}
                                    </span>
                                    <span>
                                        <svg width="22" height="16" viewBox="0 0 22 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.5 11C6.28125 11 5.1875 10.75 4.21875 10.2812C3.96875 10.4062 3.71875 10.5 3.4375 10.625C2.84375 10.8438 2.15625 11 1.5 11C1.28125 11 1.09375 10.875 1 10.6562C0.9375 10.4688 1.03125 10.25 1.1875 10.125V10.0938H1.21875C1.25 10.0625 1.3125 10 1.375 9.96875C1.46875 9.875 1.625 9.71875 1.78125 9.53125C1.9375 9.3125 2.125 9.03125 2.21875 8.75C1.4375 7.84375 1 6.71875 1 5.5C1 2.46875 3.90625 0 7.5 0C11.0625 0 14 2.46875 14 5.5C14 8.5625 11.0625 11 7.5 11ZM15 5.5H14.9688C14.9688 5.34375 14.9688 5.1875 14.9688 5.03125C18.3438 5.21875 20.9688 7.625 20.9688 10.5C20.9688 11.7188 20.5312 12.8438 19.75 13.75C19.8438 14.0312 20.0312 14.2812 20.1875 14.5C20.3438 14.7188 20.5 14.8438 20.5938 14.9688C20.6562 15 20.7188 15.0625 20.75 15.0625C20.75 15.0938 20.7812 15.0938 20.7812 15.0938C20.9688 15.25 21.0312 15.4688 20.9688 15.6562C20.9062 15.875 20.6875 16 20.5 16C19.8125 16 19.125 15.8438 18.5312 15.625C18.25 15.5 18 15.4062 17.75 15.2812C16.7812 15.75 15.6875 16 14.5 16C11.5 16 8.96875 14.3125 8.21875 11.9688C11.875 11.6562 15 9.03125 15 5.5Z"
                                                fill="#222627" />
                                        </svg>
                                        {{ $publishedYear }} · {{ $publishedDay }} {{ $publishedMonth }}
                                    </span>
                                </div>
                                <h5 class="blog-title"><a href="{{ $permalink }}">{{ $title }}</a></h5>
                                <p>{{ \Illuminate\Support\Str::limit(strip_tags($excerpt), 150) }}</p>
                            </div>
                            <div class="blog-img">
                                <a href="{{ $permalink }}"><img src="{{ $imageUrl }}"
                                        alt="{{ $title }}">
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
                                <a class='techin-default-btn blog-btn1' data-text='{{ __('index.blog.read_more') }}'
                                    href="{{ $permalink }}">
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
