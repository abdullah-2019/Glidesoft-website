@extends('layouts.app')

@section('content')
    <div class="page-title light-background">
        <div class="container">
            <h1>Cookie Policy</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li class="current">Cookie Policy</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <section id="service-details" class="service-details section">

        <div class="container">

            <div class="row gy-5">

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">

                    <div class="service-box">
                        <h4>Data Protection</h4>
                        <div class="services-list">
                            <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Privacy Policy</span></a>
                            <a href="{{ route('privacy-policy') }}"><i class="bi bi-arrow-right-circle"></i><span>Privacy
                                    Policy</span></a>
                            <a href="#" class="active"><i class="bi bi-arrow-right-circle"></i><span>Cookie
                                    Policy</span></a>
                            <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Data Processing
                                    Agreement</span></a>
                            <a href="#"><i class="bi bi-arrow-right-circle"></i><span>GDPR Compliance</span></a>
                        </div>
                    </div>

                    <div class="help-box d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-cookie help-icon"></i>
                        <h4>Cookie Preferences</h4>
                        <button id="open-cookie-settings" class="btn btn-sm btn-outline-default mt-2">
                            <i class="bi bi-gear me-1"></i> Manage Settings
                        </button>
                    </div>

                </div>

                <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('assets/img/protection.png') }}" alt="Software development team working"
                        class="img-fluid services-img">

                    <p class="last-updated"><i class="bi bi-calendar-check me-2"></i>Last Updated: June 15, 2023</p>

                    <div class="policy-intro mb-4">
                        <p>This Cookie Policy explains how GlideSoft ("we", "us", "our") uses cookies and similar tracking
                            technologies when you visit our website <a href="https://glidesoft.net">glidesoft.net</a>.</p>
                    </div>
                    <br>
                    <div class="policy-section">
                        <h3><i class="bi bi-question-circle-fill text-primary me-2"></i>What Are Cookies?</h3>
                        <p>Cookies are small text files stored on your device when you visit websites. They help sites
                            remember your preferences and improve your experience.</p>
                    </div>
                    <br>

                    <div class="policy-section">
                        <h3><i class="bi bi-list-check text-primary me-2"></i>Types of Cookies We Use</h3>

                        <div class="cookie-type mt-3">
                            <h4 class="d-flex align-items-center">
                                <span class="badge bg-primary me-2">Essential</span>
                                <span>Strictly Necessary Cookies</span>
                            </h4>
                            <p>These are required for basic site functionality:</p>
                            <ul>
                                <li>User authentication and session management</li>
                                <li>Security and fraud prevention</li>
                                <li>Load balancing and performance</li>
                            </ul>
                            <p><strong>Cannot be disabled.</strong></p>
                        </div>

                        <div class="cookie-type mt-4">
                            <h4 class="d-flex align-items-center">
                                <span class="badge bg-info me-2">Analytics</span>
                                <span>Performance Cookies</span>
                            </h4>
                            <p>Help us understand how visitors interact with our site:</p>
                            <ul>
                                <li>Google Analytics (anonymous data)</li>
                                <li>Heatmaps and scroll tracking</li>
                                <li>Error rate monitoring</li>
                            </ul>
                        </div>

                        <div class="cookie-type mt-4">
                            <h4 class="d-flex align-items-center">
                                <span class="badge bg-warning me-2">Marketing</span>
                                <span>Targeting Cookies</span>
                            </h4>
                            <p>Used for advertising and remarketing:</p>
                            <ul>
                                <li>LinkedIn Insight Tag</li>
                                <li>Facebook Pixel</li>
                                <li>Google Ads conversion tracking</li>
                            </ul>
                        </div>
                    </div>
                    <br>
                    <div class="policy-section">
                        <h3><i class="bi bi-gear-fill text-primary me-2"></i>Cookie Management</h3>
                        <p>You can control cookies through:</p>
                        <ul>
                            <li><strong>Browser Settings:</strong> Most browsers allow you to refuse or delete cookies</li>
                            <li><strong>Our Consent Tool:</strong> Click "Manage Settings" in the sidebar</li>
                            <li><strong>Third-Party Opt-Outs:</strong>
                                <a href="https://tools.google.com/dlpage/gaoptout" target="_blank">Google Analytics</a>,
                                <a href="https://www.linkedin.com/psettings/guest-controls" target="_blank">LinkedIn</a>
                            </li>
                        </ul>
                    </div>
                    <br>
                    <div class="policy-section">
                        <h3><i class="bi bi-clock-fill text-primary me-2"></i>Cookie Duration</h3>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Cookie Type</th>
                                    <th>Duration</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Session Cookies</td>
                                    <td>Until browser closes</td>
                                </tr>
                                <tr>
                                    <td>Authentication</td>
                                    <td>Up to 30 days</td>
                                </tr>
                                <tr>
                                    <td>Analytics</td>
                                    <td>2-24 months</td>
                                </tr>
                                <tr>
                                    <td>Marketing</td>
                                    <td>Up to 12 months</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <div class="alert alert-info mt-4">
                        <i class="bi bi-info-circle me-2"></i>By continuing to use our site without changing settings, you
                        consent to our use of cookies as described in this policy.
                    </div>


                </div>

            </div>

        </div>

    </section><!-- /Service Details Section -->
@endsection
