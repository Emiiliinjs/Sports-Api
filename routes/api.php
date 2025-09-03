<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::middleware('checkApiKey')->group(function () {
    Route::get('/products', [ProductController::class, 'index']);
});
