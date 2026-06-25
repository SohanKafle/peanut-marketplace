<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Carbon\Carbon;

class OrderController extends Controller
{
    /**
     * Display a listing of the orders combined with filters.
     */
    public function index(Request $request)
    {
        // 1. Initial Eloquent Query eager-loading the customer relationship
        $query = Order::with('user');

        // 2. Filter: Multi-column Text Search
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function($q) use ($search) {
                $q->where('id', 'LIKE', "%{$search}%")
                  ->orWhere('city', 'LIKE', "%{$search}%")
                  ->orWhereHas('user', function($userQuery) use ($search) {
                      $userQuery->where('name', 'LIKE', "%{$search}%");
                  });
            });
        }

        // 3. Filter: Structural Status Match
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // 4. Filter: Live Calendar Flatpickr Range Processing
        if ($request->filled('date_range')) {
            // Flatpickr separates ranges with " to " string values natively
            $dates = explode(' to ', $request->input('date_range'));

            if (count($dates) === 2) {
                // Bracket search bounded strictly from midnight start to midnight end
                $query->whereBetween('created_at', [
                    Carbon::parse($dates[0])->startOfDay(),
                    Carbon::parse($dates[1])->endOfDay()
                ]);
            } else {
                // Single explicit day selector fallback handling
                $query->whereDate('created_at', Carbon::parse($dates[0]));
            }
        }

        // 5. Build dynamic paginated streams and preserve query parameters
        $orders = $query->latest()->paginate(15)->withQueryString();

        // 6. Direct execution pass to UI interface template
        return view('admin.orders.index', compact('orders'));
    }

    /**
     * Display individual order details workspace.
     */
    public function show(Order $order)
    {
        $order->load(['user']); // Lazy eager load elements 
        return view('admin.orders.show', compact('order'));
    }

    /**
     * Update log metrics or operational execution statuses.
     */
    public function update(Request $request, Order $order)
    {
        $validated = $request->validate([
            'status' => 'required|in:Pending Fulfillment,In Transit,Delivered,Cancelled'
        ]);

        $order->update($validated);

        return redirect()->back()->with('success', 'Order logistics status refreshed successfully.');
    }
}