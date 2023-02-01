<?php

use App\Http\Middleware\checkAge;
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
        })->middleware('checkAge');
// Route::view('home','home');

//=============making route of group middleware
// Route::group(['middleware'=>['checkAge']],function(){
//     Route::get('/', function () {
//         return view('welcome');
//     });
//     Route::view('home','home');
// });
Route::group(['middleware'=>['UnderConstruction']],function(){
    Route::view('page1','cunstruction.page1');
    Route::view('page2','cunstruction.page2');
    Route::view('page3','cunstruction.page3')->withoutMiddleware('UnderConstruction')->middleware('checkAge');

});

//======Route MiddleWare for single route========
Route::view('home','home')->middleware('checkAge');
//we can give middleware class name also
//Route::view('home', 'home')->middleware(checkAge::class);
