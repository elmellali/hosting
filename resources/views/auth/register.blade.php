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
            <form action="{{ route('register.post') }}" method="POST">
                @csrf
                <h2 class="form-title">Sign up</h2>
                <div class="form-inner">
                    <div class="single-wrapper">
                        <input type="text" name="name" placeholder="Full name" value="{{ old('name') }}" required>
                        @error('name')
                            <span class="text-danger" style="color: red; font-size: 0.8rem;">{{ $message }}</span>
                        @enderror
                    </div>
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
                    <div class="single-wrapper">
                        <input type="password" name="password_confirmation" placeholder="Re-enter password" required>
                    </div>

                    <div class="check">
                        <div class="check-box-area">
                            <input type="checkbox" id="scales" name="scales" required />
                            <label for="scales">I read and accept all <a href="#">terms of use..</a></label>
                        </div>
                    </div>
                    <div class="form-btn">
                        <button type="submit" class="primary__btn">Create an account</button>
                    </div>
                </div>
                <p class="sign-in-option">You already have an account? <a href="{{ route('login') }}">Sign in</a></p>
            </form>
        </div>
        <div class="copyright-area">
            <p>Copyright 2026 Takeitcloudy. All Rights Reserved.</p>
        </div>
    </div>

@endsection