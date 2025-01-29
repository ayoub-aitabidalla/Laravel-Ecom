@extends('layouts.app')

@section('content')
<div class="mt-4 row row-cols-1 row-cols-md-2 gx-3 align-items-stretch">
    
    <div class="col">
        <div class="card p-3 h-100">
            <div class="d-flex align-items-center">
                <input type="checkbox" checked class="me-2">
                <span class="badge bg-warning text-dark me-2">Choice</span>
                <strong>Shipped by AliExpress</strong>
            </div>
            <p class="text-danger mt-2">MAD21.55 saved, explore more free shipping items</p>
            <div class="d-flex align-items-center mt-3">
                <img src="https://via.placeholder.com/100" alt="Product" class="me-3">
                <div>
                    <span class="badge bg-danger">Sale</span>
                    <p class="mb-1">Electronics Screwdriver Set 115 in 1 Precision Screwdriver Tools</p>
                    <p class="mb-1 text-secondary">115 in 1 gray</p>
                    <p class="text-danger">Save MAD86.45 | <a href="#" class="text-danger">Coupons applicable</a></p>
                    <p class="fw-bold">MAD119.39</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col">
        <div class="card p-3 h-100">
            <h5>Summary</h5>
            <p>Subtotal: <span class="float-end">MAD119.39</span></p>
            <p>Shipping fee: <span class="float-end">MAD21.55</span></p>
            <p>Total saved: <span class="float-end text-danger">-MAD21.55</span></p>
            <hr>
            <h5>Estimated total: <span class="float-end fw-bold">MAD119.39</span></h5>
            <button class="btn btn-danger w-100 mt-3">Checkout (1)</button>
        </div>
    </div>
    
</div>

@endsection
