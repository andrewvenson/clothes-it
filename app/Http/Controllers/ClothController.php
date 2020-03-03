<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\items;

class ClothController extends Controller
{
    public function items(){

        $items = new Items();

        $all_itms = $items::orderBy('created_at', 'desc')->get();

        return view('home', ['items' => $all_itms]);
    }

    public function store(Request $request){
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'

        ]);
        $image = $request->file('image');

        $new_name = time().'.'.$image->getClientOriginalExtension();

        echo "this is image name:".$new_name; 

        $image->move(public_path("uploads"), $new_name);

        $item = new Items();

        $item->name = request('name');
        $item->private = 1;
        $item->public = 0;
        $item->qty = request('qty');
        $item->color = request('color');
        $item->tag = request('tag');
        $item->image = $new_name;

        $item->save();

        return redirect()->route('home');
    }
}
