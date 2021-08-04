<?php

namespace Avicodez\Subscription;

use Illuminate\Support\ServiceProvider;

class SubscriptionFormServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'subscriptionform');
        $this->loadMigrationsFrom(__DIR__.'/Database/migrations');
    }
}
