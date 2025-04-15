@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
                        <div class="company-badge mb-4">
                            <i class="bi bi-gear-fill me-2"></i>
                            Working for your success
                        </div>

                        <h1 class="mb-4">
                            Web Applications <br>
                            Mobile Applications <br>
                            <span class="accent-text">Web Hosting</span>
                        </h1>

                        <p class="mb-4 mb-md-5">
                            We specialize in building custom web and mobile applications tailored to your business
                            needs.
                            From sleek user interfaces to robust backend systems, we deliver scalable solutions.
                            Plus, our reliable web hosting ensures your applications run smoothly 24/7.
                        </p>

                        <div class="hero-buttons">
                            <a href="#about" class="btn btn-primary me-0 me-sm-2 mx-1">Get Started</a>
                            <!-- <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="btn btn-link mt-2 mt-sm-0 glightbox">
                      <i class="bi bi-play-circle me-1"></i>
                      Play Video
                    </a> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
                        <img src="assets/img/illustration-1.webp" alt="Hero Image" class="img-fluid">

                        <div class="customers-badge">
                            <div class="customer-avatars">
                                <img src="{{asset('/assets/img/avatars/avatar-1.webp')}}" alt="Customer 1" class="avatar">
                                <img src="{{asset('/assets/img/avatars/avatar-2.webp')}}" alt="Customer 2" class="avatar">
                                <img src="{{asset('/assets/img/avatars/avatar-3.webp')}}" alt="Customer 3" class="avatar">
                                <img src="{{asset('/assets/img/avatars/avatar-4.webp')}}" alt="Customer 4" class="avatar">
                                <img src="{{asset('/assets/img/avatars/avatar-5.webp')}}" alt="Customer 5" class="avatar">
                                <span class="avatar more">99+</span>
                            </div>
                            <p class="mb-0 mt-2">Trusted by 120+ businesses worldwide for their digital
                                transformation needs</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row stats-row gy-4 mt-5" data-aos="fade-up" data-aos-delay="500">
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="bi bi-check-circle-fill"></i> <!-- Alternative: bi-trophy or bi-flag -->
                        </div>
                        <div class="stat-content">
                            <h4>100+ Successfull projects</h4>
                            <!-- <p class="mb-0">Recognized for innovation and outstanding software solutions.</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="bi bi-globe"></i> <!-- Alternative: bi-code-slash or bi-globe -->
                        </div>
                        <div class="stat-content">
                            <h4>20 Web Apps</h4>
                            <!-- <p class="mb-0">Nullam quis ante</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="bi bi-phone"></i> <!-- Alternative: bi-tablet or bi-mobile -->
                        </div>
                        <div class="stat-content">
                            <h4>8 Mobile Apps</h4>
                            <!-- <p class="mb-0">Etiam sit amet orci</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="bi bi-cloud"></i> <!-- Alternative: bi-cloud or bi-hdd-network -->
                        </div>
                        <div class="stat-content">
                            <h4>95 Web Hosting</h4>
                            <!-- <p class="mb-0">Vestibulum ante ipsum</p> -->
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4 align-items-center justify-content-between">

                <div class="col-xl-5" data-aos="fade-up" data-aos-delay="200">
                    <span class="about-meta">WHY CHOOSE US</span>
                    <h2 class="about-title">Transforming Ideas into Reality</h2>
                    <p class="about-description">
                        We are a team of passionate developers and designers dedicated to delivering cutting-edge
                        software solutions.
                        From custom web and mobile applications to seamless UX/UI design and reliable web hosting,
                        we ensure your business
                        thrives in the digital world. Let us transform your ideas into reality with our expertise
                        and commitment to excellence.
                    </p>
                    <div class="row feature-list-wrapper">
                        <div class="col-md-6">
                            <ul class="feature-list">
                                <li><i class="bi bi-check-circle-fill"></i> Software Design and Development</li>
                                <li><i class="bi bi-check-circle-fill"></i> Web Application Development</li>
                                <li><i class="bi bi-check-circle-fill"></i> Mobile Application Development</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="feature-list">
                                <li><i class="bi bi-check-circle-fill"></i> UX/UI Design</li>
                                <li><i class="bi bi-check-circle-fill"></i> Database Design</li>
                                <li><i class="bi bi-check-circle-fill"></i> Web Hosting</li>
                            </ul>
                        </div>
                    </div>

                    <div class="info-wrapper">
                        <div class="row gy-4">
                            <!-- <div class="col-lg-5">
                      <div class="profile d-flex align-items-center gap-3">
                        <img src="assets/img/avatar-1.webp" alt="CEO Profile" class="profile-image">
                        <div>
                          <h4 class="profile-name">Mario Smith</h4>
                          <p class="profile-position">CEO &amp; Founder</p>
                        </div>
                      </div>
                    </div> -->
                            <div class="col-lg-6">
                                <div class="contact-info d-flex align-items-center gap-2">
                                    <i class="bi bi-envelope-fill"></i>
                                    <div>
                                        <p class="contact-label">Email us anytime</p>
                                        <p class="contact-number">info@glidesoft.net</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-info d-flex align-items-center gap-2">
                                    <i class="bi bi-telephone-fill"></i>
                                    <div>
                                        <p class="contact-label">Call us anytime</p>
                                        <p class="contact-number">+93749840055</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="image-wrapper">
                        <div class="images position-relative" data-aos="zoom-out" data-aos-delay="400">
                            <img src="assets/img/about-5.webp" alt="Business Meeting"
                                class="img-fluid main-image rounded-4">
                            <img src="assets/img/about-2.webp" alt="Team Discussion"
                                class="img-fluid small-image rounded-4">
                        </div>
                        <div class="experience-badge floating">
                            <h3>10+ <span>Years</span></h3>
                            <p>Of experience in software solution</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /About Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Features</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="d-flex justify-content-center">

                <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">

                    <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                            <h4>High Performance</h4>
                        </a>
                    </li><!-- End tab nav item -->
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                            <h4>Enterprise Security</h4>
                        </a>
                    </li><!-- End tab nav item -->
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                            <h4>Support 24/7</h4>
                        </a><!-- End tab nav item -->
                    </li>

                </ul>

            </div>

            <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

                <div class="tab-pane fade active show" id="features-tab-1">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                            <h3>High Performance Solutions</h3>
                            <p class="fst-italic">
                                We build lightning-fast applications optimized for speed, scalability, and seamless
                                user experiences.
                            </p>
                            <ul>
                                <li><i class="bi bi-check2-all"></i> <span>90+ Google PageSpeed scores for all web
                                        projects</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>NVMe SSD storage and LiteSpeed servers
                                        for instant load times</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Code optimization and caching for
                                        maximum efficiency</span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="assets/img/features-illustration-1.webp" alt="" class="img-fluid">
                        </div>
                    </div>
                </div><!-- End tab content item -->

                <div class="tab-pane fade" id="features-tab-2">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                            <h3>24/7 Expert Support</h3>
                            <p class="fst-italic">
                                Our dedicated support team is always available to ensure your systems run smoothly,
                                day or night.
                            </p>
                            <ul>
                                <li><i class="bi bi-check2-all"></i> <span>Instant response via live chat, email,
                                        or phone</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Proactive server monitoring to prevent
                                        issues</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Technical assistance for all your hosted
                                        applications</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Emergency support for critical system
                                        outages</span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="assets/img/features-illustration-2.webp" alt="" class="img-fluid">
                        </div>
                    </div>
                </div><!-- End tab content item -->

                <div class="tab-pane fade" id="features-tab-3">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                            <h3>Enterprise-Grade Security</h3>
                            <ul>
                                <li><i class="bi bi-check2-all"></i> <span>End-to-end encryption for all data
                                        transmissions</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Regular security audits and penetration
                                        testing</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>GDPR and ISO 27001 compliant
                                        infrastructure</span></li>
                            </ul>
                            <p class="fst-italic">
                                We implement military-grade security protocols to protect your business from
                                evolving cyber threats,
                                ensuring your data remains safe at all times.
                            </p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="assets/img/features-illustration-3.webp" alt="" class="img-fluid">
                        </div>
                    </div>
                </div><!-- End tab content item -->

            </div>

        </div>

    </section><!-- /Features Section -->

    <!-- Features Cards Section -->
    <section id="features-cards" class="features-cards section">

        <div class="container">

            <div class="row gy-4">

                <!-- Award-Winning Quality -->
                <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="feature-box orange">
                        <i class="bi bi-award"></i>
                        <h4>Proven Excellence</h4>
                        <p>3x award-winning development team recognized for innovation and technical expertise</p>
                    </div>
                </div><!-- End Feature Box-->

                <!-- Client-Centric Approach -->
                <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="feature-box blue">
                        <i class="bi bi-patch-check"></i>
                        <h4>Client-First Focus</h4>
                        <p>Custom solutions tailored to your specific business needs and growth objectives</p>
                    </div>
                </div><!-- End Feature Box-->

                <!-- Fast Delivery -->
                <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="feature-box green">
                        <i class="bi bi-lightning-charge"></i>
                        <h4>Rapid Deployment</h4>
                        <p>Agile development process delivers working solutions 40% faster than industry average</p>
                    </div>
                </div><!-- End Feature Box-->

                <!-- ROI Focus -->
                <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                    <div class="feature-box red">
                        <i class="bi bi-graph-up-arrow"></i>
                        <h4>Measurable Results</h4>
                        <p>Solutions designed to deliver tangible ROI with performance tracking and analytics</p>
                    </div>
                </div><!-- End Feature Box-->

            </div>

        </div>

    </section><!-- /Features Cards Section -->

    <!-- Features 2 Section -->
    <section id="features-2" class="features-2 section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row align-items-center">

                <div class="col-lg-4">

                    <!-- Cross-Platform Development -->
                    <div class="feature-item text-end mb-5" data-aos="fade-right" data-aos-delay="200">
                        <div class="d-flex align-items-center justify-content-end gap-4">
                            <div class="feature-content">
                                <h3>Cross-Platform Development</h3>
                                <p>Build once, deploy everywhere. Our solutions work seamlessly across all devices
                                    and operating systems.</p>
                            </div>
                            <div class="feature-icon flex-shrink-0">
                                <i class="bi bi-device-ssd"></i>
                            </div>
                        </div>
                    </div><!-- End .feature-item -->

                    <!-- UI/UX Design -->
                    <div class="feature-item text-end mb-5" data-aos="fade-right" data-aos-delay="300">
                        <div class="d-flex align-items-center justify-content-end gap-4">
                            <div class="feature-content">
                                <h3>Intuitive UI/UX</h3>
                                <p>Beautiful interfaces designed for maximum user engagement and conversion.</p>
                            </div>
                            <div class="feature-icon flex-shrink-0">
                                <i class="bi bi-brush"></i>
                            </div>
                        </div>
                    </div><!-- End .feature-item -->

                    <!-- High Performance -->
                    <div class="feature-item text-end" data-aos="fade-right" data-aos-delay="400">
                        <div class="d-flex align-items-center justify-content-end gap-4">
                            <div class="feature-content">
                                <h3>High Performance</h3>
                                <p>Optimized code and architecture for lightning-fast load times and smooth
                                    operation.</p>
                            </div>
                            <div class="feature-icon flex-shrink-0">
                                <i class="bi bi-speedometer2"></i>
                            </div>
                        </div>
                    </div><!-- End .feature-item -->

                </div>

                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="phone-mockup text-center">
                        <img src="assets/img/phone-app-screen.webp" alt="Our Mobile App Development" class="img-fluid">
                    </div>
                </div><!-- End Phone Mockup -->

                <div class="col-lg-4">

                    <!-- Secure Coding -->
                    <div class="feature-item mb-5" data-aos="fade-left" data-aos-delay="200">
                        <div class="d-flex align-items-center gap-4">
                            <div class="feature-icon flex-shrink-0">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                            <div class="feature-content">
                                <h3>Enterprise Security</h3>
                                <p>Military-grade encryption and regular security audits to protect your business
                                    data.</p>
                            </div>
                        </div>
                    </div><!-- End .feature-item -->

                    <!-- Responsive Design -->
                    <div class="feature-item mb-5" data-aos="fade-left" data-aos-delay="300">
                        <div class="d-flex align-items-center gap-4">
                            <div class="feature-icon flex-shrink-0">
                                <i class="bi bi-phone"></i>
                            </div>
                            <div class="feature-content">
                                <h3>Fully Responsive</h3>
                                <p>Pixel-perfect designs that adapt flawlessly to any screen size or device.</p>
                            </div>
                        </div>
                    </div><!-- End .feature-item -->

                    <!-- Cloud Hosting -->
                    <div class="feature-item" data-aos="fade-left" data-aos-delay="400">
                        <div class="d-flex align-items-center gap-4">
                            <div class="feature-icon flex-shrink-0">
                                <i class="bi bi-cloud"></i>
                            </div>
                            <div class="feature-content">
                                <h3>Cloud Hosting</h3>
                                <p>Scalable, reliable hosting with 99.9% uptime and automatic backups.</p>
                            </div>
                        </div>
                    </div><!-- End .feature-item -->

                </div>
            </div>

        </div>

    </section><!-- /Features 2 Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row content justify-content-center align-items-center position-relative">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="display-4 mb-4">Ready to Transform Your Business Digitally?</h2>
                    <p class="mb-4">Let's build your next-generation software solution with our award-winning
                        development team. Get started with a free consultation today.</p>
                    <a href="#contact" class="btn btn-cta">Start Your Project Now</a>
                </div>

                <!-- Abstract Background Elements -->
                <div class="shape shape-1">
                    <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M47.1,-57.1C59.9,-45.6,68.5,-28.9,71.4,-10.9C74.2,7.1,71.3,26.3,61.5,41.1C51.7,55.9,35,66.2,16.9,69.2C-1.3,72.2,-21,67.8,-36.9,57.9C-52.8,48,-64.9,32.6,-69.1,15.1C-73.3,-2.4,-69.5,-22,-59.4,-37.1C-49.3,-52.2,-32.8,-62.9,-15.7,-64.9C1.5,-67,34.3,-68.5,47.1,-57.1Z"
                            transform="translate(100 100)"></path>
                    </svg>
                </div>

                <div class="shape shape-2">
                    <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M41.3,-49.1C54.4,-39.3,66.6,-27.2,71.1,-12.1C75.6,3,72.4,20.9,63.3,34.4C54.2,47.9,39.2,56.9,23.2,62.3C7.1,67.7,-10,69.4,-24.8,64.1C-39.7,58.8,-52.3,46.5,-60.1,31.5C-67.9,16.4,-70.9,-1.4,-66.3,-16.6C-61.8,-31.8,-49.7,-44.3,-36.3,-54C-22.9,-63.7,-8.2,-70.6,3.6,-75.1C15.4,-79.6,28.2,-58.9,41.3,-49.1Z"
                            transform="translate(100 100)"></path>
                    </svg>
                </div>

                <!-- Dot Pattern Groups -->
                <div class="dots dots-1">
                    <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                        <pattern id="dot-pattern" x="0" y="0" width="20" height="20"
                            patternUnits="userSpaceOnUse">
                            <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                        </pattern>
                        <rect width="100" height="100" fill="url(#dot-pattern)"></rect>
                    </svg>
                </div>

                <div class="dots dots-2">
                    <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                        <pattern id="dot-pattern-2" x="0" y="0" width="20" height="20"
                            patternUnits="userSpaceOnUse">
                            <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                        </pattern>
                        <rect width="100" height="100" fill="url(#dot-pattern-2)"></rect>
                    </svg>
                </div>

                <div class="shape shape-3">
                    <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M43.3,-57.1C57.4,-46.5,71.1,-32.6,75.3,-16.2C79.5,0.2,74.2,19.1,65.1,35.3C56,51.5,43.1,65,27.4,71.7C11.7,78.4,-6.8,78.3,-23.9,72.4C-41,66.5,-56.7,54.8,-65.4,39.2C-74.1,23.6,-75.8,4,-71.7,-13.2C-67.6,-30.4,-57.7,-45.2,-44.3,-56.1C-30.9,-67,-15.5,-74,0.7,-74.9C16.8,-75.8,33.7,-70.7,43.3,-57.1Z"
                            transform="translate(100 100)"></path>
                    </svg>
                </div>
            </div>

        </div>

    </section><!-- /Call To Action Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
    {
      "loop": true,
      "speed": 600,
      "autoplay": {
        "delay": 5000
      },
      "slidesPerView": "auto",
      "pagination": {
        "el": ".swiper-pagination",
        "type": "bullets",
        "clickable": true
      },
      "breakpoints": {
        "320": {
          "slidesPerView": 2,
          "spaceBetween": 40
        },
        "480": {
          "slidesPerView": 3,
          "spaceBetween": 60
        },
        "640": {
          "slidesPerView": 4,
          "spaceBetween": 80
        },
        "992": {
          "slidesPerView": 6,
          "spaceBetween": 120
        }
      }
    }
  </script>
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid"
                            alt=""></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section><!-- /Clients Section -->

    <!-- Founder Section -->
    <section id="testimonials" class="testimonials section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Meet Our Founders</h2>
            <p>The driving force behind our innovation and success</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row g-5">

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial-item">
                        <img src="assets/img/founder/bizhan.webp" class="testimonial-img" alt="">
                        <h3>Rahmatullah Bizhan</h3>
                        <h4>Co-Founder & CEO</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>I lead our strategic growth, transforming client challenges into digital
                                opportunities. My business acumen and tech passion drive our mission to deliver
                                transformative solutions.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div><!-- End testimonial item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="testimonial-item">
                        <img src="assets/img/founder/abdullah.webp" class="testimonial-img" alt="">
                        <h3>Abdullah Hussaini</h3>
                        <h4>Co-Founder & CTO</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>As technical visionary, I architected our core platforms with a focus on
                                scalability and security. My 12+ years in software engineering ensure we deliver
                                cutting-edge solutions.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div><!-- End testimonial item -->
            </div>

        </div>

    </section><!-- /Testimonials Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="123" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Clients</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="28" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Projects</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Years of Experience</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Workers</p>
                    </div>
                </div><!-- End Stats Item -->

            </div>

        </div>

    </section><!-- /Stats Section -->

    <!-- Services Section -->
    <section id="services" class="services section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Services</h2>
            <p>
                We provide end-to-end software solutions tailored to your business needs.
            </p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-4">

                <!-- Software Development -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card d-flex">
                        <div class="icon flex-shrink-0">
                            <i class="bi bi-activity"></i>
                        </div>
                        <div>
                            <h3>Software Development</h3>
                            <p>We build custom software solutions tailored to your business needs, ensuring
                                scalability, security, and performance.</p>
                                <a href="{{route('services.software-dev')}}" class="read-more">
                                    Read More <i class="bi bi-arrow-right"></i>
                                </a>
                        </div>
                    </div>
                </div><!-- End Service Card -->

                <!-- Mobile App Development -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card d-flex">
                        <div class="icon flex-shrink-0">
                            <i class="bi bi-phone"></i>
                        </div>
                        <div>
                            <h3>Mobile App Development</h3>
                            <p>We create cross-platform mobile apps for iOS and Android, delivering seamless user
                                experiences and robust functionality.</p>
                            <a href="{{route('services.mobile-app-dev-service')}}" class="read-more">Read More <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div><!-- End Service Card -->

                <!-- Web App Development -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card d-flex">
                        <div class="icon flex-shrink-0">
                            <i class="bi bi-globe"></i>
                        </div>
                        <div>
                            <h3>Web App Development</h3>
                            <p>We design and develop responsive, user-friendly web applications that drive
                                engagement and business growth.</p>
                            <a href="{{route('service.web-dev')}}" class="read-more">Read More <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div><!-- End Service Card -->

                <!-- Web Hosting -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card d-flex">
                        <div class="icon flex-shrink-0">
                            <i class="bi bi-cloud"></i>
                        </div>
                        <div>
                            <h3>Web Hosting</h3>
                            <p>We provide reliable, secure, and high-performance web hosting solutions to keep your
                                applications running smoothly.</p>
                            <a href="{{route('service.web-hosting')}}" class="read-more">Read More <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div><!-- End Service Card -->

                <!-- Graphic Design -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card d-flex">
                        <div class="icon flex-shrink-0">
                            <i class="bi bi-palette"></i>
                        </div>
                        <div>
                            <h3>Graphic Design</h3>
                            <p>
                                We craft visually stunning designs that elevate your brand identity,
                                from logos and marketing materials to UI/UX interfaces and social media graphics.
                            </p>
                            <a href="{{route('service.graphic-design')}}" class="read-more">Read More <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div><!-- End Service Card -->

                <!-- Online Marketing -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-card d-flex">
                        <div class="icon flex-shrink-0">
                            <i class="bi bi-megaphone"></i>
                        </div>
                        <div>
                            <h3>Marketing</h3>
                            <p>Boost your online presence with our targeted digital marketing strategies, including
                                SEO, social media, and PPC campaigns.</p>
                            <a href="{{route('service.marketing')}}" class="read-more">Read More <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div><!-- End Service Card -->


            </div>

        </div>

    </section><!-- /Services Section -->

    <!-- Pricing Section -->
    <section id="pricing" class="pricing section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Web Hosting Plans</h2>
            <p>
                We have a package for every website. Get online instantly with simple pricing.
            </p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-4 justify-content-center">

                <!-- Basic Plan -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="pricing-card">
                        <h3>Basic Plan</h3>
                        <div class="price">
                            <span class="currency">$</span>
                            <span class="amount">2</span>
                            <span class="period">/ month</span>
                        </div>
                        <p class="description">Perfect for small websites and blogs. Get started with reliable
                            hosting,
                            fast NVMe SSD storage, and unlimited bandwidth to grow your online presence.
                        </p>
                        <h4>Featured Included:</h4>
                        <ul class="features-list">
                            <li><i class="bi bi-check-circle-fill"></i>20 GB NVMe SSD Disk</li>
                            <li><i class="bi bi-check-circle-fill"></i>LiteSpeed Server</li>
                            <li><i class="bi bi-check-circle-fill"></i>WordPress Installer</li>
                            <li><i class="bi bi-check-circle-fill"></i>Unlimited Bandwidth</li>
                            <li><i class="bi bi-check-circle-fill"></i>Host 05 Websites</li>
                            <li><i class="bi bi-check-circle-fill"></i>Private Nameservers</li>
                            <li><i class="bi bi-check-circle-fill"></i>Website Builder Pro</li>
                            <li><i class="bi bi-check-circle-fill"></i>24/7 support</li>
                        </ul>
                        <a href="https://wa.me/93745282354?text=Hello%20there,%20I%20would%20like%20to%20get%20in%20touch%20with%20you" target="_blank" class="btn btn-primary">
                            Buy Now
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Standard Plan -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="pricing-card popular">
                        <div class="popular-badge">Most Popular</div>
                        <h3>Standard Plan</h3>
                        <div class="price">
                            <span class="currency">$</span>
                            <span class="amount">3</span>
                            <span class="period">/ month</span>
                        </div>
                        <p class="description">
                            Ideal for growing businesses and websites. Enjoy unlimited NVMe SSD storage,
                            blazing-fast LiteSpeed servers, and all the tools you need to scale effortlessly.
                        </p>
                        <h4>Featured Included:</h4>
                        <ul class="features-list">
                            <li><i class="bi bi-check-circle-fill"></i>Unlimited NVMe SSD Disk</li>
                            <li><i class="bi bi-check-circle-fill"></i>LiteSpeed Server</li>
                            <li><i class="bi bi-check-circle-fill"></i>WordPress Installer</li>
                            <li><i class="bi bi-check-circle-fill"></i>Unlimited Bandwidth</li>
                            <li><i class="bi bi-check-circle-fill"></i>Host 01 Website</li>
                            <li><i class="bi bi-check-circle-fill"></i>Private Nameservers</li>
                            <li><i class="bi bi-check-circle-fill"></i>Website Builder Pro</li>
                            <li><i class="bi bi-check-circle-fill"></i>24/7 support</li>
                        </ul>

                        <a href="https://wa.me/93745282354?text=Hello%20there,%20I%20would%20like%20to%20get%20in%20touch%20with%20you" target="_blank" class="btn btn-light">
                            Buy Now
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Premium Plan -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="pricing-card">
                        <h3>Premium Plan</h3>
                        <div class="price">
                            <span class="currency">$</span>
                            <span class="amount">5</span>
                            <span class="period">/ month</span>
                        </div>
                        <p class="description">
                            The ultimate solution for high-traffic websites and businesses. Enjoy unlimited
                            resources, top-tier performance, and advanced features to power your online presence.
                        </p>

                        <h4>Featured Included:</h4>
                        <ul class="features-list">
                            <li><i class="bi bi-check-circle-fill"></i>Unlimited NVMe DIsk</li>
                            <li><i class="bi bi-check-circle-fill"></i>LiteSpeed Server</li>
                            <li><i class="bi bi-check-circle-fill"></i>WordPress Installer</li>
                            <li><i class="bi bi-check-circle-fill"></i>Unlimited Bandwidth</li>
                            <li><i class="bi bi-check-circle-fill"></i>Host Unlimited Websites</li>
                            <li><i class="bi bi-check-circle-fill"></i>Private Nameservers</li>
                            <li><i class="bi bi-check-circle-fill"></i>Website Builder Pro</li>
                            <li><i class="bi bi-check-circle-fill"></i>24/7 support</li>
                        </ul>

                        <a href="https://wa.me/93745282354?text=Hello%20there,%20I%20would%20like%20to%20get%20in%20touch%20with%20you" target="_blank" class="btn btn-primary">
                            Buy Now
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- /Pricing Section -->

    <!-- Faq Section -->
    <section class="faq-9 faq section light-background" id="faq">
        <div class="container">
            <div class="row">

                <!-- FAQ Introduction -->
                <div class="col-lg-5" data-aos="fade-up">
                    <h2 class="faq-title">Have a question? Check out the FAQ</h2>
                    <p class="faq-description">
                        Explore our frequently asked questions to find answers about our services,
                        hosting plans, and software solutions. If you don’t find what you’re looking for,
                        feel free to contact us!
                    </p>
                    <div class="faq-arrow d-none d-lg-block" data-aos="fade-up" data-aos-delay="200">
                        <svg class="faq-arrow" width="200" height="211" viewBox="0 0 200 211" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M198.804 194.488C189.279 189.596 179.529 185.52 169.407 182.07L169.384 182.049C169.227 181.994 169.07 181.939 168.912 181.884C166.669 181.139 165.906 184.546 167.669 185.615C174.053 189.473 182.761 191.837 189.146 195.695C156.603 195.912 119.781 196.591 91.266 179.049C62.5221 161.368 48.1094 130.695 56.934 98.891C84.5539 98.7247 112.556 84.0176 129.508 62.667C136.396 53.9724 146.193 35.1448 129.773 30.2717C114.292 25.6624 93.7109 41.8875 83.1971 51.3147C70.1109 63.039 59.63 78.433 54.2039 95.0087C52.1221 94.9842 50.0776 94.8683 48.0703 94.6608C30.1803 92.8027 11.2197 83.6338 5.44902 65.1074C-1.88449 41.5699 14.4994 19.0183 27.9202 1.56641C28.6411 0.625793 27.2862 -0.561638 26.5419 0.358501C13.4588 16.4098 -0.221091 34.5242 0.896608 56.5659C1.8218 74.6941 14.221 87.9401 30.4121 94.2058C37.7076 97.0203 45.3454 98.5003 53.0334 98.8449C47.8679 117.532 49.2961 137.487 60.7729 155.283C87.7615 197.081 139.616 201.147 184.786 201.155L174.332 206.827C172.119 208.033 174.345 211.287 176.537 210.105C182.06 207.125 187.582 204.122 193.084 201.144C193.346 201.147 195.161 199.887 195.423 199.868C197.08 198.548 193.084 201.144 195.528 199.81C196.688 199.192 197.846 198.552 199.006 197.935C200.397 197.167 200.007 195.087 198.804 194.488ZM60.8213 88.0427C67.6894 72.648 78.8538 59.1566 92.1207 49.0388C98.8475 43.9065 106.334 39.2953 114.188 36.1439C117.295 34.8947 120.798 33.6609 124.168 33.635C134.365 33.5511 136.354 42.9911 132.638 51.031C120.47 77.4222 86.8639 93.9837 58.0983 94.9666C58.8971 92.6666 59.783 90.3603 60.8213 88.0427Z"
                                fill="currentColor"></path>
                        </svg>
                    </div>
                </div>

                <!-- FAQ Items -->
                <div class="col-lg-7" data-aos="fade-up" data-aos-delay="300">
                    <div class="faq-container">

                        <!-- FAQ Item 1 -->
                        <div class="faq-item faq-active">
                            <h3>What services do you offer?</h3>
                            <div class="faq-content">
                                <p>
                                    We specialize in custom software development, web and mobile app development,
                                    UX/UI design, database design, and reliable web hosting solutions.
                                    Our services are tailored to meet your business needs.
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <!-- FAQ Item 2 -->
                        <div class="faq-item">
                            <h3>What hosting plans do you provide?</h3>
                            <div class="faq-content">
                                <p>
                                    We offer three hosting plans: Basic, Standard, and Premium.
                                    Each plan includes features like NVMe SSD storage, LiteSpeed servers,
                                    unlimited bandwidth, and 24/7 support. Choose the one that fits your needs!
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <!-- FAQ Item 3 -->
                        <div class="faq-item">
                            <h3>Do you provide support for your hosting services?</h3>
                            <div class="faq-content">
                                <p>
                                    Yes, we offer 24/7 support for all our hosting plans.
                                    Our team is always available to assist you with any technical issues or
                                    questions.
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <!-- FAQ Item 4 -->
                        <div class="faq-item">
                            <h3>Can you develop custom software for my business?</h3>
                            <div class="faq-content">
                                <p>
                                    Absolutely! We specialize in building custom software solutions tailored to your
                                    specific business requirements. From concept to deployment, we’ve got you
                                    covered.
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <!-- FAQ Item 5 -->
                        <div class="faq-item">
                            <h3>Do you offer mobile app development?</h3>
                            <div class="faq-content">
                                <p>
                                    Yes, we develop cross-platform mobile applications for both iOS and Android.
                                    Our apps are designed to deliver seamless user experiences and robust
                                    functionality.
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <!-- FAQ Item 6 -->
                        <div class="faq-item">
                            <h3>How do I get started with your services?</h3>
                            <div class="faq-content">
                                <p>
                                    Simply reach out to us via our contact form, email, or phone.
                                    We’ll discuss your requirements and provide a tailored solution to meet your
                                    needs.
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                    </div>
                </div>

            </div>
        </div>
    </section><!-- /Faq Section -->


    <!-- Call To Action 2 Section -->
    <section id="call-to-action-2" class="call-to-action-2 section dark-background">

        <div class="container">
            <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-10">
                    <div class="text-center">
                        <h3>Ready to Transform Your Business?</h3>
                        <p>
                            Whether you need custom software, a mobile app, or reliable web hosting,
                            we’re here to help. Let’s build something amazing together—contact us today
                            to get started!
                        </p>
                        <a class="cta-btn" href="index.html#contact">Get Started Now</a>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- /Call To Action 2 Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Contact</h2>
            <p>
                Have a question or want to discuss your next project? We’re here to help!
                Get in touch with our team, and let’s create something extraordinary together.
            </p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-4 g-lg-5">
                <div class="col-lg-5">
                    <div class="info-box" data-aos="fade-up" data-aos-delay="200">
                        <h3>Contact Info</h3>
                        <p>
                            Have a project in mind or need technical assistance? Reach out to us! Our team is ready
                            to help you build innovative solutions.
                            Call, email, or visit us—we’re here to turn your ideas into reality.
                        </p>

                        <!-- <div class="info-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box">
                      <i class="bi bi-geo-alt"></i>
                    </div>
                    <div class="content">
                      <h4>Our Location</h4>
                      <p>A108 Adam Street</p>
                      <p>New York, NY 535022</p>
                    </div>
                  </div> -->

                        <div class="info-item" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon-box">
                                <i class="bi bi-telephone"></i>
                            </div>
                            <div class="content">
                                <h4>Phone Number</h4>
                                <p>+93 745 282 354</p>
                                <p>+93 749 840 055</p>
                            </div>
                        </div>

                        <div class="info-item" data-aos="fade-up" data-aos-delay="500">
                            <div class="icon-box">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <div class="content">
                                <h4>Email Address</h4>
                                <p>info@glidesoft.net</p>
                                <p>h.abdullah1394@gmail.com</p>
                                <p>rahmatullahbizhan@gmail.com</p>
                            </div>
                        </div>

                        <div class="info-item" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon-box">
                                <i class="bi bi-whatsapp"></i>
                            </div>
                            <div class="content">
                                <h4>Whatsapp</h4>
                                <p>+93 745 282 354</p>
                                <p>+93 749 840 055</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="contact-form" data-aos="fade-up" data-aos-delay="300">
                        <h3>Get In Touch</h3>
                        <p>
                            Ready to start your next project or have questions about our services? We’d love to hear
                            from you!
                            Contact us today, and let’s build something amazing together.
                        </p>

                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name"
                                        required="">
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email"
                                        required="">
                                </div>

                                <div class="col-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                        required="">
                                </div>

                                <div class="col-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                                </div>

                                <div class="col-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit" class="btn">Send Message</button>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>

            </div>

        </div>

    </section><!-- /Contact Section -->
@endsection
