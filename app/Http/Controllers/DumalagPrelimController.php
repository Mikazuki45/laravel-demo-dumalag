<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DumalagPrelimController extends Controller
{
    function main(){return view('Prelim-Dumalag.main');}
    function addition(){return view('Prelim-Dumalag.addition');}
    function subtraction(){return view('Prelim-Dumalag.subtraction');}
    function multiplication(){return view('Prelim-Dumalag.multiplication');}
    function division(){return view('Prelim-Dumalag.division');}

    public function calculateaddition(Request $request)
{
    $num1 = $request->input('num1');
    $num2 = $request->input('num2');
    $result =$num1 + $num2;  
    return view('Prelim-Dumalag.addition', ['result' => $result]);
}

public function calculatesubtraction(Request $request)
{
    $num1 = $request->input('num1');
    $num2 = $request->input('num2');
    $result =$num1 - $num2;
    return view('Prelim-Dumalag.subtraction', ['result' => $result]);
}
public function calculatemultiplication(Request $request)
{
    $num1 = $request->input('num1');
    $num2 = $request->input('num2');
    $result =$num1 * $num2;
    return view('Prelim-Dumalag.multiplication', ['result' => $result]);
}
public function calculatedivision(Request $request)
{
    $num1 = $request->input('num1');
    $num2 = $request->input('num2');
    $result = null;
   if ($num2 <= 0)
    {
        $result = "Cannot divide by zero";
    }
    else
    {    
        $result =$num1 / $num2;
    }
    return view('Prelim-Dumalag.division', ['result' => $result]);
}
}