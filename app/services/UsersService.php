<?php


namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class UsersService
{
    public function login($credentials)
    {          
        Auth::attempt($credentials);
           
    }


    public function register($data) : User
    {

        return User::create($data);
    }

    public function logout()
    {
        Auth::logout();
        
    }


    public function createAdmin( $data): User
    {      
        return User::create($data);
    }
    public function checkAuth() : bool {
        return Auth::check();
    }
}
