<?php

namespace BarryvadhLaravelFaker\Providers;

use Illuminate\Support\ServiceProvider;

class MyPackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Routes register karne ke liye
    }

    public function register()
    {
        $this->loadRoutesFrom(__DIR__.'/../../../barryvadh/laravel-faker/src/routes.php');
    }
}
