<?php

namespace App\basket\work_application\entities;

class BasketProduct{
    public function __construct(private int $userId, public string $productId,private int $quantity){}

    public function snapshot():mixed{
        return [
            'userId' => $this->userId,
            'productId' => $this->productId,
            'quantity'=>$this->quantity
        ];
    }

    public function addQuantity(int $quantity){
        $this->quantity += $quantity;
    }

    public function reduceQuantity(int $quantity){
        $this->quantity -= $quantity;
    }

    public function isEmpty(){
        return $this->quantity <= 0;
    }
}