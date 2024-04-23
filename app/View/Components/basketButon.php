<?php

namespace App\View\Components;

use App\auth\services\UsersService;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class basketButon extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(private UsersService $authservice,public $productId)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $user = $this->authservice->getCurrentUserId();
        return view('components.basketButon',[
            "userId"=>$user,
            "productId"=>$this->productId

        ]);
    }
}
