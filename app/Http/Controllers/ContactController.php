<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ContactController extends Controller
{
    //
    public function showContact(){
        return view('contact');
    }
    public function postFeedback(Request $request){
         $name = $request->input('name');
         $phone = $request->input('phone');
         $email = $request->input('email');
         $message = $request->input('message');
         $data=array('name'=>$name,"phone"=>$phone,"email"=>$email,"message"=>$message);
         DB::table('contacts')->insert($data);
        return redirect('/contact');
    }
   
}
