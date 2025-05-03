<?php

namespace Getec\Core;

use Illuminate\Support\ServiceProvider;

class GetecCoreServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/getec-core.php', 'getec-core');
    }

    public function boot()
    {

        $this->publishes([
            __DIR__.'/../config/getec-core.php' => config_path('getec-core.php'),
        ], 'getec-core-config');
    }
}
