<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Web\Library\LibraryController;


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
    Route::prefix('thu-vien-anh')->group(function () {
        Route::get('/', [LibraryController::class, 'index'])->name('libraries');

        Route::get('/{slug}', [LibraryController::class, 'index'])->name('libraries.category');
    });
});


