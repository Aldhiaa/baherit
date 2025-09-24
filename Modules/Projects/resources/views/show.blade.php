@extends('layouts')
@push('meta')
    <title>{{ $project->title }}</title>

    <meta name="description" content="{!! Str::limit(  strip_tags($project->description),   150,  '…') !!}">
    <meta name="keywords" content="{{ __('projects.meta_keywords') }}">
    <meta name="author" content="{{ __('projects.meta_author') }}">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="{{ $project->title }}">
    <meta property="og:description" content="{!! Str::limit(  strip_tags($project->description),   150,  '…') !!}">
    <meta property="og:image" content="{{ asset('assets/images/og-image.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{ config('app.name') }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ __('projects.meta_title') }}">

@endpush

@section('content')
<main class="project-details">
    <!-- Breadcrumb -->
    <section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                {{-- Title / subtitle come from settings or fall back to lang files --}}
                <div class="col-lg-6">
                    <div class="breadcrumb-content">
                        <h2>
                            <img src="{{ asset('assets/images/breadcrumb-title.png') }}"
                                 class="img-fluid"
                                 alt="title-effect" />
                                 {{ $project->title }}
                        </h2>
                        <p>
                            <i class="ri-subtract-line"></i>
                            {!! Str::limit(
                                strip_tags($project->description),
                                50,
                                '…'
                            ) !!}
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 d-lg-inline-block d-none">
                    <div class="breadcrumb-img">
                        <img src="{{ $siteSettings['project_details_image']
                                     ?? 'https://themes.pixelstrap.net/mega_bot/assets/svg/contact-vector.svg' }}"
                             class="img-fluid"
                             alt="service" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Content -->
    <section>
        <div class="container">
            <div class="row">
                {{-- Main column --}}
                <div class="col-xxl-8 col-lg-8">
                    <div class="page-single">
                        {{-- Featured image --}}
                        <div class="page-img">
                            <img src="{{ asset('storage/' . $project->featured_image) }}" alt="{{ $project->title }}">
                        </div>

                        <div class="page-content">
                            {{-- Title & description --}}
                            <h2 class="h3 page-title">{{ $project->title }}</h2>
                            <p>{!! $project->description !!}</p>

                            {{-- “Challenge” box --}}
                            @if($project->features)
                                <div class="project-inner-box mb-4">
                                    <h3 class="box-title">{{ __('projects.challenge') }}</h3>
                                    <p>{!! nl2br(e($project->features)) !!}</p>
                                </div>
                            @endif

                            {{-- “Result” box (if you store it in e.g. $project->result) --}}
                            @if(isset($project->result))
                                <div class="project-inner-box mb-4">
                                    <h3 class="box-title">{{ __('projects.result') }}</h3>
                                    <p class="mb-3">{!! $project->result !!}</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                {{-- Sidebar --}}
                <div class="col-xxl-4 col-lg-4">
                    <aside class="sidebar-area">
                        <div class="widget widget_info">
                            <h3 class="widget_title">{{ __('projects.information') }}</h3>
                            <div class="project-info-list">
                                {{-- Client --}}
                                @if($project->client_name)
                                    <div class="contact-feature">
                                        <div class="icon-btn"><i class="fa-solid fa-user"></i></div>
                                        <div class="media-body">
                                            <p class="contact-feature_label">{{ __('projects.clients') }}:</p>
                                            <span class="contact-feature_link">{{ $project->client_name }}</span>
                                        </div>
                                    </div>
                                @endif

                                {{-- Category --}}
                                @if($project->category)
                                    <div class="contact-feature">
                                        <div class="icon-btn"><i class="fa-solid fa-folder-open"></i></div>
                                        <div class="media-body">
                                            <p class="contact-feature_label">{{ __('projects.category') }}:</p>
                                            <span class="contact-feature_link">{{ $project->category->name }}</span>
                                        </div>
                                    </div>
                                @endif

                                {{-- Completion date --}}
                                @if($project->completion_date)
                                    <div class="contact-feature">
                                        <div class="icon-btn"><i class="fa-solid fa-calendar-days"></i></div>
                                        <div class="media-body">
                                            <p class="contact-feature_label">{{ __('projects.date') }}:</p>
                                            <span class="contact-feature_link">
                                                {{ $project->completion_date->format('d M, Y') }}
                                            </span>
                                        </div>
                                    </div>
                                @endif

                                {{-- Address (if you add it) --}}
                                @if($project->address)
                                    <div class="contact-feature">
                                        <div class="icon-btn"><i class="fa-solid fa-location-dot"></i></div>
                                        <div class="media-body">
                                            <p class="contact-feature_label">{{ __('projects.address') }}:</p>
                                            <span class="contact-feature_link">{{ $project->address }}</span>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>

                        {{-- Download links --}}
                        @if($project->brochure_pdf || $project->brochure_doc)
                            <div class="widget widget_download">
                                <h4 class="widget_title">{{ __('projects.download') }}</h4>
                                <div class="download-widget-wrap">
                                    @if($project->brochure_pdf)
                                        <a href="{{ asset('storage/' . $project->brochure_pdf) }}"
                                           class="th-btn">
                                            <i class="fa-light fa-file-pdf me-2"></i>
                                            {{ __('projects.download_pdf') }}
                                        </a>
                                    @endif
                                    @if($project->brochure_doc)
                                        <a href="{{ asset('storage/' . $project->brochure_doc) }}"
                                           class="th-btn style5">
                                            <i class="fa-light fa-file-lines me-2"></i>
                                            {{ __('projects.download_doc') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        @endif

                        {{-- Contact CTA --}}
                        <div class="widget widget_banner background-image"
                             style="background-image: url('{{ $siteSettings['widget_banner']
                                                         ?? asset('assets/images/widget_banner.jpg') }}');">
                            <div class="widget-banner">
                                <span class="text">{{ __('projects.contact_now') }}</span>
                                <h2 class="titl">{{ __('projects.need_help') }}</h2>
                                <a href="{{ route('contact') }}" class="th-btn style3">
                                    <span>{{ __('projects.get_a_quote') }}</span>
                                    <i class="fas fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection
