<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth as User;

class Auth
{
    public function handle($request, Closure $next, $guard = null)
    {
        if (!User::guard($guard)->check()) {

            return redirect('login')->with('error','vous n\'etes pas authentifié');
        }

        return $next($request);
    }
}
