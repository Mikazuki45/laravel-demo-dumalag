<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function showCalculatorPage()
    {
        return view('MyPages.calculator');
    }
}
