<?php 

namespace App\basket\infrastructure\gateways;
use App\basket\infrastructure\models\BasketProductModel;
use App\basket\work_application\entities\BasketProduct;
use App\basket\work_application\gateways\BasketRepository;
use App\basket\work_application\entities\Basket;

class EloquentBasketRepository implements BasketRepository{

    public function getByUser(int $userId): Basket
    {
        $productsInDb = BasketProductModel::where('userId','=',$userId)->get();
        // dd($productsInDb);
        $products = array_map(function($product){
            return new BasketProduct($product['userId'],$product['productId'],$product['quantity']);
        },$productsInDb->toArray());
        return new Basket($userId,$products);
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
    }

}