<?php
namespace App\products\work_application\services;

use App\products\infrastructure\gateways\models\Product as ProductModel;
use App\products\work_application\entities\Product;
use App\products\work_application\gateways\ProductRepository;
use App\shared\UUIDProvider;

class ProductsService{

    public function __construct(private ProductRepository $productRepository, private UUIDProvider $UUIDProvider){}
    public function getProducts(){
        return ProductModel::all();
    }
    public function getOneProduct(String $id){
        return ProductModel::find($id);
    }
    public function getProductSearched(String $name){
        return ProductModel::where('name','like','%'.$name.'%')->get();
    }

    public function addProduct(String $name, int $price){
        $id = $this->UUIDProvider->getUUID();
        $product = Product::new($id,$name,$price);
        $this->productRepository->save($product);
        return $id;
    }
}
