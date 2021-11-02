<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function insertform(){
        return view('register');
    }    

    public function insert(Request $request){

        $this->validate($request, [
            'name' => 'required|alphaNum|max:30',     
            'contact' => 'required|max:12',       
            'email' => 'required|email',            
            'password' => 'required|alphaNum|min:6|max:30',
        ]);

        $name = $request->input('name');
        $contact = $request->input('contact');
        $mail = $request->input('email');
        $password = $request->input('password');

        $data=array("name"=>$name,"contact"=>$contact,"email"=>$mail,"password"=>$password);
        DB::table('registers')->insert($data);
        echo '<script>alert("Register Successfully!!");
              window.location.assign("/login");</script>';
        
    }
}
