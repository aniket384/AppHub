<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class SuperAdmin
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
        if(!Auth::check()){
            return redirect()->route('login');
        }

        // Role 1 = Super Admin
        if(Auth::user()->role_id == 1){
            return $next($request);
        }

        // Role 2 = Admin
        if(Auth::user()->role_id=2){
            return route('admin');
        }
    }
}
