<?php
namespace App\orders\query\work_application\queries;



interface QueriesOrders {

    public function getAllOrders():array;

    public function getOrderById(string $id):array;

    public function getOrdersByUserId(int $id):array;

    public function getOrdersByStatus(string $status):array;

    public function getProductsInOrder(string $orderId):array;

}