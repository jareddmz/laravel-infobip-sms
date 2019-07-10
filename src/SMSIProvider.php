<?php

namespace JaredDmz\LaravelInfobipSMS;

use Illuminate\Support\ServiceProvider;

class SMSIProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        require_once __DIR__.'\SMSIFacade.php';
    }
}
