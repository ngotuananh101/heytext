<?php

namespace App\Http\Middleware;

use App\Models\Style;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SidebarData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if (!cache()->has('sidebarData')){
        //     cache()->put('sidebarData', [
        //         'styles' => Style::all(),
        //     ], 60);
        // }
        cache()->put('sidebarData', [
            'styles' => Style::all(),
        ], 60);
        return $next($request);
    }
}
