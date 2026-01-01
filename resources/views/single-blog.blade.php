@extends('layouts.app')

@section('content')
@php
    $translation = $blog->translation ?? $blog->translations->firstWhere('locale', app()->getLocale()) ?? $blog->translations->first();
    $title = $translation->title ?? 'Blog Post';
    $content = $translation->content ?? '';
    $excerpt = $translation->excerpt ?? '';
    $publishedDate = $blog->published_at ?? $blog->created_at;
    $authorName = $blog->author_name ?? __('index.blog.default_author');
    $readTime = $blog->getReadTime();

    // Handle image path
    $imagePath = $blog->featured_image;
    if ($imagePath && (str_starts_with($imagePath, 'http://') || str_starts_with($imagePath, 'https://'))) {
        $imageUrl = $imagePath;
    } elseif ($imagePath) {
        $relativeImagePath = ltrim($imagePath, '/');
        $publicBlogPath = public_path($relativeImagePath);
        $imageUrl = file_exists($publicBlogPath)
            ? asset($relativeImagePath)
            : asset('storage/' . $relativeImagePath);
    } else {
        $imageUrl = asset('assets/images/blog/img12.png');
    }
@endphp

  <div class="breadcrumb-wrapper" style="background-image: url({{ asset('assets/images/blog/blog-thumb.png') }})">
    <div class="container">
      <div class="breadcrumb-content">
        <h1 class="breadcrumb-title">{{ __('blog.details_title') }}</h1>
        <div class="breadcrumb-menu-wrapper">
          <div class="breadcrumb-menu-wrap">
            <div class="breadcrumb-menu">
              <ul>
                <li><a href='{{ route('home') }}'>{{ __('layout.menu.home') }}</a></li>
                <li><img src="{{ asset('assets/images/breadcrumb/line.svg') }}" alt="right-arrow"></li>
                <li><a href='{{ route('blog.index') }}'>{{ __('blog.title') }}</a></li>
                <li><img src="{{ asset('assets/images/breadcrumb/line.svg') }}" alt="right-arrow"></li>
                <li aria-current="page">{{ Str::limit($title, 30) }}</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End breadcrumb -->

  <section class="techin-section-padding blog-details">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="blog-left">
            <div class="techin-blog">
              <div class="techin-blog-img">
                <img src="{{ $imageUrl }}" alt="{{ $title }}">
                <div class="blog-meta-box">
                  <div class="blog-meta single-meta">
                    <a href='#'>
                      <svg width="18" height="21" viewBox="0 0 18 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.25 0.5C5.91406 0.5 6.5 1.08594 6.5 1.75V3H11.5V1.75C11.5 1.08594 12.0469 0.5 12.75 0.5C13.4141 0.5 14 1.08594 14 1.75V3H15.875C16.8906 3 17.75 3.85938 17.75 4.875V6.75H0.25V4.875C0.25 3.85938 1.07031 3 2.125 3H4V1.75C4 1.08594 4.54688 0.5 5.25 0.5ZM0.25 8H17.75V18.625C17.75 19.6797 16.8906 20.5 15.875 20.5H2.125C1.07031 20.5 0.25 19.6797 0.25 18.625V8ZM2.75 11.125V12.375C2.75 12.7266 3.02344 13 3.375 13H4.625C4.9375 13 5.25 12.7266 5.25 12.375V11.125C5.25 10.8125 4.9375 10.5 4.625 10.5H3.375C3.02344 10.5 2.75 10.8125 2.75 11.125ZM7.75 11.125V12.375C7.75 12.7266 8.02344 13 8.375 13H9.625C9.9375 13 10.25 12.7266 10.25 12.375V11.125C10.25 10.8125 9.9375 10.5 9.625 10.5H8.375C8.02344 10.5 7.75 10.8125 7.75 11.125ZM13.375 10.5C13.0234 10.5 12.75 10.8125 12.75 11.125V12.375C12.75 12.7266 13.0234 13 13.375 13H14.625C14.9375 13 15.25 12.7266 15.25 12.375V11.125C15.25 10.8125 14.9375 10.5 14.625 10.5H13.375ZM2.75 16.125V17.375C2.75 17.7266 3.02344 18 3.375 18H4.625C4.9375 18 5.25 17.7266 5.25 17.375V16.125C5.25 15.8125 4.9375 15.5 4.625 15.5H3.375C3.02344 15.5 2.75 15.8125 2.75 16.125ZM8.375 15.5C8.02344 15.5 7.75 15.8125 7.75 16.125V17.375C7.75 17.7266 8.02344 18 8.375 18H9.625C9.9375 18 10.25 17.7266 10.25 17.375V16.125C10.25 15.8125 9.9375 15.5 9.625 15.5H8.375ZM12.75 16.125V17.375C12.75 17.7266 13.0234 18 13.375 18H14.625C14.9375 18 15.25 17.7266 15.25 17.375V16.125C15.25 15.8125 14.9375 15.5 14.625 15.5H13.375C13.0234 15.5 12.75 15.8125 12.75 16.125Z" fill="#222627" />
                      </svg> {{ $publishedDate->format('F d, Y') }}
                    </a>
                    <a href='#'>
                      <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 8C5.5625 8 4.25 7.25 3.53125 6C2.8125 4.78125 2.8125 3.25 3.53125 2C4.25 0.78125 5.5625 0 7 0C8.40625 0 9.71875 0.78125 10.4375 2C11.1562 3.25 11.1562 4.78125 10.4375 6C9.71875 7.25 8.40625 8 7 8ZM5.5625 9.5H8.40625C11.5 9.5 14 12 14 15.0938C14 15.5938 13.5625 16 13.0625 16H0.90625C0.40625 16 0 15.5938 0 15.0938C0 12 2.46875 9.5 5.5625 9.5Z" fill="#222627" />
                      </svg>{{ $authorName }}
                    </a>
                    <a href='#'>
                      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 0C12.4183 0 16 3.58172 16 8C16 12.4183 12.4183 16 8 16C3.58172 16 0 12.4183 0 8C0 3.58172 3.58172 0 8 0ZM8.5 4C8.5 3.72386 8.27614 3.5 8 3.5C7.72386 3.5 7.5 3.72386 7.5 4V8C7.5 8.27614 7.72386 8.5 8 8.5H11C11.2761 8.5 11.5 8.27614 11.5 8C11.5 7.72386 11.2761 7.5 11 7.5H8.5V4Z" fill="#222627"/>
                      </svg>{{ trans_choice('blog.read_time', $readTime, ['count' => $readTime]) }}
                    </a>
                  </div>
                </div>
              </div>
              <div class="techin-blog-content">
                <h2 class="blog-title1">{{ $title }}</h2>
                
                @if($excerpt)
                <p class="blog-excerpt lead">{{ $excerpt }}</p>
                @endif
                
                <div class="blog-text">
                    {!! $content !!}
                </div>
                
                <div class="tag-share mt-4">
                  <div class="tag-share-social">
                    <h6>{{ __('blog.share') }}:</h6>
                    <ul>
                      <li>
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" target="_blank" rel="noopener">
                          <svg width="10" height="18" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.26296 8.50593H0.396489C0.0949817 8.50593 0 8.39549 0 8.10944V5.82991C0 5.52841 0.110444 5.43342 0.396489 5.43342H2.26407V3.77679C2.24163 3.03369 2.41736 2.298 2.77321 1.64525C3.14708 0.993513 3.74293 0.498015 4.45193 0.249264C4.9178 0.082563 5.40947 -0.000442427 5.90424 0.00408169H7.75305C8.017 0.00408169 8.13076 0.114524 8.13076 0.381794V2.53211C8.13076 2.79606 8.02032 2.90982 7.75305 2.90982C7.24391 2.90982 6.73477 2.90982 6.22563 2.92859C6.12054 2.91318 6.0133 2.92255 5.91247 2.95595C5.81164 2.98935 5.72002 3.04586 5.64491 3.12097C5.5698 3.19607 5.5133 3.2877 5.47989 3.38853C5.44649 3.48936 5.43713 3.5966 5.45254 3.70169C5.43376 4.26715 5.45254 4.81495 5.45254 5.39919H7.6404C7.94191 5.39919 8.05566 5.50963 8.05566 5.81445V8.09619C8.05566 8.3977 7.96179 8.49268 7.6404 8.49268H5.45033V14.641C5.45033 14.9613 5.35645 15.075 5.01629 15.075H2.65945C2.37672 15.075 2.26296 14.9646 2.26296 14.6786V8.50593Z" fill="#222627" />
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($title) }}" target="_blank" rel="noopener">
                          <svg width="18" height="18" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.3682 2.43269C16.321 2.35584 16.2533 2.29365 16.1728 2.25308C16.0922 2.21251 16.002 2.19516 15.9121 2.20297L15.0993 2.27366L15.8724 0.706481C15.9177 0.615492 15.9333 0.512585 15.9171 0.412242C15.9008 0.311899 15.8535 0.21917 15.7819 0.147111C15.7102 0.0750528 15.6177 0.0272907 15.5174 0.0105456C15.4172 -0.00619945 15.3142 0.00891781 15.223 0.0537672L13.1654 1.061C12.5325 0.732103 11.8136 0.605916 11.1065 0.699567C10.3994 0.793219 9.73819 1.10217 9.21268 1.5845C8.75801 2.01587 8.40544 2.54336 8.18073 3.12844C7.95602 3.71352 7.86485 4.34141 7.91388 4.96624C6.73758 4.84885 5.60936 4.4389 4.63209 3.77375C3.65482 3.10861 2.85958 2.20943 2.31887 1.15819C2.27994 1.08622 2.22348 1.02525 2.1547 0.980922C2.08593 0.936597 2.00708 0.910352 1.92546 0.904624C1.84384 0.898897 1.7621 0.913871 1.68781 0.948158C1.61352 0.982444 1.54909 1.03493 1.50049 1.10076C1.14417 1.60692 0.935627 2.20221 0.89818 2.82009C0.860733 3.43796 0.995855 4.05408 1.28844 4.59957C1.1283 4.55871 0.957117 4.50459 0.769365 4.44164C0.689897 4.41499 0.604887 4.40935 0.522594 4.42526C0.440301 4.44117 0.363523 4.4781 0.299719 4.53246C0.235915 4.58681 0.187256 4.65675 0.158468 4.73547C0.12968 4.81418 0.121742 4.89901 0.135426 4.9817C0.236779 5.64852 0.501612 6.27989 0.9063 6.81947C1.31099 7.35905 1.84295 7.79008 2.45472 8.07409C2.28787 8.13219 2.11743 8.17941 1.94447 8.21545C1.85985 8.2329 1.78142 8.2726 1.71725 8.33045C1.65308 8.3883 1.60549 8.46221 1.57939 8.54457C1.55328 8.62693 1.54961 8.71475 1.56874 8.799C1.58788 8.88326 1.62913 8.96088 1.68825 9.02389C2.57515 9.88095 3.68487 10.4718 4.89107 10.7291C3.74596 11.5247 2.34147 11.8559 0.961535 11.6557C0.865938 11.6523 0.77146 11.6772 0.68994 11.7272C0.60842 11.7773 0.543484 11.8503 0.503271 11.9371C0.463058 12.0239 0.449355 12.1206 0.463881 12.2152C0.478406 12.3097 0.520514 12.3979 0.584927 12.4686C1.28955 13.2417 3.85512 14.1252 6.54881 14.186C6.65557 14.186 6.76602 14.186 6.88014 14.186C9.15409 14.2959 11.3796 13.5046 13.0737 11.9837C14.376 10.7305 15.259 9.10534 15.6018 7.33081C15.7798 6.32263 15.7854 5.29155 15.6183 4.2815C15.6128 4.24174 15.6062 4.19977 15.6018 4.16333L16.3627 2.93742C16.4098 2.86186 16.4352 2.77483 16.4361 2.68583C16.4371 2.59682 16.4136 2.50926 16.3682 2.43269Z" fill="#222627" />
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(request()->url()) }}&title={{ urlencode($title) }}" target="_blank" rel="noopener">
                          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" fill="#222627"/>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>

                @if($authorName)
                <div class="blog-d-admin-author mt-4" style="background-color: #f8f9fa; padding: 20px; border-radius: 8px;">
                  <div class="blog-d-admin-content">
                    <h5>{{ __('blog.written_by') }}</h5>
                    <p class="text">{{ $authorName }}</p>
                  </div>
                </div>
                @endif
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <aside class="sidebar-area pl-25">
            <div class="widget widget_search">
              <h4 class="widget_title">{{ __('blog.search_placeholder') }}</h4>
              <img src="{{ asset('assets/images/blog/line1.svg') }}" alt="">
              <form class="search-form input-form" action="{{ route('blog.index') }}" method="GET">
                <input type="search" name="search" placeholder="{{ __('blog.search_placeholder') }}">
                <button type="submit">{{ __('blog.search_btn') }}</button>
              </form>
            </div>
            <div class="widget">
              <h4 class="widget_title">{{ __('blog.recent_posts') }}</h4>
              <img src="{{ asset('assets/images/blog/line1.svg') }}" alt="">
              <div class="recent-post-wrap">
                @forelse($recentPosts as $recentPost)
                  @php
                    $recentTranslation = $recentPost->translation ?? $recentPost->translations->firstWhere('locale', app()->getLocale()) ?? $recentPost->translations->first();
                    $recentTitle = $recentTranslation->title ?? 'Recent Blog Post';
                    $recentDate = $recentPost->published_at ?? $recentPost->created_at;

                    // Handle recent post image path
                    $recentImagePath = $recentPost->featured_image;
                    if ($recentImagePath && (str_starts_with($recentImagePath, 'http://') || str_starts_with($recentImagePath, 'https://'))) {
                        $recentImageUrl = $recentImagePath;
                    } elseif ($recentImagePath) {
                        $recentRelativeImagePath = ltrim($recentImagePath, '/');
                        $recentPublicBlogPath = public_path($recentRelativeImagePath);
                        $recentImageUrl = file_exists($recentPublicBlogPath)
                            ? asset($recentRelativeImagePath)
                            : asset('storage/' . $recentRelativeImagePath);
                    } else {
                        $recentImageUrl = asset('assets/images/blog/img' . (($loop->index % 3) + 9) . '.png');
                    }

                    $recentSlug = $recentPost->slug;
                    $recentPermalink = Route::has('blog.show')
                        ? route('blog.show', $recentSlug)
                        : url('/blog/' . $recentSlug);
                  @endphp
                  <div class="recent-post">
                    <div class="media-img">
                      <a href='{{ $recentPermalink }}'><img src="{{ $recentImageUrl }}" alt="{{ $recentTitle }}"></a>
                    </div>
                    <div class="media-body">
                      <div class="recent-post-meta">
                        <a href='{{ $recentPermalink }}'>
                          <img src="{{ asset('assets/images/blog/6.svg') }}" alt="">
                          {{ $recentDate->format('M d, Y') }}</a>
                        <div class="post-title"><a class='text-inherit' href='{{ $recentPermalink }}'>{{ Str::limit($recentTitle, 50) }}</a></div>
                      </div>
                    </div>
                  </div>
                @empty
                  <div class="text-center py-3">
                    <p class="text-muted">{{ __('blog.empty') }}</p>
                  </div>
                @endforelse
              </div>
            </div>
            <div class="widget widget_categories widget-categories">
              <h4 class="widget_title">{{ __('blog.categories') }}</h4>
              <img src="{{ asset('assets/images/blog/line1.svg') }}" alt="">
              <ul>
                @forelse($categories as $category)
                  <li>
                    <a href='#'>
                      {{ $category['name'] }}
                      <div class="techin-blog-meta-btn">
                        <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M17.3594 9.39844L11.1094 15.6484C10.6406 16.1562 9.82031 16.1562 9.35156 15.6484C8.84375 15.1797 8.84375 14.3594 9.35156 13.8906L13.4531 9.75L1.5 9.75C0.796875 9.75 0.25 9.20312 0.25 8.5C0.25 7.83594 0.796875 7.25 1.5 7.25L13.4531 7.25L9.35156 3.14844C8.84375 2.67969 8.84375 1.85937 9.35156 1.39062C9.82031 0.882812 10.6406 0.882812 11.1094 1.39062L17.3594 7.64062C17.8672 8.10937 17.8672 8.92969 17.3594 9.39844Z" fill="#fff" />
                        </svg>
                      </div>
                    </a>
                  </li>
                @empty
                  <li>
                    <a href='#'>
                      {{ __('index.services.fallback.it_management.title') }}
                      <div class="techin-blog-meta-btn">
                        <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M17.3594 9.39844L11.1094 15.6484C10.6406 16.1562 9.82031 16.1562 9.35156 15.6484C8.84375 15.1797 8.84375 14.3594 9.35156 13.8906L13.4531 9.75L1.5 9.75C0.796875 9.75 0.25 9.20312 0.25 8.5C0.25 7.83594 0.796875 7.25 1.5 7.25L13.4531 7.25L9.35156 3.14844C8.84375 2.67969 8.84375 1.85937 9.35156 1.39062C9.82031 0.882812 10.6406 0.882812 11.1094 1.39062L17.3594 7.64062C17.8672 8.10937 17.8672 8.92969 17.3594 9.39844Z" fill="#fff" />
                        </svg>
                      </div>
                    </a>
                  </li>
                @endforelse
              </ul>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </section>
  <!-- end section -->

  <div class="techin-cta-section mt-160" style="background-image: url({{ asset('assets/images/cta/cta-bg1.png') }})">
    <div class="container">
      <div class="techin-cta-wrap">
        <div class="row">
          <div class="col-xl-8 col-lg-8">
            <div class="techin-cta-content">
              <div class="techin-cta-content-top">
                <img src="{{ asset('assets/images/shape/cta-shape1.svg') }}" alt="">
                <h6>{{ __('index.cta.subtitle') }}</h6>
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
