<?php

namespace App\Http\Controllers;

use App\Models\Cost;
use Illuminate\Http\Request;
use App\Models\Image;

class PageController extends Controller
{
    public function cost()
    {
        $id = 119;
        $images = Image::find($id);
        return view('image-price')->with('images', $images);
    }

    public function index(){
        $images = Image::latest();
        return view('welcome', compact('images',$images));
    }

    public function justified(){
        $images = Image::all();
        return view('justified')->with('images', $images);
    }

    public function imagePrice($id){
        $images = Image::find($id);
        return view('image-price', compact('images',$images));
    }
}
