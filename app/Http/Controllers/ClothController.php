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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:50000',
            'name' => 'required',

        ]);
        
        $image = $request->file('image');

        $new_name = time().'.'.$image->getClientOriginalExtension();

        $image->move(public_path("uploads"), $new_name);

        $item = new Items();



        $item->name = request('name');


        if(request('publicprivate') == "public"){
            $item->publicprivate = "1";
        }else{
            $item->publicprivate = "0";
        }
        

        if(request('price') == null){
            $item->price = 0.00;
        }else{
            $item->price = request('price');
        }

        $item->trade= request('trade');
        $item->sell=request('sell');

        if(request('color') == null){
            $item->color = 'none';
        }else{
            $item->color = request('color');
        }

        $item->tag = request('tag');
        $item->image = $new_name;
        $item->type = request('type');
        $item->description = request('description');
        $item->save();

        return redirect()->route('home');
    }
}
