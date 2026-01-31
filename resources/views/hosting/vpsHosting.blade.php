@extends('layout.layout')

@php
    $title = 'VPS Hosting';
    $subTitle = 'Control and flexibility when your business needs it';
    $img = 'src="' . asset('assets/images/banner/breadcrumb-04.webp') . '" width="310" alt=""';
@endphp

@section('content')

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

    <!-- HOSTING OPTION -->
    <div class="rts-hosting-type pb--120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row justify-content-center">
                        <div class="section-title-area text-center">
                            <h2 class="section-title">VPS Hosting Feature</h2>
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
                            <div class="col-lg-3 col-md-6">
                                <div class="rts-hosting-type__single area-2">
                                    <div class="hosting-icon">
                                        <img src="{{ asset('assets/images/hosting/11.svg') }}" alt="">
                                    </div>
                                    <a href="{{ route('sharedHosting') }}" class="title">Completely Customizable</a>
                                    <p class="excerpt">Manage everything from one single dashboard (cPanel).</p>
                                    <a href="{{ route('sharedHosting') }}" class="primary__btn border__btn">View Details <i
                                            class="fa-regular fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <!-- single package end -->
                            <!-- single package -->
                            <div class="col-lg-3 col-md-6">
                                <div class="rts-hosting-type__single area-2">
                                    <div class="hosting-icon">
                                        <img src="{{ asset('assets/images/hosting/12.svg') }}" alt="">
                                    </div>
                                    <a href="{{ route('wordpressHosting') }}" class="title">Powerful VPS Security</a>
                                    <p class="excerpt">Create and modify your clients’ hosting accounts with Web Host.</p>
                                    <a href="{{ route('wordpressHosting') }}" class="primary__btn border__btn">View Details
                                        <i class="fa-regular fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <!-- single package end -->
                            <!-- single package -->
                            <div class="col-lg-3 col-md-6">
                                <div class="rts-hosting-type__single area-2">
                                    <div class="hosting-icon">
                                        <img src="{{ asset('assets/images/hosting/13.svg') }}" alt="">
                                    </div>
                                    <a href="{{ route('cloudHosting') }}" class="title">Incredibly Fast</a>
                                    <p class="excerpt">Whether you want to set up client invoices or brand the existing.</p>
                                    <a href="{{ route('cloudHosting') }}" class="primary__btn border__btn">View Details <i
                                            class="fa-regular fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <!-- single package end -->
                            <!-- single package -->
                            <div class="col-lg-3 col-md-6">
                                <div class="rts-hosting-type__single area-2">
                                    <div class="hosting-icon">
                                        <img src="{{ asset('assets/images/hosting/14.svg') }}" alt="">
                                    </div>
                                    <a href="{{ route('resellerHosting') }}" class="title">State-of-Art Technology</a>
                                    <p class="excerpt">Deliver fast, reliable, and secure hosting to your clients, thanks.
                                    </p>
                                    <a href="{{ route('resellerHosting') }}" class="primary__btn border__btn">View Details
                                        <i class="fa-regular fa-long-arrow-right"></i></a>
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
                                        <p>I've been using their web hosting services for over a year now, and I happier.
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

    <!-- HOSTING LATEST BLOG -->
    {{-- <section class="rts-blog pt--120 pb--60">
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