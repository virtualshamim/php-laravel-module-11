<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\ProductController;

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

// Route::get('/', function () {
//     return view('dashboard');
// })->name('/');
Route::group([],function () {
    Route::get('/', [SalesController::class, 'salesReport'])->name('/');
    Route::get('/all-products', [ProductController::class, 'allProductList'])->name('all-products');
    Route::get('/new-product', [ProductController::class, 'newProduct'])->name('new-product');
    Route::post('/new-product', [ProductController::class, 'addNewProduct']);
    Route::post('/all-products', [ProductController::class, 'handleProductAction'])->name('product-action');
    Route::get('/get-product-details/{productId}', [ProductController::class, 'getProductDetails']);

});