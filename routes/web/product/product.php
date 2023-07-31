<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Product\ProductController;
use App\Http\Controllers\Web\Product\TopProductController;

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

Route::middleware(['auth'])->group(function () {
    Route::prefix('shops/{code}/products')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('products');

        Route::get('/top-products', [TopProductController::class, 'index'])->name('products.featured_product');

        Route::post('/top-products', [TopProductController::class, 'store'])->name('shops.choice_featured_products');

        Route::get('/top-products/{id}/delete', [TopProductController::class, 'delete'])->name('shops.delete_hot_product');

        Route::get('/{slug}', [ProductController::class, 'getProductByCategory'])->name('products.category');

        Route::get('/{slug}/create', [ProductController::class, 'create'])->name('products.create');

        Route::post('/{slug}/store', [ProductController::class, 'store'])->name('products.store');

        Route::get('/{slug}/show', [ProductController::class, 'show'])->name('products.show');

        Route::post('/{slug}/update', [ProductController::class, 'update'])->name('products.update');

        Route::get('/{slug}/delete', [ProductController::class, 'delete'])->name('products.delete');
    });
});


