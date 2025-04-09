@extends('layouts.app')

@section('content')
    <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container">
            <h1>Web Application Development Services</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li class="current">Web Application Development</li>
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
                        <h4>Our Web Services</h4>
                        <div class="services-list">
                            <a href="#" class="active"><i class="bi bi-arrow-right-circle"></i><span>Custom Web Apps</span></a>
                            <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Progressive Web Apps</span></a>
                            <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Enterprise Solutions</span></a>
                            <a href="#"><i class="bi bi-arrow-right-circle"></i><span>E-Commerce Systems</span></a>
                            <a href="#"><i class="bi bi-arrow-right-circle"></i><span>API Development</span></a>
                        </div>
                    </div><!-- End Services List -->

                    <div class="help-box d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-browser-chrome help-icon"></i>
                        <h4>Web App Consultation?</h4>
                        <p class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i> <span>+93 745 282 354</span></p>
                        <p class="d-flex align-items-center mt-1 mb-0"><i class="bi bi-envelope me-2"></i> <a
                                href="mailto:web@glidesoft.net">web@glidesoft.net</a></p>
                    </div>
                </div>

                <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{asset('assets/img/web-dev.png')}}" alt="Web application development team working"
                        class="img-fluid services-img">
                    <h3>Custom Web Applications Built for Performance</h3>
                    <p>
                        We develop responsive, secure web applications that streamline operations and engage users. 
                        Using modern frameworks like React.js, Angular, and Vue.js, we create solutions that 
                        deliver seamless experiences across all devices and browsers.
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span>Full-stack development with Node.js, Laravel, or Django</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Cloud-native architecture for scalability</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Enterprise-grade security protocols</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Continuous integration/deployment pipelines</span></li>
                    </ul>
                    <p>
                        Our development process begins with comprehensive requirements analysis and user flow mapping. 
                        We then architect solutions using microservices or monolithic approaches based on your 
                        specific scalability needs and budget considerations.
                    </p>

                    <h4 class="mt-4">Our Web Application Expertise</h4>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="expertise-item">
                                <i class="bi bi-shop-window text-primary">&nbsp;</i>
                                <h5 class="d-inline-block">E-Commerce Platforms</h5>
                                <p>Custom online stores with payment gateway integrations and inventory management</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="expertise-item">
                                <i class="bi bi-people text-primary">&nbsp;</i>
                                <h5 class="d-inline-block">CRM Systems</h5>
                                <p>Customer relationship management tools with analytics dashboards</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="expertise-item">
                                <i class="bi bi-graph-up text-primary">&nbsp;</i>
                                <h5 class="d-inline-block">Business Intelligence</h5>
                                <p>Data visualization and reporting applications</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="expertise-item">
                                <i class="bi bi-chat-square-text text-primary">&nbsp;</i>
                                <h5 class="d-inline-block">Collaboration Tools</h5>
                                <p>Real-time communication and project management systems</p>
                            </div>
                        </div>
                    </div>

                    <p class="mt-4">
                        We implement robust testing protocols including unit testing, integration testing, and 
                        user acceptance testing to ensure flawless performance. Post-launch, we provide 
                        maintenance packages with performance monitoring and regular updates.
                    </p>
                </div>
            </div>
        </div>
    </section><!-- /Service Details Section -->
@endsection

@push('styles')
<style>
    .expertise-item {
        background: #f8f9fa;
        padding: 1.5rem;
        border-radius: 8px;
        height: 100%;
        transition: transform 0.3s;
    }
    .expertise-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    .expertise-item i {
        font-size: 1.75rem;
        margin-bottom: 1rem;
        display: inline-block;
    }
    .expertise-item h5 {
        color: #2c3e50;
    }
</style>
@endpush