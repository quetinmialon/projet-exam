<?php

namespace App\shared;

use App\auth\services\UsersService;
use App\basket\command\infrastructure\gateways\EloquentBasketRepository;
use App\basket\command\infrastructure\gateways\EloquentPromoCodeRepository;
use App\basket\query\infrastructure\queries\EloquentGetBasketOfUser;
use App\basket\command\work_application\gateways\BasketRepository;
use App\basket\command\work_application\gateways\PromoCodeRepository;
use App\basket\command\work_application\services\BasketServices;
use App\basket\command\work_application\services\PromoCodeServices;
use App\basket\query\infrastructure\queries\EloquentGetAllPromoCodes;
use App\basket\query\infrastructure\queries\EloquentGetPromoCodeByLabel;
use App\basket\query\work_application\queries\GetAllPromoCodes;
use App\basket\query\work_application\queries\GetPromoCodeByLabel;
use App\contact\services\SendMailService;
use App\favorites\infrastructure\gateways\EloquentFavoritesRepository;
use App\favorites\work_application\gateways\FavoritesRepository;
use App\products\work_application\services\ProductsService;
use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use App\favorites\work_application\services\FavoriteService;
use App\products\infrastructure\gateways\EloquentProductsRepository;
use App\products\work_application\gateways\ProductRepository;
use App\basket\query\work_application\queries\GetBasketOfUser;
use App\basket\query\work_application\services\QueryBasketServices;
class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {   
        $this->app->singleton(ProductsService::class, function(Application $app){return new ProductsService($app->get(ProductRepository::class),$app->get(UUIDProvider::class));});
        $this->app->singleton(UUIDProvider::class, function(Application $app){return new RUUIDProvider();});
        $this->app->singleton(SendMailService::class, function(Application $app){return new SendMailService();});
        $this->app->singleton(UsersService::class, function (Application $app){return new UsersService();});
        $this->app->singleton(ProductRepository::class, function(Application $app){return new EloquentProductsRepository();});
        $this->app->singleton(FavoritesRepository::class, function(Application $app){return new EloquentFavoritesRepository();});
        $this->app->singleton(BasketRepository::class,function(Application $app){return new EloquentBasketRepository();});
        $this->app->singleton(PromoCodeRepository::class,function(Application $app){return new EloquentPromoCodeRepository();});
        $this->app->singleton(FavoriteService::class, function(Application $app){return new FavoriteService($app->get(FavoritesRepository::class),$app->get(ProductRepository::class));});
        $this->app->singleton(BasketServices::class,function(Application $app){return new BasketServices($app->get(ProductRepository::class),$app->get(BasketRepository::class),$app->get(PromoCodeRepository::class));});
        $this->app->singleton(GetBasketOfUser::class,function (Application $app){return new EloquentGetBasketOfUser();});
        $this->app->singleton(QueryBasketServices::class, function(Application $app){return new QueryBasketServices($app->get(GetBasketOfUser::class));});
        $this->app->singleton(PromoCodeServices::class, function(Application $app){return new PromoCodeServices($app->get(PromoCodeRepository::class));});
        $this->app->singleton(GetPromoCodeByLabel::class, function(Application $app){return new EloquentGetPromoCodeByLabel();});
        $this->app->singleton(GetAllPromoCodes::class, function(Application $app){return new EloquentGetAllPromoCodes();});
    }


    public function boot(): void
    {

    }
}
