@extends('layout.main')
@section('content')

    <main>
        <!-- Page Header -->
        <section class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="display-4 fw-bold mb-3">Accreditations & Ranking</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-white">Home</a></li>
                                <li class="breadcrumb-item"><a href="index.php#services" class="text-white">Services</a></li>
                                <li class="breadcrumb-item active text-white" aria-current="page">Accreditations & Ranking</li>
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
                        <h2 class="display-5 fw-bold mb-4">Expert Guidance for Accreditation Success</h2>
                        <p class="lead mb-4">Accreditations and rankings are vital markers of institutional quality and excellence. Our comprehensive accreditation support services help institutions navigate complex accreditation processes, prepare effective self-study reports, and implement improvements that lead to successful outcomes and higher rankings.</p>
                        
                        <div class="mb-5">
                            <h3 class="h4 mb-3">Key Benefits</h3>
                            <ul class="list-unstyled">
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>Expert guidance from former accreditation assessors and committee members</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>Comprehensive preparation for International accreditation frameworks</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>Structured approach to documentation and evidence compilation</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>Effective self-study report development that highlights institutional strengths</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>Mock assessments and peer review preparations</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>Strategic improvements to enhance ranking parameters</span>
                                </li>
                            </ul>
                        </div>
                        
                        <a href="contact.php" class="btn btn-primary btn-lg">Request Accreditation Support</a>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                        <div class="rounded-4 overflow-hidden shadow-lg">
                            <img src="{{asset('assets/images/accredations_and_rankings.jpg')}}" alt="Accreditation ceremony" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Accreditation Support Services -->
        <section class="py-5 bg-light">
            <div class="container py-4">
                <div class="section-title text-center mb-5" data-aos="fade-up">
                    <h2>Comprehensive Accreditation Support</h2>
                    <p>Expert guidance for all major accreditation and ranking frameworks.</p>
                </div>
                
                <div class="row g-4">
                    <!-- NAAC Accreditation -->
                    {{-- <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="modern-card h-100">
                            <div class="card-body p-4">
                                <div class="card-icon">
                                    <i class="fas fa-award"></i>
                                </div>
                                <h3 class="h4 card-title mb-3">NAAC Accreditation</h3>
                                <p class="card-text mb-4">Comprehensive support for National Assessment and Accreditation Council (NAAC) accreditation process.</p>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>SSR preparation support</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Evidence compilation guidance</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Peer team visit preparation</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}
                    
                    <!-- NBA Accreditation -->
                    {{-- <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="modern-card h-100">
                            <div class="card-body p-4">
                                <div class="card-icon">
                                    <i class="fas fa-cogs"></i>
                                </div>
                                <h3 class="h4 card-title mb-3">NBA Accreditation</h3>
                                <p class="card-text mb-4">Specialized support for National Board of Accreditation (NBA) process for technical programs.</p>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>OBE implementation support</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>SAR preparation guidance</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Evaluation process readiness</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}
                    
                    <!-- NIRF Ranking -->
                    {{-- <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="modern-card h-100">
                            <div class="card-body p-4">
                                <div class="card-icon">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <h3 class="h4 card-title mb-3">NIRF Ranking</h3>
                                <p class="card-text mb-4">Strategic support for improving National Institutional Ranking Framework (NIRF) parameters and ranking.</p>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Parameter analysis & planning</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Data compilation strategies</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Ranking improvement roadmaps</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}
                    
                    <!-- Autonomous Status -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="modern-card h-100">
                            <div class="card-body p-4">
                                <div class="card-icon">
                                    <i class="fas fa-university"></i>
                                </div>
                                <h3 class="h4 card-title mb-3">Autonomous Status</h3>
                                <p class="card-text mb-4">Expert guidance for institutions seeking autonomous status from UGC/university affiliations.</p>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Eligibility assessment</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Application preparation</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Inspection readiness</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- International Accreditations -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="modern-card h-100">
                            <div class="card-body p-4">
                                <div class="card-icon">
                                    <i class="fas fa-globe"></i>
                                </div>
                                <h3 class="h4 card-title mb-3">International Accreditations</h3>
                                <p class="card-text mb-4">Support for international accreditations like AACSB, ABET, EQUIS, and Washington Accord frameworks.</p>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Framework-specific guidance</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Self-evaluation support</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Quality standard alignment</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- QS/THE Rankings -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="modern-card h-100">
                            <div class="card-body p-4">
                                <div class="card-icon">
                                    <i class="fas fa-medal"></i>
                                </div>
                                <h3 class="h4 card-title mb-3">QS/THE Rankings</h3>
                                <p class="card-text mb-4">Strategic guidance for improving global rankings like QS World University Rankings and Times Higher Education (THE) rankings.</p>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Parameter improvement strategies</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Reputation enhancement</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Data submission optimization</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Our Accreditation Process -->
        <section class="py-5">
            <div class="container py-4">
                <div class="section-title text-center mb-5" data-aos="fade-up">
                    <h2>Our Accreditation Support Process</h2>
                    <p>A systematic approach that maximizes accreditation success.</p>
                </div>
                
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <!-- Process Steps -->
                        <div class="position-relative" data-aos="fade-up">
                            <!-- Step 1 -->
                            <div class="row mb-5">
                                <div class="col-md-6 pe-md-5">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                            <span class="h4 text-white fw-bold mb-0">1</span>
                                        </div>
                                        <div class="ms-4">
                                            <h3 class="h4 fw-bold mb-3">Gap Analysis</h3>
                                            <p class="text-muted mb-0">Comprehensive assessment of current status against accreditation parameters to identify improvement areas and prioritize actions.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 d-none d-md-block"></div>
                            </div>
                            
                            <!-- Step 2 -->
                            <div class="row mb-5">
                                <div class="col-md-6 d-none d-md-block"></div>
                                <div class="col-md-6 ps-md-5">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                            <span class="h4 text-white fw-bold mb-0">2</span>
                                        </div>
                                        <div class="ms-4">
                                            <h3 class="h4 fw-bold mb-3">Action Planning</h3>
                                            <p class="text-muted mb-0">Development of detailed improvement plans with specific timelines, responsibilities, and resource allocations to address identified gaps.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Step 3 -->
                            <div class="row mb-5">
                                <div class="col-md-6 pe-md-5">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                            <span class="h4 text-white fw-bold mb-0">3</span>
                                        </div>
                                        <div class="ms-4">
                                            <h3 class="h4 fw-bold mb-3">Documentation Support</h3>
                                            <p class="text-muted mb-0">Expert guidance in preparing self-study reports, compiling evidence, and organizing documentation in the required format.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 d-none d-md-block"></div>
                            </div>
                            
                            <!-- Step 4 -->
                            <div class="row mb-5">
                                <div class="col-md-6 d-none d-md-block"></div>
                                <div class="col-md-6 ps-md-5">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                            <span class="h4 text-white fw-bold mb-0">4</span>
                                        </div>
                                        <div class="ms-4">
                                            <h3 class="h4 fw-bold mb-3">Mock Assessment</h3>
                                            <p class="text-muted mb-0">Conducting thorough mock evaluations to identify potential issues and ensure readiness for the actual assessment process.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Step 5 -->
                            <div class="row">
                                <div class="col-md-6 pe-md-5">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                            <span class="h4 text-white fw-bold mb-0">5</span>
                                        </div>
                                        <div class="ms-4">
                                            <h3 class="h4 fw-bold mb-3">Visit Preparation & Support</h3>
                                            <p class="text-muted mb-0">Comprehensive preparation for on-site visits including stakeholder readiness, presentation development, and logistics planning.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 d-none d-md-block"></div>
                            </div>
                            
                            <!-- Vertical Line for Desktop -->
                            <div class="d-none d-md-block position-absolute top-0 start-50 translate-middle-x" style="width: 2px; height: 100%; background-color: #e9ecef;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Success Statistics -->
        <section class="py-5 bg-light">
            <div class="container py-4">
                <div class="section-title text-center mb-5" data-aos="fade-up">
                    <h2>Our Accreditation Success</h2>
                    <p>Track record of successful accreditation outcomes across multiple frameworks.</p>
                </div>
                
                <div class="row g-4">
                    <div class="col-lg-10 mx-auto">
                        <div class="card border-0 shadow-lg" data-aos="fade-up">
                            <div class="card-body p-4 p-lg-5">
                                <div class="row text-center g-4">
                                    <!-- Stat 1 -->
                                    <div class="col-6 col-md-3">
                                        <div class="display-4 fw-bold text-primary mb-2">
                                            <span class="counter-value" data-value="95">0</span>%
                                        </div>
                                        <h3 class="h5 mb-0">NAAC Success Rate</h3>
                                    </div>
                                    
                                    <!-- Stat 2 -->
                                    <div class="col-6 col-md-3">
                                        <div class="display-4 fw-bold text-primary mb-2">
                                            <span class="counter-value" data-value="90">0</span>%
                                        </div>
                                        <h3 class="h5 mb-0">NBA Success Rate</h3>
                                    </div>
                                    
                                    <!-- Stat 3 -->
                                    <div class="col-6 col-md-3">
                                        <div class="display-4 fw-bold text-primary mb-2">
                                            <span class="counter-value" data-value="50">0</span>+
                                        </div>
                                        <h3 class="h5 mb-0">Accreditations Achieved</h3>
                                    </div>
                                    
                                    <!-- Stat 4 -->
                                    <div class="col-6 col-md-3">
                                        <div class="display-4 fw-bold text-primary mb-2">
                                            <span class="counter-value" data-value="25">0</span>+
                                        </div>
                                        <h3 class="h5 mb-0">Ranking Improvements</h3>
                                    </div>
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
        <!--                                <h3 class="h2 mb-4">NAAC 'A+' Grade Achievement</h3>-->
        <!--                                <p class="mb-4">Comprehensive accreditation support for a college seeking its first NAAC accreditation, resulting in 'A+' grade achievement.</p>-->
        <!--                                <div class="d-flex align-items-center">-->
        <!--                                    <div class="flex-shrink-0 bg-white rounded-circle d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">-->
        <!--                                        <span class="text-primary fw-bold">MP</span>-->
        <!--                                    </div>-->
        <!--                                    <div class="ms-3 text-white">-->
        <!--                                        <h4 class="h6 mb-0">Dr. Meera Patel</h4>-->
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
        <!--                                        <span>Comprehensive gap analysis identifying 35+ improvement areas</span>-->
        <!--                                    </li>-->
        <!--                                    <li class="mb-3 d-flex">-->
        <!--                                        <i class="fas fa-check-circle text-success mt-1 me-3"></i>-->
        <!--                                        <span>Implementation of 20+ quality enhancement initiatives</span>-->
        <!--                                    </li>-->
        <!--                                    <li class="mb-3 d-flex">-->
        <!--                                        <i class="fas fa-check-circle text-success mt-1 me-3"></i>-->
        <!--                                        <span>Development of robust documentation system for evidence compilation</span>-->
        <!--                                    </li>-->
        <!--                                    <li class="mb-3 d-flex">-->
        <!--                                        <i class="fas fa-check-circle text-success mt-1 me-3"></i>-->
        <!--                                        <span>Successful accreditation with 'A+' grade (CGPA 3.51)</span>-->
        <!--                                    </li>-->
        <!--                                </ul>-->
        <!--                                <div class="fst-italic text-muted mb-0">-->
        <!--                                    <p>"The accreditation support provided by Iprgneix was exceptional. Their team guided us through every step of the NAAC process, from self-study report preparation to the final visit. We achieved an 'A' grade, which has significantly enhanced our college's reputation and opportunities."</p>-->
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
                    <p>Common questions about accreditation and ranking processes.</p>
                </div>
                
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="accordion" id="accreditationFAQ" data-aos="fade-up">
                            {{-- <div class="accordion-item border-0 mb-3 shadow-sm">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        How long does the accreditation preparation process typically take?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accreditationFAQ">
                                    <div class="accordion-body">
                                        <p>The timeline for accreditation preparation varies based on the institution's current state and the specific accreditation framework:</p>
                                        <ul>
                                            <li><strong>NAAC Accreditation:</strong> Typically 8-12 months for first-time accreditation and 6-8 months for re-accreditation</li>
                                            <li><strong>NBA Accreditation:</strong> Generally 6-10 months depending on program readiness</li>
                                            <li><strong>Autonomous Status:</strong> Around 6-8 months from initiation to inspection</li>
                                            <li><strong>International Accreditations:</strong> 12-24 months depending on the framework</li>
                                        </ul>
                                        <p>These timelines include gap analysis, implementing improvements, documentation preparation, and mock assessments. The key is to start early and approach the process systematically. Our consultants work with your institution to develop a realistic timeline based on your specific context and readiness level.</p>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="accordion-item border-0 mb-3 shadow-sm">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        What are the common challenges institutions face during accreditation?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accreditationFAQ">
                                    <div class="accordion-body">
                                        <p>Based on our experience with numerous institutions, these are the most common challenges in accreditation processes:</p>
                                        <ul>
                                            <li><strong>Documentation Management:</strong> Systematically collecting, organizing, and presenting evidence across multiple criteria</li>
                                            <li><strong>Data Inconsistencies:</strong> Ensuring consistent and accurate data across different departments and reports</li>
                                            <li><strong>Stakeholder Engagement:</strong> Getting faculty, staff, and students actively involved in the accreditation process</li>
                                            <li><strong>Quality Metrics:</strong> Meeting benchmarks in areas like research output, faculty qualifications, and infrastructure</li>
                                            <li><strong>Resource Constraints:</strong> Balancing accreditation preparation with day-to-day operational demands</li>
                                            <li><strong>Narrative Development:</strong> Creating a compelling institutional narrative that effectively showcases strengths</li>
                                        </ul>
                                        <p>Our approach proactively addresses these challenges through structured processes, technology tools, and proven templates. We provide hands-on support to navigate these obstacles and transform the accreditation process from a challenge into an opportunity for institutional improvement.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 mb-3 shadow-sm">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        How do you help institutions improve their rankings?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accreditationFAQ">
                                    <div class="accordion-body">
                                        <p>Our approach to ranking improvement is systematic and targeted:</p>
                                        <ol>
                                            <li><strong>Parameter Analysis:</strong> Detailed assessment of current performance across all ranking parameters</li>
                                            <li><strong>Benchmarking:</strong> Comparison with peer institutions to identify competitive gaps and opportunities</li>
                                            <li><strong>Targeted Interventions:</strong> Development of specific initiatives to improve performance in key parameters:
                                                <ul>
                                                    <li><em>Research Output:</em> Strategies to enhance research quality, quantity, and impact</li>
                                                    <li><em>Teaching Quality:</em> Faculty development programs and pedagogical innovations</li>
                                                    <li><em>Employer Reputation:</em> Industry engagement and placement enhancement initiatives</li>
                                                    <li><em>Internationalization:</em> Frameworks for international collaborations and student exchange</li>
                                                    <li><em>Infrastructure:</em> Optimization of facilities and learning resources</li>
                                                </ul>
                                            </li>
                                            <li><strong>Data Management:</strong> Systems for accurate data collection, verification, and reporting</li>
                                            <li><strong>Submission Optimization:</strong> Strategic approach to highlighting strengths in ranking submissions</li>
                                        </ol>
                                        <p>Our ranking improvement strategies focus on sustainable enhancements that improve both ranking positions and actual institutional quality. We develop multi-year roadmaps that align ranking parameters with broader institutional goals and quality initiatives.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 shadow-sm">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        What sets your accreditation support services apart?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accreditationFAQ">
                                    <div class="accordion-body">
                                        <p>Our accreditation support services are distinguished by several key differentiators:</p>
                                        <ul>
                                            <li><strong>Insider Expertise:</strong> Our team includes former assessors, committee members, and senior administrators with direct experience in evaluation processes</li>
                                            <li><strong>Holistic Approach:</strong> We focus on genuine quality enhancement, not just compliance, ensuring long-term institutional benefits</li>
                                            <li><strong>Customized Solutions:</strong> Tailored support based on your institution's unique context, strengths, and improvement areas</li>
                                            <li><strong>Practical Tools:</strong> Ready-to-use templates, checklists, and systems that simplify complex accreditation requirements</li>
                                            <li><strong>Capacity Building:</strong> Knowledge transfer that empowers your team to manage future accreditation cycles independently</li>
                                            <li><strong>Success Track Record:</strong> Proven history of successful outcomes across multiple accreditation frameworks</li>
                                        </ul>
                                        <p>Most importantly, we view ourselves as partners in your institution's quality journey, not just external consultants. We're committed to building lasting relationships that support your institution's ongoing excellence and recognition.</p>
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
                        <h2 class="display-5 fw-bold mb-4">Ready to Achieve Accreditation Excellence?</h2>
                        <p class="lead mb-5">Contact our accreditation experts today to discuss how we can help your institution navigate the accreditation process successfully and enhance your rankings.</p>
                        <a href="{{route('other.pages.contact.us')}}" class="btn btn-light btn-lg px-5">Contact Us Now</a>
                    </div>
                </div>
            </div>
        </section>
    </main>


@endsection