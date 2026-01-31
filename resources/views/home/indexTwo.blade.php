@extends('layout.layout')

@php
    $breadcrumb = 'false';
@endphp

@section('content')

    <!-- HERO BANNER -->
    <div class="hero__banner banner__background-2">
        <div class="container position-relative">
            <div class="row">
                <div class="hero__banner__wrapper2 d-flex flex-wrap flex-lg-nowrap gap-5 gap-lg-0 
                                                                align-items-center justify-content-center px-5 px-lg-0">

                    <!-- banner content -->
                    <div class="hero__banner__content2 text-center">
                        <h1 class="heading">
                            Fast and Reliable Hosting
                        </h1>
                        <p class="description">
                            Never worry about running, no matter how much traffic your site
                        </p>
                        <div class="domain__options">
                            <div class="tab__selection mb--20">
                                <nav class="text-center">
                                    <div class="nav nav-tabs d-flex flex-nowrap justify-content-center" id="nav-tab2"
                                        role="tablist">
                                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#register"
                                            type="button" role="tab" aria-controls="register"
                                            aria-selected="true">Register</button>
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#transfer"
                                            aria-controls="transfer">Transfer</button>
                                    </div>
                                </nav>
                            </div>
                            <div class="domain__form">
                                <div id="nav-tabcontent" class="tab-content">
                                    <div id="register" class="tab-pane fade active show" role="tabpanel">
                                        <form action="{{ route('domainChecker') }}" class="domain__search d-flex">
                                            <input type="text" name="domain" placeholder="Enter domain name" required>
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

                            <div class="domain__list d-flex justify-content-center gap-5">
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
            <div class="banner-hero-image">
                <img src="{{ asset('assets/images/banner/banner-hero-02.svg') }}" alt="">
            </div>
        </div>
    </div>
    <!-- HERO BANNER END -->

    <!-- DOMAIN LISTING -->
    <section class="rts-domain-pricing-area domain__listing pt--120">
        <div class="container">
            <div class="section-title-area">
                <h2 class="section-title">Register a domain and access everything you need</h2>
            </div>
            <div class="section-inner">
                <div class="tab__selection domain-pricing mb--50">
                    <nav class="text-center">
                        <div class="nav nav-tabs d-flex flex-nowrap justify-content-center" id="nav-tab" role="tablist">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#domains" type="button"
                                role="tab" aria-controls="domains" aria-selected="true">Domains</button>
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#wordpress"
                                aria-controls="wordpress">WordPress</button>
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#hosting"
                                aria-controls="hosting">Hosting</button>
                        </div>
                    </nav>
                </div>
                <div id="nav-tabcontent2" class="tab-content">
                    <div id="domains" class="tab-pane fade active show" role="tabpanel">
                        <div class="row justify-content-center g-5">
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                                <div class="pricing-wrapper">
                                    <div class="logo"><img src="{{ asset('assets/images/pricing/domain-01.svg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <p class="desc">Think about why buy domain name in the first place</p>
                                        <div class="price-area">
                                            <span class="now">$6.99</span>
                                        </div>
                                        <div class="button-area">
                                            <a href="{{ route('domainChecker', ['r' => '.online']) }}"
                                                class="pricing-btn rts-btn border-0 bg-transparent">Get Offer <i
                                                    class="fa-light fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                                <div class="pricing-wrapper">
                                    <div class="logo"><img src="{{ asset('assets/images/pricing/domain-02.svg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <p class="desc">Think about why buy domain name in the first place</p>
                                        <div class="price-area">
                                            <span class="now">$6.99</span>
                                        </div>
                                        <div class="button-area">
                                            <a href="{{ route('domainChecker', ['r' => '.org']) }}"
                                                class="pricing-btn rts-btn border-0 bg-transparent">Get Offer <i
                                                    class="fa-light fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                                <div class="pricing-wrapper">
                                    <div class="logo"><img src="{{ asset('assets/images/pricing/domain-03.svg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <p class="desc">Think about why buy domain name in the first place</p>
                                        <div class="price-area">
                                            <span class="now">$6.99</span>
                                        </div>
                                        <div class="button-area">
                                            <a href="{{ route('domainChecker', ['r' => '.net']) }}"
                                                class="pricing-btn rts-btn border-0 bg-transparent">Get Offer <i
                                                    class="fa-light fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                                <div class="pricing-wrapper">
                                    <div class="logo"><img src="{{ asset('assets/images/pricing/domain-04.svg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <p class="desc">Think about why buy domain name in the first place</p>
                                        <div class="price-area">
                                            <span class="now">$6.99</span>
                                        </div>
                                        <div class="button-area">
                                            <a href="{{ route('domainChecker', ['r' => '.com']) }}"
                                                class="pricing-btn rts-btn border-0 bg-transparent">Get Offer <i
                                                    class="fa-light fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                                <div class="pricing-wrapper">
                                    <div class="logo"><img src="{{ asset('assets/images/pricing/domain-05.svg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <p class="desc">Think about why buy domain name in the first place</p>
                                        <div class="price-area">
                                            <span class="now">$6.99</span>
                                        </div>
                                        <div class="button-area">
                                            <a href="{{ route('domainChecker', ['r' => '.shop']) }}"
                                                class="pricing-btn rts-btn border-0 bg-transparent">Get Offer <i
                                                    class="fa-light fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                                <div class="pricing-wrapper">
                                    <div class="logo"><img src="{{ asset('assets/images/pricing/domain-06.svg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <p class="desc">Think about why buy domain name in the first place</p>
                                        <div class="price-area">
                                            <span class="now">$6.99</span>
                                        </div>
                                        <div class="button-area">
                                            <a href="{{ route('domainChecker', ['r' => '.xyz']) }}"
                                                class="pricing-btn rts-btn border-0 bg-transparent">Get Offer <i
                                                    class="fa-light fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                                <div class="pricing-wrapper">
                                    <div class="logo"><img src="{{ asset('assets/images/pricing/domain-07.svg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <p class="desc">Think about why buy domain name in the first place</p>
                                        <div class="price-area">
                                            <span class="now">$6.99</span>
                                        </div>
                                        <div class="button-area">
                                            <a href="{{ route('domainChecker', ['r' => '.pro']) }}"
                                                class="pricing-btn rts-btn border-0 bg-transparent">Get Offer <i
                                                    class="fa-light fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                                <div class="pricing-wrapper">
                                    <div class="logo"><img src="{{ asset('assets/images/pricing/domain-08.svg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <p class="desc">Think about why buy domain name in the first place</p>
                                        <div class="price-area">
                                            <span class="now">$6.99</span>
                                        </div>
                                        <div class="button-area">
                                            <a href="{{ route('domainChecker', ['r' => '.club']) }}"
                                                class="pricing-btn rts-btn border-0 bg-transparent">Get Offer <i
                                                    class="fa-light fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div id="wordpress" class="tab-pane fade" role="tabpanel">
                        <div class="row justify-content-center g-5">
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                                <div class="pricing-wrapper others">
                                    <p class="tag">Free Trial</p>
                                    <div class="content">
                                        <h4 class="title">EasyWP Starter</h4>
                                        <p class="desc">Manage WordPress</p>
                                        <div class="price-area d-block">
                                            <span class="now d-block">$6.99/1st mo</span>
                                            <p class="renew d-block">Renews from <span>$6.44/mo</span></p>
                                        </div>
                                        <div class="button-area">
                                            <form action="{{ route('cart.add') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="domain" value="EasyWP Starter">
                                                <input type="hidden" name="type" value="hosting">
                                                <input type="hidden" name="price" value="6.99">
                                                <button type="submit"
                                                    class="pricing-btn rts-btn border-0 bg-transparent">Get Offer <i
                                                        class="fa-light fa-arrow-right"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                                <div class="pricing-wrapper others">
                                    <p class="tag">Free Trial</p>
                                    <div class="content">
                                        <h4 class="title">EasyWP Turbo</h4>
                                        <p class="desc">Manage WordPress</p>
                                        <div class="price-area d-block">
                                            <span class="now d-block">$6.99/1st mo</span>
                                            <p class="renew d-block">Renews from <span>$6.44/mo</span></p>
                                        </div>
                                        <div class="button-area">
                                            <form action="{{ route('cart.add') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="domain" value="EasyWP Turbo">
                                                <input type="hidden" name="type" value="hosting">
                                                <input type="hidden" name="price" value="6.99">
                                                <button type="submit"
                                                    class="pricing-btn rts-btn border-0 bg-transparent">Get Offer <i
                                                        class="fa-light fa-arrow-right"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                                <div class="pricing-wrapper others">
                                    <p class="tag">Free Trial</p>
                                    <div class="content">
                                        <h4 class="title">EasyWP Supersonic</h4>
                                        <p class="desc">Manage WordPress</p>
                                        <div class="price-area d-block">
                                            <span class="now d-block">$6.99/1st mo</span>
                                            <p class="renew d-block">Renews from <span>$6.44/mo</span></p>
                                        </div>
                                        <div class="button-area">
                                            <form action="{{ route('cart.add') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="domain" value="EasyWP Supersonic">
                                                <input type="hidden" name="type" value="hosting">
                                                <input type="hidden" name="price" value="6.99">
                                                <button type="submit"
                                                    class="pricing-btn rts-btn border-0 bg-transparent">Get Offer <i
                                                        class="fa-light fa-arrow-right"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                                <div class="pricing-wrapper others">
                                    <p class="tag">Free Trial</p>
                                    <div class="content">
                                        <h4 class="title">EasyWP Starter</h4>
                                        <p class="desc">Manage WordPress</p>
                                        <div class="price-area d-block">
                                            <span class="now d-block">$6.99/1st mo</span>
                                            <p class="renew d-block">Renews from <span>$6.44/mo</span></p>
                                        </div>
                                        <div class="button-area">
                                            <form action="{{ route('cart.add') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="domain" value="EasyWP Starter">
                                                <input type="hidden" name="type" value="hosting">
                                                <input type="hidden" name="price" value="6.99">
                                                <button type="submit"
                                                    class="pricing-btn rts-btn border-0 bg-transparent">Get Offer <i
                                                        class="fa-light fa-arrow-right"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="hosting" class="tab-pane fade" role="tabpanel">
                        <div class="row justify-content-center g-5">
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                                <div class="pricing-wrapper others">
                                    <p class="tag">Free Trial</p>
                                    <div class="content">
                                        <h4 class="title">All Plans</h4>
                                        <p class="desc">Share Hosting</p>
                                        <div class="price-area d-block">
                                            <span class="now d-block">$6.99/1st mo</span>
                                            <p class="renew d-block">Renews from <span>$6.44/mo</span></p>
                                        </div>
                                        <div class="button-area">
                                            <form action="{{ route('cart.add') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="domain" value="All Plans">
                                                <input type="hidden" name="type" value="hosting">
                                                <input type="hidden" name="price" value="6.99">
                                                <button type="submit"
                                                    class="pricing-btn rts-btn border-0 bg-transparent">Get Offer <i
                                                        class="fa-light fa-arrow-right"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                                <div class="pricing-wrapper others">
                                    <p class="tag">Free Trial</p>
                                    <div class="content">
                                        <h4 class="title">Stellar Plus</h4>
                                        <p class="desc">Share Hosting</p>
                                        <div class="price-area d-block">
                                            <span class="now d-block">$6.99/1st mo</span>
                                            <p class="renew d-block">Renews from <span>$6.44/mo</span></p>
                                        </div>
                                        <div class="button-area">
                                            <form action="{{ route('cart.add') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="domain" value="Stellar Plus">
                                                <input type="hidden" name="type" value="hosting">
                                                <input type="hidden" name="price" value="6.99">
                                                <button type="submit"
                                                    class="pricing-btn rts-btn border-0 bg-transparent">Get Offer <i
                                                        class="fa-light fa-arrow-right"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                                <div class="pricing-wrapper others">
                                    <p class="tag">Free Trial</p>
                                    <div class="content">
                                        <h4 class="title">All Plans</h4>
                                        <p class="desc">Share Hosting</p>
                                        <div class="price-area d-block">
                                            <span class="now d-block">$6.99/1st mo</span>
                                            <p class="renew d-block">Renews from <span>$6.44/mo</span></p>
                                        </div>
                                        <div class="button-area">
                                            <form action="{{ route('cart.add') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="domain" value="All Plans">
                                                <input type="hidden" name="type" value="hosting">
                                                <input type="hidden" name="price" value="6.99">
                                                <button type="submit"
                                                    class="pricing-btn rts-btn border-0 bg-transparent">Get Offer <i
                                                        class="fa-light fa-arrow-right"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                                <div class="pricing-wrapper others">
                                    <p class="tag">Free Trial</p>
                                    <div class="content">
                                        <h4 class="title">Stellar Plus</h4>
                                        <p class="desc">Share Hosting</p>
                                        <div class="price-area d-block">
                                            <span class="now d-block">$6.99/1st mo</span>
                                            <p class="renew d-block">Renews from <span>$6.44/mo</span></p>
                                        </div>
                                        <div class="button-area">
                                            <form action="{{ route('cart.add') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="domain" value="Stellar Plus">
                                                <input type="hidden" name="type" value="hosting">
                                                <input type="hidden" name="price" value="6.99">
                                                <button type="submit"
                                                    class="pricing-btn rts-btn border-0 bg-transparent">Get Offer <i
                                                        class="fa-light fa-arrow-right"></i></button>
                                            </form>
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
    <!-- DOMAIN LISTING END -->

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

    <!-- HOSTING FEATURE AREA START -->
    <div class="rts-hosting-feature-area area-3 body-bg-2 section__padding">
        <div class="container">
            <div class="section-inner">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="left-side-image">
                            <img src="{{ asset('assets/images/feature/feature-hero-03.png') }}" width="384" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="right-side-content">
                            <div class="section-title-area text-start">
                                <h2 class="section-title">Find and buy a domain</h2>
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
    <div class="rts-hosting-feature-area area-4 section__padding">
        <div class="container">
            <div class="section-inner">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-change">
                        <div class="right-side-content">
                            <div class="section-title-area text-start">
                                <h2 class="section-title">Unmatched Website
                                    Performance</h2>
                            </div>
                            <ul class="feature-list">
                                <li>
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/pricing/11.svg') }}" alt="">
                                    </div>
                                    <div class="text">
                                        <h5 class="title">High-Speed SSD Storage</h5>
                                        <p>Ensure your hosting plan includes SSD storage for faster data retrieval.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/pricing/12.svg') }}" alt="">
                                    </div>
                                    <div class="text">
                                        <h5 class="title">Optimized Caching</h5>
                                        <p>Use advanced caching techniques to reduce server load and speed up load times.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/pricing/13.svg') }}" alt="">
                                    </div>
                                    <div class="text">
                                        <h5 class="title">Robust Security Features</h5>
                                        <p>Implement strong security measures including SSL certificates, DDoS protection,
                                            and regular malware scans.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="left-side-image">
                            <img src="{{ asset('assets/images/feature/feature-hero-04.webp') }}" width="627" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- HOSTING FEATURE AREA END-->

    <!-- TakeItCloudy FEATURE AREA -->
    <section class="rts-feature section__padding body-bg-2">
        <div class="container">
            <div class="row">
                <div class="rts-section text-center">
                    <h2 class="rts-section__title">Why TakeItCloudy</h2>
                </div>
            </div>
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

    <!-- TESTIMONIAL -->
    <section class="rts-testimonial section__padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="swiper rts-imageSlider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="image-area">
                                    <img src="{{ asset('assets/images/author/author__one.png') }}" width="410" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image-area">
                                    <img src="{{ asset('assets/images/author/author__two.png') }}" width="410" alt="">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="image-area">
                                    <img src="{{ asset('assets/images/author/author__three.png') }}" width="410" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="rts-testimonial__slider testimonial__slider--first">
                        <div class="swiper-wrapper">
                            <!-- single testimonial -->
                            <div class="swiper-slide">
                                <div class="rts-testimonial__single">
                                    <div class="quote-icon">
                                        <img src="{{ asset('assets/images/testimonials/quote.svg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <p>Reliable, fast, and secure. Everything you need from a modern hosting provider.
                                            Their support team is incredibly knowledgeable and always ready to help.</p>
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
                                <div class="rts-testimonial__single">
                                    <div class="quote-icon">
                                        <img src="{{ asset('assets/images/testimonials/quote.svg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <p>The migration was effortless. We moved our entire infrastructure over a weekend
                                            with zero downtime. The speed improvement for our tech stack is remarkable.</p>
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
                            <!-- single testimonial -->
                            <div class="swiper-slide">
                                <div class="rts-testimonial__single">
                                    <div class="quote-icon">
                                        <img src="{{ asset('assets/images/testimonials/quote.svg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <p>My online store has never been faster. My customers noticed the difference immediately, and our conversion rates have improved significantly.</p>
                                        </div>
                                        <div class="author__meta">
                                            <div class="author__meta--image">
                                                <img src="{{ asset('assets/images/author/sarah_jenkins.png') }}" alt="">
                                            </div>
                                            <div class="author__meta--details">
                                                <a href="#">Sarah Jenkins</a>
                                                <span>E-commerce Owner</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single testimonial end -->
                            </div>
                            <!-- navigation -->
                            <div class="swiper-button-area">
                                <div class="swiper-btn swiper-button-prev"><i class="fa-regular fa-angle-left"></i></div>
                                <div class="swiper-btn swiper-button-next"><i class="fa-regular fa-angle-right"></i></div>
                            </div>
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