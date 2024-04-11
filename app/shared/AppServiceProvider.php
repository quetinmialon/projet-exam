<?php

namespace App\shared;

use App\auth\services\UsersService;
use App\contact\services\SendMailService;
use App\products\services\ProductsService;
use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(ProductsService::class, function(Application $app){return new ProductsService();});
        $this->app->singleton(SendMailService::class, function(Application $app){return new SendMailService();});
        $this->app->singleton(UsersService::class, function (Application $app){return new UsersService();});
    }



    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
