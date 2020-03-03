<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClothController extends Controller
{
    public function items(){

        $items = [

            'tah', 
            'tah', 
            'tah'
        ];

        return view('home', ['items' => $items]);
    }

    public function store(Request $request){
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'

        ]);
        $image = $request->file('image');

        $new_name = rand().'.'.$image->getClientOriginalExtension();
        $image->move(public_path("uploads"), $new_name);
        return back()->with('success', 'Image Uploaded Successfully');
    }
}
