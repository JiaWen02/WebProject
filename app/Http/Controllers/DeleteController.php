<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

session_start();
class DeleteController extends Controller
{


    public function delete(Request $request){

        DB::delete('delete from registers where name = ?',[$_SESSION["username"]]);
        echo '<script>alert("Delete Account Successfully!!");
            window.location.assign("/login");</script>';

    }

}
