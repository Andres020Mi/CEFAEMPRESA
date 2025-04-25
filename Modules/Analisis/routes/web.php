<?php

use Illuminate\Support\Facades\Route;
use Modules\Analisis\Http\Controllers\AnalisisController;




Route::get('/analisis', [AnalisisController::class,"index"])->name('analisis.index');