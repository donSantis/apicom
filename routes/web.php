<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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
Route::get('/', [ProductController::class, 'index2'])->name('index2');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('save-product', [ProductController::class, 'save'])->name('save-product');

Route::resource('categories', App\Http\Controllers\CategoryController::class);

Route::get('show-product/{id}', [App\Http\Controllers\ProductController::class, 'showProduct'])->name('show.product');
Route::resource('roles', App\Http\Controllers\RoleController::class);
Route::get('/product/image/{filename}', [ProductController::class, 'getImageProduct'])->name('product.image');



Route::resource('sizes', App\Http\Controllers\SizeController::class);


Route::resource('cities', App\Http\Controllers\CityController::class);


Route::resource('colors', App\Http\Controllers\ColorController::class);


Route::resource('products', App\Http\Controllers\ProductController::class);


Route::resource('subscriptions', App\Http\Controllers\SubscriptionController::class);


Route::resource('users', App\Http\Controllers\UsersController::class);


Route::resource('brands', App\Http\Controllers\BrandController::class);

Route::resource('cart', App\Http\Controllers\CartController::class);

Route::post('/cart/agregar', 'CartController@agregar');

