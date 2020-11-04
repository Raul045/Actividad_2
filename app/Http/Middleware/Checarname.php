<?php

namespace App\Http\Middleware;

use Closure;

class Checarname
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
        $name = BD::table('users')->select('name')->where('id',$request->id)->get();
        if ($request->name == exist) {
            return abort(400);
        }
        return $next($request);
    }
}
