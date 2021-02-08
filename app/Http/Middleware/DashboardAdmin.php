<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class DashboardAdmin
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
            return redirect('/');
        }
        
        // check if the user is Admin or Auditor to be able to control the dashboard
       if(Auth::user()->role_id<3){ //if user is admin
           
       // 
       return $next($request);
     
     
        }

        return redirect('/');
    }
   
}
