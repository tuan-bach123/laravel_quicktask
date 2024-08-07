<?php

namespace App\Http\Middleware;

use App;
use Session;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Session::get("lang")) {
            //echo"". Session::get("lang") ."";
            App::setLocale(Session::get("lang"));
        }

        return $next($request);
    }
}
