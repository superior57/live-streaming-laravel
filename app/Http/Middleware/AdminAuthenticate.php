<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminAuthenticate
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
        if (auth()->check()) {
            if (auth()->user()->UR_CODE == 1) {
                return $next($request);
            } else {
                return redirect(route('admin_home'));
            }
        } else {
            return redirect(route('admin_home'));
        }
    }
}
