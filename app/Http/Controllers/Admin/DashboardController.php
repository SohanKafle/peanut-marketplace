<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Homestay;
use App\Models\Story;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display the admin panel control gateway.
     */
    public function index()
    {
        // Gather key operational counts to populate dashboard status badges
        $productsCount = Product::count();
        $homestaysCount = Homestay::count();
        $storiesCount = Story::count();

        // Pass metrics data directly to your newly built layout blueprint
        return view('admin.dashboard', compact(
            'productsCount',
            'homestaysCount',
            'storiesCount'
        ));
    }
}
