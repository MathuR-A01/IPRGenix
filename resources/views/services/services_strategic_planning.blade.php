@extends('layout.main')
@section('content')

    <main>
        <!-- Page Header -->
        <section class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="display-4 fw-bold mb-3">Strategic Planning for HEIs</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-white">Home</a></li>
                                <li class="breadcrumb-item"><a href="index.php#services" class="text-white">Services</a></li>
                                <li class="breadcrumb-item active text-white" aria-current="page">Strategic Planning</li>
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
                        <h2 class="display-5 fw-bold mb-4">Strategic Planning for Educational Excellence</h2>
                        <p class="lead mb-4">Effective strategic planning is crucial for higher education institutions to navigate the evolving educational landscape, address challenges, and capitalize on opportunities. Our comprehensive strategic planning services help institutions develop clear roadmaps for sustainable growth and academic excellence.</p>
                        
                        <div class="mb-5">
                            <h3 class="h4 mb-3">Key Benefits</h3>
                            <ul class="list-unstyled">
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>Data-driven decision-making frameworks for institutional development</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>Alignment of academic, administrative, and financial objectives</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>Clear implementation pathways with measurable outcomes</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>Resource optimization and sustainable financial planning</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>Improved stakeholder engagement and institutional cohesion</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>Enhanced competitiveness and market positioning</span>
                                </li>
                            </ul>
                        </div>
                        
                        <a href="contact.php" class="btn btn-primary btn-lg">Request a Strategic Assessment</a>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                        <div class="rounded-4 overflow-hidden shadow-lg">
                            <img src="{{asset('assets/images/startegic_planning_higher_education.jpg')}}" alt="Strategic planning session" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Strategic Planning Areas -->
        <section class="py-5 bg-light">
            <div class="container py-4">
                <div class="section-title text-center mb-5" data-aos="fade-up">
                    <h2>Comprehensive Strategic Planning Areas</h2>
                    <p>Our strategic planning services address all key operational areas of higher education institutions.</p>
                </div>
                
                <div class="row g-4">
                    <!-- Area 1: Academic Planning -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="modern-card h-100">
                            <div class="card-body p-4">
                                <div class="card-icon">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <h3 class="h4 card-title mb-3">Academic Planning</h3>
                                <p class="card-text mb-4">Comprehensive academic portfolio development, program review frameworks, and faculty development strategies aligned with institutional vision and market needs.</p>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Program portfolio optimization</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Faculty planning and development</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Teaching-learning enhancement</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Area 2: Research Planning -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="modern-card h-100">
                            <div class="card-body p-4">
                                <div class="card-icon">
                                    <i class="fas fa-flask"></i>
                                </div>
                                <h3 class="h4 card-title mb-3">Research Planning</h3>
                                <p class="card-text mb-4">Strategic research frameworks that enhance institutional research capabilities, output, and impact through targeted initiatives and resource allocation.</p>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Research focus area identification</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Funding and grant strategies</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Research infrastructure development</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Area 3: Infrastructure Planning -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="modern-card h-100">
                            <div class="card-body p-4">
                                <div class="card-icon">
                                    <i class="fas fa-building"></i>
                                </div>
                                <h3 class="h4 card-title mb-3">Infrastructure Planning</h3>
                                <p class="card-text mb-4">Comprehensive physical and digital infrastructure planning that supports academic and administrative functions while ensuring sustainability.</p>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Campus master planning</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Technology infrastructure planning</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Sustainable facility development</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Area 4: Financial Planning -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="modern-card h-100">
                            <div class="card-body p-4">
                                <div class="card-icon">
                                    <i class="fas fa-chart-pie"></i>
                                </div>
                                <h3 class="h4 card-title mb-3">Financial Planning</h3>
                                <p class="card-text mb-4">Strategic financial frameworks that ensure fiscal sustainability, optimize resource allocation, and support institutional priorities.</p>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Revenue diversification strategies</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Budget optimization frameworks</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Long-term financial sustainability</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Area 5: Student Affairs Planning -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="modern-card h-100">
                            <div class="card-body p-4">
                                <div class="card-icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <h3 class="h4 card-title mb-3">Student Affairs Planning</h3>
                                <p class="card-text mb-4">Comprehensive strategies for enhancing student experience, support services, and engagement to improve outcomes and satisfaction.</p>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Enrollment management</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Student support services</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Student experience enhancement</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Area 6: Governance Planning -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="modern-card h-100">
                            <div class="card-body p-4">
                                <div class="card-icon">
                                    <i class="fas fa-sitemap"></i>
                                </div>
                                <h3 class="h4 card-title mb-3">Governance Planning</h3>
                                <p class="card-text mb-4">Effective governance frameworks that enhance institutional decision-making, leadership development, and organizational efficiency.</p>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Organizational structure optimization</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Policy development frameworks</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Leadership development programs</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Our Strategic Planning Process -->
        <section class="py-5">
            <div class="container py-4">
                <div class="section-title text-center mb-5" data-aos="fade-up">
                    <h2>Our Strategic Planning Process</h2>
                    <p>A systematic, collaborative approach to developing effective institutional strategies.</p>
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
                                            <h3 class="h4 fw-bold mb-3">Institutional Assessment</h3>
                                            <p class="text-muted mb-0">Comprehensive evaluation of the institution's current state, including SWOT analysis, stakeholder inputs, and environmental scanning.</p>
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
                                            <h3 class="h4 fw-bold mb-3">Vision and Goal Setting</h3>
                                            <p class="text-muted mb-0">Collaborative development of institutional vision, mission, values, and strategic goals that align with the assessment findings.</p>
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
                                            <h3 class="h4 fw-bold mb-3">Strategy Formulation</h3>
                                            <p class="text-muted mb-0">Development of targeted strategies and action plans for each key area, with clearly defined objectives, timelines, and resource requirements.</p>
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
                                            <h3 class="h4 fw-bold mb-3">Implementation Framework</h3>
                                            <p class="text-muted mb-0">Development of detailed implementation plans, resource allocation frameworks, and responsibility matrices to guide execution.</p>
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
                                            <h3 class="h4 fw-bold mb-3">Monitoring and Evaluation</h3>
                                            <p class="text-muted mb-0">Establishment of robust monitoring mechanisms, key performance indicators, and periodic review processes to track progress and make adjustments.</p>
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
        <!--                                <h3 class="h2 mb-4">State University Transformation</h3>-->
        <!--                                <p class="mb-4">A comprehensive 5-year strategic plan that transformed a regional state university, improving its academic reputation, research output, and financial sustainability.</p>-->
        <!--                                <div class="d-flex align-items-center">-->
        <!--                                    <div class="flex-shrink-0 bg-white rounded-circle d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">-->
        <!--                                        <span class="text-primary fw-bold">SA</span>-->
        <!--                                    </div>-->
        <!--                                    <div class="ms-3 text-white">-->
        <!--                                        <h4 class="h6 mb-0">Prof. Sunita Agarwal</h4>-->
        <!--                                        <p class="small mb-0">Pro-Vice Chancellor, State University</p>-->
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
        <!--                                        <span>30% increase in research publications and grant funding</span>-->
        <!--                                    </li>-->
        <!--                                    <li class="mb-3 d-flex">-->
        <!--                                        <i class="fas fa-check-circle text-success mt-1 me-3"></i>-->
        <!--                                        <span>Development of 12 new industry-aligned programs</span>-->
        <!--                                    </li>-->
        <!--                                    <li class="mb-3 d-flex">-->
        <!--                                        <i class="fas fa-check-circle text-success mt-1 me-3"></i>-->
        <!--                                        <span>15% improvement in student enrollment and retention</span>-->
        <!--                                    </li>-->
        <!--                                    <li class="mb-3 d-flex">-->
        <!--                                        <i class="fas fa-check-circle text-success mt-1 me-3"></i>-->
        <!--                                        <span>Establishment of 8 industry-academic partnerships</span>-->
        <!--                                    </li>-->
        <!--                                </ul>-->
        <!--                                <div class="fst-italic text-muted mb-0">-->
        <!--                                    <p>"The strategic planning support from Iprgneix has been instrumental in positioning our university for the future. Their data-driven approach and deep understanding of higher education trends helped us develop a robust five-year plan that has already yielded significant improvements in research output and student outcomes."</p>-->
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
                    <p>Common questions about our strategic planning services for higher education institutions.</p>
                </div>
                
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="accordion" id="strategicPlanningFAQ" data-aos="fade-up">
                            <div class="accordion-item border-0 mb-3 shadow-sm">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What is the typical timeframe for developing a strategic plan?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#strategicPlanningFAQ">
                                    <div class="accordion-body">
                                        <p>The timeframe for developing a comprehensive strategic plan typically ranges from 3 to 6 months, depending on the institution's size, complexity, and the scope of the planning exercise. Our process includes:</p>
                                        <ul>
                                            <li>1-2 months for institutional assessment and environmental scanning</li>
                                            <li>1 month for vision, mission, and goal setting with stakeholder engagement</li>
                                            <li>1-2 months for strategy formulation across different operational areas</li>
                                            <li>1 month for implementation framework development and finalization</li>
                                        </ul>
                                        <p>We work closely with your institution to develop a realistic timeline that ensures thorough planning without unnecessary delays.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 mb-3 shadow-sm">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        How do you ensure stakeholder engagement in the planning process?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#strategicPlanningFAQ">
                                    <div class="accordion-body">
                                        <p>We believe that effective strategic planning requires meaningful engagement from all key stakeholders. Our approach includes:</p>
                                        <ul>
                                            <li><strong>Inclusive Planning Committee:</strong> Formation of a representative planning committee that includes administration, faculty, staff, students, alumni, and external stakeholders</li>
                                            <li><strong>Structured Consultation:</strong> Focus groups, surveys, and town halls to gather diverse perspectives</li>
                                            <li><strong>Transparent Process:</strong> Regular communication about the planning process, findings, and emerging strategies</li>
                                            <li><strong>Iterative Feedback:</strong> Multiple opportunities for stakeholders to review and provide input on draft plans</li>
                                            <li><strong>Implementation Involvement:</strong> Engaging stakeholders in implementation planning to build ownership</li>
                                        </ul>
                                        <p>This comprehensive approach ensures that the resulting strategic plan reflects collective wisdom and enjoys broad-based support across the institution.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 mb-3 shadow-sm">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        How do you handle strategy implementation support?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#strategicPlanningFAQ">
                                    <div class="accordion-body">
                                        <p>We recognize that even the best strategic plans face implementation challenges. Our implementation support includes:</p>
                                        <ul>
                                            <li><strong>Detailed Implementation Frameworks:</strong> Breaking down strategies into specific actions, timelines, responsibilities, and resource requirements</li>
                                            <li><strong>Capacity Building:</strong> Training institutional leaders and staff on implementation methodologies and project management</li>
                                            <li><strong>Monitoring Systems:</strong> Establishing key performance indicators (KPIs) and data collection mechanisms to track progress</li>
                                            <li><strong>Regular Reviews:</strong> Facilitating periodic review sessions to assess progress, identify obstacles, and make necessary adjustments</li>
                                            <li><strong>Implementation Coaching:</strong> Providing ongoing support to implementation teams to troubleshoot challenges</li>
                                        </ul>
                                        <p>This comprehensive support ensures that your strategic plan moves from document to action, delivering tangible benefits to your institution.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 shadow-sm">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        How do you align strategic planning with accreditation requirements?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#strategicPlanningFAQ">
                                    <div class="accordion-body">
                                        <p>Aligning strategic planning with accreditation requirements is a key focus of our approach. We ensure this alignment through:</p>
                                        <ul>
                                            <li><strong>Accreditation Standards Integration:</strong> Incorporating relevant NAAC, NBA, or other accreditation standards into the planning framework</li>
                                            <li><strong>Evidence-Based Planning:</strong> Developing strategies that generate the necessary evidence for accreditation processes</li>
                                            <li><strong>Quality Assurance Mechanisms:</strong> Building internal quality assurance mechanisms that support both strategic goals and accreditation requirements</li>
                                            <li><strong>Documentation Alignment:</strong> Ensuring that strategic planning documentation supports accreditation self-study reports</li>
                                            <li><strong>Continuous Improvement Focus:</strong> Emphasizing the continuous improvement cycle that is central to both strategic planning and accreditation</li>
                                        </ul>
                                        <p>This integrated approach ensures that your strategic planning efforts simultaneously advance institutional goals and strengthen your position for successful accreditation outcomes.</p>
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
                        <h2 class="display-5 fw-bold mb-4">Ready to Chart Your Institution's Future?</h2>
                        <p class="lead mb-5">Contact our strategic planning experts today to discuss how we can help your institution develop a roadmap for sustainable success.</p>
                        <a href="{{route('other.pages.contact.us')}}" class="btn btn-light btn-lg px-5">Contact Us Now</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection