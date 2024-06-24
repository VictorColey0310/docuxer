<?php

namespace App\Http\Livewire;

use App\Models\Aliados;
use App\Models\Equipo;
use App\Models\Menu;
use App\Models\Submenu;
use App\Models\Tarjetas;
use Livewire\Component;

class ShowInicio extends Component
{
    public function render()
    {
        $consulta_tarjetas = Tarjetas::get();
        $consulta_equipo = Equipo::first()->take(4)->get();
        $consulta_aliados = Aliados::get();

        

        return view('livewire.show-inicio', [
            'consulta_tarjetas'=> $consulta_tarjetas,
            'consulta_equipo'=> $consulta_equipo,
            'consulta_aliados'=> $consulta_aliados,

        ]);

    }
}
