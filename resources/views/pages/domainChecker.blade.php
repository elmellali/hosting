@extends('layout.layout')

@php
    $breadcrumb = 'false';
@endphp

@section('content')

    <!-- Breadcrumb -->
    <div class="rts-breadcrumb-area domain-checker body-bg-2">
        <div class="container">
            <div class="breadcrumb-inner">
                <div class="row">
                    <div class="hero__banner__wrapper2 d-flex flex-wrap flex-lg-nowrap gap-5 gap-lg-0 
                                align-items-center justify-content-center px-5 px-lg-0">

                        <!-- banner content -->
                        <div class="hero__banner__content2 text-center">
                            <h1 class="heading">
                                Find Best Unique Domains Checker!
                            </h1>
                            <p class="description">
                                Web Hosting, Domain Name and Hosting Center Solutions
                            </p>
                            <div class="domain__options">
                                <div class="tab__selection mb--20">
                                    <nav class="text-center">
                                        <div class="nav nav-tabs d-flex flex-nowrap justify-content-center" id="nav-tab"
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
                                                <input type="text" name="domain" placeholder="Enter domain name"
                                                    value="{{ request('domain') }}" required>
                                                <select name="r" id="r">
                                                    <option value=".com" @selected(request('r') == '.com')>.com</option>
                                                    <option value=".net" @selected(request('r') == '.net')>.net</option>
                                                    <option value=".love" @selected(request('r') == '.love')>.love</option>
                                                    <option value=".pw" @selected(request('r') == '.pw')>.pw</option>
                                                    <option value=".org" @selected(request('r') == '.org')>.org</option>
                                                    <option value=".info" @selected(request('r') == '.info')>.info</option>
                                                    <option value=".xyz" @selected(request('r') == '.xyz')>.xyz</option>
                                                </select>
                                                <button type="submit" class="btn__primary">Search</button>
                                            </form>
                                            @if(isset($available))
                                                @if($available)
                                                    <div class="mt-4 p-4 bg-white rounded shadow-sm text-center">
                                                        <h3 class="text-success"><i class="fa-regular fa-check-circle"></i>
                                                            Congratulations!</h3>
                                                        <p class="h5 mt-2">{{ request('domain') }} is available!</p>
                                                        <form action="{{ route('cart.add') }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="domain" value="{{ request('domain') }}">
                                                            <input type="hidden" name="type" value="domain">
                                                            <input type="hidden" name="price" value="9.99">
                                                            <button type="submit" class="pricing-btn rts-btn mt-3">Add to Cart - $9.99</button>
                                                        </form>
                                                    </div>
                                                @else
                                                    <div class="mt-4 p-4 bg-white rounded shadow-sm text-center">
                                                        <h3 class="text-danger"><i class="fa-regular fa-times-circle"></i> Sorry!
                                                        </h3>
                                                        <p class="h5 mt-2">{{ request('domain') }} is already likely taken.</p>
                                                        <p class="text-muted">Please try another domain name.</p>
                                                    </div>
                                                @endif
                                            @endif
                                        </div>

                                        <div id="transfer" class="tab-pane fade" role="tabpanel">
                                            <form action="{{ route('domainChecker') }}" class="domain__search d-flex">
                                                <input type="text" name="domain" placeholder="Enter domain name" required>
                                                <select name="t" id="t">
                                                    <option value=".com">.com</option>
                                                    <option value=".net">.net</option>
                                                    <option value=".love">.love</option>
                                                    <option value=".pw">.pw</option>
                                                    <option value=".org">.org</option>
                                                    <option value=".info">.info</option>
                                                    <option value=".xyz">.xyz</option>
                                                </select>
                                                <button type="submit" class="btn__primary">Transfer</button>
                                            </form>
                                        </div>
                                    </div>

                                </div>

                                <div class="domain__list d-flex justify-content-center align-items-center gap-5">
                                    <div class="tag d-flex">
                                        <span>Popular Domain:</span>
                                    </div>
                                    <div class="single__domain d-flex">
                                        <strong>.com</strong>
                                        <span>$6.19</span>
                                    </div>
                                    <div class="single__domain d-flex">
                                        <strong>.org</strong>
                                        <span> $5.19</span>
                                    </div>
                                    <div class="single__domain d-flex">
                                        <strong>.xyz</strong>
                                        <span> $$6.19</span>
                                    </div>
                                    <div class="single__domain d-flex">
                                        <strong>.xyz</strong>
                                        <span> $$6.19</span>
                                    </div>
                                    <div class="single__domain d-flex">
                                        <strong>.xyz</strong>
                                        <span> $6.19</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- banner content end -->
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-shape-area">
            <img src="{{ asset('assets/images/banner/breadcrumb-shape.svg') }}" alt="">
        </div>
    </div>
    <!-- Breadcrumb END -->

    <!-- DOMAIN LISTING -->
    <section class="rts-domain-pricing-area domain__listing section__padding">
        <div class="container">
            <div class="section-title-area">
                <h2 class="section-title">TakeItCloudy Straight forward
                    Domain Pricing</h2>
            </div>
            <div class="section-inner">
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
                                            <a href="#" class="pricing-btn rts-btn">Get Offer <i
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
                                            <a href="#" class="pricing-btn rts-btn">Get Offer <i
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
                                            <a href="#" class="pricing-btn rts-btn">Get Offer <i
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
                                            <a href="#" class="pricing-btn rts-btn">Get Offer <i
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
                                            <a href="#" class="pricing-btn rts-btn">Get Offer <i
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
                                            <a href="#" class="pricing-btn rts-btn">Get Offer <i
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
                                            <a href="#" class="pricing-btn rts-btn">Get Offer <i
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
                                            <a href="#" class="pricing-btn rts-btn">Get Offer <i
                                                    class="fa-light fa-arrow-right"></i></a>
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

    <div class="rts-pricing-plan domain-checker table-pricing section__padding body-bg-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="rts-section w-640 text-center">
                    <h2 class="rts-section__title">
                        Top Domains Price List
                    </h2>
                    <p class="desc" style="max-width: 500px; margin: auto">Keep in mind that TLD prices can change over
                        time, and different
                        registrars may offer different deals and packages</p>
                </div>
            </div>
            <div class="row">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-5 col-md-6">
                        <div class="rts-pricing-plan__tab pricing__tab">
                            <div class="tab__button">
                                <div class="tab__button__item">
                                    <button class="active tab__btn" data-tab="all">All</button>
                                    <button class="tab__btn" data-tab="sale">Sale</button>
                                    <button class="tab__btn" data-tab="newest">Newest</button>
                                    <button class="tab__btn" data-tab="popular">Popular</button>
                                    <button class="tab__btn" data-tab="geographic">Geographic</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PRICING PLAN -->
                <div class="tab__content open" id="all">
                    <table class="table">
                        <thead class="heading__bg">
                            <tr>
                                <th class="cell">TLD</th>
                                <th class="cell">Register</th>
                                <th class="cell">Renew</th>
                                <th class="cell">Transfer</th>
                            </tr>
                        </thead>
                        <tbody class="table__content">
                            <tr>
                                <td class="package">.com</td>
                                <td class="process">$6.99</td>
                                <td class="ram">$17.99</td>
                                <td class="storage">$7.99</td>
                            </tr>
                            <tr>
                                <td class="package">.net</td>
                                <td class="process">$8.99</td>
                                <td class="storage">$9.99</td>
                                <td class="ram">$19.99</td>
                            </tr>
                            <tr>
                                <td class="package">.online</td>
                                <td class="ram">$20.99</td>
                                <td class="process">$9.99</td>
                                <td class="storage">$10.99</td>
                            </tr>

                            <tr>
                                <td class="package">.xyz</td>
                                <td class="process">$7.99</td>
                                <td class="ram">$17.99</td>
                                <td class="storage">$7.99</td>
                            </tr>
                            <tr>
                                <td class="package">.shop</td>
                                <td class="process">$6.99</td>
                                <td class="storage">$7.99</td>
                                <td class="ram">$16.99</td>
                            </tr>
                            <tr>
                                <td class="package">.club</td>
                                <td class="process">$9.99</td>
                                <td class="ram">$19.99</td>
                                <td class="storage">$9.99</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- PRICING PLAN -->
                <div class="tab__content" id="sale">
                    <table class="table">
                        <thead class="heading__bg">
                            <tr>
                                <th class="cell">TLD</th>
                                <th class="cell">Register</th>
                                <th class="cell">Renew</th>
                                <th class="cell">Transfer</th>
                            </tr>
                        </thead>
                        <tbody class="table__content">
                            <tr>
                                <td class="package">.com</td>
                                <td class="process">$6.99</td>
                                <td class="ram">$17.99</td>
                                <td class="storage">$7.99</td>
                            </tr>
                            <tr>
                                <td class="package">.net</td>
                                <td class="process">$8.99</td>
                                <td class="ram">$19.99</td>
                                <td class="storage">$9.99</td>
                            </tr>
                            <tr>
                                <td class="package">.shop</td>
                                <td class="process">$9.99</td>
                                <td class="storage">$10.99</td>
                                <td class="ram">$20.99</td>
                            </tr>
                            <tr>
                                <td class="package">.online</td>
                                <td class="process">$6.99</td>
                                <td class="ram">$16.99</td>
                                <td class="storage">$7.99</td>
                            </tr>
                            <tr>
                                <td class="package">.xyz</td>
                                <td class="ram">$17.99</td>
                                <td class="process">$7.99</td>
                                <td class="storage">$7.99</td>
                            </tr>
                            <tr>
                                <td class="package">.club</td>
                                <td class="process">$9.99</td>
                                <td class="ram">$19.99</td>
                                <td class="storage">$9.99</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- PRICING PLAN -->
                <div class="tab__content" id="newest">
                    <table class="table">
                        <thead class="heading__bg">
                            <tr>
                                <th class="cell">TLD</th>
                                <th class="cell">Register</th>
                                <th class="cell">Renew</th>
                                <th class="cell">Transfer</th>
                            </tr>
                        </thead>
                        <tbody class="table__content">
                            <tr>
                                <td class="package">.com</td>
                                <td class="process">$6.99</td>
                                <td class="ram">$17.99</td>
                                <td class="storage">$7.99</td>
                            </tr>
                            <tr>
                                <td class="package">.net</td>
                                <td class="process">$8.99</td>
                                <td class="ram">$19.99</td>
                                <td class="storage">$9.99</td>
                            </tr>
                            <tr>
                                <td class="package">.online</td>
                                <td class="process">$9.99</td>
                                <td class="ram">$20.99</td>
                                <td class="storage">$10.99</td>
                            </tr>
                            <tr>
                                <td class="package">.shop</td>
                                <td class="process">$6.99</td>
                                <td class="ram">$16.99</td>
                                <td class="storage">$7.99</td>
                            </tr>
                            <tr>
                                <td class="package">.xyz</td>
                                <td class="process">$7.99</td>
                                <td class="ram">$17.99</td>
                                <td class="storage">$7.99</td>
                            </tr>
                            <tr>
                                <td class="package">.club</td>
                                <td class="process">$9.99</td>
                                <td class="ram">$19.99</td>
                                <td class="storage">$9.99</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- PRICING PLAN -->
                <div class="tab__content" id="popular">
                    <table class="table">
                        <thead class="heading__bg">
                            <tr>
                                <th class="cell">TLD</th>
                                <th class="cell">Register</th>
                                <th class="cell">Renew</th>
                                <th class="cell">Transfer</th>
                            </tr>
                        </thead>
                        <tbody class="table__content">
                            <tr>
                                <td class="package">.com</td>
                                <td class="process">$6.99</td>
                                <td class="ram">$17.99</td>
                                <td class="storage">$7.99</td>
                            </tr>
                            <tr>
                                <td class="package">.net</td>
                                <td class="process">$8.99</td>
                                <td class="ram">$19.99</td>
                                <td class="storage">$9.99</td>
                            </tr>
                            <tr>
                                <td class="package">.online</td>
                                <td class="process">$9.99</td>
                                <td class="ram">$20.99</td>
                                <td class="storage">$10.99</td>
                            </tr>
                            <tr>
                                <td class="package">.shop</td>
                                <td class="process">$6.99</td>
                                <td class="ram">$16.99</td>
                                <td class="storage">$7.99</td>
                            </tr>
                            <tr>
                                <td class="package">.xyz</td>
                                <td class="process">$7.99</td>
                                <td class="ram">$17.99</td>
                                <td class="storage">$7.99</td>
                            </tr>
                            <tr>
                                <td class="package">.club</td>
                                <td class="process">$9.99</td>
                                <td class="ram">$19.99</td>
                                <td class="storage">$9.99</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- PRICING PLAN -->
                <div class="tab__content" id="geographic">
                    <table class="table">
                        <thead class="heading__bg">
                            <tr>
                                <th class="cell">TLD</th>
                                <th class="cell">Register</th>
                                <th class="cell">Renew</th>
                                <th class="cell">Transfer</th>
                            </tr>
                        </thead>
                        <tbody class="table__content">
                            <tr>
                                <td class="package">.com</td>
                                <td class="process">$6.99</td>
                                <td class="ram">$17.99</td>
                                <td class="storage">$7.99</td>
                            </tr>
                            <tr>
                                <td class="package">.net</td>
                                <td class="process">$8.99</td>
                                <td class="ram">$19.99</td>
                                <td class="storage">$9.99</td>
                            </tr>
                            <tr>
                                <td class="package">.online</td>
                                <td class="process">$9.99</td>
                                <td class="ram">$20.99</td>
                                <td class="storage">$10.99</td>
                            </tr>
                            <tr>
                                <td class="package">.shop</td>
                                <td class="process">$6.99</td>
                                <td class="ram">$16.99</td>
                                <td class="storage">$7.99</td>
                            </tr>
                            <tr>
                                <td class="package">.xyz</td>
                                <td class="process">$7.99</td>
                                <td class="ram">$17.99</td>
                                <td class="storage">$7.99</td>
                            </tr>
                            <tr>
                                <td class="package">.club</td>
                                <td class="process">$9.99</td>
                                <td class="ram">$19.99</td>
                                <td class="storage">$9.99</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- TakeItCloudy FEATURE AREA -->
    <section class="rts-feature section__padding">
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