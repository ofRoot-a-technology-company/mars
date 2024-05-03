<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
// for production stage application ( ssl / tls hosted )
        // URL::forceScheme('https');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
// for production stage applications
        // if(env('APP_ENV' !== 'local')) {
        //     URL::forceScheme('https');
        // }
    }
}
