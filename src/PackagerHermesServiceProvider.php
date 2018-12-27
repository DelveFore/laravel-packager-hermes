<?php

namespace DelveFore\PackagerHermes;

use Illuminate\Support\ServiceProvider;

class PackagerHermesServiceProvider extends ServiceProvider
{
    /**
     * Console commands
     */
    protected $commands = [
        'DelveFore\PackagerHermes\Commands\MakeController'
    ];

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/packagerhermes.php', 'packagerhermes');

        // Register the service the package provides.
        $this->app->singleton('packagerhermes', function ($app) {
            return new PackagerHermes;
        });

        // Register commands for Artisan interface.
        $this->commands($this->commands);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['packagerhermes'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/packagerhermes.php' => config_path('packagerhermes.php'),
        ], 'packagerhermes.config');

        // Registering package commands.
        $this->commands($this->commands);
    }
}
