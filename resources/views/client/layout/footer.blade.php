<footer class="footer bg-color pt-5 pb-4" data-bg-color="#f4f8fa">
    <div class="container">
        <div class="row mb-4">
            <!-- Company Info -->
            <div class="col-md-4 mb-4 mb-md-0">
                <div class="footer-widget">
                    <figure class="footer-logo mb-3">
                        <img src="/client/img/logo/logo.png" alt="Logo">
                    </figure>
                    <div class="address-widget">
                        <address>1203 Town Center Drive #L 335458 USA</address>
                        <a href="tel:+84112345678">+841 123 456 78</a>
                        <a href="mailto:info@company.com">info@company.com</a>
                    </div>
                </div>
            </div>
            
            <!-- Navigation -->
            <div class="col-md-4 mb-4 mb-md-0">
                <div class="footer-widget">
                    <h3 class="widget-title mb-3">Quick Links</h3>
                    <ul class="footer-menu">
                        <li>
                            <a href="{{ route('home') }}">
                                <i class="fa fa-angle-right"></i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('shop') }}">
                                <i class="fa fa-angle-right"></i>
                                <span>Shop</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}">
                                <i class="fa fa-angle-right"></i>
                                <span>Contact Us</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Social Links -->
            <div class="col-md-4">
                <div class="footer-widget">
                    <h3 class="widget-title mb-3">Connect With Us</h3>
                    <div class="social">
                        <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer" class="social__link">
                            <i class="fa fa-facebook"></i>
                            <span class="sr-only">Facebook</span>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer" class="social__link">
                            <i class="fa fa-instagram"></i>
                            <span class="sr-only">Instagram</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Copyright -->
        <div class="row">
            <div class="col-12 text-center">
                <p class="copyright-text">&copy; {{ date('Y') }} Marvenus. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>