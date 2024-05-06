<?php


namespace App\products\work_application\entities;

class Product{
    public function __construct(public string $id, public int $price, public string $name, public string $description, public string $img)
    {

    }
    public static function new(string $id, string $name, int $price){
       return new Product($id,$price, $name,"",""); 
    }

    public function snapshot(): array{
        return [
            'id' => $this->id,
            'price' => $this->price,
            'name' => $this->name,
            'description' => $this->description,
            'img' => $this->img,
        ];
    }

}