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

// user all
Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

// user
Route::post('/admin/add', [ItemsController::class, 'store'])->name('add_item')->middleware('isUser');
Route::get('/user/cart', [TransaksiController::class, 'index'])->name('user.cart')->middleware('isUser');
Route::get('/user/buys/{id}', [TransaksiController::class, 'buys'])->name('user.buy')->middleware('isUser');
Route::get('/user/cancel/{id}', [TransaksiController::class, 'destroy'])->name('user.cancel')->middleware('isUser');
Route::post('/user/store', [TransaksiController::class, 'store'])->name('user.beli')->middleware('isUser');
Route::get('/user/histori', [TransaksiController::class, 'show'])->name('user.histori')->middleware('isUser');
Route::get('/user/{id}/hapus', [TransaksiController::class, 'hapus'])->name('user.hapus')->middleware('isUser');

// admin
Route::get('/admin/pesanan', []);
Route::get('/admin/{id}/edit', [ItemsController::class, 'edit'])->name('admin.edit')->middleware('isAdmin');
Route::post('/admin/{id}/update', [ItemsController::class, 'update'])->name('admin.update')->middleware('isAdmin');
