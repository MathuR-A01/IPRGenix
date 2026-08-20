@extends('layout.main')
@section('content')
    <main>
        <section class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="display-4 fw-bold mb-3">Memberships & Recognitions</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
                                <li class="breadcrumb-item active text-white" aria-current="page">Memberships & Recognitions
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <!-- Introduction & Overview -->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row align-items-center mb-5">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                        <h2 class="mb-4">Memberships / Registrations / Certifications / Licenses – IPRGENIX</h2>
                        <p>IPRGENIX operates as a legally compliant and professionally recognized consultancy firm. Below is
                            a consolidated list of our key statutory registrations, memberships, certifications, and vendor
                            enrollments (update placeholders with actual details)</p>
                        <a href="contact.php" class="btn btn-primary btn-lg mt-3">Get a Consultation</a>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                        <img src="{{ asset('/assets/images/ipr.jpg') }}" alt="IPR Services"
                            class="img-fluid rounded shadow" />
                    </div>
                </div>

                <div class="row g-4">
                    <!-- Area 1: Multidisciplinary Education -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="modern-card h-100">
                            <div class="card-body p-4">
                                <h3 class="h4 card-title mb-3">Corporate Registrations & Licenses</h3>
                                <p class="card-text mb-3 fw-bold">Incorporated under the Companies Act, 2013 as IPRGENIX Consultancy Pvt. Ltd.: [CIN: U85500UP2023PTC180112)</p>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2 d-flex align-items-center">
                                        <span>Registered office located in Moradabad, Uttar Pradesh, India.</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <span><b>Legal service scope:</b> IPR, Quality Assurance, Legal Advisory, Curriculum & Policy Consulting.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Area 2: Academic Credit System -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="modern-card h-100">
                            <div class="card-body p-4">
                                <h3 class="h4 card-title mb-3">Statutory & Tax Registrations</h3>
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2 d-flex align-items-center">
                                        <span><b>GST Registration (GSTIN):</b><br> 09AAHCI0770M1Z7</span>
                                    </li>
                                    <li class="mb-2 d-flex align-items-center">
                                        <span><b>Permanent Account Number (PAN):</b><br> AAHCI0770M</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <span><b>MSME/Udyam Registration (Udyam No.):</b> <br>UDYAM-UP-59-0030173</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Area 3: Holistic & Skill-Based Education -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="modern-card h-100">
                            <div class="card-body p-4">
                                <h3 class="h4 card-title mb-3">International Vendor Registrations</h3>
                                <p><span><b>United Nations Global Marketplace (UNGM)</b><br> – Registered Vendor ID: UNGM #1143097, Status: Registered Basic.</span></p>
                                  
                            </div>
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
                        <p class="lead mb-5">Contact our team of experts today to discuss how we can help your institution,
                            start-up, or corporate entity excel in a competitive global landscape.</p>
                        <a href="{{ route('other.pages.contact.us') }}" class="btn btn-light btn-lg px-5">Contact Us
                            Now</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
