<?php
namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Http;
use App\Models\Mapa;

class ShowMapa extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    use WithPagination;

    public $nombreCrud = 'Mapa';

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

    // Address fields
    public $address;
    public $latitude;
    public $longitude;

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

        $consulta = Mapa::where('user_id', $this->user_id)->first();

            if ($consulta) {
            $this->address = $consulta->address;
            $this->latitude = $consulta->latitude;
            $this->longitude = $consulta->longitude;
        }


        return view('livewire.show-mapa', [
            'consulta' => $consulta,
        ]);

    }

    // Método para buscar coordenadas
    public function searchCoordinates()
    {
        $response = Http::get('https://nominatim.openstreetmap.org/search', [
            'q' => $this->address,
            'format' => 'json',
            'addressdetails' => 1,
            'limit' => 1,
        ]);

        $data = $response->json();

        if (!empty($data)) {
            $this->latitude = $data[0]['lat'];
            $this->longitude = $data[0]['lon'];

            $this->alert('success', 'Dirección encontrada y coordenadas obtenidas!', [
                'position' => 'top'
            ]);

            $this->emit('coordinatesUpdated');
        } else {
            $this->alert('error', 'No se pudo encontrar la dirección.', [
                'position' => 'top'
            ]);
        }

    }

    // CREAR
    public function guardar()
    {
        $validatedData = $this->validate([
            'empresa_id' => ['required'],
            'user_id' => ['required'],
            'address' => ['required'],
            'latitude' => ['required'],
            'longitude' => ['required'],
        ]);

        Mapa::create([
            'empresa_id' => $this->empresa_id,
            'user_id' => $this->user_id,
            'address' => $this->address,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
        ]);

        $this->alert('success', 'Creado correctamente!', [
            'position' => 'top'
        ]);

        $this->nuevo = false;
        $this->limpiarInput();
    }

    // VER
    public function ver($id)
    {
        $this->consultaVer = Mapa::find($id);

        if ($this->consultaVer) {
            $this->address = $this->consultaVer->address;
            $this->latitude = $this->consultaVer->latitude;
            $this->longitude = $this->consultaVer->longitude;

            $this->searchCoordinates();

            $this->ver = true;

        }
    }

    // ELIMINAR
    public function eliminar($id)
    {
        $this->eliminarItem[] = $id;
        $this->alert('warning', '¿Eliminar?', [
            'position' => 'center',
            'timer' => '10000',
            'toast' => false,
            'text' => 'Está seguro',
            'showConfirmButton' => true,
            'onConfirmed' => 'confirmed',
            'showDenyButton' => false,
            'onDenied' => '',
            'showCancelButton' => true,
            'onDismissed' => '',
            'cancelButtonText' => 'Salir',
            'confirmButtonText' => 'Sí',
        ]);
    }

    public function confirmed()
    {
        Mapa::destroy($this->eliminarItem);

        $this->alert('success', 'Eliminado correctamente!', [
            'position' => 'top'
        ]);

        $this->eliminarItem = ['1'];
    }

    // VER EDITAR
    public function editar($id)
    {
        $address = Mapa::find($id);
        $this->address = $address->address;
        $this->latitude = $address->latitude;
        $this->longitude = $address->longitude;

        $this->ver = false;
        $this->editar = true;
    }

    // ACTUALIZAR
    public function actualizar($id)
    {
        $validatedData = $this->validate([
            'address' => ['required'],
            'latitude' => ['required'],
            'longitude' => ['required'],
        ]);

        $address = Mapa::find($id);
        $address->update([
            'address' => $this->address,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
        ]);

        $this->editar = false;

        $this->alert('success', 'Actualizado correctamente!', [
            'position' => 'top'
        ]);

        $this->limpiarInput();
    }

    public function limpiarInput()
    {
        $this->ver = false;
        $this->editar = false;
        $this->nuevo = false;
        $this->address = '';
        $this->latitude = '';
        $this->longitude = '';
    }
}
