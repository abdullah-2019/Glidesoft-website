@extends('layouts.app')

@section('content')
    <div class="page-title light-background">
        <div class="container">
            <h1>Terms of Service</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li class="current">Terms of Service</li>
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
                        <h4>Our Services</h4>
                        <div class="services-list">
                            <a href="#" class="active"><i class="bi bi-arrow-right-circle"></i><span>Terms of Service</span></a>
                            <a href="{{route('privacy-policy')}}"><i class="bi bi-arrow-right-circle"></i><span>Privacy Policy</span></a>
                            <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Cookie Policy</span></a>
                            <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Service Level Agreement</span></a>
                        </div>
                    </div>

                    <div class="help-box d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-headset help-icon"></i>
                        <h4>Need Technical Consultation?</h4>
                        <p class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i> <span>+93 745
                                282 354</span></p>
                        <p class="d-flex align-items-center mt-1 mb-0"><i class="bi bi-envelope me-2"></i> <a
                                href="mailto:info@glidesoft.net">info@glidesoft.net</a></p>
                    </div>

                </div>

                <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('assets/img/terms-of-service.png') }}" alt="Software development team working"
                        class="img-fluid services-img">

                    <p class="last-updated"><i class="bi bi-calendar-check me-2"></i>Last Updated: June 15, 2023</p>

                    <div class="terms-section">
                        <h3><i class="bi bi-check-circle-fill text-primary me-2"></i> Acceptance of Terms</h3>
                        <p>By using GlideSoft's services, you agree to these legally binding Terms. If you're accepting on
                            behalf of an organization, you represent authority to bind them.</p>
                    </div>
                    <br>

                    <div class="terms-section">
                        <h3><i class="bi bi-laptop text-primary me-2"></i> Our Services</h3>
                        <p>GlideSoft provides custom software development including:</p>
                        <ul>
                            <li>Web and mobile application development</li>
                            <li>Cloud solutions and API integrations</li>
                            <li>UI/UX design services</li>
                            <li>Technical consulting</li>
                        </ul>
                    </div>
                    <br>

                    <div class="terms-section">
                        <h3><i class="bi bi-cash-coin text-primary me-2"></i> Payment Terms</h3>
                        <ul>
                            <li>50% deposit required for project commencement</li>
                            <li>Balance due upon project completion</li>
                            <li>Late payments incur 2% monthly interest</li>
                        </ul>
                    </div>
                    <br>
                    <div class="terms-section">
                        <h3><i class="bi bi-lightbulb text-primary me-2"></i> Intellectual Property</h3>
                        <p>Upon full payment, clients receive exclusive rights to deliverables. We retain rights to
                            pre-existing code and development frameworks.</p>
                    </div>
                    <br>

                    <div class="terms-section">
                        <h3><i class="bi bi-shield-lock text-primary me-2"></i> Confidentiality</h3>
                        <p>Both parties agree to protect sensitive information shared during engagements for 3 years
                            post-project.</p>
                    </div>
                    <br>

                    <div class="terms-section">
                        <h3><i class="bi bi-exclamation-triangle text-primary me-2"></i> Limitations</h3>
                        <p>Our liability is capped at project fees. We're not liable for third-party services or force
                            majeure events.</p>
                    </div>
                    <br>

                    <div class="terms-section">
                        <h3><i class="bi bi-gear text-primary me-2"></i> Changes to Terms</h3>
                        <p>Updated terms become effective 30 days after posting on our website.</p>
                    </div>
                    <br>

                    <div class="alert alert-info mt-4">
                        <i class="bi bi-info-circle me-2"></i>For complete terms including dispute resolution and governing
                        law, please contact our legal team.
                    </div>

                </div>

            </div>

        </div>

    </section><!-- /Service Details Section -->
@endsection
