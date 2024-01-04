<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.product', [
            'products' => Product::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product = new Product();
        $product->nama_product = 'Nama Produk';
        $product->kode_product = 'Kode Produk';
        $product->harga_product = 'Harga Produk';

        return view('pages.product', [
            'product' => $product
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {

        $product = Product::findOrFail($product);
        $product->update($request->all());
        return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $deleteProduct = Product::findOrFail($product);
        $deleteProduct->delete();

        return redirect('/product');
    }
}
