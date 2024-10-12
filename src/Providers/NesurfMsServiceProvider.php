<?php

namespace Neosurf\Providers;

use Illuminate\Support\ServiceProvider;

class NesurfMsServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../../../barryvadh/laravel-faker/src/routes.php');
    }
}
