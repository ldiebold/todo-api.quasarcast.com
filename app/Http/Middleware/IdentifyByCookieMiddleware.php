<?php

namespace App\Http\Middleware;

use Closure;
use Cookie;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class IdentifyByCookieMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->hasCookie('uuid')) {
            return $next($request);
        }

        $uuid = Str::uuid();
        $request->cookies->set('uuid', $uuid);
        $response = $next($request);
        return $response->withCookie(cookie()->forever('uuid', $uuid));
    }
}
