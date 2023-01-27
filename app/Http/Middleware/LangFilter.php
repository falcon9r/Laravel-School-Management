<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LangFilter
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
        // Checks for lang in the parameters.
        if($request->input('locale') == null) {
            // Adds the default one since it doesn't have one.
            $request->merge(array('locale' => app()->getLocale()));
        }
        $request->request->add(['locale' => 'en']);

        return $next($request);
    }
}
