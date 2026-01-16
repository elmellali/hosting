@extends('layout.layout')

@php
    $breadcrumb = 'false';
@endphp

@section('content')
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

    <div class="rts-section-gap">
        <div class="container">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('cart') && count(session('cart')) > 0)
                <div class="row">
                    <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="cart-table-area table-responsive text-center">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Type</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach(session('cart') as $id => $details)
                                        <tr>
                                            <td>{{ $details['name'] }}</td>
                                            <td>{{ ucfirst($details['type']) }}</td>
                                            <td>${{ $details['price'] }}</td>
                                            <td>
                                                <form action="{{ route('cart.remove') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $id }}">
                                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                                            class="fa-regular fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="checkout-box bg-light p-4 rounded">
                            <h4 class="mb-4">Cart Total</h4>
                            @php $total = 0; @endphp
                            @foreach((array) session('cart') as $id => $details)
                                @php $total += $details['price'] * $details['quantity'] @endphp
                            @endforeach
                            <div class="d-flex justify-content-between mb-3">
                                <span class="fw-bold">Total</span>
                                <span class="fw-bold">${{ number_format($total, 2) }}</span>
                            </div>
                            <a href="{{ route('checkout') }}" class="pricing-btn rts-btn w-100">Proceed to Checkout</a>
                        </div>
                    </div>
                </div>
            @else
                <div class="row text-center">
                    <div class="col-12">
                        <p class="lead">Your cart is empty.</p>
                        <a href="{{ route('index') }}" class="pricing-btn rts-btn mt-3">Continue Shopping</a>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection