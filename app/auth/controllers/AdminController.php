<?php

namespace App\auth\controllers;

use App\auth\services\UsersService;
use App\basket\query\work_application\services\QueryBasketServices;
use App\orders\query\work_application\services\QueryOrdersServices;
use App\products\work_application\services\ProductsService;
use App\shared\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{


    public function __construct(private UsersService $userService, private QueryOrdersServices $queryOrdersServices, private ProductsService $productsService, private QueryBasketServices $queryBasketServices){}

    public function usersList(){
        return view('backOffice.users.usersList',['users'=>$this->userService->getUsers()]);
    }

    public function backOffice(){
        return view('backOffice.backOffice',[
            'totalOrdersPrice'=>$this->queryOrdersServices->getTotalPriceOfAllOrders(),
            'totalOrders'=>$this->queryOrdersServices->getTotalOrders(),
            'totalUsers'=>$this->userService->getTotalUsers(),
            'totalProducts'=>$this->productsService->getTotalProducts(),
            'totalPromoCodes'=>$this->queryBasketServices->getTotalPromoCodes()
        ]);
    }
    public function createAdmin(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $data['admin'] = 1;

        $this->userService->createAdmin($data);

        return redirect('/backOffice')->with('success', 'Nouvel administrateur créé avec succès.');
    }

    public function adminProfile(Request $request){
        return view('backOffice.users.updateProfile',['user'=>$this->userService->getUserInfo($request->id)]);
    }

    public function updateProfile(Request $request){
        
        $updatingInfo = [
            'name'=>$request->name,
            'admin'=>$request->admin,
            'adress'=>$request->adress,
        ];
        $this->userService->updateProfile($request->id,$updatingInfo);
        return redirect('/backOffice/users');
    }

    public function deleteUser(Request $request){
        $this->userService->deleteUser($request->id);
        return redirect('/backOffice/users');
    }
}