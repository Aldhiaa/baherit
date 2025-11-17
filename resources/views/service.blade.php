@extends('layouts.app')

@section('content')
  <div class="techin-header-search-section">
    <div class="container">
      <div class="techin-header-search-box">
        <input type="search" placeholder="Search here...">
        <button id="header-search" type="button"><i class="ri-search-line"></i></button>
        <p>Type above and press Enter to search. Press Close to cancel.</p>
      </div>
    </div>
    <div class="techin-header-search-close">
      <i class="ri-close-line"></i>
    </div>
  </div>
  <div class="search-overlay"></div>
  <!--End landex-header-section -->

  <!-- strat sidebar menu -->

  <div class="techin-sidemenu-wraper">
    <div class="techin-sidemenu-column">
      <div class="techin-sidemenu-body">
        <div class="techin-sidemenu-logo">
          <a href='index.html'>
            <img src="{{ asset('assets/images/logo/logo1.svg') }}" alt="">
          </a>
        </div>
        <p>“TechIN completely transformed our IT infrastructure. Their team was knowledgeable, responsive, and solutions that improved our efficiency. Highly recommended!”</p>
        <div class="techin-sidemenu-thumb">
          <img src="{{ asset('assets/images/blog/img15.png') }}" alt="">
        </div>
        <div class="techin-contact-info-wrap">
          <div class="techin-contact-info">
            <i class="ri-map-pin-2-fill"></i>
            <h5>Address</h5>
            <p>12th Street, New York, USA</p>
          </div>
          <div class="techin-contact-info">
            <a href="mailto:name@gmail.com">
              <img src="assets/images/blog/gmail.svg" alt="">
              <h5>Contact</h5>
              <p>info@techin.com</p>
            </a>
          </div>
        </div>
        <div class="techin-header-social">
          <ul>
            <li>
              <a href="https://www.facebook.com/">
                <i class="ri-facebook-fill"></i>
              </a>
            </li>
            <li>
              <a href="https://www.twitter.com/">
                <i class="ri-twitter-fill"></i>
              </a>
            </li>
            <li>
              <a href="https://www.instagram.com/">
                <svg width="16" height="16" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M6.5 3.60547C8.22266 3.60547 9.64453 5.02734 9.64453 6.75C9.64453 8.5 8.22266 9.89453 6.5 9.89453C4.75 9.89453 3.35547 8.5 3.35547 6.75C3.35547 5.02734 4.75 3.60547 6.5 3.60547ZM6.5 8.80078C7.62109 8.80078 8.52344 7.89844 8.52344 6.75C8.52344 5.62891 7.62109 4.72656 6.5 4.72656C5.35156 4.72656 4.44922 5.62891 4.44922 6.75C4.44922 7.89844 5.37891 8.80078 6.5 8.80078ZM10.4922 3.49609C10.4922 3.08594 10.1641 2.75781 9.75391 2.75781C9.34375 2.75781 9.01562 3.08594 9.01562 3.49609C9.01562 3.90625 9.34375 4.23438 9.75391 4.23438C10.1641 4.23438 10.4922 3.90625 10.4922 3.49609ZM12.5703 4.23438C12.625 5.24609 12.625 8.28125 12.5703 9.29297C12.5156 10.2773 12.2969 11.125 11.5859 11.8633C10.875 12.5742 10 12.793 9.01562 12.8477C8.00391 12.9023 4.96875 12.9023 3.95703 12.8477C2.97266 12.793 2.125 12.5742 1.38672 11.8633C0.675781 11.125 0.457031 10.2773 0.402344 9.29297C0.347656 8.28125 0.347656 5.24609 0.402344 4.23438C0.457031 3.25 0.675781 2.375 1.38672 1.66406C2.125 0.953125 2.97266 0.734375 3.95703 0.679688C4.96875 0.625 8.00391 0.625 9.01562 0.679688C10 0.734375 10.875 0.953125 11.5859 1.66406C12.2969 2.375 12.5156 3.25 12.5703 4.23438ZM11.2578 10.3594C11.5859 9.56641 11.5039 7.65234 11.5039 6.75C11.5039 5.875 11.5859 3.96094 11.2578 3.14062C11.0391 2.62109 10.6289 2.18359 10.1094 1.99219C9.28906 1.66406 7.375 1.74609 6.5 1.74609C5.59766 1.74609 3.68359 1.66406 2.89062 1.99219C2.34375 2.21094 1.93359 2.62109 1.71484 3.14062C1.38672 3.96094 1.46875 5.875 1.46875 6.75C1.46875 7.65234 1.38672 9.56641 1.71484 10.3594C1.93359 10.9062 2.34375 11.3164 2.89062 11.5352C3.68359 11.8633 5.59766 11.7812 6.5 11.7812C7.375 11.7812 9.28906 11.8633 10.1094 11.5352C10.6289 11.3164 11.0664 10.9062 11.2578 10.3594Z" fill="white" />
                </svg>
              </a>
            </li>
            <li>
              <a href="https://www.pinterest.com/">
                <svg width="12" height="16" viewBox="0 0 11 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5.82812 0.941406C8.39844 0.941406 10.75 2.71875 10.75 5.42578C10.75 7.96875 9.4375 10.8125 6.53906 10.8125C5.82812 10.8125 4.98047 10.457 4.625 9.82812C4.02344 12.2891 4.05078 12.6719 2.68359 14.5586C2.54688 14.6133 2.57422 14.6133 2.49219 14.5039C2.4375 13.9844 2.38281 13.4922 2.38281 12.9727C2.38281 11.3047 3.14844 8.87109 3.53125 7.25781C3.3125 6.82031 3.25781 6.32812 3.25781 5.86328C3.25781 3.67578 5.82812 3.34766 5.82812 5.15234C5.82812 6.21875 5.08984 7.23047 5.08984 8.26953C5.08984 8.95312 5.69141 9.44531 6.375 9.44531C8.26172 9.44531 8.83594 6.73828 8.83594 5.28906C8.83594 3.34766 7.46875 2.28125 5.58203 2.28125C3.42188 2.28125 1.75391 3.83984 1.75391 6.02734C1.75391 7.09375 2.41016 7.64062 2.41016 7.88672C2.41016 8.10547 2.24609 8.84375 1.97266 8.84375C1.31641 8.84375 0.25 7.75 0.25 5.83594C0.25 2.80078 3.01172 0.941406 5.82812 0.941406Z" fill="white" />
                </svg>
              </a>
            </li>
          </ul>
        </div>
        <span class="techin-sidemenu-close">
        <i class="ri-close-line"></i>
      </span>
      </div>
    </div>
    <div class="offcanvas-overlay"></div>
    <div class="offcanves-menu"></div>
  </div>

  <div class="breadcrumb-wrapper" style="background-image: url(assets/images/blog/blog-thumb.png)">
    <div class="container">

      <div class="breadcrumb-content">
        <h1 class="breadcrumb-title">Services</h1>
        <div class="breadcrumb-menu-wrapper">
          <div class="breadcrumb-menu-wrap">
            <div class="breadcrumb-menu">
              <ul>
                <li><a href='index.html'>Home</a></li>
                <li><img src="assets/images/breadcrumb/line.svg" alt="right-arrow"></li>
                <li aria-current="page">Services</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- End breadcrumb -->

  <div class="techin-section-padding2">
    <div class="container">
      <div class="techin-section-title center">
        <div class="techin-title-tag center2">
          <span><img src="assets/images/v1/shape1.svg" alt=""></span>
          <h6>Working Process</h6>
          <span><img src="assets/images/v1/shape1.svg" alt=""></span>
        </div>
        <h2>Our Unique And Awesome Services</h2>
      </div>
      <div class="row">
        <div class="col-xl-4 col-md-6">
          <div class="techin-service-wrap2 wrap3">
            <div class="techin-service-thumb">
              <img src="assets/images/v2/s1.png" alt="">
              <div class="techin-service-icon2">
                <img src="assets/images/v2/icon4.svg" alt="">
              </div>
            </div>
            <div class="techin-service-content2">
              <h5>IT Management</h5>
              <p>Comprehensive management of your IT infrastructure, network monitoring, security, minimal downtime.</p>
              <a class='techin-default-btn techin-service-btn' data-text='Read More' href='about-us.html'>
                <span class="button-wraper">Read More</span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-6">
          <div class="techin-service-wrap2 wrap3">
            <div class="techin-service-thumb">
              <img src="assets/images/v2/s2.png" alt="">
              <div class="techin-service-icon2">
                <img src="assets/images/v2/icon5.svg" alt="">
              </div>
            </div>
            <div class="techin-service-content2">
              <h5>Cloud Solutions</h5>
              <p>Design, deployment, and management of cloud tailored to your business needs, scalability, flexibility, and cost-efficiency.</p>
              <a class='techin-default-btn techin-service-btn' data-text='Read More' href='about-us.html'>
                <span class="button-wraper">Read More</span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-6">
          <div class="techin-service-wrap2 wrap3">
            <div class="techin-service-thumb">
              <img src="assets/images/v2/s3.png" alt="">
              <div class="techin-service-icon2">
                <img src="assets/images/v2/icon6.svg" alt="">
              </div>
            </div>
            <div class="techin-service-content2">
              <h5>Cybersecurity</h5>
              <p>Protection of your digital assets through security measures, encryption to safeguard against cyber threats.</p>
              <a class='techin-default-btn techin-service-btn' data-text='Read More' href='about-us.html'>
                <span class="button-wraper">Read More</span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-6">
          <div class="techin-service-wrap2 wrap3">
            <div class="techin-service-thumb">
              <img src="assets/images/about-us/img1.png" alt="">
              <div class="techin-service-icon2">
                <img src="assets/images/about-us/icon1.svg" alt="">
              </div>
            </div>
            <div class="techin-service-content2">
              <h5>IT Consulting & Strategy</h5>
              <p>Expert IT consultation to develop tailored strategies for digital transformation, optimizing your technology for growth.</p>
              <a class='techin-default-btn techin-service-btn' data-text='Read More' href='about-us.html'>
                <span class="button-wraper">Read More</span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-6">
          <div class="techin-service-wrap2 wrap3">
            <div class="techin-service-thumb">
              <img src="assets/images/about-us/img2.png" alt="">
              <div class="techin-service-icon2">
                <img src="assets/images/about-us/icon2.svg" alt="">
              </div>
            </div>
            <div class="techin-service-content2">
              <h5>Data Backup & Recovery</h5>
              <p>Reliable data backup and disaster recovery solutions to ensure business continuity in the face of unexpected events.</p>
              <a class='techin-default-btn techin-service-btn' data-text='Read More' href='about-us.html'>
                <span class="button-wraper">Read More</span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-6">
          <div class="techin-service-wrap2 wrap3">
            <div class="techin-service-thumb">
              <img src="assets/images/about-us/img3.png" alt="">
              <div class="techin-service-icon2">
                <img src="assets/images/about-us/icon3.svg" alt="">
              </div>
            </div>
            <div class="techin-service-content2">
              <h5>Software Development</h5>
              <p>Custom software solutions designed to meet your unique business requirements, from development to deployment.</p>
              <a class='techin-default-btn techin-service-btn' data-text='Read More' href='about-us.html'>
                <span class="button-wraper">Read More</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end -->

  <section class="techin-section-padding2 light-bg1">
    <div class="container">
      <div class="techin-section-title">
        <div class="row">
          <div class="col-xl-6 col-lg-8">
            <div class="techin-title-tag">
              <span><img src="assets/images/v1/shape1.svg" alt=""></span>
              <h6>Testimonials</h6>
              <span><img src="assets/images/v1/shape1.svg" alt=""></span>
            </div>
            <h2>Here Is Some Nice Client’s Feedback & Review</h2>
          </div>
          <div class="col-xl-6 col-lg-4 d-flex justify-content-end align-items-center">
          </div>
        </div>
      </div>
      <div class="techin-three-column">
        <div class="techin-t-slider-item">
          <div class="techin-t-slider-author-wrap">
            <div class="techin-t-slider-author-thumb">
              <img src="assets/images/v3/Img2.png" alt="">
            </div>
            <div class="techin-t-slider-author-data">
              <h6>Michael Parker</h6>
              <p>Tech Startup Founder</p>
              <div class="techin-t-ratting2">
                <svg width="116" height="19" viewBox="0 0 116 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11.2844 0.882812L13.5695 5.55859L18.5969 6.29688C19.0187 6.36719 19.3703 6.64844 19.5109 7.07031C19.6516 7.45703 19.5461 7.91406 19.2297 8.19531L15.5734 11.8164L16.4523 16.9492C16.5227 17.3711 16.3469 17.793 15.9953 18.0391C15.6437 18.3203 15.1867 18.3203 14.8 18.1445L10.3 15.7188L5.76484 18.1445C5.41328 18.3203 4.95625 18.3203 4.60469 18.0391C4.25312 17.793 4.07734 17.3711 4.14766 16.9492L4.99141 11.8164L1.33516 8.19531C1.05391 7.91406 0.948437 7.45703 1.05391 7.07031C1.19453 6.64844 1.54609 6.36719 1.96797 6.29688L7.03047 5.55859L9.28047 0.882812C9.45625 0.496094 9.84297 0.25 10.3 0.25C10.7219 0.25 11.1086 0.496094 11.2844 0.882812ZM35.1344 0.882812L37.4195 5.55859L42.4469 6.29688C42.8687 6.36719 43.2203 6.64844 43.3609 7.07031C43.5016 7.45703 43.3961 7.91406 43.0797 8.19531L39.4234 11.8164L40.3023 16.9492C40.3727 17.3711 40.1969 17.793 39.8453 18.0391C39.4937 18.3203 39.0367 18.3203 38.65 18.1445L34.15 15.7188L29.6148 18.1445C29.2633 18.3203 28.8062 18.3203 28.4547 18.0391C28.1031 17.793 27.9273 17.3711 27.9977 16.9492L28.8414 11.8164L25.1852 8.19531C24.9039 7.91406 24.7984 7.45703 24.9039 7.07031C25.0445 6.64844 25.3961 6.36719 25.818 6.29688L30.8805 5.55859L33.1305 0.882812C33.3062 0.496094 33.693 0.25 34.15 0.25C34.5719 0.25 34.9586 0.496094 35.1344 0.882812ZM58.9844 0.882812L61.2695 5.55859L66.2969 6.29688C66.7188 6.36719 67.0703 6.64844 67.2109 7.07031C67.3516 7.45703 67.2461 7.91406 66.9297 8.19531L63.2734 11.8164L64.1523 16.9492C64.2227 17.3711 64.0469 17.793 63.6953 18.0391C63.3438 18.3203 62.8867 18.3203 62.5 18.1445L58 15.7188L53.4648 18.1445C53.1133 18.3203 52.6562 18.3203 52.3047 18.0391C51.9531 17.793 51.7773 17.3711 51.8477 16.9492L52.6914 11.8164L49.0352 8.19531C48.7539 7.91406 48.6484 7.45703 48.7539 7.07031C48.8945 6.64844 49.2461 6.36719 49.668 6.29688L54.7305 5.55859L56.9805 0.882812C57.1562 0.496094 57.543 0.25 58 0.25C58.4219 0.25 58.8086 0.496094 58.9844 0.882812ZM82.8344 0.882812L85.1195 5.55859L90.1469 6.29688C90.5688 6.36719 90.9203 6.64844 91.0609 7.07031C91.2016 7.45703 91.0961 7.91406 90.7797 8.19531L87.1234 11.8164L88.0023 16.9492C88.0727 17.3711 87.8969 17.793 87.5453 18.0391C87.1938 18.3203 86.7367 18.3203 86.35 18.1445L81.85 15.7188L77.3148 18.1445C76.9633 18.3203 76.5063 18.3203 76.1547 18.0391C75.8031 17.793 75.6273 17.3711 75.6977 16.9492L76.5414 11.8164L72.8852 8.19531C72.6039 7.91406 72.4984 7.45703 72.6039 7.07031C72.7445 6.64844 73.0961 6.36719 73.518 6.29688L78.5805 5.55859L80.8305 0.882812C81.0063 0.496094 81.393 0.25 81.85 0.25C82.2719 0.25 82.6586 0.496094 82.8344 0.882812ZM106.684 0.882812L108.97 5.55859L113.997 6.29688C114.419 6.36719 114.77 6.64844 114.911 7.07031C115.052 7.45703 114.946 7.91406 114.63 8.19531L110.973 11.8164L111.852 16.9492C111.923 17.3711 111.747 17.793 111.395 18.0391C111.044 18.3203 110.587 18.3203 110.2 18.1445L105.7 15.7188L101.165 18.1445C100.813 18.3203 100.356 18.3203 100.005 18.0391C99.6531 17.793 99.4773 17.3711 99.5477 16.9492L100.391 11.8164L96.7352 8.19531C96.4539 7.91406 96.3484 7.45703 96.4539 7.07031C96.5945 6.64844 96.9461 6.36719 97.368 6.29688L102.43 5.55859L104.68 0.882812C104.856 0.496094 105.243 0.25 105.7 0.25C106.122 0.25 106.509 0.496094 106.684 0.882812Z" fill="#2BC8EB" />
                </svg>
              </div>
            </div>
          </div>
          <p class="text">“Thanks to TechIN, our company has seen a major improvement in network performance and security. They truly understand our business needs and deliver beyond expectations.”</p>
          <div class="techin-t-shape">
            <img src="assets/images/v3/icon1.svg" alt="">
          </div>
        </div>
        <div class="techin-t-slider-item">
          <div class="techin-t-slider-author-wrap">
            <div class="techin-t-slider-author-thumb">
              <img src="assets/images/v3/Img3.png" alt="">
            </div>
            <div class="techin-t-slider-author-data">
              <h6>James Rabishaw</h6>
              <p>Financial Services Executive</p>
              <div class="techin-t-ratting2">
                <svg width="116" height="19" viewBox="0 0 116 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11.2844 0.882812L13.5695 5.55859L18.5969 6.29688C19.0187 6.36719 19.3703 6.64844 19.5109 7.07031C19.6516 7.45703 19.5461 7.91406 19.2297 8.19531L15.5734 11.8164L16.4523 16.9492C16.5227 17.3711 16.3469 17.793 15.9953 18.0391C15.6437 18.3203 15.1867 18.3203 14.8 18.1445L10.3 15.7188L5.76484 18.1445C5.41328 18.3203 4.95625 18.3203 4.60469 18.0391C4.25312 17.793 4.07734 17.3711 4.14766 16.9492L4.99141 11.8164L1.33516 8.19531C1.05391 7.91406 0.948437 7.45703 1.05391 7.07031C1.19453 6.64844 1.54609 6.36719 1.96797 6.29688L7.03047 5.55859L9.28047 0.882812C9.45625 0.496094 9.84297 0.25 10.3 0.25C10.7219 0.25 11.1086 0.496094 11.2844 0.882812ZM35.1344 0.882812L37.4195 5.55859L42.4469 6.29688C42.8687 6.36719 43.2203 6.64844 43.3609 7.07031C43.5016 7.45703 43.3961 7.91406 43.0797 8.19531L39.4234 11.8164L40.3023 16.9492C40.3727 17.3711 40.1969 17.793 39.8453 18.0391C39.4937 18.3203 39.0367 18.3203 38.65 18.1445L34.15 15.7188L29.6148 18.1445C29.2633 18.3203 28.8062 18.3203 28.4547 18.0391C28.1031 17.793 27.9273 17.3711 27.9977 16.9492L28.8414 11.8164L25.1852 8.19531C24.9039 7.91406 24.7984 7.45703 24.9039 7.07031C25.0445 6.64844 25.3961 6.36719 25.818 6.29688L30.8805 5.55859L33.1305 0.882812C33.3062 0.496094 33.693 0.25 34.15 0.25C34.5719 0.25 34.9586 0.496094 35.1344 0.882812ZM58.9844 0.882812L61.2695 5.55859L66.2969 6.29688C66.7188 6.36719 67.0703 6.64844 67.2109 7.07031C67.3516 7.45703 67.2461 7.91406 66.9297 8.19531L63.2734 11.8164L64.1523 16.9492C64.2227 17.3711 64.0469 17.793 63.6953 18.0391C63.3438 18.3203 62.8867 18.3203 62.5 18.1445L58 15.7188L53.4648 18.1445C53.1133 18.3203 52.6562 18.3203 52.3047 18.0391C51.9531 17.793 51.7773 17.3711 51.8477 16.9492L52.6914 11.8164L49.0352 8.19531C48.7539 7.91406 48.6484 7.45703 48.7539 7.07031C48.8945 6.64844 49.2461 6.36719 49.668 6.29688L54.7305 5.55859L56.9805 0.882812C57.1562 0.496094 57.543 0.25 58 0.25C58.4219 0.25 58.8086 0.496094 58.9844 0.882812ZM82.8344 0.882812L85.1195 5.55859L90.1469 6.29688C90.5688 6.36719 90.9203 6.64844 91.0609 7.07031C91.2016 7.45703 91.0961 7.91406 90.7797 8.19531L87.1234 11.8164L88.0023 16.9492C88.0727 17.3711 87.8969 17.793 87.5453 18.0391C87.1938 18.3203 86.7367 18.3203 86.35 18.1445L81.85 15.7188L77.3148 18.1445C76.9633 18.3203 76.5063 18.3203 76.1547 18.0391C75.8031 17.793 75.6273 17.3711 75.6977 16.9492L76.5414 11.8164L72.8852 8.19531C72.6039 7.91406 72.4984 7.45703 72.6039 7.07031C72.7445 6.64844 73.0961 6.36719 73.518 6.29688L78.5805 5.55859L80.8305 0.882812C81.0063 0.496094 81.393 0.25 81.85 0.25C82.2719 0.25 82.6586 0.496094 82.8344 0.882812ZM106.684 0.882812L108.97 5.55859L113.997 6.29688C114.419 6.36719 114.77 6.64844 114.911 7.07031C115.052 7.45703 114.946 7.91406 114.63 8.19531L110.973 11.8164L111.852 16.9492C111.923 17.3711 111.747 17.793 111.395 18.0391C111.044 18.3203 110.587 18.3203 110.2 18.1445L105.7 15.7188L101.165 18.1445C100.813 18.3203 100.356 18.3203 100.005 18.0391C99.6531 17.793 99.4773 17.3711 99.5477 16.9492L100.391 11.8164L96.7352 8.19531C96.4539 7.91406 96.3484 7.45703 96.4539 7.07031C96.5945 6.64844 96.9461 6.36719 97.368 6.29688L102.43 5.55859L104.68 0.882812C104.856 0.496094 105.243 0.25 105.7 0.25C106.122 0.25 106.509 0.496094 106.684 0.882812Z" fill="#2BC8EB" />
                </svg>
              </div>
            </div>
          </div>
          <p class="text">“We’ve been relying on TechIN for our IT needs for over a year now. Their cybersecurity solutions have kept us secure and ahead of potential threats. A fantastic company to work with!”</p>
          <div class="techin-t-shape">
            <img src="assets/images/v3/icon1.svg" alt="">
          </div>
        </div>
        <div class="techin-t-slider-item">
          <div class="techin-t-slider-author-wrap">
            <div class="techin-t-slider-author-thumb">
              <img src="assets/images/v3/Img2.png" alt="">
            </div>
            <div class="techin-t-slider-author-data">
              <h6>James Rabishaw</h6>
              <p>Financial Services Executive</p>
              <div class="techin-t-ratting2">
                <svg width="116" height="19" viewBox="0 0 116 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11.2844 0.882812L13.5695 5.55859L18.5969 6.29688C19.0187 6.36719 19.3703 6.64844 19.5109 7.07031C19.6516 7.45703 19.5461 7.91406 19.2297 8.19531L15.5734 11.8164L16.4523 16.9492C16.5227 17.3711 16.3469 17.793 15.9953 18.0391C15.6437 18.3203 15.1867 18.3203 14.8 18.1445L10.3 15.7188L5.76484 18.1445C5.41328 18.3203 4.95625 18.3203 4.60469 18.0391C4.25312 17.793 4.07734 17.3711 4.14766 16.9492L4.99141 11.8164L1.33516 8.19531C1.05391 7.91406 0.948437 7.45703 1.05391 7.07031C1.19453 6.64844 1.54609 6.36719 1.96797 6.29688L7.03047 5.55859L9.28047 0.882812C9.45625 0.496094 9.84297 0.25 10.3 0.25C10.7219 0.25 11.1086 0.496094 11.2844 0.882812ZM35.1344 0.882812L37.4195 5.55859L42.4469 6.29688C42.8687 6.36719 43.2203 6.64844 43.3609 7.07031C43.5016 7.45703 43.3961 7.91406 43.0797 8.19531L39.4234 11.8164L40.3023 16.9492C40.3727 17.3711 40.1969 17.793 39.8453 18.0391C39.4937 18.3203 39.0367 18.3203 38.65 18.1445L34.15 15.7188L29.6148 18.1445C29.2633 18.3203 28.8062 18.3203 28.4547 18.0391C28.1031 17.793 27.9273 17.3711 27.9977 16.9492L28.8414 11.8164L25.1852 8.19531C24.9039 7.91406 24.7984 7.45703 24.9039 7.07031C25.0445 6.64844 25.3961 6.36719 25.818 6.29688L30.8805 5.55859L33.1305 0.882812C33.3062 0.496094 33.693 0.25 34.15 0.25C34.5719 0.25 34.9586 0.496094 35.1344 0.882812ZM58.9844 0.882812L61.2695 5.55859L66.2969 6.29688C66.7188 6.36719 67.0703 6.64844 67.2109 7.07031C67.3516 7.45703 67.2461 7.91406 66.9297 8.19531L63.2734 11.8164L64.1523 16.9492C64.2227 17.3711 64.0469 17.793 63.6953 18.0391C63.3438 18.3203 62.8867 18.3203 62.5 18.1445L58 15.7188L53.4648 18.1445C53.1133 18.3203 52.6562 18.3203 52.3047 18.0391C51.9531 17.793 51.7773 17.3711 51.8477 16.9492L52.6914 11.8164L49.0352 8.19531C48.7539 7.91406 48.6484 7.45703 48.7539 7.07031C48.8945 6.64844 49.2461 6.36719 49.668 6.29688L54.7305 5.55859L56.9805 0.882812C57.1562 0.496094 57.543 0.25 58 0.25C58.4219 0.25 58.8086 0.496094 58.9844 0.882812ZM82.8344 0.882812L85.1195 5.55859L90.1469 6.29688C90.5688 6.36719 90.9203 6.64844 91.0609 7.07031C91.2016 7.45703 91.0961 7.91406 90.7797 8.19531L87.1234 11.8164L88.0023 16.9492C88.0727 17.3711 87.8969 17.793 87.5453 18.0391C87.1938 18.3203 86.7367 18.3203 86.35 18.1445L81.85 15.7188L77.3148 18.1445C76.9633 18.3203 76.5063 18.3203 76.1547 18.0391C75.8031 17.793 75.6273 17.3711 75.6977 16.9492L76.5414 11.8164L72.8852 8.19531C72.6039 7.91406 72.4984 7.45703 72.6039 7.07031C72.7445 6.64844 73.0961 6.36719 73.518 6.29688L78.5805 5.55859L80.8305 0.882812C81.0063 0.496094 81.393 0.25 81.85 0.25C82.2719 0.25 82.6586 0.496094 82.8344 0.882812ZM106.684 0.882812L108.97 5.55859L113.997 6.29688C114.419 6.36719 114.77 6.64844 114.911 7.07031C115.052 7.45703 114.946 7.91406 114.63 8.19531L110.973 11.8164L111.852 16.9492C111.923 17.3711 111.747 17.793 111.395 18.0391C111.044 18.3203 110.587 18.3203 110.2 18.1445L105.7 15.7188L101.165 18.1445C100.813 18.3203 100.356 18.3203 100.005 18.0391C99.6531 17.793 99.4773 17.3711 99.5477 16.9492L100.391 11.8164L96.7352 8.19531C96.4539 7.91406 96.3484 7.45703 96.4539 7.07031C96.5945 6.64844 96.9461 6.36719 97.368 6.29688L102.43 5.55859L104.68 0.882812C104.856 0.496094 105.243 0.25 105.7 0.25C106.122 0.25 106.509 0.496094 106.684 0.882812Z" fill="#2BC8EB" />
                </svg>
              </div>
            </div>
          </div>
          <p class="text">““We’ve been relying on TechIN for our IT needs for over a year now. Their cybersecurity solutions have kept us secure and ahead of potential threats. A fantastic company to work with!”</p>
          <div class="techin-t-shape">
            <img src="assets/images/v3/icon1.svg" alt="">
          </div>
        </div>
        <div class="techin-t-slider-item">
          <div class="techin-t-slider-author-wrap">
            <div class="techin-t-slider-author-thumb">
              <img src="assets/images/v3/Img1.png" alt="">
            </div>
            <div class="techin-t-slider-author-data">
              <h6>Laura McAlister</h6>
              <p>Tech Startup Founder</p>
              <div class="techin-t-ratting2">
                <svg width="116" height="19" viewBox="0 0 116 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11.2844 0.882812L13.5695 5.55859L18.5969 6.29688C19.0187 6.36719 19.3703 6.64844 19.5109 7.07031C19.6516 7.45703 19.5461 7.91406 19.2297 8.19531L15.5734 11.8164L16.4523 16.9492C16.5227 17.3711 16.3469 17.793 15.9953 18.0391C15.6437 18.3203 15.1867 18.3203 14.8 18.1445L10.3 15.7188L5.76484 18.1445C5.41328 18.3203 4.95625 18.3203 4.60469 18.0391C4.25312 17.793 4.07734 17.3711 4.14766 16.9492L4.99141 11.8164L1.33516 8.19531C1.05391 7.91406 0.948437 7.45703 1.05391 7.07031C1.19453 6.64844 1.54609 6.36719 1.96797 6.29688L7.03047 5.55859L9.28047 0.882812C9.45625 0.496094 9.84297 0.25 10.3 0.25C10.7219 0.25 11.1086 0.496094 11.2844 0.882812ZM35.1344 0.882812L37.4195 5.55859L42.4469 6.29688C42.8687 6.36719 43.2203 6.64844 43.3609 7.07031C43.5016 7.45703 43.3961 7.91406 43.0797 8.19531L39.4234 11.8164L40.3023 16.9492C40.3727 17.3711 40.1969 17.793 39.8453 18.0391C39.4937 18.3203 39.0367 18.3203 38.65 18.1445L34.15 15.7188L29.6148 18.1445C29.2633 18.3203 28.8062 18.3203 28.4547 18.0391C28.1031 17.793 27.9273 17.3711 27.9977 16.9492L28.8414 11.8164L25.1852 8.19531C24.9039 7.91406 24.7984 7.45703 24.9039 7.07031C25.0445 6.64844 25.3961 6.36719 25.818 6.29688L30.8805 5.55859L33.1305 0.882812C33.3062 0.496094 33.693 0.25 34.15 0.25C34.5719 0.25 34.9586 0.496094 35.1344 0.882812ZM58.9844 0.882812L61.2695 5.55859L66.2969 6.29688C66.7188 6.36719 67.0703 6.64844 67.2109 7.07031C67.3516 7.45703 67.2461 7.91406 66.9297 8.19531L63.2734 11.8164L64.1523 16.9492C64.2227 17.3711 64.0469 17.793 63.6953 18.0391C63.3438 18.3203 62.8867 18.3203 62.5 18.1445L58 15.7188L53.4648 18.1445C53.1133 18.3203 52.6562 18.3203 52.3047 18.0391C51.9531 17.793 51.7773 17.3711 51.8477 16.9492L52.6914 11.8164L49.0352 8.19531C48.7539 7.91406 48.6484 7.45703 48.7539 7.07031C48.8945 6.64844 49.2461 6.36719 49.668 6.29688L54.7305 5.55859L56.9805 0.882812C57.1562 0.496094 57.543 0.25 58 0.25C58.4219 0.25 58.8086 0.496094 58.9844 0.882812ZM82.8344 0.882812L85.1195 5.55859L90.1469 6.29688C90.5688 6.36719 90.9203 6.64844 91.0609 7.07031C91.2016 7.45703 91.0961 7.91406 90.7797 8.19531L87.1234 11.8164L88.0023 16.9492C88.0727 17.3711 87.8969 17.793 87.5453 18.0391C87.1938 18.3203 86.7367 18.3203 86.35 18.1445L81.85 15.7188L77.3148 18.1445C76.9633 18.3203 76.5063 18.3203 76.1547 18.0391C75.8031 17.793 75.6273 17.3711 75.6977 16.9492L76.5414 11.8164L72.8852 8.19531C72.6039 7.91406 72.4984 7.45703 72.6039 7.07031C72.7445 6.64844 73.0961 6.36719 73.518 6.29688L78.5805 5.55859L80.8305 0.882812C81.0063 0.496094 81.393 0.25 81.85 0.25C82.2719 0.25 82.6586 0.496094 82.8344 0.882812ZM106.684 0.882812L108.97 5.55859L113.997 6.29688C114.419 6.36719 114.77 6.64844 114.911 7.07031C115.052 7.45703 114.946 7.91406 114.63 8.19531L110.973 11.8164L111.852 16.9492C111.923 17.3711 111.747 17.793 111.395 18.0391C111.044 18.3203 110.587 18.3203 110.2 18.1445L105.7 15.7188L101.165 18.1445C100.813 18.3203 100.356 18.3203 100.005 18.0391C99.6531 17.793 99.4773 17.3711 99.5477 16.9492L100.391 11.8164L96.7352 8.19531C96.4539 7.91406 96.3484 7.45703 96.4539 7.07031C96.5945 6.64844 96.9461 6.36719 97.368 6.29688L102.43 5.55859L104.68 0.882812C104.856 0.496094 105.243 0.25 105.7 0.25C106.122 0.25 106.509 0.496094 106.684 0.882812Z" fill="#2BC8EB" />
                </svg>
              </div>
            </div>
          </div>
          <p class="text">“TechIN completely transformed our IT infrastructure. Their team was knowledgeable, responsive, and provided solutions that significantly improved our efficiency. Highly recommended!”</p>
          <div class="techin-t-shape">
            <img src="assets/images/v3/icon1.svg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end testimonial -->

  <section class="techin-section-padding4 section" style="background-image: url(assets/images/v1/pricing-bg.png);">
    <div class="container">
      <div class="techin-section-title techin-pricing">
        <div class="row">
          <div class="col-xl-6 col-lg-8">
            <div class="techin-title-tag pricing-v1">
              <span><img src="assets/images/v1/shape2.svg" alt=""></span>
              <h6>Our Price</h6>
              <span><img src="assets/images/v1/shape2.svg" alt=""></span>
            </div>
            <h2>Choose Our Awesome Pricing Plan</h2>
          </div>
          <div class="col-xl-6 col-lg-4 d-flex justify-content-end align-items-center">
            <div class="techin-title-btn2">
              <label for="toggle" class="toggle-switch">
                <input class="toggle-button" id="toggle" type="checkbox" name="toggle" data-checked="coreAnnuallyPrice,coreAnnuallyText" data-not-checked="coreMonthlyPrice,coreMonthlyText">
                <span>Monthly</span>
                <span>Yearly</span>
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="techin-pricing-items">
    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-md-6">
          <div class="techin-pricing-wrap">
            <div class="techin-pricing-header">
              <h4>Basic Plan</h4>
              <p>Get 20 % Save for Services</p>
            </div>
            <div class="techin-pricing-price proAnnuallyPrice">
              <h5>$49</h5>
              <span>Per Month</span>
            </div>
            <div class="techin-pricing-price proMonthlyPrice">
              <h5>$89</h5>
              <span>Per Year</span>
            </div>
            <div class="techin-pricing-body">
              <ul>
                <li>
                  <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 14.75C5.48438 14.75 3.1875 13.4375 1.92969 11.25C0.671875 9.08984 0.671875 6.4375 1.92969 4.25C3.1875 2.08984 5.48438 0.75 8 0.75C10.4883 0.75 12.7852 2.08984 14.043 4.25C15.3008 6.4375 15.3008 9.08984 14.043 11.25C12.7852 13.4375 10.4883 14.75 8 14.75ZM11.0898 6.46484H11.0625C11.3359 6.21875 11.3359 5.80859 11.0625 5.53516C10.8164 5.28906 10.4062 5.28906 10.1602 5.53516L7.125 8.59766L5.83984 7.3125C5.56641 7.03906 5.15625 7.03906 4.91016 7.3125C4.63672 7.55859 4.63672 7.96875 4.91016 8.21484L6.66016 9.96484C6.90625 10.2383 7.31641 10.2383 7.58984 9.96484L11.0898 6.46484Z" fill="#2BC8EB" />
                  </svg>
                  Ad Management
                </li>
                <li>
                  <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 14.75C5.48438 14.75 3.1875 13.4375 1.92969 11.25C0.671875 9.08984 0.671875 6.4375 1.92969 4.25C3.1875 2.08984 5.48438 0.75 8 0.75C10.4883 0.75 12.7852 2.08984 14.043 4.25C15.3008 6.4375 15.3008 9.08984 14.043 11.25C12.7852 13.4375 10.4883 14.75 8 14.75ZM11.0898 6.46484H11.0625C11.3359 6.21875 11.3359 5.80859 11.0625 5.53516C10.8164 5.28906 10.4062 5.28906 10.1602 5.53516L7.125 8.59766L5.83984 7.3125C5.56641 7.03906 5.15625 7.03906 4.91016 7.3125C4.63672 7.55859 4.63672 7.96875 4.91016 8.21484L6.66016 9.96484C6.90625 10.2383 7.31641 10.2383 7.58984 9.96484L11.0898 6.46484Z" fill="#2BC8EB" />
                  </svg>
                  Live Chat
                </li>
                <li>
                  <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 14.75C5.48438 14.75 3.1875 13.4375 1.92969 11.25C0.671875 9.08984 0.671875 6.4375 1.92969 4.25C3.1875 2.08984 5.48438 0.75 8 0.75C10.4883 0.75 12.7852 2.08984 14.043 4.25C15.3008 6.4375 15.3008 9.08984 14.043 11.25C12.7852 13.4375 10.4883 14.75 8 14.75ZM11.0898 6.46484H11.0625C11.3359 6.21875 11.3359 5.80859 11.0625 5.53516C10.8164 5.28906 10.4062 5.28906 10.1602 5.53516L7.125 8.59766L5.83984 7.3125C5.56641 7.03906 5.15625 7.03906 4.91016 7.3125C4.63672 7.55859 4.63672 7.96875 4.91016 8.21484L6.66016 9.96484C6.90625 10.2383 7.31641 10.2383 7.58984 9.96484L11.0898 6.46484Z" fill="#2BC8EB" />
                  </svg>
                  Multi-Language Content
                </li>
                <li>
                  <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 14.75C5.48438 14.75 3.1875 13.4375 1.92969 11.25C0.671875 9.08984 0.671875 6.4375 1.92969 4.25C3.1875 2.08984 5.48438 0.75 8 0.75C10.4883 0.75 12.7852 2.08984 14.043 4.25C15.3008 6.4375 15.3008 9.08984 14.043 11.25C12.7852 13.4375 10.4883 14.75 8 14.75ZM11.0898 6.46484H11.0625C11.3359 6.21875 11.3359 5.80859 11.0625 5.53516C10.8164 5.28906 10.4062 5.28906 10.1602 5.53516L7.125 8.59766L5.83984 7.3125C5.56641 7.03906 5.15625 7.03906 4.91016 7.3125C4.63672 7.55859 4.63672 7.96875 4.91016 8.21484L6.66016 9.96484C6.90625 10.2383 7.31641 10.2383 7.58984 9.96484L11.0898 6.46484Z" fill="#2BC8EB" />
                  </svg>
                  Conversational Bots
                </li>
                <li>
                  <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 14.75C5.48438 14.75 3.1875 13.4375 1.92969 11.25C0.671875 9.08984 0.671875 6.4375 1.92969 4.25C3.1875 2.08984 5.48438 0.75 8 0.75C10.4883 0.75 12.7852 2.08984 14.043 4.25C15.3008 6.4375 15.3008 9.08984 14.043 11.25C12.7852 13.4375 10.4883 14.75 8 14.75ZM11.0898 6.46484H11.0625C11.3359 6.21875 11.3359 5.80859 11.0625 5.53516C10.8164 5.28906 10.4062 5.28906 10.1602 5.53516L7.125 8.59766L5.83984 7.3125C5.56641 7.03906 5.15625 7.03906 4.91016 7.3125C4.63672 7.55859 4.63672 7.96875 4.91016 8.21484L6.66016 9.96484C6.90625 10.2383 7.31641 10.2383 7.58984 9.96484L11.0898 6.46484Z" fill="#2BC8EB" />
                  </svg>
                  Programmable Chatbots
                </li>
              </ul>
              <div class="techin-pricing-shape shape-show">
                <img src="assets/images/v1/shape-show.png" alt="">
              </div>
              <div class="techin-pricing-shape shape-hide">
                <img src="assets/images/v1/shape-hide.png" alt="">
              </div>
            </div>
            <div class="techin-pricing-footer">
              <a class='techin-default-btn btn3' data-text='Choose Plan' href='contact-us.html'>
                <span class="button-wraper">Choose Plan</span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-6">
          <div class="techin-pricing-wrap pricing-active">
            <div class="techin-pricing-header">
              <h4>Stander Plan</h4>
              <p>Get 20 % Save for Services</p>
            </div>
            <div class="techin-pricing-price proAnnuallyPrice">
              <h5>$79</h5>
              <span>Per Month</span>
            </div>
            <div class="techin-pricing-price proMonthlyPrice">
              <h5>$149</h5>
              <span>Per Year</span>
            </div>
            <div class="techin-pricing-body">
              <ul>
                <li>
                  <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 14.75C5.48438 14.75 3.1875 13.4375 1.92969 11.25C0.671875 9.08984 0.671875 6.4375 1.92969 4.25C3.1875 2.08984 5.48438 0.75 8 0.75C10.4883 0.75 12.7852 2.08984 14.043 4.25C15.3008 6.4375 15.3008 9.08984 14.043 11.25C12.7852 13.4375 10.4883 14.75 8 14.75ZM11.0898 6.46484H11.0625C11.3359 6.21875 11.3359 5.80859 11.0625 5.53516C10.8164 5.28906 10.4062 5.28906 10.1602 5.53516L7.125 8.59766L5.83984 7.3125C5.56641 7.03906 5.15625 7.03906 4.91016 7.3125C4.63672 7.55859 4.63672 7.96875 4.91016 8.21484L6.66016 9.96484C6.90625 10.2383 7.31641 10.2383 7.58984 9.96484L11.0898 6.46484Z" fill="#2BC8EB" />
                  </svg>
                  Ad Management
                </li>
                <li>
                  <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 14.75C5.48438 14.75 3.1875 13.4375 1.92969 11.25C0.671875 9.08984 0.671875 6.4375 1.92969 4.25C3.1875 2.08984 5.48438 0.75 8 0.75C10.4883 0.75 12.7852 2.08984 14.043 4.25C15.3008 6.4375 15.3008 9.08984 14.043 11.25C12.7852 13.4375 10.4883 14.75 8 14.75ZM11.0898 6.46484H11.0625C11.3359 6.21875 11.3359 5.80859 11.0625 5.53516C10.8164 5.28906 10.4062 5.28906 10.1602 5.53516L7.125 8.59766L5.83984 7.3125C5.56641 7.03906 5.15625 7.03906 4.91016 7.3125C4.63672 7.55859 4.63672 7.96875 4.91016 8.21484L6.66016 9.96484C6.90625 10.2383 7.31641 10.2383 7.58984 9.96484L11.0898 6.46484Z" fill="#2BC8EB" />
                  </svg>
                  Live Chat
                </li>
                <li>
                  <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 14.75C5.48438 14.75 3.1875 13.4375 1.92969 11.25C0.671875 9.08984 0.671875 6.4375 1.92969 4.25C3.1875 2.08984 5.48438 0.75 8 0.75C10.4883 0.75 12.7852 2.08984 14.043 4.25C15.3008 6.4375 15.3008 9.08984 14.043 11.25C12.7852 13.4375 10.4883 14.75 8 14.75ZM11.0898 6.46484H11.0625C11.3359 6.21875 11.3359 5.80859 11.0625 5.53516C10.8164 5.28906 10.4062 5.28906 10.1602 5.53516L7.125 8.59766L5.83984 7.3125C5.56641 7.03906 5.15625 7.03906 4.91016 7.3125C4.63672 7.55859 4.63672 7.96875 4.91016 8.21484L6.66016 9.96484C6.90625 10.2383 7.31641 10.2383 7.58984 9.96484L11.0898 6.46484Z" fill="#2BC8EB" />
                  </svg>
                  Multi-Language Content
                </li>
                <li>
                  <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 14.75C5.48438 14.75 3.1875 13.4375 1.92969 11.25C0.671875 9.08984 0.671875 6.4375 1.92969 4.25C3.1875 2.08984 5.48438 0.75 8 0.75C10.4883 0.75 12.7852 2.08984 14.043 4.25C15.3008 6.4375 15.3008 9.08984 14.043 11.25C12.7852 13.4375 10.4883 14.75 8 14.75ZM11.0898 6.46484H11.0625C11.3359 6.21875 11.3359 5.80859 11.0625 5.53516C10.8164 5.28906 10.4062 5.28906 10.1602 5.53516L7.125 8.59766L5.83984 7.3125C5.56641 7.03906 5.15625 7.03906 4.91016 7.3125C4.63672 7.55859 4.63672 7.96875 4.91016 8.21484L6.66016 9.96484C6.90625 10.2383 7.31641 10.2383 7.58984 9.96484L11.0898 6.46484Z" fill="#2BC8EB" />
                  </svg>
                  Conversational Bots
                </li>
                <li>
                  <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 14.75C5.48438 14.75 3.1875 13.4375 1.92969 11.25C0.671875 9.08984 0.671875 6.4375 1.92969 4.25C3.1875 2.08984 5.48438 0.75 8 0.75C10.4883 0.75 12.7852 2.08984 14.043 4.25C15.3008 6.4375 15.3008 9.08984 14.043 11.25C12.7852 13.4375 10.4883 14.75 8 14.75ZM11.0898 6.46484H11.0625C11.3359 6.21875 11.3359 5.80859 11.0625 5.53516C10.8164 5.28906 10.4062 5.28906 10.1602 5.53516L7.125 8.59766L5.83984 7.3125C5.56641 7.03906 5.15625 7.03906 4.91016 7.3125C4.63672 7.55859 4.63672 7.96875 4.91016 8.21484L6.66016 9.96484C6.90625 10.2383 7.31641 10.2383 7.58984 9.96484L11.0898 6.46484Z" fill="#2BC8EB" />
                  </svg>
                  Programmable Chatbots
                </li>
              </ul>
              <div class="techin-pricing-shape shape-show">
                <img src="assets/images/v1/shape-show.png" alt="">
              </div>
              <div class="techin-pricing-shape shape-hide">
                <img src="assets/images/v1/shape-hide.png" alt="">
              </div>
            </div>
            <div class="techin-pricing-footer">
              <a class='techin-default-btn btn3' data-text='Choose Plan' href='contact-us.html'>
                <span class="button-wraper">Choose Plan</span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-6">
          <div class="techin-pricing-wrap mb-0">
            <div class="techin-pricing-header">
              <h4>Premium Plan</h4>
              <p>Get 20 % Save for Services</p>
            </div>
            <div class="techin-pricing-price proAnnuallyPrice">
              <h5>$99</h5>
              <span>Per Month</span>
            </div>
            <div class="techin-pricing-price proMonthlyPrice">
              <h5>$199</h5>
              <span>Per Year</span>
            </div>
            <div class="techin-pricing-body">
              <ul>
                <li>
                  <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 14.75C5.48438 14.75 3.1875 13.4375 1.92969 11.25C0.671875 9.08984 0.671875 6.4375 1.92969 4.25C3.1875 2.08984 5.48438 0.75 8 0.75C10.4883 0.75 12.7852 2.08984 14.043 4.25C15.3008 6.4375 15.3008 9.08984 14.043 11.25C12.7852 13.4375 10.4883 14.75 8 14.75ZM11.0898 6.46484H11.0625C11.3359 6.21875 11.3359 5.80859 11.0625 5.53516C10.8164 5.28906 10.4062 5.28906 10.1602 5.53516L7.125 8.59766L5.83984 7.3125C5.56641 7.03906 5.15625 7.03906 4.91016 7.3125C4.63672 7.55859 4.63672 7.96875 4.91016 8.21484L6.66016 9.96484C6.90625 10.2383 7.31641 10.2383 7.58984 9.96484L11.0898 6.46484Z" fill="#2BC8EB" />
                  </svg>
                  Ad Management
                </li>
                <li>
                  <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 14.75C5.48438 14.75 3.1875 13.4375 1.92969 11.25C0.671875 9.08984 0.671875 6.4375 1.92969 4.25C3.1875 2.08984 5.48438 0.75 8 0.75C10.4883 0.75 12.7852 2.08984 14.043 4.25C15.3008 6.4375 15.3008 9.08984 14.043 11.25C12.7852 13.4375 10.4883 14.75 8 14.75ZM11.0898 6.46484H11.0625C11.3359 6.21875 11.3359 5.80859 11.0625 5.53516C10.8164 5.28906 10.4062 5.28906 10.1602 5.53516L7.125 8.59766L5.83984 7.3125C5.56641 7.03906 5.15625 7.03906 4.91016 7.3125C4.63672 7.55859 4.63672 7.96875 4.91016 8.21484L6.66016 9.96484C6.90625 10.2383 7.31641 10.2383 7.58984 9.96484L11.0898 6.46484Z" fill="#2BC8EB" />
                  </svg>
                  Live Chat
                </li>
                <li>
                  <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 14.75C5.48438 14.75 3.1875 13.4375 1.92969 11.25C0.671875 9.08984 0.671875 6.4375 1.92969 4.25C3.1875 2.08984 5.48438 0.75 8 0.75C10.4883 0.75 12.7852 2.08984 14.043 4.25C15.3008 6.4375 15.3008 9.08984 14.043 11.25C12.7852 13.4375 10.4883 14.75 8 14.75ZM11.0898 6.46484H11.0625C11.3359 6.21875 11.3359 5.80859 11.0625 5.53516C10.8164 5.28906 10.4062 5.28906 10.1602 5.53516L7.125 8.59766L5.83984 7.3125C5.56641 7.03906 5.15625 7.03906 4.91016 7.3125C4.63672 7.55859 4.63672 7.96875 4.91016 8.21484L6.66016 9.96484C6.90625 10.2383 7.31641 10.2383 7.58984 9.96484L11.0898 6.46484Z" fill="#2BC8EB" />
                  </svg>
                  Multi-Language Content
                </li>
                <li>
                  <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 14.75C5.48438 14.75 3.1875 13.4375 1.92969 11.25C0.671875 9.08984 0.671875 6.4375 1.92969 4.25C3.1875 2.08984 5.48438 0.75 8 0.75C10.4883 0.75 12.7852 2.08984 14.043 4.25C15.3008 6.4375 15.3008 9.08984 14.043 11.25C12.7852 13.4375 10.4883 14.75 8 14.75ZM11.0898 6.46484H11.0625C11.3359 6.21875 11.3359 5.80859 11.0625 5.53516C10.8164 5.28906 10.4062 5.28906 10.1602 5.53516L7.125 8.59766L5.83984 7.3125C5.56641 7.03906 5.15625 7.03906 4.91016 7.3125C4.63672 7.55859 4.63672 7.96875 4.91016 8.21484L6.66016 9.96484C6.90625 10.2383 7.31641 10.2383 7.58984 9.96484L11.0898 6.46484Z" fill="#2BC8EB" />
                  </svg>
                  Conversational Bots
                </li>
                <li>
                  <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 14.75C5.48438 14.75 3.1875 13.4375 1.92969 11.25C0.671875 9.08984 0.671875 6.4375 1.92969 4.25C3.1875 2.08984 5.48438 0.75 8 0.75C10.4883 0.75 12.7852 2.08984 14.043 4.25C15.3008 6.4375 15.3008 9.08984 14.043 11.25C12.7852 13.4375 10.4883 14.75 8 14.75ZM11.0898 6.46484H11.0625C11.3359 6.21875 11.3359 5.80859 11.0625 5.53516C10.8164 5.28906 10.4062 5.28906 10.1602 5.53516L7.125 8.59766L5.83984 7.3125C5.56641 7.03906 5.15625 7.03906 4.91016 7.3125C4.63672 7.55859 4.63672 7.96875 4.91016 8.21484L6.66016 9.96484C6.90625 10.2383 7.31641 10.2383 7.58984 9.96484L11.0898 6.46484Z" fill="#2BC8EB" />
                  </svg>
                  Programmable Chatbots
                </li>
              </ul>
              <div class="techin-pricing-shape shape-show">
                <img src="assets/images/v1/shape-show.png" alt="">
              </div>
              <div class="techin-pricing-shape shape-hide">
                <img src="assets/images/v1/shape-hide.png" alt="">
              </div>
            </div>
            <div class="techin-pricing-footer">
              <a class='techin-default-btn btn3' data-text='Choose Plan' href='contact-us.html'>
                <span class="button-wraper">Choose Plan</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end pricing -->
  <div class="techin-section-padding2">
    <div class="container">
      <div class="techin-section-title center">
        <div class="techin-title-tag center2">
          <span><img src="assets/images/v1/shape1.svg" alt=""></span>
          <h6>Working Process</h6>
          <span><img src="assets/images/v1/shape1.svg" alt=""></span>
        </div>
        <h2>TechIn Have Most Unique Working Style</h2>
      </div>
      <div class="row">
        <div class="col-xl-4 col-md-6">
          <div class="techin-iconbox-wrap2-item1">
            <div class="techin-iconbox-title-wrap2">
              <div class="techin-iconbox-title-icon">
                <img src="assets/images/v1/icon-s1.svg" alt="">
              </div>
              <div class="techin-iconbox-title-content">
                <h5>Consultation And Assessment</h5>
              </div>
            </div>
            <div class="techin-iconbox-title-text">
              <p>We start by understanding your business needs and challenges, then conduct a thorough assessment to identify the best tailored IT solutions.</p>
            </div>
            <div class="techin-iconbox-number">
              <img src="assets/images/v1/tag2.svg" alt="">
            </div>
          </div>
          <div class="techin-iconbox-wrap2-item1">
            <div class="techin-iconbox-title-wrap2">
              <div class="techin-iconbox-title-icon">
                <img src="assets/images/v1/icon-s3.svg" alt="">
              </div>
              <div class="techin-iconbox-title-content">
                <h5>Implementation And Integration</h5>
              </div>
            </div>
            <div class="techin-iconbox-title-text">
              <p>Our team implements solutions seamlessly, ensuring smooth integration with your infrastructure and minimal business disruption.</p>
            </div>
            <div class="techin-iconbox-number">
              <img src="assets/images/v1/tag3.svg" alt="">
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-6 order-xl-2">
          <div class="techin-iconbox-wrap2-item1">
            <div class="techin-iconbox-title-wrap2">
              <div class="techin-iconbox-title-icon">
                <img src="assets/images/v1/icon-s2.svg" alt="">
              </div>
              <div class="techin-iconbox-title-content">
                <h5>Strategy And Planning</h5>
              </div>
            </div>
            <div class="techin-iconbox-title-text">
              <p>Based on the assessment, we create a tailored IT strategy, detailing the technologies needed to enhance your operations, efficiency, and security.</p>
            </div>
            <div class="techin-iconbox-number">
              <img src="assets/images/v1/tag2%2b2.svg" alt="">
            </div>
          </div>
          <div class="techin-iconbox-wrap2-item1">
            <div class="techin-iconbox-title-wrap2">
              <div class="techin-iconbox-title-icon">
                <img src="assets/images/v1/icon-s4.svg" alt="">
              </div>
              <div class="techin-iconbox-title-content">
                <h5>Support And Optimization</h5>
              </div>
            </div>
            <div class="techin-iconbox-title-text">
              <p>After deployment, we offer ongoing support and optimization to keep your systems secure, efficient, and scalable as your business grows.</p>
            </div>
            <div class="techin-iconbox-number">
              <img src="assets/images/v1/tag4.svg" alt="">
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-6">
          <div class="techin-iconbox-title-thumb">
            <img data-aos="zoom-out" data-aos-duration="700" src="assets/images/v1/img1.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end section -->

  <div class="techin-section-padding2 light-bg1">
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
          <div class="techin-faq-header">
            <h6>What services does TechIn offer?</h6>
            <div class="techin-active-icon">
              <img src="assets/images/v1/top-arrow.svg" alt="">
            </div>
          </div>
          <div class="techin-faq-body">
            <p>Our consulting process typically starts with an initial consultation to understand your business needs and challenges. We then conduct a thorough analysis, develop a tailored strategy, and work closely with you to implement the solutions. We provide continuous support and monitor progress to ensure long-term success.</p>
          </div>
        </div>
        <div class="techin-faq-item">
          <div class="techin-faq-header">
            <h6>How does the consulting process work?</h6>
            <div class="techin-active-icon">
              <img src="assets/images/v1/top-arrow.svg" alt="">
            </div>
          </div>
          <div class="techin-faq-body">
            <p>Our consulting process typically starts with an initial consultation to understand your business needs and challenges. We then conduct a thorough analysis, develop a tailored strategy, and work closely with you to implement the solutions. We provide continuous support and monitor progress to ensure long-term success.</p>
          </div>
        </div>
        <div class="techin-faq-item">
          <div class="techin-faq-header">
            <h6>How can I get started with TechIn?</h6>
            <div class="techin-active-icon">
              <img src="assets/images/v1/top-arrow.svg" alt="">
            </div>
          </div>
          <div class="techin-faq-body">
            <p>Our consulting process typically starts with an initial consultation to understand your business needs and challenges. We then conduct a thorough analysis, develop a tailored strategy, and work closely with you to implement the solutions. We provide continuous support and monitor progress to ensure long-term success.</p>
          </div>
        </div>
        <div class="techin-faq-item">
          <div class="techin-faq-header">
            <h6>Do you offer virtual consulting services?</h6>
            <div class="techin-active-icon">
              <img src="assets/images/v1/top-arrow.svg" alt="">
            </div>
          </div>
          <div class="techin-faq-body">
            <p>Our consulting process typically starts with an initial consultation to understand your business needs and challenges. We then conduct a thorough analysis, develop a tailored strategy, and work closely with you to implement the solutions. We provide continuous support and monitor progress to ensure long-term success.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end faq section -->
  <div class="techin-section-padding2">
    <div class="container">
      <div class="techin-section-title center">
        <div class="techin-title-tag center2">
          <span><img src="assets/images/v1/shape1.svg" alt=""></span>
          <h6>News & Blog</h6>
          <span><img src="assets/images/v1/shape1.svg" alt=""></span>
        </div>
        <h2>Our Latest News And Updates</h2>
      </div>
      <div class="row">
        <div class="col-xl-4 col-md-6">
          <div class="blog-wrapper">
            <div class="blog-content">
              <div class="blog-meta">
                <a href='single-blog.html'>
                  <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 8C5.5625 8 4.25 7.25 3.53125 6C2.8125 4.78125 2.8125 3.25 3.53125 2C4.25 0.78125 5.5625 0 7 0C8.40625 0 9.71875 0.78125 10.4375 2C11.1562 3.25 11.1562 4.78125 10.4375 6C9.71875 7.25 8.40625 8 7 8ZM5.5625 9.5H8.40625C11.5 9.5 14 12 14 15.0938C14 15.5938 13.5625 16 13.0625 16H0.90625C0.40625 16 0 15.5938 0 15.0938C0 12 2.46875 9.5 5.5625 9.5Z" fill="#222627" />
                  </svg>By Admin
                </a>
                <a href='single-blog.html'>
                  <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.5 11C6.28125 11 5.1875 10.75 4.21875 10.2812C3.96875 10.4062 3.71875 10.5 3.4375 10.625C2.84375 10.8438 2.15625 11 1.5 11C1.28125 11 1.09375 10.875 1 10.6562C0.9375 10.4688 1.03125 10.25 1.1875 10.125V10.0938H1.21875C1.25 10.0625 1.3125 10 1.375 9.96875C1.46875 9.875 1.625 9.71875 1.78125 9.53125C1.9375 9.3125 2.125 9.03125 2.21875 8.75C1.4375 7.84375 1 6.71875 1 5.5C1 2.46875 3.90625 0 7.5 0C11.0625 0 14 2.46875 14 5.5C14 8.5625 11.0625 11 7.5 11ZM15 5.5H14.9688C14.9688 5.34375 14.9688 5.1875 14.9688 5.03125C18.3438 5.21875 20.9688 7.625 20.9688 10.5C20.9688 11.7188 20.5312 12.8438 19.75 13.75C19.8438 14.0312 20.0312 14.2812 20.1875 14.5C20.3438 14.7188 20.5 14.8438 20.5938 14.9688C20.6562 15 20.7188 15.0625 20.75 15.0625C20.75 15.0938 20.7812 15.0938 20.7812 15.0938C20.9688 15.25 21.0312 15.4688 20.9688 15.6562C20.9062 15.875 20.6875 16 20.5 16C19.8125 16 19.125 15.8438 18.5312 15.625C18.25 15.5 18 15.4062 17.75 15.2812C16.7812 15.75 15.6875 16 14.5 16C11.5 16 8.96875 14.3125 8.21875 11.9688C11.875 11.6562 15 9.03125 15 5.5Z" fill="#222627" />
                  </svg>(03) Comments
                </a>
              </div>
              <h5 class="blog-title"><a href='single-blog.html'>How to Optimize Your IT Infrastructure for Maximum Efficiency</a></h5>
            </div>
            <div class="blog-img">
              <a href='single-blog.html'><img src="assets/images/blog/img1.png" alt="Blog Image">
                <div class="blog-date-wrap">
                  <div class="blog-year">
                    <span>2024</span>
                  </div>
                  <div class="blog-month">
                    <h4>12</h4>
                    <h6>Jun</h6>
                  </div>
                </div>
              </a>
              <a class='techin-default-btn blog-btn1' data-text='Read More' href='single-blog.html'>
                <span class="button-wraper">Read More</span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-6">
          <div class="blog-wrapper">
            <div class="blog-content">
              <div class="blog-meta">
                <a href='single-blog.html'>
                  <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 8C5.5625 8 4.25 7.25 3.53125 6C2.8125 4.78125 2.8125 3.25 3.53125 2C4.25 0.78125 5.5625 0 7 0C8.40625 0 9.71875 0.78125 10.4375 2C11.1562 3.25 11.1562 4.78125 10.4375 6C9.71875 7.25 8.40625 8 7 8ZM5.5625 9.5H8.40625C11.5 9.5 14 12 14 15.0938C14 15.5938 13.5625 16 13.0625 16H0.90625C0.40625 16 0 15.5938 0 15.0938C0 12 2.46875 9.5 5.5625 9.5Z" fill="#222627" />
                  </svg>By Admin
                </a>
                <a href='single-blog.html'>
                  <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.5 11C6.28125 11 5.1875 10.75 4.21875 10.2812C3.96875 10.4062 3.71875 10.5 3.4375 10.625C2.84375 10.8438 2.15625 11 1.5 11C1.28125 11 1.09375 10.875 1 10.6562C0.9375 10.4688 1.03125 10.25 1.1875 10.125V10.0938H1.21875C1.25 10.0625 1.3125 10 1.375 9.96875C1.46875 9.875 1.625 9.71875 1.78125 9.53125C1.9375 9.3125 2.125 9.03125 2.21875 8.75C1.4375 7.84375 1 6.71875 1 5.5C1 2.46875 3.90625 0 7.5 0C11.0625 0 14 2.46875 14 5.5C14 8.5625 11.0625 11 7.5 11ZM15 5.5H14.9688C14.9688 5.34375 14.9688 5.1875 14.9688 5.03125C18.3438 5.21875 20.9688 7.625 20.9688 10.5C20.9688 11.7188 20.5312 12.8438 19.75 13.75C19.8438 14.0312 20.0312 14.2812 20.1875 14.5C20.3438 14.7188 20.5 14.8438 20.5938 14.9688C20.6562 15 20.7188 15.0625 20.75 15.0625C20.75 15.0938 20.7812 15.0938 20.7812 15.0938C20.9688 15.25 21.0312 15.4688 20.9688 15.6562C20.9062 15.875 20.6875 16 20.5 16C19.8125 16 19.125 15.8438 18.5312 15.625C18.25 15.5 18 15.4062 17.75 15.2812C16.7812 15.75 15.6875 16 14.5 16C11.5 16 8.96875 14.3125 8.21875 11.9688C11.875 11.6562 15 9.03125 15 5.5Z" fill="#222627" />
                  </svg>(03) Comments
                </a>
              </div>
              <h5 class="blog-title"><a href='single-blog.html'>How IT Infrastructure Can Improve Efficiency and Productivity</a></h5>
            </div>
            <div class="blog-img">
              <a href='single-blog.html'><img src="assets/images/blog/img3.png" alt="Blog Image">
                <div class="blog-date-wrap">
                  <div class="blog-year">
                    <span>2024</span>
                  </div>
                  <div class="blog-month">
                    <h4>12</h4>
                    <h6>Jun</h6>
                  </div>
                </div>
              </a>
            </div>
            <a class='techin-default-btn blog-btn1' data-text='Read More' href='single-blog.html'>
              <span class="button-wraper">Read More</span>
            </a>
          </div>
        </div>
        <div class="col-xl-4 col-md-6">
          <div class="blog-wrapper">
            <div class="blog-content">
              <div class="blog-meta">
                <a href='single-blog.html'>
                  <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 8C5.5625 8 4.25 7.25 3.53125 6C2.8125 4.78125 2.8125 3.25 3.53125 2C4.25 0.78125 5.5625 0 7 0C8.40625 0 9.71875 0.78125 10.4375 2C11.1562 3.25 11.1562 4.78125 10.4375 6C9.71875 7.25 8.40625 8 7 8ZM5.5625 9.5H8.40625C11.5 9.5 14 12 14 15.0938C14 15.5938 13.5625 16 13.0625 16H0.90625C0.40625 16 0 15.5938 0 15.0938C0 12 2.46875 9.5 5.5625 9.5Z" fill="#222627" />
                  </svg>By Admin
                </a>
                <a href='single-blog.html'>
                  <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.5 11C6.28125 11 5.1875 10.75 4.21875 10.2812C3.96875 10.4062 3.71875 10.5 3.4375 10.625C2.84375 10.8438 2.15625 11 1.5 11C1.28125 11 1.09375 10.875 1 10.6562C0.9375 10.4688 1.03125 10.25 1.1875 10.125V10.0938H1.21875C1.25 10.0625 1.3125 10 1.375 9.96875C1.46875 9.875 1.625 9.71875 1.78125 9.53125C1.9375 9.3125 2.125 9.03125 2.21875 8.75C1.4375 7.84375 1 6.71875 1 5.5C1 2.46875 3.90625 0 7.5 0C11.0625 0 14 2.46875 14 5.5C14 8.5625 11.0625 11 7.5 11ZM15 5.5H14.9688C14.9688 5.34375 14.9688 5.1875 14.9688 5.03125C18.3438 5.21875 20.9688 7.625 20.9688 10.5C20.9688 11.7188 20.5312 12.8438 19.75 13.75C19.8438 14.0312 20.0312 14.2812 20.1875 14.5C20.3438 14.7188 20.5 14.8438 20.5938 14.9688C20.6562 15 20.7188 15.0625 20.75 15.0625C20.75 15.0938 20.7812 15.0938 20.7812 15.0938C20.9688 15.25 21.0312 15.4688 20.9688 15.6562C20.9062 15.875 20.6875 16 20.5 16C19.8125 16 19.125 15.8438 18.5312 15.625C18.25 15.5 18 15.4062 17.75 15.2812C16.7812 15.75 15.6875 16 14.5 16C11.5 16 8.96875 14.3125 8.21875 11.9688C11.875 11.6562 15 9.03125 15 5.5Z" fill="#222627" />
                  </svg>(03) Comments
                </a>
              </div>
              <h5 class="blog-title"><a href='single-blog.html'>How to Ensure Seamless IT Integration Across Departments</a></h5>
            </div>
            <div class="blog-img">
              <a href='single-blog.html'><img src="assets/images/blog/img2.png" alt="Blog Image">
                <div class="blog-date-wrap">
                  <div class="blog-year">
                    <span>2024</span>
                  </div>
                  <div class="blog-month">
                    <h4>12</h4>
                    <h6>Jun</h6>
                  </div>
                </div>
              </a>
            </div>
            <a class='techin-default-btn blog-btn1' data-text='Read More' href='single-blog.html'>
              <span class="button-wraper">Read More</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--  end blog -->


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
