@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded p-4">
                <div class="row g-4 align-items-center">
                    <div class="col-md-5">
                        <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid rounded" alt="{{ $product->name }}">
                    </div>
                    <div class="col-md-7">
                        <h2 class="fw-bold">
                            <i class="fas fa-box-open me-2"></i> {{ $product->name }}
                        </h2>
                        
                        <p class="text-muted">
                            <i class="fas fa-tags me-2"></i> {{ $product->category->name ?? 'Uncategorized' }}
                        </p>

                        <p class="text-success fs-4">
                            <i class="fas fa-dollar-sign me-1"></i> <strong>{{ number_format($product->price, 2) }}</strong>
                        </p>

                        <p>{{ $product->description }}</p>

                        <div class="d-flex justify-content-between align-items-center mt-3">
                            {{-- Stock Status (Optional) --}}
                            <span class="badge {{ $product->stock > 0 ? 'bg-success' : 'bg-danger' }} p-2">
                                <i class="fas {{ $product->stock > 0 ? 'fa-check-circle' : 'fa-times-circle' }} me-1"></i>
                                {{ $product->stock > 0 ? 'In Stock' : 'Out of Stock' }}
                            </span>
                        </div>

                        <div class="mt-4">
                            <button class="btn btn-primary w-100 py-2">
                                <i class="fas fa-cart-plus me-2"></i> Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
