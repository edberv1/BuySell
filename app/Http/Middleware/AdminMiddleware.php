<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

     
     public function handle(Request $request, Closure $next)
    {
        if (!auth()->check() || !$this->isAdmin()) {
            return redirect('/home')->with('error', 'You do not have permission to access this page.');
        }

        return $next($request);
    }

    private function isAdmin()
    {
        // Replace this logic with your own implementation
        return auth()->user()->roles === 'admin';
    }
   
}
