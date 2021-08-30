<?php

namespace LaravelAvanttoCharts;

use Illuminate\Support\ServiceProvider;

class LaravelAvanttoChartsServiceProvider extends ServiceProvider
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
        $this->loadViewsFrom(__DIR__.'/views', 'laravelAvanttoChart');
    }
}
