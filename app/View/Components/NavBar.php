<?php

namespace App\View\Components;

use App\Models\Menu;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavBar extends Component
{
    public function render(): View
    {
        $menu = Menu::whereLocation('header')->first() ?? new Menu();

        return view('components.nav-bar', ['menu' => $menu]);
    }
}
