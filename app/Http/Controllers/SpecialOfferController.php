<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class SpecialOfferController extends Controller
{
    public function add($id)
    {
    	$so = Post::where('id', '=', $id)->first();
    	$so->specoff = 1;
    	$so->save();
    	return redirect('/dashboard');
    }

}
