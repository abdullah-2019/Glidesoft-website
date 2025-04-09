@extends('layouts.app')

@section('content')
    <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container">
            <h1>Mobile Application Development Services</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li class="current">Mobile App Development</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-box">
                        <h4>Our Mobile Services</h4>
                        <div class="services-list">
                            <a href="#"><i class="bi bi-arrow-right-circle"></i><span>iOS App Development</span></a>
                            <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Android App
                                    Development</span></a>
                            <a href="#" class="active"><i class="bi bi-arrow-right-circle"></i><span>Cross-Platform
                                    Apps</span></a>
                            <a href="#"><i class="bi bi-arrow-right-circle"></i><span>UI/UX Mobile Design</span></a>
                            <a href="#"><i class="bi bi-arrow-right-circle"></i><span>App Maintenance</span></a>
                        </div>
                    </div><!-- End Services List -->

                    <div class="help-box d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-phone help-icon"></i>
                        <h4>Mobile App Consultation?</h4>
                        <p class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i> <span>+93 745
                                282 354</span></p>
                        <p class="d-flex align-items-center mt-1 mb-0"><i class="bi bi-envelope me-2"></i> <a
                                href="mailto:mobile@glidesoft.net">mobile@glidesoft.net</a></p>
                    </div>
                </div>

                <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('assets/img/illustration-1.webp') }}" alt="Mobile app development team working"
                        class="img-fluid services-img">
                    <h3>Custom Mobile Solutions for iOS & Android</h3>
                    <p>
                        We create high-performance mobile applications that engage users and drive business growth.
                        Our team specializes in native and cross-platform development using the latest frameworks
                        like Flutter and React Native to deliver seamless experiences across all devices.
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span>Full-cycle mobile development from concept to App Store
                                deployment</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Platform-specific UI/UX design for iOS and
                                Android</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Enterprise-grade security and API integrations</span>
                        </li>
                        <li><i class="bi bi-check-circle"></i> <span>App Store Optimization (ASO) and publishing
                                support</span></li>
                    </ul>
                    <p>
                        Our mobile development process begins with comprehensive market research and user persona
                        development.
                        We then architect applications that leverage each platform's native capabilities while maintaining
                        code efficiency. Performance optimization ensures your app runs smoothly even on older devices.
                    </p>
                    <p>
                        Whether you need a consumer-facing application, B2B solution, or internal enterprise tool,
                        we have expertise across all mobile domains:
                    </p>
                    <ul>
                        <li>E-commerce and mCommerce applications</li>
                        <li>Social networking and community apps</li>
                        <li>IoT and wearable integrations</li>
                        <li>AR/VR mobile experiences</li>
                        <li>On-demand service platforms</li>
                    </ul>
                    <p>
                        Post-launch, we provide ongoing maintenance, updates, and feature enhancements to keep your app
                        competitive in rapidly evolving mobile marketplaces. Our analytics integration helps track
                        user engagement and identify improvement opportunities.
                    </p>
                </div>
            </div>
        </div>
    </section><!-- /Service Details Section -->
@endsection
