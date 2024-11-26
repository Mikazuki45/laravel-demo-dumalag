<?php

   namespace App\Http\Middleware;

   use Closure;
   use Illuminate\Http\Request;

   class IsAdmin
   {
       public function handle(Request $request, Closure $next)
       {
           // Check if the user is logged in and has the 'admin' role
           if (auth()->check() && auth()->user()->role === 'admin') {
               return $next($request); // Allow the request to proceed
           }

           // Redirect if the user is not an admin
           return redirect('/home')->with('error', 'You are not authorized to access this page.');
       }
   }
