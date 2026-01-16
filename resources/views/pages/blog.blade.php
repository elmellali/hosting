@extends('layout.layout')

@php
        $title='Blog EliteHost';
        $subTitle='Perfect for new entrepreneurs, this package offers essential tools and support to help you get started.';
        $img='src="' . asset('assets/images/banner/breadcrumb-05.webp') . '" width="515" alt=""' ;
@endphp

@section('content')

    <!-- BLOG -->
    <section class="rts-blog section__padding">
        <div class="container">
            <div class="row justify-content-sm-center justify-content-md-start g-30">
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="rts-blog__single">
                        <a href="{{ route('blogDetails') }}">
                            <img class="blog__thumb" src="{{ asset('assets/images/blog/blog-1.webp') }}" alt="blog post thumb">
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
                            <img class="blog__thumb" src="{{ asset('assets/images/blog/blog-2.webp') }}" alt="blog post thumb">
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
                                    <a href="#">Zent jon</a>
                                    <span>Developer </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="rts-blog__single">
                        <a href="{{ route('blogDetails') }}">
                            <img class="blog__thumb" src="{{ asset('assets/images/blog/blog-3.webp') }}" alt="blog post thumb">
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
                                    <img src="{{ asset('assets/images/author/author__three.png') }}" alt="">
                                </div>
                                <div class="author__content">
                                    <a href="#">Ahmad Yeamin</a>
                                    <span>Developer </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="rts-blog__single">
                        <a href="{{ route('blogDetails') }}">
                            <img class="blog__thumb" src="{{ asset('assets/images/blog/blog-4.webp') }}" alt="blog post thumb">
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
                                    <a href="#">Samira </a>
                                    <span>Marketer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="rts-blog__single">
                        <a href="{{ route('blogDetails') }}">
                            <img class="blog__thumb" src="{{ asset('assets/images/blog/blog-5.webp') }}" alt="blog post thumb">
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
                            <img class="blog__thumb" src="{{ asset('assets/images/blog/blog-6.webp') }}" alt="blog post thumb">
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
                                    <a href="#">Ashique Mahmud</a>
                                    <span>Frontend Developer </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="rts-blog__single">
                        <a href="{{ route('blogDetails') }}">
                            <img class="blog__thumb" src="{{ asset('assets/images/blog/blog-7.webp') }}" alt="blog post thumb">
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
                                    <img src="{{ asset('assets/images/author/author__three.png') }}" alt="">
                                </div>
                                <div class="author__content">
                                    <a href="#">Jhone Doe</a>
                                    <span>Developer & Web serenity </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="rts-blog__single">
                        <a href="{{ route('blogDetails') }}">
                            <img class="blog__thumb" src="{{ asset('assets/images/blog/blog-8.webp') }}" alt="blog post thumb">
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
                                    <a href="#">Eliza Stella</a>
                                    <span>Marketer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="rts-blog__single">
                        <a href="{{ route('blogDetails') }}">
                            <img class="blog__thumb" src="{{ asset('assets/images/blog/blog-9.webp') }}" alt="blog post thumb">
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
            </div>
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
    </section>
    <!-- BLOG END -->

@endsection