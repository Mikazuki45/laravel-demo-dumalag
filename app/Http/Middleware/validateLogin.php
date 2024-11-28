<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class validateLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->isMethod('Post'))
        {
            $validatedData = $request->only('username', 'password');
            
            $username = "admin";
            $password = "admin";

            // if($validatedData['username'] === $username && $validatedData['password'] === $password)
            // {
            //     // return redirect()->route('gotodashboard');
            //     // return redirect()->away('https://netflix.com');
                
            //     // return redirect()->route('gotodashboard')->with('confirm', 'LOGGED IN SUCCESSFULLY!');

            //     return response()->json(['Successfully Logged in']);
            // }
            // else
            // {
            //     return redirect()->back()->withErrors([$username => 'username or password is incorrect!']);
            // }
        }
        return $next($request);
    }
}