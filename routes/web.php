<?php

use App\Http\Controllers\SquareController;

Route::get('/calculate-square', [SquareController::class, 'showForm']);

Route::post('/calculate-square', [SquareController::class, 'calculateSquare']);

use App\Http\Controllers\FactorialController;

Route::get('/calculate-factorial', [FactorialController::class, 'showForm']);

Route::post('/calculate-factorial', [FactorialController::class, 'calculateFactorial']);

use App\Http\Controllers\CalculatorController;

Route::get('/calculate-numbers', [CalculatorController::class, 'showCalculator']);

Route::post('/calculate-numbers', [CalculatorController::class, 'calculate']);