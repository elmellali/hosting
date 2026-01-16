@extends('layout.layout')

@php
    $header='false';
    $footer='false';
    $breadcrumb='false';

@endphp

@section('content')

    <div class="rts-sign-up-section">
        <div class="section-inner">
            <div class="logo-area">
                <a href="{{ route('index') }}"><img src="{{ asset('assets/images/logo/logo-1.svg') }}" alt=""></a>
            </div>
            <form action="#">
                <h2 class="form-title">Sign up</h2>
                <div class="form-inner">
                    <div class="single-wrapper">
                        <input type="text" placeholder="Full name" required>
                    </div>
                    <div class="single-wrapper">
                        <input type="email" placeholder="Your email" required>
                    </div>
                    <div class="single-wrapper">
                        <input type="password" placeholder="Password" required>
                    </div>
                    <div class="single-wrapper">
                        <input type="password" placeholder="Re-enter password" required>
                    </div>
                    <div class="check">
                        <div class="check-box-area">
                            <input type="checkbox" id="scales" name="scales" />
                            <label for="scales">I read and accept all <a href="#">terms of use..</a></label>
                        </div>
                    </div>
                    <div class="form-btn">
                        <button type="submit" class="primary__btn">Create an account</button>
                    </div>
                </div>
                <p class="sign-in-option">You already have an account? <a href="{{ route('signin') }}">Sign in</a></p>
            </form>
        </div>
        <div class="copyright-area">
            <p>Copyright 2025. All Rights Reserved.</p>
        </div>
    </div>

@endsection
