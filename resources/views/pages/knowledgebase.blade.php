
@extends('layout.layout')

@php
    $title='Knowledgebase';
    $subTitle='Our support team is famous for being fast, friendly
                            and helpful. Our customers confirm.';
    $img='src="' . asset('assets/images/banner/breadcrumb-07.webp') . '" width="565" alt=""' ;
@endphp

@section('content')

    <!-- KNOWLEDGE BASE ITEM -->
    <div class="rts-knowledgebase pt--120 pb--60">
        <div class="container">
            <div7 class="row g-5">
                <div class="col-xl-4 col-lg-5">
                    <div class="rts-sidebar">
                        <div class="rts-single-widget category-widget knowledge__tab__section">
                            <h4 class="widget-title">Knowledgebase</h4>
                            <ul class="list-unstyled cat__counter nav nav-tabs" id="myTab" role="tablist">

                                <li class="single-cat nav-item" role="presentation">
                                    <button class="button-tab" id="share-hosting" data-bs-toggle="tab" data-bs-target="#share-hosting-tab" type="button" role="tab" aria-controls="share-hosting" aria-selected="true" tabindex="0">Share Hosting <span>(10)</span></button>
                                </li>

                                <li class="single-cat nav-item" role="presentation">
                                    <button class="button-tab" id="ssl" data-bs-toggle="tab" data-bs-target="#ssl-tab" type="button" role="tab" aria-controls="ssl" aria-selected="false" tabindex="0">Certificates SSL <span>(5)</span></button>
                                </li>
                                <li class="single-cat nav-item" role="presentation">
                                    <button class="button-tab" id="domain-transfer" data-bs-toggle="tab" data-bs-target="#domain-transfer-tab" type="button" role="tab" aria-controls="domain-transfer" aria-selected="false" tabindex="0">Domain Transfers <span>(5)</span></button>
                                </li>
                                <li class="single-cat nav-item" role="presentation">
                                    <button class="button-tab" id="cloud-hosting" data-bs-toggle="tab" data-bs-target="#cloud-hosting-tab" type="button" role="tab" aria-controls="cloud-hosting" aria-selected="false" tabindex="0">Cloud VPS <span>(5)</span></button>
                                </li>
                                <li class="single-cat nav-item" role="presentation">
                                    <button class="button-tab" id="dedicated" data-bs-toggle="tab" data-bs-target="#dedicated-tab" type="button" role="tab" aria-controls="dedicated" aria-selected="false" tabindex="0">Dedicated Servers <span>(5)</span></button>
                                </li>
                                <li class="single-cat nav-item" role="presentation">
                                    <button class="button-tab" id="email-service" data-bs-toggle="tab" data-bs-target="#email-service-tab" type="button" role="tab" aria-controls="email-service" aria-selected="false" tabindex="0">Email Service <span>(5)</span></button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show knowledge__content" id="share-hosting-tab" role="tabpanel" aria-labelledby="share-hosting">
                            <div class="content-list">
                                <div class="single-content">
                                    <h5>Share Hosting</h5>
                                    <p class="icon-text"><span><i class="fa-regular fa-file-lines"></i></span>How to Create,
                                        Update, and Delete a Project?</p>
                                    <p>A comprehensive guide on how you can create, update, and delete a project on
                                        the Cloudways platform.</p>
                                </div>
                                <div class="single-content">
                                    <h5>Certificates SSL</h5>
                                    <p class="icon-text"><span><i class="fa-regular fa-file-lines"></i></span>How to Create,
                                        Update, and Delete a Project?</p>
                                    <p>A comprehensive guide on how you can create, update, and delete a project on
                                        the Cloudways platform.</p>
                                </div>
                                <div class="single-content">
                                    <h5>Domain Transfers </h5>
                                    <p class="icon-text"><span><i class="fa-regular fa-file-lines"></i></span>How to Create,
                                        Update, and Delete a Project?</p>
                                    <p>A comprehensive guide on how you can create, update, and delete a project on
                                        the Cloudways platform.</p>
                                </div>
                                <div class="single-content">
                                    <h5>Cloud VPS</h5>
                                    <p class="icon-text"><span><i class="fa-regular fa-file-lines"></i></span>How to Create,
                                        Update, and Delete a Project?</p>
                                    <p>A comprehensive guide on how you can create, update, and delete a project on
                                        the Cloudways platform.</p>
                                </div>
                                <div class="single-content">
                                    <h5>Dedicated Servers</h5>
                                    <p class="icon-text"><span><i class="fa-regular fa-file-lines"></i></span>How to Create,
                                        Update, and Delete a Project?</p>
                                    <p>A comprehensive guide on how you can create, update, and delete a project on
                                        the Cloudways platform.</p>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane  fade knowledge__content" id="ssl-tab" role="tabpanel" aria-labelledby="ssl">
                            <div class="content-list">
                                <div class="single-content">
                                    <h5>Share Hosting</h5>
                                    <p class="icon-text"><span><i class="fa-regular fa-file-lines"></i></span>How to Create,
                                        Update, and Delete a Project?</p>
                                    <p>A comprehensive guide on how you can create, update, and delete a project on
                                        the Cloudways platform.</p>
                                </div>
                                <div class="single-content">
                                    <h5>Certificates SSL</h5>
                                    <p class="icon-text"><span><i class="fa-regular fa-file-lines"></i></span>How to Create,
                                        Update, and Delete a Project?</p>
                                    <p>A comprehensive guide on how you can create, update, and delete a project on
                                        the Cloudways platform.</p>
                                </div>
                                <div class="single-content">
                                    <h5>Domain Transfers </h5>
                                    <p class="icon-text"><span><i class="fa-regular fa-file-lines"></i></span>How to Create,
                                        Update, and Delete a Project?</p>
                                    <p>A comprehensive guide on how you can create, update, and delete a project on
                                        the Cloudways platform.</p>
                                </div>
                                <div class="single-content">
                                    <h5>Cloud VPS</h5>
                                    <p class="icon-text"><span><i class="fa-regular fa-file-lines"></i></span>How to Create,
                                        Update, and Delete a Project?</p>
                                    <p>A comprehensive guide on how you can create, update, and delete a project on
                                        the Cloudways platform.</p>
                                </div>
                                <div class="single-content">
                                    <h5>Dedicated Servers</h5>
                                    <p class="icon-text"><span><i class="fa-regular fa-file-lines"></i></span>How to Create,
                                        Update, and Delete a Project?</p>
                                    <p>A comprehensive guide on how you can create, update, and delete a project on
                                        the Cloudways platform.</p>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane  fade knowledge__content" id="domain-transfer-tab" role="tabpanel" aria-labelledby="domain-transfer">
                            <div class="content-list">
                                <div class="single-content">
                                    <h5>Share Hosting</h5>
                                    <p class="icon-text"><span><i class="fa-regular fa-file-lines"></i></span>How to Create,
                                        Update, and Delete a Project?</p>
                                    <p>A comprehensive guide on how you can create, update, and delete a project on
                                        the Cloudways platform.</p>
                                </div>
                                <div class="single-content">
                                    <h5>Certificates SSL</h5>
                                    <p class="icon-text"><span><i class="fa-regular fa-file-lines"></i></span>How to Create,
                                        Update, and Delete a Project?</p>
                                    <p>A comprehensive guide on how you can create, update, and delete a project on
                                        the Cloudways platform.</p>
                                </div>
                                <div class="single-content">
                                    <h5>Domain Transfers </h5>
                                    <p class="icon-text"><span><i class="fa-regular fa-file-lines"></i></span>How to Create,
                                        Update, and Delete a Project?</p>
                                    <p>A comprehensive guide on how you can create, update, and delete a project on
                                        the Cloudways platform.</p>
                                </div>
                                <div class="single-content">
                                    <h5>Cloud VPS</h5>
                                    <p class="icon-text"><span><i class="fa-regular fa-file-lines"></i></span>How to Create,
                                        Update, and Delete a Project?</p>
                                    <p>A comprehensive guide on how you can create, update, and delete a project on
                                        the Cloudways platform.</p>
                                </div>
                                <div class="single-content">
                                    <h5>Dedicated Servers</h5>
                                    <p class="icon-text"><span><i class="fa-regular fa-file-lines"></i></span>How to Create,
                                        Update, and Delete a Project?</p>
                                    <p>A comprehensive guide on how you can create, update, and delete a project on
                                        the Cloudways platform.</p>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade  knowledge__content" id="cloud-hosting-tab" role="tabpanel" aria-labelledby="cloud-hosting">
                            <div class="content-list">
                                <div class="single-content">
                                    <h5>Share Hosting</h5>
                                    <p class="icon-text"><span><i class="fa-regular fa-file-lines"></i></span>How to Create,
                                        Update, and Delete a Project?</p>
                                    <p>A comprehensive guide on how you can create, update, and delete a project on
                                        the Cloudways platform.</p>
                                </div>
                                <div class="single-content">
                                    <h5>Certificates SSL</h5>
                                    <p class="icon-text"><span><i class="fa-regular fa-file-lines"></i></span>How to Create,
                                        Update, and Delete a Project?</p>
                                    <p>A comprehensive guide on how you can create, update, and delete a project on
                                        the Cloudways platform.</p>
                                </div>
                                <div class="single-content">
                                    <h5>Domain Transfers </h5>
                                    <p class="icon-text"><span><i class="fa-regular fa-file-lines"></i></span>How to Create,
                                        Update, and Delete a Project?</p>
                                    <p>A comprehensive guide on how you can create, update, and delete a project on
                                        the Cloudways platform.</p>
                                </div>
                                <div class="single-content">
                                    <h5>Cloud VPS</h5>
                                    <p class="icon-text"><span><i class="fa-regular fa-file-lines"></i></span>How to Create,
                                        Update, and Delete a Project?</p>
                                    <p>A comprehensive guide on how you can create, update, and delete a project on
                                        the Cloudways platform.</p>
                                </div>
                                <div class="single-content">
                                    <h5>Dedicated Servers</h5>
                                    <p class="icon-text"><span><i class="fa-regular fa-file-lines"></i></span>How to Create,
                                        Update, and Delete a Project?</p>
                                    <p>A comprehensive guide on how you can create, update, and delete a project on
                                        the Cloudways platform.</p>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade  knowledge__content" id="dedicated-tab" role="tabpanel" aria-labelledby="dedicated">
                            <div class="content-list">
                                <div class="single-content">
                                    <h5>Share Hosting</h5>
                                    <p class="icon-text"><span><i class="fa-regular fa-file-lines"></i></span>How to Create,
                                        Update, and Delete a Project?</p>
                                    <p>A comprehensive guide on how you can create, update, and delete a project on
                                        the Cloudways platform.</p>
                                </div>
                                <div class="single-content">
                                    <h5>Certificates SSL</h5>
                                    <p class="icon-text"><span><i class="fa-regular fa-file-lines"></i></span>How to Create,
                                        Update, and Delete a Project?</p>
                                    <p>A comprehensive guide on how you can create, update, and delete a project on
                                        the Cloudways platform.</p>
                                </div>
                                <div class="single-content">
                                    <h5>Domain Transfers </h5>
                                    <p class="icon-text"><span><i class="fa-regular fa-file-lines"></i></span>How to Create,
                                        Update, and Delete a Project?</p>
                                    <p>A comprehensive guide on how you can create, update, and delete a project on
                                        the Cloudways platform.</p>
                                </div>
                                <div class="single-content">
                                    <h5>Cloud VPS</h5>
                                    <p class="icon-text"><span><i class="fa-regular fa-file-lines"></i></span>How to Create,
                                        Update, and Delete a Project?</p>
                                    <p>A comprehensive guide on how you can create, update, and delete a project on
                                        the Cloudways platform.</p>
                                </div>
                                <div class="single-content">
                                    <h5>Dedicated Servers</h5>
                                    <p class="icon-text"><span><i class="fa-regular fa-file-lines"></i></span>How to Create,
                                        Update, and Delete a Project?</p>
                                    <p>A comprehensive guide on how you can create, update, and delete a project on
                                        the Cloudways platform.</p>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade  knowledge__content" id="email-service-tab" role="tabpanel" aria-labelledby="email-service">
                            <div class="content-list">
                                <div class="single-content">
                                    <h5>Share Hosting</h5>
                                    <p class="icon-text"><span><i class="fa-regular fa-file-lines"></i></span>How to Create,
                                        Update, and Delete a Project?</p>
                                    <p>A comprehensive guide on how you can create, update, and delete a project on
                                        the Cloudways platform.</p>
                                </div>
                                <div class="single-content">
                                    <h5>Certificates SSL</h5>
                                    <p class="icon-text"><span><i class="fa-regular fa-file-lines"></i></span>How to Create,
                                        Update, and Delete a Project?</p>
                                    <p>A comprehensive guide on how you can create, update, and delete a project on
                                        the Cloudways platform.</p>
                                </div>
                                <div class="single-content">
                                    <h5>Domain Transfers </h5>
                                    <p class="icon-text"><span><i class="fa-regular fa-file-lines"></i></span>How to Create,
                                        Update, and Delete a Project?</p>
                                    <p>A comprehensive guide on how you can create, update, and delete a project on
                                        the Cloudways platform.</p>
                                </div>
                                <div class="single-content">
                                    <h5>Cloud VPS</h5>
                                    <p class="icon-text"><span><i class="fa-regular fa-file-lines"></i></span>How to Create,
                                        Update, and Delete a Project?</p>
                                    <p>A comprehensive guide on how you can create, update, and delete a project on
                                        the Cloudways platform.</p>
                                </div>
                                <div class="single-content">
                                    <h5>Dedicated Servers</h5>
                                    <p class="icon-text"><span><i class="fa-regular fa-file-lines"></i></span>How to Create,
                                        Update, and Delete a Project?</p>
                                    <p>A comprehensive guide on how you can create, update, and delete a project on
                                        the Cloudways platform.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div7 </div>
        </div>
    </div>
    <!-- KNOWLEDGE BASE ITEM END -->

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