@extends('layout.main')
@section('content')

    <main>
        <section class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="display-4 fw-bold mb-3">About Us</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-white">Home</a></li>
                                <li class="breadcrumb-item active text-white" aria-current="page">About Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="container py-4">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right" data-aos-duration="1000">
                        <div class="mb-4">
                            <span class="badge bg-secondary-light text-secondary px-3 py-2 rounded-pill">Who We Are</span>
                        </div>
                        <h2 class="display-5 fw-bold mb-4">Partnering for Excellence, Legal Resilience, and Innovation</h2>
                        <p class="lead mb-4">IPRGENIX Consultancy Pvt. Ltd. is a distinguished firm offering holistic, end-to-end solutions for Higher Education Institutions, start-ups, and corporates. We specialize in integrating Quality Assurance in Higher Education, Intellectual Property Rights, and Legal Services to drive growth and compliance.</p>
                        <p class="mb-4">Our unique strength lies in our status as a registered member of the United Nations Global Marketplace (UNGM), which brings international recognition, transparency, and credibility to our partnerships. This allows us to deliver globally credible and sector-specific solutions.</p>
                        <p class="mb-4">We are dedicated to helping our clients achieve excellence, compliance, and innovation by translating complex national and global policies into actionable strategies tailored to their unique needs.</p>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                        <div class="rounded-4 overflow-hidden shadow-lg">
                            <img src="{{asset('/assets/images/homepage_banner_final.jpg')}}" alt="Iprgneix Consultancy Team" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 bg-light">
            <div class="container py-4">
                <div class="section-title text-center mb-5" data-aos="fade-up">
                    <h2>Our Mission, Vision & Values</h2>
                    <p>Guiding principles that define our commitment to our partners' success.</p>
                </div>
                
                <div class="row g-4">
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="modern-card h-100">
                            <div class="card-body text-center p-4 p-lg-5">
                                <div class="card-icon mx-auto mb-4">
                                    <i class="fas fa-bullseye"></i>
                                </div>
                                <h3 class="h3 card-title mb-3">Our Mission</h3>
                                <p class="card-text">To empower higher education institutions, start-ups, and corporates through strategic planning, institution building, curriculum innovation, quality assurance, intellectual property management, and legal advisory, fostering sustainable growth and leadership.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="modern-card h-100">
                            <div class="card-body text-center p-4 p-lg-5">
                                <div class="card-icon mx-auto mb-4">
                                    <i class="fas fa-eye"></i>
                                </div>
                                <h3 class="h3 card-title mb-3">Our Vision</h3>
                                <p class="card-text">To be a catalyst in transforming Indian and global higher education, start-ups, and corporates by empowering them to achieve excellence, innovation, IP-driven growth, and legal resilience.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="modern-card h-100">
                            <div class="card-body text-center p-4 p-lg-5">
                                <div class="card-icon mx-auto mb-4">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <h3 class="h3 card-title mb-3">Our Values</h3>
                                <p class="card-text">Excellence, Innovation, Legal Resilience, and Collaboration are the pillars of our approach, ensuring we deliver impactful and sustainable results for every client.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="container py-4">
                <div class="section-title text-center mb-5" data-aos="fade-up">
                    <h2>Our Approach</h2>
                    <p>How we work with our partners to drive sustainable transformation.</p>
                </div>
                
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <div class="row g-4">
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 bg-primary-light rounded-circle d-flex align-items-center justify-content-center me-4" style="width: 60px; height: 60px;">
                                        <span class="h4 text-primary fw-bold mb-0">1</span>
                                    </div>
                                    <div>
                                        <h3 class="h4 fw-bold mb-3">Comprehensive Assessment</h3>
                                        <p class="text-muted mb-0">We begin with institutional quality audits, IPR gap analysis, and legal compliance checks to identify key challenges and opportunities.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 bg-primary-light rounded-circle d-flex align-items-center justify-content-center me-4" style="width: 60px; height: 60px;">
                                        <span class="h4 text-primary fw-bold mb-0">2</span>
                                    </div>
                                    <div>
                                        <h3 class="h4 fw-bold mb-3">Customized Strategy</h3>
                                        <p class="text-muted mb-0">We develop tailored 5-10 year roadmaps, IP strategies aligned with business goals, and robust legal frameworks for risk management.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 bg-primary-light rounded-circle d-flex align-items-center justify-content-center me-4" style="width: 60px; height: 60px;">
                                        <span class="h4 text-primary fw-bold mb-0">3</span>
                                    </div>
                                    <div>
                                        <h3 class="h4 fw-bold mb-3">Collaborative Implementation</h3>
                                        <p class="text-muted mb-0">Our team works alongside yours to implement solutions, strengthen internal bodies like IQACs and IPR Cells, and ensure seamless adoption.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 bg-primary-light rounded-circle d-flex align-items-center justify-content-center me-4" style="width: 60px; height: 60px;">
                                        <span class="h4 text-primary fw-bold mb-0">4</span>
                                    </div>
                                    <div>
                                        <h3 class="h4 fw-bold mb-3">Capacity Building & Support</h3>
                                        <p class="text-muted mb-0">We empower your team through structured training, mentorship, and knowledge-sharing programs to foster a culture of continuous improvement.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="container py-4">
                <div class="section-title text-center mb-5" data-aos="fade-up">
                    <h2>Why Choose IPRGENIX?</h2>
                    <p>Our unique advantages make us the ideal partner for your organization.</p>
                </div>
                
                <div class="row g-4 text-center">
                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="p-4">
                             <div class="display-3 fw-bold text-primary mb-3"><i class="fas fa-sitemap"></i></div>
                            <h3 class="h5 mb-2 fw-bold">Integrated Expertise</h3>
                            <p class="text-muted mb-0">Holistic solutions combining Quality Assurance, IPR, and Legal services under one umbrella.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="p-4">
                             <div class="display-3 fw-bold text-primary mb-3"><i class="fas fa-globe"></i></div>
                            <h3 class="h5 mb-2 fw-bold">Global Credibility</h3>
                            <p class="text-muted mb-0">As a UN Global Marketplace (UNGM) member, we offer transparency and international recognition.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                        <div class="p-4">
                             <div class="display-3 fw-bold text-primary mb-3"><i class="fas fa-cogs"></i></div>
                            <h3 class="h5 mb-2 fw-bold">Sector-Specific Solutions</h3>
                            <p class="text-muted mb-0">Tailored, actionable strategies for higher education, start-ups, and corporates.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                        <div class="p-4">
                            <div class="display-3 fw-bold text-primary mb-3"><i class="fas fa-chart-line"></i></div>
                            <h3 class="h5 mb-2 fw-bold">Impact-Driven Approach</h3>
                            <p class="text-muted mb-0">Focused on delivering measurable outcomes, from compliance to innovation-led growth.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5" style="background: linear-gradient(135deg, #0056b3 0%, #00a0e3 100%);">
            <div class="container py-4">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8 text-center text-white">
                        <h2 class="display-5 fw-bold mb-4">Ready to Achieve Your Strategic Goals?</h2>
                        <p class="lead mb-5">Contact our team of experts today to discuss how we can help your institution, start-up, or corporate entity excel in a competitive global landscape.</p>
                        <a href="{{ route('other.pages.contact.us') }}" class="btn btn-light btn-lg px-5">Contact Us Now</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection