<?php 

namespace App\orders\query\infrastructure\client;

use App\auth\services\UsersService;
use App\orders\query\work_application\services\QueryOrdersServices;
use App\shared\Controller;
use Illuminate\Http\Request;

class QueryOrderController extends Controller {

    public function __construct(private UsersService $usersService, private QueryOrdersServices $queryOrdersServices){}


    public function getTheOrdersOfCurrentUser(){
        $userId = $this->usersService->getCurrentUserId();
        return(view('auth.orders',['orders'=>($this->queryOrdersServices->getOrdersOfCurrentUser($userId))]));
    }

    public function getAllOrders(){
        return(view('backOffice.orders.orders',['orders'=>($this->queryOrdersServices->getAllOrders())]));
    }

    public function getOrdersByStatus(Request $request){
        return view('backOffice.orders.orders',['orders'=>($this->queryOrdersServices->getOrdersByStatus($request->status))]);
    }

    public function getOrderById(Request $request){
        return view('backOffice.orders.order',[
            'orders'=>($this->queryOrdersServices->getOrderById($request->id)),
            'products'=>($this->queryOrdersServices->getProductsInOrder($request->id))
        ]);
    }

    public function getOrderInfo(Request $request){
        return view('auth.order',[
            'orders'=>($this->queryOrdersServices->getOrderById($request->id)),
            'products'=>($this->queryOrdersServices->getProductsInOrder($request->id))
        ]);
    }
}

