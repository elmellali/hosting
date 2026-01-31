<header class="rts-header style-one header__default">
    <!-- HEADER TOP AREA -->
    <div class="rts-ht rts-ht__bg">
        <div class="container">
            <div class="row">
                <div class="rts-ht__wrapper">
                    <div class="rts-ht__email">
                        <a href="mailto:contact@takeitcloudy.com"><img src="{{ asset('assets/images/icon/email.svg') }}"
                                alt="" class="icon">contact@takeitcloudy.com</a>
                    </div>
                    <div class="rts-ht__promo">
                        <p><img class="icon" src="{{ asset('assets/images/icon/tag--group.svg') }}" alt=""> Hosting
                            Flash Sale: Starting at <strong>$2.59/mo</strong> for a limited time</p>
                    </div>
                    <div class="rts-ht__links">
                        <div class="live-chat-has-dropdown">
                            <a href="{{ route('cart.index') }}" class="live__chat"><i
                                    class="fa-regular fa-cart-shopping icon"></i>Cart</a>
                        </div>
                        <div class="login-btn-has-dropdown">
                            @auth
                                <a href="{{ route('dashboard') }}" class="login__link"><img
                                        src="{{ asset('assets/images/icon/person.svg') }}" alt="" class="icon">My
                                    Account</a>
                            @else
                                <a href="{{ route('login') }}" class="login__link"><img
                                        src="{{ asset('assets/images/icon/person.svg') }}" alt="" class="icon">Login</a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- HEADER TOP AREA END -->
    <div class="container">
        <div class="row">
            <div class="rts-header__wrapper">
                <div class="header-wrapper-left d-flex align-items-center ">
                    <!-- FOR LOGO -->
                    <div class="rts-header__logo">
                        <a href="{{ route('index') }}" class="site-logo">
                            <img class="logo-white" src="{{ asset('assets/images/logo/elitehost-logo.png') }}"
                                alt="Elitehost" style="max-height: 50px;">
                            <img class="logo-dark" src="{{ asset('assets/images/logo/elitehost-logo.png') }}"
                                alt="Elitehost" style="max-height: 50px;">
                        </a>
                    </div>
                    <!-- FOR NAVIGATION MENU -->

                    <nav class="rts-header__menu" id="mobile-menu">
                        <div class="elitehost-menu">
                            <ul class="list-unstyled elitehost-desktop-menu">
                                <li class="menu-item">
                                    <a href="{{ route('index') }}" class="elitehost-dropdown-main-element">Home</a>
                                </li>
                                <li class="menu-item elitehost-has-dropdown mega-menu">
                                    <a href="#" class="elitehost-dropdown-main-element">Hosting</a>
                                    <div class="rts-mega-menu">
                                        <div class="wrapper">
                                            <div class="row g-0">
                                                <div class="col-lg-6">
                                                    <ul class="mega-menu-item">
                                                        <li>
                                                            <a href="{{ route('sharedHosting') }}">
                                                                <img src="{{ asset('assets/images/mega-menu/22.svg') }}"
                                                                    alt="icon">
                                                                <div class="info">
                                                                    <p>Shared Hosting</p>
                                                                    <span>Manage Shared Hosting</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('wordpressHosting') }}">
                                                                <img src="{{ asset('assets/images/mega-menu/23.svg') }}"
                                                                    alt="icon">
                                                                <div class="info">
                                                                    <p>WordPress Hosting</p>
                                                                    <span>WordPress Hosting speed</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('vpsHosting') }}">
                                                                <img src="{{ asset('assets/images/mega-menu/24.svg') }}"
                                                                    alt="icon">
                                                                <div class="info">
                                                                    <p>VPS Hosting</p>
                                                                    <span>Dedicated resources</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <ul class="mega-menu-item">
                                                        <li>
                                                            <a href="{{ route('resellerHosting') }}">
                                                                <img src="{{ asset('assets/images/mega-menu/25.svg') }}"
                                                                    alt="icon">
                                                                <div class="info">
                                                                    <p>Reseller Hosting</p>
                                                                    <span>Earn additional revenue</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('dedicatedHosting') }}">
                                                                <img src="{{ asset('assets/images/mega-menu/27.svg') }}"
                                                                    alt="icon">
                                                                <div class="info">
                                                                    <p>Dedicated Hosting</p>
                                                                    <span>Hosting that gives you tools</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('cloudHosting') }}">
                                                                <img src="{{ asset('assets/images/mega-menu/29.svg') }}"
                                                                    alt="icon">
                                                                <div class="info">
                                                                    <p>Cloud Hosting</p>
                                                                    <span>Manage Cloud Hosting</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item">
                                    <a href="{{ route('domainChecker') }}"
                                        class="elitehost-dropdown-main-element">Domains</a>
                                </li>
                                <li class="menu-item elitehost-has-dropdown">
                                    <a href="#" class="elitehost-dropdown-main-element">Support</a>
                                    <ul class="elitehost-submenu list-unstyled menu-pages">
                                        <li class="nav-item"><a class="nav-link" href="{{ route('support') }}">Ticket
                                                Support</a></li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="{{ route('knowledgebase') }}">Knowledgebase</a></li>
                                        <li class="nav-item"><a class="nav-link" href="{{ route('faq') }}">FAQ</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="{{ route('cart.index') }}" class="elitehost-dropdown-main-element">Cart</a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{ route('contact') }}" class="elitehost-dropdown-main-element">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <!-- FOR HEADER RIGHT -->
                </div>
                <div class="rts-header__right d-flex">
                    <ul class="rts-dropdown-menu switcher-currency">
                        <li class="has-child-menu">
                            <a href="#">
                                <span class="menu-item">USD</span>
                                <i class="fa-regular fa-chevron-down"></i>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">
                                        <span class="menu-item">Euro</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="menu-item">Real</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="menu-item">Ruble</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    @auth
                        <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                            @csrf
                            <button type="submit" class="login__btn">Logout</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="login__btn" target="_self">Client Area</a>
                    @endauth
                    <button id="menu-btn" aria-label="Menu" class="mobile__active menu-btn"><i
                            class="fa-sharp fa-solid fa-bars"></i></button>
                </div>
            </div>
        </div>
    </div>
</header>