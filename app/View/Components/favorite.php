<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\favorites\services\FavoriteService;
use App\auth\services\UsersService;

class favorite extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(private FavoriteService $favoriteService, private Usersservice $authservice,private $productId)
    {
        //
    }
    
    public function addToFavorite(){
        $userId = $this->authservice->getCurrentUserId();
        $this->favoriteService->addToFavorite($userId, $this->productId);
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.favorite');
    }
}
