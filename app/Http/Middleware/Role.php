<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Role
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $previousRoute = app('router')->getRoutes()->match(app('request')->create(url()->previous()))->uri;

        if ($previousRoute == '/' && !in_array(auth()->user()->role, $roles)) {
            Auth::guard('web')->logout();
            return redirect(RouteServiceProvider::HOME);
        }

        abort_if(!in_array(auth()->user()->role, $roles), 404);

        return $next($request);
    }
}
