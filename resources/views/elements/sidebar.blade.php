<div id="side-bar" class="side-bar header-two">
    <button class="close-icon-menu" aria-label="Close Menu"><i class="fa-sharp fa-thin fa-xmark"></i></button>
    <!-- mobile menu area start -->
    <div class="mobile-menu-main">
        <nav class="nav-main mainmenu-nav mt--30">
            <ul class="mainmenu metismenu" id="mobile-menu-active">
                <li class="has-droupdown">
                    <a href="#" class="main">Home</a>
                    <ul class="submenu mm-collapse">
                        <li><a class="mobile-menu-link" href="{{ route('index') }}">Home One</a></li>
                        <li><a class="mobile-menu-link" href="{{ route('indexTwo') }}">Home Two
                            </a></li>
                        <li><a class="mobile-menu-link" href="{{ route('indexThree') }}">Home Three</a></li>
                        <li><a class="mobile-menu-link" href="{{ route('indexFour') }}">Home Four</a></li>
                        <li><a class="mobile-menu-link" href="{{ route('indexFive') }}">Home Five</a></li>
                        <li><a class="mobile-menu-link" href="{{ route('indexSix') }}">Home Six</a></li>
                    </ul>
                </li>
                <li class="has-droupdown">
                    <a href="#" class="main">Pages</a>
                    <ul class="submenu mm-collapse">
                        <li><a class="mobile-menu-link" href="{{ route('about') }}">About</a></li>
                        <li><a class="mobile-menu-link" href="{{ route('faq') }}">Pricing</a></li>
                        <li><a class="mobile-menu-link" href="#">Sign Up</a></li>
                        {{-- <li><a class="mobile-menu-link" href="{{ route('blog') }}">Blog</a></li> --}}
                        {{-- <li><a class="mobile-menu-link" href="{{ route('blogList') }}">Blog List</a></li> --}}
                        <li><a class="mobile-menu-link" href="{{ route('support') }}">Support</a></li>
                        <li><a class="mobile-menu-link" href="{{ route('pricing') }}">Pricing</a></li>
                        <li><a class="mobile-menu-link" href="{{ route('signin') }}">Sign In</a></li>
                        <li><a class="mobile-menu-link" href="{{ route('knowledgebase') }}">Knowledgebase</a></li>
                        {{-- <li><a class="mobile-menu-link" href="{{ route('blogDetails') }}">Blog Details</a></li>
                        --}}
                        <li><a class="mobile-menu-link" href="{{ route('domainChecker') }}">Domain Checker</a></li>
                        <li><a class="mobile-menu-link" href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </li>
                <li class="has-droupdown">
                    <a href="#" class="main">Hosting</a>
                    <ul class="submenu mm-collapse">
                        <li><a class="mobile-menu-link" href="{{ route('sharedHosting') }}">Shared Hosting</a></li>
                        <li><a class="mobile-menu-link" href="{{ route('wordpressHosting') }}">WordPress Hosting</a>
                        </li>
                        <li><a class="mobile-menu-link" href="{{ route('vpsHosting') }}">VPS Hosting</a></li>
                        <li><a class="mobile-menu-link" href="{{ route('resellerHosting') }}">Reseller Hosting</a></li>
                        <li><a class="mobile-menu-link" href="{{ route('dedicatedHosting') }}">Dedicated Hosting</a>
                        </li>
                        <li><a class="mobile-menu-link" href="{{ route('cloudHosting') }}">Cloud Hosting</a></li>
                    </ul>
                </li>
                <li class="has-droupdown">
                    <a href="#" class="main">Feature</a>
                    <ul class="submenu mm-collapse">
                        <li><a class="mobile-menu-link" target="_self" href="{{ route('sharedHosting') }}">Shared
                                Hosting</a></li>
                        <li><a class="mobile-menu-link" target="_self" href="{{ route('vpsHosting') }}">VPS Hosting</a>
                        </li>
                    </ul>
                </li>
                <li class="has-droupdown">
                    <a href="#" class="main">Help Center</a>
                    <ul class="submenu mm-collapse">
                        <li><a class="mobile-menu-link" href="{{ route('knowledgebase') }}">Knowledgebase</a></li>
                        <li><a class="mobile-menu-link" href="{{ route('support') }}">Support</a></li>
                        <li><a class="mobile-menu-link" href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <ul class="social-area-one pl--20 mt--100">
            <li><a href="https://www.linkedin.com" aria-label="social-link" target="_blank"><i
                        class="fa-brands fa-linkedin"></i></a></li>
            <li><a href="https://www.x.com" aria-label="social-link" target="_blank"><i
                        class="fa-brands fa-twitter"></i></a></li>
            <li><a href="https://www.youtube.com" aria-label="social-link" target="_blank"><i
                        class="fa-brands fa-youtube"></i></a></li>
            <li><a href="https://www.facebook.com" aria-label="social-link" target="_blank"><i
                        class="fa-brands fa-facebook-f"></i></a></li>
        </ul>
    </div>
    <!-- mobile menu area end -->
</div>