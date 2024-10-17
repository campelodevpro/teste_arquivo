<?php

use App\Http\Controllers\ArquivoController;
use Illuminate\Support\Facades\Route;

// routes/web.php
Route::get('/upload', function () {
    return view('upload');
})->name('upload');

Route::post('/upload', [ArquivoController::class, 'store']);