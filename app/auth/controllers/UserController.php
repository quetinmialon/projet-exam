<?php

namespace App\auth\controllers;

use App\auth\services\UsersService;
use App\orders\query\work_application\services\QueryOrdersServices;
use App\products\work_application\services\ProductsService;
use App\shared\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{


    public function __construct(private UsersService $userService, private QueryOrdersServices $queryOrdersServices, private ProductsService $productsService){}

    public function login(Request $request)
    {
        $credentials = $request->only('email','password');
        $this->userService->login($credentials);
        if($this->userService->checkAuth()){
            return redirect('/');
        }
        return back()->withInput()->withErrors(['email' => 'Email or password incorrect.']);

    }

    public function logout()
    {
        $this->userService->logout();
        return redirect()->route('login');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);
        $this->userService->register($data);

        return redirect('/login')->with('success', 'Votre compte a été créé avec succès. Veuillez vous connecter.');
    }
    public function createAdmin(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $data['admin'] = true;

        $this->userService->createAdmin($data);

        return redirect('/dashboard')->with('success', 'Nouvel administrateur créé avec succès.');
    }
    public function showRegisterForm (){
        return view('register');
    }

    public function showLoginForm (){
        return view ('login');
    }

    public function profile(){
            $userId = $this->userService->getCurrentUserId();
            $user = $this->userService->getUserInfo($userId);
            $orders = $this->queryOrdersServices->getOrdersOfCurrentUser($userId);

            foreach ($orders as &$order) {
                $productsInOrder = $this->queryOrdersServices->getProductsInOrder($order['id']);
                foreach ($productsInOrder as &$productInOrder) {
                    $product = $this->productsService->getOneProduct($productInOrder['productId']);
                    $productInOrder['name'] = $product['name'];
                    $productInOrder['price'] = $product['price'];
                }
                unset($productInOrder);
                $order['productCommands'] = $productsInOrder;
            }
            unset($order); // Dissocier la référence après la boucle foreach
            

        
            return view('auth.userProfile', [
                'user' => $user,
                'orders' => $orders
            ]);
    }

    public function usersList(){
        return view('backOffice.users.usersList',['users'=>$this->userService->getUsers()]);
    }
}
