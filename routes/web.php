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
//
//Route::get('/',function (\App\Repositories\Products\ProductsRepositoriesinterface $productsRepositoriesinterface){
  //  return $productsRepositoriesinterface->getAll();
//});
Route::get('/',function (\App\Service\Products\ProductServicesInterface $productServices){
    return $productServices->getAll();
});
// Admin
Route::group(['namespace'=>'Admin'],function(){
    Route::prefix('Admin')->group(function(){
        Route::get('/','AdminController@index');
        Route::prefix('AuthAdmin')->group(function () {
            Route::get('/','AdminController@index')->name('AuthAdmin.index');
            Route::post('/','AdminController@Login')->name('AuthAdmin.Login');
        });

    });
});
