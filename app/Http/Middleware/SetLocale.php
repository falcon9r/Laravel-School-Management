<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        app()->setLocale($request->query->get('locale', session('locale', config('app.locale'))));

        session(['locale' => app()->getLocale()]);

        return $next($request);
    }
}
