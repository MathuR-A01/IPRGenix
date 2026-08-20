@extends('layout.main')
@section('content')

<main>
    <!-- Modern Hero Section -->
    <section class="modern-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right" data-aos-duration="1000">
                    <h1 class="display-4 fw-bold mb-4">Partnering for Excellence, Legal Resilience, and Innovation</h1>
                    <p class="lead mb-5">By integrating Quality Assurance, IPR (for institutions and start-ups), and Legal Services under one umbrella, IPRGENIX Consultancy Pvt. Ltd. offers comprehensive solutions that are globally credible, sector-specific, and impact-driven.</p>
                    <div class="d-flex flex-column flex-sm-row gap-3">
                        <a href="#services" class="btn btn-accent btn-lg">Explore Our Services</a>
                        <a href="contact.php" class="btn btn-outline-light btn-lg">Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    <div class="hero-image-container">
                        <img src="{{asset('/assets/images/banner_iprgenix.png')}}" alt="Higher education consultancy in action" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Counter -->
    <!--<section class="py-5 bg-light">-->
    <!--    <div class="container">-->
    <!--        <div class="row justify-content-center text-center">-->
    <!--            <div class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0" data-aos="fade-up" data-aos-delay="100">-->
    <!--                <div class="counter-item">-->
    <!--                    <span class="counter-value display-4 fw-bold text-primary" data-value="100">0</span><span class="display-4 fw-bold text-primary">+</span>-->
    <!--                    <p class="mb-0 fs-5 fw-semibold">Satisfied Clients</p>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-md-4 d-flex align-items-center justify-content-center" data-aos="fade-up" data-aos-delay="300">-->
    <!--                <div class="counter-item">-->
    <!--                    <span class="counter-value display-4 fw-bold text-primary" data-value="15">0</span><span class="display-4 fw-bold text-primary">+</span>-->
    <!--                    <p class="mb-0 fs-5 fw-semibold">Years of Excellence</p>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->

    <!-- Services Overview -->
    <section id="services" class="py-5">
        <div class="container py-5">
            <div class="section-title text-center mb-5" data-aos="fade-up">
                <h2>Our Comprehensive Services</h2>
                <p>We offer specialized consultancy services tailored to the unique needs of higher education institutions, corporates, and startups.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="modern-card">
                        <div class="card-body">
                            <div class="card-icon">
                                <i class="fas fa-building"></i>
                            </div>
                            <h3 class="card-title">Institution Building & Development</h3>
                            <p class="card-text mb-4">Comprehensive solutions for establishing and developing robust educational institutions.</p>
                            <a href="services-institution-building.php" class="card-link">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="modern-card">
                        <div class="card-body">
                            <div class="card-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h3 class="card-title">Strategic Planning for HEIs</h3>
                            <p class="card-text mb-4">Customized strategic planning including academic, research, infrastructure, finance, admissions, and governance.</p>
                            <a href="services-strategic-planning.php" class="card-link">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="modern-card">
                        <div class="card-body">
                            <div class="card-icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <h3 class="card-title">NEP 2020 Implementation</h3>
                            <p class="card-text mb-4">Expert guidance on implementing the National Education Policy 2020 effectively.</p>
                            <a href="services-nep-implementation.php" class="card-link">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="modern-card">
                        <div class="card-body">
                            <div class="card-icon">
                                <i class="fas fa-book-open"></i>
                            </div>
                            <h3 class="card-title">Curriculum Design & Development</h3>
                            <p class="card-text mb-4">Modern, industry-aligned curriculum development to meet educational standards and market demands.</p>
                            <a href="services-curriculum-design.php" class="card-link">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="modern-card">
                        <div class="card-body">
                            <div class="card-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <h3 class="card-title">Quality Assurance</h3>
                            <p class="card-text mb-4">Establishing robust quality management systems to ensure continuous improvement and excellence.</p>
                            <a href="services-quality-assurance.php" class="card-link">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="modern-card">
                        <div class="card-body">
                            <div class="card-icon">
                                <i class="fas fa-medal"></i>
                            </div>
                            <h3 class="card-title">Accreditations & Ranking</h3>
                            <p class="card-text mb-4">Comprehensive support for achieving national and international accreditations and improving rankings.</p>
                            <a href="services-accreditations.php" class="card-link">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="modern-card">
                        <div class="card-body">
                            <div class="card-icon">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                            <h3 class="card-title">Intellectual Property (IPR) Services</h3>
                            <p class="card-text mb-4">End-to-end IPR support, including patents, policy, and commercialization for institutions and startups.</p>
                            <a href="services-ipr.php" class="card-link">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="modern-card">
                        <div class="card-body">
                            <div class="card-icon">
                                <i class="fas fa-gavel"></i>
                            </div>
                            <h3 class="card-title">Legal Advisory & Compliance</h3>
                            <p class="card-text mb-4">Expert legal guidance on governance, contracts, regulatory compliance, and dispute resolution.</p>
                            <a href="services-legal-advisory.php" class="card-link">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="text-center mt-5" data-aos="fade-up">
                <a href="contact.php" class="btn btn-primary btn-lg px-5">Request a Custom Solution</a>
            </div>
        </div>
    </section>

    <!-- Featured Service -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-1 order-2" data-aos="fade-right" data-aos-duration="1000">
                    <div class="mb-4">
                        <span class="badge bg-secondary-light text-secondary px-3 py-2 rounded-pill">Featured Service</span>
                    </div>
                    <h2 class="display-5 fw-bold mb-4">Institution Building & Development</h2>
                    <p class="lead mb-4">Building successful educational institutions requires expertise, vision, and strategic planning. Our consultants provide end-to-end solutions for establishing new institutions or enhancing existing ones.</p>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-3 d-flex">
                            <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                            <span>Comprehensive feasibility studies and market analysis</span>
                        </li>
                        <li class="mb-3 d-flex">
                            <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                            <span>Academic and administrative structure development</span>
                        </li>
                        <li class="mb-3 d-flex">
                            <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                            <span>Regulatory compliance and approval processes</span>
                        </li>
                        <li class="mb-3 d-flex">
                            <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                            <span>Infrastructure planning and development guidance</span>
                        </li>
                        <li class="mb-3 d-flex">
                            <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                            <span>Brand identity and positioning strategy</span>
                        </li>
                    </ul>
                    <a href="services-institution-building.php" class="btn btn-primary btn-lg">Discuss Your Institution's Needs</a>
                </div>
                <div class="col-lg-6 order-lg-2 order-1 mb-5 mb-lg-0" data-aos="fade-left" data-aos-duration="1000">
                    <div class="rounded-4 overflow-hidden shadow-lg">
                        <img src="{{asset('/assets/images/institution_building_and_developement.jpg')}}" alt="Modern higher education institution" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Strategic Planning Section -->
    <section class="py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right" data-aos-duration="1000">
                    <div class="rounded-4 overflow-hidden shadow-lg">
                        <img src="{{asset('/assets/images/strategic_planning_higher_education.jpg')}}" alt="Strategic planning session" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                    <div class="mb-4">
                        <span class="badge bg-secondary-light text-secondary px-3 py-2 rounded-pill">Comprehensive Planning</span>
                    </div>
                    <h2 class="display-5 fw-bold mb-4">Strategic Planning for Higher Education Institutions</h2>
                    <p class="lead mb-4">Our strategic planning services help institutions create a roadmap for sustainable growth and academic excellence, addressing all key operational areas.</p>

                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <div class="modern-card">
                                <div class="card-body p-3">
                                    <h4 class="h5 text-primary fw-bold mb-2">Academic Planning</h4>
                                    <p class="card-text small mb-0">Program development, faculty planning, and academic excellence frameworks</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="modern-card">
                                <div class="card-body p-3">
                                    <h4 class="h5 text-primary fw-bold mb-2">Research Planning</h4>
                                    <p class="card-text small mb-0">Research focus areas, funding strategies, and infrastructure development</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="modern-card">
                                <div class="card-body p-3">
                                    <h4 class="h5 text-primary fw-bold mb-2">Infrastructure Development</h4>
                                    <p class="card-text small mb-0">Campus planning, facilities design, and technology integration</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="modern-card">
                                <div class="card-body p-3">
                                    <h4 class="h5 text-primary fw-bold mb-2">Finance Planning</h4>
                                    <p class="card-text small mb-0">Budget optimization, revenue diversification, and financial sustainability</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="services-strategic-planning.php" class="btn btn-primary btn-lg">Get a Strategic Assessment</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->

</main>

@endsection