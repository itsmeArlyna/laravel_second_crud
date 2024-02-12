<?php

use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('customer.about_us');
});

Route::get('/seller', function () {
    return view('seller.welcome_seller');
});

Route::get('/view', [ProductController::class, 'index'])->name('seller.view_products');
Route::get('/update', [ProductController::class, 'index'])->name('seller.update_products');
Route::get('/upload', [ProductController::class, 'create'])->name('seller.upload_products');
Route::post('/upload', [ProductController::class, 'store'])->name('upload_products.store');

Route::get('/product/{product}/edit', [ ProductController ::class, 'edit'])->name('seller.edit');
Route::put('/product/{product}/update', [ ProductController ::class, 'update'])->name('seller.edit_products');
Route::delete('product/{product}', [ProductController::class, 'destroy'])->name('seller.destroy');
Route::post('/search', [ProductController::class, 'search']);

Route::get('/order', [ProductController::class, 'index'])->name('customer.order_products');