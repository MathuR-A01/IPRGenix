@extends('layout.main')
@section('content')
    <main>
        <!-- Page Header / Banner -->
        <section class="page-header bg-primary text-white py-5">
            <div class="container text-center">
                <h1 class="display-4 fw-bold mb-3">Intellectual Property (IPR) Services</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-white">Services</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">IPR Services</li>
                    </ol>
                </nav>
            </div>
        </section>

        <!-- Introduction & Overview -->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row align-items-center mb-5">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                        <h2 class="mb-4">Empowering Innovation through IPR</h2>
                        <p>Our comprehensive IPR services help academic institutions, start-ups, and corporates protect,
                            manage, and monetize their intellectual assets effectively. We provide tailored solutions to
                            foster innovation, ensure legal compliance, and maximize the value of your IP portfolio.</p>
                        <a href="contact.php" class="btn btn-primary btn-lg mt-3">Get a Consultation</a>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                        <img src="{{ asset('/assets/images/ipr.jpg') }}" alt="IPR Services"
                            class="img-fluid rounded shadow" />
                    </div>
                </div>
            </div>
        </section>

        <!-- IPR Services for Institutions -->
        <section class="py-5">
            <div class="container">
                <h2 class="text-center mb-4" data-aos="fade-up">IPR Services for Academic & Research Institutions</h2>
                <div class="row g-4">
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card h-100 shadow-sm border-0 p-4">
                            <h4 class="mb-3">IPR Awareness & Training</h4>
                            <p>Workshops, seminars, and capacity-building programs tailored for faculty, researchers, and
                                students to foster IP literacy and innovation culture.</p>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="card h-100 shadow-sm border-0 p-4">
                            <h4 class="mb-3">Institutional IPR Policies</h4>
                            <p>Designing and implementing IP policies that promote innovation, clarify ownership, and
                                facilitate revenue sharing.</p>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="card h-100 shadow-sm border-0 p-4">
                            <h4 class="mb-3">Patent Drafting & Filing</h4>
                            <p>Support for drafting, filing, and prosecuting patents aligned with research outcomes,
                                ensuring legal robustness and strategic management.</p>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="card h-100 shadow-sm border-0 p-4">
                            <h4 class="mb-3">Technology Transfer & Licensing</h4>
                            <p>Advisory services to facilitate research commercialization through licensing, partnerships,
                                and industry collaborations.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- IPR Services for Start-ups & Entrepreneurs -->
        <section class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-4" data-aos="fade-up">IPR Services for Start-ups & Entrepreneurs</h2>
                <div class="row g-4">
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card h-100 shadow-sm border-0 p-4">
                            <h4 class="mb-3">IPR Strategy & Portfolio Management</h4>
                            <p>Designing IP strategies aligned with business goals, managing portfolios, and maximizing IP
                                value.</p>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="card h-100 shadow-sm border-0 p-4">
                            <h4 class="mb-3">Patent & Trademark Filing</h4>
                            <p>End-to-end support for filing patents, trademarks, and copyrights, including international
                                filings.</p>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="card h-100 shadow-sm border-0 p-4">
                            <h4 class="mb-3">Funding & Grants</h4>
                            <p>Advisory to access government schemes, subsidies, and international programs that support IP
                                protection.</p>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="card h-100 shadow-sm border-0 p-4">
                            <h4 class="mb-3">Dispute & Infringement Management</h4>
                            <p>Support in handling IP disputes, infringement cases, and safeguarding your rights in
                                competitive markets.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Grant & Funding Schemes Table -->
        <section class="py-5">
            <div class="container">
                <h2 class="text-center mb-4" data-aos="fade-up">Relevant Grant & Funding Schemes for Foreign Filings</h2>
                <p>IPRGENIX helps institutions and start-ups leverage various national and international grant schemes to reduce the financial burden of foreign filings. Below is a matrix of key schemes:</p>
                <div class="table-responsive" data-aos="fade-up" data-aos-delay="100">
                    <table class="table table-bordered table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>Grant / Scheme</th>
                                <th>Eligible Entities</th>
                                <th>Benefits / Support Provided</th>
                                <th>Applicability / Notes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>DSIR (Dept. of Scientific &amp; Industrial Research)</td>
                                <td>Public/private research institutions, R&amp;D units, universities</td>
                                <td>Financial support / reimbursement toward patent filing / foreign patent costs</td>
                                <td>Requires proposals, evaluation, tied to R&amp;D outcomes</td>
                            </tr>
                            <tr>
                                <td>TDB (Technology Development Board)</td>
                                <td>Technology-based ventures, academic spin-offs</td>
                                <td>Grants / low-interest loans for commercialization and IP-related costs</td>
                                <td>Support tied to technology readiness and commercial potential</td>
                            </tr>
                            <tr>
                                <td>WIPO Fee Reduction / Assistance Schemes</td>
                                <td>Developing-country applicants (institutions, start-ups)</td>
                                <td>Reduced fees for PCT applications, priority assistance</td>
                                <td>Dependent on eligibility and scheme updates</td>
                            </tr>
                            <tr>
                                <td>EU Horizon / Intl. Research Programs</td>
                                <td>Universities, research consortia, cross-national partners</td>
                                <td>Funding for international IP protection, collaborative R&amp;D</td>
                                <td>Requires international partners and compliance with EU rules</td>
                            </tr>
                            <tr>
                                <td>ASEAN / Regional Innovation Grants</td>
                                <td>Eligible institutions and start-ups</td>
                                <td>Subsidies / co-funding for IP protection in regional markets</td>
                                <td>Depends on regional program cycles</td>
                            </tr>
                            <tr>
                                <td>Start-up India IPR Support Scheme</td>
                                <td>Recognized start-ups in India</td>
                                <td>Reimbursement of patent filing &amp; prosecution costs</td>
                                <td>Must register under Start-up India, time-bound applications</td>
                            </tr>
                            <tr>
                                <td>MSME Patent Reimbursement Scheme</td>
                                <td>Registered MSMEs &amp; micro enterprises</td>
                                <td>Partial reimbursement of patent filing costs</td>
                                <td>Subject to scheme-specific caps and timelines</td>
                            </tr>
                            <tr>
                                <td>State Innovation &amp; Incubation Grants</td>
                                <td>State universities, incubators, start-ups</td>
                                <td>Grants/subsidies for IP filings, incubation, innovation projects</td>
                                <td>Varies by state government initiatives</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>
@endsection
