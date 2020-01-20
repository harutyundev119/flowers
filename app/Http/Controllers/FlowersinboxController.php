<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class FlowersinboxController extends Controller
{
    public function show1Products(Request $request) {

        $products = Product::all();


        return view('flowersinboxes', ['products'=>$products]);
    }
}
