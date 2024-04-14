<?php

namespace App\basket\infrastructure\client\controller;

use App\auth\services\UsersService;
use App\basket\work_application\services\BasketServices;
use App\shared\Controller;
use Illuminate\Http\Request;

class BasketController extends Controller {

    public function __construct(private BasketServices $basketService, private UsersService $usersService){}
    public function addToBasket(Request $request){
        $userId = $this->usersService->getCurrentUserId();
        $this->basketService->addProductToBasket($userId,$request->productId,$request->quantity);
    }

    public function clear(){
        $userId = $this->usersService->getCurrentUserId();
        $this->basketService->clear($userId);
    }
}