<?php

namespace App\View\Components;

use App\Models\Menu;
use Illuminate\View\Component;
use Illuminate\View\View;

class InicioLayout extends Component
{

    public function render(): View
    {
        $consulta_menu = Menu::get();

        return view('layouts.inicio',[
            'menus' => $consulta_menu
        ]);
    }
}
