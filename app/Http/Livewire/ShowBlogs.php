<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class ShowBlogs extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    use WithPagination;

    public $nombreCrud = 'Blogs';

    // MODALES
    public $nuevo = false;
    public $editar = false;
    public $ver = false;

    // FILTROS
    public $buscar;
    public $user_id;
    public $empresa_id;
    public $eliminarItem = ['1'];

    // DATOS
    public $foto_portada;
    public $consultaVer;

    public $tipo_input;

    public $titulo;
    public $descripcion;
    public $contenido;

    public $inputs = [];

    public function getListeners()
    {
        return [
            'confirmed',
            'mensajeEnviado'
        ];
    }

    public function mensajeEnviado($empresa_id)
    {
        $this->empresa_id = $empresa_id->id;
    }
    public function mount()
    {
        $user = Auth::user();
        $this->user_id = $user->id;
    }
    public function render()
    {
        if (empty($this->empresa_id)) {
            $this->empresa_id = config('app.empresa')->id;
        }
        $buscar = $this->buscar;

        return view('livewire.show-blogs');
    }

    //CREAR
    public function guardar()
    {
        $this->validate([
            'empresa_id' => 'required',
            'user_id' => 'required',
            'titulo' => 'required',
            'descripcion' => 'required',
            'foto_portada' => 'required',
        ]);

        if ($this->foto_portada) {
            $imagen = $this->foto_portada->store('storage');
        }

        Blog::create([
            'user_id' => $this->user_id,
            'empresa_id' => $this->empresa_id,
            'titulo' => $this->titulo,
            'descripcion' => $this->descripcion,
            'foto_portada' => $imagen,
            'contenido' => $this->inputs
        ]);

        $this->alert('success', 'Creado correctamente!', [
            'position' => 'top'
        ]);

        $this->limpiarInput();
    }

    //VER
    public function ver($id)
    {

        $this->ver = true;
    }

    //ELIMINAR
    public function eliminar($id)
    {
        $this->eliminarItem[] = $id;

        $this->alert('warning', '¿Eliminar?', [
            'position' => 'center',
            'timer' => '10000',
            'toast' => false,
            'text' => 'Esta seguro',
            'showConfirmButton' => true,
            'onConfirmed' => 'confirmed',
            'showDenyButton' => false,
            'onDenied' => '',
            'showCancelButton' => true,
            'onDismissed' => '',
            'cancelButtonText' => 'Salir',
            'confirmButtonText' => 'Si',
        ]);
    }

    public function confirmed()
    {
        $this->alert('success', 'Eliminado correctamente!', [
            'position' => 'top'
        ]);
        $this->eliminarItem = ['1'];
    }

    //VER EDITAR
    public function editar($id)
    {
        $this->ver = false;

        $this->editar = true;
    }

    //ACTUALIZAR
    public function actualizar($id)
    {
        $validatedData = $this->validate([]);

        $this->editar = false;

        $this->alert('success', 'Actualizado correctamente!', [
            'position' => 'top'
        ]);

        $this->limpiarInput();
    }

    public function agregarContenido()
    {
        if ($this->tipo_input == 'image') {
            if ($this->contenido) {
                $imagen = $this->contenido->store('storage');
                $this->inputs[] = [
                    'type' => $this->tipo_input,
                    'value' => $imagen,
                ];
            }
        }else{
            $this->inputs[] = [
                'type' => $this->tipo_input,
                'value' => $this->contenido,
            ];
        }

        $this->limpiarContenido();
    }

    public function limpiarContenido()
    {
        $this->contenido = '';
    }

    public function eliminarContenido($key)
    {
        unset($this->inputs[$key]);
    }

    public function limpiarInput()
    {
        $this->ver = false;
        $this->editar = false;
        $this->nuevo = false;

        $this->titulo = '';
        $this->descripcion = '';
        $this->foto_portada = '';
        $this->inputs = [];
    }
}
