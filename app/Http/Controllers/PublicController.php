<?php

namespace App\Http\Controllers;

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
        return view('pages.peanuts');
    }
    public function homestays()
    {
        return view('pages.homestays');
    }
    public function stories()
    {
        
$stories = Story::where('status', 'Published')
                    ->latest()
                    ->get();
    
    // Pass the $stories variable to the view
    return view('pages.stories', compact('stories'));    }

    public function show($id)
{
    $story = Story::findOrFail($id);
    return view('pages.show', compact('story'));
}

    public function connect()
    {
        return view('pages.connect');
    }
}
