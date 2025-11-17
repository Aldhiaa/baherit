@extends('layouts.app')
@section('name', 'content')
  <div class="breadcrumb-wrapper" style="background-image: url(assets/images/blog/blog-thumb.png)">
    <div class="container">

      <div class="breadcrumb-content">
        <h1 class="breadcrumb-title">Service Details</h1>
        <div class="breadcrumb-menu-wrapper">
          <div class="breadcrumb-menu-wrap">
            <div class="breadcrumb-menu">
              <ul>
                <li><a href='index.html'>Home</a></li>
                <li><img src="assets/images/breadcrumb/line.svg" alt="right-arrow"></li>
                <li aria-current="page">Service Details</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- End breadcrumb -->

  <section class="techin-section-padding6">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="techin-service-d-wrap">
            <div class="techin-service-d-thumb">
              <img src="assets/images/service/img1.png" alt="">
            </div>
            <div class="techin-service-d-title">
              <h3>Cloud Solution</h3>
              <img src="assets/images/service/Line.svg" alt="">
            </div>
            <div class="techin-service-d-data">
              <p>Unlock the full potential of the cloud with our customized Cloud Solutions. At TechIn, we offer end-to-end cloud services that are tailored to fit your business needs, providing flexibility, scalability, and security for your digital infrastructure.</p>
              <p>We understand that each business is unique, so we offer tailored that meet your specific requirements. With cloud services, you only pay for what you use, reducing hardware and maintenance costs.</p>
            </div>
            <div class="techin-service-d-sub-title">
              <h4>Key Features:</h4>
              <p>Our cloud specialists have years of experience in designing, implementing, and managing cloud solutions across multiple industries. Our team is available around the clock to monitor and manage your cloud systems, ensuring optimal performance and uptime.</p>
            </div>
            <div class="techin-service-d-list-wraper">
              <div class="techin-service-d-list-wrap">
                <div class="techin-service-d-list-item">
                  <a href='service.html'>
                    <img src="assets/images/service/icon1.svg" alt="">
                    Cloud Migration
                  </a>
                </div>
                <div class="techin-service-d-list-item">
                  <a href='service.html'>
                    <img src="assets/images/service/icon1.svg" alt="">
                    Cloud Management
                  </a>
                </div>
                <div class="techin-service-d-list-item">
                  <a href='service.html'>
                    <img src="assets/images/service/icon1.svg" alt="">
                    Hybrid Cloud Solutions
                  </a>
                </div>
                <div class="techin-service-d-list-item">
                  <a href='service.html'>
                    <img src="assets/images/service/icon1.svg" alt="">
                    Cloud Backup & Disaster Recovery
                  </a>
                </div>
              </div>
              <div class="techin-service-d-list-wrap">
                <div class="techin-service-d-list-item">
                  <a href='service.html'>
                    <img src="assets/images/service/icon1.svg" alt="">
                    Cloud Security
                  </a>
                </div>
                <div class="techin-service-d-list-item">
                  <a href='service.html'>
                    <img src="assets/images/service/icon1.svg" alt="">
                    Scalable Infrastructure
                  </a>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="techin-service-d-thumb2">
                  <a href='single-service.html'><img src="assets/images/service/img2.png" alt=""></a>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="techin-service-d-thumb2 pb-0">
                  <a href='single-service.html'><img src="assets/images/service/img3.png" alt=""></a>
                </div>
              </div>
            </div>
            <div class="techin-service-d-sub-title">
              <h4>Why Choose TechIn’s Cloud Solutions?</h4>
              <p>This detailed description will give potential clients a clear understanding of the value and benefits of your Cloud Solutions service.</p>
            </div>
            <div class="techin-service-d-list-wraper pb-0">
              <div class="techin-service-d-list-wrap">
                <div class="techin-service-d-list-item">
                  <a href='service.html'>
                    <img src="assets/images/service/icon1.svg" alt="">
                    Customized for Your Business
                  </a>
                </div>
                <div class="techin-service-d-list-item">
                  <a href='service.html'>
                    <img src="assets/images/service/icon1.svg" alt="">
                    Cost-Effective
                  </a>
                </div>
              </div>
              <div class="techin-service-d-list-wrap">
                <div class="techin-service-d-list-item">
                  <a href='service.html'>
                    <img src="assets/images/service/icon1.svg" alt="">
                    Proven Expertise
                  </a>
                </div>
                <div class="techin-service-d-list-item">
                  <a href='service.html'>
                    <img src="assets/images/service/icon1.svg" alt="">
                    24/7 Support
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <aside class="sidebar-area pl-25">
            <div class="widget widget2 widget_categories widget-categories">
              <h4 class="widget_title">Our Services</h4>
              <img src="assets/images/blog/line1.svg" alt="">
              <ul>
                <li>
                  <a href='single-blog.html'>
                    IT Management
                    <div class="techin-blog-meta-btn">
                      <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.3594 9.39844L11.1094 15.6484C10.6406 16.1562 9.82031 16.1562 9.35156 15.6484C8.84375 15.1797 8.84375 14.3594 9.35156 13.8906L13.4531 9.75L1.5 9.75C0.796875 9.75 0.25 9.20312 0.25 8.5C0.25 7.83594 0.796875 7.25 1.5 7.25L13.4531 7.25L9.35156 3.14844C8.84375 2.67969 8.84375 1.85937 9.35156 1.39062C9.82031 0.882812 10.6406 0.882812 11.1094 1.39062L17.3594 7.64062C17.8672 8.10937 17.8672 8.92969 17.3594 9.39844Z" fill="#fff" />
                      </svg>
                    </div>
                  </a>
                </li>
                <li>
                  <a href='single-blog.html'>
                    Cloud Solutions
                    <div class="techin-blog-meta-btn">
                      <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.3594 9.39844L11.1094 15.6484C10.6406 16.1562 9.82031 16.1562 9.35156 15.6484C8.84375 15.1797 8.84375 14.3594 9.35156 13.8906L13.4531 9.75L1.5 9.75C0.796875 9.75 0.25 9.20312 0.25 8.5C0.25 7.83594 0.796875 7.25 1.5 7.25L13.4531 7.25L9.35156 3.14844C8.84375 2.67969 8.84375 1.85937 9.35156 1.39062C9.82031 0.882812 10.6406 0.882812 11.1094 1.39062L17.3594 7.64062C17.8672 8.10937 17.8672 8.92969 17.3594 9.39844Z" fill="#fff" />
                      </svg>
                    </div>
                  </a>
                </li>
                <li>
                  <a href='single-blog.html'>
                    Cybersecurity
                    <div class="techin-blog-meta-btn">
                      <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.3594 9.39844L11.1094 15.6484C10.6406 16.1562 9.82031 16.1562 9.35156 15.6484C8.84375 15.1797 8.84375 14.3594 9.35156 13.8906L13.4531 9.75L1.5 9.75C0.796875 9.75 0.25 9.20312 0.25 8.5C0.25 7.83594 0.796875 7.25 1.5 7.25L13.4531 7.25L9.35156 3.14844C8.84375 2.67969 8.84375 1.85937 9.35156 1.39062C9.82031 0.882812 10.6406 0.882812 11.1094 1.39062L17.3594 7.64062C17.8672 8.10937 17.8672 8.92969 17.3594 9.39844Z" fill="#fff" />
                      </svg>
                    </div>
                  </a>
                </li>
                <li>
                  <a href='single-blog.html'>
                    IT Consulting & Strategy
                    <div class="techin-blog-meta-btn">
                      <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.3594 9.39844L11.1094 15.6484C10.6406 16.1562 9.82031 16.1562 9.35156 15.6484C8.84375 15.1797 8.84375 14.3594 9.35156 13.8906L13.4531 9.75L1.5 9.75C0.796875 9.75 0.25 9.20312 0.25 8.5C0.25 7.83594 0.796875 7.25 1.5 7.25L13.4531 7.25L9.35156 3.14844C8.84375 2.67969 8.84375 1.85937 9.35156 1.39062C9.82031 0.882812 10.6406 0.882812 11.1094 1.39062L17.3594 7.64062C17.8672 8.10937 17.8672 8.92969 17.3594 9.39844Z" fill="#fff" />
                      </svg>
                    </div>
                  </a>
                </li>
                <li>
                  <a href='single-blog.html'>
                    Data Backup & Recovery
                    <div class="techin-blog-meta-btn">
                      <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.3594 9.39844L11.1094 15.6484C10.6406 16.1562 9.82031 16.1562 9.35156 15.6484C8.84375 15.1797 8.84375 14.3594 9.35156 13.8906L13.4531 9.75L1.5 9.75C0.796875 9.75 0.25 9.20312 0.25 8.5C0.25 7.83594 0.796875 7.25 1.5 7.25L13.4531 7.25L9.35156 3.14844C8.84375 2.67969 8.84375 1.85937 9.35156 1.39062C9.82031 0.882812 10.6406 0.882812 11.1094 1.39062L17.3594 7.64062C17.8672 8.10937 17.8672 8.92969 17.3594 9.39844Z" fill="#fff" />
                      </svg>
                    </div>
                  </a>
                </li>
                <li>
                  <a href='single-blog.html'>
                    Software Development
                    <div class="techin-blog-meta-btn">
                      <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.3594 9.39844L11.1094 15.6484C10.6406 16.1562 9.82031 16.1562 9.35156 15.6484C8.84375 15.1797 8.84375 14.3594 9.35156 13.8906L13.4531 9.75L1.5 9.75C0.796875 9.75 0.25 9.20312 0.25 8.5C0.25 7.83594 0.796875 7.25 1.5 7.25L13.4531 7.25L9.35156 3.14844C8.84375 2.67969 8.84375 1.85937 9.35156 1.39062C9.82031 0.882812 10.6406 0.882812 11.1094 1.39062L17.3594 7.64062C17.8672 8.10937 17.8672 8.92969 17.3594 9.39844Z" fill="#fff" />
                      </svg>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
            <div class="widget widget_tag_cloud blog-update">
              <h4>Get Updates</h4>
              <img src="assets/images/blog/line2.svg" alt="">
              <div class="update-content">
                <p>Subscribe email and get recent news and updates or offers.</p>
              </div>
              <form class="input-form">
                <input type="email" placeholder="Email address...">
                <button type="submit">Search</button>
              </form>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </section>



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
