<?php
namespace App\services;

use App\Models\Product;
class ProductsService{
    public function getProducts(){
        return Product::all();
    }
    public function getOneProduct(String $id){
        return Product::find($id);
    }
    public function getProductSearched(String $name){
        return Product::where('name','like','%'.$name.'%')->get();
    }
}
