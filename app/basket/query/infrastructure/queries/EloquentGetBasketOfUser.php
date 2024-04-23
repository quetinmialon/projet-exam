<?php

namespace App\basket\query\infrastructure\queries;

use App\basket\command\infrastructure\models\BasketModel;
use App\basket\command\infrastructure\models\BasketProductModel;
use App\basket\command\infrastructure\models\PromoCodeModel;
use App\basket\query\work_application\queries\GetBasketOfUser;
use App\products\infrastructure\gateways\models\Product;

class EloquentGetBasketOfUser implements GetBasketOfUser{
    public function execute(int $userId):array{
        return [
        'promoCode'=>$this->getPromoCode($userId),
        'products'=>$this->getProducts($userId)
    ];
    }


    private function getPromoCode(int $userId){
        $basketInDb = BasketModel::where('userId','=',$userId)->first();
        if(!$basketInDb){
            return null;
        }
        $code =PromoCodeModel::where('label','=',$basketInDb['promoCodeLabel'])->first();
        if(!$code){
            return null;
        }
        return [
            'label'=>$code['label'],
            'type'=>$code['type'],
            'value'=>$code['value'],
        ];
    }

    private function getProducts(int $userId){
        $productsInDb = BasketProductModel::where('userId','=',$userId)->get();
        return (array_map(function($product){
            $productInDb2 = Product::where('id','=',$product['productId'])->first();
            return [
                'id'=>$product['productId'],
                'name'=>$productInDb2['name'],
                'price'=>$productInDb2['price'],
                'quantity'=>$product['quantity']];
        },$productsInDb->toArray()));
    }
}
