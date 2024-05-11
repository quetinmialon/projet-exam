<?php


namespace App\products\work_application\entities;

class Product{
    public function __construct(public string $id, public int $price, public string $name, public string|null $description, public string|null $img)
    {

    }
    public static function new(string $id, string $name, int $price, string $description = null, string $img=null){
       return new Product($id,$price, $name,$description,$img); 
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