<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Notifications\Contacto;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Facades\Notification;

class Contactos extends Component
{
    use LivewireAlert;
    public $descripcion;
    public $email;
    public $nombre;
    public $telefono;
    public $empresa;
    public $asunto;

    public function render()
    {
        return view('livewire.contactos');
    }

    public function enviarEmail()
    {
        $usuario = User::where('rol_id', '65c2889186ae85d77e058751')->first();


        Notification::send($usuario, new Contacto($this->email, $this->nombre, $this->descripcion, $this->telefono, $this->empresa, $this->asunto));

        $this->limpiar();

        $this->alert('success', 'Mensaje enviado!', [
            'position' => 'top'
        ]);
    }
    public function limpiar()
    {
        $this->descripcion = '';
        $this->email = '';
        $this->nombre = '';
        $this->telefono = '';
        $this->empresa = '';
        $this->asunto = '';
    }
}
