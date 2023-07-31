<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Category\CategoryController;


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
    Route::prefix('shops/{code}')->group(function () {
        Route::get('/category', [CategoryController::class, 'index'])->name('categories');

        Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');

        Route::post('/create', [CategoryController::class, 'store'])->name('categories.store');

        Route::get('category/edit/{categoryId}', [CategoryController::class, 'show'])->name('categories.show');

        Route::post('category/edit/{categoryId}', [CategoryController::class, 'update'])->name('categories.update');

        Route::get('/delete/{slug}', [CategoryController::class, 'remove'])->name('categories.remove');
    });
});