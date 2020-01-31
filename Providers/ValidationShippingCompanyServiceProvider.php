<?php

namespace Modules\ValidationShippingCompany\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;

class ValidationShippingCompanyServiceProvider extends ServiceProvider
{
    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerConfig();
        //$this->loadMigrationsFrom(module_path('ValidationShippingCompany', 'Database/Migrations'));
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            __DIR__.'/../Config/config.php' => config_path('validationshippingcompany.php'),
        ], 'config');
        $this->mergeConfigFrom(
            __DIR__.'/../Config/config.php', 'validationshippingcompany'
        );

/*        $this->publishes([
            module_path('ValidationShippingCompany', 'Config/config.php') => config_path('validationshippingcompany.php'),
        ], 'config');
        $this->mergeConfigFrom(
            module_path('ValidationShippingCompany', 'Config/config.php'), 'validationshippingcompany'
        );*/
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
