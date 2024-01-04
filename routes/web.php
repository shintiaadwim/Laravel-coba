<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::view('/tes', 'pages.tes')
    ->name('tes');
Route::view('/home', 'pages.home')
    ->name('home');


Route::controller(ProductController::class)->group(function () {
    Route::get('/products', 'index')
        ->name('products');
});

Route::controller(TransactionController::class)->group(function () {
    Route::get('/transaction', 'index')
        ->name('transaction');
});

Route::controller(UserController::class)->group(function () {
    Route::get('/users', 'index')
        ->name('users');
});
