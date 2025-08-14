<?php

use Illuminate\Support\Facades\Route;
use Modules\Tests\Http\Controllers\TestsController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('tests', TestsController::class)->names('tests');
});


Route::get('/pagina1', function () {
    return view("tests::pagina1");
});

Route::get('/tests', function () {
    return "Hola tests";
});

Route::get('/tests2', function () {
    return "Hola tests 2";
});