<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravelista\Ekko\Frameworks\Laravel\Facade as Ekko;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->isLocal()) {
            $this->app->register(\Laravel\Telescope\TelescopeServiceProvider::class);
            $this->app->register(\App\Providers\TelescopeServiceProvider::class);
        } else {
            $this->app->register(\Sentry\Laravel\ServiceProvider::class);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Ekko::enableGlobalHelpers();
    }
}
