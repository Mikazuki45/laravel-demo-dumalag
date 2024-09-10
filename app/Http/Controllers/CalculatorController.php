<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function showCalculatorPage()
    {
        return view('MyPages.calculator',
        ['result' => null]);
    }

    public function calculate(Request $request){
    {
        // $request->validate([
        //     'number1' => 'required|numeric',
        //     'number2' => 'required|numeric'
        // ]);
        $validatedData = $request->validate([
            'number1' => 'required|numeric',
            'number2' => 'required|numeric'
        ]);

        $num1 = $validatedData['number1'];
        $num2 = $validatedData['number2'];

        // $num1 = $request->input('number1');
        // $num2 = $request->input('number2');

        // dd($num1+$num2);
        $result = $num1 + $num2;

        return view('MyPages.calculator', ['result' => $result]);
    }
    }
}
