<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productcontroller;


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
Route::get('/homepage', [productcontroller::class, 'index']);
//Route::get('/homepage/{product}', [productcontroller::class, 'show'])->name('product.show');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
 return Inertia\Inertia::render('Dashboard');
})->name('dashboard');
Route::get('/add-to-cart/{product}', 'App\Http\Controllers\CartController@add')->name('cart.add')->middleware('auth');
Route::get('/cart', 'App\Http\Controllers\CartController@index')->name('cart.index')->middleware('auth');
Route::get('/cart/destroy/{itemId}', 'App\Http\Controllers\CartController@destroy')->name('cart.destroy')->middleware('auth');
Route::get('/cart/update/{itemId}', 'App\Http\Controllers\CartController@update')->name('cart.update')->middleware('auth');
Route::get('/cart/checkout', 'App\Http\Controllers\CartController@checkout')->name('cart.checkout')->middleware('auth');
//Route::resource('/orders',  'App\Http\Controllers\OrderController')->name('orders.store');
Route::get('/done', 'App\Http\Controllers\CartController@done')->name('cart.done');