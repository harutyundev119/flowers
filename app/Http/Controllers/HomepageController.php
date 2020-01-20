<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class homepageController extends Controller
{

    public function showProducts(Request $request) {

        $products = Product::all();


        return view('index', ['products'=>$products]);
    }
}
