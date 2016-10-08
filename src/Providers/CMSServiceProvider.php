<?php

namespace ArtisanCMS\CMS\Providers;

use View;
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
        View::addNamespace("theme", cms('theme'));

        require __DIR__ . '/../menu.php';

        $this->publishesConfig();

        $this->publishesRoutes();

        $this->publishesThemeFolder();

        $this->publishesAssets();
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

    public function publishesConfig()
    {
        $this->publishes([
            __DIR__.'/../config/artisancms.php' => config_path('artisancms.php'),
        ], 'config');
    }

    public function publishesRoutes()
    {
        if (! $this->app->routesAreCached()) {
            require __DIR__.'/../routes.php';
        }

        $this->publishes([
            __DIR__.'/../web.php' => base_path('routes/web.php')
        ], 'cms-routes');
    }

    public function publishesThemeFolder()
    {
        $this->publishes([
            __DIR__ . '/../themes' => base_path('themes')
        ], 'themes');
    }

    public function publishesAssets()
    {
        $this->publishes([
            __DIR__ . '/../public' => public_path()
        ], 'assets');
    }
}
