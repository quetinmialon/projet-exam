<?php


namespace App\auth\services;

use App\auth\models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    public function getUserInfo($id){
        return User::find($id)->toArray();
    }

    public function getUsers(){
        return User::all()->toArray();
    }

    public function updatePassword(string $password,int $userId){

        $user = User::find($userId);
        $user->password = Hash::make($password);
        $user->save();
    }

    public function updateAdress(string $adress, int $userId){
        $user = User::find($userId);
        $user->adress = $adress;
        $user->save();
    }
    public function updateName(string $name, int $userId){
        $user = User::find($userId);
        $user->name = $name;
        $user->save();
    }

    public function getTotalUsers(){
        return User::all()->count();
    }

    public function updateProfile(int $userId, array $profile){
        $user = User::find($userId);
        $user->name = $profile['name'];
        $user->adress = $profile['adress'];
        $user->admin = intval($profile['admin']);
        $user->save();
    }

    public function deleteUser(int $userId){
        $user = User::find($userId);
        $user->delete();
    }



}
