<?php

use Illuminate\Support\Facades\Route;
use Konnec\Debugging\Controllers\ViewController;
use Konnec\VueEloquentApi\Controllers\StoreController;

Route::prefix(config('eloquent-api.api_prefix') . '/debugging')->group(function () {
    Route::apiResource('messages', StoreController::class);
    Route::get('view', [ViewController::class, 'index']);
});
