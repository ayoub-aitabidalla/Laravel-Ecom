@extends('layouts.app')

@section('content')
<div class="mt-4 row row-cols-1 row-cols-md-2 gx-3 align-items-stretch">
    
    <div class="col">
        <div class="card p-3 h-100">
            <div class="d-flex align-items-center">
                <strong>Shipped by YourBrand</strong>
            </div>
            {{-- <p class="text-danger mt-2">MAD21.55 saved, explore more free shipping items</p> --}}
           
            @foreach($items as $item)
    <div class="d-flex align-items-center mt-3">
        <img src="{{ asset('storage/' . $item->product->image) }}" alt="Product"
            class="me-3 img-fluid rounded"
            style="width: 80px; height: 80px; object-fit: cover;">

        <div class="flex-grow-1">
            <p class="mb-1">{{$item->product->name}}</p>
            <i class="fas fa-dollar-sign me-1"></i>
            <strong>{{ number_format($item->product->price, 2) }}</strong>

            <!-- Quantity Management -->
            <div class="mt-2 d-flex align-items-center">
                <label for="quantity-{{ $item->id }}" class="me-2">Qty:</label>
                <input type="number" id="quantity-{{ $item->id }}"
                    class="form-control form-control-sm text-center"
                    style="width: 60px;"
                    min="1" value="{{ $item->quantity }}"
                    onchange="updateQuantity({{ $item->id }}, this.value)">
            </div>
        </div>
         <form action="{{ route('cart.remove', $item->id) }}" method="POST">
            @csrf
            <button class="btn btn-danger btn-sm ms-3" type="submit"> <i class="fas fa-trash"></i></button>
        </form>
       
    </div>
    @endforeach
        </div>
    </div>
    
    <div class="col">
        <div class="card p-3 h-100">
            <h5>Summary</h5>
            <p>Subtotal:
                <p class="float-end"><i class="fas fa-dollar-sign me-1 "></i>{{ number_format($totalPrice, 2) }}</p></p>
            {{-- <p>Shipping fee: <span class="float-end">MAD21.55</span></p>
            <p>Total saved: <span class="float-end text-danger">-MAD21.55</span></p>
            <hr>
            <h5>Estimated total: <span class="float-end fw-bold">MAD119.39</span></h5> --}}
            <button class="btn btn-danger w-100 mt-3">Checkout (1)</button>
        </div>
    </div>
    
</div>

@endsection
