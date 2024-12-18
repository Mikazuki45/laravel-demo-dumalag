<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\DumalagPrelimController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CategoryController;


// FINAL 
Route::get('/', function () {
    return view('index');
})->name('login_form');;

Route::get('/signup', [LoginController::class, 'signup'])->name('signup_Form');

// Route::get('/main-dashboard', function () {
//     return view('newDashboard');
// })->name('main-dashboard');;

//END FINAL








Route::get('/dddasfagvs', function () {
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


// Route::get('/discount', function() {
//     return view('Midterm.dumalag_midterm');
// })->name('disccal');

Route::get('/new-calculator', [MyCalculatorController::class, 
    'showCalculator'
])->name('show');




//middleware role
Route::middleware(['auth'])->group(function () {

//admin routes
    Route::middleware(['role:admin'])->prefix('admin')->name('admin.')->group(function(){
        //route2
        Route::controller(EventController::class)->group(function(){
            Route::get('/main-dashboard', 'index')->name('main-dashboard');
            Route::post('/add_event','add_event')->name('add_event');
            Route::post('/update_event/{id}','update_event')->name('update_event');
        });
    });
    Route::controller(CategoryController::class)->group(function(){
        Route::get('/category', 'index')->name('category');
        Route::post('/add_category','add_category')->name('add_category');
    });

    









//registrar routes
    Route::middleware(['role:registrar'])->prefix('registrar')->name('registrar.')->group(function(){
        Route::get('/main-dashboard', function () {
            return view('newDashboard');
        })->name('main-dashboard');;
    });

//faculty routes
    Route::middleware(['role:faculty'])->prefix('faculty')->name('faculty.')->group(function(){
        Route::get('/main-dashboard', function () {
            return view('newDashboard');
        })->name('main-dashboard');;
    });
});





// Route for the messages index page
Route::middleware(['auth'])->get('/messages', [MessageController::class, 'index'])->name('messages.index');

// Route for viewing a specific message
Route::middleware(['auth'])->get('/messages/{message}', [MessageController::class, 'show'])->name('messages.show');



// protected $routeMiddleware = [
//     // Other middlewares...
//     'admin' => \App\Http\Middleware\IsAdmin::class,
// ];




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



Route::controller(MyCalculatorController::class)->group(function () {
    Route::get('new-calculator','showCalculator')->name('show');
    Route::post('new-calculator', 'calculateSum')->name('showCalculate');
});

Route::controller(discountController::class)->group(function () {
    Route::get('discount-app','showAmount')->name('show1');
    Route::post('discount-app', 'calculateTotal')->name('disccal');
});



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



//Default Dashboard
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';