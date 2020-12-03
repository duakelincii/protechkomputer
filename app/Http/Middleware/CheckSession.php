<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    //Custom user middleware used to check if a session is already made then the user can access any page that the user has authorization to it
    public function handle(Request $request, Closure $next)
    {
        if(!$request->session()->exists('admin'))
        {
            return redirect('/admin');
        }
        return $next($request);
    }
}
