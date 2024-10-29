<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class discountController extends Controller
{
    
    public function showAmount() {
        return view('Midterm.dumalag_midterm', [
            'result' => null
        ]);
    }
    
    public function calculateTotal(request $request){
        $validateData = $request->validate([
            'inputPrice' => 'required|numeric',
        ]);

        $scbutt = $validateData['scbutt'];
        $stbutt = $validateData['stbutt'];
        $scbutt = 0.50;
        $stbutt = 0.25;

        $num1 = $validateData['inputPrice'];
        $result = $num1 * $scbutt;

        return view('Midterm.dumalag_midterm', [
            'result' => $result
        ]);
    }

    // public function showAmount() {
    //     return view('Midterm.dumalag_midterm', [
    //         'result' => null
    //     ]);
    // }
    
    // public function calculateTotal(request $request){
    //     $validateData = $request->validate([
    //         'inputPrice' => 'required|numeric',
    //     ]);

    //     $num1 = $validateData['inputPrice'];
    //     $result = $num1 * 0.5;

    //     return view('Midterm.dumalag_midterm', [
    //         'result' => $result
    //     ]);
    // }
}