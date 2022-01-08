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
        if(!session('checked_utm')) {
            $utmMarks = $request->only([
                'utm_source',
                'utm_medium',
                'utm_campaign',
                'utm_term',
                'utm_content'
            ]);
            if (empty($utmMarks['utm_source'])) {
                $original_ref = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
                switch ($original_ref) {
                    case 'https://www.google.ru/':
                    case 'https://www.google.com/':
                        $utm_source = 'google';
                        break;
                    case 'https://yandex.ru/':
                        $utm_source = 'yandex';
                        break;
                    default:
                        $utm_source = '';
                }
                $utmMarks['utm_source'] = $utm_source;
            }
            if(empty($utmMarks['utm_campaign'])){
                $original_ref = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
                switch ($original_ref) {
                    case 'https://www.google.com/':
                    case 'https://www.google.ru/':
                    case 'https://yandex.ru/':
                        $utmMarks['utm_campaign'] = 'organic';
                        break;
                }
            }
            session(['utm_marks'=>json_encode($utmMarks)]);
            session(['checked_utm' => true]);
        }
        return $next($request);
    }
}
