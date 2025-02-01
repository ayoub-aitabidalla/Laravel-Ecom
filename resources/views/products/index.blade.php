@extends('layouts.app')

@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif
    <div class="row">
        @foreach($products as $product)
        <div class="col-md-3 mb-4">
            <a href="{{ route('products.show', ['product' => $product->id]) }}" class="text-decoration-none">
                <div class="card product-card h-100 d-flex flex-column">
                    <!-- Image Container with Fixed Height -->
                    <div class="card-img-top overflow-hidden" style="height: 200px; display: flex; align-items: center; justify-content: center;">
                        <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid" alt="{{ $product->name }}" style="width: 50%; height: auto; object-fit: cover;">
                    </div>
        
                    <!-- Card Body with Consistent Positioning -->
                    <div class="card-body d-flex flex-column flex-grow-1">
                        <h5 class="card-title">
                            <i class="fas fa-tag me-2"></i> {{ $product->name }}
                        </h5>
                        <p class="card-text mt-auto mb-2">
                            <strong>
                                <i class="fas fa-dollar-sign me-1"></i> {{ number_format($product->price, 2) }}
                            </strong>
                        </p>
                        <form action="{{ route('cart.add', $product->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-cart-plus me-2"></i>
                                Add to Cart
                            </button>
                        </form>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
@endsection
