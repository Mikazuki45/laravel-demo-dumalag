<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pajutacontroller
{
    function index(){
        return view('pajuta_prelim.index');
    }
  
    function addition(){
        return view('pajuta_prelim.addition');
    }
    function subtraction(){
        return view('pajuta_prelim.subtraction');
    }
    function multiplication(){
        return view('pajuta_prelim.multiplication');
    }
    function division(){
        return view('pajuta_prelim.division');
    }

    public function calculateDiscount(Request $request)
{
    $validatedData = $request->validate([
        'senior' => 'required_without:student',
        'student' => 'required_without:senior',
    ]);
    




    $num1 = $request->input('num1');
    $senior=$request->input('senior');
    $student=$request->input('student');
    if(isset($senior)){
        $criteria="senior";
        $result =$num1*0.5;  
    }else{
        $result =$num1*0.8;  
        $criteria="student";
    }
   

    return view('dashboarddiscount', ['result' => $result,'num1'=>$num1,'senior'=>$criteria]);
}



public function calculatesubtraction(Request $request)
{
    $num1 = $request->input('num1');
    $num2 = $request->input('num2');

    $result =$num1 - $num2;



    return view('pajuta_prelim.subtraction', ['result' => $result]);
}
public function calculatemultiplication(Request $request)
{
    $num1 = $request->input('num1');
    $num2 = $request->input('num2');

    
    $result =$num1 * $num2;
    return view('pajuta_prelim.multiplication', ['result' => $result]);
}


public function calculatedivision(Request $request)
{
    $num1 = $request->input('num1');
    $num2 = $request->input('num2');
    
   if ($num2 <= 0) {
        $result = "Cannot divide by zero";
    } else {
         
           $result ="QUOTIENT:".$num1 / $num2;
    }

    return view('pajuta_prelim.division', ['result' => $result]);
}
}
