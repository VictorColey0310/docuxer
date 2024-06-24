<div x-data="{
    nuevo: @entangle('nuevo'),
    editar: @entangle('editar'),
    ver: @entangle('ver'),
    eliminar: false,
    closeModal() {
        if (this.nuevo) {
            this.nuevo = false;
        }
        if (this.editar) {
            this.editar = false;
        }
        if (this.ver) {
            this.ver = false;
        }
    }
}" @keydown.escape="closeModal" tabindex="0" class="h-full w-full md:my-2">
    <x-contenedor>
        {{-- Carga --}}
        @include('components/loading')

        <x-tabla-crud>
            <x-slot name="titulo"> {{ $nombreCrud }} </x-slot>
            <x-slot name="subtitulo"> Descripcion de {{ $nombreCrud }} </x-slot>
            <x-slot name="boton">Nuevo</x-slot>
            <x-slot name="filtro"></x-slot>
            <x-slot name="tabla">
                {{-- Tabla lista --}}
                <x-table>
                    <x-slot name="head">
                        <x-tr class="font-semibold">
                            <th class="py-6">Dirección</th>
                            <th class="py-6"></th>
                        </x-tr>
                    </x-slot>

                    <x-slot name="bodytable">

                        @if($consulta)
                        <x-tr x-data="{ openOption: false }">
                            <x-td class="w-16">
                                <input type="checkbox" wire:model.defer="eliminarItem" x-on:click="eliminar=true"
                                    value="{{ $consulta->id }}"
                                    class="ml-4 border-gray-100 shadow shadow-gray-400 rounded-sm form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" />
                            </x-td>

                            <x-td wire:click="ver('{{ $consulta->id }}')">{{ $consulta->address ?? '' }}</x-td>

                            <x-td class="py-3 w-16">
                                <x-menu-option-table x-on:click="openOption=!openOption" />
                                <div x-cloak x-show="openOption" @click.away="openOption = false"
                                    class="sm:absolute bg-white text-center shadow-gray-300 shadow-lg rounded-md sm:mr-12">
                                    <x-boton-menu x
                                </div>
                            </x-td>
                        </x-tr>
                        @else
                        <x-tr>
                            <x-td colspan="3" class="text-center">No hay registros</x-td>
                        </x-tr>
                        @endif


                    </x-slot>
                    <x-slot name="link">
                    </x-slot>
                </x-table>
            </x-slot>
        </x-tabla-crud>

        {{-- Modal añadir --}}
        <x-modal-crud x-show="nuevo">
            <x-slot name="titulo"> Crear {{ $nombreCrud }} </x-slot>

            <x-slot name="campos">

                <div>
                    <label>Dirección:</label>
                    <input type="text" wire:model="address" placeholder="Enter address">
                    <button type="button" wire:click="searchCoordinates">Buscar</button>
                </div>
                @if($latitude && $longitude)
                    <div id="map" style="height: 400px; width:100%;"></div>
                @endif



            </x-slot>

            <x-slot name="botones">
                <x-secondary-button wire:click="limpiarInput">
                    Cerrar
                </x-secondary-button>
                <x-primary-button wire:click="guardar">
                    Guardar
                </x-primary-button>
            </x-slot>

        </x-modal-crud>

        {{-- Modal editar --}}
        <x-modal-crud x-cloak x-show="editar">
            <x-slot name="titulo"> Editar {{ $nombreCrud }} </x-slot>
            @if (!empty($consultaVer))
                <x-slot name="campos">


                </x-slot>
                <x-slot name="botones">

                    <x-secondary-button wire:click="limpiarInput">Cerrar
                    </x-secondary-button>
                    <x-primary-button wire:click="actualizar('{{ $consultaVer->id }}')">
                        Guardar
                    </x-primary-button>

                </x-slot>
            @else
                <x-slot name="campos">

                </x-slot>
                <x-slot name="botones">

                </x-slot>
            @endif

        </x-modal-crud>

        {{-- Modal ver --}}
        <x-modal-crud x-show="ver">
            <x-slot name="titulo"> Ver {{ $nombreCrud }}</x-slot>

            @if (!empty($consultaVer))
                <x-slot name="campos">

                    <div>
                        <label>Dirección:</label>
                        <p>{{ $address }}</p>

                    </div>
                    @if($latitude && $longitude)
                    @endif

                </x-slot>

                <x-slot name="botones">
                    <x-secondary-button wire:click="limpiarInput">Cerrar</x-secondary-button>
                    <x-primary-button wire:click="editar('{{ $consultaVer->id }}')">
                        Editar
                    </x-primary-button>
                </x-slot>
            @else
                <x-slot name="campos">
                </x-slot>
                <x-slot name="botones">
                </x-slot>
            @endif

        </x-modal-crud>
        <div id="map2" style="height: 400px; width:100%; "></div>
    </x-contenedor>
</div>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>



<script>
    document.addEventListener('livewire:load', function () {
    @this.on('coordinatesUpdated', () => {
        console.log('Coordinates Updated:', @this.latitude, @this.longitude);
        var mapElement = document.getElementById('map');
        if (mapElement) {
            console.log('Map Element Found');
            // Si el mapa ya existe, lo removemos para evitar múltiples instancias
            if (window.currentMap) {
                window.currentMap.remove();
            }
            // Inicializamos el mapa
            window.currentMap = L.map(mapElement).setView([@this.latitude, @this.longitude], 15);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(window.currentMap);

            L.marker([@this.latitude, @this.longitude]).addTo(window.currentMap);
        } else {
            console.log('Map Element Not Found');
        }
    });
});
</script>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var latitude = @this.latitude;
            var longitude = @this.longitude;

            var mapElement = document.getElementById('map2');
            if (mapElement) {
                console.log('Map Element Found');
                // Inicializamos el mapa
                var map = L.map(mapElement).setView([latitude, longitude], 15);

                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                L.marker([latitude, longitude]).addTo(map);
            } else {
                console.error('Map Element Not Found');
            }
        });
    </script>
