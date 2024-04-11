<?php

namespace App\Http\Controllers;

use App\Services\UsersService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UsersService $userService)
    {
        $this->userService = $userService;
    }

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
}