<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            if ($request->user() && $request->user()->usertype == 'Admin') {
                return redirect('/users');
            }
            else if ($request->user() && $request->user()->usertype == 'Lecturer') {
                return redirect('/lecturer');
            }
            else if ($request->user() && $request->user()->usertype == 'Student') {
                return redirect('/student');
            }
            else {
                return redirect('/home');
            }
        }

        

        return $next($request);
    }
}
