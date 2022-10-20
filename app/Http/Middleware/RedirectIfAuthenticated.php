<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                if(auth()->user()->role == 'Proveedor'){
                   return redirect(RouteServiceProvider::HOME); 
                }
                else if(auth()->user()->role == 'Comprador'){
                    return redirect(RouteServiceProvider::HOMECOMPRADOR); 
                 }
                
            }
        }

        return $next($request);
    }
}
