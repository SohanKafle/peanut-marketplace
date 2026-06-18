<?php

namespace App\Http\Controllers;

use App\Models\Farmer;
use App\Models\Product;
use App\Models\Story;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    // Home Page: Agri-tourism ra general identity
    public function home()
    {
        return view('pages.home');
    }

    // About Page: Mission, Vision, Location, Diverse Background
    public function about()
    {
        return view('pages.about');
    }

    // Peanuts Page: Story ra Marketplace (Directing to social messaging)
    public function peanuts()
    {
        // Peanuts category ko matra products haru dekhauna
        $peanuts = Product::with('farmer.cooperative')->latest()->get();
        return view('pages.peanuts', compact('peanuts'));
    }

    // Homestays Page: Local Map ra Marketplace (Directing to social messaging)
    public function homestays()
    {
        // Homestays data (Database bata lyauna saknuhunchha, aahile static structure)
        return view('pages.homestays');
    }

    // Stories Page: Blog and Conversations
    public function stories()
    {
        // $stories = Story::with('farmer')->latest()->paginate(9);
        return view('pages.stories');
    }

    // Connect & Support Page: Market connection
    public function connect()
    {
        return view('pages.connect');
    }
}