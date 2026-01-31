@extends('layout.layout')

@php
    $header = 'false';
    $footer = 'false';
    $breadcrumb = 'false';
@endphp

@section('content')

    <div class="rts-sign-up-section">
        <div class="section-inner">
            <div class="logo-area">
                <a href="{{ route('index') }}"><img src="{{ asset('assets/images/logo/logo-1.svg') }}" alt=""></a>
            </div>
            <form action="#">
                <h2 class="form-title">Sign In</h2>
                <div class="form-inner">
                    <div class="single-wrapper">
                        <input type="email" placeholder="Your email" required>
                    </div>
                    <div class="single-wrapper">
                        <input type="password" placeholder="Password" required>
                    </div>
                    <div class="check">
                        <div class="check-box-area">
                            <input type="checkbox" id="scales" name="scales" />
                            <label for="scales">Remember me</label>
                        </div>
                        <a href="#" class="forgot-password">Forgot password?</a>
                    </div>
                    <div class="form-btn">
                        <button type="submit" class="primary__btn">Log In</button>
                    </div>
                </div>
                <p class="sign-in-option">Have no account yet? <a href="{{ route('signup') }}">Sign Up</a></p>
            </form>
        </div>
        <div class="copyright-area">
            <p>Copyright 2026 Takeitcloudy. All Rights Reserved.</p>
        </div>
    </div>

@endsection