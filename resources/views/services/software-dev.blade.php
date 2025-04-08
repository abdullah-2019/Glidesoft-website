@extends('layouts.app')

@section('content')
    <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container">
            <h1>Software Development Services</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li class="current">Software Development</li>
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
                            <a href="#" class="active"><i class="bi bi-arrow-right-circle"></i><span>Custom Software
                                    Development</span></a>
                            <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Web Application
                                    Development</span></a>
                            <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Mobile App
                                    Development</span></a>
                            <a href="#"><i class="bi bi-arrow-right-circle"></i><span>Cloud Solutions</span></a>
                            <a href="#"><i class="bi bi-arrow-right-circle"></i><span>API Integration</span></a>
                        </div>
                    </div><!-- End Services List -->

                    <!-- <div class="service-box">
                  <h4>Download Resources</h4>
                  <div class="download-catalog">
                    <a href="#"><i class="bi bi-filetype-pdf"></i><span>Services Brochure</span></a>
                    <a href="#"><i class="bi bi-file-earmark-word"></i><span>Case Studies</span></a>
                  </div>
                </div> -->
                    <!-- End Services List -->

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
                    <img src="{{asset('assets/img/software-dev.png')}}" alt="Software development team working"
                        class="img-fluid services-img">
                    <h3>Tailored Software Solutions for Your Business Needs</h3>
                    <p>
                        We specialize in creating robust, scalable software solutions that drive business growth and
                        operational efficiency. Our team of experienced developers combines cutting-edge technologies with
                        industry best practices to deliver software that meets your specific requirements.
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span>Full-cycle development from concept to
                                deployment</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Agile development methodology for flexible project
                                management</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Continuous integration and deployment pipelines</span>
                        </li>
                    </ul>
                    <p>
                        Our approach begins with thorough requirements analysis to ensure we understand your business
                        objectives. We then architect solutions that are not only effective today but can scale with your
                        future needs. Security and performance are built into every layer of our applications.
                    </p>
                    <p>
                        With expertise across multiple platforms and technologies, we can recommend the optimal stack for
                        your project. Whether you need a customer-facing web application, internal business system, or
                        mobile solution, we have the experience to deliver exceptional results. Our development process
                        emphasizes transparency, with regular updates and opportunities for feedback at every stage.
                    </p>
                    <p>
                        Beyond initial development, we offer ongoing maintenance and support services to ensure your
                        software continues to perform at its best as your business evolves and technology advances.
                    </p>
                </div>

            </div>

        </div>

    </section><!-- /Service Details Section -->
@endsection
