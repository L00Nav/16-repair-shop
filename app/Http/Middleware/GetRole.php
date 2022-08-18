<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class GetRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $userRole = $request->user()?->role ?? 0;

        if($userRole == 1)
        {
            return redirect('user');
        }
        if($userRole == 10)
        {
            return redirect('admin');
        }

        return $next($request);
    }
}
