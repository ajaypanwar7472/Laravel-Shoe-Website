<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\authcontroller;

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

Route::get('home',[homecontroller::class,'index']);
Route::get('login',[authcontroller::class,'login']);
Route::get('register',[authcontroller::class,'register']);
Route::post('registeruser',[authcontroller::class,'registerUser']);
Route::post('loginuser',[authcontroller::class,'loginUser'])->name('loginuser');
Route::get('dashboard',[authcontroller::class,'dashboard']);
Route::get('logout',[authcontroller::class,'logout']);