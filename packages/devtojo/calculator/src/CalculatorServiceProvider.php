<?php

namespace Devtojo\Calculator;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return vpopmail_del_domain(domain)
     */
    public function register()
    {
        // register our controller
        $this->app->make('Devtojo\Calculator\CalculatorController');
        $this->loadViewsFrom(__DIR__.'/views', 'calculator');

        $this->mergeConfigFrom(
            __DIR__.'/config.php',
            'config'
        );
        
        /*$this->publishes([
            __DIR__.'/path/to/config/courier.php' => config_path('courier.php'),
        ]);*/
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
        $this->loadMigrationsFrom(__DIR__.'/migrations');

        $this->publishes([
            __DIR__.'/config.php' => config_path('config.php'),
        ]);
        //View::addNamespace('package', __DIR__.'/path/to/views');
        
    }
}
