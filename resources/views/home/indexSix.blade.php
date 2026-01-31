@extends('layout.layout')

@php
    $breadcrumb = 'false';
@endphp

@section('content')

    <!-- HERO BANNER -->
    <div class="rts-hero hero__banner wp__banner banner__background-4">
        <div class="rts-hero__video">
            <video loop muted autoplay src="{{ asset('assets/images/video/hosting.mp4') }}" class="appl1-hdvd-xx"></video>
        </div>
        <div class="container">
            <div class="row">
                <div class="hero__banner__wrapper d-flex flex-wrap flex-lg-nowrap gap-5 gap-lg-0 
                                                    align-items-center justify-content-between px-5 px-lg-0">

                    <!-- banner content -->
                    <div class="hero__banner__content content-5">
                        <h6 class="mb-0">
                            Up to 75% off Web Hosting
                        </h6>
                        <h1 class="heading">
                            Powerful Web Hosting Solutions
                        </h1>
                        <p class="price-area">From <span>$3.99</span>/mo. Regular $17.99/mo. excl. VAT</p>
                        <div class="domain__options">

                            <div class="domain__form">
                                <div id="nav-tabcontent" class="tab-content">
                                    <div id="register" class="tab-pane fade active show" role="tabpanel">
                                        <form action="#" class="domain__search d-flex">
                                            <input type="text" placeholder="Enter domain name" required>
                                            <select name="r" id="r">
                                                <option value=".com">.com</option>
                                                <option value=".net">.net</option>
                                                <option value=".love">.love</option>
                                                <option value=".pw">.pw</option>
                                                <option value=".org">.org</option>
                                                <option value=".org">.org</option>
                                                <option value=".info">.info</option>
                                                <option value=".info">.info</option>
                                                <option value=".xyz">.xyz</option>
                                            </select>
                                            <button type="submit" class="btn__primary">Search</button>
                                        </form>
                                    </div>

                                    <div id="transfer" class="tab-pane fade" role="tabpanel">
                                        <form action="#" class="domain__search d-flex">
                                            <input type="text" placeholder="Enter domain name" required>
                                            <select name="t" id="t">
                                                <option value=".com">.com</option>
                                                <option value=".net">.net</option>
                                                <option value=".love">.love</option>
                                                <option value=".pw">.pw</option>
                                                <option value=".org">.org</option>
                                                <option value=".org">.org</option>
                                                <option value=".info">.info</option>
                                                <option value=".info">.info</option>
                                                <option value=".xyz">.xyz</option>
                                            </select>
                                            <button type="submit" class="btn__primary">Transfer</button>
                                        </form>
                                    </div>
                                </div>

                            </div>

                            <div class="domain__list d-flex gap-5">
                                <div class="single__domain d-flex gap-1">
                                    <strong>.com</strong>
                                    <span>only $6.19</span>
                                </div>
                                <div class="single__domain d-flex gap-1">
                                    <strong>.org</strong>
                                    <span>only $5.19</span>
                                </div>
                                <div class="single__domain d-flex gap-1">
                                    <strong>.xyz</strong>
                                    <span>only $1</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- banner content end -->
                </div>
            </div>
        </div>
    </div>
    <!-- HERO BANNER END -->

    <!-- TakeItCloudy FEATURE AREA -->
    <section class="rts-feature section__padding">
        <div class="container">
            <div class="row gy-30">
                <div class="col-lg-3 col-md-6">
                    <div class="single__feature">
                        <div class="single__feature--box">
                            <div class="single__feature--box-icon">
                                <img src="{{ asset('assets/images/feature/feature-01.svg') }}" alt="">
                            </div>
                            <h5 class="single__feature--box-title">
                                Free WHM & cPanel
                            </h5>
                            <p class="single__feature--box-description">
                                We guarantee it you don't have
                                to worry about it.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single__feature">
                        <div class="single__feature--box">
                            <div class="single__feature--box-icon">
                                <img src="{{ asset('assets/images/feature/feature-02.svg') }}" alt="">
                            </div>
                            <h5 class="single__feature--box-title">
                                Performance Optimized
                            </h5>
                            <p class="single__feature--box-description">
                                If your website is slow or down
                                then you losing customers.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single__feature">
                        <div class="single__feature--box">
                            <div class="single__feature--box-icon">
                                <img src="{{ asset('assets/images/feature/feature-03.svg') }}" alt="">
                            </div>
                            <h5 class="single__feature--box-title">
                                Super Easy to Use
                            </h5>
                            <p class="single__feature--box-description">
                                Our custom control panel to use
                                and removes the headache
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single__feature">
                        <div class="single__feature--box">
                            <div class="single__feature--box-icon">
                                <img src="{{ asset('assets/images/feature/feature-04.svg') }}" alt="">
                            </div>
                            <h5 class="single__feature--box-title">
                                24/7 Expert Support
                            </h5>
                            <p class="single__feature--box-description">
                                Our custom control panel to use
                                and removes the headache
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TakeItCloudy FEATURE AREA END -->

    <!-- TakeItCloudy FEATURE AREA -->
    <section class="rts-service section__padding body-bg-2">
        <div class="container">
            <div class="row">
                <div class="rts-section text-center">
                    <h2 class="rts-section__title">Experience Our Exceptional Services</h2>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <div class="single__service">
                        <div class="single__service--box">
                            <div class="single__service--box-icon">
                                <img src="{{ asset('assets/images/service/shared__hosting.svg') }}" alt="">
                            </div>
                            <h5 class="single__service--box-title">
                                Shared Hosting
                            </h5>
                            <p class="single__service--box-description">
                                The most popular hosting plan and comes at one of the most.
                            </p>
                            <div class="single__service--box-button">
                                <a href="#" class="rts-btn">Get a Quote <i class="fa-regular fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single__service">
                        <div class="single__service--box">
                            <div class="single__service--box-icon">
                                <img src="{{ asset('assets/images/service/wordpress__hosting.svg') }}" alt="">
                            </div>
                            <h5 class="single__service--box-title">
                                WordPress Hosting
                            </h5>
                            <p class="single__service--box-description">
                                WordPress Hosting gives you speed and performance with a full
                            </p>
                            <div class="single__service--box-button">
                                <a href="#" class="rts-btn">Get a Quote <i class="fa-regular fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single__service">
                        <div class="single__service--box">
                            <div class="single__service--box-icon">
                                <img src="{{ asset('assets/images/service/cloud__hosting.svg') }}" alt="">
                            </div>
                            <h5 class="single__service--box-title">
                                Cloud Hosting
                            </h5>
                            <p class="single__service--box-description">
                                Earn additional revenue or support your customers with easy-to-use
                            </p>
                            <div class="single__service--box-button">
                                <a href="#" class="rts-btn">Get a Quote <i class="fa-regular fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single__service">
                        <div class="single__service--box">
                            <div class="single__service--box-icon">
                                <img src="{{ asset('assets/images/service/reseller__hosting.svg') }}" alt="">
                            </div>
                            <h5 class="single__service--box-title">
                                Reseller Hosting
                            </h5>
                            <p class="single__service--box-description">
                                Reseller hosting is a form of web hosting where the account
                            </p>
                            <div class="single__service--box-button">
                                <a href="#" class="rts-btn">Get a Quote <i class="fa-regular fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TakeItCloudy FEATURE AREA END -->

    <!-- DATA CENTER AREA -->
    <div class="rts-data-center fix pb--120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="rts-section w-790 text-center">
                    <h3 class="rts-section__title">
                        Data Centers All Around the World</h3>
                    <p class="rts-section__description">Our web hosting, WordPress hosting, and cloud hosting plans offer
                        server
                        locations in: USA, Germany Egypt , India, Chaina, Brazil, Canada, Russia, Australia and South
                        Africa.
                    </p>
                </div>
            </div>
            <!-- data center content -->
            <div class="row">
                <div class="col-12">
                    <div class="rts-data-center__location">
                        <img src="{{ asset('assets/images/data__center.png') }}" alt="data__center">
                        <ul class="round-shape">
                            <li class="one">
                                <span class="tooltip" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    aria-label="Canada" data-bs-custom-class="color-elitehost" title="Canada"></span>

                                <img src="{{ asset('assets/images/flag-01.svg') }}" alt="">
                            </li>
                            <li class="two">
                                <span class="tooltip" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-custom-class="color-elitehost" title="Germany"></span>
                                <img src="{{ asset('assets/images/flag-02.svg') }}" alt="">
                            </li>
                            <li class="three">
                                <span class="tooltip" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-custom-class="color-elitehost" title="Russia"></span>
                                <img src="{{ asset('assets/images/flag-03.svg') }}" alt="">
                            </li>
                            <li class="four">
                                <span class="tooltip" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-custom-class="color-elitehost" title="USA"></span>
                                <img src="{{ asset('assets/images/flag-04.svg') }}" alt="">
                            </li>
                            <li class="five">
                                <span class="tooltip" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-custom-class="color-elitehost" title="Egypt"></span>
                                <img src="{{ asset('assets/images/flag-05.svg') }}" alt="">
                            </li>
                            <li class="six">
                                <span class="tooltip" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-custom-class="color-elitehost" title="India"></span>
                                <img src="{{ asset('assets/images/flag-06.svg') }}" alt="">
                            </li>
                            <li class="seven">
                                <span class="tooltip" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-custom-class="color-elitehost" title="China"></span>
                                <img src="{{ asset('assets/images/flag-07.svg') }}" alt="">
                            </li>
                            <li class="eight">
                                <span class="tooltip" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    data-bs-custom-class="color-elitehost" title="Brazil"></span>
                                <img src="{{ asset('assets/images/flag-08.svg') }}" alt="">
                            </li>
                            <li class="nine">
                                <span class="tolltip" data-bs-toggle="tooltip" data-bs-custom-class="color-elitehost"
                                    data-bs-placement="bottom" data-bs-original-title="South Africa"></span>
                                <img src="{{ asset('assets/images/flag-09.svg') }}" alt="">
                            </li>
                            <li class="ten">
                                <span class="tolltip" data-bs-toggle="tooltip" data-bs-custom-class="color-elitehost"
                                    data-bs-placement="bottom" data-bs-original-title="Australia"></span>
                                <img src="{{ asset('assets/images/flag-10.svg') }}" alt="">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- DATA CENTER AREA END -->

    <!-- HOSTING FEATURE AREA START -->
    <div class="rts-hosting-feature-area area-3 body-bg-2 section__padding">
        <div class="container">
            <div class="section-inner">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="left-side-image">
                            <img src="{{ asset('assets/images/feature/feature-hero-09.webp') }}" width="630" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-side-content">
                            <div class="section-title-area text-start">
                                <h2 class="section-title">Unmatched Website
                                    Performance</h2>
                                <p class="desc">Finding and purchasing the perfect domain name is the first step to
                                    establishing a successful online presence. With our comprehensive domain registration.
                                </p>
                            </div>
                            <ul class="feature-list">
                                <li>
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/pricing/09.svg') }}" alt="">
                                    </div>
                                    <div class="text">
                                        <h5 class="title">Easy Domain Search</h5>
                                        <p>Find the perfect domain name with various extensions (.com, .net, .org, etc.).
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/pricing/10.svg') }}" alt="">
                                    </div>
                                    <div class="text">
                                        <h5 class="title">Competitive Pricing</h5>
                                        <p>Enjoy affordable domain registration fees.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/pricing/09.svg') }}" alt="">
                                    </div>
                                    <div class="text">
                                        <h5 class="title">24/7 Customer Support</h5>
                                        <p>Get assistance anytime with our round-the-clock support team.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- HOSTING FEATURE AREA END-->

    <!-- HOSTING FEATURE AREA START -->
    <div class="rts-hosting-feature-area section__padding">
        <div class="container">
            <div class="section-inner">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="left-side-image">
                            <img src="{{ asset('assets/images/feature/feature-hero-08.webp') }}" width="574" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="rts-whychoose__content area-3">
                            <h2 class="rts-whychoose__content--title">
                                Secure Remote Management Protocols
                            </h2>

                            <!-- single content-->
                            <div class="single">
                                <div class="single__image">
                                    <img src="{{ asset('assets/images/feature/feature-05.svg') }}" alt="">
                                </div>
                                <div class="single__content">
                                    <h6>SSL Certificates:</h6>
                                    <p>Find the perfect domain name with various extensions (.com, .net, .org, etc.).</p>
                                </div>
                            </div>
                            <!-- single content-->
                            <div class="single">
                                <div class="single__image">
                                    <img src="{{ asset('assets/images/feature/feature-06.svg') }}" alt="">
                                </div>
                                <div class="single__content">
                                    <h6>DDoS Protection</h6>
                                    <p>Enjoy affordable domain registration fees.</p>
                                </div>
                            </div>
                            <!-- single content-->
                            <div class="single">
                                <div class="single__image">
                                    <img src="{{ asset('assets/images/feature/feature-07.svg') }}" alt="">
                                </div>
                                <div class="single__content">
                                    <h6>Two-Factor Authentication (2FA)</h6>
                                    <p>Get assistance anytime with our round-the-clock support team.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- HOSTING FEATURE AREA END-->

    <!-- TakeItCloudy FEATURE AREA -->
    <section class="rts-service area-2 body-bg-2 section__padding">
        <div class="container">
            <div class="row">
                <div class="rts-section text-center">
                    <h2 class="rts-section__title">Here's why you'll love hosting with TakeItCloudy</h2>
                </div>
            </div>
            <div class="service-inner">
                <ul>
                    <li class="service-wrapper">
                        <div class="icon-area">
                            <img src="{{ asset('assets/images/service/01.svg') }}" alt="">
                            <h6>No Limits</h6>
                        </div>
                        <p class="desc">You don't have to sacrifice quality to get great hosting at a low cost.</p>
                    </li>
                    <li class="service-wrapper">
                        <div class="icon-area">
                            <img src="{{ asset('assets/images/service/02.svg') }}" alt="">
                            <h6>Affordability</h6>
                        </div>
                        <p class="desc">Get unlimited storage and scalable bandwidth.</p>
                    </li>
                    <li class="service-wrapper">
                        <div class="icon-area">
                            <img src="{{ asset('assets/images/service/03.svg') }}" alt="">
                            <h6>Free Domain</h6>
                        </div>
                        <p class="desc">et your domain for free when you use the promo code </p>
                    </li>
                    <li class="service-wrapper">
                        <div class="icon-area">
                            <img src="{{ asset('assets/images/service/04.svg') }}" alt="">
                            <h6>Drag & Drop Capability</h6>
                        </div>
                        <p class="desc">Our easy-to-use drag-and-drop website builder is automatically included.</p>
                    </li>
                    <li class="service-wrapper">
                        <div class="icon-area">
                            <img src="{{ asset('assets/images/service/05.svg') }}" alt="">
                            <h6>99% Uptime Guarantee</h6>
                        </div>
                        <p class="desc">Reliability you can count on, so your site will be up and running</p>
                    </li>
                    <li class="service-wrapper">
                        <div class="icon-area">
                            <img src="{{ asset('assets/images/service/01.svg') }}" alt="">
                            <h6>Reliability & Security</h6>
                        </div>
                        <p class="desc">Get unlimited storage and scalable bandwidth.</p>
                    </li>
                    <li class="service-wrapper">
                        <div class="icon-area">
                            <img src="{{ asset('assets/images/service/01.svg') }}" alt="">
                            <h6>Safe & Secure</h6>
                        </div>
                        <p class="desc">Get unlimited storage and scalable bandwidth.</p>
                    </li>
                    <li class="service-wrapper">
                        <div class="icon-area">
                            <img src="{{ asset('assets/images/service/06.svg') }}" alt="">
                            <h6>24/7 Expert Support</h6>
                        </div>
                        <p class="desc">Encrypt data with an automatic SSL plan and access even more security tools </p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- TakeItCloudy FEATURE AREA END -->

    <!-- TESTIMONIAL -->
    <section class="rts-testimonial area-2 section__padding">
        <div class="container">
            <div class="row ">
                <div class="col-12 d-flex justify-content-center">
                    <div class="rts-section w-460 text-center">
                        <h2 class="rts-section__title">Our Client Feedback</h2>
                        <p class="rts-section__description">We’re honored and humbled by the great feedback we receive
                            from our customers on a daily basis.</p>
                    </div>
                </div>
            </div>
            <!-- testimonial -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="rts-testimonial__slider testimonial__slider--second">
                        <div class="swiper-wrapper">
                            <!-- single testimonial -->
                            <div class="swiper-slide">
                                <div class="rts-testimonial__single2">
                                    <div class="quote-icon">
                                        <img src="{{ asset('assets/images/testimonials/quote.svg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <p>I am using Digital Ocean Plan in Cloud ways and I can confirm it is very good.
                                            Also, additional the backup with my hosting is awesome too.</p>
                                    </div>
                                    <div class="author__meta">
                                        <div class="author__meta--image">
                                            <img src="{{ asset('assets/images/testimonials/author.png') }}" alt="">
                                        </div>
                                        <div class="author__meta--details">
                                            <a href="#">Jamie Knop</a>
                                            <span>Business Owner</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single testimonial end -->
                            <!-- single testimonial -->
                            <div class="swiper-slide">
                                <div class="rts-testimonial__single2">
                                    <div class="quote-icon">
                                        <img src="{{ asset('assets/images/testimonials/quote.svg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <p>I started my own web hosting business
                                            their reseller hosting plan, and it's been a great decision. The resources are
                                            ample,
                                            the management tools are easy to use.</p>
                                    </div>
                                    <div class="author__meta">
                                        <div class="author__meta--image">
                                            <img src="{{ asset('assets/images/testimonials/author-2.png') }}" alt="">
                                        </div>
                                        <div class="author__meta--details">
                                            <a href="#">Jahed Khan</a>
                                            <span>Business Owner</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single testimonial end -->
                            <!-- single testimonial -->
                            <div class="swiper-slide">
                                <div class="rts-testimonial__single2">
                                    <div class="quote-icon">
                                        <img src="{{ asset('assets/images/testimonials/quote.svg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <p>I've been using their web hosting services for over a year now, and I happier.
                                            The uptime is fantastic, and the customer support team is always quick.</p>
                                    </div>
                                    <div class="author__meta">
                                        <div class="author__meta--image">
                                            <img src="{{ asset('assets/images/testimonials/author-3.png') }}" alt="">
                                        </div>
                                        <div class="author__meta--details">
                                            <a href="#">Samira Khan</a>
                                            <span>Digital Marketer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single testimonial end -->
                            <!-- single testimonial -->
                            <div class="swiper-slide">
                                <div class="rts-testimonial__single2">
                                    <div class="quote-icon">
                                        <img src="{{ asset('assets/images/testimonials/quote.svg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <p>I've been using their web hosting services for over a year now, and I happier.
                                            The uptime is fantastic, and the customer support team is always quick.</p>
                                    </div>
                                    <div class="author__meta">
                                        <div class="author__meta--image">
                                            <img src="{{ asset('assets/images/author/author__two.png') }}" alt="">
                                        </div>
                                        <div class="author__meta--details">
                                            <a href="#">Jamie Knop</a>
                                            <span>Business Owner</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single testimonial end -->
                        </div>
                        <!-- pagination dot -->
                        <div class="rts-dot__button slider-center"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TESTIMONIAL END -->

    <!-- HOSTING LATEST BLOG -->
    <section class="rts-blog body-bg-2 pt--120 pb--60">
        <div class="container">
            <div class="row justify-content-center justify-content-md-start">
                <div class="col-md-12 col-sm-10">
                    <div class="rts-section text-center">
                        <h2 class="rts-section__title">Latest Article</h2>
                    </div>
                </div>
            </div>
            <!-- blog start -->
            <div class="row g-30 mb--60 justify-content-center justify-content-md-start">
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="rts-blog__single">
                        <a href="{{ route('blogDetails') }}">
                            <img class="blog__thumb" src="{{ asset('assets/images/blog/blog-1.png') }}"
                                alt="blog post thumb">
                        </a>
                        <div class="rts-blog__single--meta">
                            <div class="cat__date">
                                <a href="#" class="cat">Web Hosting</a>
                                <span class="date">19 Sep, 2025</span>
                            </div>
                            <a href="{{ route('blogDetails') }}" class="title">Attentive was born in 2015 help
                                sales teams VPS hosting</a>
                            <div class="rts-blog__single--author">
                                <div class="author">
                                    <img src="{{ asset('assets/images/author/author__one.png') }}" alt="">
                                </div>
                                <div class="author__content">
                                    <a href="#">Mack jon</a>
                                    <span>Developer & Web serenity </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="rts-blog__single">
                        <a href="{{ route('blogDetails') }}">
                            <img class="blog__thumb" src="{{ asset('assets/images/blog/blog-2.png') }}"
                                alt="blog post thumb">
                        </a>
                        <div class="rts-blog__single--meta">
                            <div class="cat__date">
                                <a href="#" class="cat">Web Hosting</a>
                                <span class="date">19 Sep, 2025</span>
                            </div>
                            <a href="{{ route('blogDetails') }}" class="title">Attentive was born in 2015 help
                                sales teams VPS hosting</a>
                            <div class="rts-blog__single--author">
                                <div class="author">
                                    <img src="{{ asset('assets/images/author/author__two.png') }}" alt="">
                                </div>
                                <div class="author__content">
                                    <a href="#">Ahmad Eamin</a>
                                    <span>Developer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="rts-blog__single">
                        <a href="{{ route('blogDetails') }}">
                            <img class="blog__thumb" src="{{ asset('assets/images/blog/blog-3.png') }}"
                                alt="blog post thumb">
                        </a>
                        <div class="rts-blog__single--meta">
                            <div class="cat__date">
                                <a href="#" class="cat">Web Hosting</a>
                                <span class="date">19 Sep, 2025</span>
                            </div>
                            <a href="{{ route('blogDetails') }}" class="title">Attentive was born in 2015 help
                                sales teams VPS hosting</a>
                            <div class="rts-blog__single--author">
                                <div class="author">
                                    <img src="{{ asset('assets/images/author/author__four.png') }}" alt="">
                                </div>
                                <div class="author__content">
                                    <a href="#">Samira Khan</a>
                                    <span>Digital Marketer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- light cta -->
        </div>
    </section>
    <!-- HOSTING LATEST BLOG END -->

    <!-- SHARED HOSTING FAQ -->
    <section class="rts-hosting-faq section__padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="rts-section text-center">
                        <h2 class="rts-section__title mb-0">Frequently asked questions</h2>
                    </div>
                    <div class="rts-faq__accordion">
                        <div class="accordion accordion-flush" id="rts-accordion">
                            <div class="accordion-item active">
                                <div class="accordion-header" id="first">
                                    <h4 class="accordion-button collapse show" data-bs-toggle="collapse"
                                        data-bs-target="#item__one" aria-expanded="false" aria-controls="item__one">
                                        Why buy a domain name from TakeItCloudy?
                                    </h4>
                                </div>
                                <div id="item__one" class="accordion-collapse collapse collapse show"
                                    aria-labelledby="first" data-bs-parent="#rts-accordion">
                                    <div class="accordion-body">
                                        Above all else, we strive to deliver outstanding customer experiences. When you buy
                                        a domain name from TakeItCloudy, we guarantee it will be handed over to you with
                                        superior standards of service and support. Our primary goal is to build a
                                        customer-focused atmosphere filled with the happiest customers in the galaxy. The
                                        TakeItCloudy guarantee is our mark of excellence.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" id="two">
                                    <h4 class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#item__two" aria-expanded="false" aria-controls="item__two">
                                        How does domain registration work?
                                    </h4>
                                </div>
                                <div id="item__two" class="accordion-collapse collapse" aria-labelledby="two"
                                    data-bs-parent="#rts-accordion">
                                    <div class="accordion-body">
                                        Think of the name you want to register. The answer is typically your company or
                                        website name. It is best to keep your domain name short and easy to understand. Say
                                        it out loud, and make sure it sounds great. Next, search to see if it is available.
                                        If the name you desire is taken with the .com top-level domain, there are hundreds
                                        of others available. Finally, add the top choices to your cart and complete the
                                        domain registration.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" id="three">
                                    <h4 class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#item__three" aria-expanded="false" aria-controls="item__three">
                                        Which domain extensions do you offer?
                                    </h4>
                                </div>
                                <div id="item__three" class="accordion-collapse collapse" aria-labelledby="three"
                                    data-bs-parent="#rts-accordion">
                                    <div class="accordion-body">
                                        The best ones! Give your website a true internet original like .com, .net, and .org.
                                        Each is globally recognized, and synonymous with trust and credibility — all great
                                        things to attach to your website and online brand. Watch this space for new
                                        additions to our domain portfolio.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" id="four">
                                    <h4 class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#item__four" aria-expanded="false" aria-controls="item__four">
                                        Why do you have different offers for the same products?
                                    </h4>
                                </div>
                                <div id="item__four" class="accordion-collapse collapse" aria-labelledby="four"
                                    data-bs-parent="#rts-accordion">
                                    <div class="accordion-body">
                                        Products might be the same, but every customer is different. That’s why we tailor
                                        our deals to suit as many people as possible. So you get exactly what you need, for
                                        less.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" id="five">
                                    <h4 class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#item__five" aria-expanded="false" aria-controls="item__five">
                                        How do I choose and connect my website products?
                                    </h4>
                                </div>
                                <div id="item__five" class="accordion-collapse collapse" aria-labelledby="five"
                                    data-bs-parent="#rts-accordion">
                                    <div class="accordion-body">
                                        It’s easy. Once you’ve decided on your website’s domain name and started the
                                        purchase process, you simply choose from specially selected products and bundles.
                                        These give you everything you need to get a website online, like your web hosting,
                                        for example. Once you have what you need, you can use our revolutionary Unbox
                                        process to connect your products together and choose your website content management
                                        system (CMS).
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" id="six">
                                    <h4 class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#item__six" aria-expanded="false" aria-controls="item__six">
                                        How do I choose my website hosting?
                                    </h4>
                                </div>
                                <div id="item__six" class="accordion-collapse collapse" aria-labelledby="six"
                                    data-bs-parent="#rts-accordion">
                                    <div class="accordion-body">
                                        Take your pick. All our web hosting plans are built to offer power and simplicity,
                                        and come with free email mailboxes and SSL certificates. But each is also designed
                                        to meet specific needs.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" id="seven">
                                    <h4 class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#item__seven" aria-expanded="false" aria-controls="item__seven">
                                        What are the details of the $6.19 .COM offer?
                                    </h4>
                                </div>
                                <div id="item__seven" class="accordion-collapse collapse" aria-labelledby="seven"
                                    data-bs-parent="#rts-accordion">
                                    <div class="accordion-body">
                                        This promotion applies to new 1st year registrations for new customers. One purchase
                                        per household.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- SHARED HOSTING FAQ END -->

    <!-- NEWSLETTER AREA -->
    <div class="rts-newsletter">
        <div class="container">
            <div class="row">
                <div class="rts-newsletter__box">
                    <div class="rts-newsletter__box--content">
                        <h3 class="title">Sign up for web hosting today!</h3>
                        <form action="#" class="newsletter__form">
                            <input type="email" name="email" placeholder="Enter your email" required>
                            <button type="submit" class="btn__two secondary__bg secondary__color">Subscribe </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- NEWSLETTER AREA END -->

@endsection