@extends('layouts')
<style>
    .about-us {
      background: #fff;
    }

    .vision-box {
      background-color: #f0f7ff;
    }

    .mission-box {
      background-color: #f7f2ff;
    }

    .vision-box,
    .mission-box {
      transition: box-shadow 0.3s ease;
    }

    .vision-box:hover,
    .mission-box:hover {
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }
    /* .about-us {
      position: relative;
    }
    .about-us::after {
      content: "";
      position: absolute;
      background-image: url(./assets/images/int3.png);
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
      opacity: 0.92;
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
    } */

    .value-box {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .value-box:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
    }
    .bg-lightblue {
      background-color: #eef6ff;
    }

    .bg-gradient-purple {
      background: linear-gradient(90deg, #136387 0%, #07385d 100%);
    }

    .text-purple {
      color: #074170;
    }

    .btn.text-purple:hover {
      background-color: #e0d2fa;
    }
  </style>
@section('content')
    {{-- breadcrumb ----------------------------------------------------- --}}
    <main class="about-us">
    <section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb-content">
                        <div>
                            <h2>
                                <img src="./assets/images/breadcrumb-title.png" class="img-fluid" alt="title-effect" />
                               {{ __('About Us') }}
                            </h2>
                            <p>
                                <i class="ri-subtract-line"></i>
                                {{ __('About Us subtitle') }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-lg-inline-block d-none">
                    <div class="breadcrumb-img">
                        <img src="https://themes.pixelstrap.net/mega_bot/assets/svg/contact-vector.svg" class="img-fluid"
                            alt="service" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb section end -->
    @php
        $items = $abouts->whereBetween('order', [1, 4])->sortBy('order');
        $main  = $abouts->firstWhere('order', 0);

        use Illuminate\Support\Str;
    @endphp
    <section class="container py-5">
        <!-- Company Overview -->
        <div class="row mb-5 align-items-start">
            <div class="col-md-1 text-center text-md-start mb-3">
                <i class="fa-solid fa-briefcase fa-2x text-purple"></i>
            </div>
            <div class="col-md-3">
                @if($main) <h3  class="fw-bold mb-0">{{ $main->title }}</h3> @endif
            </div>
            @if($main)
            <div class="col-md-8">
                <p>
                    {!! $main->description !!}
                </p>

            </div>
            @endif
        </div>

        <!-- Vision & Mission -->
        <div class="row text-dark">
            <!-- Vision -->
            @foreach($items as $section)
            <div class="col-md-6 mb-4">
                <div class="p-4 rounded vision-box h-100">
                    <i class="fa-solid fa-eye fa-lg text-purple mb-2"></i>
                    <h5 class="fw-bold mt-2">{{ $section->title }}</h5>
                    <p class="mt-2">
                        {!! Str::limit(
                            strip_tags($section->description),
                            500,
                            '…'
                        ) !!}
                    </p>
                </div>
            </div>
            @endforeach

        </div>
    </section>

    <!-- Core Values Section -->
    <section class="bg-light py-5">
        <div class="container text-center">
            <div class="mb-4">
                <i class="fa-solid fa-award fa-lg text-purple"></i>
                <h3 class="fw-bold d-inline-block ms-2">Our Core Values</h3>
                <p class="mt-2 text-muted">
                    The principles that guide our work and define our company culture
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="value-box p-4 bg-white shadow-sm rounded h-100">
                        <h5 class="fw-bold text-purple">Innovation</h5>
                        <p class="mb-0">Constantly seeking new and better solutions</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="value-box p-4 bg-white shadow-sm rounded h-100">
                        <h5 class="fw-bold text-purple">Quality</h5>
                        <p class="mb-0">Delivering excellence in every project</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="value-box p-4 bg-white shadow-sm rounded h-100">
                        <h5 class="fw-bold text-purple">Transparency</h5>
                        <p class="mb-0">Open and honest communication</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="value-box p-4 bg-white shadow-sm rounded h-100">
                        <h5 class="fw-bold text-purple">Commitment</h5>
                        <p class="mb-0">Dedicated to client success</p>
                    </div>
                </div>
                <div class="col-md-4 offset-md-2 offset-lg-0">
                    <div class="value-box p-4 bg-white shadow-sm rounded h-100">
                        <h5 class="fw-bold text-purple">Customer Satisfaction</h5>
                        <p class="mb-0">Our ultimate measure of success</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Team Section -->
    <section class="py-5 text-center">
        <div class="container">
            <div class="mb-3">
                <i class="fa-solid fa-user-group fa-lg text-purple"></i>
                <h3 class="fw-bold d-inline-block ms-2">Our Team</h3>
                <p class="text-muted mt-2">
                    A talented group of professionals working together to deliver
                    exceptional results
                </p>
            </div>
            <div class="bg-lightblue rounded p-4 mt-4">
                <p class="mb-0">
                    Our team consists of passionate software engineers and developers
                    with diverse expertise in modern technologies and frameworks. We
                    foster a collaborative environment that encourages innovation,
                    continuous learning, and professional growth.
                </p>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-5 text-white bg-gradient-purple">
        <div class="container text-center">
            <h3 class="fw-bold">
                <i class="fa-solid fa-check fa-lg text-white mb-2 pe-2"></i> Why
                Choose Us?
            </h3>
            <p class="mb-5 text-light">
                What sets Intelligent Soft apart from other software providers
            </p>

            <div class="row g-4 text-start">
                <div class="col-md-6 col-lg-3">
                    <div class="d-flex align-items-start">
                        <i class="fa-solid fa-circle-check text-white me-3 mt-1"></i>
                        <div>
                            <h6 class="fw-bold text-white mb-1">Tailored Solutions</h6>
                            <p class="text-light mb-0">
                                Customized software designed specifically for your needs
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="d-flex align-items-start">
                        <i class="fa-solid fa-circle-check text-white me-3 mt-1"></i>
                        <div>
                            <h6 class="fw-bold text-white mb-1">On-Time Delivery</h6>
                            <p class="text-light mb-0">
                                Meeting deadlines without compromising quality
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="d-flex align-items-start">
                        <i class="fa-solid fa-circle-check text-white me-3 mt-1"></i>
                        <div>
                            <h6 class="fw-bold text-white mb-1">
                                Continuous Technical Support
                            </h6>
                            <p class="text-light mb-0">
                                Ongoing assistance and maintenance for all our products
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="d-flex align-items-start">
                        <i class="fa-solid fa-circle-check text-white me-3 mt-1"></i>
                        <div>
                            <h6 class="fw-bold text-white mb-1">Competitive Pricing</h6>
                            <p class="text-light mb-0">
                                High-quality solutions at reasonable costs
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <a href="#contact" class="btn btn-light text-purple fw-semibold">Contact Us Today</a>
            </div>
        </div>
    </section>
    </main>
@endsection
