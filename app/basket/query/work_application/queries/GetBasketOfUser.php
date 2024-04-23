<?php
namespace App\basket\query\work_application\queries;

use App\basket\query\work_application\models\Basket;

interface GetBasketOfUser {
    public function execute(int $userId):array;
}