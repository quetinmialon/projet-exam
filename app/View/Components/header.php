<?php

namespace App\View\Components;

use App\auth\services\UsersService;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class header extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(private UsersService $userService, public string $title = 'Smash Up')
    {

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $user = $this->userService->checkAuth();
        if(!$user){
            return view ('components.header-logout');
        }
        return view('components.header');
    }
}
