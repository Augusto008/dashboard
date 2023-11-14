<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;

class AddLangParameter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $lang = $request->segment(1);
        $idioms = ['en', 'pt'];

        if (!$lang || !in_array($lang, $idioms)) {
            $browserLanguages = $request->getLanguages();
            $userLang = substr($browserLanguages[0], 0, 2);

            $defaultLang = "";
            if(in_array($lang, $idioms)) {
                $defaultLang = config('app.default_locale', $lang);
            } else if(in_array($userLang, $idioms)) {
                $defaultLang = config('app.default_locale', $userLang);
            } else {
                $defaultLang = config('app.default_locale', 'en');
            };

            if ($request->segment(1) !== $defaultLang) {
                $segments = $request->segments();

                if (!$request->route('lang')) {
                    $segments[0] = $defaultLang;
                }

                $correctedUrl = "/$defaultLang" . $request->getPathInfo();

                return redirect($correctedUrl);
            }
        }

        return $next($request);
    }
}
