<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
   
    public function index()
    {
        $products = Product::orderBy('sort_order')->get();
        return view('admin.products', compact('products'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string',
            'status' => 'required|in:active,inactive',
            'featured' => 'boolean',
            'sort_order' => 'integer|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $product = new Product();
    
        $product->name = $validated['name'];
        $product->category = $validated['category'];
        $product->price = $validated['price'];
        $product->description = $validated['description'];
        $product->status = $validated['status'];
        $product->featured = $request->has('featured') ? $validated['featured'] : false;
        $product->sort_order = $validated['sort_order'] ?? 0;

    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $product->image = $imagePath;
        }

    
        $product->save();

        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    }  
    
    public function update(Request $request, Product $product)
    {

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string',
            'status' => 'required|in:active,inactive',
            'featured' => 'boolean',
            'sort_order' => 'integer|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);


        $product->name = $validated['name'];
        $product->category = $validated['category'];
        $product->price = $validated['price'];
        $product->description = $validated['description'];
        $product->status = $validated['status'];
        $product->featured = $request->has('featured') ? $validated['featured'] : false;
        $product->sort_order = $validated['sort_order'] ?? $product->sort_order;

    
        if ($request->hasFile('image')) {
        
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            
            $imagePath = $request->file('image')->store('products', 'public');
            $product->image = $imagePath;
        }


        
        $product->save();

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully.');
    }

     
    /*public function destroy(/*Product $product/$id)
    {
        
        if ($id->image) {
            Storage::disk('public')->delete($id->image);
        }

        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully.');
    }*/
    public function destroy($id)
    {
    $product = Product::findOrFail($id);

    if ($product->image) {
        Storage::disk('public')->delete($product->image);
    }

    $product->delete();

    return redirect()->route('products.index')
        ->with('success', 'Product deleted successfully.');
    }

    
public function show($id) {
    $product = Product::findOrFail($id);
    return view('admin.products.show', compact('product'));
}

}