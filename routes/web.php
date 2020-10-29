<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransaksiController;

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

Route::get('/', [HomeController::class, 'index'])->name('welcome');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/admin/add', [ItemsController::class, 'store'])->name('add_item');
Route::get('/user/cart', [TransaksiController::class, 'index'])->name('user.cart');
Route::get('/user/buys/{id}', [TransaksiController::class, 'buys'])->name('user.buy');
Route::get('/user/cancel/{id}', [TransaksiController::class, 'destroy'])->name('user.cancel');
