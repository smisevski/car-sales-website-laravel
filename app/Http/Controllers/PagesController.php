<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function home()
    {
        $items = Post::all();
        $so = Post::where('specoff', '=', 1)->get();
    	return view('pages.home')->with('items', $items)->with('so', $so);
    }

    public function inventory()
    {
        return view('pages.inventory')->with('items', $items);
    }

    public function carfinder()
    {
        return view('pages.carfinder');
    }

    public function applyonline()
    {
        return view('pages.applyonline');
    }

    public function about()
    {
    	return view('pages.about');
    }

    public function contact()
    {
    	return view('pages.contact');
    }
}
