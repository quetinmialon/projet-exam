<?php

namespace App\orders\command\work_application\services;


use App\orders\command\work_application\entities\Order;
use App\orders\command\work_application\entities\ProductCommand;
use App\orders\command\work_application\gateways\OrdersRepository;
use App\products\work_application\gateways\ProductRepository;
use App\shared\UUIDProvider;

class OrdersServices{

    public function __construct(private OrdersRepository $ordersRepository, private UUIDProvider $UUIDProvider) {}


    public function changeStatus($orderId, $status){

        $this->ordersRepository->changeStatus($orderId, $status);

    }

    public function getById($orderId){
        return $this->ordersRepository->getById($orderId);
    }

    public function putBasketProductIntoOrderTable(array $productsInBasket,string $adress, string $paymentMethod, string $status,int $price,int $userId){
        $productsInOrders = [];
        $orderId = $this->UUIDProvider->getUUID();
        
        foreach($productsInBasket as $product){
           $product = new ProductCommand($product->productId, $product->quantity, $orderId);
           array_push($productsInOrders, $product); 
        }
        $order =  new Order($orderId, $userId, $adress, $paymentMethod, $status, $price, $productsInOrders);     
        $this->ordersRepository->save($order);
    }
}
