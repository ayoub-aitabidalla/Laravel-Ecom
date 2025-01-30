@extends('layouts.app')

@section('content')
<div class="container mx-auto w-50 border border-2 rounded py-3">
    <form method="POST" action="{{route('products.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="productName" class="form-label">Product Name</label>
            <input type="text" class="form-control" name="name" id="productName" required>
        </div>

        <div class="mb-3">
            <label for="productDescription" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="productDescription" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="productPrice" class="form-label">Price</label>
            <input type="number" class="form-control" name="price" id="productPrice" step="0.01" required>
        </div>
        
        <div class="mb-3">
            <label for="productCategory" class="form-label">Category</label>
            <select class="form-select" id="productCategory" name="category_id" required>
                <option value="" disabled selected>Select a category</option>
                @foreach($categories as $categorie)
                <option value="{{$categorie->id}}" >{{$categorie->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="productImage" class="form-label">Image</label>
            <input type="file" class="form-control" name="image" id="productImage" accept="image/*">
            <!-- Image preview -->
            {{-- <div class="mt-3">
                <img id="imagePreview" src="" alt="Image Preview" class="img-thumbnail" style=" display: none;width: 100px; height: 100px; object-fit: cover; border-radius: 50%;"
                >
            </div> --}}
        </div>
        <button type="submit" class="btn btn-primary">Save Product</button>
    </form>
</div>
@endsection
