@extends('layouts.app')

@section('content')
    <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container">
            <h1>Graphic Design Services</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li class="current">Graphic Design</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Service Hero Section -->
    <section id="design-hero" class="design-hero section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2>Visual Identity That Makes Your Brand Stand Out</h2>
                    <p class="lead">We create compelling visual designs that communicate your brand's essence and
                        captivate your audience across all platforms.</p>
                    <div class="d-flex mt-4">
                        <a href="#contact" class="btn btn-primary me-3">Get a Free Quote</a>
                        <a href="#portfolio" class="btn btn-outline-primary">View Portfolio</a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <img src="{{ asset('assets/img/graphic-designer-man.png') }}" alt="Graphic design examples"
                        class="img-fluid rounded-3">
                </div>
            </div>
        </div>
    </section><!-- /Service Hero Section -->

    <!-- Design Services Section -->
    <section id="design-services" class="design-services section light-background">
        <div class="container">
            <div class="section-title text-center mb-5">
                <h2 data-aos="fade-up">Our Design Services</h2>
                <p data-aos="fade-up" data-aos-delay="100">Comprehensive design solutions for all your business needs</p>
            </div>

            <div class="row gy-4">
                <!-- Brand Identity -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-badge-ad"></i>
                        </div>
                        <h3>Brand Identity</h3>
                        <ul>
                            <li>Logo Design</li>
                            <li>Brand Guidelines</li>
                            <li>Business Stationery</li>
                            <li>Brand Style Guides</li>
                        </ul>
                    </div>
                </div>

                <!-- Print Design -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-printer"></i>
                        </div>
                        <h3>Print Design</h3>
                        <ul>
                            <li>Brochures & Flyers</li>
                            <li>Business Cards</li>
                            <li>Posters & Banners</li>
                            <li>Packaging Design</li>
                        </ul>
                    </div>
                </div>

                <!-- Digital Design -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-phone"></i>
                        </div>
                        <h3>Digital Design</h3>
                        <ul>
                            <li>Social Media Graphics</li>
                            <li>Email Templates</li>
                            <li>Digital Ads</li>
                            <li>Web Banners</li>
                        </ul>
                    </div>
                </div>

                <!-- UI/UX Design -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-layout-wtf"></i>
                        </div>
                        <h3>UI/UX Design</h3>
                        <ul>
                            <li>Website Mockups</li>
                            <li>App Interfaces</li>
                            <li>User Flows</li>
                            <li>Wireframing</li>
                        </ul>
                    </div>
                </div>

                <!-- Illustration -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-brush"></i>
                        </div>
                        <h3>Illustration</h3>
                        <ul>
                            <li>Custom Illustrations</li>
                            <li>Icons & Infographics</li>
                            <li>Character Design</li>
                            <li>Technical Drawings</li>
                        </ul>
                    </div>
                </div>

                <!-- Motion Graphics -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-camera-reels"></i>
                        </div>
                        <h3>Motion Graphics</h3>
                        <ul>
                            <li>Animated Logos</li>
                            <li>Explainer Videos</li>
                            <li>Social Media Animations</li>
                            <li>Presentation Graphics</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Design Services Section -->

    <!-- Design Process Section -->
    <section id="design-process" class="design-process section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right">
                    <img src="{{ asset('assets/img/graphic-1.png') }}" alt="Graphic design process" class="img-fluid">
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <h2>Our Proven Design Process</h2>
                    <div class="process-step">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h4>Discovery</h4>
                            <p>We learn about your business, audience, and design needs through detailed consultations.</p>
                        </div>
                    </div>
                    <div class="process-step">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h4>Concept Development</h4>
                            <p>Our designers create initial concepts and present them for your feedback.</p>
                        </div>
                    </div>
                    <div class="process-step">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h4>Refinement</h4>
                            <p>We refine the selected concept based on your input and preferences.</p>
                        </div>
                    </div>
                    <div class="process-step">
                        <div class="step-number">4</div>
                        <div class="step-content">
                            <h4>Final Delivery</h4>
                            <p>You receive all final files in required formats with full ownership rights.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Design Process Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section light-background">
        <div class="container">
            <div class="section-title text-center mb-5">
                <h2 data-aos="fade-up">Our Design Portfolio</h2>
                <p data-aos="fade-up" data-aos-delay="100">See examples of our recent design work</p>
            </div>

            <div class="row gy-4 portfolio-container">
                <!-- Portfolio Item 1 -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('assets/img/clients/client-1.png') }}" class="img-fluid"
                            alt="Brand identity design">
                        <div class="portfolio-info">
                            <h4>Tech Startup Branding</h4>
                            <p>Logo & Visual Identity</p>
                            <div class="portfolio-links">
                                <a href="{{ asset('assets/img/clients/client-1.png') }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox"
                                    title="Tech Startup Branding"><i class="bi bi-fullscreen"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item 2 -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('assets/img/clients/client-5.png') }}" class="img-fluid"
                            alt="Brochure design">
                        <div class="portfolio-info">
                            <h4>Corporate Brochure</h4>
                            <p>Print Design</p>
                            <div class="portfolio-links">
                                <a href="{{ asset('assets/img/clients/client-5.png') }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox"
                                    title="Corporate Brochure"><i class="bi bi-fullscreen"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item 3 -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('assets/img/clients/client-8.png') }}" class="img-fluid"
                            alt="Mobile app UI">
                        <div class="portfolio-info">
                            <h4>Fitness App UI</h4>
                            <p>Mobile Interface Design</p>
                            <div class="portfolio-links">
                                <a href="{{ asset('assets/img/clients/client-8.png') }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="Fitness App UI"><i
                                        class="bi bi-fullscreen"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5" data-aos="fade-up">
                <a href="portfolio.html" class="btn btn-outline-primary">View Full Portfolio</a>
            </div>
        </div>
    </section><!-- /Portfolio Section -->

    <!-- CTA Section -->
    <section id="design-cta" class="design-cta section dark-background">
        <div class="container text-center">
            <h2 data-aos="fade-up">Ready to Elevate Your Visual Branding?</h2>
            <p class="mb-4" data-aos="fade-up" data-aos-delay="100">Get professional designs that make your business
                stand out</p>
            <div data-aos="fade-up" data-aos-delay="200">
                <a href="#contact" class="btn btn-light me-3">Start Your Project</a>
                <a href="#contact" class="btn btn-outline-light">Request Consultation</a>
            </div>
        </div>
    </section><!-- /CTA Section -->
@endsection

@push('styles')
    <style>
        /* Hero Section */
        .design-hero {
            padding: 5rem 0;
        }

        .design-hero h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: #2c3e50;
        }

        .design-hero .lead {
            font-size: 1.25rem;
            color: #7f8c8d;
        }

        /* Service Cards */
        .service-card {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.05);
            height: 100%;
            transition: transform 0.3s;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .service-icon {
            font-size: 2.5rem;
            color: #3498db;
            margin-bottom: 1.5rem;
        }

        .service-card h3 {
            color: #2c3e50;
            margin-bottom: 1.5rem;
        }

        .service-card ul {
            list-style: none;
            padding-left: 0;
        }

        .service-card li {
            padding: 0.5rem 0;
            border-bottom: 1px dashed #eee;
        }

        .service-card li:last-child {
            border-bottom: none;
        }

        /* Process Steps */
        .process-step {
            display: flex;
            margin-bottom: 2rem;
        }

        .step-number {
            width: 50px;
            height: 50px;
            background: #3498db;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: bold;
            margin-right: 1.5rem;
            flex-shrink: 0;
        }

        .step-content h4 {
            color: #2c3e50;
            margin-bottom: 0.5rem;
        }

        /* Portfolio */
        .portfolio-wrap {
            border-radius: 10px;
            overflow: hidden;
            position: relative;
        }

        .portfolio-info {
            position: absolute;
            bottom: -100%;
            left: 0;
            right: 0;
            background: rgba(52, 152, 219, 0.9);
            color: white;
            padding: 1.5rem;
            transition: 0.3s;
        }

        .portfolio-wrap:hover .portfolio-info {
            bottom: 0;
        }

        .portfolio-links a {
            color: white;
            margin: 0 0.5rem;
            font-size: 1.25rem;
        }
    </style>
@endpush

@push('scripts')
    <!-- Initialize portfolio lightbox -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // This would initialize your lightbox plugin
            // Example: GLightbox();
        });
    </script>
@endpush
