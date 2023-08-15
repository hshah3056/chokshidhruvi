<?php

namespace App\Http\Middleware\Admin;

use Closure;
use Illuminate\Http\Request;

class auth
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
        if(!\Session::has('admin'))
            return redirect()->route('admin-login')->with(['error' => 'Session has been Expire, Login Again']);

        return $next($request);
    }
}
