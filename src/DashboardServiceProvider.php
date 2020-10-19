<?php

namespace Mlsg\AdminLayout;

use Illuminate\Support\ServiceProvider;

class DashboardServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/dashboard.php', 'dashboard'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'dashboard');

        $this->publishes([
            __DIR__ . '/../views' => resource_path('views/vendor/dashboard'),
            __DIR__ . '/../config/dashboard.php' => config_path('dashboard.php')
        ]);
    }
}
