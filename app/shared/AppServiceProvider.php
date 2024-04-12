<?php

namespace App\shared;

use App\auth\services\UsersService;
use App\contact\services\SendMailService;
use App\favorites\infrastructure\gateways\EloquentFavoritesRepository;
use App\favorites\work_application\gateways\FavoritesRepository;
use App\products\services\ProductsService;
use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use App\favorites\work_application\services\FavoriteService;

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

        $this->app->singleton(FavoritesRepository::class, function(Application $app){return new EloquentFavoritesRepository();});
        $this->app->singleton(FavoriteService::class, function(Application $app){return new FavoriteService($app->get(FavoritesRepository::class));});

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
