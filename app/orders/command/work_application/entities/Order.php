<?php

namespace App\orders\command\work_application\entities;
use App\basket\command\infrastructure\models\BasketModel;


class Order
{
    public function __construct(public string $orderId,public int $userId, public string $address, public string $paymentMethod, public string $status = 'waiting', public int $price, private array $products) 
    {
        
    }



    public function snapshot():mixed{
        return [
            'orderId' => $this->orderId,
            'userId' => $this->userId,
            'address' => $this->address,
            'paymentMethod' => $this->paymentMethod,
           'status' => $this->status,
            'price' => $this->price,
            'products'=> array_map(function($product){
                return $product->snapshot();
            }, $this->products),
        ];
    
    }
}