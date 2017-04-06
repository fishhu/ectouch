<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() == 'local') {
            // Model Generator Provider
            $this->app->register('Iber\Generator\ModelGeneratorProvider');
            // ApiDoc Generator Provider
            $this->app->register('Mpociot\ApiDoc\ApiDocGeneratorServiceProvider');
        }
    }
}
