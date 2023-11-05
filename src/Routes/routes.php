<?php

use Illuminate\Support\Facades\Route;
use Konnec\Debugging\Controllers\StreamController;
use Konnec\Debugging\Controllers\DashboardController;

Route::prefix(config('konnec-debugging.routes_prefix') . '/')->group(function () {
    Route::apiResource('messages', StreamController::class);
    Route::get('dashboard', [DashboardController::class, 'index']);
});
