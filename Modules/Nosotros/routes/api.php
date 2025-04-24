<?php

use Illuminate\Support\Facades\Route;
use Modules\Nosotros\Http\Controllers\NosotrosController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('nosotros', NosotrosController::class)->names('nosotros');
});
