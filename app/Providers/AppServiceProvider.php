<?php

namespace App\Providers;

use App\Services\Admin\Classes\ClassesRequestsContract;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        Paginator::defaultView('vendor.pagination.bootstrap-4');

        Validator::extend('classUniqueName', function ($attribute, $value, $parameters, $validator) {
            $FormData = $validator->getData();
            $classRequestsContract = \App::make(ClassesRequestsContract::class);
            return !($classRequestsContract->is_invalid($FormData['sign'], $FormData['number']));
        });
    }
}
