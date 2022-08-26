<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\authController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\UserController;
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
//Auth Admin
//get
Route::get('/Auth',[AuthController::class,'Auth']);
Route::post('/Auth-dashboard',[AuthController::class,'Login']);
Route::get('/Auth-logout',[AuthController::class,'Logout']);
//Admin
Route::get('/Admin',[UserController::class,'Admin']);
//User
Route::get('/',[UserController::class,'Customer']);
Route::get('/Home',[UserController::class,'Customer']);
//category
Route::get('/ListCategory',[categoryController::class,'listCategory']);

