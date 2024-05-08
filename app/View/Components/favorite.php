<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\favorites\work_application\services\FavoriteService;
use App\auth\services\UsersService;

class favorite extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(private FavoriteService $favoriteService, private UsersService $authservice,public $productId)
    {
        //
    }

    public function addToFavorite(){
        $userId = $this->authservice->getCurrentUserId();
        $this->favoriteService->addToFavorite($userId, strval($this->productId));
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $userIsLogged = $this->authservice->checkAuth();


        if (!$userIsLogged){
            return view('components.favorite-Logout');
        }

        $userId = $this->authservice->getCurrentUserId();

        return view('components.favorite', [
            'isFavorite' =>  $this->favoriteService->isProductInFavorites($userId,strval($this->productId))
        ]);
    }
}
