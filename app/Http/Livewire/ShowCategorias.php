<?php

namespace App\Http\Livewire;

use App\Models\Categorias;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class ShowCategorias extends Component
{
    
    use LivewireAlert;
    use WithPagination;
    public $nombreCrud = "Categorias";
    public $nombre;
    public $descripcion;
    public $nuevo = false;
    public $editar = false;
    public $ver = false;
    public $consultaVer;
    public $buscar;

    public $eliminarItem = ['1'];
    public $usuario_creador;
    public $usuario_actualizador;

    public function render()
    {
        $buscar = $this->buscar;

        $consulta = Categorias::query()
            ->when(!empty($buscar), function ($query) use ($buscar) {
                return $query->where('nombre', 'LIKE', '%' . $buscar . '%');
            })
            ->paginate(20);
  


        return view('livewire.show-categorias',[
            'consulta' => $consulta,

        ]);
    }

    
    //CREAR 
    public function guardar()
    {
        $this->usuario_creador = Auth::user()->id;
        $validatedData = $this->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'usuario_creador' => 'required'
        ]);

        Categorias::create($validatedData);

        $this->alert('success', 'Creado correctamente!', [
            'position' => 'top'
        ]);
        $this->nuevo = false;
        $this->limpiarInput();
    }

    //VER
    public function ver($id)
    {
        $this->consultaVer = Categorias::find($id);
        $this->nombre = $this->consultaVer->nombre;
        $this->descripcion = $this->consultaVer->descripcion;
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

    public function getListeners()
    {
        return [
            'confirmed'
        ];
    }

    public function confirmed()
    {
        Categorias::whereIn('_id', $this->eliminarItem)->delete();
        
        $this->alert('success', 'Eliminado correctamente!', [
            'position' => 'top'
        ]);
        $this->eliminarItem=['1'];
    }

    //VER EDITAR
    public function editar($id)
    {
        $this->consultaVer = Categorias::find($id);
        $this->nombre = $this->consultaVer->nombre;
        $this->descripcion = $this->consultaVer->descripcion;
        $this->editar = true;

    }

    //ACTUALIZAR
    public function actualizar($id)
    {
        $this->usuario_actualizador = Auth::user()->id;
        $validatedData = $this->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'usuario_actualizador' => 'required'
        ]);

        Categorias::find($id)->update($validatedData);

       
        $this->editar = false;
        $this->alert('success', 'Actualizado correctamente!', [
            'position' => 'top'
        ]);

        $this->limpiarInput();
        
    }

    public function limpiarInput(){
        $this->nombre= '';
        $this->descripcion='';

    }
}