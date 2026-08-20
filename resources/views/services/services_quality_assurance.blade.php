@extends('layout.main')
@section('content')

    <main>
        <!-- Page Header -->
        <section class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="display-4 fw-bold mb-3">Quality Assurance</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-white">Home</a></li>
                                <li class="breadcrumb-item"><a href="index.php#services" class="text-white">Services</a></li>
                                <li class="breadcrumb-item active text-white" aria-current="page">Quality Assurance</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <!-- Service Introduction -->
        <section class="py-5">
            <div class="container py-4">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right" data-aos-duration="1000">
                        <a href="{{route('home')}}" class="d-inline-flex align-items-center text-primary mb-4 text-decoration-none">
                            <i class="fas fa-arrow-left me-2"></i> Back to Home
                        </a>
                        <h2 class="display-5 fw-bold mb-4">Establishing Excellence Through Quality Systems</h2>
                        <p class="lead mb-4">Quality assurance is the cornerstone of educational excellence. Our comprehensive quality assurance services help higher education institutions establish robust systems and processes that drive continuous improvement, enhance stakeholder satisfaction, and ensure institutional effectiveness.</p>
                        
                        <div class="mb-5">
                            <h3 class="h4 mb-3">Key Benefits</h3>
                            <ul class="list-unstyled">
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>Comprehensive quality management systems aligned with national and international standards</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>Data-driven decision-making frameworks for continuous improvement</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>Enhanced teaching-learning processes and outcomes</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>Improved stakeholder satisfaction and engagement</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>Strengthened institutional reputation and credibility</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>Readiness for accreditation and external quality audits</span>
                                </li>
                            </ul>
                        </div>
                        
                        <a href="contact.php" class="btn btn-primary btn-lg">Request Quality Assurance Consultation</a>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                        <div class="rounded-4 overflow-hidden shadow-lg">
                            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&h=600&q=80" alt="Quality assurance meeting" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Quality Assurance Focus Areas -->
        <section class="py-5 bg-light">
            <div class="container py-4">
                <div class="section-title text-center mb-5" data-aos="fade-up">
                    <h2>Quality Assurance Focus Areas</h2>
                    <p>Our comprehensive approach addresses all key aspects of institutional quality.</p>
                </div>
                
                <div class="row g-4">
                    <!-- Area 1: Academic Quality -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="modern-card h-100">
                            <div class="card-body p-4">
                                <div class="card-icon">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <h3 class="h4 card-title mb-3">Academic Quality</h3>
                                <p class="card-text mb-4">Comprehensive frameworks for ensuring excellence in teaching, learning, and assessment processes.</p>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Curriculum quality assurance</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Teaching-learning evaluation</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Assessment quality frameworks</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Area 2: Research Quality -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="modern-card h-100">
                            <div class="card-body p-4">
                                <div class="card-icon">
                                    <i class="fas fa-flask"></i>
                                </div>
                                <h3 class="h4 card-title mb-3">Research Quality</h3>
                                <p class="card-text mb-4">Systems and processes to enhance research output, impact, and integrity.</p>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Research governance frameworks</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Publication quality processes</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Research ethics mechanisms</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Area 3: Student Support -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="modern-card h-100">
                            <div class="card-body p-4">
                                <div class="card-icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <h3 class="h4 card-title mb-3">Student Support</h3>
                                <p class="card-text mb-4">Quality frameworks for student services, support systems, and experience enhancement.</p>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Student service standards</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Support system evaluation</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Feedback mechanisms</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Area 4: Administrative Quality -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="modern-card h-100">
                            <div class="card-body p-4">
                                <div class="card-icon">
                                    <i class="fas fa-cogs"></i>
                                </div>
                                <h3 class="h4 card-title mb-3">Administrative Quality</h3>
                                <p class="card-text mb-4">Systems for efficient, transparent, and responsive administrative processes.</p>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Process optimization</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Service delivery standards</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Resource utilization metrics</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Area 5: Infrastructure Quality -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="modern-card h-100">
                            <div class="card-body p-4">
                                <div class="card-icon">
                                    <i class="fas fa-building"></i>
                                </div>
                                <h3 class="h4 card-title mb-3">Infrastructure Quality</h3>
                                <p class="card-text mb-4">Standards and processes for maintaining and enhancing physical and digital infrastructure.</p>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Facility management standards</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>IT infrastructure quality</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Learning environment optimization</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Area 6: Stakeholder Engagement -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="modern-card h-100">
                            <div class="card-body p-4">
                                <div class="card-icon">
                                    <i class="fas fa-handshake"></i>
                                </div>
                                <h3 class="h4 card-title mb-3">Stakeholder Engagement</h3>
                                <p class="card-text mb-4">Systems for meaningful engagement with all institutional stakeholders.</p>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Engagement frameworks</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Feedback collection systems</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Satisfaction measurement</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Quality Assurance Implementation Process -->
        <section class="py-5">
            <div class="container py-4">
                <div class="section-title text-center mb-5" data-aos="fade-up">
                    <h2>Our Quality Assurance Implementation Process</h2>
                    <p>A systematic approach to establishing robust quality systems in higher education institutions.</p>
                </div>
                
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <div class="card border-0 shadow-lg" data-aos="fade-up">
                            <div class="card-body p-4 p-lg-5">
                                <div class="row g-4">
                                    <!-- Phase 1 -->
                                    <div class="col-md-6 col-lg-3">
                                        <div class="text-center">
                                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 80px; height: 80px;">
                                                <span class="h3 text-white fw-bold mb-0">1</span>
                                            </div>
                                            <h3 class="h4 fw-bold mb-3">Quality Audit</h3>
                                            <p class="text-muted mb-0">Comprehensive assessment of existing systems, processes, and practices to identify strengths and improvement areas.</p>
                                        </div>
                                    </div>
                                    
                                    <!-- Phase 2 -->
                                    <div class="col-md-6 col-lg-3">
                                        <div class="text-center">
                                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 80px; height: 80px;">
                                                <span class="h3 text-white fw-bold mb-0">2</span>
                                            </div>
                                            <h3 class="h4 fw-bold mb-3">System Design</h3>
                                            <p class="text-muted mb-0">Development of customized quality management frameworks, policies, and procedures aligned with institutional context.</p>
                                        </div>
                                    </div>
                                    
                                    <!-- Phase 3 -->
                                    <div class="col-md-6 col-lg-3">
                                        <div class="text-center">
                                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 80px; height: 80px;">
                                                <span class="h3 text-white fw-bold mb-0">3</span>
                                            </div>
                                            <h3 class="h4 fw-bold mb-3">Implementation</h3>
                                            <p class="text-muted mb-0">Structured rollout of quality systems with capacity building, documentation development, and process integration.</p>
                                        </div>
                                    </div>
                                    
                                    <!-- Phase 4 -->
                                    <div class="col-md-6 col-lg-3">
                                        <div class="text-center">
                                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 80px; height: 80px;">
                                                <span class="h3 text-white fw-bold mb-0">4</span>
                                            </div>
                                            <h3 class="h4 fw-bold mb-3">Evaluation & Refinement</h3>
                                            <p class="text-muted mb-0">Ongoing monitoring, periodic review, and continuous enhancement of quality systems and outcomes.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Internal Quality Assurance Cell (IQAC) -->
        <section class="py-5 bg-light">
            <div class="container py-4">
                <div class="section-title text-center mb-5" data-aos="fade-up">
                    <h2>Internal Quality Assurance Cell (IQAC)</h2>
                    <p>Establishing and strengthening institutional quality assurance mechanisms.</p>
                </div>
                
                <div class="row g-4">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                        <div class="p-4 h-100">
                            <h3 class="h3 fw-bold mb-4">IQAC Development Services</h3>
                            <p class="mb-4">The Internal Quality Assurance Cell (IQAC) is the cornerstone of quality management in higher education institutions. Our IQAC development services include:</p>
                            <ul class="list-unstyled">
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>IQAC structure and composition design</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>Quality policy formulation and documentation</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>Standard operating procedures development</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>Quality indicator frameworks and metrics</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>IQAC member training and capacity building</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>Quality management information systems</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                        <div class="card border-0 shadow-lg h-100">
                            <div class="card-body p-4 p-lg-5">
                                <h3 class="h4 fw-bold mb-4">IQAC Functions We Support</h3>
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <div class="d-flex mb-3">
                                            <div class="flex-shrink-0 bg-primary-light rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                                                <i class="fas fa-clipboard-check text-primary"></i>
                                            </div>
                                            <div>
                                                <h4 class="h6 fw-bold mb-0">Quality Audits</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex mb-3">
                                            <div class="flex-shrink-0 bg-primary-light rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                                                <i class="fas fa-chart-line text-primary"></i>
                                            </div>
                                            <div>
                                                <h4 class="h6 fw-bold mb-0">Performance Assessment</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex mb-3">
                                            <div class="flex-shrink-0 bg-primary-light rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                                                <i class="fas fa-file-alt text-primary"></i>
                                            </div>
                                            <div>
                                                <h4 class="h6 fw-bold mb-0">Documentation</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex mb-3">
                                            <div class="flex-shrink-0 bg-primary-light rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                                                <i class="fas fa-chalkboard-teacher text-primary"></i>
                                            </div>
                                            <div>
                                                <h4 class="h6 fw-bold mb-0">Faculty Development</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex mb-md-0 mb-3">
                                            <div class="flex-shrink-0 bg-primary-light rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                                                <i class="fas fa-comments text-primary"></i>
                                            </div>
                                            <div>
                                                <h4 class="h6 fw-bold mb-0">Feedback Systems</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 bg-primary-light rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                                                <i class="fas fa-medal text-primary"></i>
                                            </div>
                                            <div>
                                                <h4 class="h6 fw-bold mb-0">Accreditation Support</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 pt-2">
                                    <p class="mb-0">Our comprehensive approach ensures that your IQAC becomes an effective catalyst for institutional quality enhancement and continuous improvement.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Case Study -->
        <!--<section class="py-5">-->
        <!--    <div class="container py-4">-->
        <!--        <div class="row">-->
        <!--            <div class="col-lg-10 mx-auto">-->
        <!--                <div class="card border-0 shadow-lg overflow-hidden" data-aos="fade-up">-->
        <!--                    <div class="row g-0">-->
        <!--                        <div class="col-md-5 bg-primary d-flex align-items-center">-->
        <!--                            <div class="p-4 p-lg-5 text-white">-->
        <!--                                <h2 class="h3 fw-bold mb-3">Case Study</h2>-->
        <!--                                <h3 class="h2 mb-4">Quality Transformation at Arts & Science College</h3>-->
        <!--                                <p class="mb-4">Comprehensive quality system implementation leading to improved institutional performance and successful accreditation.</p>-->
        <!--                                <div class="d-flex align-items-center">-->
        <!--                                    <div class="flex-shrink-0 bg-white rounded-circle d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">-->
        <!--                                        <span class="text-primary fw-bold">NK</span>-->
        <!--                                    </div>-->
        <!--                                    <div class="ms-3 text-white">-->
        <!--                                        <h4 class="h6 mb-0">Dr. Neha Khanna</h4>-->
        <!--                                        <p class="small mb-0">Principal, Arts & Science College</p>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                        <div class="col-md-7">-->
        <!--                            <div class="p-4 p-lg-5">-->
        <!--                                <h3 class="h4 mb-3">Key Achievements</h3>-->
        <!--                                <ul class="list-unstyled mb-4">-->
        <!--                                    <li class="mb-3 d-flex">-->
        <!--                                        <i class="fas fa-check-circle text-success mt-1 me-3"></i>-->
        <!--                                        <span>Established comprehensive IQAC with robust documentation systems</span>-->
        <!--                                    </li>-->
        <!--                                    <li class="mb-3 d-flex">-->
        <!--                                        <i class="fas fa-check-circle text-success mt-1 me-3"></i>-->
        <!--                                        <span>20% improvement in student satisfaction metrics within one year</span>-->
        <!--                                    </li>-->
        <!--                                    <li class="mb-3 d-flex">-->
        <!--                                        <i class="fas fa-check-circle text-success mt-1 me-3"></i>-->
        <!--                                        <span>15% increase in faculty research output and quality</span>-->
        <!--                                    </li>-->
        <!--                                    <li class="mb-3 d-flex">-->
        <!--                                        <i class="fas fa-check-circle text-success mt-1 me-3"></i>-->
        <!--                                        <span>Successful NAAC accreditation with 'A' grade</span>-->
        <!--                                    </li>-->
        <!--                                </ul>-->
        <!--                                <div class="fst-italic text-muted mb-0">-->
        <!--                                    <p>"Working with Iprgneix on our institution's quality improvement initiative was a transformative experience. Their systematic approach to quality assurance, data-driven decision-making frameworks, and practical implementation strategies have significantly enhanced our academic processes."</p>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</section>-->
        
        <!-- FAQ Section -->
        <section class="py-5 bg-light">
            <div class="container py-4">
                <div class="section-title text-center mb-5" data-aos="fade-up">
                    <h2>Frequently Asked Questions</h2>
                    <p>Common questions about quality assurance in higher education institutions.</p>
                </div>
                
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="accordion" id="qualityAssuranceFAQ" data-aos="fade-up">
                            <div class="accordion-item border-0 mb-3 shadow-sm">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What is the difference between quality assurance and accreditation?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#qualityAssuranceFAQ">
                                    <div class="accordion-body">
                                        <p>While quality assurance and accreditation are related, they serve distinct purposes:</p>
                                        <ul>
                                            <li><strong>Quality Assurance:</strong> An ongoing, internal process focused on continuously monitoring, evaluating, and enhancing all aspects of institutional operations. It involves systematic mechanisms to ensure that standards and expectations are consistently met and improved upon.</li>
                                            <li><strong>Accreditation:</strong> A periodic, external validation process where an authorized agency evaluates whether an institution meets predetermined standards of quality. It results in a formal recognition status.</li>
                                        </ul>
                                        <p>Quality assurance is the foundation upon which successful accreditation is built. Effective quality assurance systems ensure that an institution maintains high standards consistently, not just during accreditation periods. Our approach emphasizes building robust quality assurance mechanisms that both support accreditation efforts and drive genuine institutional improvement.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 mb-3 shadow-sm">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        How long does it take to establish an effective quality assurance system?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#qualityAssuranceFAQ">
                                    <div class="accordion-body">
                                        <p>The timeline for establishing an effective quality assurance system varies based on institutional size, complexity, and current quality maturity levels. Generally, our implementation follows these phases:</p>
                                        <ul>
                                            <li><strong>Initial Assessment & Planning:</strong> 1-2 months</li>
                                            <li><strong>System Design & Documentation:</strong> 2-3 months</li>
                                            <li><strong>Implementation & Training:</strong> 3-6 months</li>
                                            <li><strong>Initial Review & Refinement:</strong> 2-3 months</li>
                                        </ul>
                                        <p>A basic quality assurance system can be operational within 6-8 months, while a comprehensive system typically takes 12-18 months to fully mature. Our approach emphasizes quick wins alongside long-term development, ensuring visible improvements early in the process while building toward comprehensive quality maturity.</p>
                                        <p>It's important to note that quality assurance is not a one-time project but an ongoing commitment. We focus on building sustainable systems that your institution can maintain and enhance over time.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 mb-3 shadow-sm">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        How do you address resistance to quality assurance implementation?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#qualityAssuranceFAQ">
                                    <div class="accordion-body">
                                        <p>Resistance to quality initiatives is common and stems from various concerns including increased workload, fear of evaluation, or skepticism about benefits. Our approach to managing resistance includes:</p>
                                        <ul>
                                            <li><strong>Stakeholder Engagement:</strong> Involving faculty, staff, and administrators in the design process to build ownership</li>
                                            <li><strong>Clear Communication:</strong> Articulating the purpose, benefits, and expectations of quality systems</li>
                                            <li><strong>Practical Demonstration:</strong> Showcasing early wins and tangible benefits of quality initiatives</li>
                                            <li><strong>Capacity Building:</strong> Providing training and support to develop quality management skills</li>
                                            <li><strong>Simplification:</strong> Designing user-friendly systems that minimize additional administrative burden</li>
                                            <li><strong>Recognition:</strong> Acknowledging and rewarding quality improvement efforts</li>
                                        </ul>
                                        <p>We recognize that sustainable quality systems require cultural change, not just procedural implementation. Our change management approach focuses on building a quality culture where continuous improvement becomes part of the institutional ethos rather than an imposed requirement.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 shadow-sm">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        What technology or tools do you recommend for quality management?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#qualityAssuranceFAQ">
                                    <div class="accordion-body">
                                        <p>Technology can significantly enhance quality management effectiveness and efficiency. Our recommendations include:</p>
                                        <ul>
                                            <li><strong>Quality Management Information Systems (QMIS):</strong> Integrated platforms for quality data collection, analysis, and reporting</li>
                                            <li><strong>Feedback Management Systems:</strong> Tools for collecting, analyzing, and acting on stakeholder feedback</li>
                                            <li><strong>Document Management Systems:</strong> Platforms for creating, storing, and accessing quality documentation</li>
                                            <li><strong>Learning Analytics Tools:</strong> Systems that track and analyze student performance data</li>
                                            <li><strong>Process Automation Tools:</strong> Workflow systems that streamline quality processes</li>
                                            <li><strong>Dashboard Solutions:</strong> Visual displays of key quality indicators for monitoring and decision-making</li>
                                        </ul>
                                        <p>Our approach to technology is pragmatic and contextual. We help institutions select and implement tools that match their specific needs, resources, and technical capabilities. We focus on solutions that provide genuine value rather than technological complexity, and we emphasize building the capacity to effectively use these tools for quality enhancement.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- CTA Section -->
        <section class="py-5" style="background: linear-gradient(135deg, #0056b3 0%, #00a0e3 100%);">
            <div class="container py-4">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8 text-center text-white">
                        <h2 class="display-5 fw-bold mb-4">Ready to Enhance Your Institution's Quality?</h2>
                        <p class="lead mb-5">Contact our quality assurance experts today to discuss how we can help your institution establish robust quality systems that drive excellence and continuous improvement.</p>
                        <a href="{{route('other.pages.contact.us')}}" class="btn btn-light btn-lg px-5">Contact Us Now</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection