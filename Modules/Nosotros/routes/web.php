<?php

use Illuminate\Support\Facades\Route;
use Modules\Nosotros\Http\Controllers\NosotrosController;


Route::get('/nosotros', [NosotrosController::class, 'index'])->name('nosotros');
