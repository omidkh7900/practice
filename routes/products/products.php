<?php

use Illuminate\Support\Facades\Auth;
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

Route::resource('products',\App\Http\Controllers\ProductsController::class)->middleware('auth');

\Illuminate\Support\Facades\Auth::routes();
Route::get('/',[\App\Http\Controllers\HomeController::class,'index'])->name('home');
//Route::get('/',function (){
//   return view('welcome');
//});

Auth::routes();

Route::get('/home',[\App\Http\Controllers\HomeController::class,'index'])->name('home');

//Route::get('/', function () {
//    return view('welcome');
//});
