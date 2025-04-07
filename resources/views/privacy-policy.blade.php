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
                            <a href="{{route('terms-of-service')}}"><i class="bi bi-arrow-right-circle"></i><span>Terms of Service</span></a>
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
                    <img src="{{ asset('assets/img/protection.png') }}" alt="Software development team working"
                        class="img-fluid services-img">

                    <p class="last-updated"><i class="bi bi-calendar-check me-2"></i>Last Updated: June 15, 2023</p>

                    <div class="policy-section">
                        <h3><i class="bi bi-info-circle-fill text-primary me-2"></i> Information We Collect</h3>
                        <p>We may collect and process:</p>
                        <ul>

                        </ul>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span><strong>Contact Data:&nbsp;</strong> Name, email,
                                    phone when you inquire about services</span></li>
                            <li><i class="bi bi-check-circle"></i> <span> <strong>Project Data:&nbsp;</strong> Business
                                    requirements and documents you provide</span></li>
                            <li><i class="bi bi-check-circle"></i> <span> <strong>Technical Data:&nbsp;</strong> IP address,
                                    browser type, and usage patterns</span></li>
                            <li><i class="bi bi-check-circle"></i> <span> <strong>Payment Data:&nbsp;</strong> Processed
                                    securely through our payment partners</span></li>
                        </ul>
                    </div>

                    <div class="policy-section">
                        <h3><i class="bi bi-lock-fill text-primary me-2"></i> How We Use Your Data</h3>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span>To provide and maintain our services</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>To notify you about changes to our services</span>
                            </li>
                            <li><i class="bi bi-check-circle"></i> <span>To allow participation in interactive
                                    features</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>For customer support and business analytics</span>
                            </li>
                            <li><i class="bi bi-check-circle"></i> <span>For security and fraud prevention</span></li>
                        </ul>
                    </div>

                    <div class="policy-section">
                        <h3><i class="bi bi-share-fill text-primary me-2"></i> Data Sharing</h3>
                        <p>We only share data with:</p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span>Service providers (hosting, payment
                                    processors)</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>When required by law or legal process</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>With your explicit consent</span></li>
                        </ul>
                        <p>We never sell your personal information.</p>
                    </div>

                    <div class="policy-section">
                        <h3><i class="bi bi-globe text-primary me-2"></i> International Transfers</h3>
                        <p>Data may be transferred to and processed in countries outside your jurisdiction. We implement
                            Standard Contractual Clauses to ensure adequate protection.</p>
                    </div>

                    <div class="policy-section">
                        <h3><i class="bi bi-shield-check text-primary me-2"></i> Data Security</h3>
                        <p>We implement appropriate technical and organizational measures including:</p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span>Encryption of sensitive data</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Regular security assessments</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Access controls and authentication protocols</span>
                            </li>
                        </ul>
                    </div>

                    <div class="policy-section">
                        <h3><i class="bi bi-person-check text-primary me-2"></i> Your Rights</h3>
                        <p>You have the right to:</p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span>Access and receive a copy of your data</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Rectify inaccurate or incomplete data</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Request erasure under certain conditions</span>
                            </li>
                            <li><i class="bi bi-check-circle"></i> <span>Restrict or object to processing</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Lodge complaints with supervisory
                                    authorities</span></li>
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
