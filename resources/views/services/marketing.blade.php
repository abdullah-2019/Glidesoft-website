@extends('layouts.app')

@section('content')
    <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container">
            <h1>Digital Marketing Services</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li class="current">Marketing Services</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Marketing Hero Section -->
    <section id="marketing-hero" class="marketing-hero section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2>Grow Your Business With Data-Driven Marketing</h2>
                    <p class="lead">We develop customized digital marketing strategies that deliver measurable results and
                        maximize your ROI.</p>
                    <div class="d-flex mt-4">
                        <a href="#contact" class="btn btn-primary me-3">Get Marketing Audit</a>
                        <a href="#results" class="btn btn-outline-primary">See Case Studies</a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <img src="{{ asset('assets/img/marketing-hero.png') }}" alt="Digital marketing strategies"
                        class="img-fluid rounded-3">
                </div>
            </div>
        </div>
    </section><!-- /Marketing Hero Section -->

    <!-- Marketing Services Section -->
    <section id="marketing-services" class="marketing-services section light-background">
        <div class="container">
            <div class="section-title text-center mb-5">
                <h2 data-aos="fade-up">Our Marketing Solutions</h2>
                <p data-aos="fade-up" data-aos-delay="100">Comprehensive digital marketing services tailored to your
                    business goals</p>
            </div>

            <div class="row gy-4">
                <!-- SEO -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card">
                        <div class="service-icon bg-soft-primary">
                            <i class="bi bi-search text-primary"></i>
                        </div>
                        <h3>SEO Services</h3>
                        <p>Improve your search visibility and organic traffic with our proven SEO strategies:</p>
                        <ul>
                            <li>Technical SEO audits</li>
                            <li>Keyword research & optimization</li>
                            <li>Content strategy development</li>
                            <li>Local SEO optimization</li>
                        </ul>
                    </div>
                </div>

                <!-- PPC -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card">
                        <div class="service-icon bg-soft-success">
                            <i class="bi bi-graph-up-arrow text-success"></i>
                        </div>
                        <h3>PPC Advertising</h3>
                        <p>Drive targeted traffic with precision-paid campaigns:</p>
                        <ul>
                            <li>Google Ads management</li>
                            <li>Social media advertising</li>
                            <li>Remarketing campaigns</li>
                            <li>Conversion rate optimization</li>
                        </ul>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card">
                        <div class="service-icon bg-soft-info">
                            <i class="bi bi-people text-info"></i>
                        </div>
                        <h3>Social Media Marketing</h3>
                        <p>Build brand awareness and engagement:</p>
                        <ul>
                            <li>Content strategy & calendar</li>
                            <li>Community management</li>
                            <li>Influencer partnerships</li>
                            <li>Performance analytics</li>
                        </ul>
                    </div>
                </div>

                <!-- Content Marketing -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card">
                        <div class="service-icon bg-soft-warning">
                            <i class="bi bi-pencil-square text-warning"></i>
                        </div>
                        <h3>Content Marketing</h3>
                        <p>Attract and retain customers with valuable content:</p>
                        <ul>
                            <li>Blog content creation</li>
                            <li>Video production</li>
                            <li>Email marketing campaigns</li>
                            <li>Lead nurturing sequences</li>
                        </ul>
                    </div>
                </div>

                <!-- Analytics -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card">
                        <div class="service-icon bg-soft-danger">
                            <i class="bi bi-bar-chart-line text-danger"></i>
                        </div>
                        <h3>Marketing Analytics</h3>
                        <p>Make data-driven decisions with clear insights:</p>
                        <ul>
                            <li>Campaign performance tracking</li>
                            <li>Custom dashboard setup</li>
                            <li>ROI measurement</li>
                            <li>A/B testing implementation</li>
                        </ul>
                    </div>
                </div>

                <!-- Strategy -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-card">
                        <div class="service-icon bg-soft-purple">
                            <i class="bi bi-diagram-3 text-purple"></i>
                        </div>
                        <h3>Marketing Strategy</h3>
                        <p>Holistic planning for long-term success:</p>
                        <ul>
                            <li>Competitive analysis</li>
                            <li>Buyer persona development</li>
                            <li>Omnichannel strategy</li>
                            <li>Budget allocation planning</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Marketing Services Section -->

    <!-- Results Section -->
    <section id="results" class="results section">
        <div class="container">
            <div class="section-title text-center mb-5">
                <h2 data-aos="fade-up">Proven Marketing Results</h2>
                <p data-aos="fade-up" data-aos-delay="100">We deliver measurable impact for our clients</p>
            </div>

            <div class="row gy-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="result-card text-center">
                        <div class="result-value text-primary">+350%</div>
                        <div class="result-label">Organic Traffic Growth</div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="result-card text-center">
                        <div class="result-value text-success">+200%</div>
                        <div class="result-label">Lead Generation</div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="result-card text-center">
                        <div class="result-value text-info">-40%</div>
                        <div class="result-label">Cost Per Acquisition</div>
                    </div>
                </div>
            </div>

            <!-- Case Studies -->
            <div class="row mt-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="case-study-card">
                        <img src="{{ asset('assets/img/cs-1.png') }}" alt="SEO case study" class="img-fluid">
                        <div class="case-study-content">
                            <h4>Tech Startup SEO Success</h4>
                            <p>Increased organic traffic by 420% in 6 months</p>
                            <a href="#" class="btn btn-sm btn-outline-primary">Read Case Study</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="case-study-card">
                        <img src="{{ asset('assets/img/cs-2.png') }}" alt="PPC case study" class="img-fluid">
                        <div class="case-study-content">
                            <h4>E-commerce PPC Campaign</h4>
                            <p>Reduced CPA by 65% while increasing conversions</p>
                            <a href="#" class="btn btn-sm btn-outline-primary">Read Case Study</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Results Section -->

    <!-- Process Section -->
    <section id="process" class="process section light-background">
        <div class="container">
            <div class="section-title text-center mb-5">
                <h2 data-aos="fade-up">Our Marketing Process</h2>
                <p data-aos="fade-up" data-aos-delay="100">A structured approach to delivering results</p>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="process-step text-center">
                        <div class="step-number">1</div>
                        <h4>Discovery</h4>
                        <p>Business goals analysis</p>
                        <p>Competitor research</p>
                        <p>Audience identification</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="process-step text-center">
                        <div class="step-number">2</div>
                        <h4>Strategy</h4>
                        <p>Channel selection</p>
                        <p>KPI definition</p>
                        <p>Budget planning</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="process-step text-center">
                        <div class="step-number">3</div>
                        <h4>Execution</h4>
                        <p>Campaign setup</p>
                        <p>Content creation</p>
                        <p>Launch & monitoring</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="process-step text-center">
                        <div class="step-number">4</div>
                        <h4>Optimization</h4>
                        <p>Performance analysis</p>
                        <p>A/B testing</p>
                        <p>Continuous improvement</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Process Section -->

    <!-- CTA Section -->
    <section id="marketing-cta" class="marketing-cta section dark-background">
        <div class="container text-center">
            <h2 data-aos="fade-up">Ready to Grow Your Business?</h2>
            <p class="mb-4" data-aos="fade-up" data-aos-delay="100">Get a free marketing audit and proposal for your
                business</p>
            <div data-aos="fade-up" data-aos-delay="200">
                <a href="tel:+93745282354" class="btn btn-light me-3">Get Started</a>
                <a href="https://wa.me/93745282354?text=Hello%20there,%20I%20would%20like%20to%20get%20in%20touch%20with%20you" class="btn btn-outline-light" target="_blank">Contact Our Experts</a>            </div>
        </div>
    </section><!-- /CTA Section -->
@endsection

@push('styles')
    <style>
        /* Hero Section */
        .marketing-hero {
            padding: 5rem 0;
        }

        .marketing-hero h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: #2c3e50;
        }

        .marketing-hero .lead {
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
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
        }

        .service-icon i {
            font-size: 1.75rem;
        }

        .bg-soft-primary {
            background: rgba(52, 152, 219, 0.1);
        }

        .bg-soft-success {
            background: rgba(46, 204, 113, 0.1);
        }

        .bg-soft-info {
            background: rgba(52, 152, 219, 0.1);
        }

        .bg-soft-warning {
            background: rgba(241, 196, 15, 0.1);
        }

        .bg-soft-danger {
            background: rgba(231, 76, 60, 0.1);
        }

        .bg-soft-purple {
            background: rgba(155, 89, 182, 0.1);
        }

        .text-purple {
            color: #9b59b6;
        }

        /* Results */
        .result-card {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.05);
        }

        .result-value {
            font-size: 3rem;
            font-weight: bold;
            line-height: 1;
        }

        .result-label {
            font-size: 1.1rem;
            color: #7f8c8d;
        }

        /* Case Studies */
        .case-study-card {
            position: relative;
            border-radius: 10px;
            overflow: hidden;
            height: 100%;
        }

        .case-study-content {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            /* background: rgba(0, 0, 0, 0.7); */
            background: #ff00b68a;
            color: white;
            padding: 1.5rem;
        }

        /* Process Steps */
        .process-step {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.05);
            height: 100%;
        }

        .step-number {
            width: 50px;
            height: 50px;
            background: var(--accent-color);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: bold;
            margin: 0 auto 1.5rem;
        }
    </style>
@endpush
