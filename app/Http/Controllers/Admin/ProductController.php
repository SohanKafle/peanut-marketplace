<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a filtered and paginated listing of the marketplace products.
     */
    public function index(Request $request)
    {

        $query = Product::latest();

        if ($request->filled('search')) {
            $searchTerm = $request->input('search');

            $query->where(function ($q) use ($searchTerm) {
                $q->where('name', 'like', '%' . $searchTerm . '%')
                    ->orWhere('producer_name', 'like', '%' . $searchTerm . '%')
                    ->orWhere('village_name', 'like', '%' . $searchTerm . '%');
            });
        }

        if ($request->filled('status')) {
            $query->where('status', $request->input('status'));
        }

        $products = $query->paginate(12);

        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new product listing.
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created product inside the database.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'          => 'required|string|max:255',
            'slug'          => 'required|string|max:255|unique:products,slug',
            'description'   => 'required|string',
            'price'         => 'required|numeric|min:0',
            'stock'         => 'required|integer|min:0',
            'unit'          => 'required|string|max:20',
            'status'        => 'required|in:active,inactive',
            'featured'      => 'required|boolean',
            'producer_name' => 'required|string|max:255',
            'ward_number'   => 'required|integer|between:1,4',
            'village_name'  => 'required|string|max:255',
            'contact_link'  => 'nullable|url|max:255',
            'image'         => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('products', 'public');
        }

        Product::create($validated);

        return redirect()
            ->route('admin.products.index')
            ->with('success', 'Product listed successfully in the marketplace.');
    }

    /**
     * Show the form for editing the specified product record.
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified product record inside the database.
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name'          => 'required|string|max:255',
            'slug'          => 'required|string|max:255|unique:products,slug,' . $product->id,
            'description'   => 'required|string',
            'price'         => 'required|numeric|min:0',
            'stock'         => 'required|integer|min:0',
            'unit'          => 'required|string|max:20',
            'status'        => 'required|in:active,inactive',
            'featured'      => 'required|boolean',
            'producer_name' => 'required|string|max:255',
            'ward_number'   => 'required|integer|between:1,4',
            'village_name'  => 'required|string|max:255',
            'contact_link'  => 'nullable|url|max:255',
            'image'         => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $validated['image'] = $request->file('image')->store('products', 'public');
        }

        $product->update($validated);

        return redirect()
            ->route('admin.products.index')
            ->with('success', 'Product specifications updated successfully.');
    }

    /**
     * Remove the specified product and its media file from storage.
     */
    public function destroy(Product $product)
    {
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return redirect()
            ->route('admin.products.index')
            ->with('success', 'Product successfully removed.');
    }
}
