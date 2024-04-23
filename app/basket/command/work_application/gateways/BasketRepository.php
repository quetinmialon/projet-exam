<?php

namespace App\basket\command\work_application\gateways;
use App\basket\command\work_application\entities\Basket;


interface BasketRepository{
    public function getByUser(int $userId): Basket;
    public function save(Basket $basket) : void;

}
