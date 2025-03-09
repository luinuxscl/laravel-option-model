<?php

namespace Luinuxscl\OptionPackage\Providers;

use Illuminate\Support\ServiceProvider;

class OptionServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/option.php', 'option');
    }

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
        $this->publishes([
            __DIR__ . '/../../config/option.php' => config_path('option.php'),
        ], 'option-config');
    }
}
