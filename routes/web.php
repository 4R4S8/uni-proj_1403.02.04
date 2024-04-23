<?php

use App\Http\Controllers\SquareController;

Route::get('/calculate-square', [SquareController::class, 'showForm']);

Route::post('/calculate-square', [SquareController::class, 'calculateSquare']);

use App\Http\Controllers\FactorialController;

Route::get('/calculate-factorial', [FactorialController::class, 'showForm']);

Route::post('/calculate-factorial', [FactorialController::class, 'calculateFactorial']);