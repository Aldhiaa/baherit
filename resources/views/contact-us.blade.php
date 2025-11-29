@extends('layouts.app')

@section('content')
  <div class="breadcrumb-wrapper" style="background-image: url({{ asset('assets/images/blog/blog-thumb.png') }})">
    <div class="container">

      <div class="breadcrumb-content">
        <h1 class="breadcrumb-title">Contact Us</h1>
        <div class="breadcrumb-menu-wrapper">
          <div class="breadcrumb-menu-wrap">
            <div class="breadcrumb-menu">
              <ul>
                <li><a href='{{ route('home') }}'>Home</a></li>
                <li><img src="{{ asset('assets/images/breadcrumb/line.svg') }}" alt="right-arrow"></li>
                <li aria-current="page">Contact Us</li>
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
              <h6>Contact Us</h6>
              <span><img src="{{ asset('assets/images/v1/shape1.svg') }}" alt=""></span>
            </div>
            <h2>TechIn Contact Information Here</h2>

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
                      <input type="text" name="first_name" placeholder="First Name" value="{{ old('first_name') }}" required>
                      <img src="{{ asset('assets/images/v1/a1.svg') }}" alt="">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="techin-main-field field4">
                      <input type="text" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}" required>
                      <img src="{{ asset('assets/images/v1/a1.svg') }}" alt="">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="techin-main-field field4">
                      <input type="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required>
                      <img src="{{ asset('assets/images/v1/a2.svg') }}" alt="">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="teching-slect-wrapper">
                      <select class="techin-a-select wrapper4" name="service_id">
                        <option data-display="Select Service" value="">Select Service</option>
                        @if(isset($services) && $services->count() > 0)
                          @foreach($services as $service)
                            <option value="{{ $service->id }}">{{ optional($service->translation)->name ?? 'Service' }}</option>
                          @endforeach
                        @else
                          <option value="general">General Inquiry</option>
                          <option value="it_support">IT Support</option>
                          <option value="cloud_services">Cloud Services</option>
                          <option value="cybersecurity">Cybersecurity</option>
                        @endif
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-12"></div>
                </div>
                <div class="techin-main-field-textarea textarea2">
                  <textarea class="button-text2" name="message" placeholder="Message Here..." required>{{ old('message') }}</textarea>
                </div>
                <div class="techin-appointment-submit-btn mt-30">
                  <button class="techin-default-btn" type="submit" data-text="Send Message">
                    <span class="button-wraper">Send Message</span>
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
    <iframe class="techin-contact-us-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2822.7806761080233!2d-93.29138368446431!3d44.96844997909819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x52b32b6ee2c87c91%3A0xc20dff2748d2bd92!2sWalker+Art+Center!5e0!3m2!1sen!2sus!4v1514524647889" width="600" height="450" allowfullscreen></iframe>
    <div class="container">
      <div class="techin-contact-us-info">
        <div class="techin-contact-us-title">
          <h3>Let's Get In Touch!</h3>
          <img src="{{ asset('assets/images/portfolio/line.svg') }}" alt="">
        </div>
        <div class="techin-iconbox-contact-wrap">
          <div class="techin-iconbox-contact-icon">
            <img src="{{ asset('assets/images/portfolio/icon1.svg') }}" alt="">
          </div>
          <div class="techin-iconbox-contact-data">
            <h5>Office Time</h5>
            <p>Mon-Fri: 10:00Am-09:00Pm</p>
          </div>
        </div>
        <a href="tel:+009188800002222">
          <div class="techin-iconbox-contact-wrap pb-30">
            <div class="techin-iconbox-contact-icon">
              <img src="{{ asset('assets/images/portfolio/icon2.svg') }}" alt="">
            </div>
            <div class="techin-iconbox-contact-data">
              <h5>Call Us Any Time</h5>
              <p>+(009) 1888 000 2222</p>
            </div>
          </div>
        </a>
        <a href="mailto:info@techin.com">
          <div class="techin-iconbox-contact-wrap pb-30">
            <div class="techin-iconbox-contact-icon">
              <img src="{{ asset('assets/images/portfolio/icon3.svg') }}" alt="">
            </div>
            <div class="techin-iconbox-contact-data">
              <h5>Email Address</h5>
              <p>info@techin.com</p>
            </div>
          </div>
        </a>
        <div class="techin-iconbox-contact-wrap">
          <div class="techin-iconbox-contact-icon">
            <img src="{{ asset('assets/images/portfolio/icon4.svg') }}" alt="">
          </div>
          <div class="techin-iconbox-contact-data">
            <h5>Office Address</h5>
            <p>12th Street, New York, USA</p>
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
          <h6>FAQs</h6>
          <span><img src="{{ asset('assets/images/v1/shape1.svg') }}" alt=""></span>
        </div>
        <h2>Frequently Asked Any Questions</h2>
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
              <h6>What services does TechIn offer?</h6>
              <div class="techin-active-icon">
                <img src="{{ asset('assets/images/v1/top-arrow.svg') }}" alt="">
              </div>
            </div>
            <div class="techin-faq-body light-bg1">
              <p>We offer comprehensive IT solutions including cloud services, cybersecurity, managed IT support, and digital transformation consulting to help businesses thrive in the digital age.</p>
            </div>
          </div>
          <div class="techin-faq-item">
            <div class="techin-faq-header headr-2">
              <h6>How does the consulting process work?</h6>
              <div class="techin-active-icon">
                <img src="{{ asset('assets/images/v1/top-arrow.svg') }}" alt="">
              </div>
            </div>
            <div class="techin-faq-body light-bg1">
              <p>Our consulting process typically starts with an initial consultation to understand your business needs and challenges. We then conduct a thorough analysis, develop a tailored strategy, and work closely with you to implement the solutions.</p>
            </div>
          </div>
          <div class="techin-faq-item">
            <div class="techin-faq-header headr-2">
              <h6>How can I get started with TechIn?</h6>
              <div class="techin-active-icon">
                <img src="{{ asset('assets/images/v1/top-arrow.svg') }}" alt="">
              </div>
            </div>
            <div class="techin-faq-body light-bg1">
              <p>Getting started is easy! Simply contact us through our contact form, give us a call, or send us an email. We'll schedule a consultation to discuss your needs and how we can help.</p>
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
                <h6>Knock Us To Know 24/7</h6>
                <img src="{{ asset('assets/images/shape/cta-shape1.svg') }}" alt="">
              </div>
              <div class="techin-cta-content-bottom">
                <h2>Need A Consultation?</h2>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 d-flex align-items-center justify-content-end">
            <div class="techin-title-btn">
              <a class="techin-default-btn pill techin-cta-btn" href="#" onclick="document.querySelector('form').scrollIntoView({behavior: 'smooth'}); return false;" data-text="Get A Quote">
                <span class="button-wraper">Get A Quote</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endsection
