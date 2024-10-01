<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\DumalagPrelimController;
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

// Route::get('/middleware', function (){
//     return view('MyMiddlewareDemo.login');
// });

//middlware
Route::get('/showLogin', function()
{
    return view("MyMiddlewareDemo.login");
})->name('login_Form');

Route::post('/showLogin', function()
{
    return view("MyMiddlewareDemo.login");
})->middleware('login.middleware');

Route::get('/show/dashboard', function()
{
    return view("MyMiddlewareDemo.dashboard");
})->name('gotodashboard');



//index
Route::get('/main', [DumalagPrelimController::class, 'main'])->name('main');

//add
Route::get('/addition', [DumalagPrelimController::class, 'addition']);
Route::post('/calculateaddition', [DumalagPrelimController::class, 'calculateAddition'])->name('calculate.addition');

//sub
Route::get('/subtraction', [DumalagPrelimController::class, 'subtraction']);
Route::post('/calculatesubtraction', [DumalagPrelimController::class, 'calculatesubtraction'])->name('calculate.subtraction');

//multiplication
Route::get('/multiplication', [DumalagPrelimController::class, 'multiplication']);
Route::post('/calculatemultiplication', [DumalagPrelimController::class, 'calculatemultiplication'])->name('calculate.multiplication');

//divide
Route::get('/division', [DumalagPrelimController::class, 'division']);
Route::post('/calculatedivision', [DumalagPrelimController::class, 'calculatedivision'])->name('calculate.division');




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
Route::post('/calculate', [CalculatorController::class, 'calculate'])->name('callcalculate');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';