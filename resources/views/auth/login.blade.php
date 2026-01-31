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
                <a href="{{ route('index') }}"><img src="{{ asset('assets/images/logo/takeitcloudy-logo.png') }}"
                        alt="TakeItCloudy" style="max-height: 50px;"></a>
            </div>
            <form action="{{ route('login.post') }}" method="POST">
                @csrf
                <h2 class="form-title">Sign In</h2>
                <div class="form-inner">
                    <div class="single-wrapper">
                        <input type="email" name="email" placeholder="Your email" value="{{ old('email') }}" required>
                        @error('email')
                            <span class="text-danger" style="color: red; font-size: 0.8rem;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="single-wrapper">
                        <input type="password" name="password" placeholder="Password" required>
                        @error('password')
                            <span class="text-danger" style="color: red; font-size: 0.8rem;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="check">
                        <div class="check-box-area">
                            <input type="checkbox" id="scales" name="remember" />
                            <label for="scales">Remember me</label>
                        </div>
                        <a href="#" class="forgot-password">Forgot password?</a>
                    </div>
                    <div class="form-btn">
                        <button type="submit" class="primary__btn">Log In</button>
                    </div>
                </div>
                <p class="sign-in-option">Have no account yet? <a href="{{ route('register') }}">Sign Up</a></p>
            </form>
        </div>
        <div class="copyright-area">
            <p>Copyright 2026 Takeitcloudy. All Rights Reserved.</p>
        </div>
    </div>

@endsection