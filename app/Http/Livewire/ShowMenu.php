<?php
namespace App\Http\Livewire;

use App\Models\Menu;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class ShowMenu extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    use WithPagination;
    public $nombreCrud = 'Menu';

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
    public $consultaVer;
    public $nombre;
    public $url;


    public function getListeners()
    {
        return [
            'confirmed',
            'mensajeEnviado'
        ];
    }

    public function mensajeEnviado($empresa_id)
    {
        $this->empresa_id= $empresa_id->id;
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
        $consulta = Menu::query()
            ->when(!empty($buscar), function ($query) use ($buscar) {
                return $query->where('nombre', 'LIKE', '%' . $buscar . '%');
            })
            ->paginate(20);


        return view('livewire.show-menu', [
            'consulta' => $consulta
        ]);
    }

    //CREAR
    public function guardar()
    {
        $validatedData = $this->validate([
            'nombre' => 'required',
            'url' => 'required',
            'user_id' => 'required',
            'empresa_id' => 'required',
        ]);

        Menu::create($validatedData);

        $this->alert('success', 'Creado correctamente!', [
            'position' => 'top'
        ]);
        $this->nuevo = false;
        $this->limpiarInput();
    }

    //VER
    public function ver($id)
    {

        $this->consultaVer = Menu::find($id);
        $this->nombre = $this->consultaVer->nombre;
        $this->url = $this->consultaVer->url;
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
        Menu::whereIn('_id', $this->eliminarItem)->delete();
        $this->alert('success', 'Eliminado correctamente!', [
            'position' => 'top'
        ]);
        $this->eliminarItem = ['1'];
    }

    //VER EDITAR
    public function editar($id)
    {
            $this->consultaVer = Menu::find($id);
            $this->nombre = $this->consultaVer->nombre;
            $this->url = $this->consultaVer->url;
            $this->editar = true;
    }

    //ACTUALIZAR
    public function actualizar($id)
    {
        $this->validate([
            'nombre' => 'required',
            'url' => 'required',

        ], [
            'nombre.required' => 'El nombre es obligatorio',
            'url.required' => 'La URL es obligatoria.',
        ]);

        $menu = Menu::find($id);

        if (!$menu) {
            $this->alert('error', 'Título no encontrado!', ['position' => 'top']);
            return;
        }


        $menu->update([
            'nombre' => $this->nombre,
            'url' => $this->url,
            'user_id' => $this->user_id,
        ]);

        $this->limpiarInput();
        $this->alert('success', '¡Actualizado correctamente!', ['position' => 'top']);
    }

    public function limpiarInput()
    {
        $this->ver = false;
        $this->editar = false;
        $this->nuevo = false;

        $this->nombre= '';
        $this->url = '';

    }

}
