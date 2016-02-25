<?php

namespace App\Http\Middleware;

use Closure;

class PubMiddleware
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
        if(!$request->session()->has('pub')){
            $request->session()->put('pub', true);
            return redirect('/pub');
        }

        return $next($request);
    }
}
