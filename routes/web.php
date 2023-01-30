<?php

use Illuminate\Support\Facades\Route;

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


Route::view('user','user');
Route::view('noaccess','noaccess');
Route::get('/', function () {
            return view('welcome');
        });
// Route::view('home','home');

//=============making route of group middleware
// Route::group(['middleware'=>['checkAge']],function(){
//     Route::get('/', function () {
//         return view('welcome');
//     });
//     Route::view('home','home');
// });

//======Route MiddleWare for single route========
Route::view('home','home')->middleware('checkAge');
