<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ContactController extends Controller
{
    //
    public function showContact(){
        return view('contact');
    }
    public function postFeedback(Request $request){
//        dd($request->input('name'));
//       print_r($name);
        return redirect('/about');
    }
}
