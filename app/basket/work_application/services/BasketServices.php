<?php

namespace App\basket\work_application\services;
use App\products\work_application\gateways\ProductRepository;
use App\basket\work_application\gateways\BasketRepository;
class BasketServices{
    public function __construct(private ProductRepository $productRepository, private BasketRepository $basketRepository){}


    public function addProductToBasket(int $userId,string $productId,int $quantity = 1){

        $product = $this->productRepository->getById($productId);

        if (!$product){
            return;
        }
        $basket = $this->basketRepository->getByUser($userId);

        $basket->addProduct($productId,$quantity);

        $this->basketRepository->save($basket);

    }

    public function clear($userId){
        $basket = $this->basketRepository->getByUser($userId);
        $basket->clear();
        $this->basketRepository->save($basket);
    }
}