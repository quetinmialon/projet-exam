<?php

namespace App\basket\query\work_application\models;

class BasketProduct{

    public function __construct(public string $id, public string $name,public int $price, public int $quantity){}


}