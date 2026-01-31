@extends('layout.layout')

@php
    $breadcrumb = 'false';
@endphp

@section('content')
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Checkout</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ route('index') }}">Home</a>
                        <span> / </span>
                        <a href="{{ route('cart.index') }}">Cart</a>
                        <span> / </span>
                        <a href="#" class="active">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="rts-checkout-area pt-5 pb-5">
        <div class="container">
            <form action="#" method="POST" class="checkout-form">
                @csrf
                <div class="row">
                    <div class="col-lg-8">
                        <div class="checkout-billing-details">
                            <h3 class="title">Billing Details</h3>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mb-4 modern-input">
                                        <label for="first_name">First Name <span class="text-danger">*</span></label>
                                        <input type="text" id="first_name" name="first_name" required placeholder="John">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-4 modern-input">
                                        <label for="last_name">Last Name <span class="text-danger">*</span></label>
                                        <input type="text" id="last_name" name="last_name" required placeholder="Doe">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mb-4 modern-input">
                                        <label for="email">Email Address <span class="text-danger">*</span></label>
                                        <input type="email" id="email" name="email" required
                                            placeholder="john.doe@example.com">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mb-4 modern-input">
                                        <label for="address">Address <span class="text-danger">*</span></label>
                                        <input type="text" id="address" name="address" required
                                            placeholder="123 Main St, Apt 4B">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-4 modern-input">
                                        <label for="city">City <span class="text-danger">*</span></label>
                                        <input type="text" id="city" name="city" required placeholder="New York">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-4 modern-input">
                                        <label for="zip">Zip Code <span class="text-danger">*</span></label>
                                        <input type="text" id="zip" name="zip" required placeholder="10001">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="order-summary-box">
                            <h3 class="title">Your Order</h3>
                            <div class="order-products mb-4">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th class="text-end">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $total = 0; @endphp
                                        @foreach(session('cart', []) as $id => $details)
                                            @php $total += $details['price'] * $details['quantity'] @endphp
                                            <tr>
                                                <td>
                                                    <span class="fw-bold text-dark">{{ $details['name'] }}</span>
                                                    <div class="small text-muted">Qty: {{ $details['quantity'] }}</div>
                                                </td>
                                                <td class="text-end fw-bold">
                                                    ${{ number_format($details['price'] * $details['quantity'], 2) }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Subtotal</th>
                                            <td class="text-end">${{ number_format($total, 2) }}</td>
                                        </tr>
                                        <tr>
                                            <th>Total</th>
                                            <td class="text-end fs-5 text-primary fw-bolder">${{ number_format($total, 2) }}
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="payment-method mb-4">
                                <h5 class="mb-3 fw-bold">Payment Method</h5>
                                <div class="custom-radio">
                                    <input type="radio" name="payment_method" id="credit_card" value="card" checked>
                                    <label for="credit_card">
                                        <i class="fa-regular fa-credit-card me-2"></i> Credit Card
                                    </label>
                                </div>
                                <div class="custom-radio">
                                    <input type="radio" name="payment_method" id="paypal" value="paypal">
                                    <label for="paypal">
                                        <i class="fa-brands fa-paypal me-2"></i> PayPal
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn-premium w-100">
                                Place Order <i class="fa-regular fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection