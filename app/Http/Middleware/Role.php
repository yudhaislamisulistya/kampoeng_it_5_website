<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Role
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
        $data = \App\User::find(Auth::id());
        if ($data['role'] == "1") {
            return redirect()->route('admin_dashboard');
        }
        return $next($request);
    }
}
