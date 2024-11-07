<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{

    public function showCalculatorPage()
    {
        return view('prelim.indexoperator',[
            'result'=> null
        ]);
    }  

    public function operator()
    {
        return view('prelim.operator',[
            'result'=> null
        ]);
    }  

    public function showadd()
    {
        return view('prelim.addition',[
            'result'=> null
        ]);
    }  

    public function create()
    {
        return view('auth.register');
    }
    
    public function signup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
    
        auth()->login($user);
    
        return redirect()->route('showlogin');
    }







    public function showsub()
    {
        return view('prelim.subtraction',[
            'result'=> null
        ]);
    } 
    
    public function showmul()
    {
        return view('prelim.multiplication',[
            'result'=> null
        ]);
    }  

    public function showdiv()
    {
        return view('prelim.Division',[
            'result'=> null
        ]);
    }  

    public function addition(Request $request)
    {
        $validated =$request->validate([
                'number1'=>'required|numeric',
                'number2'=>'required|numeric'
            ]);
            $num1 = $validated['number1'];
            $num2 = $validated['number2'];
            
       $result = $num1 + $num2;

       return view('prelim.addition',[
        'result' => $result
       ]);
    }
        
    public function subtraction(Request $request)
    {
        $validated =$request->validate([
                'number1'=>'required|numeric',
                'number2'=>'required|numeric'
            ]);
            $num1 = $validated['number1'];
            $num2 = $validated['number2'];
            
       $result = $num1 - $num2;

       return view('prelim.subtraction',[
        'result' => $result
       ]);
    }

    

    public function multiplication(Request $request)
    {
        $validated =$request->validate([
                'number1'=>'required|numeric',
                'number2'=>'required|numeric'
            ]);
            $num1 = $validated['number1'];
            $num2 = $validated['number2'];
            
       $result = $num1 * $num2;

       return view('prelim.multiplication',[
        'result' => $result
       ]);
    }

    
    public function Division(Request $request)
    {
        $validated =$request->validate([
                'number1'=>'required|numeric',
                'number2'=>'required|numeric'
            ]);
            $num1 = $validated['number1'];
            $num2 = $validated['number2'];

            if ($num2 ==0){
                return view('prelim.ivision',['result'=> 'Error Cannot Divide be Zero']);
            }
            
       $result = $num1 / $num2;

       return view('prelim.Division',[
        'result' => $result
       ]);
    }
    

}
