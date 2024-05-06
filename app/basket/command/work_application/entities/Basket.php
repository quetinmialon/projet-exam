<?php

namespace App\basket\command\work_application\entities;

class Basket{
    public function __construct(private int $userId, public array $products, private ?String $promoCodeLabel){}

    public function addProduct(string $productId, int $quantity = 1):void{

        $productInBasket = $this->getProductById($productId);

        if ($productInBasket){
            $productInBasket->addQuantity($quantity);
            return;
        }
        $basketProduct =  new BasketProduct($this->userId, $productId,$quantity);
        array_push($this->products, $basketProduct);

    }

    public function reduceQuantityOfOneProduct(string $productId, int $quantity = 1){
        $productInBasket = $this->getProductById($productId);
        if (!$productInBasket){
            return;
        }
        $productInBasket->reduceQuantity($quantity);

        if($productInBasket->isEmpty()){
            $this->removeProduct($productId);
        }
    }
    public function snapshot():mixed{
        return [
            'userId'=> $this->userId,
            'products'=> array_map(function($product){
                return $product->snapshot();
            }, $this->products),
            'promoCodeLabel'=>$this->promoCodeLabel
        ];
    }
    private function getProductById(string $productId):BasketProduct|null{

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

    public function removeProduct(string $productId):void{

        $this->products = array_filter($this->products,function($product) use ($productId) {
            if($product->productId === $productId){
                return false;
            }
            return true;
        });

    }
    public function applyPromoCode(string $promoCodeLabel){
        $this->promoCodeLabel = $promoCodeLabel;
    }

    public function removePromoCode(){
        $this->promoCodeLabel = null;
    }
}

