@extends('layouts')

@section('content')
<main class="service">
    <section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb-content">
                        <div>
                            <h2>
                                <img src="{{ asset('assets/images/breadcrumb-title.png') }}" class="img-fluid"
                                    alt="title-effect" />{{ __('messages.Blogs') }}
                            </h2>
                            <p>
                                <i class="ri-subtract-line"></i>{{ __('messages.Latest insights, articles and news from our team.') }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-lg-inline-block d-none">
                    <div class="breadcrumb-img">
                        <img src="{{ asset('assets/svg/Blog post-amico.svg') }}" class="img-fluid blog-illustration" alt="blog" />
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="feature-section pb-0">
        <div class="container pb-md-5 pb-0">
            <div class="title-basic fs-sm">
                <h2 class="text-white">
                    {{ __('messages.Recent posts & stories') }}
                </h2>
            </div>

            @if ($posts->count())
                <div class="row g-xxl-5 g-4">
                    @foreach ($posts as $post)
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="feature-box" data-aos="fade-up" data-aos-delay="{{ $loop->index * 50 }}">
                                <div class="feature-top">
                                    <div class="feature-icon">
                                        @if (!empty($post->image))
                                            <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid outline-icon"
                                                alt="{{ $post->title }}">
                                        @else
                                            <img src="{{ asset('assets/svg/blog-vector.svg') }}" class="img-fluid outline-icon"
                                                alt="blog" />
                                        @endif
                                    </div>
                                    <h3>{{ $post->title }}</h3>
                                </div>

                                <h4>{!! $post->short_description ?? \Illuminate\Support\Str::limit(strip_tags($post->body ?? ''), 120) !!}</h4>

                                @if ($post->slug)
                                    <div class="link-overflow" data-cursor="pointer">
                                        <a href="{{ route('blogs.show', $post->slug) }}">
                                            {{ __('messages.Read more') }}
                                            <i class="fa-sharp fa-regular fa-arrow-right"></i>
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="row mt-4">
                    <div class="col-12 d-flex justify-content-center">
                        {{ $posts->links() }}
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-12">
                        <p class="text-center text-white-50 mb-0">{{ __('messages.No blogs available at the moment.') }}</p>
                    </div>
                </div>
            @endif
        </div>
    </section>
</main>
@endsection

