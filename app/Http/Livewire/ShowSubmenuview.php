<?php

namespace App\Http\Livewire;

use App\Models\Submenu;
use Livewire\Component;

class ShowSubmenuview extends Component
{
    public $submenuId;

    public function render()
    {
        $submenu = Submenu::find($this->submenuId);
        return view('livewire.show-submenuview', [
            'submenu' => $submenu
        ]);
    }
}
