<?php

namespace App\Http\Middleware;

use Closure;
use AUth;
class IfAdmin
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

        if((Auth::check() && Auth::User()->level == 2)){

            return $next($request);
        }
        return redirect('/');
    }
}
