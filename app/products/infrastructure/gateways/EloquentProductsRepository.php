<?php

namespace App\products\infrastructure\gateways;
use App\products\work_application\gateways\ProductRepository;
use App\products\work_application\entities\Product as WorkingProduct;
use App\products\infrastructure\gateways\models\Product;
class EloquentProductsRepository implements ProductRepository {

    public function getById(string $productId): ?WorkingProduct{
        
       $product =  Product::find($productId);
        
       if (!$product){
        return null;
       }

       return new WorkingProduct($product['id'],$product['price'],$product['name'],$product['description'],$product['img']);

    }

    public function save(WorkingProduct $product):void{
        Product::updateOrCreate(
            [
                'id' => $product->id,
            ],
            $product->snapshot()
        );
    }
}