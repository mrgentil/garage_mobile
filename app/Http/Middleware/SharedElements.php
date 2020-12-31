<?php

namespace App\Http\Middleware;

use Closure;
use App\Service;

class SharedElements
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
        \View::share('all_services', Service::query()->get());
        return $next($request);
    }
}
