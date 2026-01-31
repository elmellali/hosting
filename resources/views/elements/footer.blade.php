<footer class="rts-footer site-footer-one section__padding body-bg-2">
    <div class="container">
        <div class="row">
            <!-- widget -->
            <div class="col-lg-4 col-md-6 col-sm-6 rts-footer__widget--column">
                <div class="rts-footer__widget footer__widget w-280">
                    <a href="{{ route('index') }}" aria-label="main page link" class="footer__logo">
                        <img src="{{ asset('assets/images/logo/takeitcloudy-logo.png') }}" alt="TakeItCloudy"
                            style="max-height: 50px;">
                    </a>
                    <p class="brand-desc">3831 Montgomery Blvd NE APT 433 <br> Albuquerque, NM 87109</p>
                    <div class="contact-wrapper">
                        <ul>
                            <li>
                                <div class="icon"><i class="fa-regular fa-phone"></i></div>
                                <a href="call-to:+15053901602">+15053901602</a>
                            </li>
                            <li>
                                <div class="icon"><i class="fa-sharp fa-regular fa-envelope"></i></div>
                                <a href="mailto:contact@takeitcloudy.com">contact@takeitcloudy.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="separator site-default-border"></div>
                    <div class="payment__method">
                        <ul>
                            <li><img src="{{ asset('assets/images/payment/visa.svg') }}" alt=""></li>
                            <li><img src="{{ asset('assets/images/payment/master-card.svg') }}" alt=""></li>
                            <li><img src="{{ asset('assets/images/payment/paypal.svg') }}" alt=""></li>
                            <li><img src="{{ asset('assets/images/payment/american-express.svg') }}" alt=""></li>
                            <li><img src="{{ asset('assets/images/payment/wise.svg') }}" alt=""></li>
                            <li><img src="{{ asset('assets/images/payment/skrill.svg') }}" alt=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- widget end -->
            <!-- widget -->
            <div class="col-lg-2 col-md-3 col-sm-6 rts-footer__widget--column">
                <div class="footer-widget-inner">
                    <div class="rts-footer__widget footer__widget extra-padding">
                        <h5 class="widget-title">Feature</h5>
                        <div class="rts-footer__widget--menu ">
                            <ul>
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('blog') }}">News Feed</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                                <li><a href="{{ route('signup') }}">Sign Up</a></li>
                                <li><a href="{{ route('signin') }}">Sign In</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="rts-footer__widget footer__widget extra-padding">
                        <h5 class="widget-title">Help</h5>
                        <div class="rts-footer__widget--menu ">
                            <ul>
                                <li><a href="{{ route('pricing') }}">Pricing</a></li>
                                <li><a href="{{ route('faq') }}">FAQ</a></li>
                                <li><a href="{{ route('support') }}">Support</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                                <li><a href="{{ route('knowledgebase') }}">Knowledgebase</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <!-- widget end -->
            <!-- widget -->
            <div class="col-lg-2 col-md-3 col-sm-6 rts-footer__widget--column">
                <div class="footer-widget-inner">
                    <div class="rts-footer__widget footer__widget extra-padding">
                        <h5 class="widget-title">Hosting</h5>
                        <div class="rts-footer__widget--menu ">
                            <ul>
                                <li><a href="{{ route('sharedHosting') }}">Shared Hosting</a></li>
                                <li><a href="{{ route('resellerHosting') }}">Reseller Hosting</a></li>
                                <li><a href="{{ route('vpsHosting') }}">VPS Hosting</a></li>
                                <li><a href="{{ route('wordpressHosting') }}">WordPress Hosting</a></li>
                                <li><a href="{{ route('cloudHosting') }}">Cloud Hosting</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="rts-footer__widget footer__widget extra-padding">
                        <h5 class="widget-title">Company</h5>
                        <div class="rts-footer__widget--menu ">
                            <ul>
                                <li><a href="{{ route('domainChecker') }}">Domain Checker</a></li>
                                <li><a href="#">WHMCS Template</a>
                                </li>
                                <li><a href="#">Announcement</a>
                                </li>
                                <li><a href="{{ route('sharedHosting') }}">Shared
                                        Hosting</a></li>
                                <li><a href="{{ route('vpsHosting') }}">VPS
                                        Hosting</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- widget end -->
            <!-- widget -->
            <div class="col-lg-4 col-md-6 rts-footer__widget--column">
                <div class="rts-footer__widget footer__widget w-307 ml--auto">
                    <h5 class="widget-title">Join Our Newsletter</h5>
                    <p>We'll send you news and offers.</p>
                    <form action="#" class="newsletter mx-40">
                        <input type="email" class="home-one" name="email" placeholder="Enter mail" required>
                        <span class="icon"><i class="fa-regular fa-envelope-open"></i></span>
                        <button type="submit" aria-label="Submit"><i class="fa-regular fa-arrow-right"></i></button>
                    </form>
                    <div class="social__media">
                        <h5>social media</h5>
                        <div class="social__media--list">
                            <a href="https://www.facebook.com" aria-label="social-link" target="_blank" class="media"><i
                                    class="fa-brands fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com" aria-label="social-link" target="_blank"
                                class="media"><i class="fa-brands fa-instagram"></i></a>
                            <a href="https://www.linkedin.com" aria-label="social-link" target="_blank" class="media"><i
                                    class="fa-brands fa-linkedin"></i></a>
                            <a href="https://www.x.com" aria-label="social-link" target="_blank" class="media"><i
                                    class="fa-brands fa-x-twitter"></i></a>
                            <a href="https://www.behance.com" aria-label="social-link" target="_blank" class="media"><i
                                    class="fa-brands fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- widget end -->
        </div>
    </div>
    <div class="rts__footer__copyright is__common">
        <div class="container">
            <div class="row">
                <div class="footer__copy__wrapper justify-content-center text-center">
                    <p>&copy; 2026 Takeitcloudy. All Rights Reserved.</p>
                    <div class="footer__links mt--10">
                        <a href="{{ route('privacy') }}" class="mx-3">Privacy Policy</a>
                        <a href="{{ route('tos') }}" class="mx-3">Terms and Conditions</a>
                        <a href="{{ route('refund') }}" class="mx-3">Refund Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>