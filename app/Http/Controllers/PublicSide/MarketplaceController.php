<?php

namespace App\Http\Controllers\PublicSide;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Cooperative;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MarketplaceController extends Controller
{
    /**
     * Display the public homepage.
     */
    public function home(): View
    {
        return view("welcome");
    }

    /**
     * Display the marketplace listing.
     */
    public function index(): View
    {
        // Fetch products, eager loading their cooperative and farmer to avoid N+1 query problems
        $products = Product::with(["cooperative", "farmer"])
            ->where("stock", ">", 0)
            ->latest()
            ->paginate(12);

        return view("marketplace.index", compact("products"));
    }

    /**
     * Display a specific product details page.
     */
    public function show(Product $product): View
    {
        $product->load(["cooperative", "farmer"]);
        
        return view("marketplace.show", compact("product"));
    }
}