@extends('layout.layout')

@php
    $breadcrumb = 'false';
@endphp

@section('content')
    <!-- Breadcrumb -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Shopping Cart</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ route('index') }}">Home</a>
                        <span> / </span>
                        <a href="#" class="active">Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cart Section -->
    <div class="rts-section-gap">
        <div class="container">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fa-regular fa-check-circle me-2"></i> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if(session('cart') && count(session('cart')) > 0)
                <div class="row g-5">
                    <!-- Cart Items Column -->
                    <div class="col-xl-8 col-lg-12">
                        <div class="cart-items-wrapper">
                            <h4 class="mb-4">Your Items ({{ count(session('cart')) }})</h4>

                            @foreach(session('cart') as $id => $details)
                                <div
                                    class="cart-item-card p-4 mb-3 border rounded-3 bg-white shadow-sm d-flex align-items-center justify-content-between flex-wrap gap-3">
                                    <div class="d-flex align-items-center gap-4">
                                        <!-- Icon based on type -->
                                        <div class="item-icon p-3 rounded-circle bg-light text-primary fs-3">
                                            @if(isset($details['type']) && strtolower($details['type']) == 'hosting')
                                                <i class="fa-regular fa-server"></i>
                                            @else
                                                <i class="fa-regular fa-globe"></i>
                                            @endif
                                        </div>

                                        <!-- Item Details -->
                                        <div>
                                            <h5 class="mb-1 text-dark fw-bold">{{ $details['name'] }}</h5>
                                            <span class="badge bg-opacity-10 text-primary bg-primary rounded-pill px-3">
                                                {{ isset($details['type']) ? ucfirst($details['type']) : 'Product' }}
                                            </span>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center gap-5">
                                        <!-- Price -->
                                        <div class="text-end">
                                            <span class="d-block text-muted small">Price</span>
                                            <span class="fs-5 fw-bold text-dark">${{ number_format($details['price'], 2) }}</span>
                                        </div>

                                        <!-- Remove Action -->
                                        <form action="{{ route('cart.remove') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $id }}">
                                            <button type="submit" class="btn btn-link text-danger p-0 text-decoration-none"
                                                title="Remove Item">
                                                <div class="p-2 rounded-circle hover-bg-danger-light transition-all">
                                                    <i class="fa-regular fa-trash-can fs-5"></i>
                                                </div>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="mt-4">
                            <a href="{{ route('index') }}" class="btn text-muted p-0">
                                <i class="fa-regular fa-arrow-left me-2"></i> Continue Shopping
                            </a>
                        </div>
                    </div>

                    <!-- Order Summary Column -->
                    <div class="col-xl-4 col-lg-12">
                        <div class="order-summary-card p-4 border rounded-3 bg-white shadow-sm position-sticky top-0"
                            style="top: 20px;">
                            <h4 class="mb-4 border-bottom pb-3">Order Summary</h4>

                            @php $total = 0; @endphp
                            @foreach((array) session('cart') as $id => $details)
                                @php $total += $details['price'] * $details['quantity'] @endphp
                            @endforeach

                            <div class="d-flex justify-content-between mb-3">
                                <span class="text-muted">Subtotal</span>
                                <span class="fw-bold text-dark">${{ number_format($total, 2) }}</span>
                            </div>

                            <div class="d-flex justify-content-between mb-4 pb-3 border-bottom">
                                <span class="text-muted">Tax Estimate</span>
                                <span class="fw-bold text-dark">$0.00</span>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <span class="fs-5 fw-bolder text-dark">Total</span>
                                <span class="fs-4 fw-bolder text-primary">${{ number_format($total, 2) }}</span>
                            </div>

                            <a href="{{ route('checkout') }}"
                                class="pricing-btn rts-btn w-100 text-center justify-content-center">
                                Proceed to Checkout <i class="fa-regular fa-arrow-right ms-2"></i>
                            </a>

                            <div class="mt-4 pt-3 border-top text-center">
                                <p class="small text-muted mb-0">
                                    <i class="fa-regular fa-lock me-1"></i> Secure Checkout
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <!-- Empty State -->
                <div class="row">
                    <div class="col-12 text-center py-5">
                        <div class="empty-cart-icon mb-4 text-muted opacity-25">
                            <i class="fa-light fa-cart-shopping" style="font-size: 5rem;"></i>
                        </div>
                        <h3 class="mb-3">Your cart is empty</h3>
                        <p class="text-muted mb-4 lead">Looks like you haven't added any domains or hosting plans yet.</p>
                        <a href="{{ route('index') }}" class="pricing-btn rts-btn">
                            Start Shopping <i class="fa-regular fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            @endif
        </div>
    </div>

    <style>
        .hover-bg-danger-light:hover {
            background-color: rgba(220, 53, 69, 0.1);
        }

        .transition-all {
            transition: all 0.3s ease;
        }

        .cart-item-card {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .cart-item-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .05) !important;
        }
    </style>
@endsection