<?php
// app/Http/Controllers/SquareController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FactorialController extends Controller
{
    public function showForm()
    {
        return view('calculate_factorial');
    }
    function factorial($number) {
        $factorial = 1;
        for ($i = 1; $i <= $number; $i++) {
            $factorial *= $i;
        }
        return $factorial;
    }
    public function calculateFactorial(Request $request)
    {
        $number = $request->input('number');
        if ($number <= 1) {
            $factorial = 1;
        }
        else {
            $factorial = 1;
        for ($i = 1; $i <= $number; $i++) {
            $factorial *= $i;
        }
        }
        return view('calculate_factorial', ['factorial' => $factorial]);
    }
}
