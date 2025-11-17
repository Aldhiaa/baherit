@extends('layouts.app')

@section('content')
  <div class="breadcrumb-wrapper" style="background-image: url(assets/images/blog/blog-thumb.png)">
    <div class="container">

      <div class="breadcrumb-content">
        <h1 class="breadcrumb-title">Contact Us</h1>
        <div class="breadcrumb-menu-wrapper">
          <div class="breadcrumb-menu-wrap">
            <div class="breadcrumb-menu">
              <ul>
                <li><a href='index.html'>Home</a></li>
                <li><img src="assets/images/breadcrumb/line.svg" alt="right-arrow"></li>
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
            <img src="assets/images/portfolio/img8.png" alt="">
          </div>
        </div>
        <div class="col-lg-7">
          <div class="techin-default-content pr-50">
            <div class="techin-title-tag">
              <span><img src="assets/images/v1/shape1.svg" alt=""></span>
              <h6>Contact Us</h6>
              <span><img src="assets/images/v1/shape1.svg" alt=""></span>
            </div>
            <h2>TechIn Contact Information Here</h2>
            <div class="techin-appointment-box box-3 light-bg1">
              <form action="#">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="techin-main-field field4">
                      <input type="text" placeholder="First Name">
                      <img src="assets/images/v1/a1.svg" alt="">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="techin-main-field field4">
                      <input type="text" placeholder="Last Name">
                      <img src="assets/images/v1/a1.svg" alt="">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="techin-main-field field4">
                      <input type="email" placeholder="Email Address">
                      <img src="assets/images/v1/a2.svg" alt="">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="teching-slect-wrapper">
                      <select class="techin-a-select wrapper4">
                        <option data-display="Select Service">Only Option</option>
                        <option value="1">Some option</option>
                        <option value="2">Another option</option>
                        <option value="4">Potato</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-12"></div>
                </div>
                <div class="techin-main-field-textarea textarea2">
                  <textarea class="button-text2" name="textarea" placeholder="Message Here..."></textarea>
                </div>
                <div class="techin-appointment-submit-btn mt-30">
                  <button class="techin-default-btn" type="button" data-text="Send Message">
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
          <h3>Let’s Get In Touch!</h3>
          <img src="assets/images/portfolio/line.svg" alt="">
        </div>
        <div class="techin-iconbox-contact-wrap">
          <div class="techin-iconbox-contact-icon">
            <img src="assets/images/portfolio/icon1.svg" alt="">
          </div>
          <div class="techin-iconbox-contact-data">
            <h5>Office Time</h5>
            <p>Mon-Fri: 10:00Am-09:00Pm</p>
          </div>
        </div>
        <a href="tel:009">
          <div class="techin-iconbox-contact-wrap pb-30">
            <div class="techin-iconbox-contact-icon">
              <img src="assets/images/portfolio/icon2.svg" alt="">
            </div>
            <div class="techin-iconbox-contact-data">
              <h5>Call Us Any Time</h5>
              <p>+(009) 1888 000 2222</p>
            </div>
          </div>
        </a>
        <a href="mailto:name@gmail.com">
          <div class="techin-iconbox-contact-wrap pb-30">
            <div class="techin-iconbox-contact-icon">
              <img src="assets/images/portfolio/icon3.svg" alt="">
            </div>
            <div class="techin-iconbox-contact-data">
              <h5>Email Address</h5>
              <p>info@techin.com</p>
            </div>
          </div>
        </a>
        <div class="techin-iconbox-contact-wrap">
          <div class="techin-iconbox-contact-icon">
            <img src="assets/images/portfolio/icon4.svg" alt="">
          </div>
          <div class="techin-iconbox-contact-data">
            <h5>Office Address</h5>
            <p>12th Street, New York, USA</p>
          </div>
        </div>
        <div class="shape-up">
          <img src="assets/images/portfolio/shape-up.svg" alt="">
        </div>
        <div class="shape-down">
          <img src="assets/images/portfolio/shape-down.svg" alt="">
        </div>
      </div>
    </div>
  </div>


  <!-- end section -->

  <div class="techin-section-padding2">
    <div class="container">
      <div class="techin-section-title center">
        <div class="techin-title-tag center2">
          <span><img src="assets/images/v1/shape1.svg" alt=""></span>
          <h6>faqS</h6>
          <span><img src="assets/images/v1/shape1.svg" alt=""></span>
        </div>
        <h2>Frequently Asked Any Questions</h2>
      </div>
      <div class="techin-faq-wrap1">
        <div class="techin-faq-item open">
          <div class="techin-faq-header headr-2">
            <h6>What services does TechIn offer?</h6>
            <div class="techin-active-icon">
              <img src="assets/images/v1/top-arrow.svg" alt="">
            </div>
          </div>
          <div class="techin-faq-body light-bg1">
            <p>Our consulting process typically starts with an initial consultation to understand your business needs and challenges. We then conduct a thorough analysis, develop a tailored strategy, and work closely with you to implement the solutions. We provide continuous support and monitor progress to ensure long-term success.</p>
          </div>
        </div>
        <div class="techin-faq-item">
          <div class="techin-faq-header headr-2">
            <h6>How does the consulting process work?</h6>
            <div class="techin-active-icon">
              <img src="assets/images/v1/top-arrow.svg" alt="">
            </div>
          </div>
          <div class="techin-faq-body light-bg1">
            <p>Our consulting process typically starts with an initial consultation to understand your business needs and challenges. We then conduct a thorough analysis, develop a tailored strategy, and work closely with you to implement the solutions. We provide continuous support and monitor progress to ensure long-term success.</p>
          </div>
        </div>
        <div class="techin-faq-item">
          <div class="techin-faq-header headr-2">
            <h6>How can I get started with TechIn?</h6>
            <div class="techin-active-icon">
              <img src="assets/images/v1/top-arrow.svg" alt="">
            </div>
          </div>
          <div class="techin-faq-body light-bg1">
            <p>Our consulting process typically starts with an initial consultation to understand your business needs and challenges. We then conduct a thorough analysis, develop a tailored strategy, and work closely with you to implement the solutions. We provide continuous support and monitor progress to ensure long-term success.</p>
          </div>
        </div>
        <div class="techin-faq-item">
          <div class="techin-faq-header headr-2">
            <h6>Do you offer virtual consulting services?</h6>
            <div class="techin-active-icon">
              <img src="assets/images/v1/top-arrow.svg" alt="">
            </div>
          </div>
          <div class="techin-faq-body light-bg1">
            <p>Our consulting process typically starts with an initial consultation to understand your business needs and challenges. We then conduct a thorough analysis, develop a tailored strategy, and work closely with you to implement the solutions. We provide continuous support and monitor progress to ensure long-term success.</p>
          </div>
        </div>
        <div class="techin-faq-item">
          <div class="techin-faq-header headr-2">
            <h6>Do you offer ongoing support after the initial consulting project?</h6>
            <div class="techin-active-icon">
              <img src="assets/images/v1/top-arrow.svg" alt="">
            </div>
          </div>
          <div class="techin-faq-body light-bg1">
            <p>Our consulting process typically starts with an initial consultation to understand your business needs and challenges. We then conduct a thorough analysis, develop a tailored strategy, and work closely with you to implement the solutions. We provide continuous support and monitor progress to ensure long-term success.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end faq section -->


  <div class="techin-cta-section" style="background-image: url(assets/images/cta/cta-bg1.png)">
    <div class="container">
      <div class="techin-cta-wrap">
        <div class="row">
          <div class="col-xl-8 col-lg-8">
            <div class="techin-cta-content">
              <div class="techin-cta-content-top">
                <img src="assets/images/shape/cta-shape1.svg" alt="">
                <h6>Knock Us To Know 24/7</h6>
                <img src="assets/images/shape/cta-shape1.svg" alt="">
              </div>
              <div class="techin-cta-content-bottom">
                <h2>Need A Consultation?</h2>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 d-flex align-items-center justify-content-end">
            <div class="techin-title-btn">
              <a class="techin-default-btn pill techin-cta-btn" href="contact-us.html" data-text="Get A Quote">
                <span class="button-wraper">Get A Quote</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endsection
