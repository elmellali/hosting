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

    <section class="rts-checkout-area section__padding">
        <div class="container">
            <form action="#" method="POST" class="checkout-form">
                @csrf
                <div class="row">
                    <div class="col-lg-8">
                        <div class="checkout-billing-details">
                            <h3 class="title mb-4">Billing Details</h3>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                        <label for="first_name">First Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="first_name" name="first_name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                        <label for="last_name">Last Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="last_name" name="last_name" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <label for="email">Email Address <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <label for="address">Address <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="address" name="address" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                        <label for="city">City <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="city" name="city" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                        <label for="zip">Zip Code <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="zip" name="zip" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="order-summary-box bg-light p-4 rounded">
                            <h3 class="title mb-4">Your Order</h3>
                            <div class="order-products mb-3">
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
                                                    {{ $details['name'] }} <strong class="product-quantity">×
                                                        {{ $details['quantity'] }}</strong>
                                                </td>
                                                <td class="text-end">
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
                                            <td class="text-end fw-bold">${{ number_format($total, 2) }}</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="payment-method mb-4">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="payment_method" id="credit_card"
                                        value="card" checked>
                                    <label class="form-check-label" for="credit_card">
                                        Credit Card
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment_method" id="paypal"
                                        value="paypal">
                                    <label class="form-check-label" for="paypal">
                                        PayPal
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="pricing-btn rts-btn w-100">Place Order</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection