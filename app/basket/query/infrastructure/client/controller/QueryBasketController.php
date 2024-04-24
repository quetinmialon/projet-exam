<?php
namespace App\basket\query\infrastructure\client\controller;

use App\auth\services\UsersService;
use App\basket\query\work_application\services\QueryBasketServices;
use App\shared\Controller;


class QueryBasketController extends Controller {

    public function __construct(private UsersService $usersService, private QueryBasketServices $queryBasketServices){}
    public function getTheBasketOfCurrentUser(){
        $userId = $this->usersService->getCurrentUserId();
        return(view('auth.basket',['basket'=>($this->queryBasketServices->getBasket($userId))]));
    }

    
}