<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Checker
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $roles)
    {
        dd($roles);
        return $next($request);
    }
}
