<?php

namespace App\basket\command\infrastructure\gateways;
use App\basket\command\infrastructure\models\BasketModel;
use App\basket\command\infrastructure\models\BasketProductModel;
use App\basket\command\work_application\entities\BasketProduct;
use App\basket\command\work_application\gateways\BasketRepository;
use App\basket\command\work_application\entities\Basket;

class EloquentBasketRepository implements BasketRepository{

    public function getByUser(int $userId): Basket
    {
        $productsInDb = BasketProductModel::where('userId','=',$userId)->get();
        $basketInDb = BasketModel::where('userId','=',$userId)->first();
        if(!$basketInDb){
            $promoCode = null;
        }else{
            $promoCode = $basketInDb['promoCodeLabel'];
        }
        $products = array_map(function($product){
            return new BasketProduct($product['userId'],$product['productId'],$product['quantity']);
        },$productsInDb->toArray());
        return new Basket($userId,$products, $promoCode);
    }
    public function save(Basket $basket):void
    {
        $snapshot = $basket->snapshot();


        $products = array_map(function ($product){
            return [
                'userId'=>$product['userId'],
                'productId'=>$product['productId'],
                'quantity'=>$product['quantity']
            ];
        },$snapshot['products']);
        BasketProductModel::where('userId','=',$snapshot['userId'])->delete();
        BasketProductModel::insert($products);

        BasketModel::where('userId','=',$snapshot['userId'])->delete();

        BasketModel::Create([
            'userId'=>$snapshot['userId'],
            'promoCodeLabel'=>$snapshot['promoCodeLabel']
        ]);
    }



}
