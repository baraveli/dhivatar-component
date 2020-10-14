<?php

namespace Jinas\DhivatarComponent;

use Illuminate\View\Compilers\BladeCompiler;
use Illuminate\Support\ServiceProvider;
use Jinas\DhivatarComponent\Dhivatar;

class DhivatarComponentServiceProvider extends ServiceProvider
{


    public function boot() : void
    {
        $this->loadViewsFrom(__DIR__ . '/components', 'dhivatarcomponents');

        $this->callAfterResolving(BladeCompiler::class, function (BladeCompiler $blade) {
                $blade->component(Dhivatar::class, 'dhivatar');
        });
    }
}