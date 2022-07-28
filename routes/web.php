<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('roles', App\Http\Controllers\RoleController::class);


Route::resource('categories', App\Http\Controllers\CategoryController::class);


Route::resource('sizes', App\Http\Controllers\SizeController::class);


Route::resource('cities', App\Http\Controllers\CityController::class);


Route::resource('colors', App\Http\Controllers\ColorController::class);


Route::resource('products', App\Http\Controllers\ProductController::class);


Route::resource('subscriptions', App\Http\Controllers\SubscriptionController::class);


Route::resource('users', App\Http\Controllers\UsersController::class);
