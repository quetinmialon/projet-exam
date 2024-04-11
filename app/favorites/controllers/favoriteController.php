<?php

namespace App\favorites\controllers;

use App\auth\services\UsersService;
use App\favorites\services\FavoriteService;
use App\shared\Controller;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function __construct(private FavoriteService $favoriteService, private Usersservice $authservice)
    {
        //
    }
    
    public function addToFavorite(Request $request){
        $productId = $request->input('productId');
        $userId = $this->authservice->getCurrentUserId();
        $this->favoriteService->addToFavorite($userId,$productId);
    }
    /**
     * Get the view / contents that represent the component.
     */

}