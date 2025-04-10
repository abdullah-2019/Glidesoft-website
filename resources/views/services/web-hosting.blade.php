@extends('layouts.app')

@section('content')
    <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container">
            <h1>Web Hosting Solutions</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li class="current">Web Hosting</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Hosting Plans Section -->
    <section id="hosting-plans" class="hosting-plans section">
        <div class="container">
            <div class="section-title text-center mb-5">
                <h2 data-aos="fade-up">Reliable Hosting for Your Digital Presence</h2>
                <p data-aos="fade-up" data-aos-delay="100">High-performance hosting solutions tailored to your website's needs with 99.9% uptime guarantee</p>
            </div>

            <div class="row gy-4">
                <!-- Basic Plan -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="hosting-card">
                        <div class="card-header">
                            <h3>Starter</h3>
                            <div class="price"><sup>$</sup>2.99<span>/mo</span></div>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i>20 GB NVMe SSD Disk</li>
                                <li><i class="bi bi-check-circle-fill"></i>LiteSpeed Server</li>
                                <li><i class="bi bi-check-circle-fill"></i>WordPress Installer</li>
                                <li><i class="bi bi-check-circle-fill"></i>Unlimited Bandwidth</li>
                                <li><i class="bi bi-check-circle-fill"></i>Host 05 Websites</li>
                                <li><i class="bi bi-check-circle-fill"></i>Private Nameservers</li>
                                <li><i class="bi bi-check-circle-fill"></i>Website Builder Pro</li>
                                <li><i class="bi bi-check-circle-fill"></i>24/7 support</li>
                            </ul>
                            <a href="#" class="btn btn-custom">Get Started</a>
                        </div>
                    </div>
                </div>

                <!-- Popular Plan -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="hosting-card popular">
                        <div class="popular-badge">Most Popular</div>
                        <div class="card-header">
                            <h3>Business</h3>
                            <div class="price"><sup>$</sup>5.99<span>/mo</span></div>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i>Unlimited NVMe SSD Disk</li>
                                <li><i class="bi bi-check-circle-fill"></i>LiteSpeed Server</li>
                                <li><i class="bi bi-check-circle-fill"></i>WordPress Installer</li>
                                <li><i class="bi bi-check-circle-fill"></i>Unlimited Bandwidth</li>
                                <li><i class="bi bi-check-circle-fill"></i>Host 01 Website</li>
                                <li><i class="bi bi-check-circle-fill"></i>Private Nameservers</li>
                                <li><i class="bi bi-check-circle-fill"></i>Website Builder Pro</li>
                                <li><i class="bi bi-check-circle-fill"></i>24/7 support</li>
                            </ul>
                            <a href="#" class="btn btn-custom bg-full">Get Started</a>
                        </div>
                    </div>
                </div>

                <!-- Premium Plan -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="hosting-card">
                        <div class="card-header">
                            <h3>Enterprise</h3>
                            <div class="price"><sup>$</sup>12.99<span>/mo</span></div>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i>Unlimited NVMe DIsk</li>
                                <li><i class="bi bi-check-circle-fill"></i>LiteSpeed Server</li>
                                <li><i class="bi bi-check-circle-fill"></i>WordPress Installer</li>
                                <li><i class="bi bi-check-circle-fill"></i>Unlimited Bandwidth</li>
                                <li><i class="bi bi-check-circle-fill"></i>Host Unlimited Websites</li>
                                <li><i class="bi bi-check-circle-fill"></i>Private Nameservers</li>
                                <li><i class="bi bi-check-circle-fill"></i>Website Builder Pro</li>
                                <li><i class="bi bi-check-circle-fill"></i>24/7 support</li>
                            </ul>
                            <a href="#" class="btn btn-custom">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Hosting Plans Section -->

    <!-- Features Section -->
    <section id="hosting-features" class="hosting-features section light-background">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right">
                    <img src="{{asset('assets/img/server-illustration.png')}}" alt="Hosting Server Infrastructure" class="img-fluid">
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <h2>Premium Hosting Infrastructure</h2>
                    <p>Our hosting platform is optimized for speed, security, and reliability:</p>
                    
                    <div class="feature-list mt-4">
                        <div class="feature-item d-flex">
                            <i class="bi bi-lightning text-primary"></i>
                            <div>
                                <h4>LiteSpeed Web Server</h4>
                                <p>Up to 6x faster page loads compared to traditional Apache servers</p>
                            </div>
                        </div>
                        
                        <div class="feature-item d-flex">
                            <i class="bi bi-shield-lock text-primary"></i>
                            <div>
                                <h4>Advanced Security</h4>
                                <p>Imunify360 protection, DDoS mitigation, and automated malware scanning</p>
                            </div>
                        </div>
                        
                        <div class="feature-item d-flex">
                            <i class="bi bi-database text-primary"></i>
                            <div>
                                <h4>Optimized Databases</h4>
                                <p>Redis and Memcached support for high-performance applications</p>
                            </div>
                        </div>
                        
                        <div class="feature-item d-flex">
                            <i class="bi bi-globe-americas text-primary"></i>
                            <div>
                                <h4>Global Data Centers</h4>
                                <p>Choose from server locations in US, Europe, and Asia for optimal latency</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Features Section -->

    <!-- Managed Services Section -->
    <section id="managed-services" class="managed-services section">
        <div class="container">
            <div class="section-title text-center mb-5">
                <h2 data-aos="fade-up">Managed Hosting Services</h2>
                <p data-aos="fade-up" data-aos-delay="100">Focus on your business while we handle the technical details</p>
            </div>
            
            <div class="row gy-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card">
                        <i class="bi bi-arrow-repeat service-icon"></i>
                        <h4>Automated Backups</h4>
                        <p>Daily or hourly backups with 1-click restoration</p>
                    </div>
                </div>
                
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card">
                        <i class="bi bi-shield-check service-icon"></i>
                        <h4>Security Monitoring</h4>
                        <p>24/7 threat detection and prevention</p>
                    </div>
                </div>
                
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card">
                        <i class="bi bi-graph-up service-icon"></i>
                        <h4>Performance Optimization</h4>
                        <p>Regular tuning for maximum speed</p>
                    </div>
                </div>
                
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card">
                        <i class="bi bi-arrow-up-circle service-icon"></i>
                        <h4>One-Click Updates</h4>
                        <p>Keep all software current with automated patching</p>
                    </div>
                </div>
                
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card">
                        <i class="bi bi-headset service-icon"></i>
                        <h4>Expert Support</h4>
                        <p>Dedicated technical assistance when you need it</p>
                    </div>
                </div>
                
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card">
                        <i class="bi bi-activity service-icon"></i>
                        <h4>Uptime Monitoring</h4>
                        <p>Instant alerts if any issues arise</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Managed Services Section -->

    <!-- CTA Section -->
    <section id="hosting-cta" class="hosting-cta section dark-background">
        <div class="container text-center">
            <h2 data-aos="fade-up">Ready to Experience Premium Hosting?</h2>
            <p class="mb-4" data-aos="fade-up" data-aos-delay="100">Migrate your website for free with our expert assistance</p>
            <div data-aos="fade-up" data-aos-delay="200">
                <a href="#" class="btn btn-light me-3">Get Started Now</a>
                <a href="#" class="btn btn-outline-light">Chat with an Expert</a>
            </div>
        </div>
    </section><!-- /CTA Section -->
@endsection

@push('styles')
<style>
    /* Hosting Card Styles */
    .hosting-card {
        background: white;
        border-radius: 10px;
        box-shadow: 0 5px 30px rgba(0,0,0,0.05);
        overflow: hidden;
        height: 100%;
        position: relative;
        transition: transform 0.3s;
    }
    .hosting-card:hover {
        transform: translateY(-10px);
    }
    .hosting-card.popular {
        border: 2px solid  var(--accent-color);
    }
    .popular-badge {
        position: absolute;
        top: 15px;
        right: -30px;
        background: var(--accent-color);
        color: white;
        padding: 5px 30px;
        transform: rotate(45deg);
        font-size: 0.8rem;
        font-weight: bold;
    }
    .card-header {
        padding: 1.5rem;
        background: #f8f9fa;
        text-align: center;
    }
    .card-header h3 {
        color: #2c3e50;
        margin-bottom: 0.5rem;
    }
    .price {
        font-size: 2.5rem;
        font-weight: bold;
        color: var(--accent-color);
    }
    .price span {
        font-size: 1rem;
        color: #7f8c8d;
    }
    .card-body {
        padding: 1.5rem;
    }
    .card-body ul {
        list-style: none;
        padding: 0;
        margin-bottom: 2rem;
    }
    .card-body li {
        padding: 0.5rem 0;
        border-bottom: 1px dashed #eee;
    }
    .card-body i {
        padding-right: 5px;
        color: var(--accent-color);
    }
    .card-body li:last-child {
        border-bottom: none;
    }
    
    /* Feature List Styles */
    .feature-item {
        margin-bottom: 1.5rem;
    }
    .feature-item i {
        font-size: 1.75rem;
        margin-right: 1rem;
        flex-shrink: 0;
    }
    
    /* Service Card Styles */
    .service-card {
        background: white;
        padding: 2rem;
        border-radius: 8px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        height: 100%;
        text-align: center;
    }
    .service-icon {
        font-size: 2.5rem;
        color: #3498db;
        margin-bottom: 1rem;
    }
    .btn-custom {
        border: var(--accent-color) 1px solid;
    }
    .btn-custom :hover {
        border: var(--accent-color) 1px solid;
        background-color: var(--accent-color) !important;
    }
    .bg-full {
        background-color: var(--accent-color);
        color: #ffffff;
    }
</style>
@endpush