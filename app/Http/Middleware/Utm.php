<?php

namespace App\Http\Middleware;

use Closure;

class Utm
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
        $step = 1;

        session()->put('step', $step);

        $utmQueryParams = [
            'utm_source',
            'utm_medium',
            'utm_campaign',
            'utm_term',
            'utm_content',
        ];
        foreach ($utmQueryParams as $utmQueryParam) {
            if ($request->has($utmQueryParam)) {
                session()->put($utmQueryParam, $request->input($utmQueryParam));
            } elseif ($request->session()->has($utmQueryParam)) {
                continue;
            }
        }

        return $next($request);
    }
}
