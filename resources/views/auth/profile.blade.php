@extends('layout.layout')

@php
    $breadcrumb = 'false';
@endphp

@section('content')
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Edit Profile</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ route('index') }}">Home</a>
                        <span> / </span>
                        <a href="{{ route('dashboard') }}">Dashboard</a>
                        <span> / </span>
                        <a href="#" class="active">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rts-section-gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="login-area">
                        <div class="section-title-area text-center mb--50">
                            <h2 class="section-title">Update Your Account</h2>
                            <p class="desc">Change your personal details.</p>
                        </div>

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('updateProfile') }}" method="post" class="login-form">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    value="{{ Auth::user()->name }}" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="email">Email Address</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    value="{{ Auth::user()->email }}" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="password">New Password <small>(Leave blank to keep current)</small></label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>

                            <div class="form-group mb-4">
                                <label for="password_confirmation">Confirm New Password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    class="form-control">
                            </div>

                            <div class="form-btn text-center">
                                <button type="submit" class="pricing-btn rts-btn">Update Profile</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection