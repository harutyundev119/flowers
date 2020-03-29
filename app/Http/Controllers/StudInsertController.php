<?php

namespace App\Http\Controllers;
use DB;
use App\Student_details;
use Illuminate\Http\Request;

class StudInsertController extends Controller
{
    public function insertform(){
        return view('create1');
        }
        public function insert(Request $request){
            echo  $first_name = $request->input('first_name');
        echo  $last_name = $request->input('last_name');
        echo   $city_name = $request->input('city_name');
     echo    $email = $request->input('email');
         $data=array('first_name'=>$first_name,"last_name"=>$last_name,"city_name"=>$city_name,"email"=>$email);
         DB::table('student_details')->insert($data);
         echo "Record inserted successfully.<br/>";
         echo '<a href = "/insert">Click Here</a> to go back.';
        }
}
