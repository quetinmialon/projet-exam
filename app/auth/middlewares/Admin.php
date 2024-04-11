<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->admin) {
            return $next($request);
        }

        return redirect('/')->with('error', 'Vous n\'êtes pas autorisé à accéder à cette page.');
    }
}

