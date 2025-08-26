<?php

namespace Azishapidin\Nyebut;

use Azishapidin\Nyebut\Commands\NyebutCommand;
use Azishapidin\Nyebut\Nyebut;
use Illuminate\Support\ServiceProvider;

class NyebutServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('nyebut', function(){
            return new Nyebut();
        });
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                NyebutCommand::class
            ]);
        }

    }
}
