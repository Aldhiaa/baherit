<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}"
    class="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- SEO-optimized title -->
    <!-- Google fonts and CSS assets -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;700;900&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/animate.min.css') }}" />

    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome-pro.css') }}" />
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/aos.css') }}" /> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/swiper-bundle.min.css') }}?v={{time()}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}?v={{time()}}" />
    @if (app()->getLocale() === 'ar')
      <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- وسوم تحسين محركات البحث -->
    <title>بحر التكنولوجيا – للحلول التقنيةو الرقمية المتقدمة | تطوير مواقع، تطبيقات، تسويق رقمي، وأمن سيبراني</title>
    <meta name="description" content="بحر التكنولوجيا شركة رائدة تقدم حلول رقمية متكاملة تشمل تطوير المواقع والتطبيقات، الأمن السيبراني، التسويق الرقمي، ودعم تقني متخصص." />
    <meta name="keywords" content="بحر التكنولوجيا, شركة تقنية, تطوير مواقع, تصميم تطبيقات, الأمن السيبراني, التسويق الرقمي, خدمات تقنية المعلومات, شركات تقنية , شركة برمجة " />
    <meta name="author" content="بحر التكنولوجيا" />

    <!-- أيقونة الموقع -->
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />

    <!-- وسوم المشاركة على وسائل التواصل -->
    <meta property="og:title" content="بحر التكنولوجيا – حلول رقمية متكاملة" />
    <meta property="og:description" content="خدمات تطوير مواقع وتطبيقات، أمن سيبراني، وتسويق رقمي ." />
    <meta property="og:image" content="/assets/images/og-image.jpg" />
    <meta property="og:url" content="https://www.baherit.com" />
    <meta property="og:type" content="website" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="بحر التكنولوجيا – للحلول الرقمية المتكاملة" />
    <meta name="twitter:description" content="شركة تقنية  تقدم خدمات شاملة تشمل البرمجة، الأمن السيبراني، والتسويق الرقمي." />
    <meta name="twitter:image" content="/assets/images/twitter-card.jpg" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/bootstrap.rtl.min.css') }}?v={{time()}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/rtl_style.css') }}?v={{time()}}" />
    @else
    <title>Baher Technology – for Advanced Digital and Technical Solutions | Website Development, Apps, Digital Marketing, and Cybersecurity</title>
    <meta name="description" content="Baher Technology – for Advanced Digital and Technical Solutions including website and app development, cybersecurity, digital marketing, and  technical support." />
    <meta name="keywords" content="Baher Technology, Tech Company, Website Development, App Design, Cybersecurity, Digital Marketing, IT Services, Tech Companies, Programming Company" />
    <meta name="author" content="Baher Technology" />

    <!-- Website Icon -->
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />

    <!-- Social Media Sharing Tags -->
    <meta property="og:title" content="Baher Technology – Integrated Digital Solutions" />
    <meta property="og:description" content="Website and app development services, cybersecurity, and digital marketing." />
    <meta property="og:image" content="/assets/images/og-image.jpg" />
    <meta property="og:url" content="https://www.baherit.com" />
    <meta property="og:type" content="website" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Baher Technology – Integrated Digital Solutions" />
    <meta name="twitter:description" content="A Saudi tech company providing comprehensive services including programming, cybersecurity, and digital marketing." />
    <meta name="twitter:image" content="/assets/images/twitter-card.jpg" />
    @endif
</head>

<body data-spy="scroll" data-target=".tm-section-active" class="tm-purple-colo">

    <!-- Preloader Section -->
    <div class="loading-page">
        <!-- Preloader SVG and Logo -->
        <svg id="svg" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1144 1860" width="286" height="465">
            <path transform="translate(338,818)" d="m0 0 11 1 10 4 9 10 3 7v19l-5 10-16 20-11 17-11 19-11 23-9 24-7 25-5 28-1 11v51l2 22 6 28 6 20 7 19 13 27 10 17 11 16 10 13 12 13 11 12 12 11 12 10 20 14 18 11 23 12 27 10 20 6 25 5 16 2 15 1h34l24-2 24-4 25-7 27-10 22-11 22-13 14-10 14-11 12-11 19-19 9-11 8-10 11-16 12-21 12-25 8-22 6-23 5-26 1-17v-51l-1-16-5-25-6-22-7-20-9-20-11-20-9-15-4-11v-13l4-10 7-8 10-5 5-2h10l12 5 8 7 10 15 12 21 14 30 8 22 7 23 5 25 3 11 2 28 2 8v39l-2 9-2 26-9 39-6 20-9 25-11 23-13 23-11 17-11 15-13 16-7 8-3 4h-2l-2 4-16 16-11 9-8 7-19 14-17 11-16 9-28 14-23 9-27 8-26 6-18 3-10 1-25 1h-29l-31-1-7-2-21-3-25-6-33-11-26-12-23-12-18-11-28-21-12-11-8-7-20-20-9-11-12-15-12-17-9-15-12-22-9-19-10-26-8-28-6-28-2-13-1-18-2-11v-38l2-8 1-21 6-28 5-21 8-25 10-24 9-19 12-21 10-15 10-14 7-9 9-11 7-5 6-2z" fill="#0A4A78"/>
            <path transform="translate(738,109)" d="m0 0h32l17 4 15 6 16 10 12 11 9 10 10 16 7 17 3 13v36l-4 17-7 16-7 11-9 10-4 5-11 9-11 7-19 9h-3l-1 215-4 8-8 10-153 153-1 2-1 41v492l-2 7-6 8-8 5-6 2h-12l-10-4-8-7-4-9v-559l4-6 9-10 9-9 7-8 24-24h2v-2h2v-2h2v-2h2l2-4 78-78h2v-2l8-7 11-11 2-6v-191l-26-13-11-8-12-11-9-12-9-16-7-21-2-16v-16l2-14 6-18 7-14 12-16 12-12 15-10 16-7 15-4zm5 58-12 4-11 8-8 11-4 9-1 4v24l4 10 6 8 9 9 11 6 8 2h19l10-3 10-6 5-5 7-9 4-8 2-11v-10l-2-13-6-11-9-10-16-8-3-1z" fill="#0A4A78"/>
            <path transform="translate(285,405)" d="m0 0h29l21 6 10 4 16 10 9 7 12 12 10 15 7 15 4 14 1 6v35l-4 16-5 12 1 5 79 79 6 10 1 2 1 26v114l-1 349-5 10-7 7-10 4h-14l-10-5-8-9-4-10-1-466-31-31-5-6-3-2v-2l-4-2-26-26-5 1-14 7h-6l-2 3-14 1-12 3h-8l-8-3h-9l-7-2-9-3-16-8-14-10-12-12-9-12-9-17-5-16-3-13v-23l5-20 6-16 8-13 8-10 9-9 14-11 15-8 10-4zm6 58-9 3-8 4-10 7-7 10-5 12-1 7v11l2 10 5 10 9 10 9 7 15 6h15l5-3 7-1 10-6 6-5v-2h2l6-10 3-8 1-4v-19l-4-13-7-9-5-5-7-6-15-6z" fill="#2CB4E7"/>
            <path transform="translate(910,547)" d="m0 0 19 1 12 2 14 5 13 7 13 9 15 15 10 15 8 17 5 23v25l-5 21-5 13-7 12-7 10-10 10-12 9-14 8-11 5-7 2h-5l-3 3h-41l-1-3h-9l-14-6-8-4-5 1-103 103-1 292-5 9-5 6-12 6h-13l-10-4-7-6-6-12v-310l6-11 11-12 105-105v-8l-3-7-3-9-1-2v-46l8-22 8-15 14-17 15-12 15-9 14-5 6-2zm-2 57-4 2-9 1-14 10-8 9-6 11-2 14 1 14 3 9 7 10 8 8 8 5 7 3 14 1 14-1 15-8 8-7 6-10 4-11v-23l-4-10-7-9-9-9-12-6-9-2-2-1z" fill="#2CB4E7"/>
            <path transform="translate(475,1679)" d="m0 0h214l9 1 8 6 7 8 2 5 1 7v10l-3 8-7 8-10 5-8 2h-209l-11-3-8-6-6-7-2-5v-17l6-12 7-6 5-3z" fill="#2CB4E7"/>
            <path transform="translate(805,1456)" d="m0 0h219l9 2 8 6 4 5 4 10v12l-4 10-4 5-6 5-9 4h-220l-10-5-8-9-4-10v-12l3-8 9-10 6-4z" fill="#2CB4E7"/>
            <path transform="translate(152,1456)" d="m0 0h218l9 2 11 10 4 8 1 3v12l-4 10-8 9-11 5h-219l-10-5-6-5-5-8-3-9 1-7 4-12 7-8 7-4z" fill="#2CB4E7"/>
            <path transform="translate(314,1568)" d="m0 0h226l6 3 8 7 5 9 1 15-3 9-6 8-9 6-6 2h-218l-11-6-8-9-3-7v-16l5-11 7-6z" fill="#2CB4E7"/>
            <path transform="translate(635,1568)" d="m0 0h226l9 6 7 8 3 9v13l-5 10-5 6-7 4-7 3h-218l-11-6-7-8-4-8v-17l4-8 7-7z" fill="#2CB4E7"/>
            <path transform="translate(477,192)" d="m0 0 9 1 9 4 8 7 4 7v188l-5 8-5 5-6 3-7 1h-12l-9-3-7-7-4-8-3-12v-163l4-13 6-9 9-6z" fill="#2CB4E7"/>
            <path transform="translate(582,329)" d="m0 0h12l12 6 8 9 2 11v169l-1 11-5 8-8 7-12 3-11-1-10-5-6-7-3-7v-184l3-7 7-7z" fill="#0A4A78"/>
            <!-- <div xmlns="" id="divScriptsUsed" style="display: none"/><script xmlns="" id="globalVarsDetection" src="chrome-extension://cmkdbmfndkfgebldhnkbfhlneefdaaip/js/wrs_env.js"/> -->
          </svg>
            <div class="name-container">
                <div class="logo-name">{{ $siteSettings['site_name'] ?? 'Baher Technology' }}</div>
            </div>
            </div>

            <div id="landing-page" style="display: none;">
                <!-- Header -->
                @include('partials.header')
                <!-- Navigation bar or fixed menu -->

                <!-- Main content -->
                <main>
                    @yield('content')
                </main>
                <!-- Footer -->
                @include('partials.footer')
            </div>

            <!-- JS Scripts -->
            <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script>
        new WOW().init();
    </script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const navLinks = document.querySelectorAll(
                ".tm-section-active .nav-link"
            );
            const sections = document.querySelectorAll("section");
            const offset = 100; // Adjust based on your fixed navbar height

            // Function to remove 'active' class from all nav links
            function removeActiveClasses() {
                navLinks.forEach((link) => link.classList.remove("active"));
            }

            // Function to add 'active' class to the current nav link
            function addActiveClass(id) {
                const activeLink = document.querySelector(
                    `.tm-section-active .nav-link[href="#${id}"]`
                );
                if (activeLink) {
                    activeLink.classList.add("active");
                }
            }

            // Throttle function to improve performance
            function throttle(fn, wait) {
                let lastTime = 0;
                return function(...args) {
                    const now = new Date().getTime();
                    if (now - lastTime >= wait) {
                        fn.apply(this, args);
                        lastTime = now;
                    }
                };
            }

            // Function to determine the active section
            function setActiveLink() {
                let currentSectionId = "";

                sections.forEach((section) => {
                    const rect = section.getBoundingClientRect();
                    if (rect.top <= offset && rect.bottom >= offset) {
                        currentSectionId = section.getAttribute("id");
                    }
                });

                if (currentSectionId) {
                    removeActiveClasses();
                    addActiveClass(currentSectionId);
                }
            }

            // Listen to scroll events with throttling
            window.addEventListener("scroll", throttle(setActiveLink, 100));

            // Initial check
            setActiveLink();
        });
    </script>

    <!-- custom cursor -->
            <script src={{ asset('assets/js/custom-cursor.js') }}"></script>

            <!-- header sticky js -->
            <script src={{ asset('assets/js/header_sticky.js') }}"></script>
            <script>
                $(document).ready(function() {
                    generalSetup();
                    accordianSetup();
                    // tabSetup();
                });

                function generalSetup() {
                    // Social Button Active
                    $(".tm-single-social-btn").on("mouseenter", function() {
                        $(this).siblings().removeClass("tm-active");
                        $(this).addClass("tm-active");
                    });

                    // Toggle Button
                    $(".tm-active-language").on("click", function() {
                        $(this).parents(".tm-language").toggleClass("tm-active");
                    });
                    $(document).on("click", function() {
                        $(".tm-language").removeClass("tm-active");
                    });
                    $(".tm-active-language, .tm-language").on("click", function(e) {
                        e.stopPropagation();
                    });
                }

                function accordianSetup() {
                    var $this = $(this);
                    $(".accordian-head").append(
                        "<span class='accordian-toggle'><i class='fa fa-angle-down'></i></span>"
                    );
                    $(".single-accordian")
                        .filter(":nth-child(n+2)")
                        .children(".accordian-body")
                        .hide();
                    $(".single-accordian:first-child")
                        .children(".accordian-head")
                        .addClass("active");
                    $(".accordian-head").on("click", function() {
                        $(this)
                            .parent(".single-accordian")
                            .siblings()
                            .children(".accordian-body")
                            .slideUp();
                        $(this).siblings().slideToggle();
                        /* Accordian Active Class */
                        $(this).toggleClass("active");
                        $(this)
                            .parent(".single-accordian")
                            .siblings()
                            .children(".accordian-head")
                            .removeClass("active");
                    });
                }

                // function tabSetup() {

                //   $(".tabs.animated-fade .tab-links a").on("click", function (e) {
                //     var currentAttrValue = $(this).attr("href");
                //     $(".tabs " + currentAttrValue)
                //       .fadeIn(400)
                //       .siblings()
                //       .hide();
                //     $(this)
                //       .parent("li")
                //       .addClass("active")
                //       .siblings()
                //       .removeClass("active");
                //     e.preventDefault();
                //   });
                // }
            </script>

            <!-- for loader  -->

            <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script>

            <script>
                gsap.fromTo(
                    ".loading-page", {
                        opacity: 1
                    }, {
                        opacity: 0,
                        display: "none",
                        duration: 1.5,
                        delay: 3.5,
                        onComplete: function() {
                            document.getElementById("landing-page").style.display = "block";

                        }
                    }
                );

                gsap.fromTo(
                    ".logo-name", {
                        opacity: 0,
                        y: 50,
                    }, {
                        y: 0,
                        opacity: 1,
                        duration: 1.5,
                        delay: 0.5,
                    }
                );
            </script>
            <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
