
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
            <img src="assets/images/logo/logo1.svg" alt="">
          </a>
        </div>
        <p>“TechIN completely transformed our IT infrastructure. Their team was knowledgeable, responsive, and solutions that improved our efficiency. Highly recommended!”</p>
        <div class="techin-sidemenu-thumb">
          <img src="assets/images/blog/img15.png" alt="">
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
        <h1 class="breadcrumb-title">Latest Projects</h1>
        <div class="breadcrumb-menu-wrapper">
          <div class="breadcrumb-menu-wrap">
            <div class="breadcrumb-menu">
              <ul>
                <li><a href='index.html'>Home</a></li>
                <li><img src="assets/images/breadcrumb/line.svg" alt="right-arrow"></li>
                <li aria-current="page">Latest Projects</li>
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
          <h6>Latest Projects</h6>
          <span><img src="assets/images/v1/shape1.svg" alt=""></span>
        </div>
        <h2>Our Successful Project and Case Study</h2>
      </div>
      <div class="row">
        <div class="col-xl-4 col-md-6">
          <div class="techin-p-wra2">
            <div class="techin-p-item">
              <div class="techin-p-thumb">
                <img src="assets/images/v1/img77.png" alt="">
              </div>
              <div class="techin-p-content">
                <p>CloudStream Integration</p>
                <h6>IT Cloud Migration for Media Company</h6>
                <div class="btn-icon">
                  <a href='single-portfolio.html'><img src="assets/images/v1/r-arrow.svg" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6">
          <div class="techin-p-item">
            <div class="techin-p-thumb">
              <img src="assets/images/v1/img6.png" alt="">
            </div>
            <div class="techin-p-content">
              <p>Cybersecurity</p>
              <h6>Advanced Cybersecurity for a Financial Services Firm.</h6>
              <div class="btn-icon">
                <a href='single-portfolio.html'><img src="assets/images/v1/r-arrow.svg" alt=""></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6">
          <div class="techin-p-item">
            <div class="techin-p-thumb">
              <img src="assets/images/v1/img5.png" alt="">
            </div>
            <div class="techin-p-content">
              <p>SecureNet Shield</p>
              <h6>Network Security Overhaul for Financial Institution</h6>
              <div class="btn-icon">
                <a href='single-portfolio.html'><img src="assets/images/v1/r-arrow.svg" alt=""></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-md-6">
          <div class="techin-p-wra2">
            <div class="techin-p-item">
              <div class="techin-p-thumb">
                <img src="assets/images/portfolio/img1.png" alt="">
              </div>
              <div class="techin-p-content">
                <p>Cybersecurity</p>
                <h6>Smart Network Infrastructure Overhaul</h6>
                <div class="btn-icon">
                  <a href='single-portfolio.html'><img src="assets/images/v1/r-arrow.svg" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6">
          <div class="techin-p-item">
            <div class="techin-p-thumb">
              <img src="assets/images/portfolio/img2.png" alt="">
            </div>
            <div class="techin-p-content">
              <p>Development</p>
              <h6>Custom ERP System Development & Integration</h6>
              <div class="btn-icon">
                <a href='single-portfolio.html'><img src="assets/images/v1/r-arrow.svg" alt=""></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6">
          <div class="techin-p-item">
            <div class="techin-p-thumb">
              <img src="assets/images/portfolio/img3.png" alt="">
            </div>
            <div class="techin-p-content">
              <p>Data Recovery</p>
              <h6>Robust Data Backup & Disaster Recovery Solution</h6>
              <div class="btn-icon">
                <a href='single-portfolio.html'><img src="assets/images/v1/r-arrow.svg" alt=""></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="techin-pagination center">
        <a class='pagi-btn' href='single-portfolio.html'>
          <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.601562 7.64062L6.85156 1.39062C7.32031 0.882812 8.14062 0.882812 8.60938 1.39062C9.11719 1.85938 9.11719 2.67969 8.60938 3.14844L4.50781 7.25H16.5C17.1641 7.25 17.75 7.83594 17.75 8.5C17.75 9.20312 17.1641 9.75 16.5 9.75H4.50781L8.60938 13.8906C9.11719 14.3594 9.11719 15.1797 8.60938 15.6484C8.14062 16.1562 7.32031 16.1562 6.85156 15.6484L0.601562 9.39844C0.09375 8.92969 0.09375 8.10938 0.601562 7.64062Z" fill="#2F2BEB" />
          </svg>
        </a>
        <ul>
          <li><a class="current" href="#">1</a></li>
          <li><a href='single-portfolio.html'>2</a></li>
          <li><a href='single-portfolio.html'>3</a></li>
          <li><a href='single-portfolio.html'>4</a></li>
        </ul>
        <a class='pagi-btn' href='single-portfolio.html'>
          <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.3984 7.64062L11.1484 1.39062C10.6797 0.882812 9.85938 0.882812 9.39062 1.39062C8.88281 1.85938 8.88281 2.67969 9.39062 3.14844L13.4922 7.25H1.5C0.835938 7.25 0.25 7.83594 0.25 8.5C0.25 9.20312 0.835938 9.75 1.5 9.75H13.4922L9.39062 13.8906C8.88281 14.3594 8.88281 15.1797 9.39062 15.6484C9.85938 16.1562 10.6797 16.1562 11.1484 15.6484L17.3984 9.39844C17.9062 8.92969 17.9062 8.10938 17.3984 7.64062Z" fill="#2F2BEB" />
          </svg>
        </a>
      </div>
    </div>
  </div>
  <!-- end portfolio -->

  <div class="techin-section-padding5 light-bg1">
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
            <div class="blog-content white-bg">
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
            </div>
            <a class='techin-default-btn blog-btn1' data-text='Read More' href='single-blog.html'>
              <span class="button-wraper">Read More</span>
            </a>
          </div>
        </div>
        <div class="col-xl-4 col-md-6">
          <div class="blog-wrapper">
            <div class="blog-content white-bg">
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
        <div class="col-xl-4 col-md-6">
          <div class="blog-wrapper">
            <div class="blog-content white-bg">
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
      </div>
    </div>
  </div>
  <!--  end blog -->

  <div class="techin-cta-section mt-160" style="background-image: url(assets/images/cta/cta-bg1.png)">
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
