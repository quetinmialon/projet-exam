<?php

namespace App\Providers;

use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use App\services\ProductsService;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(ProductsService::class, function(Application $app){return new ProductsService();});
    }



    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
