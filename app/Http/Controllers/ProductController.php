<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;

class ProductController extends Controller
{

    public function index()
    {
        return Product::with('stocks')->get();
    }


    public function store(StoreProductRequest $request)
    {
        //
    }

    public function show($id)
    {
        return Product::with('stocks')->find($id);
    }


    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    public function destroy(Product $product)
    {
        //
    }
}
