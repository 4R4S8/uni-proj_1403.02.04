<?php
// app/Http/Controllers/CalculatorController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function showCalculator(){
        return view('calculate-numbers');
    }
    public function calculate(Request $request)
    {
        $number1 = $request->input('number1');
        $number2 = $request->input('number2');
        $operator = $request->input('operator'); // 'add', 'subtract', 'multiply', or 'divide'

        switch ($operator) {
            case 'add':
                $result = $number1 + $number2;
                break;
            case 'subtract':
                $result = $number1 - $number2;
                break;
            case 'multiply':
                $result = $number1 * $number2;
                break;
            case 'divide':
                $result = $number1 / $number2;
                break;
            default:
                $result = 'Invalid operator';
        }

        return view('result', ['result' => $result]);
    }
}
