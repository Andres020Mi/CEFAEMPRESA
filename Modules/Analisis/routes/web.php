<?php

use Illuminate\Support\Facades\Route;
use Modules\Analisis\Http\Controllers\AnalisisController;



Route::resource('analisis', AnalisisController::class)->names('analisis');