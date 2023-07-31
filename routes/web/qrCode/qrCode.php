<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Web\QrCode\QrCodeController;

Route::middleware(['auth'])->group(function () {
    Route::prefix('tao-ma-qr')->group(function () {
        Route::get('/', [QrCodeController::class, 'index'])->name('qr-codes.create');

        Route::get('/{slug}', [QrCodeController::class, 'index'])->name('qr-codes.category');

        Route::get('/sua-ma-qr/{id}', [QrCodeController::class, 'show']);
    });
});

