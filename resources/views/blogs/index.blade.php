@extends('layouts')

@section('content')
<section class="blog-section section-b-space">
    <div class="container">
        <div class="title-basic">
            <h2 class="wow zoomIn">{{ $siteSettings['blogs_heading'] ?? __('messages.Blogs') }}</h2>
        </div>

        <div class="row g-4">
            @php use Illuminate\Support\Str; @endphp
            @foreach($posts as $post)
                <div class="col-md-6 col-lg-4">
                    <div class="feature-box wow slideInUp h-100 blog-box">
                        <div class="blog-img">
                            <a href="{{ route('blogs.show', $post->slug) }}">
                                @if(isset($post->featured_image) && $post->featured_image)
                                    <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="img-fluid rounded-3">
                                @elseif(isset($post->featured_image_url) && $post->featured_image_url)
                                    <img src="{{ $post->featured_image_url }}" alt="{{ $post->title }}" class="img-fluid rounded-3">
                                @else
                                    <img src="{{ asset('assets/images/blog-placeholder.jpg') }}" alt="{{ $post->title }}" class="img-fluid rounded-3">
                                @endif
                            </a>
                        </div>

                        <div class="feature-top mt-3">
                            <h3><a href="{{ route('blogs.show', $post->slug) }}">{{ $post->title }}</a></h3>
                        </div>

                        <div class="blog-excerpt mt-2">
                            <p>{!! Str::limit(strip_tags($post->excerpt ?? $post->content ?? ''), 140, '…') !!}</p>
                        </div>

                        <div class="mt-auto">
                            <a href="{{ route('blogs.show', $post->slug) }}" class="wow slideInUp btn-arrow">
                                <div class="icon-arrow"><i class="fa-sharp fa-regular fa-arrow-right"></i></div>
                                {{ __('messages.Read more') }}
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-4 d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
</section>
@endsection
