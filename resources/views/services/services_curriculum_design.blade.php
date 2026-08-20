@extends('layout.main')
@section('content')


    <main>
        <!-- Page Header -->
        <section class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="display-4 fw-bold mb-3">Curriculum Design & Development</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-white">Home</a></li>
                                <li class="breadcrumb-item"><a href="index.php#services" class="text-white">Services</a></li>
                                <li class="breadcrumb-item active text-white" aria-current="page">Curriculum Design</li>
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
                        <h2 class="display-5 fw-bold mb-4">Modern, Industry-Aligned Curriculum Development</h2>
                        <p class="lead mb-4">In today's rapidly evolving educational landscape, a well-designed curriculum is the foundation of academic excellence and student success. Our expert curriculum design services help higher education institutions develop innovative, industry-relevant programs that prepare students for future careers while meeting regulatory requirements.</p>
                        
                        <div class="mb-5">
                            <h3 class="h4 mb-3">Key Benefits</h3>
                            <ul class="list-unstyled">
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>Industry-aligned curricula that enhance graduate employability</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>Outcome-based education frameworks that ensure measurable learning</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>Integration of emerging technologies and future skills</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>Compliance with regulatory requirements (UGC, AICTE, etc.)</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>Flexible learning pathways that accommodate diverse student needs</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>Integration of experiential learning components</span>
                                </li>
                            </ul>
                        </div>
                        
                        <a href="contact.php" class="btn btn-primary btn-lg">Request Curriculum Consultation</a>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                        <div class="rounded-4 overflow-hidden shadow-lg">
                            <img src="{{asset('assets/images/curicullum_design.jpg')}}" alt="Curriculum design workshop" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Curriculum Design Framework -->
        <section class="py-5 bg-light">
            <div class="container py-4">
                <div class="section-title text-center mb-5" data-aos="fade-up">
                    <h2>Our Curriculum Design Framework</h2>
                    <p>A comprehensive approach that ensures high-quality, relevant, and effective educational programs.</p>
                </div>
                
                <div class="row g-4">
                    <!-- Framework Component 1 -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="modern-card h-100">
                            <div class="card-body p-4">
                                <div class="card-icon">
                                    <i class="fas fa-bullseye"></i>
                                </div>
                                <h3 class="h4 card-title mb-3">Needs Assessment</h3>
                                <p class="card-text mb-4">Comprehensive analysis of industry requirements, student needs, and educational trends to identify curriculum priorities.</p>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Industry requirement analysis</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Job market trends assessment</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Stakeholder consultations</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Framework Component 2 -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="modern-card h-100">
                            <div class="card-body p-4">
                                <div class="card-icon">
                                    <i class="fas fa-chalkboard-teacher"></i>
                                </div>
                                <h3 class="h4 card-title mb-3">Outcome Definition</h3>
                                <p class="card-text mb-4">Clear articulation of program and course outcomes aligned with institutional goals and graduate attributes.</p>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Program outcome mapping</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Course outcome development</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Competency framework design</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Framework Component 3 -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="modern-card h-100">
                            <div class="card-body p-4">
                                <div class="card-icon">
                                    <i class="fas fa-puzzle-piece"></i>
                                </div>
                                <h3 class="h4 card-title mb-3">Content Structuring</h3>
                                <p class="card-text mb-4">Logical organization of course content with clear progression pathways and interdisciplinary connections.</p>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Course sequencing</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Module development</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Credit allocation</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Framework Component 4 -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="modern-card h-100">
                            <div class="card-body p-4">
                                <div class="card-icon">
                                    <i class="fas fa-hands-helping"></i>
                                </div>
                                <h3 class="h4 card-title mb-3">Experiential Integration</h3>
                                <p class="card-text mb-4">Incorporation of practical, hands-on learning experiences that bridge theory and practice.</p>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Project-based learning design</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Internship frameworks</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Industry collaboration models</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Framework Component 5 -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="modern-card h-100">
                            <div class="card-body p-4">
                                <div class="card-icon">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <h3 class="h4 card-title mb-3">Assessment Design</h3>
                                <p class="card-text mb-4">Comprehensive assessment strategies that accurately measure student achievement of learning outcomes.</p>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Formative assessment strategies</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Summative evaluation methods</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Authentic assessment techniques</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Framework Component 6 -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="modern-card h-100">
                            <div class="card-body p-4">
                                <div class="card-icon">
                                    <i class="fas fa-sync-alt"></i>
                                </div>
                                <h3 class="h4 card-title mb-3">Continuous Improvement</h3>
                                <p class="card-text mb-4">Systematic review and enhancement processes to ensure curriculum remains current and effective.</p>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Feedback collection mechanisms</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Performance analysis tools</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Curriculum review cycles</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Specialized Curriculum Services -->
        <section class="py-5">
            <div class="container py-4">
                <div class="section-title text-center mb-5" data-aos="fade-up">
                    <h2>Specialized Curriculum Services</h2>
                    <p>Tailored curriculum solutions for specific needs and contexts.</p>
                </div>
                
                <div class="row g-4">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                        <div class="card border-0 shadow-lg h-100">
                            <div class="row g-0 h-100">
                                <div class="col-md-4 bg-primary d-flex align-items-center">
                                    <div class="p-4 text-white text-center w-100">
                                        <div class="rounded-circle bg-white d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 70px; height: 70px;">
                                            <i class="fas fa-cogs text-primary fs-3"></i>
                                        </div>
                                        <h3 class="h5 fw-bold mb-0">Technical Education</h3>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body h-100 d-flex flex-column">
                                        <p class="card-text mb-4">Specialized curriculum design for engineering, technology, and applied sciences with strong industry integration.</p>
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-2 d-flex align-items-center">
                                                <i class="fas fa-check text-success me-2"></i>
                                                <span>Laboratory and practical components</span>
                                            </li>
                                            <li class="mb-2 d-flex align-items-center">
                                                <i class="fas fa-check text-success me-2"></i>
                                                <span>Industry-aligned capstone projects</span>
                                            </li>
                                            <li class="d-flex align-items-center">
                                                <i class="fas fa-check text-success me-2"></i>
                                                <span>Emerging technology integration</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                        <div class="card border-0 shadow-lg h-100">
                            <div class="row g-0 h-100">
                                <div class="col-md-4 bg-primary d-flex align-items-center">
                                    <div class="p-4 text-white text-center w-100">
                                        <div class="rounded-circle bg-white d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 70px; height: 70px;">
                                            <i class="fas fa-user-md text-primary fs-3"></i>
                                        </div>
                                        <h3 class="h5 fw-bold mb-0">Healthcare Education</h3>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body h-100 d-flex flex-column">
                                        <p class="card-text mb-4">Specialized curricula for medical, nursing, and allied health programs with clinical competency focus.</p>
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-2 d-flex align-items-center">
                                                <i class="fas fa-check text-success me-2"></i>
                                                <span>Clinical rotation frameworks</span>
                                            </li>
                                            <li class="mb-2 d-flex align-items-center">
                                                <i class="fas fa-check text-success me-2"></i>
                                                <span>Simulation-based learning designs</span>
                                            </li>
                                            <li class="d-flex align-items-center">
                                                <i class="fas fa-check text-success me-2"></i>
                                                <span>Competency-based assessment models</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                        <div class="card border-0 shadow-lg h-100">
                            <div class="row g-0 h-100">
                                <div class="col-md-4 bg-primary d-flex align-items-center">
                                    <div class="p-4 text-white text-center w-100">
                                        <div class="rounded-circle bg-white d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 70px; height: 70px;">
                                            <i class="fas fa-chart-pie text-primary fs-3"></i>
                                        </div>
                                        <h3 class="h5 fw-bold mb-0">Management Education</h3>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body h-100 d-flex flex-column">
                                        <p class="card-text mb-4">Specialized curriculum for business and management programs with focus on leadership and entrepreneurship.</p>
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-2 d-flex align-items-center">
                                                <i class="fas fa-check text-success me-2"></i>
                                                <span>Case study-based learning design</span>
                                            </li>
                                            <li class="mb-2 d-flex align-items-center">
                                                <i class="fas fa-check text-success me-2"></i>
                                                <span>Industry internship frameworks</span>
                                            </li>
                                            <li class="d-flex align-items-center">
                                                <i class="fas fa-check text-success me-2"></i>
                                                <span>Entrepreneurship development modules</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                        <div class="card border-0 shadow-lg h-100">
                            <div class="row g-0 h-100">
                                <div class="col-md-4 bg-primary d-flex align-items-center">
                                    <div class="p-4 text-white text-center w-100">
                                        <div class="rounded-circle bg-white d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 70px; height: 70px;">
                                            <i class="fas fa-book-open text-primary fs-3"></i>
                                        </div>
                                        <h3 class="h5 fw-bold mb-0">Liberal Arts Education</h3>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body h-100 d-flex flex-column">
                                        <p class="card-text mb-4">Interdisciplinary curriculum designs that foster critical thinking, creativity, and holistic development.</p>
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-2 d-flex align-items-center">
                                                <i class="fas fa-check text-success me-2"></i>
                                                <span>Interdisciplinary program structures</span>
                                            </li>
                                            <li class="mb-2 d-flex align-items-center">
                                                <i class="fas fa-check text-success me-2"></i>
                                                <span>Critical thinking frameworks</span>
                                            </li>
                                            <li class="d-flex align-items-center">
                                                <i class="fas fa-check text-success me-2"></i>
                                                <span>Community engagement components</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Case Study -->
        <!--<section class="py-5 bg-light">-->
        <!--    <div class="container py-4">-->
        <!--        <div class="row">-->
        <!--            <div class="col-lg-10 mx-auto">-->
        <!--                <div class="card border-0 shadow-lg overflow-hidden" data-aos="fade-up">-->
        <!--                    <div class="row g-0">-->
        <!--                        <div class="col-md-5 bg-primary d-flex align-items-center">-->
        <!--                            <div class="p-4 p-lg-5 text-white">-->
        <!--                                <h2 class="h3 fw-bold mb-3">Case Study</h2>-->
        <!--                                <h3 class="h2 mb-4">Engineering Curriculum Transformation</h3>-->
        <!--                                <p class="mb-4">Comprehensive redesign of engineering curriculum at a leading technical institute, resulting in enhanced student outcomes and improved employability.</p>-->
        <!--                                <div class="d-flex align-items-center">-->
        <!--                                    <div class="flex-shrink-0 bg-white rounded-circle d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">-->
        <!--                                        <span class="text-primary fw-bold">AS</span>-->
        <!--                                    </div>-->
        <!--                                    <div class="ms-3 text-white">-->
        <!--                                        <h4 class="h6 mb-0">Prof. Anand Sharma</h4>-->
        <!--                                        <p class="small mb-0">Principal, Engineering College</p>-->
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
        <!--                                        <span>25% increase in student placement rates within one year</span>-->
        <!--                                    </li>-->
        <!--                                    <li class="mb-3 d-flex">-->
        <!--                                        <i class="fas fa-check-circle text-success mt-1 me-3"></i>-->
        <!--                                        <span>Development of 8 new specialized tracks aligned with industry needs</span>-->
        <!--                                    </li>-->
        <!--                                    <li class="mb-3 d-flex">-->
        <!--                                        <i class="fas fa-check-circle text-success mt-1 me-3"></i>-->
        <!--                                        <span>Integration of 15 industry-sponsored capstone projects</span>-->
        <!--                                    </li>-->
        <!--                                    <li class="mb-3 d-flex">-->
        <!--                                        <i class="fas fa-check-circle text-success mt-1 me-3"></i>-->
        <!--                                        <span>Successful NBA accreditation with high scores on curriculum criteria</span>-->
        <!--                                    </li>-->
        <!--                                </ul>-->
        <!--                                <div class="fst-italic text-muted mb-0">-->
        <!--                                    <p>"Iprgneix consultants helped us redesign our engineering curriculum to align with NBA requirements and industry needs. Their expertise in outcome-based education and industry collaboration has not only helped us secure accreditation but also improved our students' employability significantly."</p>-->
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
        <section class="py-5">
            <div class="container py-4">
                <div class="section-title text-center mb-5" data-aos="fade-up">
                    <h2>Frequently Asked Questions</h2>
                    <p>Common questions about curriculum design and development for higher education institutions.</p>
                </div>
                
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="accordion" id="curriculumFAQ" data-aos="fade-up">
                            <div class="accordion-item border-0 mb-3 shadow-sm">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        How long does it typically take to develop a new curriculum?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#curriculumFAQ">
                                    <div class="accordion-body">
                                        <p>The timeline for curriculum development varies based on program complexity, institutional readiness, and regulatory requirements. Generally, our process follows these timeframes:</p>
                                        <ul>
                                            <li><strong>Needs Assessment & Planning:</strong> 1-2 months</li>
                                            <li><strong>Outcome Development & Content Structuring:</strong> 2-3 months</li>
                                            <li><strong>Detailed Course Development:</strong> 3-4 months</li>
                                            <li><strong>Review & Refinement:</strong> 1-2 months</li>
                                        </ul>
                                        <p>For a complete undergraduate program, the process typically takes 6-8 months from initial conceptualization to implementation-ready curriculum. For postgraduate programs or specialized professional programs, the timeline may be 4-6 months. We work closely with your institution to develop a realistic timeline that ensures quality while meeting your implementation goals.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 mb-3 shadow-sm">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        How do you ensure our curriculum meets regulatory requirements?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#curriculumFAQ">
                                    <div class="accordion-body">
                                        <p>Ensuring regulatory compliance is a core aspect of our curriculum design process:</p>
                                        <ul>
                                            <li><strong>Regulatory Expertise:</strong> Our team includes experts with in-depth knowledge of UGC, AICTE, NMC, BCI, and other regulatory body requirements</li>
                                            <li><strong>Compliance Mapping:</strong> We map curriculum elements against specific regulatory requirements and standards</li>
                                            <li><strong>Regulatory Documentation:</strong> We prepare all necessary documentation required for regulatory submissions and approvals</li>
                                            <li><strong>Regular Updates:</strong> We maintain awareness of evolving regulatory requirements and update curriculum designs accordingly</li>
                                            <li><strong>Pre-Approval Checks:</strong> We conduct internal quality audits to ensure all regulatory requirements are met before submission</li>
                                        </ul>
                                        <p>Our approach ensures that your curriculum not only meets current regulatory requirements but is also designed with flexibility to adapt to future regulatory changes. We pride ourselves on our track record of successful regulatory approvals for curricula we've designed.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 mb-3 shadow-sm">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        How do you incorporate industry requirements into curriculum design?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#curriculumFAQ">
                                    <div class="accordion-body">
                                        <p>We use a multi-faceted approach to ensure strong industry alignment in our curriculum designs:</p>
                                        <ul>
                                            <li><strong>Industry Consultations:</strong> We conduct structured consultations with industry partners, employers, and sector experts</li>
                                            <li><strong>Skills Gap Analysis:</strong> We analyze current and emerging skill requirements through labor market intelligence and industry reports</li>
                                            <li><strong>Industry Advisory Panels:</strong> We facilitate the formation of industry advisory committees to provide ongoing input</li>
                                            <li><strong>Alumni Feedback:</strong> We gather insights from recent graduates about workplace skill requirements</li>
                                            <li><strong>Industry Case Studies:</strong> We incorporate real-world industry cases and problems into course content</li>
                                            <li><strong>Industry-Integrated Learning:</strong> We design internships, projects, and work-based learning components</li>
                                        </ul>
                                        <p>This comprehensive approach ensures that graduates possess both theoretical knowledge and practical skills valued by employers. Our industry-aligned curricula have consistently resulted in improved placement rates and employer satisfaction with graduate readiness.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 shadow-sm">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        How do you prepare faculty to implement the new curriculum?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#curriculumFAQ">
                                    <div class="accordion-body">
                                        <p>Faculty preparation is critical for successful curriculum implementation. Our approach includes:</p>
                                        <ul>
                                            <li><strong>Faculty Involvement:</strong> We engage faculty throughout the curriculum development process to build ownership</li>
                                            <li><strong>Comprehensive Training Programs:</strong> We conduct workshops on outcome-based education, assessment strategies, and teaching methodologies</li>
                                            <li><strong>Course Development Support:</strong> We provide templates, examples, and guidance for detailed course planning</li>
                                            <li><strong>Teaching Resource Development:</strong> We assist in creating teaching materials, case studies, and assessment tools</li>
                                            <li><strong>Mentoring System:</strong> We establish peer mentoring to support faculty during initial implementation</li>
                                            <li><strong>Implementation Feedback:</strong> We gather regular feedback and provide ongoing support during the first cycle</li>
                                        </ul>
                                        <p>Our faculty development approach ensures smooth implementation of new curricula while building institutional capacity for continuous curriculum enhancement. We recognize that effective faculty preparation is essential for translating curriculum design into improved student learning outcomes.</p>
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
                        <h2 class="display-5 fw-bold mb-4">Ready to Transform Your Curriculum?</h2>
                        <p class="lead mb-5">Contact our curriculum design experts today to discuss how we can help your institution develop innovative, industry-relevant programs that prepare students for success.</p>
                        <a href="{{route('other.pages.contact.us')}}" class="btn btn-light btn-lg px-5">Contact Us Now</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection