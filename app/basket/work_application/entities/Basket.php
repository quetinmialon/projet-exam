<?php

namespace App\basket\work_application\entities;

class Basket{
    public function __construct(private int $userId, private array $products){}

    public function addProduct(string $productId, int $quantity = 1):void{

        $productInBasket = $this->getProductById($productId);

        if ($productInBasket){
            $productInBasket->addQuantity($quantity);
            return;
        }
        $basketProduct =  new BasketProduct($this->userId, $productId,$quantity);
        array_push($this->products, $basketProduct);

    }
    public function snapshot():mixed{
        return [
            'userId'=> $this->userId,
            'products'=> array_map(function($product){
                return $product->snapshot();
            }, $this->products)
        ];
    }
    private function getProductById($productId):BasketProduct|null{
        
            foreach ($this->products as $product) {
                if ($product->productId === $productId) {
                    return $product; 
                }
            }
            return null; 
        }
    
    public function clear(){
        $this->products = [];
    }
}
    
