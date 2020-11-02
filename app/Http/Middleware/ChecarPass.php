<?php

namespace App\Http\Middleware;

use Closure;

class ChecarPass
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
        if ($request->Sex == "F") {
            return abort(400);
        }
        return $next($request);
    }
}
