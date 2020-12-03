<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    //Custom middleware to prevent the user from going to the login page if the user is already in session
    public function handle(Request $request, Closure $next)
    {
        if($request->path()=='admin'&& $request->session()->has('admin'))
        {
            return redirect('admin/dashboard');
        }
        return $next($request);
    }
}
