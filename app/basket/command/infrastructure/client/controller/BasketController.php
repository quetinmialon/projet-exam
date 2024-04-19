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
        $this->basketService->addProductToBasket($userId,$request->productId,intval($request->quantity));
    }

    public function reduceOneProduct(Request $request){
        $userId = $this->usersService->getCurrentUserId();
        $this->basketService->reduceQuantityOfOneProduct($userId,$request->productId,$request->quantity);
    }

    public function clear(){
        $userId = $this->usersService->getCurrentUserId();
        $this->basketService->clear($userId);
    }

    public function deleteOneProduct(Request $request){
        $userId = $this->usersService->getCurrentUserId();
        $this->basketService->removeOneProduct($userId,$request->productId);
    }
    public function applyPromoCodeToBasket(Request $request){
        $userId = $this->usersService->getCurrentUserId();
        $this->basketService->applyPromoCode($request->promoCodeLabel,$userId);
    }

    public function removePromoCodeInBasket(){
        $userId = $this->usersService->getCurrentUserId();
        $this->basketService->removePromoCode($userId);
    }



}