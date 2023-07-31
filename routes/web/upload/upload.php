<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Upload\UploadController;

Route::post('/upload', [UploadController::class, 'store'])->name('upload.store');

Route::get('/files/{fileId}', [
    \App\Http\Controllers\Web\File\FileController::class,
    'index'
])->name("file.show");

Route::get('/files/{fileId}/draft', [
    \App\Http\Controllers\Web\File\FileController::class,
    'draft'
])->name("file.draft.show");