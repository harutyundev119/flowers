<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class GiftsController extends Controller
{
    public function giftsProducts(Request $request) {

        $products = Product::where('category','=','gifts')->get();


        return view('gifts', ['products'=>$products]);
    }
   
}
