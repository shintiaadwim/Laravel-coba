<?php

use App\Http\Controllers\ProductController;
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

Route::view('/tes', 'pages.tes');
Route::view('/home', 'pages.home');


// Kalau bingung ini apa lihat lagi cara fajar
Route::controller(ProductController::class)->group(function () {
    Route::get('/products', 'index')
        ->name('products');
});
