<?php

namespace App\View\Components;

use App\Services\UsersService;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class header extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(private UsersService $userService)
    {
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header',['user'=> $this->userService->checkAuth()]);
    }
}
