<?php

namespace Jinas\DhivatarComponent;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Jinas\DhivatarComponent\Dhivatar;

class DhivatarComponentServiceProvider extends ServiceProvider
{


    public function boot() : void
    {
        $this->loadViewsFrom(__DIR__ . '/components', 'dhivatarcomponents');

        Blade::component('dhivatarcomponents::dhivatar', Dhivatar::class);
    }
}