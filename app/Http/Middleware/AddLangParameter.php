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

        // Se o lang não estiver definido ou não for válido, use o idioma do navegador
        if (!$lang || !in_array($lang, $idioms)) {
            $browserLanguages = $request->getLanguages();
            $userLang = substr($browserLanguages[0], 0, 2);

            // Use o idioma fornecido na URL se for válido, caso contrário, use o idioma do navegador
            $defaultLang = "";
            if(in_array($lang, $idioms)) {
                $defaultLang = config('app.default_locale', $lang);
            } else if(in_array($userLang, $idioms)) {
                $defaultLang = config('app.default_locale', $userLang);
            } else {
                $defaultLang = config('app.default_locale', 'en');
            };

            // Verificar se o segmento 1 já é o idioma padrão para evitar um loop
            if ($request->segment(1) !== $defaultLang) {
                // Obter os segmentos da URL
                $segments = $request->segments();

                // Alterar o primeiro segmento apenas se não houver um idioma fornecido na URL
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
