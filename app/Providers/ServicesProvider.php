<?php

namespace App\Providers;

use App\Contracts\Admin\NumbersContract;
use App\Contracts\Admin\SignsContract;
use App\Services\Admin\Classes\ClassesRequestsContract;
use App\Services\Admin\Classes\ClassesRequestService;
use App\Services\Admin\Classes\NumbersService;
use App\Services\Admin\Classes\SignService;
use App\Services\Admin\Schedule\DayContract;
use App\Services\Admin\Schedule\DayService;
use App\Services\Common\User\GeneratorUserContract;
use App\Services\Common\User\GeneratorUserService;
use Illuminate\Support\ServiceProvider;

class ServicesProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(ClassesRequestsContract::class, ClassesRequestService::class);
        $this->app->bind(GeneratorUserContract::class , GeneratorUserService::class);
        $this->app->bind(DayContract::class , DayService::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
        //
    }
}
