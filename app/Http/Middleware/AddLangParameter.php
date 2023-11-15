<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;

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

            $routes = Route::getRoutes();
            $exist = "";

            foreach ($routes as $route) {
                $uriSegments = explode("/", $route->uri());
                
                if (in_array($lang, $uriSegments)) {
                    $exist = $route->uri();
                    break;
                }
            }

            if (!$exist) {
                return app()->handle(Request::create("/$defaultLang", $request->method()));
            }

            if ($request->segment(1) !== $defaultLang) {
                $segments = $request->segments();

                if (!$request->route('lang')) {
                    $segments[0] = $defaultLang;
                }

                if($exist) {
                    $routeWithoutLang = explode("{lang}", $exist);
                    $path = $routeWithoutLang[1];
                    $correctedUrl = "/$defaultLang" . $path;
                } else {
                    $correctedUrl = "/$defaultLang" . $request->getPathInfo();
                }

                return app()->handle(Request::create($correctedUrl, $request->method()));
            }
        }

        return $next($request);
    }
}
