<?php

namespace App\Providers;

use App\services\UsersService;
use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use App\services\ProductsService;
use App\services\SendMailService;


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
