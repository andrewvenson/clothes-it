<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\items;

class ClothController extends Controller
{
    public function items(){

        $items = new items();

        $all_itms = $items::orderBy('created_at', 'desc')->get();

        return view('home', ['items' => $all_itms]);
    }

    public function itemForm(){
        $types = new items();
        
        $all_types = [
            "Hoodies",
            "Sweater",
            "Long Sleeve",
            "Short Sleeve",
            "Polo",
            "Jeans",
            "Pants",
            "Sweats",
            "Shoes",
            "Dress",
            "Suits",
            "Socks",
            "Hats",
            "Belts",

        ];
        // $all_types = $types::all();

        return view('newitem',  ['all_types' => $all_types]);
    }

    public function store(Request $request){
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:500000'

        ]);

        $image = $request->file('image');

        $new_name = time().'.'.$image->getClientOriginalExtension();

        $image->move(public_path("uploads"), $new_name);

        $item = new Items();

        $item->name = request('name');
        $item->private = 1;
        $item->public = 0;
        $item->price = request('price');
        $item->color = request('color');
        $item->tag = request('tag');
        $item->image = $new_name;

        $item->save();

        return redirect()->route('home');
    }
}
