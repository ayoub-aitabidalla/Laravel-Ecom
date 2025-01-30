@extends('layouts.app')

@section('content')
    <div class="row">
        @foreach($products as $product)
        <div class="col-md-3 mb-4">
            <a href="{{ route('products.show', ['product' => $product->id]) }}" class="text-decoration-none">
                <div class="card product-card h-100">
                    <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text"><strong>${{ number_format($product->price, 2) }}</strong></p>
                        <a href="#" class="btn btn-primary w-100">Add to Cart</a>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
@endsection
