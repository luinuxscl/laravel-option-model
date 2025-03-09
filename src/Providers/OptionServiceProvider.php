<?php

namespace Luinuxscl\OptionPackage\Providers;

use Illuminate\Support\ServiceProvider;

class OptionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // Registrar el archivo de configuración
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/option.php',
            'option'
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Publicar el archivo de configuración
        $this->publishes([
            __DIR__ . '/../../config/option.php' => config_path('option.php'),
        ], 'config');

        // Cargar migraciones si existen
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
    }
}
