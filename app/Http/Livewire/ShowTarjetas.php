<?php
namespace App\Http\Livewire;

use App\Models\Submenu;
use App\Models\Tarjetas;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class ShowTarjetas extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    use WithPagination;
    public $nombreCrud = 'Tarjetas';

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
    public $icono;
    public $codigo;
    public $descripcion;
    public $imagen;
    public $imagen_data;
    public $submenu_id;

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
        $consulta = Tarjetas::query()
        ->when(!empty($buscar), function ($query) use ($buscar) {
            return $query->where('nombre', 'LIKE', '%' . $buscar . '%');
        })
        ->get();

        $consulta_submenu = Submenu::get();

        return view('livewire.show-tarjetas', [
            'consulta' => $consulta,
            'consulta_submenu' => $consulta_submenu,
        ]);
    }

    //CREAR
    public function guardar()
    {
        $this->icono = $this->codigo;

        if ($this->imagen) {
            $this->imagen = $this->imagen->store('storage');
        }

        $validatedData = $this->validate([
            'nombre' => 'required',
            'icono' => 'required',
            'user_id' => 'required',
            'empresa_id' => 'required',
            'codigo' => 'required',
            'url' => 'required',
            'imagen' => 'required',
            'descripcion' => 'required',
            'submenu_id'=> 'required',
        ]);


        $tarjetas = Tarjetas::create($validatedData);

        $this->alert('success', 'Creado correctamente!', [
            'position' => 'top'
        ]);

        $this->nuevo = false;
        $this->limpiarInput();

    }

    //VER
    public function ver($id)
    {
        $this->consultaVer = Tarjetas::find($id);
        $this->nombre = $this->consultaVer->nombre;
        $this->url = $this->consultaVer->url;
        $this->icono = $this->consultaVer->icono;
        $this->codigo = $this->consultaVer->codigo;
        $this->descripcion = $this->consultaVer->descripcion;
        $this->imagen = $this->consultaVer->imagen;
        $this->submenu_id = $this->consultaVer->submenu->nombre;
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
        Tarjetas::whereIn('_id', $this->eliminarItem)->delete();
        $this->alert('success', 'Eliminado correctamente!', [
            'position' => 'top'
        ]);
        $this->eliminarItem = ['1'];
    }

    //VER EDITAR
    public function editar($id)
    {
        $this->consultaVer = Tarjetas::find($id);
        $this->nombre = $this->consultaVer->nombre;
        $this->url = $this->consultaVer->url;
        $this->codigo = $this->consultaVer->codigo;
        $this->icono = $this->consultaVer->icono;
        $this->descripcion = $this->consultaVer->descripcion;
        $this->imagen_data = $this->consultaVer->imagen;
        $this->submenu_id = $this->consultaVer->submenu_id;
        $this->editar = true;
    }

    //ACTUALIZAR
    public function actualizar($id)
    {
        $this->icono = $this->codigo;

        $this->validate([
            'nombre' => 'required',
            'url' => 'required',
            'codigo' => 'required',
            'icono' => 'required',
            'descripcion'=> 'required',
            'imagen' => 'nullable',
            'submenu_id' => 'required',
        ], [
            'nombre.required' => 'El nombre es obligatorio.',
            'url.required' => 'La url es obligatoria.',
            'codigo.required' => 'El codigo es obligatorio.',
            'icono.required' => 'El icono es obligatorio.',
            'descripcion.required'=> 'La descripcion es obligatoria.',
            'imagen.required' => 'La imagen es obligatoria.',
            'submenu_id.required' => 'El submenu es obligatorio.',
        ]);

        if ($this->imagen) {
            $url_imagen = $this->imagen->store('storage', ['disk' => 'local']);
        } else {
            $url_imagen = $this->imagen_data;
        }

        $tarjetas = Tarjetas::find($id);

        if ($tarjetas) {
            $tarjetas->update([
                'nombre' => $this->nombre,
                'url' => $this->url,
                'codigo' => $this->codigo,
                'icono' => $this->icono,
                'descripcion'=> $this->descripcion,
                'imagen' => $url_imagen,
                'user_id' => $this->user_id,
                'submenu_id' => $this->submenu_id,
            ]);

            $this->limpiarInput();
            $this->alert('success', 'Actualizado correctamente!', [
                'position' => 'top'
            ]);
        } else {
            $this->alert('error', 'Slider no encontrado!', [
                'position' => 'top'
            ]);
        }
    }

    public function limpiarInput()
    {
        $this->ver = false;
        $this->editar = false;
        $this->nuevo = false;

        $this->nombre = '';
        $this->url = '';
        $this->codigo = '';
        $this->icono = '';
        $this->descripcion = '';
        $this->imagen = '';
        $this->submenu_id = '';
    }

}
