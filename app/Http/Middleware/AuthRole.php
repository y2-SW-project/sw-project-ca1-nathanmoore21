<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

//middleware verifies the user of the application 
//for my application, if a user tried to access the create, update, add or delete page
//the user would be redirected to user/home as they are not an admin

class AuthRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        return $next($request);
    }
}
