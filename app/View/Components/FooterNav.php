<?php

namespace App\View\Components;

use App\Models\Menu;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FooterNav extends Component
{
    public function render(): View
    {
        $menu = Menu::whereLocation('footer')->first() ?? new Menu();

        return view('components.footer-nav', ['menu' => $menu]);
    }
}
