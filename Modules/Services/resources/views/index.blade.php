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
                                <img src="./assets/images/breadcrumb-title.png" class="img-fluid"
                                    alt="title-effect" />{{ __('messages.Services') }}
                            </h2>
                            <p>
                                <i class="ri-subtract-line"></i>{{ __('messages.Our service line‑up powered by AI.') }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-lg-inline-block d-none">
                    <div class="breadcrumb-img">
                        <img src="https://themes.pixelstrap.net/mega_bot/assets/svg/service-vector.svg" class="img-fluid"
                            alt="service" />
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="feature-section pb-0">
        <div class="container pb-md-5 pb-0">
            <div class="title-basic fs-sm">
                <h2 class="text-white">
                    {{ __('messages.A Wide Range of Functionality to Support Any Use‑Case') }}
                </h2>
            </div>

            <div class="row g-xxl-5 g-4">
                @foreach ($services as $service)
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="feature-box" data-aos="fade-up" data-aos-delay="{{ $loop->index * 50 }}">
                            <div class="feature-top">
                                <div class="feature-icon">
                                    {{-- show icon if uploaded; otherwise fallback --}}
                                    @if ($service->icon)
                                        <img src="{{ asset('storage/' . $service->icon) }}" class="img-fluid outline-icon"
                                            alt="">
                                    @else
                                        <img src="{{ asset('assets/svg/feature/default.svg') }}"
                                            class="img-fluid outline-icon" alt="">
                                    @endif
                                </div>
                                <h3>{{ $service->title }}</h3> {{-- translatable --}}
                            </div>

                            <h4>{!! $service->short_description !!}</h4> {{-- translatable --}}

                            @if ($service->slug)
                                <div class="link-overflow" data-cursor="pointer">
                                    {{-- <a href="{{ route('services.show', $service->slug) }}"> --}}
                                        {{ __('messages.Read more') }}
                                        <i class="fa-sharp fa-regular fa-arrow-right"></i>
                                    {{-- </a> --}}
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</main>
@endsection

