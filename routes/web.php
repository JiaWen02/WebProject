<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\UpdateController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/viewpage', function () {
    return view('viewpage');
});

Route::get('/register', 'App\Http\Controllers\RegisterController@insertform');
Route::post('/create', 'App\Http\Controllers\RegisterController@insert');
Route::get('/login', 'App\Http\Controllers\LoginController@index');
Route::post('/check', 'App\Http\Controllers\LoginController@checkLogin');
Route::any('/delete', 'App\Http\Controllers\DeleteController@delete');
Route::any('/updatepage', 'App\Http\Controllers\UpdateController@updateform');
Route::any('/update', 'App\Http\Controllers\UpdateController@update');