<?php
namespace App\orders\query\work_application\services;
use App\orders\query\work_application\queries\QueriesOrders;

class QueryOrdersServices{

    public function __construct(private QueriesOrders $queriesOrders){}

    public function getOrdersOfCurrentUser(int $userId){
        $orders =  $this->queriesOrders->getOrdersByUserId($userId);
        foreach($orders as $order){
            $productsInOrder = $this->queriesOrders->getProductsInOrder($order['id']);
            $order['productCommand'] = $productsInOrder;         
        }
        return $orders;
    }

    public function getOrderById(string $id){
        return $this->queriesOrders->getOrderById($id);
    }
    public function getOrdersByStatus(string $status){
        return $this->queriesOrders->getOrdersByStatus($status);
    }

    public function getAllOrders(){
        return $this->queriesOrders->getAllOrders();
    }

    public function getProductsInOrder(string $orderId){
        return $this->queriesOrders->getProductsInOrder($orderId);
    }

    public function getTotalPriceOfAllOrders(){
        $orders = $this->getAllOrders();
        $totalPrice = 0;
        foreach($orders as $order){
            $totalPrice += $order['totalPrice'];
        }
        return $totalPrice;
    }

    public function getTotalOrders(){
        return count($this->getAllOrders());
    }

}