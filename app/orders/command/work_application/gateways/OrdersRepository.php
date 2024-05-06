<?php

namespace App\orders\command\work_application\gateways;
use App\orders\command\work_application\entities\Order;

interface OrdersRepository{
    public function getByUser(int $userId):?array;
    public function save(Order $order):void;

    public function delete(Order $order):void;

    public function getById(int $orderId):?Order;

    public function getByStatus(string $status):?array;

    public function getAllOrders(): ?array;


}