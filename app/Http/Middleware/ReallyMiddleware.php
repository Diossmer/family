<?php

namespace App\Http\Middleware;

use Closure;

class ReallyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        echo "excelente!!!.";
        return $next($request);
    }
}
