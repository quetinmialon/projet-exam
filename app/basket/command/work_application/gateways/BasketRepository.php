<?php

namespace App\basket\work_application\gateways;
use App\basket\work_application\entities\Basket;


interface BasketRepository{
    public function getByUser(int $userId): Basket;
    public function save(Basket $basket) : void;

}