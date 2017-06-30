<?php

namespace App\Providers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Request::macro('nullable', function ($key) {
            return $this->input($key) === '' ? null : $this->input($key);
        });

        Request::macro('filter', function ($key, $filters) {
            return collect($filters)->reduce(function ($filtered, $filter) {
                return $filter($filtered);
            }, $this->input($key));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
