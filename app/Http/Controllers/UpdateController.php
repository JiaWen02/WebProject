<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

session_start();
class UpdateController extends Controller
{
    public function updateform(){
        return view('updatepage');
    } 
    
    public function update(Request $request){

        $this->validate($request, [
            'password'  => 'required|alphaNum|min:6|max:30'
        ]);

        $cpassword = $request->input('cpassword');
        $password = $request->input('password');

        if($cpassword!=$password){
            echo '<script>alert("Password not match with confirm password!!");
            window.location.assign("/updatepage");</script>';
        }
        else{
            DB::update('update registers set password = ? where name = ?',[$password,$_SESSION["username"]]);
            echo '<script>alert("Change Password Successfully!!");
            window.location.assign("/homepage");</script>';
        }

        

    }

}
