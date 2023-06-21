<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view('backend.product.index', compact('products'));
    }
    public function create()
    {
        return view('backend.product.create');
    }
    public function store(Request $request)
    {
        $product = new Product();
        $product->title = $request->title;
        $product->save();
        return redirect()->route('products');
    }
    public function show($id)
    {
        $product = Product::find($id);
        return view('backend.product.show', compact('product'));
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view('backend.product.edit', compact('product'));
    }
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update([
            'title' => $request->title
        ]);
        // dd($product);
        return redirect()->route('products');
    }
    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products');
    }
}
