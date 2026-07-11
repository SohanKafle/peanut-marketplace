<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Story;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function peanuts()
    {
        $products = Product::latest()->paginate(9);
        return view('pages.peanuts', compact('products'));
    }
    public function homestays()
    {
        $homestays = \App\Models\Homestay::latest()->paginate(9);

        return view('pages.homestays', compact('homestays'));
    }

    public function stories()
    {
        $stories = \App\Models\Story::where('status', 'Published')
            ->latest()
            ->paginate(9);

        return view('pages.stories', compact('stories'));
    }

    /**
     * @param int|string $id
     */
    public function show(int|string $id)
    {
        $story = Story::findOrFail($id);
        return view('pages.show', compact('story'));
    }

    public function connect()
    {
        return view('pages.connect');
    }
}
