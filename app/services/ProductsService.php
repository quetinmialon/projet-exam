<?php
namespace App\services;

use App\Models\Product;
class ProductsService{
    public function getProducts(){
        return Product::all();
    }
}
