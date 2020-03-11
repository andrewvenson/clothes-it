<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\items;

class FeedController extends Controller
{
    public function feed(){

        $items = new items();

        $all_itms = $items::orderBy('created_at', 'desc')->get();

        return view('feed', ['items' => $all_itms]);
    }
}
