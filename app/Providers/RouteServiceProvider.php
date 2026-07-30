<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Ruta a la que se redirige tras el login.
     */
    public const HOME = '/dashboard';

    public function boot(): void
    {
        // Sin rate limiting por ahora para mantener el arranque simple en CI.
    }
}
