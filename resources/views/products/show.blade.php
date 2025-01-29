@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg border-0 rounded p-4">
                    <div class="row g-4 align-items-center">
                        <!-- Product Image on the Left -->
                        <div class="col-md-5">
                            <img src="{{ asset('storage/mystery_box.jpeg') }}" class="img-fluid rounded" alt="{{ $product->name }}">
                        </div>

                        <!-- Product Details on the Right -->
                        <div class="col-md-7">
                            <h2 class="fw-bold">{{ $product->name }}</h2>
                            
                            <p class="text-muted">{{ $product->category->name ?? 'Uncategorized' }}</p>

                            <p class="text-success fs-4">
                                <strong>${{ number_format($product->price, 2) }}</strong>
                            </p>

                            <p>{{ $product->description }}</p>

                            <div class="d-flex justify-content-between align-items-center mt-3">
                                {{-- <span class="badge {{ $product->stock > 0 ? 'bg-success' : 'bg-danger' }} p-2">
                                    {{ $product->stock > 0 ? 'In Stock' : 'Out of Stock' }}
                                </span> --}}
                            </div>

                            <div class="mt-4">
                                <button class="btn btn-primary w-100 py-2">🛒 Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
