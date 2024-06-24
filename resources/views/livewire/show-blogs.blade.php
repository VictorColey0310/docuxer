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

        {{-- <div class="flex justify-center">
            <div class="max-w-4xl font-light">
                @foreach ($inputs as $item)
                    @switch($item['type'])
                        @case('image')
                            <img src="{{ $item['value'] ?? '' }}" alt="image" class="max-w-full h-auto">
                        @break
                        @case('subtitle')
                            <p class="text-2xl text-justify mb-2 ">
                                <b>
                                    {{ $item['value'] ?? '' }}
                                </b>
                            </p>
                        @break
                        @case('paragraph')
                            <p class="text-lg text-justify mb-2">
                                {{ $item['value'] ?? '' }}
                            </p>
                        @break
                        @case('list')
                            <li class="pl-6 text-lg font-light text-justify">
                                {{ $item['value'] ?? '' }}
                            </li>
                        @break
                    @endswitch
                @endforeach
            </div>
        </div> --}}

        <x-css-facebook class="text-red-500"/>

        <x-bi-twitter />

        <x-tabla-crud>
            <x-slot name="titulo"> {{ $nombreCrud }} </x-slot>
            <x-slot name="subtitulo"> Descripcion de {{ $nombreCrud }} </x-slot>
            <x-slot name="boton">Nuevo</x-slot>
            <x-slot name="filtro"></x-slot>
            <x-slot name="tabla">
                <x-table>
                    <x-slot name="head">
                        <x-tr class="font-semibold">
                            <th class="py-6"></th>
                        </x-tr>
                    </x-slot>

                    <x-slot name="bodytable">

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
                <input type="file" name="foto_portada" id="foto_portada" wire:model="foto_portada" class="hidden" />

                <div class="mb-4 w-full">
                    @if ($foto_portada)
                        <label for="foto_portada">
                            <label for="foto_portada" class="block text-gray-700 text-sm font-semibold mb-2">Foto de portada</label>
                            <img src="{{ $foto_portada->temporaryUrl() }}" alt="foto portada" class="object-cover w-full h-48 rounded-md">
                        </label>
                    @else
                        <label for="foto_portada" class="block text-gray-700 text-sm font-semibold mb-2">Foto de portada</label>
                        <label for="foto_portada">
                            <div class="w-full h-48 cursor-pointer hover:bg-gray-50 hover:p-4 flex justify-center items-center border-2 border-dashed rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                </svg>
                            </div>
                        </label>
                    @endif
                </div>

                <x-input-with-label wire="titulo" label="Titulo" name="titulo" id="titulo" type="text" value="" placeholder="Titulo" maxlength="200" />

                <x-textarea-label wire="descripcion" label="Descripción" name="descripcion" id="descripcion" type="text" value="" placeholder="Descripción" maxlength="500" />

                <div class="flex gap-2 w-full justify-between items-center">

                    @if (!empty($tipo_input))
                        @switch($tipo_input)
                            @case('subtitle')
                            @case('list')
                                <x-input-with-label wire="contenido" label="Contenido" name="contenido" id="contenido" type="text" value="" placeholder="Contenido" maxlength="200" />
                                @break
                            @case('paragraph')
                                <x-textarea-label wire="contenido" label="Contenido" name="contenido" id="contenido" type="text" value="" placeholder="Contenido" maxlength="500" />
                                @break
                            @case('image')
                                <input type="file" name="contenido_img" id="contenido_img" wire:model="contenido" class="hidden" />
                                    @if ($contenido)
                                    <label for="contenido_img">
                                        <label for="contenido_img" class="block text-gray-700 text-sm font-semibold mb-2">Foto</label>
                                        <img src="{{ $contenido->temporaryUrl() }}" alt="foto" class="object-cover w-24 h-24 rounded-md">
                                    </label>
                                    @else
                                    <div class="w-auto">
                                        <label for="contenido_img" class="block text-gray-700 text-sm font-semibold mb-2">Foto</label>
                                        <label for="contenido_img">
                                            <div class="w-24 h-24 cursor-pointer hover:bg-gray-50 hover:p-4 flex justify-center items-center border-2 border-dashed rounded-md">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-400">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                                </svg>
                                            </div>
                                        </label>
                                    </div>
                                    @endif
                                @break
                        @endswitch
                    @endif

                    <x-select wire="tipo_input" label="Tipo" name="tipo_input" id="tipo_input" value="" wire:change="limpiarContenido">
                        <x-slot name="option">
                            <option value="">Seleccionar</option>
                            <option value="subtitle">Subtitulo</option>
                            <option value="paragraph">Parrafo</option>
                            <option value="list">Lista</option>
                            <option value="image">Imagen</option>
                        </x-slot>
                    </x-select>

                    @if (!empty($tipo_input))
                        <x-primary-button wire:click="agregarContenido">
                            Agregar
                        </x-primary-button>
                    @endif
                </div>
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
    </x-contenedor>
</div>
