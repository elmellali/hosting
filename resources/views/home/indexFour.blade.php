@extends('layout.layout')

@php
    $breadcrumb = 'false';
@endphp

@section('content')

    <!-- HERO BANNER -->
    <div class="hero__banner body-bg-2">
        <div class="container">
            <div class="row">
                <div class="hero__banner__wrapper d-flex flex-wrap flex-lg-nowrap gap-5 gap-lg-0 
                                                align-items-center justify-content-between">

                    <!-- banner content -->
                    <div class="hero__banner__content3">
                        <h6 class="mb-0">
                            Up to 75% off Web Hosting
                        </h6>
                        <h1 class="heading">
                            Affordable and Powerful Hosting
                        </h1>
                        <p class="description">
                            Experience the pinnacle of website hosting with TakeItCloudy. Our top-tier services are crafted
                            to deliver exceptional performance.
                        </p>
                        <p class="price-area">From <span>$3.99</span>/mo. Regular $17.99/mo. excl. VAT</p>
                        <div class="banner-btn">
                            <a href="{{ route('pricing') }}" class="rts-btn btn__long primary__btn secondary__color">Get a
                                Quote <i class="fa-regular fa-chevron-right"></i></a>
                        </div>
                        <div class="banner-review-area">
                            <span><img src="{{ asset('assets/images/banner/rating.svg') }}" alt=""></span>
                            <span>954 reviews on </span>
                            <span><img src="{{ asset('assets/images/banner/brand.svg') }}" alt=""></span>
                        </div>
                    </div>
                    <!-- banner content end -->
                    <!-- banner image -->
                    <div class="hero__banner__image start-5 position-relative d-flex align-items-end">
                        <figure class="banner__image ">
                            <img src="{{ asset('assets/images/author/hero_person_1.png') }}" width="684" alt="">
                        </figure>
                    </div>
                    <!-- banner image end -->

                </div>
            </div>
        </div>
    </div>
    <!-- HERO BANNER END -->

    <!-- PRICING PLAN START -->
    <div class="rts-pricing-plan pricing-plan-2 section__padding">
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
                        <div class="col-xl-3 col-lg-6 col-md-6">
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
                                    <form action="{{ route('cart.add') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="domain" value="Basic Plan">
                                        <input type="hidden" name="type" value="hosting">
                                        <input type="hidden" name="price" value="3.29">
                                        <button type="submit" class="btn-premium w-100 justify-content-center">Add to Cart
                                            <i class="fa-regular fa-cart-shopping"></i></button>
                                    </form>
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
                        <div class="col-xl-3 col-lg-6 col-md-6">
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
                                    <form action="{{ route('cart.add') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="domain" value="Pro SSD">
                                        <input type="hidden" name="type" value="hosting">
                                        <input type="hidden" name="price" value="7.20">
                                        <button type="submit" class="btn-premium w-100 justify-content-center">Add to Cart
                                            <i class="fa-regular fa-cart-shopping"></i></button>
                                    </form>
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
                        <div class="col-xl-3 col-lg-6 col-md-6">
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
                                    <form action="{{ route('cart.add') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="domain" value="Basic Plan">
                                        <input type="hidden" name="type" value="hosting">
                                        <input type="hidden" name="price" value="17.63">
                                        <button type="submit" class="btn-premium w-100 justify-content-center">Add to Cart
                                            <i class="fa-regular fa-cart-shopping"></i></button>
                                    </form>
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
                        <div class="col-xl-3 col-lg-6 col-md-6">
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
                                    <form action="{{ route('cart.add') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="domain" value="Basic Plan">
                                        <input type="hidden" name="type" value="hosting">
                                        <input type="hidden" name="price" value="11.20">
                                        <button type="submit" class="btn-premium w-100 justify-content-center">Add to Cart
                                            <i class="fa-regular fa-cart-shopping"></i></button>
                                    </form>
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
                        <div class="col-xl-3 col-lg-6 col-md-6">
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
                                    <form action="{{ route('cart.add') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="domain" value="Basic Plan">
                                        <input type="hidden" name="type" value="hosting">
                                        <input type="hidden" name="price" value="5.29">
                                        <button type="submit" class="btn-premium w-100 justify-content-center">Add to Cart
                                            <i class="fa-regular fa-cart-shopping"></i></button>
                                    </form>
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
                        <div class="col-xl-3 col-lg-6 col-md-6">
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
                                    <form action="{{ route('cart.add') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="domain" value="Pro SSD">
                                        <input type="hidden" name="type" value="hosting">
                                        <input type="hidden" name="price" value="12.20">
                                        <button type="submit" class="btn-premium w-100 justify-content-center">Add to Cart
                                            <i class="fa-regular fa-cart-shopping"></i></button>
                                    </form>
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
                        <div class="col-xl-3 col-lg-6 col-md-6">
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
                                    <form action="{{ route('cart.add') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="domain" value="Basic Plan">
                                        <input type="hidden" name="type" value="hosting">
                                        <input type="hidden" name="price" value="32.63">
                                        <button type="submit" class="btn-premium w-100 justify-content-center">Add to Cart
                                            <i class="fa-regular fa-cart-shopping"></i></button>
                                    </form>
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
                        <div class="col-xl-3 col-lg-6 col-md-6">
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
                                    <form action="{{ route('cart.add') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="domain" value="Basic Plan">
                                        <input type="hidden" name="type" value="hosting">
                                        <input type="hidden" name="price" value="20.40">
                                        <button type="submit" class="btn-premium w-100 justify-content-center">Add to Cart
                                            <i class="fa-regular fa-cart-shopping"></i></button>
                                    </form>
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
                        <div class="col-xl-3 col-lg-6 col-md-6">
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
                                    <form action="{{ route('cart.add') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="domain" value="Basic Plan">
                                        <input type="hidden" name="type" value="hosting">
                                        <input type="hidden" name="price" value="8.29">
                                        <button type="submit" class="btn-premium w-100 justify-content-center">Add to Cart
                                            <i class="fa-regular fa-cart-shopping"></i></button>
                                    </form>
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
                        <div class="col-xl-3 col-lg-6 col-md-6">
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
                                    <form action="{{ route('cart.add') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="domain" value="Pro SSD">
                                        <input type="hidden" name="type" value="hosting">
                                        <input type="hidden" name="price" value="20.30">
                                        <button type="submit" class="btn-premium w-100 justify-content-center">Add to Cart
                                            <i class="fa-regular fa-cart-shopping"></i></button>
                                    </form>
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
                        <div class="col-xl-3 col-lg-6 col-md-6">
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
                                    <form action="{{ route('cart.add') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="domain" value="Basic Plan">
                                        <input type="hidden" name="type" value="hosting">
                                        <input type="hidden" name="price" value="50.63">
                                        <button type="submit" class="btn-premium w-100 justify-content-center">Add to Cart
                                            <i class="fa-regular fa-cart-shopping"></i></button>
                                    </form>
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
                        <div class="col-xl-3 col-lg-6 col-md-6">
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
                                    <form action="{{ route('cart.add') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="domain" value="Basic Plan">
                                        <input type="hidden" name="type" value="hosting">
                                        <input type="hidden" name="price" value="30.20">
                                        <button type="submit" class="btn-premium w-100 justify-content-center">Add to Cart
                                            <i class="fa-regular fa-cart-shopping"></i></button>
                                    </form>
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

    <!-- Elitehost FEATURE AREA -->
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
    <!-- Elitehost FEATURE AREA END -->

    <!-- WHY CHOOSE US -->
    <section class="rts-whychoose section__padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-change">
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
                <div class="col-lg-7">
                    <div class="rts-whychoose__image justify-content-end">
                        <img src="{{ asset('assets/images/feature/feature-hero-06.webp') }}" width="680" alt="">
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
                    <div class="col-lg-6">
                        <div class="left-side-image">
                            <img src="{{ asset('assets/images/feature/feature-hero-07.webp') }}" width="630" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="rts-whychoose__content area-4">
                            <h2 class="rts-whychoose__content--title">
                                Free Migration Website
                            </h2>
                            <p class="desc">This feature safeguards sensitive information such as login credentials and
                                payment details, providing a secure browsing experience for your visitors.</p>

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

    <!-- Elitehost FEATURE AREA -->
    <section class="rts-service area-2 section__padding">
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
    <!-- Elitehost FEATURE AREA END -->

    <!-- Elitehost FEATURE AREA -->
    <section class="rts-feature section__padding body-bg-2">
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
                                            <img src="{{ asset('assets/images/author/jahed_khan.png') }}" alt="">
                                        </div>
                                        <div class="author__meta--details">
                                            <a href="#">Jahed Khan</a>
                                            <span>Startup Founder</span>
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
                                            <img src="{{ asset('assets/images/author/samira_khan.png') }}" alt="">
                                        </div>
                                        <div class="author__meta--details">
                                            <a href="#">Samira Khan</a>
                                            <span>Creative Director</span>
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
                                        <p>The transition to TakeItCloudy was incredibly smooth. Their support team helped
                                            with the database migration, and we saw an immediate improvement in TTFB.
                                            High-performance hosting at its best!</p>
                                    </div>
                                    <div class="author__meta">
                                        <div class="author__meta--image">
                                            <img src="{{ asset('assets/images/author/alex_rivera.png') }}" alt="">
                                        </div>
                                        <div class="author__meta--details">
                                            <a href="#">Alex Rivera</a>
                                            <span>Lead Developer</span>
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