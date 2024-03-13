<?php

namespace Fsi\Collabo;

use Illuminate\Support\ServiceProvider;
use Fsi\Collabo\Facades\CollaboFacade;

class CollaboServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        
       // Publish the configuration file
        $this->publishes([
            __DIR__ . '/config/collabo.php' => config_path('collabo.php'),
        ], 'config');

        // Optionally, merge the published configuration with the package's default configuration
        $this->mergeConfigFrom(
            __DIR__ . '/config/collabo.php', 'collabo'
        );

    }

    public function register()
    {

        $this->app->singleton('collabo', function () {
            return new Collabo();
        });
    }

   
}