<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\outfits;

class OutfitController extends Controller
{
    public function fits(){

        $fits = new outfits();
     
        $all_itms = $fits::orderBy('created_at', 'desc')->get();

        $fittys = [];

        foreach ($all_itms as $itm){
            $outfit = explode(" ", $itm->image);

            $wow = array_diff($outfit, array(""));
            
            array_push($fittys, $wow);
        }

        return view('fits', ['fits' => $all_itms, 'fittys' => $fittys]);
    }

    public function store(){
 
        $item = new outfits();

        $item->name = request('name');

        $image_val = " ";

        $image_str = request('fit-items');

        // dd($image_str);
        
        foreach($image_str as $image){
            $image_val .= strval($image) . " ";
        }

        // dd($image_val);


        $item->private = 1;
        $item->public = 0;
        $item->image = $image_val;

        $item->save();

        return redirect()->route('fits');
    }
}
