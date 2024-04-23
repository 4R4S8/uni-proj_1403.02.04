<?php

use App\Http\Controllers\SquareController;


Route::get('/', function () {
    return view('welcome');
    // routes/web.php
});

Route::get('/calculate-square', [SquareController::class, 'showForm']);

Route::post('/calculate-square', [SquareController::class, 'calculateSquare']);