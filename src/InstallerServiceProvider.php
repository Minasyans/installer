<?php

namespace Minasyans\Installer;

use Illuminate\Support\ServiceProvider;
use Minasyans\Installer\Middleware\CanInstall;
use Minasyans\Installer\Middleware\CanUpdate;
use Minasyans\Installer\Middleware\CheckPermissions;
use Minasyans\Installer\Middleware\CheckRequirements;

class InstallerServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
         $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'installer');
         $this->loadViewsFrom(__DIR__.'/../resources/views', 'installer');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
         $this->loadRoutesFrom(__DIR__.'/routes.php');

         $this->app['router']->aliasMiddleware('install', CanInstall::class);
         $this->app['router']->aliasMiddleware('update', CanUpdate::class);
         $this->app['router']->aliasMiddleware('checkRequirements', CheckRequirements::class);
         $this->app['router']->aliasMiddleware('checkPermissions', CheckPermissions::class);

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
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/installer.php', 'installer');

        // Register the service the package provides.
        $this->app->singleton('installer', function ($app) {
            return new Installer;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['installer'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/installer.php' => config_path('installer.php'),
        ], 'installer.config');

        // Publishing the views.
        $this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/installer'),
        ], 'installer.views');

        // Publishing assets.
        $this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/installer'),
        ], 'installer.views');

        // Publishing the translation files.
        $this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/installer'),
        ], 'installer.views');

        // Registering package commands.
        // $this->commands([]);
    }
}
