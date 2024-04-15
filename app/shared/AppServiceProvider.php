<?php

namespace App\shared;

use App\auth\services\UsersService;
use App\basket\infrastructure\gateways\EloquentBasketRepository;
use App\basket\infrastructure\gateways\EloquentPromoCodeRepository;
use App\basket\work_application\gateways\BasketRepository;
use App\basket\work_application\gateways\PromoCodeRepository;
use App\basket\work_application\services\BasketServices;
use App\contact\services\SendMailService;
use App\favorites\infrastructure\gateways\EloquentFavoritesRepository;
use App\favorites\work_application\gateways\FavoritesRepository;
use App\products\work_application\services\ProductsService;
use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use App\favorites\work_application\services\FavoriteService;
use App\products\infrastructure\gateways\EloquentProductsRepository;
use App\products\work_application\gateways\ProductRepository;

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
        $this->app->singleton(ProductRepository::class, function(Application $app){return new EloquentProductsRepository();});
        $this->app->singleton(FavoritesRepository::class, function(Application $app){return new EloquentFavoritesRepository();});
        $this->app->singleton(BasketRepository::class,function(Application $app){return new EloquentBasketRepository();});
        $this->app->singleton(PromoCodeRepository::class,function(Application $app){return new EloquentPromoCodeRepository();});
        $this->app->singleton(FavoriteService::class, function(Application $app){return new FavoriteService($app->get(FavoritesRepository::class),$app->get(ProductRepository::class));});
        $this->app->singleton(BasketServices::class,function(Application $app){return new BasketServices($app->get(ProductRepository::class),$app->get(BasketRepository::class),$app->get(PromoCodeRepository::class));});
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
