<?php

namespace App\orders\command\work_application\gateways;
use App\orders\command\work_application\entities\Order;

interface OrdersRepository{

    public function save(Order $order):void;

    public function delete(Order $order):void;




}