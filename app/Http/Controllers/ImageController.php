<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function post(Request $request)
    {
        $this->validate($request, [
            'image' => 'required' // 1MB Max
        ]);

        $images = $request->image;
        foreach ($images as $imagepost) {
            $image_new_name = time() . $imagepost->getClientOriginalName();
            $imagepost->move('images', $image_new_name);
            $postadd = New Image;
            $postadd->image = $image_new_name;
            $postadd->save();
        }
        return redirect()->back();
    }

    public function index($id){
        $images = Image::find($id);
        return view('image-price', compact('images',$images));
    }
}
