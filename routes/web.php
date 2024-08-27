<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CalculatorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Curl', function (){
    return view('dumalag');
})->name('lahi ni');

Route::get('/Curl2', function (){
    return view('dumalag2');
})->name('ani ni');



Route::get('/Gallery', function (){
    return view('MyPages.gallery');
})->name('gallery');//route for gallery

Route::get('/Index', function () {
    return view('MyPages.index');
})->name('index');//route for index

Route::get('/Services', function () {
    return view('MyPages.services');
})->name('services');//route for services

Route::get('/Calculator', [CalculatorController::class, 'showCalculatorPage']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
