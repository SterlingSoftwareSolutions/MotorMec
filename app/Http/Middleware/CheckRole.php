<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, string $role)
    {
        if($role == 'admin' && !(auth()->user()->role == 'admin' || auth()->user()->role == 'superadmin')){
            abort(403);
        }

        if($role == 'client' && auth()->user()->role != 'client'){
            abort(403);
        }

        return $next($request);
    }
}
