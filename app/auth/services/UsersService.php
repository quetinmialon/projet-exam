<?php


namespace App\auth\services;

use App\auth\models\User;
use Illuminate\Support\Facades\Auth;

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
    public function getCurrentUserId(){
        $User = Auth::getUser();
        if (!$User){
            return $User;
        }
        return $User->getAuthIdentifier();
    }
}
