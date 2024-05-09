<?php

namespace App\orders\query\infrastructure\queries;

use App\orders\command\infrastructure\gateways\model\Order;
use App\orders\command\infrastructure\gateways\model\ProductCommand;
use App\orders\query\work_application\queries\QueriesOrders;

class EloquentQueriesOrders implements QueriesOrders{
    public function getOrdersByUserId(int $userId):array{
        return  Order::where('userId','=',$userId)->get()->toArray();
    }

    public function getOrderById(string $orderId):array{
        return  Order::where('id','=',$orderId)->first()->toArray();
    }

    public function getOrdersByStatus(string $status):array{
        return  Order::where('status','=',$status)->get()->toArray();
    }

    public function getAllOrders():array{
        return   Order::all()->toArray();
    }

    public function getProductsInOrder(string $orderId):array{
        return  ProductCommand::where('orderId','=',$orderId)->get()->toArray();
    }
}