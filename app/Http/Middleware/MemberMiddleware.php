<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MemberMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if(!auth()->check() || !auth()->user()->isAdmin){
        //     abort(403);
        // }
            if(Auth::user()->role != 'admin' && Auth::user()->role != 'member'){
                return redirect('/dashboard');
            }else{
                return $next($request);
        }
    }
}
