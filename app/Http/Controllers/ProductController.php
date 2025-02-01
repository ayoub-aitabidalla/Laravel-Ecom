<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProduct;

use App\Models\Product;

class ProductController extends Controller
{

    public function index()
    {

        $products = Product::all();
        return view('products.index',
        [
            'products' => $products,

        ]);
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show',
        [
            'product' => $product,
        ]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', ['product' => $product]);
    }

    public function store(StoreProduct $request)
    {
        $validatedData = $request->validated();
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products_images');
            $validatedData['image'] = $imagePath;
        }
        Product::create($validatedData);
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }
}
