<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdmin
{
    // /**
    //  * Handle an incoming request.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \Closure  $next
    //  * @return mixed
    //  */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        if($user == "Admin"){
            return redirect('dashboard');
        }
        return $next($request);
    }
}
