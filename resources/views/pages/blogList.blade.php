@extends('layout.layout')

@php
    $title = 'Blog EliteHost';
    $subTitle = 'Perfect for new entrepreneurs, this package offers essential tools and support to help you get started.';
    $img = 'src="' . asset('assets/images/banner/breadcrumb-05.webp') . '" width="515" alt=""';
@endphp

@section('content')

    <!-- Blog Area-->
    <div class="rts-blog-area section__padding">
        <div class="container">
            <div class="row g-40">
                <div class="col-lg-8">
                    <div class="rts-blog-list">
                        <!-- single blog post -->
                        <div class="single-post">
                            <a href="#">
                                <img src="{{ asset('assets/images/author/author__one.png') }}" width="850" height="440"
                                    alt="">
                            </a>
                            <div class="single-post__meta">
                                <div class="author__date__cat">
                                    <div class="author"><i class="fa-regular fa-circle-user"></i> By <a href="#">Emran
                                            Hossen</a></div>
                                    <span class="date"><i class="fa-regular fa-clock"></i> 15 Jan, 2025</span>
                                    <div class="cat"><i class="fa-regular fa-tags"></i> <a href="#">Web Hosting</a></div>
                                </div>
                                <a href="#" class="title fw-bold">WooCommerce vs Shopify: Ecommerce
                                    Face-off (2025 Comparison)
                                </a>
                                <p class="excerpt">
                                    According to a newly adopted definition of cities proposed by the European Commission
                                    and now shared by a number of major international organizations such as the OECD, the
                                    World Bank and UN-Habitat, an estimated 75% of the world's population live in urbanized
                                    areas...
                                </p>
                                <a href="{{ route('blogDetails') }}" class="readmore__btn rts-btn rts-btn-primary">read
                                    more</a>
                            </div>
                        </div>
                        <!-- single blog post end -->
                        <!-- single blog post -->
                        <div class="single-post">
                            <a href="#">
                                <img src="{{ asset('assets/images/blog/blog-list-2.webp') }}" width="850" height="440"
                                    alt="">
                            </a>
                            <div class="single-post__meta">
                                <div class="author__date__cat">
                                    <div class="author"><i class="fa-regular fa-circle-user"></i> By <a href="#">Emran
                                            Hossen</a></div>
                                    <span class="date"><i class="fa-regular fa-clock"></i> 15 Jan, 2025</span>
                                    <div class="cat"><i class="fa-regular fa-tags"></i> <a href="#">Web Hosting</a></div>
                                </div>
                                <a href="#" class="title fw-bold">How to Add Product Tags, Attributes, and
                                    Categories to WooCommerce
                                </a>
                                <p class="excerpt">
                                    According to a newly adopted definition of cities proposed by the European Commission
                                    and now shared by a number of major international organizations such as the OECD, the
                                    World Bank and UN-Habitat, an estimated 75% of the world's population live in urbanized
                                    areas...
                                </p>
                                <a href="{{ route('blogDetails') }}" class="readmore__btn rts-btn rts-btn-primary">read
                                    more</a>
                            </div>
                        </div>
                        <!-- single blog post end -->
                        <!-- single blog post -->
                        <div class="single-post">
                            <a href="#">
                                <img src="{{ asset('assets/images/blog/blog-list-3.webp') }}" width="850" height="440"
                                    alt="">
                            </a>
                            <div class="single-post__meta">
                                <div class="author__date__cat">
                                    <div class="author"><i class="fa-regular fa-circle-user"></i> By <a href="#">Emran
                                            Hossen</a></div>
                                    <span class="date"><i class="fa-regular fa-clock"></i> 15 Jan, 2025</span>
                                    <div class="cat"><i class="fa-regular fa-tags"></i> <a href="#">Web Hosting</a></div>
                                </div>
                                <a href="#" class="title fw-bold">Announcing the Cloud ways Cron Optimizer
                                    for WordPress
                                </a>
                                <p class="excerpt">
                                    According to a newly adopted definition of cities proposed by the European Commission
                                    and now shared by a number of major international organizations such as the OECD, the
                                    World Bank and UN-Habitat, an estimated 75% of the world's population live in urbanized
                                    areas...
                                </p>
                                <a href="{{ route('blogDetails') }}" class="readmore__btn rts-btn rts-btn-primary">read
                                    more</a>
                            </div>
                        </div>
                        <!-- single blog post end -->
                        <div class="blog-pagination-area">
                            <ul>
                                <li><a href="#"><i class="fa-regular fa-chevron-left"></i></a></li>
                                <li><a class="active" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li>...</li>
                                <li><a href="#">8</a></li>
                                <li><a href="#">9</a></li>
                                <li><a href="#"><i class="fa-regular fa-chevron-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="rts-sidebar">
                        <!-- single widget -->
                        <div class="rts-single-widget search-widget">
                            <form action="#" method="post">
                                <input type="text" name="s" id="search" placeholder="Enter Keyword" required>
                                <button type="submit"><i class="fa-regular fa-search"></i></button>
                            </form>
                        </div>
                        <!-- single widget end -->
                        <!-- single widget start -->
                        <div class="rts-single-widget category-widget">
                            <h4 class="widget-title">All Services</h4>
                            <ul class="list-unstyled cat__counter">
                                <li class="single-cat">
                                    <a href="#">Space Planning <span><i class="fa-regular fa-arrow-right"></i></span></a>
                                </li>
                                <li class="single-cat">
                                    <a href="#">Interior design <span><i class="fa-regular fa-arrow-right"></i></span></a>
                                </li>
                                <li class="single-cat">
                                    <a href="#">Remodeling Services <span><i
                                                class="fa-regular fa-arrow-right"></i></span></a>
                                </li>
                                <li class="single-cat">
                                    <a href="#">Urban Planning <span><i class="fa-regular fa-arrow-right"></i></span></a>
                                </li>
                                <li class="single-cat">
                                    <a href="#">Kitchen Cabinet <span><i class="fa-regular fa-arrow-right"></i></span></a>
                                </li>
                                <li class="single-cat">
                                    <a href="#">3d Visualization <span><i class="fa-regular fa-arrow-right"></i></span></a>
                                </li>
                            </ul>
                        </div>
                        <!-- single widget end -->
                        <!-- single widget start -->
                        <div class="rts-single-widget recentpost-widget">
                            <h4 class="widget-title">Recent Post</h4>
                            <div class="recent-posts">
                                <div class="single-post">
                                    <div class="thumb">
                                        <img src="{{ asset('assets/images/blog/blog-recent-1.webp') }}" alt="" height="85"
                                            width="85">
                                    </div>
                                    <div class="meta">
                                        <span class="published"><i class="fa-regular fa-clock"></i> 15 Jan, 2025</span>
                                        <h6 class="title"><a href="#">We would love to share a similar experience</a></h6>
                                    </div>
                                </div>
                                <div class="single-post">
                                    <div class="thumb">
                                        <img src="{{ asset('assets/images/blog/blog-recent-2.webp') }}" alt="" height="85"
                                            width="85">
                                    </div>
                                    <div class="meta">
                                        <span class="published"><i class="fa-regular fa-clock"></i> 15 Jan, 2025</span>
                                        <h6 class="title"><a href="#">We would love to share a similar experience</a></h6>
                                    </div>
                                </div>
                                <div class="single-post">
                                    <div class="thumb">
                                        <img src="{{ asset('assets/images/blog/blog-recent-3.webp') }}" alt="" height="85"
                                            width="85">
                                    </div>
                                    <div class="meta">
                                        <span class="published"><i class="fa-regular fa-clock"></i> 15 Jan, 2025</span>
                                        <h6 class="title"><a href="#">We would love to share a similar experience</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single widget end -->


                        <!-- single widget start -->
                        <div class="rts-single-widget gallery-widget">
                            <h4 class="widget-title">Gallery Post</h4>
                            <div class="gallery-posts">
                                <a href="{{ route('blogDetails') }}" class="thumb">
                                    <img src="{{ asset('assets/images/blog/gallery-post-1.webp') }}" height="95" width="95"
                                        alt="">
                                </a>
                                <a href="{{ route('blogDetails') }}" class="thumb">
                                    <img src="{{ asset('assets/images/blog/gallery-post-2.webp') }}" height="95" width="95"
                                        alt="">
                                </a>
                                <a href="{{ route('blogDetails') }}" class="thumb">
                                    <img src="{{ asset('assets/images/blog/gallery-post-3.webp') }}" height="95" width="95"
                                        alt="">
                                </a>
                                <a href="{{ route('blogDetails') }}" class="thumb">
                                    <img src="{{ asset('assets/images/blog/gallery-post-4.webp') }}" height="95" width="95"
                                        alt="">
                                </a>
                                <a href="{{ route('blogDetails') }}" class="thumb">
                                    <img src="{{ asset('assets/images/blog/gallery-post-5.webp') }}" height="95" width="95"
                                        alt="">
                                </a>
                                <a href="{{ route('blogDetails') }}" class="thumb">
                                    <img src="{{ asset('assets/images/blog/gallery-post-6.webp') }}" height="95" width="95"
                                        alt="">
                                </a>
                            </div>
                        </div>
                        <!-- single widget end -->

                        <!-- single widget start -->
                        <div class="rts-single-widget tags-widget">
                            <h4 class="widget-title">popular tags</h4>
                            <div class="popular-tags">
                                <ul class="list-unstyled tags-style">
                                    <li class="tags"><a href="#">service</a></li>
                                    <li class="tags"><a href="#">Business</a></li>
                                    <li class="tags"><a href="#">Growth</a></li>
                                    <li class="tags"><a href="#">Kitchen</a></li>
                                    <li class="tags"><a href="#">Interior Design</a></li>
                                    <li class="tags"><a href="#">Solution</a></li>
                                    <li class="tags"><a href="#">Urban</a></li>
                                    <li class="tags"><a href="#">Buildings</a></li>
                                    <li class="tags"><a href="#">Architecture</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- single widget end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Area End-->

@endsection