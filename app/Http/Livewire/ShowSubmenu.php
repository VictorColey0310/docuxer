<?php
namespace App\Http\Livewire;

use App\Models\Menu;
use App\Models\Submenu;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class ShowSubmenu extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    use WithPagination;
    public $nombreCrud = 'Submenu';

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
    public $url;
    public $nombre;
    public $menu_id;
    public $subtitulo;
    public $descripcion;
    public $imagen;
    public $imagen_data;
    public $contenido;
    public $tipo_input;
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
        $consulta = Submenu::query()
            ->when(!empty($buscar), function ($query) use ($buscar) {
                return $query->where('nombre', 'LIKE', '%' . $buscar . '%');
            })
            ->get();

            $consulta_menu = Menu::get();

        return view('livewire.show-submenu', [
            'consulta' => $consulta,
            'consulta_menu' => $consulta_menu,
        ]);
    }

    //CREAR
    public function guardar()
    {
        $validatedData = $this->validate([
            'menu_id' => 'required',
            'nombre' => 'required',
            'subtitulo' => 'required',
            'descripcion' => 'required',
            'imagen' => 'nullable|image',
            'contenido' => 'nullable',
            'user_id' => 'required',
            'empresa_id' => 'required',
            'url' => 'required',
        ]);

        if ($this->imagen) {

            $url_imagen = $this->imagen->store('storage', ['disk' => 'local']);

        } else {
            $url_imagen = null;
        }

        $validatedData['imagen'] = $url_imagen;
        $validatedData['contenido'] = $this->inputs;

        $convenios = Submenu::create($validatedData);

        $this->alert('success', 'Creado correctamente!', [
            'position' => 'top'
        ]);

        $this->nuevo = false;
        $this->limpiarInput();
    }

    //VER
    public function ver($id)
    {
        $this->consultaVer = Submenu::find($id);
        $this->menu_id = $this->consultaVer->menu->nombre;
        $this->nombre = $this->consultaVer->nombre;
        $this->subtitulo = $this->consultaVer->subtitulo;
        $this->descripcion = $this->consultaVer->descripcion;
        $this->imagen_data = $this->consultaVer->imagen;
        $this->contenido = $this->consultaVer->contenido;
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
        Submenu::whereIn('_id', $this->eliminarItem)->delete();
        $this->alert('success', 'Eliminado correctamente!', [
            'position' => 'top'
        ]);
        $this->eliminarItem = ['1'];
    }

    //VER EDITAR
    public function editar($id)
    {
        $this->consultaVer = Submenu::find($id);
        $this->menu_id = $this->consultaVer->menu_id;
        $this->nombre = $this->consultaVer->nombre;
        $this->subtitulo = $this->consultaVer->subtitulo;
        $this->descripcion = $this->consultaVer->descripcion;
        $this->imagen_data = $this->consultaVer->imagen;
        $this->contenido = $this->consultaVer->contenido;
        $this->url = $this->consultaVer->url;
        $this->editar = true;
    }

    //ACTUALIZAR
    public function actualizar($id)
    {
        $this->validate([
            'menu_id' => 'required',
            'nombre' => 'required',
            'subtitulo' => 'required',
            'descripcion' => 'required',
            'imagen' => 'nullable|image',
            'url' => 'required',

        ], [
            'menu_id.required' => 'El menú es obligatorio',
            'nombre.required' => 'El nombre es obligatorio',
            'subtitulo.required' => 'El subtitulo es obligatorio',
            'descripcion.required' => 'La descripción es obligatoria',
            'url.required' => 'La URL es obligatoria.',

        ]);

        if ($this->imagen) {
            $url_imagen = $this->imagen->store('storage', ['disk' => 'local']);
        } else {
            $url_imagen = $this->imagen_data;
        }

        $submenu = Submenu::find($id);

        if (!$submenu) {
            $this->alert('error', 'Título no encontrado!', ['position' => 'top']);
            return;
        }

        $submenu->update([
            'menu_id' => $this->menu_id,
            'nombre' => $this->nombre,
            'subtitulo' => $this->subtitulo,
            'descripcion' => $this->descripcion,
            'imagen' => $url_imagen,
            'url' => $this->url,
            'user_id' => $this->user_id,
        ]);

        $this->limpiarInput();
        $this->alert('success', '¡Actualizado correctamente!', ['position' => 'top']);
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
        $this->nuevo = false;
        $this->editar = false;
        $this->ver = false;

        $this->menu_id = '';
        $this->nombre = '';
        $this->url = '';
        $this->subtitulo = '';
        $this->descripcion = '';
        $this->imagen_data = null;
        $this->contenido = '';
    }

    public function removeImage()
    {
        $this->imagen = '';
    }

    public function eliminarArchivoEditar(){

        $this->anexo_data='';
        $this->escenario_data='';
        $this->imagen_data= '';
    }

}
