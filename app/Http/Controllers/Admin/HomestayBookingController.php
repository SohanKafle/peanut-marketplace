<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomestayBooking;
use Illuminate\Http\Request;

class HomestayBookingController extends Controller
{
    public function index(Request $request)
    {
        $query = HomestayBooking::query();
        if ($request->filled('search')) {
            $query->where('guest_name', 'like', "%{$request->search}%")
                  ->orWhere('room_name', 'like', "%{$request->search}%");
        }
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }
        $bookings = $query->latest()->paginate(15)->withQueryString();
       $statuses = ['Confirmed', 'Checked In', 'Completed', 'Cancelled'];
return view('admin.homestays.index', compact('bookings', 'statuses'));
    }

    public function create()
    {
        return view('admin.homestays.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'guest_name' => 'required|string|max:255',
            'guest_email' => 'required|email',
            'guest_phone' => 'required|string|max:20',
            'room_name' => 'required|string|max:100',
            'guests_count' => 'required|integer|min:1',
            'check_in' => 'required|date|after_or_equal:today',
            'check_out' => 'required|date|after:check_in',
            'total_price' => 'required|numeric|min:0',
            'status' => 'required|in:Confirmed,Checked In,Completed,Cancelled',
            'special_requests' => 'nullable|string'
        ]);

        HomestayBooking::create($validated);
        return redirect()->route('admin.homestays.index')->with('success', 'Booking created.');
    }

    public function edit(HomestayBooking $homestay)
    {
        return view('admin.homestays.edit', compact('homestay'));
    }

    public function update(Request $request, HomestayBooking $homestay)
    {
        $validated = $request->validate([
            'guest_name' => 'required|string|max:255',
            'guest_email' => 'required|email',
            'guest_phone' => 'required|string|max:20',
            'room_name' => 'required|string|max:100',
            'guests_count' => 'required|integer|min:1',
            'check_in' => 'required|date',
            'check_out' => 'required|date|after:check_in',
            'total_price' => 'required|numeric|min:0',
            'status' => 'required|in:Confirmed,Checked In,Completed,Cancelled',
            'special_requests' => 'nullable|string'
        ]);

        $homestay->update($validated);
        return redirect()->route('admin.homestays.index')->with('success', 'Booking updated.');
    }

    public function destroy(HomestayBooking $homestay)
    {
        $homestay->delete();
        return redirect()->route('admin.homestays.index')->with('success', 'Booking deleted.');
    }
}