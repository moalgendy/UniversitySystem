<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Complain
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $usertype = ['admin','complain'];
            if(!in_array(auth()->user()->status,$usertype) ){
            return redirect()->route('dashboard');
        }
        return $next($request);
    }
}
