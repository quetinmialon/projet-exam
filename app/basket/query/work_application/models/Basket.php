<?php

namespace App\basket\query\work_application\models;


class Basket{

    public function __construct(public ?array $promoCode, public array $products){}



}