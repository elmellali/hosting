@extends('layout.layout')

@php
    $breadcrumb = 'false';
@endphp

@section('content')

    <!-- Breadcrumb -->
    <div class="rts-breadcrumb-area body-bg-2">
        <div class="container">
            <div class="breadcrumb-inner">
                <div class="row align-items-center">
                    <div class="col-lg-7 order-change">
                        <div class="breadcrumb-content">
                            <h1 class="heading-title" style="max-width: 696px;">Unbeatable WordPress Hosting: Power & Speed
                            </h1>
                            <p class="desc">Unlock the full potential of your WordPress website with our unbeatable hosting
                                plans!</p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="breadcrumb-image-area">
                            <img src="{{ asset('assets/images/author/author__one.png') }}" width="373" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-shape-area">
            <img src="{{ asset('assets/images/banner/breadcrumb-shape.svg') }}" alt="">
        </div>
    </div>
    <!-- Breadcrumb END -->

    <!-- WordPress Community Start -->
    <section class="rts-wordpress-section-community pt--120">
        <div class="container">
            <div class="section-inner">
                <h4 class="section-title text-center">Highly rated by the WordPress community</h4>
                <div class="brand-logo-area">
                    <div class="brand-image">
                        <img src="{{ asset('assets/images/brand/trust-pilot-2.svg') }}" alt="">
                    </div>
                    <div class="brand-image">
                        <img src="{{ asset('assets/images/brand/google.svg') }}" alt="">
                    </div>
                    <div class="brand-image">
                        <img src="{{ asset('assets/images/brand/spotify.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- WordPress Community End -->

    <!-- HOSTING PLAN -->
    <section class="rts-plan section__padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="rts-section text-center w-560">
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
                                                <h5 class="card-plan__price">
                                                    $7.20 <sub>/ mo</sub>
                                                </h5>
                                                <div class="card-plan__cartbtn">
                                                    <form action="{{ route('cart.add') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="domain" value="Basic Plan">
                                                        <input type="hidden" name="type" value="hosting">
                                                        <input type="hidden" name="price" value="7.20">
                                                        <button type="submit"
                                                            class="btn-premium w-100 justify-content-center">Add to Cart
                                                            <i class="fa-regular fa-cart-shopping"></i></button>
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
                                                <h5 class="card-plan__price">
                                                    $7.20 <sub>/ mo</sub>
                                                </h5>
                                                <div class="card-plan__cartbtn">
                                                    <form action="{{ route('cart.add') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="domain" value="Business Plan">
                                                        <input type="hidden" name="type" value="hosting">
                                                        <input type="hidden" name="price" value="7.20">
                                                        <button type="submit"
                                                            class="btn-premium w-100 justify-content-center">Add to Cart
                                                            <i class="fa-regular fa-cart-shopping"></i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </th>
                                        <!-- top-right-corner -->
                                        <th class="package__item">
                                            <div class="package__item__info">
                                                <span class="package__type">Pro Plan</span>
                                                <span class="start">Renews at $5.32/month</span>
                                                <h5 class="card-plan__price">
                                                    $7.20 <sub>/ mo</sub>
                                                </h5>
                                                <div class="card-plan__cartbtn">
                                                    <form action="{{ route('cart.add') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="domain" value="Pro Plan">
                                                        <input type="hidden" name="type" value="hosting">
                                                        <input type="hidden" name="price" value="7.20">
                                                        <button type="submit"
                                                            class="btn-premium w-100 justify-content-center">Add to Cart
                                                            <i class="fa-regular fa-cart-shopping"></i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <!-- tbody -->
                            </table>
                            <div class="accordion accordion-flush" id="rts-accordion">
                                <div class="accordion-item active">
                                    <div class="accordion-header" id="six">
                                        <h4 class="accordion-button collapse show" data-bs-toggle="collapse"
                                            data-bs-target="#item__six" aria-expanded="false" aria-controls="item__six">
                                            Plan Features
                                        </h4>
                                    </div>
                                    <div id="item__six" class="accordion-collapse collapse collapse show"
                                        aria-labelledby="six" data-bs-parent="#rts-accordion">
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
                                        data-bs-parent="#rts-accordion">
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
                                        data-bs-parent="#rts-accordion">
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
                                        data-bs-parent="#rts-accordion">
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
                                        data-bs-parent="#rts-accordion">
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
                                                <h5 class="card-plan__price">
                                                    $17.20 <sub>/ yr</sub>
                                                </h5>
                                                <div class="card-plan__cartbtn">
                                                    <form action="{{ route('cart.add') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="domain" value="Basic Plan">
                                                        <input type="hidden" name="type" value="hosting">
                                                        <input type="hidden" name="price" value="17.20">
                                                        <button type="submit"
                                                            class="btn-premium w-100 justify-content-center">Get
                                                            Started</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </th>
                                        <!-- top-right-corner -->
                                        <th class="package__item">
                                            <!-- table-title-3 -->
                                            <div class="package__item__info">
                                                <span class="package__type">Business Plan</span>
                                                <span class="start">Renews at $15.32/yearly</span>
                                                <h5 class="card-plan__price">
                                                    $17.20 <sub>/ yr</sub>
                                                </h5>
                                                <div class="card-plan__cartbtn">
                                                    <form action="{{ route('cart.add') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="domain" value="Business Plan">
                                                        <input type="hidden" name="type" value="hosting">
                                                        <input type="hidden" name="price" value="17.20">
                                                        <button type="submit"
                                                            class="btn-premium w-100 justify-content-center">Get
                                                            Started</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </th>
                                        <!-- top-right-corner -->
                                        <th class="package__item">
                                            <div class="package__item__info">
                                                <span class="package__type">Pro Plan</span>
                                                <span class="start">Renews at $15.32/yearly</span>
                                                <h5 class="card-plan__price">
                                                    $17.20 <sub>/ yr</sub>
                                                </h5>
                                                <div class="card-plan__cartbtn">
                                                    <form action="{{ route('cart.add') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="domain" value="Pro Plan">
                                                        <input type="hidden" name="type" value="hosting">
                                                        <input type="hidden" name="price" value="17.20">
                                                        <button type="submit"
                                                            class="btn-premium w-100 justify-content-center">Get
                                                            Started</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <!-- tbody -->
                            </table>
                            <div class="accordion accordion-flush" id="rts-accordion">
                                <div class="accordion-item active">
                                    <div class="accordion-header" id="eleven">
                                        <h4 class="accordion-button collapse show" data-bs-toggle="collapse"
                                            data-bs-target="#item__eleven" aria-expanded="false"
                                            aria-controls="item__eleven">
                                            Plan Features
                                        </h4>
                                    </div>
                                    <div id="item__eleven" class="accordion-collapse collapse collapse show"
                                        aria-labelledby="eleven" data-bs-parent="#rts-accordion">
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
                                        data-bs-parent="#rts-accordion">
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
                                        data-bs-parent="#rts-accordion">
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
                                        data-bs-parent="#rts-accordion">
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
                                        data-bs-parent="#rts-accordion">
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
                                                <h5 class="card-plan__price">
                                                    $37.20 <sub>/ 3yr</sub>
                                                </h5>
                                                <div class="card-plan__cartbtn">
                                                    <form action="{{ route('cart.add') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="domain" value="Basic Plan">
                                                        <input type="hidden" name="type" value="hosting">
                                                        <input type="hidden" name="price" value="37.20">
                                                        <button type="submit"
                                                            class="btn-premium w-100 justify-content-center">Get
                                                            Started</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </th>
                                        <!-- top-right-corner -->
                                        <th class="package__item">
                                            <!-- table-title-3 -->
                                            <div class="package__item__info">
                                                <span class="package__type">Business Plan</span>
                                                <span class="start">Renews at $35.32/3yr</span>
                                                <h5 class="card-plan__price">
                                                    $37.20 <sub>/ 3yr</sub>
                                                </h5>
                                                <div class="card-plan__cartbtn">
                                                    <form action="{{ route('cart.add') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="domain" value="Business Plan">
                                                        <input type="hidden" name="type" value="hosting">
                                                        <input type="hidden" name="price" value="37.20">
                                                        <button type="submit"
                                                            class="btn-premium w-100 justify-content-center">Get
                                                            Started</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </th>
                                        <!-- top-right-corner -->
                                        <th class="package__item">
                                            <div class="package__item__info">
                                                <span class="package__type">Pro Plan</span>
                                                <span class="start">Renews at $35.32/3yr</span>
                                                <h5 class="card-plan__price">
                                                    $37.20 <sub>/ 3yr</sub>
                                                </h5>
                                                <div class="card-plan__cartbtn">
                                                    <form action="{{ route('cart.add') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="domain" value="Pro Plan">
                                                        <input type="hidden" name="type" value="hosting">
                                                        <input type="hidden" name="price" value="37.20">
                                                        <button type="submit"
                                                            class="btn-premium w-100 justify-content-center">Get
                                                            Started</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <!-- tbody -->
                            </table>
                            <div class="accordion accordion-flush" id="rts-accordion">
                                <div class="accordion-item active">
                                    <div class="accordion-header" id="sixteen">
                                        <h4 class="accordion-button collapse show" data-bs-toggle="collapse"
                                            data-bs-target="#item__sixteen" aria-expanded="false"
                                            aria-controls="item__sixteen">
                                            Plan Features
                                        </h4>
                                    </div>
                                    <div id="item__sixteen" class="accordion-collapse collapse collapse show"
                                        aria-labelledby="sixteen" data-bs-parent="#rts-accordion">
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
                                        aria-labelledby="seventeen" data-bs-parent="#rts-accordion">
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
                                        data-bs-parent="#rts-accordion">
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
                                        data-bs-parent="#rts-accordion">
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
                                        data-bs-parent="#rts-accordion">
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

    <!-- WordPress Hosting Feature Start -->
    <section class="rts-wordpress-hosting-feature-area body-bg-2 section__padding">
        <div class="container">
            <div class="rts-section section-title-area text-center">
                <h2 class="rts-section__title"> The Fastest WordPress Hosting Around </h2>
                <p class="desc">EasyWP is not only the fastest managed WordPress Hosting around, but also the most
                    affordable.</p>
            </div>
            <div class="section-inner">
                <div class="rts-feature__table">
                    <table class="table-bordered">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Fully Loaded Time</th>
                                <th>Time to First Byte</th>
                                <th>Price Per Month</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="left">EasyWP</td>
                                <td>0.7 seconds</td>
                                <td>192 milliseconds</td>
                                <td>$6.88</td>
                            </tr>
                            <tr>
                                <td class="left">GoDaddy</td>
                                <td>0.3 seconds</td>
                                <td>126 milliseconds</td>
                                <td>$11.41</td>
                            </tr>
                            <tr>
                                <td class="left">Bluehost</td>
                                <td>0.4 seconds</td>
                                <td>396 milliseconds</td>
                                <td>$19.01</td>
                            </tr>
                            <tr>
                                <td class="left">WP Engine</td>
                                <td>0.8 seconds</td>
                                <td>556 milliseconds</td>
                                <td>$26.33</td>
                            </tr>
                            <tr>
                                <td class="left">Kinsta</td>
                                <td>0.5 seconds</td>
                                <td>410 milliseconds</td>
                                <td>$30.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- WordPress Hosting Feature End -->

    <div class="rts-hosting-feature-four wordpress pt--120 pb--120">
        <div class="container">
            <div class="rts-section ">
                <div class="rts-section__two">
                    <h3 class="title font-40 mb-0 sal-animate" data-sal="slide-down" data-sal-delay="100"
                        data-sal-duration="800">Top WordPress Plugins</h3>
                </div>
                <div class="rts-section-description">
                    <p class="description sal-animate" data-sal="slide-down" data-sal-delay="200" data-sal-duration="800">
                        WordPress offers a robust plugin system that makes it <br> easy to add the functionality
                    </p>
                </div>
            </div>
            <!-- feature lsit -->
            <div class="row g-30 justify-content-md-center">
                <div class="col-lg-3 col-md-5 col-sm-6">
                    <div class="feature__single">
                        <div class="feature__single--icon">
                            <img src="{{ asset('assets/images/feature/plugin-01.svg') }}" alt="">
                        </div>
                        <a href="#" class="feature__single--title">BbPress</a>
                        <p class="feature__single--description">bbPress adds forum capability
                            to existing WordPress site.
                        </p>
                        <a href="#" class="feature-btn"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5 col-sm-6">
                    <div class="feature__single">
                        <div class="feature__single--icon">
                            <img src="{{ asset('assets/images/feature/plugin-02.svg') }}" alt="">
                        </div>
                        <a href="#" class="feature__single--title">BuddyPress</a>
                        <p class="feature__single--description">Add social networking right into WordPress site.
                        </p>
                        <a href="#" class="feature-btn"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5 col-sm-6">
                    <div class="feature__single">
                        <div class="feature__single--icon">
                            <img src="{{ asset('assets/images/feature/plugin-03.svg') }}" alt="">
                        </div>
                        <a href="#" class="feature__single--title">WooCommerce</a>
                        <p class="feature__single--description">Easily eCommerce functionality
                            to site with woocommerce
                        </p>
                        <a href="#" class="feature-btn"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5 col-sm-6">
                    <div class="feature__single">
                        <div class="feature__single--icon">
                            <img src="{{ asset('assets/images/feature/plugin-04.svg') }}" alt="">
                        </div>
                        <a href="#" class="feature__single--title">Contact Form 7</a>
                        <p class="feature__single--description">Makes it easy for your visitors to email you from your site!
                        </p>
                        <a href="#" class="feature-btn"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="bottom-counter-area">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="left-side-content">
                            <h4 class="heading-title">WordPress Hosting the Smart Way: Speed, Security, and Support</h4>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="right-side-counter">
                            <div class="counter-wrapper">
                                <h2 class="title-main"><span class="counter animated fadeInDownBig">50</span><span>K</span>
                                </h2>
                                <p class="desc">
                                    Easy to GrRecommended visitors every month for starter planow
                                </p>
                            </div>
                            <div class="counter-wrapper">
                                <h2 class="title-main"><span class="counter animated fadeInDownBig">3</span><span>X</span>
                                </h2>
                                <p class="desc">
                                    Faster than standard WordPress on traditional shared hosting
                                </p>
                            </div>
                            <div class="counter-wrapper">
                                <h2 class="title-main"><span
                                        class="counter animated fadeInDownBig">99.9</span><span>%</span> </h2>
                                <p class="desc">
                                    Uptime Guarantee
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- TESTIMONIAL -->
    <section class="rts-testimonial area-2 section__padding body-bg-2">
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

    <!-- TakeItCloudy FEATURE AREA -->
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