<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::latest()->get();

        return view('products.index', compact('products'));  
      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('products.add-product');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'product_name' => 'required|string|max:255',
            'product_category' => 'required|in:Electronics,Clothing,Books,Home & Kitchen',
            'product_price' => 'required|numeric|min:0',
            'product_stock' => 'required|integer|min:0',
            'product_description' => 'nullable|string',
        ]);

        Product::create($request->all());

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
        return view('products.edit-product', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {   
        //
        $request->validate([
            'product_name' => 'required|string|max:255',
            'product_category' => 'required|in:Electronics,Clothing,Books,Home & Kitchen',
            'product_price' => 'required|numeric|min:0',
            'product_stock' => 'required|integer|min:0',
            'product_description' => 'nullable|string',
        ]);

        $product->update($validatedData = $request->all());

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();

       return redirect()->route('products.index')->with('success', 'Product deleted successfully.');    
    }
}
