<?php

namespace Akshay\Activable;

use Illuminate\Support\ServiceProvider;

class ActivableProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishConfigs();
        $this->loadMigrations();
        $this->publishAssets();
        $this->loadViews();
        $this->publishViews();
        $this->loadRoutes();
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function loadRoutes()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }

    public function publishConfigs()
    {
        $this->publishes([
            __DIR__.'/config/activable.php' => config_path('activable.php'),
        ]);
    }

    public function loadMigrations()
    {
        $this->loadMigrationsFrom(__DIR__.'/migrations');
    }

    public function loadViews()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'activable');
    }

    public function publishViews()
    {
        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/activable'),
        ]);
    }

    public function publishAssets()
    {
        $this->publishes([
            __DIR__.'/assets' => public_path('vendor/activable'),
        ], 'public');
    }
}
