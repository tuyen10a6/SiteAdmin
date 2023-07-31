<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Web\Profile\ProfileController;


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
    Route::prefix('profile')->group(function () {
        Route::get('/{id}', [ProfileController::class, 'index'])->name('profile');

        Route::post('/{id}',[ProfileController::class, 'update'])->name('profile.update');
    });
});


