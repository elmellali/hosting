@extends('layout.layout')

@php
    $title = 'Pricing Package';
    $subTitle = 'Perfect for new entrepreneurs, this package offers essential tools and support to help you get started.';
    $img = 'src="' . asset('assets/images/banner/breadcrumb-06.webp') . '" width="353" alt=""';
@endphp

@section('content')

    <!-- PRICING PLAN START -->
    <div class="rts-pricing-plan section__padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="rts-section text-center">
                    <h2 class="rts-section__title">Choose Hosting Plan</h2>
                    <p class="rts-section__description w-450 ">Globally incubate next-generation e-services via state of
                        the art technology.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-5">
                        <div class="rts-pricing-plan__tab color-primary">
                            <div class="tab__button">
                                <div class="tab__button__item">
                                    <button class="tab__btn1 active" data-tab="monthly">monthly</button>
                                    <button class="tab__btn1" data-tab="yearly">yearly</button>
                                    <button class="tab__btn1" data-tab="2year">2year</button>
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
                <div class="tab__content1 open" id="monthly">
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
                                    <form action="{{ route('cart.add') }}" method="POST">
                @csrf
                <input type="hidden" name="domain" value="Basic">
                <input type="hidden" name="type" value="hosting">
                <input type="hidden" name="price" value="3.63">
                <button type="submit" class="btn-premium w-100 justify-content-center">Add to Cart <i
                                            class="fa-regular fa-cart-shopping"></i></button>
            </form>
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
                                            <span class="text"><i class="fa-regular fa-check"></i> 24/7/365
                                                Support</span>
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
                                            <span class="text"><i class="fa-regular fa-xmark"></i> 100 GB SSD
                                                Storage</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Elevate your online presence with TakeItCloudy, offering unlimited bandwidth for your domain, ensuring optimal performance and seamless data flow."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>


                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free
                                                SSL</span>
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
                                            <span class="text"><i class="fa-regular fa-check"></i> 100 GB SSD
                                                Storage</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy offers generous hosting with 100GB SSD storage, providing ample space for your data and ensuring high-performance storage solutions."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free
                                                SSL</span>
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
                                    <form action="{{ route('cart.add') }}" method="POST">
                @csrf
                <input type="hidden" name="domain" value="Premium">
                <input type="hidden" name="type" value="hosting">
                <input type="hidden" name="price" value="6.63">
                <button type="submit" class="btn-premium w-100 justify-content-center">Add to Cart <i
                                            class="fa-regular fa-cart-shopping"></i></button>
            </form>
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
                                            <span class="text"><i class="fa-regular fa-check"></i> 24/7/365
                                                Support</span>
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
                                            <span class="text"><i class="fa-regular fa-xmark"></i> 100 GB SSD
                                                Storage</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Elevate your online presence with TakeItCloudy, offering unlimited bandwidth for your domain, ensuring optimal performance and seamless data flow."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>


                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free
                                                SSL</span>
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
                                            <span class="text"><i class="fa-regular fa-check"></i> 100 GB SSD
                                                Storage</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy offers generous hosting with 100GB SSD storage, providing ample space for your data and ensuring high-performance storage solutions."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free
                                                SSL</span>
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
                                    <form action="{{ route('cart.add') }}" method="POST">
                @csrf
                <input type="hidden" name="domain" value="Business">
                <input type="hidden" name="type" value="hosting">
                <input type="hidden" name="price" value="8.63">
                <button type="submit" class="btn-premium w-100 justify-content-center">Add to Cart <i
                                            class="fa-regular fa-cart-shopping"></i></button>
            </form>
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
                                            <span class="text"><i class="fa-regular fa-check"></i> 24/7/365
                                                Support</span>
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
                                            <span class="text"><i class="fa-regular fa-check"></i> 100 GB SSD
                                                Storage</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Elevate your online presence with TakeItCloudy, offering unlimited bandwidth for your domain, ensuring optimal performance and seamless data flow."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>


                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free
                                                SSL</span>
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
                                            <span class="text"><i class="fa-regular fa-check"></i> 100 GB SSD
                                                Storage</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy offers generous hosting with 100GB SSD storage, providing ample space for your data and ensuring high-performance storage solutions."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free
                                                SSL</span>
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
                                    <form action="{{ route('cart.add') }}" method="POST">
                @csrf
                <input type="hidden" name="domain" value="Cloud Startup">
                <input type="hidden" name="type" value="hosting">
                <input type="hidden" name="price" value="11.63">
                <button type="submit" class="btn-premium w-100 justify-content-center">Add to Cart <i
                                            class="fa-regular fa-cart-shopping"></i></button>
            </form>
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
                                            <span class="text"><i class="fa-regular fa-check"></i> 24/7/365
                                                Support</span>
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
                                            <span class="text"><i class="fa-regular fa-check"></i> 100 GB SSD
                                                Storage</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Elevate your online presence with TakeItCloudy, offering unlimited bandwidth for your domain, ensuring optimal performance and seamless data flow."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>


                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free
                                                SSL</span>
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
                                            <span class="text"><i class="fa-regular fa-check"></i> 100 GB SSD
                                                Storage</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy offers generous hosting with 100GB SSD storage, providing ample space for your data and ensuring high-performance storage solutions."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free
                                                SSL</span>
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
                <div class="tab__content1" id="yearly">
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
                                    <form action="{{ route('cart.add') }}" method="POST">
                @csrf
                <input type="hidden" name="domain" value="Basic">
                <input type="hidden" name="type" value="hosting">
                <input type="hidden" name="price" value="36.63">
                <button type="submit" class="btn-premium w-100 justify-content-center">Add to Cart <i
                                            class="fa-regular fa-cart-shopping"></i></button>
            </form>
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
                                            <span class="text"><i class="fa-regular fa-check"></i> 24/7/365
                                                Support</span>
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
                                            <span class="text"><i class="fa-regular fa-xmark"></i> 100 GB SSD
                                                Storage</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Elevate your online presence with TakeItCloudy, offering unlimited bandwidth for your domain, ensuring optimal performance and seamless data flow."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>


                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free
                                                SSL</span>
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
                                            <span class="text"><i class="fa-regular fa-check"></i> 100 GB SSD
                                                Storage</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy offers generous hosting with 100GB SSD storage, providing ample space for your data and ensuring high-performance storage solutions."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free
                                                SSL</span>
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
                                    <form action="{{ route('cart.add') }}" method="POST">
                @csrf
                <input type="hidden" name="domain" value="Premium">
                <input type="hidden" name="type" value="hosting">
                <input type="hidden" name="price" value="79.56">
                <button type="submit" class="btn-premium w-100 justify-content-center">Add to Cart <i
                                            class="fa-regular fa-cart-shopping"></i></button>
            </form>
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
                                            <span class="text"><i class="fa-regular fa-check"></i> 24/7/365
                                                Support</span>
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
                                            <span class="text"><i class="fa-regular fa-xmark"></i> 100 GB SSD
                                                Storage</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Elevate your online presence with TakeItCloudy, offering unlimited bandwidth for your domain, ensuring optimal performance and seamless data flow."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>


                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free
                                                SSL</span>
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
                                            <span class="text"><i class="fa-regular fa-check"></i> 100 GB SSD
                                                Storage</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy offers generous hosting with 100GB SSD storage, providing ample space for your data and ensuring high-performance storage solutions."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free
                                                SSL</span>
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
                                    <form action="{{ route('cart.add') }}" method="POST">
                @csrf
                <input type="hidden" name="domain" value="Business">
                <input type="hidden" name="type" value="hosting">
                <input type="hidden" name="price" value="103.63">
                <button type="submit" class="btn-premium w-100 justify-content-center">Add to Cart <i
                                            class="fa-regular fa-cart-shopping"></i></button>
            </form>
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
                                            <span class="text"><i class="fa-regular fa-check"></i> 24/7/365
                                                Support</span>
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
                                            <span class="text"><i class="fa-regular fa-check"></i> 100 GB SSD
                                                Storage</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Elevate your online presence with TakeItCloudy, offering unlimited bandwidth for your domain, ensuring optimal performance and seamless data flow."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>


                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free
                                                SSL</span>
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
                                            <span class="text"><i class="fa-regular fa-check"></i> 100 GB SSD
                                                Storage</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy offers generous hosting with 100GB SSD storage, providing ample space for your data and ensuring high-performance storage solutions."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free
                                                SSL</span>
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
                                    <form action="{{ route('cart.add') }}" method="POST">
                @csrf
                <input type="hidden" name="domain" value="Cloud Startup">
                <input type="hidden" name="type" value="hosting">
                <input type="hidden" name="price" value="139.63">
                <button type="submit" class="btn-premium w-100 justify-content-center">Add to Cart <i
                                            class="fa-regular fa-cart-shopping"></i></button>
            </form>
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
                                            <span class="text"><i class="fa-regular fa-check"></i> 24/7/365
                                                Support</span>
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
                                            <span class="text"><i class="fa-regular fa-check"></i> 100 GB SSD
                                                Storage</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Elevate your online presence with TakeItCloudy, offering unlimited bandwidth for your domain, ensuring optimal performance and seamless data flow."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>


                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free
                                                SSL</span>
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
                                            <span class="text"><i class="fa-regular fa-check"></i> 100 GB SSD
                                                Storage</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy offers generous hosting with 100GB SSD storage, providing ample space for your data and ensuring high-performance storage solutions."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free
                                                SSL</span>
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
                <div class="tab__content1" id="2year">
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
                                    <sup>$</sup> 72.63 <sub>/ month</sub>
                                </h5>
                                <div class="card-plan__cartbtn">
                                    <form action="{{ route('cart.add') }}" method="POST">
                @csrf
                <input type="hidden" name="domain" value="Basic">
                <input type="hidden" name="type" value="hosting">
                <input type="hidden" name="price" value="72.63">
                <button type="submit" class="btn-premium w-100 justify-content-center">Add to Cart <i
                                            class="fa-regular fa-cart-shopping"></i></button>
            </form>
                                </div>
                                <p class="card-plan__renew-price">
                                    $ 158.99 /year when you renew
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
                                            <span class="text"><i class="fa-regular fa-check"></i> 24/7/365
                                                Support</span>
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
                                            <span class="text"><i class="fa-regular fa-xmark"></i> 100 GB SSD
                                                Storage</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Elevate your online presence with TakeItCloudy, offering unlimited bandwidth for your domain, ensuring optimal performance and seamless data flow."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>


                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free
                                                SSL</span>
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
                                            <span class="text"><i class="fa-regular fa-check"></i> 100 GB SSD
                                                Storage</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy offers generous hosting with 100GB SSD storage, providing ample space for your data and ensuring high-performance storage solutions."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free
                                                SSL</span>
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
                                    <sup>$</sup> 158.56 <sub>/ month</sub>
                                </h5>
                                <div class="card-plan__cartbtn">
                                    <form action="{{ route('cart.add') }}" method="POST">
                @csrf
                <input type="hidden" name="domain" value="Premium">
                <input type="hidden" name="type" value="hosting">
                <input type="hidden" name="price" value="158.56">
                <button type="submit" class="btn-premium w-100 justify-content-center">Add to Cart <i
                                            class="fa-regular fa-cart-shopping"></i></button>
            </form>
                                </div>
                                <p class="card-plan__renew-price">
                                    $ 302.99 /year when you renew
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
                                            <span class="text"><i class="fa-regular fa-check"></i> 24/7/365
                                                Support</span>
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
                                            <span class="text"><i class="fa-regular fa-xmark"></i> 100 GB SSD
                                                Storage</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Elevate your online presence with TakeItCloudy, offering unlimited bandwidth for your domain, ensuring optimal performance and seamless data flow."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>


                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free
                                                SSL</span>
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
                                            <span class="text"><i class="fa-regular fa-check"></i> 100 GB SSD
                                                Storage</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy offers generous hosting with 100GB SSD storage, providing ample space for your data and ensuring high-performance storage solutions."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free
                                                SSL</span>
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
                                    <sup>$</sup> 206.63 <sub>/ month</sub>
                                </h5>
                                <div class="card-plan__cartbtn">
                                    <form action="{{ route('cart.add') }}" method="POST">
                @csrf
                <input type="hidden" name="domain" value="Business">
                <input type="hidden" name="type" value="hosting">
                <input type="hidden" name="price" value="206.63">
                <button type="submit" class="btn-premium w-100 justify-content-center">Add to Cart <i
                                            class="fa-regular fa-cart-shopping"></i></button>
            </form>
                                </div>
                                <p class="card-plan__renew-price">
                                    $ 475.99 /mo when you renew
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
                                            <span class="text"><i class="fa-regular fa-check"></i> 24/7/365
                                                Support</span>
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
                                            <span class="text"><i class="fa-regular fa-check"></i> 100 GB SSD
                                                Storage</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Elevate your online presence with TakeItCloudy, offering unlimited bandwidth for your domain, ensuring optimal performance and seamless data flow."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>


                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free
                                                SSL</span>
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
                                            <span class="text"><i class="fa-regular fa-check"></i> 100 GB SSD
                                                Storage</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy offers generous hosting with 100GB SSD storage, providing ample space for your data and ensuring high-performance storage solutions."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free
                                                SSL</span>
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
                                    <sup>$</sup> 278.63 <sub>/ month</sub>
                                </h5>
                                <div class="card-plan__cartbtn">
                                    <form action="{{ route('cart.add') }}" method="POST">
                @csrf
                <input type="hidden" name="domain" value="Cloud Startup">
                <input type="hidden" name="type" value="hosting">
                <input type="hidden" name="price" value="278.63">
                <button type="submit" class="btn-premium w-100 justify-content-center">Add to Cart <i
                                            class="fa-regular fa-cart-shopping"></i></button>
            </form>
                                </div>
                                <p class="card-plan__renew-price">
                                    $ 705.99 /mo when you renew
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
                                            <span class="text"><i class="fa-regular fa-check"></i> 24/7/365
                                                Support</span>
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
                                            <span class="text"><i class="fa-regular fa-check"></i> 100 GB SSD
                                                Storage</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="Elevate your online presence with TakeItCloudy, offering unlimited bandwidth for your domain, ensuring optimal performance and seamless data flow."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>


                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free
                                                SSL</span>
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
                                            <span class="text"><i class="fa-regular fa-check"></i> 100 GB SSD
                                                Storage</span>
                                            <span class="tolltip" data-bs-toggle="tooltip"
                                                data-bs-custom-class="pricing-eleven" data-bs-placement="bottom"
                                                data-bs-original-title="TakeItCloudy offers generous hosting with 100GB SSD storage, providing ample space for your data and ensuring high-performance storage solutions."><i
                                                    class="fa-light fa-circle-question"></i></span>
                                        </li>
                                        <li class="card-plan__feature--list-item">
                                            <span class="text"><i class="fa-regular fa-check"></i> Unlimited Free
                                                SSL</span>
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

    <!-- PRICING PLAN START -->
    <div class="rts-pricing-plan pricing-plan-2">
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
                                    <button class="tab__btn2 active" data-tab="monthly2">Monthly</button>
                                    <button class="tab__btn2" data-tab="yearly2">Yearly</button>
                                    <button class="tab__btn2" data-tab="2year2">2 Year</button>
                                    <button class="tab__btn2 last" data-tab="3year2">3 Year</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- PRICING PLAN -->
                <div class="tab__content2 open" id="monthly2">
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
                <button type="submit" class="btn-premium w-100 justify-content-center">Get Started</button>
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
                <button type="submit" class="btn-premium w-100 justify-content-center">Get Started</button>
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
                <button type="submit" class="btn-premium w-100 justify-content-center">Get Started</button>
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
                <button type="submit" class="btn-premium w-100 justify-content-center">Get Started</button>
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
                <div class="tab__content2" id="yearly2">
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
                <button type="submit" class="btn-premium w-100 justify-content-center">Get Started</button>
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
                <button type="submit" class="btn-premium w-100 justify-content-center">Get Started</button>
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
                <button type="submit" class="btn-premium w-100 justify-content-center">Get Started</button>
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
                <button type="submit" class="btn-premium w-100 justify-content-center">Get Started</button>
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
                <div class="tab__content2" id="2year2">
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
                                    $12.29 <sub>/ 3yr</sub>
                                </h5>
                                <div class="card-plan__cartbtn">
                                    <form action="{{ route('cart.add') }}" method="POST">
                @csrf
                <input type="hidden" name="domain" value="Basic Plan">
                <input type="hidden" name="type" value="hosting">
                <input type="hidden" name="price" value="12.29">
                <button type="submit" class="btn-premium w-100 justify-content-center">Get Started</button>
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
                                    $14.30 <sub>/ 3yr</sub>
                                </h5>
                                <div class="card-plan__cartbtn">
                                    <form action="{{ route('cart.add') }}" method="POST">
                @csrf
                <input type="hidden" name="domain" value="Pro SSD">
                <input type="hidden" name="type" value="hosting">
                <input type="hidden" name="price" value="14.30">
                <button type="submit" class="btn-premium w-100 justify-content-center">Get Started</button>
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
                                    $34.63 <sub>/ 3yr</sub>
                                </h5>
                                <div class="card-plan__cartbtn">
                                    <form action="{{ route('cart.add') }}" method="POST">
                @csrf
                <input type="hidden" name="domain" value="Basic Plan">
                <input type="hidden" name="type" value="hosting">
                <input type="hidden" name="price" value="34.63">
                <button type="submit" class="btn-premium w-100 justify-content-center">Get Started</button>
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
                                    $20.20 <sub>/ 3yr</sub>
                                </h5>
                                <div class="card-plan__cartbtn">
                                    <form action="{{ route('cart.add') }}" method="POST">
                @csrf
                <input type="hidden" name="domain" value="Basic Plan">
                <input type="hidden" name="type" value="hosting">
                <input type="hidden" name="price" value="20.20">
                <button type="submit" class="btn-premium w-100 justify-content-center">Get Started</button>
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
                <div class="tab__content2" id="3year2">
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
                <button type="submit" class="btn-premium w-100 justify-content-center">Get Started</button>
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
                <button type="submit" class="btn-premium w-100 justify-content-center">Get Started</button>
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
                <button type="submit" class="btn-premium w-100 justify-content-center">Get Started</button>
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
                <button type="submit" class="btn-premium w-100 justify-content-center">Get Started</button>
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
                                <button class="tab__btn active" data-tab="monthly3">Monthly</button>
                                <button class="tab__btn" data-tab="yearly3">Yearly</button>
                                <button class="tab__btn" data-tab="3year3">3 Year</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- PLAN -->
            <div class="tab__content open" id="monthly3">
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
                                                    <form action="{{ route('cart.add') }}" method="POST">
                @csrf
                <input type="hidden" name="domain" value="Basic">
                <input type="hidden" name="type" value="hosting">
                <input type="hidden" name="price" value="3.63">
                <button type="submit" class="btn-premium w-100 justify-content-center">Get Started</button>
            </form>
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
                                                    <a href="#">Get Started</a>
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
                                                    <a href="#">Get Started</a>
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
            <div class="tab__content" id="yearly3">
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
            <div class="tab__content" id="3year3">
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