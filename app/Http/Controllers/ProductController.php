<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\SaveProductRequest;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->get();
        return view('products.index', compact('products'));
    }
    public function create()
    {
        return view('products.create');
    }
    public function store(SaveProductRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store(
                'photos',
                'public'
            );
        }
        Product::create($data);
        return redirect()->route('products.index');
    }
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }
    public function update(SaveProductRequest $request, Product $product)
    {
        $data = $request->validated();
        if ($request->hasFile('photo')) {
            if (
                $product->photo && Storage::disk('public')
                ->exists($product->photo)
            ) {
                Storage::disk('public')->delete($product->photo);
            }
            $data['photo'] = $request->file('photo')->store(
                'photos',
                'public'
            );
        }
        $product->update($data);
        return redirect()->route('products.show', $product);
    }
}
