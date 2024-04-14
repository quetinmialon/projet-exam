<?php


namespace App\products\work_application\entities;

class Product{
    public function __construct(public string $id, public string $price, public string $name, public string $description, public string $img)
    {

    }

}