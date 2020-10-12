<?php

namespace Mlsg\AdminLayout;

use Illuminate\Support\ServiceProvider;

class AdminLayoutServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/admin-layout.php', 'admin-layout'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'admin-layout');

        $this->publishes([
            __DIR__ . '/../views' => resource_path('views/vendor/admin-layout'),
            __DIR__ . '/../config/admin-layout.php' => config_path('admin-layout.php')
        ]);
    }
}
