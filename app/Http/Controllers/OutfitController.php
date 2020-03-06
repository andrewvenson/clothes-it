<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\outfits;

class OutfitController extends Controller
{
    public function fits(){

        $fits = new Outfits();

        $images = $fits->pluck('image');

        dd($images);

        $all_itms = $fits::orderBy('created_at', 'desc')->get();

        return view('fits', ['fits' => $all_itms]);
    }

    public function store(){
 
        $item = new Outfits();

        $item->name = request('name');

        $image_val = "";

        $image_str = request('fit-items');
        
        foreach($image_str as $image){
            $image_val .= strval($image_val) . strval($image) . " ";
        }


        $item->private = 1;
        $item->public = 0;
        $item->image = $image_val;

        $item->save();

        return redirect()->route('fits');
    }
}
