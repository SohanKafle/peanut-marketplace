<?php

namespace App\Http\Controllers;

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
        return view('pages.stories');
    }
    public function connect()
    {
        return view('pages.connect');
    }
}
