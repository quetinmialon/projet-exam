<?php

namespace App\orders\command\infrastructure\client\controller;


use App\orders\command\work_application\services\OrdersServices;
use App\auth\services\UsersService;
use App\basket\command\work_application\services\BasketServices;
use App\shared\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller {
 

    public function __construct(private OrdersServices $ordersService, private UsersService $usersService, private BasketServices $basketServices){}

    public function changeBasketIntoOrder(Request $request){
        $userId = $this->usersService->getCurrentUserId();
        $basket = $this->basketServices->getBasketOfCurrentUser($userId);
        $this->ordersService->putBasketProductIntoOrderTable($basket->products,$request->adress,$request->paymentMethod,$request->status,$request->price,$userId);        
        $this->basketServices->clear($userId);
    }
}