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
use App\orders\command\infrastructure\gateways\EloquentOrdersRepository;
use App\orders\query\work_application\queries\QueriesOrders;
use App\orders\query\work_application\services\QueryOrdersServices;
use App\products\work_application\services\ProductsService;
use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use App\favorites\work_application\services\FavoriteService;
use App\products\infrastructure\gateways\EloquentProductsRepository;
use App\products\work_application\gateways\ProductRepository;
use App\basket\query\work_application\queries\GetBasketOfUser;
use App\basket\query\work_application\services\QueryBasketServices;
use App\orders\command\work_application\gateways\OrdersRepository;
use App\orders\command\work_application\services\OrdersServices;
use App\orders\query\infrastructure\queries\EloquentQueriesOrders;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {   
        $this->app->singleton(ProductsService::class, function(Application $app){return new ProductsService($app->get(ProductRepository::class),$app->get(UUIDProvider::class));});
        $this->app->singleton(UUIDProvider::class, function(){return new RUUIDProvider();});
        $this->app->singleton(SendMailService::class, function(){return new SendMailService();});
        $this->app->singleton(UsersService::class, function (){return new UsersService();});
        $this->app->singleton(ProductRepository::class, function(){return new EloquentProductsRepository();});
        $this->app->singleton(FavoritesRepository::class, function(){return new EloquentFavoritesRepository();});
        $this->app->singleton(BasketRepository::class,function(){return new EloquentBasketRepository();});
        $this->app->singleton(PromoCodeRepository::class,function(){return new EloquentPromoCodeRepository();});
        $this->app->singleton(FavoriteService::class, function(Application $app){return new FavoriteService($app->get(FavoritesRepository::class),$app->get(ProductRepository::class));});
        $this->app->singleton(BasketServices::class,function(Application $app){return new BasketServices($app->get(ProductRepository::class),$app->get(BasketRepository::class),$app->get(PromoCodeRepository::class));});
        $this->app->singleton(GetBasketOfUser::class,function (){return new EloquentGetBasketOfUser();});
        $this->app->singleton(QueryBasketServices::class, function(Application $app){return new QueryBasketServices($app->get(GetBasketOfUser::class));});
        $this->app->singleton(PromoCodeServices::class, function(Application $app){return new PromoCodeServices($app->get(PromoCodeRepository::class));});
        $this->app->singleton(GetPromoCodeByLabel::class, function(){return new EloquentGetPromoCodeByLabel();});
        $this->app->singleton(GetAllPromoCodes::class, function(){return new EloquentGetAllPromoCodes();});
        $this->app->singleton(OrdersServices::class, function(Application $app){return new OrdersServices($app->get(OrdersRepository::class),$app->get(UUIDProvider::class));});
        $this->app->singleton(OrdersRepository::class, function(){return new EloquentOrdersRepository();});
        $this->app->singleton(QueryOrdersServices::class, function(Application $app){return new QueryOrdersServices($app->get(QueriesOrders::class));});
        $this->app->singleton(QueriesOrders::class, function(){return new EloquentQueriesOrders();});
    }


    public function boot(): void
    {

    }
}
