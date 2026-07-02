<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Farmer;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Eager load the farmer relationship to display name/ward smoothly
        $products = Product::with('farmer')->latest()->paginate(15);
        
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Fetch farmers to populate the dropdown selection menu
        $farmers = Farmer::orderBy('name')->get();
        
        return view('admin.products.create', compact('farmers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'farmer_id'   => 'required|exists:farmers,id',
            'name'        => 'required|string|max:255',
            'slug'        => 'required|string|unique:products,slug|max:255',
            'description' => 'required|string',
            'price'       => 'required|numeric|min:0|max:999999.99',
            'stock'       => 'required|integer|min:0',
            'unit'        => 'required|string|max:50',
        ]);

        // Convert the presence of the checkbox to a clean boolean true/false value
        $validated['featured'] = $request->has('featured');

        Product::create($validated);

        return redirect()
            ->route('admin.products.index')
            ->with('success', 'Harvest item listed successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        // Typically admin panels skip a standalone show view and reuse edit, 
        // but if you ever need it, here it is tied to route model binding:
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $farmers = Farmer::orderBy('name')->get();
        
        return view('admin.products.edit', compact('product', 'farmers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'farmer_id'   => 'required|exists:farmers,id',
            'name'        => 'required|string|max:255',
            'slug'        => ['required', 'string', 'max:255', Rule::unique('products')->ignore($product->id)],
            'description' => 'required|string',
            'price'       => 'required|numeric|min:0|max:999999.99',
            'stock'       => 'required|integer|min:0',
            'unit'        => 'required|string|max:50',
        ]);

        $validated['featured'] = $request->has('featured');

        $product->update($validated);

        return redirect()
            ->route('admin.products.index')
            ->with('success', 'Harvest details updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()
            ->route('admin.products.index')
            ->with('success', 'Harvest listing removed completely.');
    }
}