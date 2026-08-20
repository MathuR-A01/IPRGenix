@extends('layout.main')
@section('content')

<main>
        <!-- Page Header -->
        <section class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="display-4 fw-bold mb-3">NEP 2020 Implementation</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-white">Home</a></li>
                                <li class="breadcrumb-item"><a href="index.php#services" class="text-white">Services</a></li>
                                <li class="breadcrumb-item active text-white" aria-current="page">NEP 2020 Implementation</li>
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
                        <h2 class="display-5 fw-bold mb-4">Implementing NEP 2020 with Confidence</h2>
                        <p class="lead mb-4">The National Education Policy 2020 represents a transformative reform in India's education system, bringing significant changes to higher education institutions. Our expert consultants provide comprehensive support to implement these reforms effectively, ensuring compliance while enhancing educational quality.</p>
                        
                        <div class="mb-5">
                            <h3 class="h4 mb-3">Key Benefits</h3>
                            <ul class="list-unstyled">
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>Systematic implementation of NEP 2020's multidisciplinary education framework</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>Smooth transition to flexible curriculum and credit systems</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>Enhanced focus on skill development and employability</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>Improved teaching-learning processes aligned with NEP 2020 guidelines</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>Effective integration of technology and digital learning</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>Seamless implementation of governance reforms and autonomy</span>
                                </li>
                            </ul>
                        </div>
                        
                        <a href="contact.php" class="btn btn-primary btn-lg">Request NEP Implementation Support</a>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                        <div class="rounded-4 overflow-hidden shadow-lg">
                            <img src="{{asset('assets/images/nep2020.jpg')}}" alt="NEP 2020 Implementation" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Key NEP 2020 Implementation Areas -->
        <section class="py-5 bg-light">
            <div class="container py-4">
                <div class="section-title text-center mb-5" data-aos="fade-up">
                    <h2>Key NEP 2020 Implementation Areas</h2>
                    <p>Our comprehensive approach addresses all major aspects of NEP 2020 for higher education institutions.</p>
                </div>
                
                <div class="row g-4">
                    <!-- Area 1: Multidisciplinary Education -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="modern-card h-100">
                            <div class="card-body p-4">
                                <div class="card-icon">
                                    <i class="fas fa-project-diagram"></i>
                                </div>
                                <h3 class="h4 card-title mb-3">Multidisciplinary Education</h3>
                                <p class="card-text mb-4">Transform your institution into a multidisciplinary education hub with flexible learning pathways and choice-based systems.</p>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Multidisciplinary framework development</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Flexible program structures</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Interdisciplinary learning paths</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Area 2: Academic Credit System -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="modern-card h-100">
                            <div class="card-body p-4">
                                <div class="card-icon">
                                    <i class="fas fa-credit-card"></i>
                                </div>
                                <h3 class="h4 card-title mb-3">Academic Credit System</h3>
                                <p class="card-text mb-4">Implement the Academic Bank of Credits (ABC) and credit transfer systems to provide flexible learning opportunities.</p>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>ABC system implementation</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Credit framework development</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Credit transfer mechanisms</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Area 3: Holistic & Skill-Based Education -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="modern-card h-100">
                            <div class="card-body p-4">
                                <div class="card-icon">
                                    <i class="fas fa-tools"></i>
                                </div>
                                <h3 class="h4 card-title mb-3">Holistic & Skill-Based Education</h3>
                                <p class="card-text mb-4">Develop integrated curricula that balance academic knowledge with practical skills and values-based education.</p>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Skill development integration</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Vocational education pathways</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Values-based education components</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Area 4: Digital Education -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="modern-card h-100">
                            <div class="card-body p-4">
                                <div class="card-icon">
                                    <i class="fas fa-laptop"></i>
                                </div>
                                <h3 class="h4 card-title mb-3">Digital Education</h3>
                                <p class="card-text mb-4">Harness technology for enhanced learning experiences through integrated digital platforms and resources.</p>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Digital infrastructure planning</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Online/blended learning models</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Digital content development</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Area 5: Institutional Autonomy -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="modern-card h-100">
                            <div class="card-body p-4">
                                <div class="card-icon">
                                    <i class="fas fa-university"></i>
                                </div>
                                <h3 class="h4 card-title mb-3">Institutional Autonomy</h3>
                                <p class="card-text mb-4">Develop governance structures that enable greater academic, administrative, and financial autonomy.</p>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Autonomy framework development</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Governance structure redesign</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Self-governance capacity building</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Area 6: Internationalization -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="modern-card h-100">
                            <div class="card-body p-4">
                                <div class="card-icon">
                                    <i class="fas fa-globe"></i>
                                </div>
                                <h3 class="h4 card-title mb-3">Internationalization</h3>
                                <p class="card-text mb-4">Develop frameworks for international partnerships, student exchange, and global research collaborations.</p>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>International partnership frameworks</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Student exchange programs</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Global research collaborations</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Our NEP Implementation Process -->
        <section class="py-5">
            <div class="container py-4">
                <div class="section-title text-center mb-5" data-aos="fade-up">
                    <h2>Our NEP Implementation Process</h2>
                    <p>A systematic approach to effectively implement NEP 2020 in your institution.</p>
                </div>
                
                <div class="row g-4">
                    <div class="col-lg-10 mx-auto" data-aos="fade-up">
                        <div class="card border-0 shadow-lg">
                            <div class="card-body p-4 p-lg-5">
                                <div class="row">
                                    <!-- Phase 1 -->
                                    <div class="col-md-6 mb-4">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 bg-primary rounded-circle d-flex align-items-center justify-content-center me-4" style="width: 60px; height: 60px;">
                                                <span class="h4 text-white fw-bold mb-0">1</span>
                                            </div>
                                            <div>
                                                <h3 class="h4 fw-bold mb-3">Assessment & Gap Analysis</h3>
                                                <p class="text-muted mb-0">Comprehensive evaluation of the institution's current state against NEP 2020 requirements, identifying key gaps and priorities.</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Phase 2 -->
                                    <div class="col-md-6 mb-4">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 bg-primary rounded-circle d-flex align-items-center justify-content-center me-4" style="width: 60px; height: 60px;">
                                                <span class="h4 text-white fw-bold mb-0">2</span>
                                            </div>
                                            <div>
                                                <h3 class="h4 fw-bold mb-3">Implementation Planning</h3>
                                                <p class="text-muted mb-0">Development of a comprehensive implementation roadmap with clear timelines, responsibilities, and resource requirements.</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Phase 3 -->
                                    <div class="col-md-6 mb-4 mb-md-0">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 bg-primary rounded-circle d-flex align-items-center justify-content-center me-4" style="width: 60px; height: 60px;">
                                                <span class="h4 text-white fw-bold mb-0">3</span>
                                            </div>
                                            <div>
                                                <h3 class="h4 fw-bold mb-3">Capacity Building</h3>
                                                <p class="text-muted mb-0">Training and development programs for administrators, faculty, and staff to build implementation capabilities.</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Phase 4 -->
                                    <div class="col-md-6">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 bg-primary rounded-circle d-flex align-items-center justify-content-center me-4" style="width: 60px; height: 60px;">
                                                <span class="h4 text-white fw-bold mb-0">4</span>
                                            </div>
                                            <div>
                                                <h3 class="h4 fw-bold mb-3">Implementation Support</h3>
                                                <p class="text-muted mb-0">Ongoing support during implementation with regular monitoring, troubleshooting, and course corrections as needed.</p>
                                            </div>
                                        </div>
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
        <!--                                <h3 class="h2 mb-4">NEP Transformation at State University</h3>-->
        <!--                                <p class="mb-4">Comprehensive NEP 2020 implementation across all academic departments, resulting in enhanced flexibility, student outcomes, and institutional reputation.</p>-->
        <!--                                <div class="d-flex align-items-center">-->
        <!--                                    <div class="flex-shrink-0 bg-white rounded-circle d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">-->
        <!--                                        <span class="text-primary fw-bold">VU</span>-->
        <!--                                    </div>-->
        <!--                                    <div class="ms-3 text-white">-->
        <!--                                        <h4 class="h6 mb-0">Dr. Vikram Upadhyay</h4>-->
        <!--                                        <p class="small mb-0">Vice Chancellor, State University</p>-->
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
        <!--                                        <span>Implementation of multidisciplinary education framework across 6 faculties</span>-->
        <!--                                    </li>-->
        <!--                                    <li class="mb-3 d-flex">-->
        <!--                                        <i class="fas fa-check-circle text-success mt-1 me-3"></i>-->
        <!--                                        <span>Academic Bank of Credits system integration with 15+ partnering institutions</span>-->
        <!--                                    </li>-->
        <!--                                    <li class="mb-3 d-flex">-->
        <!--                                        <i class="fas fa-check-circle text-success mt-1 me-3"></i>-->
        <!--                                        <span>Development of 25+ skill-based certificate courses integrated with degree programs</span>-->
        <!--                                    </li>-->
        <!--                                    <li class="mb-3 d-flex">-->
        <!--                                        <i class="fas fa-check-circle text-success mt-1 me-3"></i>-->
        <!--                                        <span>Comprehensive digital learning infrastructure implementation</span>-->
        <!--                                    </li>-->
        <!--                                </ul>-->
        <!--                                <div class="fst-italic text-muted mb-0">-->
        <!--                                    <p>"Iprgneix's comprehensive approach to implementing NEP 2020 across our university has been transformative. Their team's expertise in curriculum restructuring and academic governance reforms has helped us navigate complex regulatory requirements while enhancing our educational offerings."</p>-->
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
                    <p>Common questions about NEP 2020 implementation for higher education institutions.</p>
                </div>
                
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="accordion" id="nepFAQ" data-aos="fade-up">
                            <div class="accordion-item border-0 mb-3 shadow-sm">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What is the timeframe for implementing NEP 2020 reforms in our institution?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#nepFAQ">
                                    <div class="accordion-body">
                                        <p>The implementation timeframe for NEP 2020 reforms varies based on the institution's current state, size, and complexity. Typically, we recommend a phased approach:</p>
                                        <ul>
                                            <li><strong>Phase 1 (3-6 months):</strong> Assessment, gap analysis, and implementation planning</li>
                                            <li><strong>Phase 2 (6-12 months):</strong> Initial implementation of core elements (multidisciplinary framework, credit system restructuring)</li>
                                            <li><strong>Phase 3 (12-24 months):</strong> Full implementation across all aspects (governance reforms, digital infrastructure, internationalization)</li>
                                            <li><strong>Phase 4 (Ongoing):</strong> Continuous refinement and enhancement</li>
                                        </ul>
                                        <p>We customize this timeline based on your institution's specific context, priorities, and readiness. Some institutions may implement changes more rapidly, while others may require a more gradual approach to ensure smooth transitions.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 mb-3 shadow-sm">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        How do we implement multidisciplinary education as required by NEP 2020?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#nepFAQ">
                                    <div class="accordion-body">
                                        <p>Implementing multidisciplinary education involves several key steps:</p>
                                        <ol>
                                            <li><strong>Structural Assessment:</strong> Evaluate your current academic structure and identify opportunities for cross-disciplinary integration</li>
                                            <li><strong>Framework Development:</strong> Design a flexible academic framework that allows students to choose courses across disciplines</li>
                                            <li><strong>Curriculum Redesign:</strong> Revise curricula to include core disciplinary courses, interdisciplinary components, and elective options</li>
                                            <li><strong>Faculty Development:</strong> Train faculty in interdisciplinary teaching approaches and collaborative instruction</li>
                                            <li><strong>Administrative Systems:</strong> Adapt administrative systems to support cross-departmental course registration and credit tracking</li>
                                            <li><strong>Resource Allocation:</strong> Reallocate resources to support multidisciplinary teaching, research, and learning spaces</li>
                                        </ol>
                                        <p>Our consultants guide institutions through each of these steps, providing templates, frameworks, and best practices to ensure effective implementation of multidisciplinary education aligned with NEP 2020 requirements.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 mb-3 shadow-sm">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        What challenges should we anticipate in NEP 2020 implementation?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#nepFAQ">
                                    <div class="accordion-body">
                                        <p>Common challenges in NEP 2020 implementation include:</p>
                                        <ul>
                                            <li><strong>Structural Rigidity:</strong> Existing academic and administrative structures may resist the flexibility required by NEP 2020</li>
                                            <li><strong>Faculty Resistance:</strong> Faculty may be hesitant to adopt new teaching approaches or interdisciplinary collaboration</li>
                                            <li><strong>Resource Constraints:</strong> Implementing new systems and approaches may require additional resources and infrastructure</li>
                                            <li><strong>Technical Challenges:</strong> Integrating digital platforms and establishing Academic Bank of Credits connectivity</li>
                                            <li><strong>Regulatory Clarity:</strong> Evolving regulatory guidelines and requirements from UGC, AICTE, and other bodies</li>
                                            <li><strong>Change Management:</strong> Managing the pace and scope of change to avoid disruption to ongoing operations</li>
                                        </ul>
                                        <p>Our implementation approach proactively addresses these challenges through careful planning, stakeholder engagement, capacity building, and phased implementation strategies. We also leverage our expertise in higher education policy and our network of regulatory connections to navigate evolving guidelines effectively.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 shadow-sm">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        How does NEP 2020 implementation align with accreditation requirements?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#nepFAQ">
                                    <div class="accordion-body">
                                        <p>NEP 2020 implementation and accreditation requirements are highly complementary:</p>
                                        <ul>
                                            <li><strong>Quality Focus:</strong> Both NEP 2020 and accreditation frameworks emphasize quality enhancement in teaching, learning, and research</li>
                                            <li><strong>Outcome Orientation:</strong> NEP 2020's focus on holistic development aligns with outcome-based education emphasized in accreditation</li>
                                            <li><strong>Governance Reforms:</strong> NEP's emphasis on institutional autonomy aligns with accreditation standards for effective governance</li>
                                            <li><strong>Stakeholder Engagement:</strong> Both frameworks value industry connections, community engagement, and stakeholder feedback</li>
                                            <li><strong>Documentation Systems:</strong> Implementing NEP 2020 requires robust documentation that also supports accreditation processes</li>
                                        </ul>
                                        <p>Our NEP implementation approach is designed to simultaneously strengthen your institution's accreditation readiness. We integrate accreditation requirements into NEP implementation plans, ensuring that changes made for NEP compliance also enhance your institution's performance on accreditation parameters. This integrated approach maximizes efficiency and ensures that your institution benefits fully from both processes.</p>
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
                        <h2 class="display-5 fw-bold mb-4">Ready to Transform Your Institution with NEP 2020?</h2>
                        <p class="lead mb-5">Contact our NEP implementation experts today to discuss how we can help your institution navigate the transformative changes of the National Education Policy 2020.</p>
                        <a href="{{route('other.pages.contact.us')}}" class="btn btn-light btn-lg px-5">Contact Us Now</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection