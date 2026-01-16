@extends('layout.layout')

@php
    $breadcrumb = 'false';
@endphp

@section('content')

    <!-- HERO BANNER -->
    <div class="hero__banner banner__background">
        <div class="container">
            <div class="row">
                <div class="hero__banner__wrapper d-flex flex-wrap flex-lg-nowrap gap-5 gap-lg-0 
                    align-items-center justify-content-between px-lg-0">

                    <!-- banner content -->
                    <div class="hero__banner__content">
                        <h6 class="mb-0">
                            Up to 75% off Web Hosting
                        </h6>
                        <h1 class="heading">
                            Powerful Web Hosting Solutions
                        </h1>
                        <p class="description">
                            Experience the power of our advanced hosting solutions designed to keep your website running
                            smoothly and efficiently. Our state-of-the-art servers ensure.
                        </p>
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

                    <!-- banner image -->
                    <div class="hero__banner__image start-5 position-relative d-flex align-items-end">
                        <figure class="banner__image ">
                            <img src="{{ asset('assets/images/banner/banner-hero-01.webp') }}" width="647" alt="">
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

    <!-- HOSTING OPTION -->
    <div class="rts-hosting-type body-bg-2 pt--110 pb--120">
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
            <div class="row mt--50">
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

    <!-- PRICING PLAN START -->
    <div class="rts-pricing-plan section__padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="rts-section text-center">
                    <h2 class="rts-section__title">Choose Hosting Plan</h2>
                    <p class="rts-section__description w-450 ">Globally incubate next-generation e-services via state of the
                        art technology.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-5">
                        <div class="rts-pricing-plan__tab color-primary">
                            <div class="tab__button">
                                <div class="tab__button__item">
                                    <button class="tab__btn active" data-tab="monthly">monthly</button>
                                    <button class="tab__btn" data-tab="yearly">yearly</button>
                                </div>
                            </div>
                            <div class="discount">
                                <span class="line"><img src="{{ asset('assets/images/index-11/plan/offer__vector.svg') }}"
                                        height="20" width="85" alt=""></span>
                                <p>20% save</p>
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
                                        <img src="{{ asset('assets/images/index-11/plan/basic.svg') }}" height="30"
                                            width="30" alt="">
                                    </div>
                                    <h4 class="package__name">Basic</h4>
                                </div>
                                <p class="card-plan__desc">Everything need to your website</p>

                                <h5 class="card-plan__price">
                                    <sup>$</sup> 3.63 <sub>/ month</sub>
                                </h5>
                                <div class="card-plan__cartbtn">
                                    <a href="#">add to cart</a>
                                </div>
                                <p class="card-plan__renew-price">
                                    $ 6.99 /mo when you renew
                                </p>
                                <div class="card-plan__feature">
                                    <ul class="card-plan__feature--list">
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> 1 Website</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Standard
                                                Performance</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Unlock superior online experiences with our standard performance solutions, ensuring reliability, speed, and seamless functionality for your website needs."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> 24/7/365 Support</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy provides reliable 24/7 support for your hosting needs, ensuring assistance whenever you require help."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-xmark"></i> Free Email</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy offers complimentary email services, empowering your online communication with reliable and secure free email solutions."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-xmark"></i> Unlimited
                                                Bandwidth</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy provides unlimited bandwidth, ensuring seamless data transfer for your website's optimal performance and user experience."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-xmark"></i> 100 GB SSD Storage</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Elevate your online presence with TakeItCloudy, offering unlimited bandwidth for your domain, ensuring optimal performance and seamless data flow."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>


                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free SSL</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Secure your website with TakeItCloudy's unlimited free SSL certificates, ensuring encrypted and safe online transactions for your users."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> 99.9% Uptime
                                                Guarantee</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy guarantees 99% uptime, ensuring your website is consistently available and reliable for visitors around the clock."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-xmark"></i> Web Application
                                                Firewall</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Enhance your website's security with TakeItCloudy's Web Application Firewall, protecting against online threats and ensuring a safe online environment."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-trigered">
                                            <span class="text">More Features <i
                                                    class="fa-sharp fa-regular fa-chevron-down"></i>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="card-plan__feature--list more__feature">
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> 100 GB SSD Storage</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy offers generous hosting with 100GB SSD storage, providing ample space for your data and ensuring high-performance storage solutions."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free SSL</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Secure your website with TakeItCloudy's unlimited free SSL certificates, ensuring encrypted and safe online transactions for your users."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> 99.9% Uptime
                                                Guarantee</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy guarantees 99% uptime, ensuring your website is consistently available and reliable for visitors around the clock."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-xmark"></i> Web Application
                                                Firewall</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Enhance your website's security with TakeItCloudy's Web Application Firewall, protecting against online threats and ensuring a safe online environment."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-trigered">
                                            <span class="text">See less Features <i
                                                    class="fa-sharp fa-regular fa-chevron-up"></i>
                                            </span>
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
                                        <img src="{{ asset('assets/images/index-11/plan/premium.svg') }}" height="30"
                                            width="30" alt="">
                                    </div>
                                    <h4 class="package__name">Premium</h4>
                                </div>
                                <p class="card-plan__desc">Level-up more power features</p>
                                <h5 class="card-plan__price">
                                    <sup>$</sup> 6.63 <sub>/ month</sub>
                                </h5>
                                <div class="card-plan__cartbtn">
                                    <a href="#">add to cart</a>
                                </div>
                                <p class="card-plan__renew-price">
                                    $ 6.99 /mo when you renew
                                </p>
                                <div class="card-plan__feature">
                                    <ul class="card-plan__feature--list">
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> 1 Website</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Standard
                                                Performance</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Unlock superior online experiences with our standard performance solutions, ensuring reliability, speed, and seamless functionality for your website needs."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> 24/7/365 Support</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy provides reliable 24/7 support for your hosting needs, ensuring assistance whenever you require help."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-xmark"></i> Free Email</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy offers complimentary email services, empowering your online communication with reliable and secure free email solutions."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-xmark"></i> Unlimited
                                                Bandwidth</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy provides unlimited bandwidth, ensuring seamless data transfer for your website's optimal performance and user experience."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-xmark"></i> 100 GB SSD Storage</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Elevate your online presence with TakeItCloudy, offering unlimited bandwidth for your domain, ensuring optimal performance and seamless data flow."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>


                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free SSL</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Secure your website with TakeItCloudy's unlimited free SSL certificates, ensuring encrypted and safe online transactions for your users."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> 99.9% Uptime
                                                Guarantee</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy guarantees 99% uptime, ensuring your website is consistently available and reliable for visitors around the clock."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Web Application
                                                Firewall</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Enhance your website's security with TakeItCloudy's Web Application Firewall, protecting against online threats and ensuring a safe online environment."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-trigered">
                                            <span class="text">More Features <i
                                                    class="fa-sharp fa-regular fa-chevron-down"></i>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="card-plan__feature--list more__feature">
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> 100 GB SSD Storage</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy offers generous hosting with 100GB SSD storage, providing ample space for your data and ensuring high-performance storage solutions."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free SSL</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Secure your website with TakeItCloudy's unlimited free SSL certificates, ensuring encrypted and safe online transactions for your users."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> 99.9% Uptime
                                                Guarantee</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy guarantees 99% uptime, ensuring your website is consistently available and reliable for visitors around the clock."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-xmark"></i> Web Application
                                                Firewall</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Enhance your website's security with TakeItCloudy's Web Application Firewall, protecting against online threats and ensuring a safe online environment."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-trigered">
                                            <span class="text">See less Features <i
                                                    class="fa-sharp fa-regular fa-chevron-up"></i>
                                            </span>
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
                                        <img src="{{ asset('assets/images/index-11/plan/business.svg') }}" height="30"
                                            width="30" alt="">
                                    </div>
                                    <h4 class="package__name">Business</h4>
                                </div>
                                <p class="card-plan__desc">Everything need to your website</p>
                                <h5 class="card-plan__price">
                                    <sup>$</sup> 8.63 <sub>/ month</sub>
                                </h5>
                                <div class="card-plan__cartbtn">
                                    <a href="#">add to cart</a>
                                </div>
                                <p class="card-plan__renew-price">
                                    $ 6.99 /mo when you renew
                                </p>
                                <div class="card-plan__feature">
                                    <ul class="card-plan__feature--list">
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> 1 Website</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Standard
                                                Performance</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Unlock superior online experiences with our standard performance solutions, ensuring reliability, speed, and seamless functionality for your website needs."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> 24/7/365 Support</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy provides reliable 24/7 support for your hosting needs, ensuring assistance whenever you require help."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-xmark"></i> Free Email</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy offers complimentary email services, empowering your online communication with reliable and secure free email solutions."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-xmark"></i> Unlimited
                                                Bandwidth</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy provides unlimited bandwidth, ensuring seamless data transfer for your website's optimal performance and user experience."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> 100 GB SSD Storage</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Elevate your online presence with TakeItCloudy, offering unlimited bandwidth for your domain, ensuring optimal performance and seamless data flow."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>


                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free SSL</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Secure your website with TakeItCloudy's unlimited free SSL certificates, ensuring encrypted and safe online transactions for your users."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> 99.9% Uptime
                                                Guarantee</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy guarantees 99% uptime, ensuring your website is consistently available and reliable for visitors around the clock."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Web Application
                                                Firewall</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Enhance your website's security with TakeItCloudy's Web Application Firewall, protecting against online threats and ensuring a safe online environment."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-trigered">
                                            <span class="text">More Features <i
                                                    class="fa-sharp fa-regular fa-chevron-down"></i>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="card-plan__feature--list more__feature">
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> 100 GB SSD Storage</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy offers generous hosting with 100GB SSD storage, providing ample space for your data and ensuring high-performance storage solutions."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free SSL</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Secure your website with TakeItCloudy's unlimited free SSL certificates, ensuring encrypted and safe online transactions for your users."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> 99.9% Uptime
                                                Guarantee</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy guarantees 99% uptime, ensuring your website is consistently available and reliable for visitors around the clock."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-xmark"></i> Web Application
                                                Firewall</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Enhance your website's security with TakeItCloudy's Web Application Firewall, protecting against online threats and ensuring a safe online environment."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-trigered">
                                            <span class="text">See less Features <i
                                                    class="fa-sharp fa-regular fa-chevron-up"></i>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- single card end -->
                        <!-- single card -->
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="card-plan ">

                                <div class="card-plan__package">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/index-11/plan/cloud.svg') }}" height="30"
                                            width="30" alt="">
                                    </div>
                                    <h4 class="package__name">Cloud Startup</h4>
                                </div>
                                <p class="card-plan__desc">Everything need to your website</p>
                                <h5 class="card-plan__price">
                                    <sup>$</sup> 11.63 <sub>/ month</sub>
                                </h5>
                                <div class="card-plan__cartbtn">
                                    <a href="#">add to cart</a>
                                </div>
                                <p class="card-plan__renew-price">
                                    $ 6.99 /mo when you renew
                                </p>
                                <div class="card-plan__feature">
                                    <ul class="card-plan__feature--list">
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> 1 Website</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Standard
                                                Performance</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Unlock superior online experiences with our standard performance solutions, ensuring reliability, speed, and seamless functionality for your website needs."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> 24/7/365 Support</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy provides reliable 24/7 support for your hosting needs, ensuring assistance whenever you require help."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Free Email</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy offers complimentary email services, empowering your online communication with reliable and secure free email solutions."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited
                                                Bandwidth</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy provides unlimited bandwidth, ensuring seamless data transfer for your website's optimal performance and user experience."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> 100 GB SSD Storage</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Elevate your online presence with TakeItCloudy, offering unlimited bandwidth for your domain, ensuring optimal performance and seamless data flow."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>


                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free SSL</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Secure your website with TakeItCloudy's unlimited free SSL certificates, ensuring encrypted and safe online transactions for your users."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> 99.9% Uptime
                                                Guarantee</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy guarantees 99% uptime, ensuring your website is consistently available and reliable for visitors around the clock."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Web Application
                                                Firewall</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Enhance your website's security with TakeItCloudy's Web Application Firewall, protecting against online threats and ensuring a safe online environment."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-trigered">
                                            <span class="text">More Features <i
                                                    class="fa-sharp fa-regular fa-chevron-down"></i>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="card-plan__feature--list more__feature">
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> 100 GB SSD Storage</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy offers generous hosting with 100GB SSD storage, providing ample space for your data and ensuring high-performance storage solutions."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free SSL</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Secure your website with TakeItCloudy's unlimited free SSL certificates, ensuring encrypted and safe online transactions for your users."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> 99.9% Uptime
                                                Guarantee</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy guarantees 99% uptime, ensuring your website is consistently available and reliable for visitors around the clock."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Web Application
                                                Firewall</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Enhance your website's security with TakeItCloudy's Web Application Firewall, protecting against online threats and ensuring a safe online environment."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-trigered">
                                            <span class="text">See less Features <i
                                                    class="fa-sharp fa-regular fa-chevron-up"></i>
                                            </span>
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
                                        <img src="{{ asset('assets/images/index-11/plan/basic.svg') }}" height="30"
                                            width="30" alt="">
                                    </div>
                                    <h4 class="package__name">Basic</h4>
                                </div>
                                <p class="card-plan__desc">Everything need to your website</p>
                                <h5 class="card-plan__price">
                                    <sup>$</sup> 36.63 <sub>/ month</sub>
                                </h5>
                                <div class="card-plan__cartbtn">
                                    <a href="#">add to cart</a>
                                </div>
                                <p class="card-plan__renew-price">
                                    $ 79.99 /year when you renew
                                </p>
                                <div class="card-plan__feature">
                                    <ul class="card-plan__feature--list">
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> 1 Website</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Standard
                                                Performance</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Unlock superior online experiences with our standard performance solutions, ensuring reliability, speed, and seamless functionality for your website needs."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> 24/7/365 Support</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy provides reliable 24/7 support for your hosting needs, ensuring assistance whenever you require help."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-xmark"></i> Free Email</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy offers complimentary email services, empowering your online communication with reliable and secure free email solutions."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-xmark"></i> Unlimited
                                                Bandwidth</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy provides unlimited bandwidth, ensuring seamless data transfer for your website's optimal performance and user experience."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-xmark"></i> 100 GB SSD Storage</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Elevate your online presence with TakeItCloudy, offering unlimited bandwidth for your domain, ensuring optimal performance and seamless data flow."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>


                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free SSL</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Secure your website with TakeItCloudy's unlimited free SSL certificates, ensuring encrypted and safe online transactions for your users."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> 99.9% Uptime
                                                Guarantee</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy guarantees 99% uptime, ensuring your website is consistently available and reliable for visitors around the clock."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-xmark"></i> Web Application
                                                Firewall</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Enhance your website's security with TakeItCloudy's Web Application Firewall, protecting against online threats and ensuring a safe online environment."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-trigered">
                                            <span class="text">More Features <i
                                                    class="fa-sharp fa-regular fa-chevron-down"></i>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="card-plan__feature--list more__feature">
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> 100 GB SSD Storage</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy offers generous hosting with 100GB SSD storage, providing ample space for your data and ensuring high-performance storage solutions."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free SSL</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Secure your website with TakeItCloudy's unlimited free SSL certificates, ensuring encrypted and safe online transactions for your users."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> 99.9% Uptime
                                                Guarantee</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy guarantees 99% uptime, ensuring your website is consistently available and reliable for visitors around the clock."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-xmark"></i> Web Application
                                                Firewall</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Enhance your website's security with TakeItCloudy's Web Application Firewall, protecting against online threats and ensuring a safe online environment."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-trigered">
                                            <span class="text">See less Features <i
                                                    class="fa-sharp fa-regular fa-chevron-up"></i>
                                            </span>
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
                                        <img src="{{ asset('assets/images/index-11/plan/premium.svg') }}" height="30"
                                            width="30" alt="">
                                    </div>
                                    <h4 class="package__name">Premium</h4>
                                </div>
                                <p class="card-plan__desc">Level-up more power features</p>
                                <h5 class="card-plan__price">
                                    <sup>$</sup> 79.56 <sub>/ month</sub>
                                </h5>
                                <div class="card-plan__cartbtn">
                                    <a href="#">add to cart</a>
                                </div>
                                <p class="card-plan__renew-price">
                                    $ 151.99 /year when you renew
                                </p>
                                <div class="card-plan__feature">
                                    <ul class="card-plan__feature--list">
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> 1 Website</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Standard
                                                Performance</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Unlock superior online experiences with our standard performance solutions, ensuring reliability, speed, and seamless functionality for your website needs."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> 24/7/365 Support</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy provides reliable 24/7 support for your hosting needs, ensuring assistance whenever you require help."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-xmark"></i> Free Email</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy offers complimentary email services, empowering your online communication with reliable and secure free email solutions."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-xmark"></i> Unlimited
                                                Bandwidth</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy provides unlimited bandwidth, ensuring seamless data transfer for your website's optimal performance and user experience."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-xmark"></i> 100 GB SSD Storage</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Elevate your online presence with TakeItCloudy, offering unlimited bandwidth for your domain, ensuring optimal performance and seamless data flow."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>


                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free SSL</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Secure your website with TakeItCloudy's unlimited free SSL certificates, ensuring encrypted and safe online transactions for your users."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> 99.9% Uptime
                                                Guarantee</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy guarantees 99% uptime, ensuring your website is consistently available and reliable for visitors around the clock."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Web Application
                                                Firewall</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Enhance your website's security with TakeItCloudy's Web Application Firewall, protecting against online threats and ensuring a safe online environment."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-trigered">
                                            <span class="text">More Features <i
                                                    class="fa-sharp fa-regular fa-chevron-down"></i>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="card-plan__feature--list more__feature">
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> 100 GB SSD Storage</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy offers generous hosting with 100GB SSD storage, providing ample space for your data and ensuring high-performance storage solutions."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free SSL</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Secure your website with TakeItCloudy's unlimited free SSL certificates, ensuring encrypted and safe online transactions for your users."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> 99.9% Uptime
                                                Guarantee</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy guarantees 99% uptime, ensuring your website is consistently available and reliable for visitors around the clock."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-xmark"></i> Web Application
                                                Firewall</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Enhance your website's security with TakeItCloudy's Web Application Firewall, protecting against online threats and ensuring a safe online environment."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-trigered">
                                            <span class="text">See less Features <i
                                                    class="fa-sharp fa-regular fa-chevron-up"></i>
                                            </span>
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
                                        <img src="{{ asset('assets/images/index-11/plan/business.svg') }}" height="30"
                                            width="30" alt="">
                                    </div>
                                    <h4 class="package__name">Business</h4>
                                </div>
                                <p class="card-plan__desc">Everything need to your website</p>
                                <h5 class="card-plan__price">
                                    <sup>$</sup> 103.63 <sub>/ month</sub>
                                </h5>
                                <div class="card-plan__cartbtn">
                                    <a href="#">add to cart</a>
                                </div>
                                <p class="card-plan__renew-price">
                                    $ 235.99 /mo when you renew
                                </p>
                                <div class="card-plan__feature">
                                    <ul class="card-plan__feature--list">
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> 1 Website</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Standard
                                                Performance</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Unlock superior online experiences with our standard performance solutions, ensuring reliability, speed, and seamless functionality for your website needs."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> 24/7/365 Support</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy provides reliable 24/7 support for your hosting needs, ensuring assistance whenever you require help."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-xmark"></i> Free Email</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy offers complimentary email services, empowering your online communication with reliable and secure free email solutions."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-xmark"></i> Unlimited
                                                Bandwidth</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy provides unlimited bandwidth, ensuring seamless data transfer for your website's optimal performance and user experience."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> 100 GB SSD Storage</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Elevate your online presence with TakeItCloudy, offering unlimited bandwidth for your domain, ensuring optimal performance and seamless data flow."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>


                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free SSL</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Secure your website with TakeItCloudy's unlimited free SSL certificates, ensuring encrypted and safe online transactions for your users."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> 99.9% Uptime
                                                Guarantee</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy guarantees 99% uptime, ensuring your website is consistently available and reliable for visitors around the clock."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Web Application
                                                Firewall</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Enhance your website's security with TakeItCloudy's Web Application Firewall, protecting against online threats and ensuring a safe online environment."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-trigered">
                                            <span class="text">More Features <i
                                                    class="fa-sharp fa-regular fa-chevron-down"></i>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="card-plan__feature--list more__feature">
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> 100 GB SSD Storage</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy offers generous hosting with 100GB SSD storage, providing ample space for your data and ensuring high-performance storage solutions."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free SSL</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Secure your website with TakeItCloudy's unlimited free SSL certificates, ensuring encrypted and safe online transactions for your users."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> 99.9% Uptime
                                                Guarantee</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy guarantees 99% uptime, ensuring your website is consistently available and reliable for visitors around the clock."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-xmark"></i> Web Application
                                                Firewall</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Enhance your website's security with TakeItCloudy's Web Application Firewall, protecting against online threats and ensuring a safe online environment."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-trigered">
                                            <span class="text">See less Features <i
                                                    class="fa-sharp fa-regular fa-chevron-up"></i>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- single card end -->
                        <!-- single card -->
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="card-plan ">
                                <div class="card-plan__package">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/index-11/plan/cloud.svg') }}" height="30"
                                            width="30" alt="">
                                    </div>
                                    <h4 class="package__name">Cloud Startup</h4>
                                </div>
                                <p class="card-plan__desc">Everything need to your website</p>
                                <h5 class="card-plan__price">
                                    <sup>$</sup> 139.63 <sub>/ month</sub>
                                </h5>
                                <div class="card-plan__cartbtn">
                                    <a href="#">add to cart</a>
                                </div>
                                <p class="card-plan__renew-price">
                                    $ 353.99 /mo when you renew
                                </p>
                                <div class="card-plan__feature">
                                    <ul class="card-plan__feature--list">
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> 1 Website</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Explore, discover, and learn on our innovative and informative website."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Standard
                                                Performance</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Unlock superior online experiences with our standard performance solutions, ensuring reliability, speed, and seamless functionality for your website needs."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> 24/7/365 Support</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy provides reliable 24/7 support for your hosting needs, ensuring assistance whenever you require help."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Free Email</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy offers complimentary email services, empowering your online communication with reliable and secure free email solutions."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited
                                                Bandwidth</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy provides unlimited bandwidth, ensuring seamless data transfer for your website's optimal performance and user experience."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> 100 GB SSD Storage</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Elevate your online presence with TakeItCloudy, offering unlimited bandwidth for your domain, ensuring optimal performance and seamless data flow."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>


                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free SSL</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Secure your website with TakeItCloudy's unlimited free SSL certificates, ensuring encrypted and safe online transactions for your users."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> 99.9% Uptime
                                                Guarantee</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy guarantees 99% uptime, ensuring your website is consistently available and reliable for visitors around the clock."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Web Application
                                                Firewall</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Enhance your website's security with TakeItCloudy's Web Application Firewall, protecting against online threats and ensuring a safe online environment."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-trigered">
                                            <span class="text">More Features <i
                                                    class="fa-sharp fa-regular fa-chevron-down"></i>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="card-plan__feature--list more__feature">
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> 100 GB SSD Storage</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy offers generous hosting with 100GB SSD storage, providing ample space for your data and ensuring high-performance storage solutions."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free SSL</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Secure your website with TakeItCloudy's unlimited free SSL certificates, ensuring encrypted and safe online transactions for your users."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> 99.9% Uptime
                                                Guarantee</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy guarantees 99% uptime, ensuring your website is consistently available and reliable for visitors around the clock."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Web Application
                                                Firewall</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Enhance your website's security with TakeItCloudy's Web Application Firewall, protecting against online threats and ensuring a safe online environment."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-trigered">
                                            <span class="text">See less Features <i
                                                    class="fa-sharp fa-regular fa-chevron-up"></i>
                                            </span>
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

    <!-- TakeItCloudy FEATURE AREA -->
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
    <!-- TakeItCloudy FEATURE AREA END -->

    <!-- HOSTING FEATURE AREA START -->
    <div class="rts-hosting-feature-area section__padding">
        <div class="container">
            <div class="section-inner">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="left-side-image">
                            <img src="{{ asset('assets/images/feature/feature-hero-01.webp') }}" width="523" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-side-content">
                            <div class="section-title-area text-start">
                                <h2 class="section-title">24/7 Support for Your Success</h2>
                            </div>
                            <ul class="feature-list">
                                <li><i class="fa-solid fa-check"></i>Ensure support is available 24/7, including weekends
                                    and holidays.</li>
                                <li><i class="fa-solid fa-check"></i>Implement a CDN to deliver content quickly to users
                                    worldwide.</li>
                                <li><i class="fa-solid fa-check"></i>Offer various support channels such as live chat,
                                    email, phone, and a ticketing system.</li>
                                <li><i class="fa-solid fa-check"></i>Aim for rapid response times to customer inquiries to
                                    minimize downtime and frustration.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- HOSTING FEATURE AREA END-->

    <!-- WHY CHOOSE US -->
    <section class="rts-whychoose section__padding body-bg-2">
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

    <!-- TESTIMONIAL -->
    <section class="rts-testimonial section__padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="image-area">
                        <img src="{{ asset('assets/images/testimonials/author-01.webp') }}" width="410" alt="">
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
                                        <p>Since switching to this hosting provider, my website's load times significantly
                                            decreased. My visitors are having a much smoother experience. Highly recommend!
                                            The features are pretty standard compared to other hosting services I’ve used.
                                            It does the job but doesn't stand out in any particular area.</p>
                                    </div>
                                    <div class="author__meta">
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
                                        <p>Since switching to this hosting provider, my website's load times significantly
                                            decreased. My visitors are having a much smoother experience. Highly recommend!
                                            The features are pretty standard compared to other hosting services I’ve used.
                                            It does the job but doesn't stand out in any particular area.</p>
                                    </div>
                                    <div class="author__meta">
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
                                        <p>Since switching to this hosting provider, my website's load times significantly
                                            decreased. My visitors are having a much smoother experience. Highly recommend!
                                            The features are pretty standard compared to other hosting services I’ve used.
                                            It does the job but doesn't stand out in any particular area.</p>
                                    </div>
                                    <div class="author__meta">
                                        <div class="author__meta--details">
                                            <a href="#">Jamie Knop</a>
                                            <span>Business Owner</span>
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

@endsection