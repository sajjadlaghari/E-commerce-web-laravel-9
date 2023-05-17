<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/jewellery', [HomeController::class, 'jewellery'])->name('jewellery');
Route::get('/fashion', [HomeController::class, 'fashion'])->name('fashion');
Route::get('/electronics', [HomeController::class, 'electronics'])->name('electronics');