<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use auth; 
class AdminOnly
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
      
     if  (auth()->user()?->name != 'admin' && auth()->user()?->isowner!='1'){
            abort(Response::HTTP_FORBIDDEN);
        }
        return $next($request);
    }
}
