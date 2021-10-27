<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

session_start();
class LoginController extends Controller
{
    public function index(){
        return view('login');
    } 

    public function checkLogin(Request $request){

        $this->validate($request, [
            'username'   => 'required|alphaNum|max:30',
            'password'  => 'required|alphaNum|min:6|max:30'
        ]);

        $name = $request->input('username');
        $password = $request->input('password');

        $userpwd = DB::table('register')->where('name', $name)->value('password');

        if($userpwd == $password){
            echo '<script>alert("Welcome Back!!");
            window.location.assign("/homepage");</script>';
        }
            
        else{
            echo '<script>alert("Error!! Login Unsuccessfully!!");
            window.location.assign("/login");</script>';
        }

    }

}
