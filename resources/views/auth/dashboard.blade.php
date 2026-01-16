@extends('layout.layout')

@php
    $breadcrumb = 'false';
@endphp

@section('content')
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">My Account</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ route('index') }}">Home</a>
                        <span> / </span>
                        <a href="#" class="active">Dashboard</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rts-hosting-package-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hosting-package-wrapper">
                        <div class="section-title-area text-center mb--50">
                            <h2 class="section-title">Welcome, {{ Auth::user()->name }}!</h2>
                            <p class="desc">You are currently logged in. This is your client dashboard.</p>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6 col-sm-12 mb--30">
                                <div class="single-hosting-package text-center">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/service/01.svg') }}" alt="icon">
                                    </div>
                                    <h4 class="title">My Services</h4>
                                    <a href="{{ route('services') }}" class="pricing-btn rts-btn">View Services</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 mb--30">
                                <div class="single-hosting-package text-center">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/service/02.svg') }}" alt="icon">
                                    </div>
                                    <h4 class="title">Account Details</h4>
                                    <a href="{{ route('profile') }}" class="pricing-btn rts-btn">Edit Profile</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 mb--30">
                                <div class="single-hosting-package text-center">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/service/04.svg') }}" alt="icon">
                                        </div>
                                        <h4 class="title">Logout</h4>
                                        <button type="submit" class="pricing-btn rts-btn"
                                            style="border: none; cursor: pointer;">Sign Out</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection