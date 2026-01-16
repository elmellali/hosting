@extends('layout.layout')

@php
    $breadcrumb = 'false';
@endphp

@section('content')
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">My Services</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ route('index') }}">Home</a>
                        <span> / </span>
                        <a href="{{ route('dashboard') }}">Dashboard</a>
                        <span> / </span>
                        <a href="#" class="active">My Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rts-service-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-area text-center mb--50">
                        <h2 class="section-title">Active Services</h2>
                        <p class="desc">Manage your hosting services and domains here.</p>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="pricing-table-area table-responsive text-center">
                                <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Service Name</th>
                                            <th scope="col">Domain</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- Placeholder for now --}}
                                        <tr>
                                            <td colspan="5" class="text-center py-5">
                                                <p>You do not have any active services yet.</p>
                                                <a href="{{ route('sharedHosting') }}"
                                                    class="pricing-btn rts-btn mt-3">Browse Hosting Plans</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection