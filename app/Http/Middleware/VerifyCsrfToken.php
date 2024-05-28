<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'login', // Ruta para el formulario de login
        'logout', // Ruta para el logout
        'admin', // Ruta para el dashboard del administrador
        'cajero', // Ruta para el dashboard del cajero
        // Añade aquí cualquier otra ruta que necesite excluirse de la verificación CSRF
    ];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->isReading($request) ||
            $this->runningUnitTests() ||
            $this->inExceptArray($request) ||
            $this->tokensMatch($request)) {
            return $next($request);
        }

        return $this->addCookieToResponse($request, $this->tokenMismatchResponse($request));
    }
}
