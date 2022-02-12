<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CartController;

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

//Main Web
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
Route::get('/menu', [HomeController::class, 'menu'])->name('menu');
Route::get('/bio', [HomeController::class, 'bio'])->name('bio');

//CART
Route::post('/addCart', [MenuController::class, 'addCart'])->name('addCart');
Route::post('/updateCart', [MenuController::class, 'updateCart'])->name('updateCart');
Route::get('/deleteCart/{cart:id}', [MenuController::class, 'deleteCart'])->name('deleteCart');
Route::post('/orderWA/{cart:User_token}', [MenuController::class, 'orderWA'])->name('orderWA');

// Route::get('/test', [MenuController::class, 'whatsappNotification'])->name('send');