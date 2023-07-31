<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Shop\ShopConfigController;

Route::middleware(['auth'])->group(function () {
    Route::prefix('shops/{code}')->group(function () {
        Route::get('/', [ShopConfigController::class, 'show'])->name('shops.home.show');

        Route::post('/', [ShopConfigController::class, 'update'])->name('shops.home.update');

        Route::post('/chat-app', [ShopConfigController::class, 'updateChatApp'])->name('shops.home.updateChatApp');

        Route::get('/tiktok', [ShopConfigController::class, 'tiktok'])->name('shops.tiktok');

        Route::get('/ma-qr', [ShopConfigController::class, 'qrCode'])->name('shops.qr_codes');

        Route::get('/about',[ShopConfigController::class, 'about'])->name('shops.about');
    });

    Route::get('shops/create/home', [ShopConfigController::class, 'create'])->name('shops.create');

    Route::post('shops/create/home', [ShopConfigController::class, 'store'])->name('shops.store');
});
