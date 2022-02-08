<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;

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
Route::get('/about', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/menu', [HomeController::class, 'menu'])->name('menu');
Route::get('/location', [HomeController::class, 'location'])->name('location');

Route::get('/pesan', [MenuController::class, 'index'])->name('pesan');

// Route::get('/test', [MenuController::class, 'whatsappNotification'])->name('send');