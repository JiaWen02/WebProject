<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getAllUsers(){
        $users = Register::all();
        return response()->json(['member'=>$users],200);
    }

    public function getUser($id) {
        if (Register::where('id', $id)->exists()) {
            $users = Register::find($id);
            return response()->json(['member'=>$users],200);
        } 
        
        else {
            return response()->json([
              "message" => "User not found"
            ], 404);
          }
      }
}
