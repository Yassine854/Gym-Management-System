<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsCoach
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
        if(Auth::guard('coach')->check()){
            return $next($request);
        }
        return redirect('/')->with('error',"You don't have coach access!");

    }


}
