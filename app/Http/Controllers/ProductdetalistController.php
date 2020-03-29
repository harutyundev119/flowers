<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ProductdetalistController extends Controller
{
    public function viewProject($id)
    {   
     

        $products = Product::where('id','=',$id)->get();

        return view('productdetail', ['products'=>$products]);
    }
}
