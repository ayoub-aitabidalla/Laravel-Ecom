@extends('layouts.app')

@section('content')
<section class="hero bg-light text-center py-5">
    <div class="container">
        <h1 class="fw-bold">Discover the Best Deals on EXOM</h1>
        <p class="lead">Exclusive collections, limited-time offers, and premium quality.</p>
        <a href="{{ route('products.index')}}" class="btn btn-primary btn-lg">Shop Now</a>
    </div>
</section>


<section class="bg-light py-5">
    <div class="container text-center">
        <h2>Why Shop With Us?</h2>
        <div class="row mt-4">
            <div class="col-md-3">
                <i class="fas fa-truck fa-3x text-primary"></i>
                <h5 class="mt-2">Fast Shipping</h5>
                <p>Get your order within 48 hours.</p>
            </div>
            <div class="col-md-3">
                <i class="fas fa-shield-alt fa-3x text-primary"></i>
                <h5 class="mt-2">Secure Payments</h5>
                <p>100% safe transactions.</p>
            </div>
            <div class="col-md-3">
                <i class="fas fa-headset fa-3x text-primary"></i>
                <h5 class="mt-2">24/7 Support</h5>
                <p>We are here for you anytime.</p>
            </div>
            <div class="col-md-3">
                <i class="fas fa-undo fa-3x text-primary"></i>
                <h5 class="mt-2">Easy Returns</h5>
                <p>Hassle-free returns & refunds.</p>
            </div>
        </div>
    </div>
</section>
<section class="container py-5">
    <h2 class="text-center mb-4">What Our Customers Say</h2>
    <div class="row text-center">
        <div class="col-md-4">
            <p>"Great quality products! Fast delivery and amazing service."</p>
            <strong>– John Doe ⭐⭐⭐⭐⭐</strong>
        </div>
        <div class="col-md-4">
            <p>"I love shopping here! The prices are unbeatable."</p>
            <strong>– Sarah K. ⭐⭐⭐⭐⭐</strong>
        </div>
        <div class="col-md-4">
            <p>"Super easy checkout process. Highly recommended!"</p>
            <strong>– Mark R. ⭐⭐⭐⭐⭐</strong>
        </div>
    </div>
</section>

@endsection
