<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RevisorMiddleware
{

    public function handle($request, Closure $next)
    {
        if (Auth::user() && Auth::user()->is_revisor) {
            return $next($request);
        }

        return redirect('/')->with('access.danied.revisor.only', 'access.danied');
    }
}
