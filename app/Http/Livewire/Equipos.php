<?php

namespace App\Http\Livewire;

use App\Models\Equipo;
use Livewire\Component;

class Equipos extends Component
{
    public function render()
    {
        $consulta_equipo = Equipo::get();

        return view('livewire.equipos', [
            'consulta_equipo' => $consulta_equipo,
        ]);
    }
}
