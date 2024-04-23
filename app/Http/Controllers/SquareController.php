<?php
// app/Http/Controllers/SquareController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SquareController extends Controller
{
    public function showForm()
    {
        return view('calculate_square');
    }

    public function calculateSquare(Request $request)
    {
        $number = $request->input('number');
        $square = $number ** 2;

        return view('calculate_square', ['square' => $square]);
    }
}
