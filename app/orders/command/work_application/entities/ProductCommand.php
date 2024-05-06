<?php

namespace App\orders\command\work_application\entities;

class ProductCommand
{
    public function __construct(public string $productId, public int $quantity, public string $orderId) 
    {
        
    }

    public function snapshot():mixed{
        return [
            'orderId' => $this->orderId,
            'productId' => $this->productId,
            'quantity'=>$this->quantity
        ];
    }
}