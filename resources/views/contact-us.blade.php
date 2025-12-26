@extends('layouts.app')

@section('content')
  <div class="breadcrumb-wrapper" style="background-image: url({{ asset('assets/images/blog/blog-thumb.png') }})">
    <div class="container">

      <div class="breadcrumb-content">
        <h1 class="breadcrumb-title">{{ __('contact.breadcrumb_title') }}</h1>
        <div class="breadcrumb-menu-wrapper">
          <div class="breadcrumb-menu-wrap">
            <div class="breadcrumb-menu">
              <ul>
                <li><a href='{{ route('home') }}'>{{ __('layout.menu.home') }}</a></li>
                <li><img src="{{ asset('assets/images/breadcrumb/line.svg') }}" alt="right-arrow"></li>
                <li aria-current="page">{{ __('contact.breadcrumb_title') }}</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- End breadcrumb -->

  <div class="techin-section-padding6">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 order-lg-2 d-flex align-items-center">
          <div class="techin-contact-us-thumb">
            <img src="{{ asset('assets/images/portfolio/img8.png') }}" alt="">
          </div>
        </div>
        <div class="col-lg-7">
          <div class="techin-default-content pr-50">
            <div class="techin-title-tag">
              <span><img src="{{ asset('assets/images/v1/shape1.svg') }}" alt=""></span>
              <h6>{{ __('contact.tagline') }}</h6>
              <span><img src="{{ asset('assets/images/v1/shape1.svg') }}" alt=""></span>
            </div>
            <h2>{{ __('contact.title') }}</h2>

            @if(session('success'))
              <div class="alert alert-success mb-4" style="padding: 15px; margin-bottom: 20px; border: 1px solid #d4edda; border-radius: 4px; color: #155724; background-color: #d1ecf1;">
                {{ session('success') }}
              </div>
            @endif

            @if($errors->any())
              <div class="alert alert-danger mb-4" style="padding: 15px; margin-bottom: 20px; border: 1px solid #f5c6cb; border-radius: 4px; color: #721c24; background-color: #f8d7da;">
                <ul class="mb-0" style="margin: 0; padding-left: 20px;">
                  @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif

            <div class="techin-appointment-box box-3 light-bg1">
              <form action="{{ route('contact.store') }}" method="POST">
                @csrf
                <div class="row">
                  <div class="col-lg-6">
                    <div class="techin-main-field field4">
                      <input type="text" name="first_name" placeholder="{{ __('contact.form.first_name') }}" value="{{ old('first_name') }}" required>
                      <img src="{{ asset('assets/images/v1/a1.svg') }}" alt="">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="techin-main-field field4">
                      <input type="text" name="last_name" placeholder="{{ __('contact.form.last_name') }}" value="{{ old('last_name') }}" required>
                      <img src="{{ asset('assets/images/v1/a1.svg') }}" alt="">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="techin-main-field field4">
                      <input type="email" name="email" placeholder="{{ __('contact.form.email_placeholder') }}" value="{{ old('email') }}" required>
                      <img src="{{ asset('assets/images/v1/a2.svg') }}" alt="">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="teching-slect-wrapper">
                      <select class="techin-a-select wrapper4" name="service_id">
                        <option data-display="{{ __('contact.form.select_service') }}" value="">{{ __('contact.form.select_service') }}</option>
                        @if(isset($services) && $services->count() > 0)
                          @foreach($services as $service)
                            <option value="{{ $service->id }}">{{ optional($service->translation)->name ?? 'Service' }}</option>
                          @endforeach
                        @else
                          <option value="general">{{ __('contact.form.general_inquiry') }}</option>
                          <option value="it_support">{{ __('contact.form.it_support') }}</option>
                          <option value="cloud_services">{{ __('contact.form.cloud_services') }}</option>
                          <option value="cybersecurity">{{ __('contact.form.cybersecurity') }}</option>
                        @endif
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-12"></div>
                </div>
                <div class="techin-main-field-textarea textarea2">
                  <textarea class="button-text2" name="message" placeholder="{{ __('contact.form.message_placeholder') }}" required>{{ old('message') }}</textarea>
                </div>
                <div class="techin-appointment-submit-btn mt-30">
                  <button class="techin-default-btn" type="submit" data-text="{{ __('contact.form.submit_btn') }}">
                    <span class="button-wraper">{{ __('contact.form.submit_btn') }}</span>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end section -->

  <div class="responsive-map">
    <iframe class="techin-contact-us-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3340272.503334722!2d49.90201833403186!3d15.79424315885804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1603dbac7c34bc5f%3A0x92f129377eae77ae!2z2KfZhNmK2Y7ZhdmO2YY!5e1!3m2!1sar!2ssa!4v1765740729170!5m2!1sar!2ssa" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="600" height="450" allowfullscreen></iframe>
    <div class="container">
      <div class="techin-contact-us-info">
        <div class="techin-contact-us-title">
          <h3>{{ __('contact.lets_get_in_touch') }}</h3>
          <img src="{{ asset('assets/images/portfolio/line.svg') }}" alt="">
        </div>
        <div class="techin-iconbox-contact-wrap">
          <div class="techin-iconbox-contact-icon">
            <img src="{{ asset('assets/images/portfolio/icon1.svg') }}" alt="">
          </div>
          <div class="techin-iconbox-contact-data">
            <h5>{{ __('contact.office_time_title') }}</h5>
            <p>{{ __('contact.office_time_value') }}</p>
          </div>
        </div>
        <a href="tel:+967782788810">
          <div class="techin-iconbox-contact-wrap pb-30">
            <div class="techin-iconbox-contact-icon">
              <img src="{{ asset('assets/images/portfolio/icon2.svg') }}" alt="">
            </div>
            <div class="techin-iconbox-contact-data">
              <h5>{{ __('contact.call_us') }}</h5>
              <p>+967782788810</p>
            </div>
          </div>
        </a>
        <a href="mailto:info@baherit.com">
          <div class="techin-iconbox-contact-wrap pb-30">
            <div class="techin-iconbox-contact-icon">
              <img src="{{ asset('assets/images/portfolio/icon3.svg') }}" alt="">
            </div>
            <div class="techin-iconbox-contact-data">
              <h5>{{ __('contact.email_address') }}</h5>
              <p>info@baherit.com</p>
            </div>
          </div>
        </a>
        <div class="techin-iconbox-contact-wrap">
          <div class="techin-iconbox-contact-icon">
            <img src="{{ asset('assets/images/portfolio/icon4.svg') }}" alt="">
          </div>
          <div class="techin-iconbox-contact-data">
            <h5>{{ __('contact.office_address') }}</h5>
            <p>Yemen</p>
          </div>
        </div>
        <div class="shape-up">
          <img src="{{ asset('assets/images/portfolio/shape-up.svg') }}" alt="">
        </div>
        <div class="shape-down">
          <img src="{{ asset('assets/images/portfolio/shape-down.svg') }}" alt="">
        </div>
      </div>
    </div>
  </div>


  <!-- end section -->

  <div class="techin-section-padding2">
    <div class="container">
      <div class="techin-section-title center">
        <div class="techin-title-tag center2">
          <span><img src="{{ asset('assets/images/v1/shape1.svg') }}" alt=""></span>
          <h6>{{ __('faq.tagline') }}</h6>
          <span><img src="{{ asset('assets/images/v1/shape1.svg') }}" alt=""></span>
        </div>
        <h2>{{ __('faq.title') }}</h2>
      </div>
      <div class="techin-faq-wrap1">
        @forelse(($faqs ?? collect()) as $index => $faq)
          <div class="techin-faq-item {{ $index === 0 ? 'open' : '' }}">
            <div class="techin-faq-header headr-2">
              <h6>{{ optional($faq->translation)->question ?? 'FAQ Question' }}</h6>
              <div class="techin-active-icon">
                <img src="{{ asset('assets/images/v1/top-arrow.svg') }}" alt="">
              </div>
            </div>
            <div class="techin-faq-body light-bg1">
              <p>{{ optional($faq->translation)->answer ?? 'FAQ Answer' }}</p>
            </div>
          </div>
        @empty
          <div class="techin-faq-item open">
            <div class="techin-faq-header headr-2">
              <h6>{{ __('faq.default.q1') }}</h6>
              <div class="techin-active-icon">
                <img src="{{ asset('assets/images/v1/top-arrow.svg') }}" alt="">
              </div>
            </div>
            <div class="techin-faq-body light-bg1">
              <p>{{ __('faq.default.a1') }}</p>
            </div>
          </div>
        @endforelse
      </div>
    </div>
  </div>
  <!-- end faq section -->


  <div class="techin-cta-section" style="background-image: url({{ asset('assets/images/cta/cta-bg1.png') }})">
    <div class="container">
      <div class="techin-cta-wrap">
        <div class="row">
          <div class="col-xl-8 col-lg-8">
            <div class="techin-cta-content">
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
              <a class="techin-default-btn pill techin-cta-btn" href="#" onclick="document.querySelector('form').scrollIntoView({behavior: 'smooth'}); return false;" data-text="{{ __('index.cta.button') }}">
                <span class="button-wraper">{{ __('index.cta.button') }}</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endsection
