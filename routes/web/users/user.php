<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\User\UserController;

Route::get('/login', [UserController::class, 'signIn'])->name('sign_in');

Route::post('dang-nhap', [UserController::class, 'show'])->name('sign_in.show');

Route::get('auth/google', [\App\Http\Controllers\Web\User\GoogleAuthController::class, 'redirect'])->name('sign_in.google_auth');

Route::get('auth/google/call-back', [\App\Http\Controllers\Web\User\GoogleAuthController::class, 'callbackGoogle']);

Route::get('register', [UserController::class, 'signUp'])->name('sign_up');

Route::post('dang-ki', [UserController::class, 'store'])->name('sign_up.store');

Route::get('dang-xuat', [UserController::class, 'logout'])->name('logout');


