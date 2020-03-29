<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class FlowersinboxController extends Controller
{
    public function show1Products(Request $request) {

        $products = Product::where('category','=','flowersinbox')->get();


        return view('flowersinboxes', ['products'=>$products]);
    }
   
}
