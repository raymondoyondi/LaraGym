<?php

namespace App\Http\Middleware;


use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;

class UserAdmin
{
    public function handle(Request $request, \Closure $next)
    {
        $user = $request->user();

        if (!$user->is_admin) {
            throw new AuthorizationException("You are not allowed to access resource.");
        }

        return $next($request);
    }
}
