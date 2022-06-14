<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CollectionController;

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
Route::get('home',[AdminController::class,'index'])->middleware('CheckLogout');
Route::get('/', [CollectionController::class, 'index']);


//Login
Route::get('/showlogin',function (){
    return view('Login');
})->middleware('CheckUser');
Route::post('/checklogin',[LoginController::class,'check_login']);
Route::get('/deletelogin',[LoginController::class,'index']);
Route::get('/showregister',[LoginController::class,'showregister'])->middleware('CheckUser');
Route::post('/registeruser',[LoginController::class,'register']);
Route::get('/logout',[LoginController::class,'logout']);
Route::get('/showuserchange',[LoginController::class,'showuserchange']);
Route::post('/userchange',[LoginController::class,'userchange']);
Auth::routes();

//POST
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('post',PostController::class)->middleware('CheckLogout');
