<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE App\Models\Product;

class ProductController extends Controller
{
   
    public function index()
    {
        return response()->json(Product::all(), 200);
    }

   
    public function store(Request $request)
    {
       $validatedData = $request->validate([
          'name' => 'required|max:255',
          'description' => 'required',
          'price' => 'required|numeric',
    ]);
    
    
      $product = Product::create($validatedData);
    
    
      return response()->json($product, 201);
    }

   
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return response()->json($product, 200);
    }

    
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
      ]);
        $product = Product::findOrFail($id);
        $product->update($validatedData);

        return response()->json($product, 200);
      
    }

    
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
    
        return response()->json('Product deleted successfully', 204);
    }
}
