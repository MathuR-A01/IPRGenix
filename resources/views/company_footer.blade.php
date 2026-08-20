  <!-- Modern Footer -->
    <footer class="modern-footer">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <a href="index.html" class="footer-logo d-inline-block">
                        <img src="{{asset('/assets/images/footer_ipr.png')}}" class="img-fluid" alt="Iprgneix Logo" height="50">
                    </a>
                    <p class="footer-about" style="text-align:justify;">By integrating Quality Assurance, IPR (for institutions and start-ups), and Legal Services under one umbrella, IPRGENIX Consultancy Pvt. Ltd. offers comprehensive solutions that are globally credible, sector-specific, and impact-driven.</p>
                    <div class="social-icons mb-4">
                        <a href="https://www.linkedin.com/company/iprgenix/posts/?feedView=all" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                  
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="footer-heading">Our Services</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('services.services.institution.building') }}">Institution Building</a></li>
                        <li><a href="{{ route('services.services.strategic.planning') }}">Strategic Planning</a></li>
                        <li><a href="{{ route('services.services.nep.implementation') }}">NEP 2020 Implementation</a></li>
                        <li><a href="{{ route('services.services.curriculum.design') }}">Curriculum Design</a></li>
                        <li><a href="{{ route('services.services.quality.assurance') }}">Quality Assurance</a></li>
                        <li><a href="{{ route('services.services.accreditations') }}">Accreditations & Ranking</a></li>
                        <li><a href="{{ route('services.services.ipr') }}">Intellectual Property Rights</a></li>
                        <li><a href="{{ route('services.services.legal.advisory') }}">Legal Advisory & Compliance</a></li>
                        
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="footer-heading">Quick Links</h4>
                    <ul class="footer-links">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="{{ route('other.pages.about.us') }}">About Us</a></li>
                        <li><a href="{{ route('other.pages.memberships') }}">Membership / Recognition</a></li>
                        <li><a href="{{ route('other.pages.contact.us') }}">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="footer-heading">Contact Information</h4>
                    <ul class="contact-info">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span>01, Water Works Compound, Civil Lines, Moradabad, Uttar Pradesh - 244 001, India</span>
                        </li>
                             <li>
                            <i class="fas fa-phone-alt"></i>
                            <span><a href="tel:+919876543210">+91-73022-56565</a></span>
                        </li>
                        <li>
                             <i class="fas fa-phone-alt"></i>
                             <span><a href="tel:+91-73022-56566">+91-73022-56566</a></span>
                        </li>
                            <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span>344-354 Gray's Inn Road, London, Greater London, United Kingdom WC1X 8BP</span>
                        </li>
                        
                            <li>
                             <i class="fas fa-phone-alt"></i>
                             <span><a href="tel:+442045347608">+442045347608</a></span>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <span><a href="mailto:info@iprgneix.com">info@iprgenix.com</a></span>
                        </li>
                   
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p class="copyright">&copy; <script>document.write(new Date().getFullYear())</script> Iprgneix Consultancy. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- AOS Animation Library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    
    <!-- Custom JavaScript -->

    <script src="{{asset('/assets/js/script.js')}}"></script>
    
    <!-- AOS Init -->
    <script>
        // Initialize AOS animations
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true
            });
        });
    </script>
</body>
</html>
