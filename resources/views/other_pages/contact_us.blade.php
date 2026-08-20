@extends('layout.main')
@section('content')

<main>
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-4 fw-bold mb-3">Contact Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-white">Home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Information Section -->
    <section class="py-5">
        <div class="container py-4">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="mb-5">
                        <span class="badge bg-secondary-light text-secondary px-3 py-2 rounded-pill">Get In Touch</span>
                        <h2 class="display-5 fw-bold mt-3 mb-4">Let's Discuss Your Institution's Needs</h2>
                        <p class="lead mb-5">Schedule a consultation with our experts to explore how we can help your institution achieve its goals through our specialized consultancy services.</p>
                    </div>

                    <div class="mb-5">
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0 bg-primary-light rounded-circle d-flex align-items-center justify-content-center me-4" style="width: 60px; height: 60px;">
                                <i class="fas fa-map-marker-alt text-primary fs-4"></i>
                            </div>
                            <div>
                                <h3 class="h4 mb-2">India Location</h3>
                                <p class="text-muted mb-0">1, Water Works Compound, Pili Kothi, Civil Lines, Moradabad,Uttar Pradesh, India - 244001</p>
                            </div>
                        </div>

                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0 bg-primary-light rounded-circle d-flex align-items-center justify-content-center me-4" style="width: 60px; height: 60px;">
                                <i class="fas fa-map-marker-alt text-primary fs-4"></i>
                            </div>
                            <div>
                                <h3 class="h4 mb-2">London Location</h3>
                                <p class="text-muted mb-0">344-354 Gray's Inn Road, London, Greater London, United Kingdom WC1X 8BP</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="flex-shrink-0 bg-primary-light rounded-circle d-flex align-items-center justify-content-center me-4" style="width: 60px; height: 60px;">
                                <i class="fas fa-envelope text-primary fs-4"></i>
                            </div>
                            <div>
                                <h3 class="h4 mb-2">Email Us</h3>
                                <p class="text-muted mb-0">General Inquiries: <a href="mailto:info@iprgenix.com" class="text-primary">info@iprgenix.com</a></p>

                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0 bg-primary-light rounded-circle d-flex align-items-center justify-content-center me-4" style="width: 60px; height: 60px;">
                                <i class="fas fa-phone-alt text-primary fs-4"></i>
                            </div>
                            <div>
                                <h3 class="h4 mb-2">Call Us</h3>
                                <a href="tel:+917302256565" class="text-primary">India : +91 7302256565</a>&nbsp;&nbsp;<a href="tel:+917302256566" class="text-primary">+91 7302256566</a><br />
                                <a href="tel:+442045347608" class="text-primary">London : +442045347608</a>
                            </div>
                        </div>
                    </div>

                    <div class="mb-5">
                        <h3 class="h4 mb-3">Working Hours</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="text-muted mb-1"><strong>Monday - Friday:</strong></p>
                                <p class="text-muted mb-3">9:00 AM - 6:00 PM</p>
                            </div>
                            <div class="col-md-6">
                                <p class="text-muted mb-1"><strong>Saturday:</strong></p>
                                <p class="text-muted mb-0">9:00 AM - 2:00 PM</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="h4 mb-3">Connect With Us</h3>
                        <div class="d-flex gap-3">
                            <a href="https://www.linkedin.com/company/iprgenix/posts/?feedView=all" class="social-icon bg-primary-light rounded-circle d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
                                <i class="fab fa-linkedin-in text-primary fs-5"></i>
                            </a>
                            <!--<a href="#" class="social-icon bg-primary-light rounded-circle d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">-->
                            <!--    <i class="fab fa-twitter text-primary fs-5"></i>-->
                            <!--</a>-->
                            <!--<a href="#" class="social-icon bg-primary-light rounded-circle d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">-->
                            <!--    <i class="fab fa-facebook-f text-primary fs-5"></i>-->
                            <!--</a>-->
                            <!--<a href="#" class="social-icon bg-primary-light rounded-circle d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">-->
                            <!--    <i class="fab fa-instagram text-primary fs-5"></i>-->
                            <!--</a>-->
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card border-0 shadow-lg">
                        <div class="card-body p-4 p-lg-5">
                            <h3 class="h3 mb-4">Request a Consultation</h3>
                            <form id="contactForm">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="fullName" placeholder="Your Name" required>
                                            <label for="fullName">Full Name*</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" id="emailAddress" placeholder="Your Email" required>
                                            <label for="emailAddress">Email Address*</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="organization" placeholder="Your Institution" required>
                                    <label for="organization">Institution/Organization*</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="tel" class="form-control" id="phoneNumber" placeholder="Your Phone Number">
                                    <label for="phoneNumber">Phone Number</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="serviceInterest" aria-label="Service of Interest" required>
                                        <option value="" selected disabled>Select a service</option>
                                        <option value="institution-building">Institution Building & Development</option>
                                        <option value="strategic-planning">Strategic Planning for HEIs</option>
                                        <option value="nep-implementation">NEP 2020 Implementation</option>
                                        <option value="curriculum-design">Curriculum Design & Development</option>
                                        <option value="quality-assurance">Quality Assurance</option>
                                        <option value="accreditations">Accreditations & Ranking</option>
                                        <option value="training">Training & Faculty Development</option>
                                        <option value="other">Other Services</option>
                                    </select>
                                    <label for="serviceInterest">Service of Interest*</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" id="message" placeholder="Your message" style="height: 150px" required></textarea>
                                    <label for="message">Your Message*</label>
                                </div>
                                <div class="form-check mb-4">
                                    <input class="form-check-input" type="checkbox" value="" id="privacyPolicy" required>
                                    <label class="form-check-label small" for="privacyPolicy">
                                        I agree to the <a href="#" class="text-primary">Privacy Policy</a> and consent to Iprgneix contacting me regarding my inquiry.
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary w-100 py-3">Submit Request</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-5 bg-light">
        <div class="container py-4">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Our Location</h2>
                <p class="lead mx-auto" style="max-width: 700px;">Visit our office in Moradabad, conveniently located near major transportation hubs.</p>
            </div>

            <div class="card border-0 shadow-lg overflow-hidden">
                <div class="ratio ratio-21x9">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3514.599623812886!2d78.75121367526!3d28.820815175713303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390afb810911767b%3A0x1f247852a4205c14!2sIPRGENIX%20Consultancy%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1727853965561!5m2!1sen!2sin"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-5">
        <div class="container py-4">
            <div class="text-center mb-5">
                <span class="badge bg-secondary-light text-secondary px-3 py-2 rounded-pill">FAQ</span>
                <h2 class="display-5 fw-bold mt-3 mb-4">Frequently Asked Questions</h2>
                <p class="lead mx-auto" style="max-width: 700px;">Find answers to common questions about our consultancy services.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="accordion" id="contactFAQ">
                        <div class="accordion-item border-0 mb-3 shadow-sm">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What is the typical process for engaging with Iprgneix consultancy services?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#contactFAQ">
                                <div class="accordion-body">
                                    <p>Our engagement process typically follows these steps:</p>
                                    <ol>
                                        <li><strong>Initial Consultation:</strong> We begin with a complimentary consultation to understand your institution's needs and challenges.</li>
                                        <li><strong>Proposal Development:</strong> Based on the consultation, we develop a customized proposal outlining our approach, deliverables, timeline, and investment.</li>
                                        <li><strong>Engagement Planning:</strong> Once the proposal is accepted, we work with you to develop a detailed project plan.</li>
                                        <li><strong>Implementation:</strong> Our expert consultants work closely with your team to implement the agreed-upon services.</li>
                                        <li><strong>Review & Support:</strong> We conduct regular reviews and provide ongoing support to ensure successful outcomes.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 mb-3 shadow-sm">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How long do consultancy projects typically take?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#contactFAQ">
                                <div class="accordion-body">
                                    <p>The duration of our consultancy projects varies depending on the scope and complexity of the engagement:</p>
                                    <ul>
                                        <li><strong>Strategic Planning:</strong> Typically 3-6 months</li>
                                        <li><strong>Curriculum Development:</strong> 2-4 months per program</li>
                                        <li><strong>NEP Implementation:</strong> 6-12 months</li>
                                        <li><strong>Accreditation Preparation:</strong> 6-12 months</li>
                                        <li><strong>Institution Building:</strong> 12-24 months</li>
                                    </ul>
                                    <p>We work with your institution to develop a timeline that aligns with your priorities and schedule.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 mb-3 shadow-sm">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Do you offer remote consultancy services or only in-person?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#contactFAQ">
                                <div class="accordion-body">
                                    <p>We offer both in-person and remote consultancy services based on your institution's needs and preferences. Our hybrid model typically includes:</p>
                                    <ul>
                                        <li><strong>Initial Assessment:</strong> In-person visits to understand your institution's context and requirements</li>
                                        <li><strong>Regular Consultations:</strong> Mix of in-person and virtual meetings based on project needs</li>
                                        <li><strong>Document Development:</strong> Remote collaboration with periodic reviews</li>
                                        <li><strong>Training & Workshops:</strong> Can be conducted both in-person and virtually</li>
                                    </ul>
                                    <p>This approach ensures effective service delivery while optimizing time and resources.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 mb-3 shadow-sm">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    What makes Iprgneix different from other consultancies?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#contactFAQ">
                                <div class="accordion-body">
                                    <p>Iprgneix stands out through our:</p>
                                    <ul>
                                        <li><strong>Academic Leadership Experience:</strong> Our consultants include former vice-chancellors, deans, and senior administrators who understand higher education from the inside.</li>
                                        <li><strong>Comprehensive Solutions:</strong> We offer end-to-end services covering all aspects of institutional development and excellence.</li>
                                        <li><strong>Implementation Support:</strong> We don't just provide recommendations but work alongside you through implementation.</li>
                                        <li><strong>Research-Backed Approaches:</strong> Our methodologies combine proven best practices with the latest educational research.</li>
                                        <li><strong>Customized Solutions:</strong> We recognize that each institution is unique and tailor our approaches accordingly.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 shadow-sm">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    What information should I prepare for the initial consultation?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#contactFAQ">
                                <div class="accordion-body">
                                    <p>To make the most of your initial consultation, it's helpful to prepare:</p>
                                    <ul>
                                        <li><strong>Institutional Overview:</strong> Basic information about your institution, including programs offered, student enrollment, and faculty strength</li>
                                        <li><strong>Specific Challenges:</strong> Key areas where you're seeking consultancy support</li>
                                        <li><strong>Current Initiatives:</strong> Any ongoing projects or initiatives related to the consultancy area</li>
                                        <li><strong>Strategic Goals:</strong> Your institution's short-term and long-term objectives</li>
                                        <li><strong>Timeline Considerations:</strong> Any specific deadlines or time constraints</li>
                                    </ul>
                                    <p>Don't worry if you don't have all this information ready—our initial consultation is designed to help identify your needs.</p>
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
                    <h2 class="display-5 fw-bold mb-4">Ready to Transform Your Institution?</h2>
                    <p class="lead mb-5">Our team of experts is ready to help you navigate the complexities of higher education and achieve excellence.</p>
                    <div class="d-flex flex-column flex-sm-row justify-content-center gap-3">
                        <a href="tel:+917302256565" class="btn btn-light btn-lg">
                            <i class="fas fa-phone-alt me-2"></i> Call Us Now
                        </a>
                        <a href="mailto:info@iprgneix.com" class="btn btn-outline-light btn-lg">
                            <i class="fas fa-envelope me-2"></i> Email Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection