<?php

use Illuminate\Support\Facades\Route;
use Modules\Analisis\Http\Controllers\AnalisisController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('analisis', AnalisisController::class)->names('analisis');
});
