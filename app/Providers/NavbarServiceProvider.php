<?php

namespace App\Providers;

use App\Http\ViewComposers\NavbarComposer;
use App\Services\Common\Helpers\Navbar;
use Illuminate\Contracts\Container\Container;
use Illuminate\Contracts\Routing\UrlGenerator;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\ServiceProvider;

class NavbarServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        $this->app->singleton(Navbar::class, function (Container $app) {
            return new Navbar(
                $app['config']['navbar']
            );
        });
    }

    public function boot(Factory $view): void
    {
        $view->composer('layout.master', NavbarComposer::class);
    }

}
