@extends('layout.layout')

@php
    $breadcrumb = 'false';
@endphp

@section('content')

    <!-- HERO BANNER -->
    <div class="hero__banner banner__background-3">
        <div class="container">
            <div class="row">
                <div class="hero__banner__wrapper banner-five d-flex flex-wrap flex-lg-nowrap gap-5 gap-lg-0 
                    align-items-center justify-content-between">

                    <!-- banner content -->
                    <div class="hero__banner__content4">
                        <h6 class="mb-0">
                            Up to 75% off Web Hosting
                        </h6>
                        <h1 class="heading">
                            High-Performance Dedicated Server
                        </h1>
                        <p class="price-area">From <span>$3.99</span>/mo. Regular $17.99/mo. excl. VAT</p>
                        <div class="countdown">
                            <div class="countDown">10/12/2025 10:20:00</div>
                        </div>
                        <div class="banner-btn">
                            <a href="{{ route('pricing') }}" class="rts-btn btn__long primary__btn secondary__color">Get a
                                Quote <i class="fa-regular fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <!-- banner content end -->
                    <!-- banner image -->
                    <div class="hero__banner__image start-5 position-relative d-flex align-items-end">
                        <figure class="banner__image ">
                            <img src="{{ asset('assets/images/banner/banner-hero-03.webp') }}" width="733" alt="">
                        </figure>
                    </div>
                    <!-- banner image end -->
                </div>
            </div>
        </div>
    </div>
    <!-- HERO BANNER END -->

    <!-- BRAND AREA -->
    <div class="rts-brand rts-brand__bg--section pt--100 pb--120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rts-brand__wrapper">
                        <div class="rts-brand__wrapper--text">
                            <h5>Hosting solutions
                                trusted by the owners of <span>2,800,000</span> domains.</h5>
                            <div class="rts-brand__wrapper--text-review">
                                <div class="review">
                                    <div class="star">Excellent <img
                                            src="{{ asset('assets/images/brand/review-star.svg') }}" alt="">
                                    </div>
                                </div>
                                <div class="review__company">
                                    954 reviews on <img src="{{ asset('assets/images/brand/trust-pilot.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="rts-brand__slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="rts-brand__slider--single">
                                        <a href="#" aria-label="brand-link"><img
                                                src="{{ asset('assets/images/brand/01.svg') }}" alt=""></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="rts-brand__slider--single">
                                        <a href="#" aria-label="brand-link"><img
                                                src="{{ asset('assets/images/brand/02.svg') }}" alt=""></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="rts-brand__slider--single">
                                        <a href="#" aria-label="brand-link"><img
                                                src="{{ asset('assets/images/brand/03.svg') }}" alt=""></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="rts-brand__slider--single">
                                        <a href="#" aria-label="brand-link"><img
                                                src="{{ asset('assets/images/brand/04.svg') }}" alt=""></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="rts-brand__slider--single">
                                        <a href="#" aria-label="brand-link"><img
                                                src="{{ asset('assets/images/brand/05.svg') }}" alt=""></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="rts-brand__slider--single">
                                        <a href="#" aria-label="brand-link"><img
                                                src="{{ asset('assets/images/brand/06.svg') }}" alt=""></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="rts-brand__slider--single">
                                        <a href="#" aria-label="brand-link"> <img
                                                src="{{ asset('assets/images/brand/07.svg') }}" alt=""></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="rts-brand__slider--single">
                                        <a href="#" aria-label="brand-link"><img
                                                src="{{ asset('assets/images/brand/08.svg') }}" alt=""></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="rts-brand__slider--single">
                                        <a href="#" aria-label="brand-link"><img
                                                src="{{ asset('assets/images/brand/01.svg') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BRAND AREA END-->

    <!-- PRICING PLAN START -->
    <div class="rts-pricing-plan pricing-plan-2 pb--120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="rts-section text-center">
                    <h2 class="rts-section__title">Choose Your Plan</h2>
                </div>
            </div>
            <div class="section-inner">
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
                <!-- PRICING PLAN -->
                <div class="tab__content open" id="monthly">
                    <div class="row g-30 monthly">
                        <!-- single card -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card-plan">
                                <div class="card-plan__package">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/pricing/01.svg') }}" height="60" width="60"
                                            alt="">
                                    </div>
                                    <h4 class="package__name">Basic Plan</h4>
                                </div>

                                <p class="card-plan__desc">Renews at $5.32/month</p>

                                <h5 class="card-plan__price">
                                    $3.29 <sub>/ mo</sub>
                                </h5>
                                <div class="card-plan__cartbtn">
                                    <a href="#">Get Started</a>
                                </div>
                                <div class="card-plan__feature">
                                    <ul class="card-plan__feature--list">
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pricing/05.svg') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6 class="title">SSD Storage</h6>
                                                <p>10 GB SSD Storage</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pricing/06.svg') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6 class="title">SSL Certificate</h6>
                                                <p>Free SSL Certificate</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pricing/07.svg') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6 class="title">Backups</h6>
                                                <p>Daily Backups</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pricing/08.svg') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6 class="title">IP Address</h6>
                                                <p>Dedicated IP Address</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- single card end -->
                        <!-- single card -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card-plan active">
                                <div class="card-plan__package">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/pricing/02.svg') }}" height="60" width="60"
                                            alt="">
                                    </div>
                                    <h4 class="package__name">Pro SSD</h4>
                                </div>
                                <p class="card-plan__desc">Renews at $5.32/month</p>
                                <h5 class="card-plan__price">
                                    $7.20 <sub>/ mo</sub>
                                </h5>
                                <div class="card-plan__cartbtn">
                                    <a href="#">Get Started</a>
                                </div>
                                <div class="card-plan__feature">
                                    <ul class="card-plan__feature--list">
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pricing/05.svg') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6 class="title">SSD Storage</h6>
                                                <p>50 GB SSD Storage</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pricing/06.svg') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6 class="title">SSL Certificate</h6>
                                                <p>Free SSL Certificate</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pricing/07.svg') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6 class="title">Backups</h6>
                                                <p>Daily Backups</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pricing/08.svg') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6 class="title">IP Address</h6>
                                                <p>Dedicated IP Address</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- single card end -->
                        <!-- single card -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card-plan">
                                <div class="card-plan__package">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/pricing/03.svg') }}" height="60" width="60"
                                            alt="">
                                    </div>
                                    <h4 class="package__name">Basic Plan</h4>
                                </div>

                                <p class="card-plan__desc">Renews at $5.32/month</p>

                                <h5 class="card-plan__price">
                                    $17.63 <sub>/ mo</sub>
                                </h5>
                                <div class="card-plan__cartbtn">
                                    <a href="#">Get Started</a>
                                </div>
                                <div class="card-plan__feature">
                                    <ul class="card-plan__feature--list">
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pricing/05.svg') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6 class="title">SSD Storage</h6>
                                                <p>Unlimited SSD Storage</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pricing/06.svg') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6 class="title">SSL Certificate</h6>
                                                <p>Free SSL Certificate</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pricing/07.svg') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6 class="title">Backups</h6>
                                                <p>Daily Backups</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pricing/08.svg') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6 class="title">24/7 Priority Support</h6>
                                                <p>24/7 Priority Support</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- single card end -->
                        <!-- single card -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card-plan">
                                <div class="card-plan__package">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/pricing/04.svg') }}" height="60" width="60"
                                            alt="">
                                    </div>
                                    <h4 class="package__name">Basic Plan</h4>
                                </div>

                                <p class="card-plan__desc">Renews at $5.32/month</p>

                                <h5 class="card-plan__price">
                                    $11.20 <sub>/ mo</sub>
                                </h5>
                                <div class="card-plan__cartbtn">
                                    <a href="#">Get Started</a>
                                </div>
                                <div class="card-plan__feature">
                                    <ul class="card-plan__feature--list">
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pricing/05.svg') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6 class="title">SSD Storage</h6>
                                                <p>40 GB SSD Storage</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pricing/06.svg') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6 class="title">SSL Certificate</h6>
                                                <p>Free SSL Certificate</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pricing/07.svg') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6 class="title">Backups</h6>
                                                <p>Daily Backups</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pricing/08.svg') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6 class="title">IP Address</h6>
                                                <p>Dedicated IP Address</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- single card end -->
                    </div>
                </div>

                <!-- PRICING PLAN -->
                <div class="tab__content" id="yearly">
                    <div class="row g-30 yearly">
                        <!-- single card -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card-plan">
                                <div class="card-plan__package">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/pricing/01.svg') }}" height="60" width="60"
                                            alt="">
                                    </div>
                                    <h4 class="package__name">Basic Plan</h4>
                                </div>

                                <p class="card-plan__desc">Renews at $5.32/month</p>

                                <h5 class="card-plan__price">
                                    $5.29 <sub>/ yr</sub>
                                </h5>
                                <div class="card-plan__cartbtn">
                                    <a href="#">Get Started</a>
                                </div>
                                <div class="card-plan__feature">
                                    <ul class="card-plan__feature--list">
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pricing/05.svg') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6 class="title">SSD Storage</h6>
                                                <p>10 GB SSD Storage</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pricing/06.svg') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6 class="title">SSL Certificate</h6>
                                                <p>Free SSL Certificate</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pricing/07.svg') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6 class="title">Backups</h6>
                                                <p>Daily Backups</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pricing/08.svg') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6 class="title">IP Address</h6>
                                                <p>Dedicated IP Address</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- single card end -->
                        <!-- single card -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card-plan active">
                                <div class="card-plan__package">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/pricing/02.svg') }}" height="60" width="60"
                                            alt="">
                                    </div>
                                    <h4 class="package__name">Pro SSD</h4>
                                </div>
                                <p class="card-plan__desc">Renews at $5.32/month</p>
                                <h5 class="card-plan__price">
                                    $12.20 <sub>/ mo</sub>
                                </h5>
                                <div class="card-plan__cartbtn">
                                    <a href="#">Get Started</a>
                                </div>
                                <div class="card-plan__feature">
                                    <ul class="card-plan__feature--list">
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pricing/05.svg') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6 class="title">SSD Storage</h6>
                                                <p>10 GB SSD Storage</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pricing/06.svg') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6 class="title">SSL Certificate</h6>
                                                <p>Free SSL Certificate</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pricing/07.svg') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6 class="title">Backups</h6>
                                                <p>Daily Backups</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pricing/08.svg') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6 class="title">IP Address</h6>
                                                <p>Dedicated IP Address</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- single card end -->
                        <!-- single card -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card-plan">
                                <div class="card-plan__package">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/pricing/03.svg') }}" height="60" width="60"
                                            alt="">
                                    </div>
                                    <h4 class="package__name">Basic Plan</h4>
                                </div>

                                <p class="card-plan__desc">Renews at $5.32/month</p>

                                <h5 class="card-plan__price">
                                    $32.63 <sub>/ yr</sub>
                                </h5>
                                <div class="card-plan__cartbtn">
                                    <a href="#">Get Started</a>
                                </div>
                                <div class="card-plan__feature">
                                    <ul class="card-plan__feature--list">
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pricing/05.svg') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6 class="title">SSD Storage</h6>
                                                <p>10 GB SSD Storage</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pricing/06.svg') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6 class="title">SSL Certificate</h6>
                                                <p>Free SSL Certificate</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pricing/07.svg') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6 class="title">Backups</h6>
                                                <p>Daily Backups</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pricing/08.svg') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6 class="title">IP Address</h6>
                                                <p>Dedicated IP Address</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- single card end -->
                        <!-- single card -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card-plan">
                                <div class="card-plan__package">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/pricing/04.svg') }}" height="60" width="60"
                                            alt="">
                                    </div>
                                    <h4 class="package__name">Basic Plan</h4>
                                </div>

                                <p class="card-plan__desc">Renews at $5.32/month</p>

                                <h5 class="card-plan__price">
                                    $20.40 <sub>/ yr</sub>
                                </h5>
                                <div class="card-plan__cartbtn">
                                    <a href="#">Get Started</a>
                                </div>
                                <div class="card-plan__feature">
                                    <ul class="card-plan__feature--list">
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pricing/05.svg') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6 class="title">SSD Storage</h6>
                                                <p>10 GB SSD Storage</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pricing/06.svg') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6 class="title">SSL Certificate</h6>
                                                <p>Free SSL Certificate</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pricing/07.svg') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6 class="title">Backups</h6>
                                                <p>Daily Backups</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pricing/08.svg') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6 class="title">IP Address</h6>
                                                <p>Dedicated IP Address</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- single card end -->
                    </div>
                </div>
                <!-- PRICING PLAN -->
                <div class="tab__content" id="3year">
                    <div class="row g-30 3year">
                        <!-- single card -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card-plan">
                                <div class="card-plan__package">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/pricing/01.svg') }}" height="60" width="60"
                                            alt="">
                                    </div>
                                    <h4 class="package__name">Basic Plan</h4>
                                </div>

                                <p class="card-plan__desc">Renews at $5.32/month</p>

                                <h5 class="card-plan__price">
                                    $8.29 <sub>/ 3yr</sub>
                                </h5>
                                <div class="card-plan__cartbtn">
                                    <a href="#">Get Started</a>
                                </div>
                                <div class="card-plan__feature">
                                    <ul class="card-plan__feature--list">
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pricing/05.svg') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6 class="title">SSD Storage</h6>
                                                <p>10 GB SSD Storage</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pricing/06.svg') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6 class="title">SSL Certificate</h6>
                                                <p>Free SSL Certificate</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pricing/07.svg') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6 class="title">Backups</h6>
                                                <p>Daily Backups</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pricing/08.svg') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6 class="title">IP Address</h6>
                                                <p>Dedicated IP Address</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- single card end -->
                        <!-- single card -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card-plan active">
                                <div class="card-plan__package">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/pricing/02.svg') }}" height="60" width="60"
                                            alt="">
                                    </div>
                                    <h4 class="package__name">Pro SSD</h4>
                                </div>
                                <p class="card-plan__desc">Renews at $5.32/month</p>
                                <h5 class="card-plan__price">
                                    $20.30 <sub>/ 3yr</sub>
                                </h5>
                                <div class="card-plan__cartbtn">
                                    <a href="#">Get Started</a>
                                </div>
                                <div class="card-plan__feature">
                                    <ul class="card-plan__feature--list">
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pricing/05.svg') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6 class="title">SSD Storage</h6>
                                                <p>10 GB SSD Storage</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pricing/06.svg') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6 class="title">SSL Certificate</h6>
                                                <p>Free SSL Certificate</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pricing/07.svg') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6 class="title">Backups</h6>
                                                <p>Daily Backups</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pricing/08.svg') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6 class="title">IP Address</h6>
                                                <p>Dedicated IP Address</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- single card end -->
                        <!-- single card -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card-plan">
                                <div class="card-plan__package">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/pricing/03.svg') }}" height="60" width="60"
                                            alt="">
                                    </div>
                                    <h4 class="package__name">Basic Plan</h4>
                                </div>

                                <p class="card-plan__desc">Renews at $5.32/month</p>

                                <h5 class="card-plan__price">
                                    $50.63 <sub>/ 3yr</sub>
                                </h5>
                                <div class="card-plan__cartbtn">
                                    <a href="#">Get Started</a>
                                </div>
                                <div class="card-plan__feature">
                                    <ul class="card-plan__feature--list">
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pricing/05.svg') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6 class="title">SSD Storage</h6>
                                                <p>10 GB SSD Storage</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pricing/06.svg') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6 class="title">SSL Certificate</h6>
                                                <p>Free SSL Certificate</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pricing/07.svg') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6 class="title">Backups</h6>
                                                <p>Daily Backups</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pricing/08.svg') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6 class="title">IP Address</h6>
                                                <p>Dedicated IP Address</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- single card end -->
                        <!-- single card -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card-plan">
                                <div class="card-plan__package">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/pricing/04.svg') }}" height="60" width="60"
                                            alt="">
                                    </div>
                                    <h4 class="package__name">Basic Plan</h4>
                                </div>

                                <p class="card-plan__desc">Renews at $5.32/month</p>

                                <h5 class="card-plan__price">
                                    $30.20 <sub>/ 3yr</sub>
                                </h5>
                                <div class="card-plan__cartbtn">
                                    <a href="#">Get Started</a>
                                </div>
                                <div class="card-plan__feature">
                                    <ul class="card-plan__feature--list">
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pricing/05.svg') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6 class="title">SSD Storage</h6>
                                                <p>10 GB SSD Storage</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pricing/06.svg') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6 class="title">SSL Certificate</h6>
                                                <p>Free SSL Certificate</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pricing/07.svg') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6 class="title">Backups</h6>
                                                <p>Daily Backups</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="{{ asset('assets/images/pricing/08.svg') }}" alt="">
                                            </div>
                                            <div class="text">
                                                <h6 class="title">IP Address</h6>
                                                <p>Dedicated IP Address</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- single card end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PRICING PLAN START END -->

    <!-- HOSTING OPTION -->
    <div class="rts-hosting-type body-bg-2 pt--120 pb--120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row justify-content-center">
                        <div class="section-title-area text-center">
                            <h2 class="section-title">We Provide Hosting Solution</h2>
                            <p class="desc">Select your solution and we will help you narrow down our best <br> high-speed
                                options to fit your needs.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- hosting option -->
            <div class="row mt--60">
                <div class="col-lg-12">
                    <div class="rts-hosting-inner">
                        <div class="row g-5">
                            <!-- single package -->
                            <div class="col-lg-4 col-md-6">
                                <div class="rts-hosting-type__single">
                                    <div class="hosting-icon">
                                        <img src="{{ asset('assets/images/hosting/01.svg') }}" alt="">
                                    </div>
                                    <a href="{{ route('sharedHosting') }}" class="title">Shared Hosting</a>
                                    <p class="excerpt">The most popular hosting plan available and comes at one of the most.
                                    </p>
                                    <a href="{{ route('sharedHosting') }}" class="primary__btn border__btn">View Details <i
                                            class="fa-regular fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <!-- single package end -->
                            <!-- single package -->
                            <div class="col-lg-4 col-md-6">
                                <div class="rts-hosting-type__single">
                                    <div class="hosting-icon">
                                        <img src="{{ asset('assets/images/hosting/02.svg') }}" alt="">
                                    </div>
                                    <a href="{{ route('wordpressHosting') }}" class="title">WordPress Hosting</a>
                                    <p class="excerpt">WordPress Hosting gives you speed and performance with a full of
                                        features.</p>
                                    <a href="{{ route('wordpressHosting') }}" class="primary__btn border__btn">View Details
                                        <i class="fa-regular fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <!-- single package end -->
                            <!-- single package -->
                            <div class="col-lg-4 col-md-6">
                                <div class="rts-hosting-type__single">
                                    <div class="hosting-icon">
                                        <img src="{{ asset('assets/images/hosting/03.svg') }}" alt="">
                                    </div>
                                    <a href="{{ route('cloudHosting') }}" class="title">Cloud Hosting</a>
                                    <p class="excerpt">Earn additional revenue or support your customers with easy-to-use
                                        reseller.</p>
                                    <a href="{{ route('cloudHosting') }}" class="primary__btn border__btn">View Details <i
                                            class="fa-regular fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <!-- single package end -->
                            <!-- single package -->
                            <div class="col-lg-4 col-md-6">
                                <div class="rts-hosting-type__single">
                                    <div class="hosting-icon">
                                        <img src="{{ asset('assets/images/hosting/04.svg') }}" alt="">
                                    </div>
                                    <a href="{{ route('resellerHosting') }}" class="title">Reseller Hosting</a>
                                    <p class="excerpt">Earn additional revenue or support your customers with easy-to-use
                                        reseller.</p>
                                    <a href="{{ route('resellerHosting') }}" class="primary__btn border__btn">View Details
                                        <i class="fa-regular fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <!-- single package end -->
                            <!-- single package -->
                            <div class="col-lg-4 col-md-6">
                                <div class="rts-hosting-type__single">
                                    <div class="hosting-icon">
                                        <img src="{{ asset('assets/images/hosting/05.svg') }}" alt="">
                                    </div>
                                    <a href="{{ route('dedicatedHosting') }}" class="title">Dedicated Hosting</a>
                                    <p class="excerpt">Hosting that gives you tools you need to run your website portions
                                        business.</p>
                                    <a href="{{ route('dedicatedHosting') }}" class="primary__btn border__btn">View Details
                                        <i class="fa-regular fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <!-- single package end -->
                            <!-- single package -->
                            <div class="col-lg-4 col-md-6">
                                <div class="rts-hosting-type__single">
                                    <div class="hosting-icon">
                                        <img src="{{ asset('assets/images/hosting/06.svg') }}" alt="">
                                    </div>
                                    <a href="{{ route('vpsHosting') }}" class="title">VPS Hosting</a>
                                    <p class="excerpt">Dedicated resources, increased reliability, with two levels
                                        management options.</p>
                                    <a href="{{ route('vpsHosting') }}" class="primary__btn border__btn">View Details <i
                                            class="fa-regular fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <!-- single package end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- HOSTING OPTION END -->

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
                    <h2 class="rts-section__title">Here's why you'll love hosting with Elitehost</h2>
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
                            <img class="blog__thumb" src="{{ asset('assets/images/blog/blog-1.webp') }}"
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
                            <img class="blog__thumb" src="{{ asset('assets/images/blog/blog-2.webp') }}"
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
                            <img class="blog__thumb" src="{{ asset('assets/images/blog/blog-3.webp') }}"
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
                                <div id="item__one" class="accordion-collapse collapse show" aria-labelledby="first"
                                    data-bs-parent="#rts-accordion">
                                    <div class="accordion-body">
                                        Above all else, we strive to deliver outstanding customer experiences. When you buy
                                        a domain name from TakeItCloudy, we guarantee it will be handed over.
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
                                        Above all else, we strive to deliver outstanding customer experiences. When you buy
                                        a domain name from TakeItCloudy, we guarantee it will be handed over.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" id="three">
                                    <h4 class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#item__three" aria-expanded="false" aria-controls="item__three">
                                        Why is domain name registration required?
                                    </h4>
                                </div>
                                <div id="item__three" class="accordion-collapse collapse" aria-labelledby="three"
                                    data-bs-parent="#rts-accordion">
                                    <div class="accordion-body">
                                        Above all else, we strive to deliver outstanding customer experiences. When you buy
                                        a domain name from TakeItCloudy, we guarantee it will be handed over.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header" id="four">
                                    <h4 class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#item__four" aria-expanded="false" aria-controls="item__four">
                                        Why is domain name registration required?
                                    </h4>
                                </div>
                                <div id="item__four" class="accordion-collapse collapse" aria-labelledby="four"
                                    data-bs-parent="#rts-accordion">
                                    <div class="accordion-body">
                                        Above all else, we strive to deliver outstanding customer experiences. When you buy
                                        a domain name from TakeItCloudy, we guarantee it will be handed over.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" id="five">
                                    <h4 class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#item__five" aria-expanded="false" aria-controls="item__four">
                                        Why is domain name registration required?
                                    </h4>
                                </div>
                                <div id="item__five" class="accordion-collapse collapse" aria-labelledby="five"
                                    data-bs-parent="#rts-accordion">
                                    <div class="accordion-body">
                                        Above all else, we strive to deliver outstanding customer experiences. When you buy
                                        a domain name from TakeItCloudy, we guarantee it will be handed over.
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