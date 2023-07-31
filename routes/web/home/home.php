<?php

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
Route::middleware(['auth'])->group(function () {
    Route::get('/', [App\Http\Controllers\Web\Home\HomeController::class, 'index'])->name('home');

    Route::get('/home2', [App\Http\Controllers\Web\Home\HomeController::class, 'index2'])->name('home2');
});
