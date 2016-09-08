<?php

namespace ArtisanCMS\CMS\Providers;

use Illuminate\Support\ServiceProvider;

class CMSServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/artisancms.php' => config_path('artisancms.php'),
        ], 'config');

        if (! $this->app->routesAreCached()) {
            require __DIR__.'/../routes.php';
        }

        require __DIR__ . '/../menu.php';

        $this->publishes([
            __DIR__ . '/../themes' => base_path()
        ], 'themes');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        require __DIR__ . '/../helpers.php';
    }
}
