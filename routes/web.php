<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AdminController;

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
Route::get('/menu/{category:id}', [HomeController::class, 'menuDetail']);
Route::get('/bio', [HomeController::class, 'bio'])->name('bio');

//CART
Route::post('/addCart', [MenuController::class, 'addCart'])->name('addCart');
Route::post('/updateCart', [MenuController::class, 'updateCart'])->name('updateCart');
Route::get('/deleteCart/{cart:id}', [MenuController::class, 'deleteCart'])->name('deleteCart');
Route::post('/orderWA/{cart:User_token}', [MenuController::class, 'orderWA'])->name('orderWA');

//ADMIN
Route::get('/loginAdmin', [AdminController::class, 'index'])->name('loginAdmin')->middleware('guest');
Route::post('/loginAdmin', [AdminController::class, 'login']);
Route::post('/logoutAdmin', [AdminController::class, 'logout']);

//Halaman utama admin
Route::get('/dashboardAdmin', [AdminController::class, 'dashboard'])->middleware('auth');
Route::get('/dataCategory', [AdminController::class, 'dataCategory'])->middleware('auth');
Route::get('/addMenu', [AdminController::class, 'addMenu'])->middleware('auth');
Route::post('/addMenu', [AdminController::class, 'addDataMenu'])->middleware('auth');
Route::get('/addCategory', [AdminController::class, 'addCategory'])->middleware('auth');
Route::post('/addCategory', [AdminController::class, 'addDataCategory'])->middleware('auth');
Route::post('/updateMenu/{menu:id}', [AdminController::class, 'updateMenu'])->middleware('auth');
Route::post('/deleteMenu/{menu:id}', [AdminController::class, 'deleteMenu'])->middleware('auth');
Route::post('/updateCategory/{category:id}', [AdminController::class, 'updateCategory'])->middleware('auth');
Route::post('/deleteCategory/{category:id}', [AdminController::class, 'deleteCategory'])->middleware('auth');

//Recruitment Setting Admin
Route::get('/menuSetting', [AdminController::class, 'setting'])->middleware('auth');
Route::get('/changeStatus', [AdminController::class, 'changeStatus'])->middleware('auth');
