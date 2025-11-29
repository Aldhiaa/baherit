@extends('layouts.app')

@section('content')
  <div class="breadcrumb-wrapper" style="background-image: url({{ asset('assets/images/blog/blog-thumb.png') }})">
    <div class="container">
      <div class="breadcrumb-content">
        <h1 class="breadcrumb-title">Latest News</h1>
        <div class="breadcrumb-menu-wrapper">
          <div class="breadcrumb-menu-wrap">
            <div class="breadcrumb-menu">
              <ul>
                <li><a href='{{ route('home') }}'>Home</a></li>
                <li><img src="{{ asset('assets/images/breadcrumb/line.svg') }}" alt="right-arrow"></li>
                <li aria-current="page">Latest News</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End breadcrumb -->

  <section class="techin-section-padding2">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="techin-blog-header">
            <a class="techin-showing-result" href="#">Showing {{ $blogs->firstItem() ?? 0 }} - {{ $blogs->lastItem() ?? 0 }} of {{ $blogs->total() ?? 0 }} Result</a>
            <div class="teching-slect-wrapper">
              <select>
                <option data-display="Short By Latest">Nothing</option>
                <option value="1">Some option</option>
                <option value="2">Another option</option>
                <option value="4">Potato</option>
              </select>
            </div>
          </div>
          <div class="row">
            @forelse($blogs as $blog)
              @php
                $translation = $blog->translate();
                $publishedDate = $blog->published_at ?? $blog->created_at;
              @endphp
              <div class="col-lg-6">
                <div class="blog-wrapper">
                  <div class="blog-content">
                    <div class="blog-meta">
                      <a href='#'>
                        <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M7 8C5.5625 8 4.25 7.25 3.53125 6C2.8125 4.78125 2.8125 3.25 3.53125 2C4.25 0.78125 5.5625 0 7 0C8.40625 0 9.71875 0.78125 10.4375 2C11.1562 3.25 11.1562 4.78125 10.4375 6C9.71875 7.25 8.40625 8 7 8ZM5.5625 9.5H8.40625C11.5 9.5 14 12 14 15.0938C14 15.5938 13.5625 16 13.0625 16H0.90625C0.40625 16 0 15.5938 0 15.0938C0 12 2.46875 9.5 5.5625 9.5Z" fill="#222627" />
                        </svg>By {{ $blog->author_name ?? __('index.blog.default_author') }}
                      </a>
                      <a href='#'>
                        <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M7.5 11C6.28125 11 5.1875 10.75 4.21875 10.2812C3.96875 10.4062 3.71875 10.5 3.4375 10.625C2.84375 10.8438 2.15625 11 1.5 11C1.28125 11 1.09375 10.875 1 10.6562C0.9375 10.4688 1.03125 10.25 1.1875 10.125V10.0938H1.21875C1.25 10.0625 1.3125 10 1.375 9.96875C1.46875 9.875 1.625 9.71875 1.78125 9.53125C1.9375 9.3125 2.125 9.03125 2.21875 8.75C1.4375 7.84375 1 6.71875 1 5.5C1 2.46875 3.90625 0 7.5 0C11.0625 0 14 2.46875 14 5.5C14 8.5625 11.0625 11 7.5 11ZM15 5.5H14.9688C14.9688 5.34375 14.9688 5.1875 14.9688 5.03125C18.3438 5.21875 20.9688 7.625 20.9688 10.5C20.9688 11.7188 20.5312 12.8438 19.75 13.75C19.8438 14.0312 20.0312 14.2812 20.1875 14.5C20.3438 14.7188 20.5 14.8438 20.5938 14.9688C20.6562 15 20.7188 15.0625 20.75 15.0625C20.75 15.0938 20.7812 15.0938 20.7812 15.0938C20.9688 15.25 21.0312 15.4688 20.9688 15.6562C20.9062 15.875 20.6875 16 20.5 16C19.8125 16 19.125 15.8438 18.5312 15.625C18.25 15.5 18 15.4062 17.75 15.2812C16.7812 15.75 15.6875 16 14.5 16C11.5 16 8.96875 14.3125 8.21875 11.9688C11.875 11.6562 15 9.03125 15 5.5Z" fill="#222627" />
                        </svg>{{ $blog->getReadTime() }} {{ __('index.blog.read_time') }}
                      </a>
                    </div>
                    <h5 class="blog-title">
                      <a href='#'>{{ $translation->title ?? 'Blog Post Title' }}</a>
                    </h5>
                  </div>
                  <div class="blog-img">
                    <a href='#'>
                      @if($blog->featured_image)
                        <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="{{ $translation->title ?? 'Blog Image' }}">
                      @else
                        <img src="{{ asset('assets/images/blog/img' . (($loop->index % 8) + 1) . '.png') }}" alt="{{ $translation->title ?? 'Blog Image' }}">
                      @endif
                      <div class="blog-date-wrap">
                        <div class="blog-year">
                          <span>{{ $publishedDate->format('Y') }}</span>
                        </div>
                        <div class="blog-month">
                          <h4>{{ $publishedDate->format('d') }}</h4>
                          <h6>{{ $publishedDate->format('M') }}</h6>
                        </div>
                      </div>
                    </a>
                    <a class='techin-default-btn blog-btn1' data-text='{{ __('index.blog.read_more') }}' href='#'>
                      <span class="button-wraper">{{ __('index.blog.read_more') }}</span>
                    </a>
                  </div>
                </div>
              </div>
            @empty
              <div class="col-12">
                <div class="text-center py-5">
                  <h5>{{ __('index.blog.empty') }}</h5>
                  <p class="text-muted">{{ __('Check back soon for our latest insights and updates.') }}</p>
                </div>
              </div>
            @endforelse

            @if($blogs->hasPages())
            <div class="col-12">
              <div class="techin-pagination center">
                {{ $blogs->links() }}
              </div>
            </div>
            @endif
          </div>
        </div>
        <div class="col-lg-4">
          <aside class="sidebar-area pl-25">
            <div class="widget widget_search">
              <h4 class="widget_title">Search Here...</h4>
              <img src="{{ asset('assets/images/blog/line1.svg') }}" alt="">
              <form class="search-form">
                <input type="search" placeholder="Search Here...">
                <button type="submit">Search</button>
              </form>
            </div>
            <div class="widget">
              <h4 class="widget_title">Latest News</h4>
              <img src="{{ asset('assets/images/blog/line1.svg') }}" alt="">
              <div class="recent-post-wrap">
                @forelse($recentPosts as $recentPost)
                  @php
                    $recentTranslation = $recentPost->translate();
                    $recentDate = $recentPost->published_at ?? $recentPost->created_at;
                  @endphp
                  <div class="recent-post">
                    <div class="media-img">
                      <a href='#'>
                        @if($recentPost->featured_image)
                          <img src="{{ asset('storage/' . $recentPost->featured_image) }}" alt="{{ $recentTranslation->title ?? 'Blog Image' }}">
                        @else
                          <img src="{{ asset('assets/images/blog/img' . (($loop->index % 3) + 9) . '.png') }}" alt="{{ $recentTranslation->title ?? 'Blog Image' }}">
                        @endif
                      </a>
                    </div>
                    <div class="media-body">
                      <div class="recent-post-meta">
                        <a href='#'>
                          <img src="{{ asset('assets/images/blog/6.svg') }}" alt="">
                          {{ $recentDate->format('M d, Y') }}</a>
                        <div class="post-title">
                          <a class='text-inherit' href='#'>{{ Str::limit($recentTranslation->title ?? 'Recent Blog Post', 50) }}</a>
                        </div>
                      </div>
                    </div>
                  </div>
                @empty
                  <div class="text-center py-3">
                    <p class="text-muted">{{ __('index.blog.empty') }}</p>
                  </div>
                @endforelse
              </div>
            </div>
            <div class="widget widget_categories widget-categories">
              <h4 class="widget_title">Category</h4>
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
                      Technology
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
@endsection
