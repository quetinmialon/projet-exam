<?php

namespace App\View\Components;

use App\auth\services\UsersService;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeaderMobile extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public UsersService $usersService, public string $title ='smash up')
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $user = $this->usersService->checkAuth();
        if(!$user){
            return view ('components.headerMobile-logout');
        }
        return view('components.headerMobile',['user'=> $user ]);
    }
}
