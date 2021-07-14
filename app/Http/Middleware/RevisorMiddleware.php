<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RevisorMiddleware
{

    public function handle(Request $request, Closure $next)
    {
        if (Auth::user() && Auth::user()->is_revisor) {
            return $next($request);
        }

        return redirect('/')->whit('access.danied.revisor.only', 'access.danied');
    }
}
