@extends('layout.layout')

@php
    $title = 'About Us';
    $subTitle = 'your website on a cloud-based web server – powerful and simple to use!';
    $img = 'src="' . asset('assets/images/banner/breadcrumb-05.webp') . '" width="515" alt=""';   
@endphp

@section('content')

    <!-- About Us Start -->
    <section class="rts-about-area pt--120">
        <div class="container">
            <div class="section-inner">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="about-image-area">
                            <img class="main-image" src="{{ asset('assets/images/about/about-01.webp') }}" width="410"
                                alt="">
                            <img class="floating-image" src="{{ asset('assets/images/about/about-02.webp') }}" width="310"
                                alt="">
                            <div class="counter-wrapper">
                                <h2 class="title-main"><span class="counter">15</span> <span>+</span></h2>
                                <p class="disc">
                                    Year Experience
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="about-content-area">
                            <h2 class="section-title">About TakeItCloudy</h2>
                            <p class="desc">Since our founding in 2025, TakeItCloudy has offered web hosting solutions that
                                continually innovate new ways to deliver on our mission: empowering people to harness their
                                brands online.</p>
                            <div class="about-feature-area">
                                <ul>
                                    <li>
                                        <div class="icon"><img src="{{ asset('assets/images/about/03.svg') }}" alt=""></div>
                                        <div class="text">24/7 Guru Support</div>
                                    </li>
                                    <li>
                                        <div class="icon"><img src="{{ asset('assets/images/about/04.svg') }}" alt=""></div>
                                        <div class="text">Up To 20X Faster Turbo</div>
                                    </li>
                                </ul>
                            </div>
                            <div class="feature-area-bottom">
                                <ul>
                                    <li>Comprehensive tools for all</li>
                                    <li>Research Hosting Providers</li>
                                    <li>WordPress.org-recommended</li>
                                    <li>Define Your Hosting Needs</li>
                                    <li>Trusted by 2M users</li>
                                    <li>Evaluate Features and Resources</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us END -->

    <!-- Journey Start -->
    <section class="rts-journey-area section__padding">
        <div class="container">
            <div class="section-title-area">
                <h2 class="section-title text-center">We empower entrepreneurs by providing the ideal support and resources
                    for their journey.</h2>
                <p class="desc text-center">This is where people bring their ideas to life, develop a captivating brand and
                    an impressive website, attract customers through digital and social marketing, and efficiently manage
                    their work. When a tool alone isn't enough, we offer direct one-on-one guidance with a personal touch.
                </p>
            </div>
            <div class="section-inner">
                <div class="image-area">
                    <img src="{{ asset('assets/images/about/about-03.webp') }}" width="410" alt="">
                    <img src="{{ asset('assets/images/about/about-04.webp') }}" width="410" alt="">
                    <img src="{{ asset('assets/images/about/about-05.webp') }}" width="410" alt="">
                </div>
            </div>
            <div class="bottom-counter-area pt--120">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="counter-wrapper">
                            <div class="icon"><img src="{{ asset('assets/images/about/05.svg') }}" width="100" alt=""></div>
                            <div class="content">
                                <h2 class="title-main"><span class="counter">2</span> <span>k</span></h2>
                                <p class="disc">
                                    More than 2 thousand <br> employees.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="counter-wrapper">
                            <div class="icon"><img src="{{ asset('assets/images/about/06.svg') }}" width="100" alt=""></div>
                            <div class="content">
                                <h2 class="title-main"><span class="counter">21</span> <span>m</span></h2>
                                <p class="disc">
                                    We empower 21 million <br> entrepreneurs.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="counter-wrapper">
                            <div class="icon"><img src="{{ asset('assets/images/about/05.svg') }}" width="100" alt=""></div>
                            <div class="content">
                                <h2 class="title-main"><span class="counter">85</span> <span>m</span></h2>
                                <p class="disc">
                                    Our customers trust us with <br> their 85 million domain names.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us End -->

    <!-- TEAM AREA -->
    {{-- <section class="rts-team-area section__padding body-bg-2">
        <div class="container">
            <div class="rts-section-title-area">
                <h2 class="section-title">Part of our team</h2>
                <p class="desc w-450">Over the last 19 years, Site Ground has grown to more than
                    A considerable number of our people started working</p>
            </div>
            <div class="section-inner">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="team-wrapper">
                            <div class="image-area">
                                <img src="{{ asset('assets/images/team/team-01.jpg') }}" alt="">
                            </div>
                            <div class="content">
                                <h4 class="title">Jhone Doe</h4>
                                <p class="desc">CEO</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="team-wrapper">
                            <div class="image-area">
                                <img src="{{ asset('assets/images/team/team-02.jpg') }}" alt="">
                            </div>
                            <div class="content">
                                <h4 class="title">Peterson Jefer</h4>
                                <p class="desc">Marketing</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="team-wrapper">
                            <div class="image-area">
                                <img src="{{ asset('assets/images/team/team-03.jpg') }}" alt="">
                            </div>
                            <div class="content">
                                <h4 class="title">Machiel Anderson</h4>
                                <p class="desc">Digital Markter</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- TEAM AREA END -->

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
                                            <img src="{{ asset('assets/images/author/jamie_knop.png') }}" alt="">
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
                                            <img src="{{ asset('assets/images/author/author__three.png') }}" alt="">
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
                                        <p>I've been using their web hosting services for over a year now, and I'm happier.
                                            The uptime is fantastic, and the customer support team is always quick.</p>
                                    </div>
                                    <div class="author__meta">
                                        <div class="author__meta--image">
                                            <img src="{{ asset('assets/images/author/author__four.png') }}" alt="">
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
                                        <p>I've been using their web hosting services for over a year now, and I'm happier.
                                            The uptime is fantastic, and the customer support team is always quick.</p>
                                    </div>
                                    <div class="author__meta">
                                        <div class="author__meta--image">
                                            <img src="{{ asset('assets/images/author/jamie_knop.png') }}" alt="">
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
    {{-- <section class="rts-blog pb--60 pt--120 body-bg-2">
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
    </section> --}}
    <!-- HOSTING LATEST BLOG END -->
    <!-- HOSTING LATEST BLOG END -->

    <!-- Elitehost FEATURE AREA -->
    <section class="rts-feature section__padding">
        <div class="container">
            <div class="row">
                <div class="rts-section text-center">
                    <h2 class="rts-section__title">Why TakeItCloudy</h2>
                </div>
            </div>
            <div class="row gy-30">
                <div class="col-xl-3 col-lg-6 col-md-6">
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
                <div class="col-xl-3 col-lg-6 col-md-6">
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
                <div class="col-xl-3 col-lg-6 col-md-6">
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
                <div class="col-xl-3 col-lg-6 col-md-6">
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
    <!-- Elitehost FEATURE AREA END -->

    <!-- SHARED HOSTING FAQ -->
    <section class="rts-hosting-faq">
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

    <!-- Hosting Feature Start -->
    <section class="rts-hosting-feature-area-2 section__padding">
        <div class="container">
            <div class="section-inner">
                <div class="row g-5">
                    <div class="col-xl-4 col-lg-6">
                        <div class="feature-wrapper">
                            <div class="icon">
                                <img src="{{ asset('assets/images/feature/feature-08.svg') }}" alt="">
                            </div>
                            <div class="text">
                                <h4 class="title">Live Chat</h4>
                                <p class="desc">Our knowledgeable and friendly representatives are available 24/7</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="feature-wrapper">
                            <div class="icon">
                                <img src="{{ asset('assets/images/feature/feature-09.svg') }}" alt="">
                            </div>
                            <div class="text">
                                <h4 class="title">Knowledge Base</h4>
                                <p class="desc">Access a wealth of information and resources with our comprehensive</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="feature-wrapper">
                            <div class="icon">
                                <img src="{{ asset('assets/images/feature/feature-11.svg') }}" alt="">
                            </div>
                            <div class="text">
                                <h4 class="title">Send Ticket</h4>
                                <p class="desc">Our ticketing system is designed to provide you with efficient</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hosting Feature End -->

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