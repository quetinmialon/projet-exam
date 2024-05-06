<?php

namespace App\orders\command\infrastructure\gateways;

use App\orders\command\infrastructure\gateways\model\Order;
use App\orders\command\infrastructure\gateways\model\ProductCommand;
use App\orders\command\work_application\entities\Order as WorkApplicationOrder;
use App\orders\command\work_application\gateways\OrdersRepository;
use Faker\Core\Uuid;

class EloquentOrdersRepository implements OrdersRepository{

    public function getByUser(int $userId): array{
        return [];
    }
    public function save(WorkApplicationOrder $order):void{
        $snapshot = $order->snapshot();
        

        $orderId = $snapshot['orderId'];


        $products = array_map(function ($product)use ($orderId){
            return [
                'orderId'=>$orderId,
                'productId'=>$product['productId'],
                'quantity'=>$product['quantity']
            ];
        },$snapshot['products']);


        Order::where('id','=',$orderId)->delete();
        Order::Create([
            'id'=>$orderId,
            'userId'=>$snapshot['userId'],
            'totalPrice'=>$snapshot['price'],
            'status'=>$snapshot['status'],
            'adress'=>$snapshot['address'],
            'paymentMethod'=>$snapshot['paymentMethod'],
        ]); 
        ProductCommand::where('orderId','=',$orderId)->delete();
        ProductCommand::insert($products);  
    }

    public function delete(WorkApplicationOrder $order):void{
        $snapshot = $order->snapshot();
        ProductCommand::where('orderId','=',$snapshot['orderId'])->delete();
        Order::where('orderId','=',$snapshot['orderId'])->delete();
    }
    public function getById(int $orderId):?WorkApplicationOrder{
        return null;
    }

    public function getByStatus(string $status):?array{
        return null;
    }

    public function getAllOrders():?array{
        return null;
    }

}

