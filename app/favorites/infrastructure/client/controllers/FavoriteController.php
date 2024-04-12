<?php

namespace App\favorites\infrastructure\client\controllers;

use App\auth\services\UsersService;
use App\favorites\work_application\services\FavoriteService;
use App\shared\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FavoriteController extends Controller
{
    public function __construct(private FavoriteService $favoriteService, private Usersservice $authservice)
    {
        //
    }

    public function addToFavorite(Request $request){
        $productId = $request->id;

        $userId = $this->authservice->getCurrentUserId();

        $this->favoriteService->addToFavorite($userId, $productId);
        return response()->json(['success' => true]);
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function removeFromFavorites(Request $request){
        $productId = $request->id;
        $userId = $this->authservice->getCurrentUserId();
        $this->favoriteService->removeFromFavorites($userId, $productId);
        return response()->json(['success' => true]);
    }
}
