@extends('layouts.app')

@section('content')
    <div class="page-title light-background">
        <div class="container">
            <h1>Privacy Policy</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li class="current">Privacy Policy</li>
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
                        <h4>Legal Documents</h4>
                        <div class="services-list">
                            <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Terms of Service</span></a>
                            <a href="#" class="active"><i class="bi bi-arrow-right-circle"></i><span>Privacy
                                    Policy</span></a>
                            <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Cookie Policy</span></a>
                            <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Data Processing
                                    Agreement</span></a>
                        </div>
                    </div>

                    <div class="help-box d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-shield-lock help-icon"></i>
                        <h4>Data Protection Officer</h4>
                        <p class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i> <span>+93 745
                                282 354</span></p>
                        <p class="d-flex align-items-center mt-1 mb-0"><i class="bi bi-envelope me-2"></i> <a
                                href="mailto:dpo@glidesoft.net">dpo@glidesoft.net</a></p>
                    </div>

                </div>

                <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('assets/img/terms-of-service.png') }}" alt="Software development team working"
                        class="img-fluid services-img">

                    <p class="last-updated"><i class="bi bi-calendar-check me-2"></i>Last Updated: June 15, 2023</p>

                    <div class="policy-section">
                        <h3><i class="bi bi-info-circle-fill text-primary me-2"></i>1. Information We Collect</h3>
                        <p>We may collect and process:</p>
                        <ul>
                            <li><strong>Contact Data:</strong> Name, email, phone when you inquire about services</li>
                            <li><strong>Project Data:</strong> Business requirements and documents you provide</li>
                            <li><strong>Technical Data:</strong> IP address, browser type, and usage patterns</li>
                            <li><strong>Payment Data:</strong> Processed securely through our payment partners</li>
                        </ul>
                    </div>

                    <div class="policy-section">
                        <h3><i class="bi bi-lock-fill text-primary me-2"></i>2. How We Use Your Data</h3>
                        <ul>
                            <li>To provide and maintain our services</li>
                            <li>To notify you about changes to our services</li>
                            <li>To allow participation in interactive features</li>
                            <li>For customer support and business analytics</li>
                            <li>For security and fraud prevention</li>
                        </ul>
                    </div>

                    <div class="policy-section">
                        <h3><i class="bi bi-share-fill text-primary me-2"></i>3. Data Sharing</h3>
                        <p>We only share data with:</p>
                        <ul>
                            <li>Service providers (hosting, payment processors)</li>
                            <li>When required by law or legal process</li>
                            <li>With your explicit consent</li>
                        </ul>
                        <p>We never sell your personal information.</p>
                    </div>

                    <div class="policy-section">
                        <h3><i class="bi bi-globe text-primary me-2"></i>4. International Transfers</h3>
                        <p>Data may be transferred to and processed in countries outside your jurisdiction. We implement
                            Standard Contractual Clauses to ensure adequate protection.</p>
                    </div>

                    <div class="policy-section">
                        <h3><i class="bi bi-shield-check text-primary me-2"></i>5. Data Security</h3>
                        <p>We implement appropriate technical and organizational measures including:</p>
                        <ul>
                            <li>Encryption of sensitive data</li>
                            <li>Regular security assessments</li>
                            <li>Access controls and authentication protocols</li>
                        </ul>
                    </div>

                    <div class="policy-section">
                        <h3><i class="bi bi-person-check text-primary me-2"></i>6. Your Rights</h3>
                        <p>You have the right to:</p>
                        <ul>
                            <li>Access and receive a copy of your data</li>
                            <li>Rectify inaccurate or incomplete data</li>
                            <li>Request erasure under certain conditions</li>
                            <li>Restrict or object to processing</li>
                            <li>Lodge complaints with supervisory authorities</li>
                        </ul>
                    </div>

                    <div class="policy-section">
                        <h3><i class="bi bi-cookie text-primary me-2"></i>7. Cookies</h3>
                        <p>We use essential and analytical cookies. See our <a href="#">Cookie Policy</a> for details.
                        </p>
                    </div>

                    <div class="alert alert-info mt-4">
                        <i class="bi bi-info-circle me-2"></i>This policy may be updated periodically. We'll notify you of
                        significant changes through email or website notices.
                    </div>


                </div>

            </div>

        </div>

    </section><!-- /Service Details Section -->
@endsection
