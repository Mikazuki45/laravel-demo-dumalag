<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {

        $middleware->append(\App\Http\Middleware\PreventBackOptionAfterLogoutMiddleware::class,);

        $middleware->alias([
            'login.middleware' => \App\Http\Middleware\validateLogin::class,
            'role' => \App\Http\Middleware\validateLogin::class,
        ]);
        //register middleware using aliases name
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
