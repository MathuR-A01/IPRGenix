@extends('layout.main')
@section('content')
    <main>
        <!-- Page Header -->
        <section class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="display-4 fw-bold mb-3">Institution Building & Development</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                                <li class="breadcrumb-item"><a href="index.php#services" class="text-white">Services</a>
                                </li>
                                <li class="breadcrumb-item active text-white" aria-current="page">Institution Building</li>
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
                        <a href="{{ route('home') }}"
                            class="d-inline-flex align-items-center text-primary mb-4 text-decoration-none">
                            <i class="fas fa-arrow-left me-2"></i> Back to Home
                        </a>
                        <h2 class="display-5 fw-bold mb-4">Building Excellence in Higher Education</h2>
                        <p class="lead mb-4">Creating and developing successful higher education institutions requires
                            expert planning, strategic vision, and operational excellence. Our institution building and
                            development services provide comprehensive support for establishing new institutions and
                            transforming existing ones to achieve excellence in the competitive education landscape.</p>

                        <div class="mb-5">
                            <h3 class="h4 mb-3">Key Benefits</h3>
                            <ul class="list-unstyled">
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>Comprehensive roadmaps for institutional development and growth</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>Expert guidance for regulatory compliance and approvals</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>Optimized academic and administrative structures</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>Robust governance and management frameworks</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>Sustainable financial and resource planning</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                                    <span>Strategic brand positioning and institutional identity development</span>
                                </li>
                            </ul>
                        </div>

                        <a href="contact.php" class="btn btn-primary btn-lg">Request Institution Building Consultation</a>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                        <div class="rounded-4 overflow-hidden shadow-lg">
                            <img src="{{ asset('assets/images/institution_building_and_developement.jpg') }}"
                                alt="New university campus" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Institution Building Service Areas -->
        <section class="py-5 bg-light">
            <div class="container py-4">
                <div class="section-title text-center mb-5" data-aos="fade-up">
                    <h2>Our Institution Building Services</h2>
                    <p>Comprehensive support for all aspects of institutional development.</p>
                </div>

                <div class="row g-4">
                    <!-- Service Area 1: New Institution Establishment -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="modern-card h-100">
                            <div class="card-body p-4">
                                <div class="card-icon">
                                    <i class="fas fa-building"></i>
                                </div>
                                <h3 class="h4 card-title mb-3">New Institution Establishment</h3>
                                <p class="card-text mb-4">Complete guidance for establishing new colleges, universities, and
                                    educational institutes from concept to operation.</p>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Feasibility studies</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Regulatory approvals</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Infrastructure planning</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Service Area 2: Institutional Transformation -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="modern-card h-100">
                            <div class="card-body p-4">
                                <div class="card-icon">
                                    <i class="fas fa-sync-alt"></i>
                                </div>
                                <h3 class="h4 card-title mb-3">Institutional Transformation</h3>
                                <p class="card-text mb-4">Strategic interventions to revitalize and transform existing
                                    institutions to meet contemporary challenges.</p>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Comprehensive assessment</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Transformation roadmaps</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Change management</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Service Area 3: Governance & Management -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="modern-card h-100">
                            <div class="card-body p-4">
                                <div class="card-icon">
                                    <i class="fas fa-sitemap"></i>
                                </div>
                                <h3 class="h4 card-title mb-3">Governance & Management</h3>
                                <p class="card-text mb-4">Development of effective governance structures and management
                                    systems for institutional success.</p>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Governance frameworks</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Organizational structure</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Policy development</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Service Area 4: Academic Excellence -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="modern-card h-100">
                            <div class="card-body p-4">
                                <div class="card-icon">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <h3 class="h4 card-title mb-3">Academic Excellence</h3>
                                <p class="card-text mb-4">Development of academic frameworks, programs, and faculty
                                    excellence initiatives.</p>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Program portfolio design</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Faculty development</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Research enhancement</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Service Area 5: Infrastructure Planning -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="modern-card h-100">
                            <div class="card-body p-4">
                                <div class="card-icon">
                                    <i class="fas fa-hard-hat"></i>
                                </div>
                                <h3 class="h4 card-title mb-3">Infrastructure Planning</h3>
                                <p class="card-text mb-4">Strategic planning for physical and digital infrastructure that
                                    supports institutional vision.</p>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Campus master planning</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Learning environment design</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Technology infrastructure</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Service Area 6: Financial Sustainability -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="modern-card h-100">
                            <div class="card-body p-4">
                                <div class="card-icon">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <h3 class="h4 card-title mb-3">Financial Sustainability</h3>
                                <p class="card-text mb-4">Development of financial models and resource planning for
                                    long-term institutional sustainability.</p>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Financial modeling</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Revenue diversification</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="fas fa-caret-right text-primary me-2"></i>
                                        <span>Resource optimization</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Institution Building Process -->
        <section class="py-5">
            <div class="container py-4">
                <div class="section-title text-center mb-5" data-aos="fade-up">
                    <h2>Our Institution Building Process</h2>
                    <p>A systematic approach to developing successful educational institutions.</p>
                </div>

                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <!-- Process Steps -->
                        <div class="position-relative" data-aos="fade-up">
                            <!-- Step 1 -->
                            <div class="row mb-5">
                                <div class="col-md-6 pe-md-5">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 bg-primary rounded-circle d-flex align-items-center justify-content-center"
                                            style="width: 60px; height: 60px;">
                                            <span class="h4 text-white fw-bold mb-0">1</span>
                                        </div>
                                        <div class="ms-4">
                                            <h3 class="h4 fw-bold mb-3">Vision & Mission Development</h3>
                                            <p class="text-muted mb-0">Crafting a compelling institutional vision, mission,
                                                and values that provide direction and purpose for the institution.</p>
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
                                        <div class="flex-shrink-0 bg-primary rounded-circle d-flex align-items-center justify-content-center"
                                            style="width: 60px; height: 60px;">
                                            <span class="h4 text-white fw-bold mb-0">2</span>
                                        </div>
                                        <div class="ms-4">
                                            <h3 class="h4 fw-bold mb-3">Market & Feasibility Analysis</h3>
                                            <p class="text-muted mb-0">Comprehensive analysis of educational needs, market
                                                opportunities, and operational feasibility to ensure sustainable
                                                development.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 3 -->
                            <div class="row mb-5">
                                <div class="col-md-6 pe-md-5">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 bg-primary rounded-circle d-flex align-items-center justify-content-center"
                                            style="width: 60px; height: 60px;">
                                            <span class="h4 text-white fw-bold mb-0">3</span>
                                        </div>
                                        <div class="ms-4">
                                            <h3 class="h4 fw-bold mb-3">Governance & Structure Design</h3>
                                            <p class="text-muted mb-0">Development of effective governance mechanisms,
                                                organizational structures, and leadership frameworks that support
                                                institutional goals.</p>
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
                                        <div class="flex-shrink-0 bg-primary rounded-circle d-flex align-items-center justify-content-center"
                                            style="width: 60px; height: 60px;">
                                            <span class="h4 text-white fw-bold mb-0">4</span>
                                        </div>
                                        <div class="ms-4">
                                            <h3 class="h4 fw-bold mb-3">Academic & Administrative Planning</h3>
                                            <p class="text-muted mb-0">Detailed planning for academic programs,
                                                administrative systems, and operational processes that ensure institutional
                                                effectiveness.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 5 -->
                            <div class="row mb-5">
                                <div class="col-md-6 pe-md-5">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 bg-primary rounded-circle d-flex align-items-center justify-content-center"
                                            style="width: 60px; height: 60px;">
                                            <span class="h4 text-white fw-bold mb-0">5</span>
                                        </div>
                                        <div class="ms-4">
                                            <h3 class="h4 fw-bold mb-3">Resource & Infrastructure Development</h3>
                                            <p class="text-muted mb-0">Strategic planning for physical, digital, and human
                                                resources needed to support institutional vision and operational
                                                requirements.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 d-none d-md-block"></div>
                            </div>

                            <!-- Step 6 -->
                            <div class="row">
                                <div class="col-md-6 d-none d-md-block"></div>
                                <div class="col-md-6 ps-md-5">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 bg-primary rounded-circle d-flex align-items-center justify-content-center"
                                            style="width: 60px; height: 60px;">
                                            <span class="h4 text-white fw-bold mb-0">6</span>
                                        </div>
                                        <div class="ms-4">
                                            <h3 class="h4 fw-bold mb-3">Implementation & Continuous Improvement</h3>
                                            <p class="text-muted mb-0">Systematic execution of plans with ongoing
                                                monitoring, evaluation, and refinement to ensure sustainable institutional
                                                growth.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Vertical Line for Desktop -->
                            <div class="d-none d-md-block position-absolute top-0 start-50 translate-middle-x"
                                style="width: 2px; height: 100%; background-color: #e9ecef;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Case Study -->

        <section class="py-5">
            <div class="container">
                <h2 class="text-center mb-4" data-aos="fade-up">Strategic Roadmap Framework for HEls</h2>
                <div class="table-responsive" data-aos="fade-up" data-aos-delay="100">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th style="padding: 10px;">Phase</th>
                                <th style="padding: 10px;">Focus Areas</th>
                                <th style="padding: 10px;">Expected Outcomes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="padding: 10px; font-weight: bold;">Short-term (1-2 years)</td>
                                <td style="padding: 10px;">Compliance, IQAC, digital adoption</td>
                                <td style="padding: 10px;">Enhanced compliance, documentation, and learning outcomes</td>
                            </tr>
                            <tr>
                                <td style="padding: 10px; font-weight: bold;">Mid-term (3-5 years)</td>
                                <td style="padding: 10px;">Research ecosystem, partnerships, leadership</td>
                                <td style="padding: 10px;">Improved research output, governance, and collaborations</td>
                            </tr>
                            <tr>
                                <td style="padding: 10px; font-weight: bold;">Long-term (5-10 years)</td>
                                <td style="padding: 10px;">Strategic branding, rankings, innovation hubs</td>
                                <td style="padding: 10px;">Sustainability, global visibility, innovation-driven growth</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="container">
                <h2 class="text-center mb-4" data-aos="fade-up">Common QA Challenges vs. IPRGENIX Solutions</h2>
                <div class="table-responsive" data-aos="fade-up" data-aos-delay="100">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th style="padding: 10px; width: 25%;">Challenge/Problem</th>
                                <th style="padding: 10px; width: 40%;">Symptom/Issue</th>
                                <th style="padding: 10px; width: 35%;">Proposed Solution/Support</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="padding: 10px; font-weight: bold;">Difficulty in meeting quality benchmarks</td>
                                <td style="padding: 10px;">Universities and colleges struggling with documentation and
                                    processes</td>
                                <td style="padding: 10px;">End-to-end support in quality audits, gap analysis, and
                                    benchmarking studies</td>
                            </tr>
                            <tr>
                                <td style="padding: 10px; font-weight: bold;">Weak Internal Quality Assurance mechanisms
                                </td>
                                <td style="padding: 10px;">IQACs existing only as formal structures without impact</td>
                                <td style="padding: 10px;">Mentoring, training, and strengthening IQACs for continuous
                                    quality improvement</td>
                            </tr>
                            <tr>
                                <td style="padding: 10px; font-weight: bold;">Outdated curriculum not aligned with global
                                    or industry needs</td>
                                <td style="padding: 10px;">Courses not reflecting skills required by employers or
                                    accreditation bodies</td>
                                <td style="padding: 10px;">Curriculum redesign, OBE integration, and alignment with global
                                    standards</td>
                            </tr>
                            <tr>
                                <td style="padding: 10px; font-weight: bold;">Limited faculty and leadership capacity</td>
                                <td style="padding: 10px;">Faculty lacking training in pedagogy, research, and governance
                                </td>
                                <td style="padding: 10px;">Structured capacity-building and leadership programs tailored to
                                    needs</td>
                            </tr>
                            <tr>
                                <td style="padding: 10px; font-weight: bold;">Low student engagement and employability</td>
                                <td style="padding: 10px;">Graduates lacking career readiness and holistic skills</td>
                                <td style="padding: 10px;">Designing student-centric initiatives, career services, and
                                    employability frameworks</td>
                            </tr>
                            <tr>
                                <td style="padding: 10px; font-weight: bold;">Lack of global recognition and partnerships
                                </td>
                                <td style="padding: 10px;">Institutions limited to national visibility</td>
                                <td style="padding: 10px;">Internationalization strategies including MoUs, joint programs,
                                    and global linkages</td>
                            </tr>
                            <tr>
                                <td style="padding: 10px; font-weight: bold;">Limited access to research and funding
                                    opportunities</td>
                                <td style="padding: 10px;">Institutions underfunded for innovation and research activities
                                </td>
                                <td style="padding: 10px;">Advisory on accessing research grants, funding opportunities,
                                    and industry collaboration</td>
                            </tr>
                            <tr>
                                <td style="padding: 10px; font-weight: bold;">Lack of long-term strategic planning</td>
                                <td style="padding: 10px;">Institutions operating reactively without structured growth
                                    plans</td>
                                <td style="padding: 10px;">Facilitation of 5–10 year strategic planning and institutional
                                    development roadmaps</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="container">
                <h2 class="text-center mb-4" data-aos="fade-up">Relevant Grant & Funding Schemes for Foreign Filings</h2>
                <div class="table-responsive" data-aos="fade-up" data-aos-delay="100">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th style="padding: 10px; width: 15%;">Grant/Scheme</th>
                                <th style="padding: 10px; width: 25%;">Eligible Entities</th>
                                <th style="padding: 10px; width: 30%;">Benefits / Support Provided</th>
                                <th style="padding: 10px; width: 30%;">Applicability/Notes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="padding: 10px; font-weight: bold;">TDB (Technology Development Board)</td>
                                <td style="padding: 10px;">Tech ventures, spin-offs</td>
                                <td style="padding: 10px;">Grants/loans for commercialization and IP</td>
                                <td style="padding: 10px;">Linked to readiness level</td>
                            </tr>
                            <tr>
                                <td style="padding: 10px; font-weight: bold;">WIPO Fee Reduction</td>
                                <td style="padding: 10px;">Developing country applicants</td>
                                <td style="padding: 10px;">Reduced PCT application fees</td>
                                <td style="padding: 10px;">Subject to WIPO rules</td>
                            </tr>
                            <tr>
                                <td style="padding: 10px; font-weight: bold;">Start-up India IPR Support Scheme</td>
                                <td style="padding: 10px;">Recognized start-ups</td>
                                <td style="padding: 10px;">Reimbursement of IP filing costs</td>
                                <td style="padding: 10px;">Time-bound applications</td>
                            </tr>
                            <tr>
                                <td style="padding: 10px; font-weight: bold;">MSME Patent Reimbursement</td>
                                <td style="padding: 10px;">Registered MSMES</td>
                                <td style="padding: 10px;">Reimbursement of patent filing costs</td>
                                <td style="padding: 10px;">Subject to caps/timelines</td>
                            </tr>
                            <tr>
                                <td style="padding: 10px; font-weight: bold;">EU Horizon & Intl. Research Programs</td>
                                <td style="padding: 10px;">Universities, consortia</td>
                                <td style="padding: 10px;">Funding for international IP protection</td>
                                <td style="padding: 10px;">Requires international partners</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="container">
                <h2 class="text-center mb-4" data-aos="fade-up">IPR Services: Common Challenges vs. IPRGENIX Solutions
                </h2>
                <p>IPRGENIX provides end-to-end Intellectual Property Rights (IPR) support tailored to both academic &
                    research institutions and start-ups & entrepreneurs. Below is a practical overview of common IPR
                    challenges and how IPRGENIX delivers effective solutions.</p>
                <div class="table-responsive" data-aos="fade-up" data-aos-delay="100">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th style="padding: 10px; width: 30%;">Common IPR Challenge</th>
                                <th style="padding: 10px; width: 30%;">Context (Academic/Start-ups)</th>
                                <th style="padding: 10px; width: 40%;">IPRGENIX Solution</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="padding: 10px; font-weight: bold;">Low awareness and lack of training on IPR
                                    importance</td>
                                <td style="padding: 10px;">Faculty, researchers, and start-ups unaware of IPR benefits</td>
                                <td style="padding: 10px;">Tailored workshops, training programs, and mentorship for
                                    capacity building</td>
                            </tr>
                            <tr>
                                <td style="padding: 10px; font-weight: bold;">Unclear institutional IPR policies</td>
                                <td style="padding: 10px;">Universities without defined ownership/revenue-sharing rules
                                </td>
                                <td style="padding: 10px;">Designing clear IPR policies, governance structures, and
                                    institutional IPR cells</td>
                            </tr>
                            <tr>
                                <td style="padding: 10px; font-weight: bold;">Difficulty in drafting and filing patents
                                </td>
                                <td style="padding: 10px;">Researchers and start-ups without technical/legal expertise</td>
                                <td style="padding: 10px;">Professional patent drafting, filing, and prosecution support
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px; font-weight: bold;">High costs of foreign filings</td>
                                <td style="padding: 10px;">Start-ups and institutions facing prohibitive costs for
                                    PCT/direct filings</td>
                                <td style="padding: 10px;">Advisory on grants, subsidies (DSIR, TDB, Start-up India, WIPO),
                                    and cost-sharing strategies</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>


        <!-- FAQ Section -->
        <section class="py-5">
            <div class="container py-4">
                <div class="section-title text-center mb-5" data-aos="fade-up">
                    <h2>Frequently Asked Questions</h2>
                    <p>Common questions about institution building and development.</p>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="accordion" id="institutionBuildingFAQ" data-aos="fade-up">
                            <div class="accordion-item border-0 mb-3 shadow-sm">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What is the typical timeline for establishing a new educational institution?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#institutionBuildingFAQ">
                                    <div class="accordion-body">
                                        <p>The timeline for establishing a new educational institution varies based on the
                                            type of institution, regulatory requirements, and scale of operations.
                                            Generally, the process follows these phases:</p>
                                        <ul>
                                            <li><strong>Conceptualization & Planning:</strong> 3-6 months</li>
                                            <li><strong>Regulatory Approvals:</strong> 6-12 months (varies significantly
                                                based on institution type and location)</li>
                                            <li><strong>Infrastructure Development:</strong> 12-24 months</li>
                                            <li><strong>Faculty Recruitment & Development:</strong> 6-12 months</li>
                                            <li><strong>Academic Program Development:</strong> 6-9 months</li>
                                            <li><strong>Operational Setup:</strong> 3-6 months</li>
                                        </ul>
                                        <p>Overall, establishing a fully operational higher education institution typically
                                            requires 2-3 years from initial concept to student enrollment. However, our
                                            phased approach allows for partial operations to begin earlier, with gradual
                                            scaling and expansion.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 mb-3 shadow-sm">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        What are the key regulatory considerations for new institutions?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#institutionBuildingFAQ">
                                    <div class="accordion-body">
                                        <p>Regulatory considerations are critical for establishing legitimate and recognized
                                            educational institutions. Key regulatory aspects include:</p>
                                        <ul>
                                            <li><strong>UGC Approvals:</strong> For universities and colleges, compliance
                                                with University Grants Commission norms and standards</li>
                                            <li><strong>AICTE Recognition:</strong> For technical institutions, approval
                                                from the All India Council for Technical Education</li>
                                            <li><strong>State Government Approvals:</strong> Compliance with state-specific
                                                educational regulations and land use requirements</li>
                                            <li><strong>University Affiliation:</strong> For colleges, affiliation with a
                                                recognized university</li>
                                            <li><strong>Infrastructure Standards:</strong> Meeting prescribed standards for
                                                physical infrastructure, laboratories, libraries, etc.</li>
                                            <li><strong>Faculty Qualifications:</strong> Ensuring faculty meet minimum
                                                qualification requirements per regulatory bodies</li>
                                        </ul>
                                        <p>Our consultants have extensive experience navigating these regulatory frameworks
                                            and can guide institutions through the complex approval processes, ensuring
                                            compliance while minimizing delays and complications.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 mb-3 shadow-sm">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        How do you approach institutional transformation for existing institutions?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#institutionBuildingFAQ">
                                    <div class="accordion-body">
                                        <p>Our approach to institutional transformation is systematic and collaborative:</p>
                                        <ol>
                                            <li><strong>Comprehensive Diagnostic Assessment:</strong> We begin with a
                                                thorough evaluation of all institutional aspects, including academic
                                                programs, governance, operations, culture, and stakeholder perceptions</li>
                                            <li><strong>Vision Alignment:</strong> Working with leadership to refine or
                                                redefine the institutional vision and strategic direction based on
                                                assessment findings</li>
                                            <li><strong>Prioritization:</strong> Identifying high-impact transformation
                                                opportunities and prioritizing them based on feasibility, impact, and
                                                alignment with institutional goals</li>
                                            <li><strong>Transformation Roadmap:</strong> Developing a detailed roadmap with
                                                specific initiatives, timelines, responsibilities, and resource requirements
                                            </li>
                                            <li><strong>Change Management:</strong> Implementing strategies to manage the
                                                human aspects of change, including stakeholder engagement, communication,
                                                and capacity building</li>
                                            <li><strong>Implementation Support:</strong> Providing hands-on support during
                                                implementation, addressing challenges, and making adjustments as needed</li>
                                            <li><strong>Monitoring & Sustainability:</strong> Establishing mechanisms to
                                                track progress, measure outcomes, and ensure sustainable change</li>
                                        </ol>
                                        <p>Our transformation approach balances respect for institutional legacy with the
                                            need for innovation and adaptation to changing educational landscapes. We
                                            recognize that successful transformation must engage stakeholders at all levels
                                            and build internal capacity for ongoing change and improvement.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 shadow-sm">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        What financial considerations are important for institutional sustainability?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#institutionBuildingFAQ">
                                    <div class="accordion-body">
                                        <p>Financial sustainability is critical for long-term institutional success. Key
                                            financial considerations include:</p>
                                        <ul>
                                            <li><strong>Realistic Financial Modeling:</strong> Developing comprehensive
                                                financial models that account for all revenue sources and expenditures over
                                                a 5-10 year horizon</li>
                                            <li><strong>Capital Requirements:</strong> Accurate assessment of initial
                                                capital requirements for land, infrastructure, equipment, and startup
                                                operations</li>
                                            <li><strong>Revenue Diversification:</strong> Identifying multiple revenue
                                                streams beyond tuition fees, such as research grants, consulting services,
                                                continuing education, and industry partnerships</li>
                                            <li><strong>Operational Efficiency:</strong> Designing administrative systems
                                                and operational processes that maximize resource utilization and minimize
                                                waste</li>
                                            <li><strong>Growth Planning:</strong> Strategic approach to enrollment growth,
                                                program expansion, and infrastructure development that aligns with financial
                                                capacity</li>
                                            <li><strong>Reserve Building:</strong> Establishing financial reserves for
                                                contingencies, capital improvements, and strategic initiatives</li>
                                            <li><strong>Financial Governance:</strong> Implementing robust financial
                                                controls, reporting systems, and decision-making processes</li>
                                        </ul>
                                        <p>Our financial planning approach emphasizes both short-term viability and
                                            long-term sustainability, helping institutions build financial resilience while
                                            advancing their educational mission. We help institutions find the right balance
                                            between educational quality, accessibility, and financial health.</p>
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
                        <h2 class="display-5 fw-bold mb-4">Ready to Build or Transform Your Institution?</h2>
                        <p class="lead mb-5">Contact our institution building experts today to discuss how we can help you
                            establish a new institution or transform your existing one for future success.</p>
                        <a href="{{ route('other.pages.contact.us') }}" class="btn btn-light btn-lg px-5">Contact Us
                            Now</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
