@extends('layout.layout')

@php
    $breadcrumb = 'false';
@endphp

@section('content')

    <!-- HERO BANNER SIX -->
    <div class="hero-banner-slide position-relative fix">
        <div class="hero-banner-slider-wrapper">
            <div class="banner-slider-active">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="rts-hero-banner banner-three"
                            style="background-image: url({{ asset('assets/images/author/hero_person_1.png') }});">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-7 col-xl-6 col-md-12">
                                        <div class="banner-content">
                                            <div class="banner-top">
                                                Up to 75% off Web Hosting
                                            </div>
                                            <h2 class="banner-title">
                                                Your Ultimate Hosting Partner
                                            </h2>
                                            <ul class="banner-feature-area">
                                                <li>
                                                    <div class="icon"><img
                                                            src="{{ asset('assets/images/banner/check.svg') }}" alt="">
                                                    </div>
                                                    <p>Blazing Fast Web Hosting</p>
                                                </li>
                                                <li>
                                                    <div class="icon"><img
                                                            src="{{ asset('assets/images/banner/check.svg') }}" alt="">
                                                    </div>
                                                    <p>Secure Hosting with 99.9% Uptime</p>
                                                </li>
                                                <li>
                                                    <div class="icon"><img
                                                            src="{{ asset('assets/images/banner/check.svg') }}" alt="">
                                                    </div>
                                                    <p>24/7 Expert Support for Your Website</p>
                                                </li>
                                            </ul>
                                            <div class="banner-btn">
                                                <a href="{{ route('pricing') }}"
                                                    class="rts-btn btn__long white__bg secondary__color">Plan & Pricing <i
                                                        class="fa-regular fa-chevron-right"></i></a>
                                                <a href="{{ route('contact') }}"
                                                    class="rts-btn btn__long border__white white__color">Get a Quote <i
                                                        class="fa-regular fa-chevron-right"></i></a>
                                            </div>
                                            <div class="banner-shape-img">
                                                <img src="{{ asset('assets/images/banner/rocket.svg') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rts-hero-banner banner-three"
                            style="background-image: url({{ asset('assets/images/banner/banner-bg-4.webp') }});">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-7 col-xl-6 col-md-12">
                                        <div class="banner-content">
                                            <div class="banner-top">
                                                Up to 75% off Web Hosting
                                            </div>
                                            <h2 class="banner-title">
                                                Your Ultimate Hosting Partner
                                            </h2>
                                            <ul class="banner-feature-area">
                                                <li>
                                                    <div class="icon"><img
                                                            src="{{ asset('assets/images/banner/check.svg') }}" alt="">
                                                    </div>
                                                    <p>Blazing Fast Web Hosting</p>
                                                </li>
                                                <li>
                                                    <div class="icon"><img
                                                            src="{{ asset('assets/images/banner/check.svg') }}" alt="">
                                                    </div>
                                                    <p>Secure Hosting with 99.9% Uptime</p>
                                                </li>
                                                <li>
                                                    <div class="icon"><img
                                                            src="{{ asset('assets/images/banner/check.svg') }}" alt="">
                                                    </div>
                                                    <p>24/7 Expert Support for Your Website</p>
                                                </li>
                                            </ul>
                                            <div class="banner-btn">
                                                <a href="{{ route('pricing') }}"
                                                    class="rts-btn btn__long white__bg secondary__color">Plan & Pricing <i
                                                        class="fa-regular fa-chevron-right"></i></a>
                                                <a href="{{ route('contact') }}"
                                                    class="rts-btn btn__long border__white white__color">Get a Quote <i
                                                        class="fa-regular fa-chevron-right"></i></a>
                                            </div>
                                            <div class="banner-shape-img">
                                                <img src="{{ asset('assets/images/banner/rocket.svg') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rts-hero-banner banner-three"
                            style="background-image: url({{ asset('assets/images/banner/banner-bg-5.webp') }});">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-7 col-xl-6 col-md-12">
                                        <div class="banner-content">
                                            <div class="banner-top">
                                                Up to 75% off Web Hosting
                                            </div>
                                            <h2 class="banner-title">
                                                Your Ultimate Hosting Partner
                                            </h2>
                                            <ul class="banner-feature-area">
                                                <li>
                                                    <div class="icon"><img
                                                            src="{{ asset('assets/images/banner/check.svg') }}" alt="">
                                                    </div>
                                                    <p>Blazing Fast Web Hosting</p>
                                                </li>
                                                <li>
                                                    <div class="icon"><img
                                                            src="{{ asset('assets/images/banner/check.svg') }}" alt="">
                                                    </div>
                                                    <p>Secure Hosting with 99.9% Uptime</p>
                                                </li>
                                                <li>
                                                    <div class="icon"><img
                                                            src="{{ asset('assets/images/banner/check.svg') }}" alt="">
                                                    </div>
                                                    <p>24/7 Expert Support for Your Website</p>
                                                </li>
                                            </ul>
                                            <div class="banner-btn">
                                                <a href="{{ route('pricing') }}"
                                                    class="rts-btn btn__long white__bg secondary__color">Plan & Pricing <i
                                                        class="fa-regular fa-chevron-right"></i></a>
                                                <a href="{{ route('contact') }}"
                                                    class="rts-btn btn__long border__white white__color">Get a Quote <i
                                                        class="fa-regular fa-chevron-right"></i></a>
                                            </div>
                                            <div class="banner-shape-img">
                                                <img src="{{ asset('assets/images/banner/rocket.svg') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-arrow">
                    <button class="rts-slider-btn swiper-btn-next"><i
                            class="fa-sharp fa-solid fa-chevron-left"></i></button>
                    <button class="rts-slider-btn swiper-btn-prev"><i
                            class="fa-sharp fa-solid fa-chevron-right"></i></button>
                </div>
                <div class="slider-dots"></div>
            </div>
        </div>
    </div>
    <!-- HERO BANNER SIX END -->

    <div class="rts-domain-checker-two section__padding">
        <div class="container">
            <div class="row">
                <h2 class="text-center">Find Your Domain Name </h2>
                <div class="rts-hero__content">
                    <form action="#">
                        <div class="rts-hero__form-area">
                            <input type="hidden" name="domain" value="register">
                            <input type="hidden" name="a" value="add">
                            <input type="text" placeholder="domain.com" name="query" required="">
                            <div class="select-button-area">
                                <select name="domain_type" id="select" class="price__select" style="display: none;">
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
                                <div class="nice-select price__select" tabindex="0"><span class="current">.com</span>
                                    <ul class="list">
                                        <li data-value=".com" class="option selected">.com</li>
                                        <li data-value=".net" class="option">.net</li>
                                        <li data-value=".love" class="option">.love</li>
                                        <li data-value=".pw" class="option">.pw</li>
                                        <li data-value=".org" class="option">.org</li>
                                        <li data-value=".org" class="option">.org</li>
                                        <li data-value=".info" class="option">.info</li>
                                        <li data-value=".info" class="option">.info</li>
                                        <li data-value=".xyz" class="option">.xyz</li>
                                    </ul>
                                </div>
                                <button type="submit">Search</button>
                            </div>
                        </div>
                    </form>
                    <div class="banner-content-tag">
                        <ul class="tag-list">
                            <li><span>.com</span><span>Only $6.19</span></li>
                            <li><span>.net</span><span>Only $6.19</span></li>
                            <li><span>.org</span><span>Only $6.19</span></li>
                            <li><span>.info</span><span>Only $6.19</span></li>
                            <li><span>.xyz</span><span>Only $6.19</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- TakeItCloudy FEATURE AREA -->
    <section class="rts-service pb--120">
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

    <!-- FLASH SELL AREA -->
    <section class="rts-flash-sell">
        <div class="container">
            <div class="rts-flash-sell__bg">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="rts-flash-sell__title">
                            <h3>Hosting Flash Sale </h3>
                            <p>For a limited time,
                                launch your website
                                with incredible savings.
                            </p>
                            <a href="#" class="primary__btn white__bg">See Details</a>
                        </div>
                    </div>
                    <div class="col-lg-8 p--0">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="single__sell">
                                    <div class="single__sell--content">
                                        <div class="offer">for a limited Time</div>
                                        <div class="discount">67% Off</div>
                                        <span>hosting</span>
                                    </div>
                                    <div class="single__sell--image">
                                        <img src="{{ asset('assets/images/icon/cloud.svg') }}" alt="">
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="single__sell">
                                    <div class="single__sell--content">
                                        <div class="offer">for a limited Time</div>
                                        <div class="discount">90% Off</div>
                                        <span>hosting</span>
                                    </div>
                                    <div class="single__sell--image">
                                        <img src="{{ asset('assets/images/icon/domain.svg') }}" alt="">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FLASH SELL AREA END -->

    <!-- WHY CHOOSE US -->
    <section class="rts-whychoose section__padding pt--120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-change">
                    <div class="rts-whychoose__content">
                        <h2 class="rts-whychoose__content--title">
                            Unmatched Website
                            Performance
                        </h2>

                        <!-- single content-->
                        <div class="single">
                            <div class="single__image">
                                <img src="{{ asset('assets/images/feature/feature-05.svg') }}" alt="">
                            </div>
                            <div class="single__content">
                                <h6>High-Speed SSD Storage</h6>
                                <p>Ensure your hosting plan includes SSD storage for faster data retrieval.</p>
                            </div>
                        </div>
                        <!-- single content-->
                        <div class="single">
                            <div class="single__image">
                                <img src="{{ asset('assets/images/feature/feature-06.svg') }}" alt="">
                            </div>
                            <div class="single__content">
                                <h6>Optimized Caching</h6>
                                <p>Use advanced caching techniques to reduce server load and speed up load times.</p>
                            </div>
                        </div>
                        <!-- single content-->
                        <div class="single">
                            <div class="single__image">
                                <img src="{{ asset('assets/images/feature/feature-07.svg') }}" alt="">
                            </div>
                            <div class="single__content">
                                <h6>Robust Security Features</h6>
                                <p>Implement strong security measures including SSL certificates, DDoS protection, and
                                    regular malware scans.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="rts-whychoose__image">
                        <img src="{{ asset('assets/images/feature/feature-hero-02.webp') }}" width="630" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- WHY CHOOSE US END -->

    <!-- HOSTING FEATURE AREA START -->
    <div class="rts-hosting-feature-area body-bg-2 section__padding">
        <div class="container">
            <div class="section-inner">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="left-side-image">
                            <img src="{{ asset('assets/images/feature/feature-hero-05.webp') }}" width="484" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7">
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

    <!-- HOSTING PLAN -->
    <section class="rts-plan section__padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="text-center w-560">
                    <h3 class="rts-section__title">
                        Choose Your Plan</h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-5">
                    <div class="rts-pricing-plan__tab color-primary">
                        <div class="tab__button">
                            <div class="tab__button__item">
                                <button class="tab__btn active" data-tab="monthly">Monthly</button>
                                <button class="tab__btn" data-tab="yearly">Yearly</button>
                                <button class="tab__btn" data-tab="3year">3 Year</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- PLAN -->
            <div class="tab__content open" id="monthly">
                <div class="row">
                    <div class="col-lg-12 p--0 overflow-x-scroll">
                        <div class="rts-plan__table">
                            <table class="table-bordered">
                                <!-- thead -->
                                <thead>
                                    <tr>
                                        <th class="package__left">
                                            <img src="{{ asset('assets/images/pricing/pricing-image.svg') }}" alt="">
                                        </th>
                                        <!-- package one -->
                                        <th class="package__item">
                                            <div class="package__item__info">
                                                <span class="package__type">Basic Plan</span>
                                                <span class="start">Renews at $5.32/month</span>
                                                <span class="card-plan__price">
                                                    $7.20 <sub>/ mo</sub>
                                                </span>
                                                <div class="card-plan__cartbtn">
                                                    <a href="#" class="btn-premium w-100 justify-content-center">Add to Cart
                                                        <i class="fa-regular fa-cart-shopping"></i></a>
                                                </div>
                                            </div>
                                        </th>
                                        <!-- top-right-corner -->
                                        <th class="package__item">
                                            <!-- table-title-3 -->
                                            <div class="package__item__info">
                                                <span class="package__type">Business Plan</span>
                                                <span class="start">Renews at $5.32/month</span>
                                                <span class="card-plan__price">
                                                    $7.20 <sub>/ mo</sub>
                                                </span>
                                                <div class="card-plan__cartbtn">
                                                    <a href="#" class="btn-premium w-100 justify-content-center">Add to Cart
                                                        <i class="fa-regular fa-cart-shopping"></i></a>
                                                </div>
                                            </div>
                                        </th>
                                        <!-- top-right-corner -->
                                        <th class="package__item">
                                            <div class="package__item__info">
                                                <span class="package__type">Pro Plan</span>
                                                <span class="start">Renews at $5.32/month</span>
                                                <span class="card-plan__price">
                                                    $7.20 <sub>/ mo</sub>
                                                </span>
                                                <div class="card-plan__cartbtn">
                                                    <a href="#" class="btn-premium w-100 justify-content-center">Add to Cart
                                                        <i class="fa-regular fa-cart-shopping"></i></a>
                                                </div>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <!-- tbody -->
                            </table>
                            <div class="accordion accordion-flush" id="rts-accordion1">
                                <div class="accordion-item active">
                                    <div class="accordion-header" id="six">
                                        <h4 class="accordion-button collapse show" data-bs-toggle="collapse"
                                            data-bs-target="#item__six" aria-expanded="false" aria-controls="item__six">
                                            Plan Features
                                        </h4>
                                    </div>
                                    <div id="item__six" class="accordion-collapse collapse collapse show"
                                        aria-labelledby="six" data-bs-parent="#rts-accordion1">
                                        <div class="accordion-body">
                                            <table class="table-bordered">
                                                <!-- thead -->
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            Disk Space
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </th>
                                                        <th>
                                                            20 GB SSD
                                                        </th>
                                                        <th>
                                                            20 GB SSD
                                                        </th>
                                                        <th>
                                                            50 GB SSD
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            File (Inode) Limit
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">300.000</td>
                                                        <td class="package__item">300.000</td>
                                                        <td class="package__item">600.000</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Bandwidth
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">Unmetered</td>
                                                        <td class="package__item">Unmetered</td>
                                                        <td class="package__item">Unmetered</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Hosted Domains
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">4</td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Parked Domains
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Subdomains
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">32</td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Backups
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">Twice a Week</td>
                                                        <td class="package__item">Twice a Week + Autobackup</td>
                                                        <td class="package__item">Twice a Week + Autobackup</td>
                                                    </tr>
                                                </tbody>
                                                <!-- tbody -->
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="seven">
                                        <h4 class="accordion-button collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#item__seven" aria-expanded="false" aria-controls="item__seven">
                                            Email Features
                                        </h4>
                                    </div>
                                    <div id="item__seven" class="accordion-collapse collapse" aria-labelledby="seven"
                                        data-bs-parent="#rts-accordion1">
                                        <div class="accordion-body">
                                            <table class="table-bordered">
                                                <!-- thead -->
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            Disk Space
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </th>
                                                        <th>
                                                            20 GB SSD
                                                        </th>
                                                        <th>
                                                            20 GB SSD
                                                        </th>
                                                        <th>
                                                            50 GB SSD
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            File (Inode) Limit
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">300.000</td>
                                                        <td class="package__item">300.000</td>
                                                        <td class="package__item">600.000</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Bandwidth
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">Unmetered</td>
                                                        <td class="package__item">Unmetered</td>
                                                        <td class="package__item">Unmetered</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Hosted Domains
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">4</td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Parked Domains
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Subdomains
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">32</td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Backups
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">Twice a Week</td>
                                                        <td class="package__item">Twice a Week + Autobackup</td>
                                                        <td class="package__item">Twice a Week + Autobackup</td>
                                                    </tr>
                                                </tbody>
                                                <!-- tbody -->
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="eight">
                                        <h4 class="accordion-button collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#item__eight" aria-expanded="false" aria-controls="item__eight">
                                            Databases Features
                                        </h4>
                                    </div>
                                    <div id="item__eight" class="accordion-collapse collapse" aria-labelledby="eight"
                                        data-bs-parent="#rts-accordion1">
                                        <div class="accordion-body">
                                            <table class="table-bordered">
                                                <!-- thead -->
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            Disk Space
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </th>
                                                        <th>
                                                            20 GB SSD
                                                        </th>
                                                        <th>
                                                            20 GB SSD
                                                        </th>
                                                        <th>
                                                            50 GB SSD
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            File (Inode) Limit
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">300.000</td>
                                                        <td class="package__item">300.000</td>
                                                        <td class="package__item">600.000</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Bandwidth
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">Unmetered</td>
                                                        <td class="package__item">Unmetered</td>
                                                        <td class="package__item">Unmetered</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Hosted Domains
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">4</td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Parked Domains
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Subdomains
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">32</td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Backups
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">Twice a Week</td>
                                                        <td class="package__item">Twice a Week + Autobackup</td>
                                                        <td class="package__item">Twice a Week + Autobackup</td>
                                                    </tr>
                                                </tbody>
                                                <!-- tbody -->
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="nine">
                                        <h4 class="accordion-button collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#item__nine" aria-expanded="false" aria-controls="item__nine">
                                            MySQL Databases
                                        </h4>
                                    </div>
                                    <div id="item__nine" class="accordion-collapse collapse" aria-labelledby="nine"
                                        data-bs-parent="#rts-accordion1">
                                        <div class="accordion-body">
                                            <table class="table-bordered">
                                                <!-- thead -->
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            Disk Space
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </th>
                                                        <th>
                                                            20 GB SSD
                                                        </th>
                                                        <th>
                                                            20 GB SSD
                                                        </th>
                                                        <th>
                                                            50 GB SSD
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            File (Inode) Limit
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">300.000</td>
                                                        <td class="package__item">300.000</td>
                                                        <td class="package__item">600.000</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Bandwidth
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">Unmetered</td>
                                                        <td class="package__item">Unmetered</td>
                                                        <td class="package__item">Unmetered</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Hosted Domains
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">4</td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Parked Domains
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Subdomains
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">32</td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Backups
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">Twice a Week</td>
                                                        <td class="package__item">Twice a Week + Autobackup</td>
                                                        <td class="package__item">Twice a Week + Autobackup</td>
                                                    </tr>
                                                </tbody>
                                                <!-- tbody -->
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="ten">
                                        <h4 class="accordion-button collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#item__ten" aria-expanded="false" aria-controls="item__ten">
                                            Server Features
                                        </h4>
                                    </div>
                                    <div id="item__ten" class="accordion-collapse collapse" aria-labelledby="ten"
                                        data-bs-parent="#rts-accordion1">
                                        <div class="accordion-body">
                                            <table class="table-bordered">
                                                <!-- thead -->
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            Disk Space
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </th>
                                                        <th>
                                                            20 GB SSD
                                                        </th>
                                                        <th>
                                                            20 GB SSD
                                                        </th>
                                                        <th>
                                                            50 GB SSD
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            File (Inode) Limit
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">300.000</td>
                                                        <td class="package__item">300.000</td>
                                                        <td class="package__item">600.000</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Bandwidth
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">Unmetered</td>
                                                        <td class="package__item">Unmetered</td>
                                                        <td class="package__item">Unmetered</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Hosted Domains
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">4</td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Parked Domains
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Subdomains
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">32</td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Backups
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">Twice a Week</td>
                                                        <td class="package__item">Twice a Week + Autobackup</td>
                                                        <td class="package__item">Twice a Week + Autobackup</td>
                                                    </tr>
                                                </tbody>
                                                <!-- tbody -->
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab__content" id="yearly">
                <div class="row">
                    <div class="col-lg-12 p--0 overflow-x-scroll">
                        <div class="rts-plan__table">
                            <table class="table-bordered">
                                <!-- thead -->
                                <thead>
                                    <tr>
                                        <th class="package__left">
                                            <img src="{{ asset('assets/images/pricing/pricing-image.svg') }}" alt="">
                                        </th>
                                        <!-- package one -->
                                        <th class="package__item">
                                            <div class="package__item__info">
                                                <span class="package__type">Basic Plan</span>
                                                <span class="start">Renews at $15.32/yearly</span>
                                                <span class="card-plan__price">
                                                    $17.20 <sub>/ yr</sub>
                                                </span>
                                                <div class="card-plan__cartbtn">
                                                    <a href="#">Get Started</a>
                                                </div>
                                            </div>
                                        </th>
                                        <!-- top-right-corner -->
                                        <th class="package__item">
                                            <!-- table-title-3 -->
                                            <div class="package__item__info">
                                                <span class="package__type">Business Plan</span>
                                                <span class="start">Renews at $15.32/yearly</span>
                                                <span class="card-plan__price">
                                                    $17.20 <sub>/ yr</sub>
                                                </span>
                                                <div class="card-plan__cartbtn">
                                                    <a href="#">Get Started</a>
                                                </div>
                                            </div>
                                        </th>
                                        <!-- top-right-corner -->
                                        <th class="package__item">
                                            <div class="package__item__info">
                                                <span class="package__type">Pro Plan</span>
                                                <span class="start">Renews at $15.32/yearly</span>
                                                <span class="card-plan__price">
                                                    $17.20 <sub>/ yr</sub>
                                                </span>
                                                <div class="card-plan__cartbtn">
                                                    <a href="#">Get Started</a>
                                                </div>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <!-- tbody -->
                            </table>
                            <div class="accordion accordion-flush" id="rts-accordion2">
                                <div class="accordion-item active">
                                    <div class="accordion-header" id="eleven">
                                        <h4 class="accordion-button collapse show" data-bs-toggle="collapse"
                                            data-bs-target="#item__eleven" aria-expanded="false"
                                            aria-controls="item__eleven">
                                            Plan Features
                                        </h4>
                                    </div>
                                    <div id="item__eleven" class="accordion-collapse collapse collapse show"
                                        aria-labelledby="eleven" data-bs-parent="#rts-accordion2">
                                        <div class="accordion-body">
                                            <table class="table-bordered">
                                                <!-- thead -->
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            Disk Space
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </th>
                                                        <th>
                                                            20 GB SSD
                                                        </th>
                                                        <th>
                                                            20 GB SSD
                                                        </th>
                                                        <th>
                                                            50 GB SSD
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            File (Inode) Limit
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">300.000</td>
                                                        <td class="package__item">300.000</td>
                                                        <td class="package__item">600.000</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Bandwidth
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">Unmetered</td>
                                                        <td class="package__item">Unmetered</td>
                                                        <td class="package__item">Unmetered</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Hosted Domains
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">4</td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Parked Domains
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Subdomains
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">32</td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Backups
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">Twice a Week</td>
                                                        <td class="package__item">Twice a Week + Autobackup</td>
                                                        <td class="package__item">Twice a Week + Autobackup</td>
                                                    </tr>
                                                </tbody>
                                                <!-- tbody -->
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="twelve">
                                        <h4 class="accordion-button collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#item__twelve" aria-expanded="false"
                                            aria-controls="item__twelve">
                                            Email Features
                                        </h4>
                                    </div>
                                    <div id="item__twelve" class="accordion-collapse collapse" aria-labelledby="twelve"
                                        data-bs-parent="#rts-accordion2">
                                        <div class="accordion-body">
                                            <table class="table-bordered">
                                                <!-- thead -->
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            Disk Space
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </th>
                                                        <th>
                                                            20 GB SSD
                                                        </th>
                                                        <th>
                                                            20 GB SSD
                                                        </th>
                                                        <th>
                                                            50 GB SSD
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            File (Inode) Limit
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">300.000</td>
                                                        <td class="package__item">300.000</td>
                                                        <td class="package__item">600.000</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Bandwidth
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">Unmetered</td>
                                                        <td class="package__item">Unmetered</td>
                                                        <td class="package__item">Unmetered</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Hosted Domains
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">4</td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Parked Domains
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Subdomains
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">32</td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Backups
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">Twice a Week</td>
                                                        <td class="package__item">Twice a Week + Autobackup</td>
                                                        <td class="package__item">Twice a Week + Autobackup</td>
                                                    </tr>
                                                </tbody>
                                                <!-- tbody -->
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="thirteen">
                                        <h4 class="accordion-button collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#item__thirteen" aria-expanded="false"
                                            aria-controls="item__thirteen">
                                            Databases Features
                                        </h4>
                                    </div>
                                    <div id="item__thirteen" class="accordion-collapse collapse" aria-labelledby="thirteen"
                                        data-bs-parent="#rts-accordion2">
                                        <div class="accordion-body">
                                            <table class="table-bordered">
                                                <!-- thead -->
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            Disk Space
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </th>
                                                        <th>
                                                            20 GB SSD
                                                        </th>
                                                        <th>
                                                            20 GB SSD
                                                        </th>
                                                        <th>
                                                            50 GB SSD
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            File (Inode) Limit
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">300.000</td>
                                                        <td class="package__item">300.000</td>
                                                        <td class="package__item">600.000</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Bandwidth
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">Unmetered</td>
                                                        <td class="package__item">Unmetered</td>
                                                        <td class="package__item">Unmetered</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Hosted Domains
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">4</td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Parked Domains
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Subdomains
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">32</td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Backups
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">Twice a Week</td>
                                                        <td class="package__item">Twice a Week + Autobackup</td>
                                                        <td class="package__item">Twice a Week + Autobackup</td>
                                                    </tr>
                                                </tbody>
                                                <!-- tbody -->
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <div class="accordion-header" id="fourteen">
                                        <h4 class="accordion-button collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#item__fourteen" aria-expanded="false"
                                            aria-controls="item__fourteen">
                                            MySQL Databases
                                        </h4>
                                    </div>
                                    <div id="item__fourteen" class="accordion-collapse collapse" aria-labelledby="fourteen"
                                        data-bs-parent="#rts-accordion2">
                                        <div class="accordion-body">
                                            <table class="table-bordered">
                                                <!-- thead -->
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            Disk Space
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </th>
                                                        <th>
                                                            20 GB SSD
                                                        </th>
                                                        <th>
                                                            20 GB SSD
                                                        </th>
                                                        <th>
                                                            50 GB SSD
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            File (Inode) Limit
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">300.000</td>
                                                        <td class="package__item">300.000</td>
                                                        <td class="package__item">600.000</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Bandwidth
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">Unmetered</td>
                                                        <td class="package__item">Unmetered</td>
                                                        <td class="package__item">Unmetered</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Hosted Domains
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">4</td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Parked Domains
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Subdomains
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">32</td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Backups
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">Twice a Week</td>
                                                        <td class="package__item">Twice a Week + Autobackup</td>
                                                        <td class="package__item">Twice a Week + Autobackup</td>
                                                    </tr>
                                                </tbody>
                                                <!-- tbody -->
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="fifteen">
                                        <h4 class="accordion-button collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#item__fifteen" aria-expanded="false"
                                            aria-controls="item__fifteen">
                                            Server Features
                                        </h4>
                                    </div>
                                    <div id="item__fifteen" class="accordion-collapse collapse" aria-labelledby="fifteen"
                                        data-bs-parent="#rts-accordion2">
                                        <div class="accordion-body">
                                            <table class="table-bordered">
                                                <!-- thead -->
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            Disk Space
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </th>
                                                        <th>
                                                            20 GB SSD
                                                        </th>
                                                        <th>
                                                            20 GB SSD
                                                        </th>
                                                        <th>
                                                            50 GB SSD
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            File (Inode) Limit
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">300.000</td>
                                                        <td class="package__item">300.000</td>
                                                        <td class="package__item">600.000</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Bandwidth
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">Unmetered</td>
                                                        <td class="package__item">Unmetered</td>
                                                        <td class="package__item">Unmetered</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Hosted Domains
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">4</td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Parked Domains
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Subdomains
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">32</td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Backups
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">Twice a Week</td>
                                                        <td class="package__item">Twice a Week + Autobackup</td>
                                                        <td class="package__item">Twice a Week + Autobackup</td>
                                                    </tr>
                                                </tbody>
                                                <!-- tbody -->
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab__content" id="3year">
                <div class="row">
                    <div class="col-lg-12 p--0 overflow-x-scroll">
                        <div class="rts-plan__table">
                            <table class="table-bordered">
                                <!-- thead -->
                                <thead>
                                    <tr>
                                        <th class="package__left">
                                            <img src="{{ asset('assets/images/pricing/pricing-image.svg') }}" alt="">
                                        </th>
                                        <!-- package one -->
                                        <th class="package__item">
                                            <div class="package__item__info">
                                                <span class="package__type">Basic Plan</span>
                                                <span class="start">Renews at $35.32/3yr</span>
                                                <span class="card-plan__price">
                                                    $37.20 <sub>/ 3yr</sub>
                                                </span>
                                                <div class="card-plan__cartbtn">
                                                    <a href="#">Get Started</a>
                                                </div>
                                            </div>
                                        </th>
                                        <!-- top-right-corner -->
                                        <th class="package__item">
                                            <!-- table-title-3 -->
                                            <div class="package__item__info">
                                                <span class="package__type">Business Plan</span>
                                                <span class="start">Renews at $35.32/3yr</span>
                                                <span class="card-plan__price">
                                                    $37.20 <sub>/ 3yr</sub>
                                                </span>
                                                <div class="card-plan__cartbtn">
                                                    <a href="#">Get Started</a>
                                                </div>
                                            </div>
                                        </th>
                                        <!-- top-right-corner -->
                                        <th class="package__item">
                                            <div class="package__item__info">
                                                <span class="package__type">Pro Plan</span>
                                                <span class="start">Renews at $35.32/3yr</span>
                                                <span class="card-plan__price">
                                                    $37.20 <sub>/ 3yr</sub>
                                                </span>
                                                <div class="card-plan__cartbtn">
                                                    <a href="#">Get Started</a>
                                                </div>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <!-- tbody -->
                            </table>
                            <div class="accordion accordion-flush" id="rts-accordion3">
                                <div class="accordion-item active">
                                    <div class="accordion-header" id="sixteen">
                                        <h4 class="accordion-button collapse show" data-bs-toggle="collapse"
                                            data-bs-target="#item__sixteen" aria-expanded="false"
                                            aria-controls="item__sixteen">
                                            Plan Features
                                        </h4>
                                    </div>
                                    <div id="item__sixteen" class="accordion-collapse collapse collapse show"
                                        aria-labelledby="sixteen" data-bs-parent="#rts-accordion3">
                                        <div class="accordion-body">
                                            <table class="table-bordered">
                                                <!-- thead -->
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            Disk Space
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </th>
                                                        <th>
                                                            20 GB SSD
                                                        </th>
                                                        <th>
                                                            20 GB SSD
                                                        </th>
                                                        <th>
                                                            50 GB SSD
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            File (Inode) Limit
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">300.000</td>
                                                        <td class="package__item">300.000</td>
                                                        <td class="package__item">600.000</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Bandwidth
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">Unmetered</td>
                                                        <td class="package__item">Unmetered</td>
                                                        <td class="package__item">Unmetered</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Hosted Domains
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">4</td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Parked Domains
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Subdomains
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">32</td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Backups
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">Twice a Week</td>
                                                        <td class="package__item">Twice a Week + Autobackup</td>
                                                        <td class="package__item">Twice a Week + Autobackup</td>
                                                    </tr>
                                                </tbody>
                                                <!-- tbody -->
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="seventeen">
                                        <h4 class="accordion-button collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#item__seventeen" aria-expanded="false"
                                            aria-controls="item__seventeen">
                                            Email Features
                                        </h4>
                                    </div>
                                    <div id="item__seventeen" class="accordion-collapse collapse"
                                        aria-labelledby="seventeen" data-bs-parent="#rts-accordion3">
                                        <div class="accordion-body">
                                            <table class="table-bordered">
                                                <!-- thead -->
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            Disk Space
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </th>
                                                        <th>
                                                            20 GB SSD
                                                        </th>
                                                        <th>
                                                            20 GB SSD
                                                        </th>
                                                        <th>
                                                            50 GB SSD
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            File (Inode) Limit
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">300.000</td>
                                                        <td class="package__item">300.000</td>
                                                        <td class="package__item">600.000</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Bandwidth
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">Unmetered</td>
                                                        <td class="package__item">Unmetered</td>
                                                        <td class="package__item">Unmetered</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Hosted Domains
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">4</td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Parked Domains
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Subdomains
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">32</td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Backups
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">Twice a Week</td>
                                                        <td class="package__item">Twice a Week + Autobackup</td>
                                                        <td class="package__item">Twice a Week + Autobackup</td>
                                                    </tr>
                                                </tbody>
                                                <!-- tbody -->
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="eighteen">
                                        <h4 class="accordion-button collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#item__eighteen" aria-expanded="false"
                                            aria-controls="item__eighteen">
                                            Databases Features
                                        </h4>
                                    </div>
                                    <div id="item__eighteen" class="accordion-collapse collapse" aria-labelledby="eighteen"
                                        data-bs-parent="#rts-accordion3">
                                        <div class="accordion-body">
                                            <table class="table-bordered">
                                                <!-- thead -->
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            Disk Space
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </th>
                                                        <th>
                                                            20 GB SSD
                                                        </th>
                                                        <th>
                                                            20 GB SSD
                                                        </th>
                                                        <th>
                                                            50 GB SSD
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            File (Inode) Limit
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">300.000</td>
                                                        <td class="package__item">300.000</td>
                                                        <td class="package__item">600.000</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Bandwidth
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">Unmetered</td>
                                                        <td class="package__item">Unmetered</td>
                                                        <td class="package__item">Unmetered</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Hosted Domains
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">4</td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Parked Domains
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Subdomains
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">32</td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Backups
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">Twice a Week</td>
                                                        <td class="package__item">Twice a Week + Autobackup</td>
                                                        <td class="package__item">Twice a Week + Autobackup</td>
                                                    </tr>
                                                </tbody>
                                                <!-- tbody -->
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <div class="accordion-header" id="nineteen">
                                        <h4 class="accordion-button collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#item__nineteen" aria-expanded="false"
                                            aria-controls="item__nineteen">
                                            MySQL Databases
                                        </h4>
                                    </div>
                                    <div id="item__nineteen" class="accordion-collapse collapse" aria-labelledby="nineteen"
                                        data-bs-parent="#rts-accordion3">
                                        <div class="accordion-body">
                                            <table class="table-bordered">
                                                <!-- thead -->
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            Disk Space
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </th>
                                                        <th>
                                                            20 GB SSD
                                                        </th>
                                                        <th>
                                                            20 GB SSD
                                                        </th>
                                                        <th>
                                                            50 GB SSD
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            File (Inode) Limit
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">300.000</td>
                                                        <td class="package__item">300.000</td>
                                                        <td class="package__item">600.000</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Bandwidth
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">Unmetered</td>
                                                        <td class="package__item">Unmetered</td>
                                                        <td class="package__item">Unmetered</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Hosted Domains
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">4</td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Parked Domains
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Subdomains
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">32</td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Backups
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">Twice a Week</td>
                                                        <td class="package__item">Twice a Week + Autobackup</td>
                                                        <td class="package__item">Twice a Week + Autobackup</td>
                                                    </tr>
                                                </tbody>
                                                <!-- tbody -->
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="twenty">
                                        <h4 class="accordion-button collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#item__twenty" aria-expanded="false"
                                            aria-controls="item__twenty">
                                            Server Features
                                        </h4>
                                    </div>
                                    <div id="item__twenty" class="accordion-collapse collapse" aria-labelledby="twenty"
                                        data-bs-parent="#rts-accordion3">
                                        <div class="accordion-body">
                                            <table class="table-bordered">
                                                <!-- thead -->
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            Disk Space
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </th>
                                                        <th>
                                                            20 GB SSD
                                                        </th>
                                                        <th>
                                                            20 GB SSD
                                                        </th>
                                                        <th>
                                                            50 GB SSD
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            File (Inode) Limit
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">300.000</td>
                                                        <td class="package__item">300.000</td>
                                                        <td class="package__item">600.000</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Bandwidth
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">Unmetered</td>
                                                        <td class="package__item">Unmetered</td>
                                                        <td class="package__item">Unmetered</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Hosted Domains
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">4</td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Parked Domains
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Subdomains
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">32</td>
                                                        <td class="package__item">Unlimited</td>
                                                        <td class="package__item">Unlimited</td>
                                                    </tr>
                                                    <tr data-filter="hardware" class="">
                                                        <td class="package__left">
                                                            Backups
                                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                                data-bs-placement="bottom"
                                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                                    class="fa-light fa-circle-question"></i></span>
                                                        </td>
                                                        <td class="package__item">Twice a Week</td>
                                                        <td class="package__item">Twice a Week + Autobackup</td>
                                                        <td class="package__item">Twice a Week + Autobackup</td>
                                                    </tr>
                                                </tbody>
                                                <!-- tbody -->
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HOSTING PLAN END -->

    <!-- TakeItCloudy FEATURE AREA -->
    <section class="rts-feature section__padding body-bg-2">
        <div class="container">
            <div class="row">
                <div class="rts-section text-center">
                    <h2 class="rts-section__title">Why TakeItCloudy</h2>
                </div>
            </div>
            <div class="row gy-30">
                <div class="col-xl-3 col-lg-6">
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
                <div class="col-xl-3 col-lg-6">
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
                <div class="col-xl-3 col-lg-6">
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
                <div class="col-xl-3 col-lg-6">
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
                        </div>
                        <!-- pagination dot -->
                        <div class="rts-dot__button slider-center"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TESTIMONIAL END -->

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
                    <div class="col-xl-4 col-lg-6 col-md-6">
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
                    <div class="col-xl-4 col-lg-6 col-md-6">
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
                    <div class="col-xl-4 col-lg-6 col-md-6">
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

@endsection