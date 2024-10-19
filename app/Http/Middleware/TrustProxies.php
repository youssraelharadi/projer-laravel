<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Closure;

class TrustProxies
{
    protected $proxies;

    public function __construct()
    {
        $this->proxies = '*'; // Accepte toutes les requêtes (ajustez selon vos besoins)
    }

    public function handle(Request $request, Closure $next)
    {
        // Vous pouvez ajouter une logique supplémentaire ici si nécessaire

        return $next($request);
    }
}
