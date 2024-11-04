<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;
use Illuminate\Routing\Middleware\SubstituteBindings;

class Kernel extends HttpKernel
{
    protected $middlewareGroups = [
        'web' => [
            // Middlewares para la web
        ],

        'api' => [
            \App\Http\Middleware\CorsMiddleware::class, // Tu Middleware de CORS
            'throttle:api',
            SubstituteBindings::class,
        ],
    ];
}
