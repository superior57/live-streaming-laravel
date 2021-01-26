<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\User;

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
        session_start();
        if (auth()->check()) {
            if (auth()->user()->UR_CODE == 1) {
                $user = User::find(auth()->user()->id);
                $user->last_session = \Session::getId();
                $user->save();
                return $next($request);
            } else {
                return redirect(route('admin_home'));
            }
        } else {
            return redirect(route('admin_home'));
        }
    }
}
