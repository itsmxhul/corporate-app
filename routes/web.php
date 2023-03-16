<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CreateBlogController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index',[IndexController::class,'index']);

Route::get('/register',[AuthController::class,'register']);
Route::post('/register',[AuthController::class,'valid_register']);
Route::get('/signin',[AuthController::class,'signin']);
Route::post('/signin',[AuthController::class,'valid_login']);
Route::get('/about',[IndexController::class,'about']);
Route::get('/blogs',[IndexController::class,'blogs']);
Route::get('/contact',[IndexController::class,'contact']);
Route::get('/faq',[IndexController::class,'faq']);
Route::get('/features',[IndexController::class,'features']);
Route::get('/pricing',[IndexController::class,'pricing']);
Route::get('/security',[IndexController::class,'security']);
Route::get('/single',[IndexController::class,'single']);
Route::get('/typography',[IndexController::class,'typography']);
Route::get('/team',[IndexController::class,'team']);
Route::get('/logout',[AuthController::class,'logout']);
Route::get('/create_blog',[IndexController::class,'create_blog']);
Route::post('/create_blog',[CreateBlogController::class,'create_blog']);
Route::post('/create_blog',[CreateBlogController::class,'create_blog']);
Route::get('/gallery',[IndexController::class,'gallery']);

