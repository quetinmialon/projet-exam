<?php

namespace App\basket\command\work_application\services;
use App\products\work_application\gateways\ProductRepository;
use App\basket\command\work_application\gateways\BasketRepository;
use App\basket\command\work_application\gateways\PromoCodeRepository;
use App\basket\command\work_application\entities\Basket;

class BasketServices{
    public function __construct(private ProductRepository $productRepository, private BasketRepository $basketRepository, private PromoCodeRepository $promoCodeRepository){}


    public function addProductToBasket(int $userId,string $productId,int $quantity = 1){

        $product = $this->productRepository->getById($productId);

        if (!$product){
            return;
        }
        $basket = $this->basketRepository->getByUser($userId);

        $basket->addProduct($productId,$quantity);

        $this->basketRepository->save($basket);

    }
    public function reduceQuantityOfOneProduct(int $userId,string $productId,int $quantity = 1){
        $product = $this->productRepository->getById($productId);

        if (!$product){
            return;
        }
        $basket = $this->basketRepository->getByUser($userId);

        $basket->reduceQuantityOfOneProduct($productId,$quantity);

        $this->basketRepository->save($basket);
    }

    public function clear($userId){
        $basket = $this->basketRepository->getByUser($userId);
        $basket->clear();
        $this->basketRepository->save($basket);
    }

    public function removeOneProduct($userId,$productId){

        $basket = $this->basketRepository->getByUser($userId);
        $basket->removeProduct($productId);
        $this->basketRepository->save($basket);

    }

    public function applyPromoCode(string $promoCodeLabel,int $userId){
        $promoCode = $this->promoCodeRepository->getByLabel($promoCodeLabel);
        if(!$promoCode){
            return;
        }
        $basket = $this->basketRepository->getByUser($userId);
        $basket->applyPromoCode($promoCodeLabel);
        $this->basketRepository->save($basket);

    }

    public function removePromoCode(int $userId){
        $basket = $this->basketRepository->getByUser($userId);
        $basket->removePromoCode();
        $this->basketRepository->save($basket);
    }

    public function getBasketOfCurrentUser(int $userId):Basket{
        $basket = $this->basketRepository->getByUser($userId);
        return($basket);
    }
}
