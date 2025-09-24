@extends('layouts')
@push('meta')
    <meta name="description" content="">
    <meta name="keywords" content="{{ __('projects.meta_keywords') }}">
    <meta name="author" content="{{ __('projects.meta_author') }}">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="{{ __('projects.meta_title') }}">
    <meta property="og:description" content="{{ __('projects.meta_description') }}">
    <meta property="og:image" content="{{ asset('assets/images/og-image.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{ config('app.name') }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ __('projects.meta_title') }}">

    <meta name="twitter:description" content="{{ __('projects.meta_description') }}">
    <meta name="twitter:image" content="{{ asset('assets/images/og-image.png') }}">
    <meta name="twitter:site" content="{{ config('app.name') }}">
    <meta name="twitter:creator" content="{{ config('app.name') }}">

    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:image:alt" content="{{ __('projects.meta_title') }}">


@endpush
@section('content')
<main class="projects">
{{-- breadcrumb ---------------------------------------------------------- --}}
<section class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="breadcrumb-content">
                    <h2>
                        <img src="{{ asset('assets/images/breadcrumb-title.png') }}" alt="">
                        {{ __('projects.Latest Projects') }}
                    </h2>
                    <p><i class="ri-subtract-line"></i>{{ __('projects.Discover our most recent work') }}</p>
                </div>
            </div>
            <div class="col-lg-6 d-lg-inline-block d-none">
                <div class="breadcrumb-img">
                    <img src="{{ asset('assets/svg/contact-vector.svg') }}" class="img-fluid" alt="vector">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- grid --------------------------------------------------------------- --}}
<section class="ratio2_3">
    <div class="container">

        {{-- optional category selector --}}
        @if($categories->count())
            <div class="mb-4">
                @foreach($categories as $cat)
                    <a href="#"
                       class="badge {{ request('cat') == $cat->id ? 'bg-primary' : 'bg-secondary' }} mx-1">
                        {{ $cat->name }}
                    </a>
                @endforeach
            </div>
        @endif

        <div class="row g-lg-5 g-4">
            @forelse($projects as $project)
                <div class="col-xl-4 col-md-6">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img src="{{ asset('storage/' . $project->featured_image) }}" class="img-fluid" alt="">
                            <label>{{ $project->category->name ?? '' }}</label>
                            <div class="hover-content">
                                <div class="content">
                                    <a data-cursor="pointer" href="{{ route('project.show', $project->slug) }}">
                                        <div class="btn-arrow"><div class="icon-arrow">
                                            <i class="fa-sharp fa-regular fa-arrow-right"></i></div></div>

                                        <p>{{ $project->client_name }}</p>
                                        <h4 class="text-center">{{ $project->title }}</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-white">{{ __('No projects yet.') }}</p>
            @endforelse
        </div>

        {{-- pagination --}}
        <div class="mt-4">{{ $projects->links() }}</div>
    </div>
</section>
</main>
@endsection
