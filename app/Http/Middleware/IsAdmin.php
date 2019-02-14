<?php

namespace App\Http\Middleware;
use Symfony\Component\HttpKernal\Exeception\HttpExeception;

use Closure;

class IsAdmin
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
        $user = $request->user();
        if($user) {
            if($user->is_admin == 1){
                return $next($request);
                
            } else {
                throw new HttpExeception('403');

               // return redirect()->route('home');
            }
        }
        
        
    }
}
