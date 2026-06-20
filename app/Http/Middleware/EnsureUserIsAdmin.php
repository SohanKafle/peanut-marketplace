<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // <--- This is crucial

class EnsureUserIsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        // Now it will recognize the Auth facade
        if (Auth::check() && Auth::user()->is_admin) {
            return $next($request);
        }

        return redirect('/');
    }
}