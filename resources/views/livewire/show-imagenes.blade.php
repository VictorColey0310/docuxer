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
                            <th class="py-6"></th>
                            <th>Nombre</th>
                            <th>Url</th>
                            <th>Habitacion</th>
                            <th></th>
                        </x-tr>
                    </x-slot>

                    <x-slot name="bodytable">
                        @forelse ($consultaImagenes as $item)
                            <x-tr x-data="{ openOption: false }">
                                <x-td class="w-16">
                                    <input type="checkbox" wire:model.defer="eliminarItem" x-on:click="eliminar=true" value="{{ $item->id }}" class="ml-4 border-gray-100 shadow shadow-gray-400 rounded-sm form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" />
                                </x-td>
                                <x-td>
                                    {{ $item->nombre ?? '' }}
                                </x-td>
                                <x-td>
                                    {{ $item->imagen ?? '' }}
                                </x-td>
                                <x-td>
                                    {{ $item->habitacion->nombre ?? '' }}
                                </x-td>
                                <x-td class="py-3 w-16">
                                    <x-menu-option-table x-on:click="openOption=!openOption" />
                                    <div x-cloak x-show="openOption" @click.away="openOption = false" class="sm:absolute bg-white text-center shadow-gray-300 shadow-lg rounded-md sm:mr-12">
                                        <x-boton-menu x-on:click="openOption=false" wire:click="ver('{{ $item->id }}')">Ver</x-boton-menu>
                                        <x-boton-menu x-on:click="openOption=false" wire:click="editar('{{ $item->id }}')">Editar</x-boton-menu>
                                        <x-boton-menu x-on:click="openOption=false" wire:click="eliminar('{{ $item->id }}')">Eliminar</x-boton-menu>
                                    </div>
                                </x-td>
                            </x-tr>
                        @empty
                        @endforelse
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
                <x-input-doble>
                    <x-input-with-label wire="nombre" label="Nombre" name="nombre" id="nombre" type="text" value="" placeholder="nombre" maxlength="100" />
                    <x-select wire="habitacion_id" label="Habitacion" name="habitacion_id" id="habitacion_id" value="">
                        <x-slot name="option">
                            <option value="" selected>Seleccionar</option>
                            @foreach ($consultaHabitacion as $item)
                                <option value="{{ $item->id }}">
                                    {{ $item->nombre }}
                                </option>
                            @endforeach
                        </x-slot>
                    </x-select>
                </x-input-doble>
                <x-input-doble>
                        <div class="w-full">
                        @if ($imagen)
                            <div class="flex justify-between bg-green-100 text-green-500 space-x-2 px-4 rounded-lg">
                                <div class="my-auto border-lg py-2  text-xs">
                                    <p>{{ $imagen->getClientOriginalName() }}</p>
                                </div>
                                <div class="py-2 my-auto">
                                    @svg('heroicon-s-check-circle', 'w-6 text-green-400')
                                </div>
                            </div>
                        @endif
                        <label for="imagen" class="cursor-pointer text-left italic text-[#393E46] text-sm mb-4">
                            <div
                                class="hover:bg-teal-600 bg-teal-500 text-white flex text-center text-sm not-italic mx-auto align-middle py-2 px-2 rounded-md  w-full justify-center gap-4">
                                <div class="px-1 capitalize font-bold">Imagen</div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                                </svg>
                            </div>
                        </label>
                        <input type="file" name="imagen" accept="image/" placeholder="Imagen" id="imagen"
                            hidden wire:model="imagen">
                    </div>
                </x-input-doble>

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
                    <x-input-doble>
                        <x-input-with-label wire="nombre" label="Nombre" name="nombre" id="nombre" type="text" value="" placeholder="nombre" maxlength="100" />
                        <x-select wire="habitacion_id" label="Habitacion" name="habitacion_id" id="habitacion_id" value="">
                            <x-slot name="option">
                                <option value="" selected>Seleccionar</option>
                                @foreach ($consultaHabitacion as $item)
                                    <option value="{{ $item->id }}">
                                        {{ $item->nombre }}
                                    </option>
                                @endforeach
                            </x-slot>
                        </x-select>
                    </x-input-doble>
                    <div class="flex flex-wrap gap-2 justify-evenly">
                            @if ($imagen_data)
                                <div class="w-32 h-32 overflow-hidden">
                                    <p class="text-gray-500">Imagen</p>
                                    <img src="{{ asset($imagen_data) }}" alt="ver imagen" class="w-full">
                                </div>
                            @endif
                    </div>
                    <x-input-doble>
                            <div class="w-full">
                            @if ($imagen)
                                <div class="flex justify-between bg-green-100 text-green-500 space-x-2 px-4 rounded-lg">
                                    <div class="my-auto border-lg py-2  text-xs">
                                        <p>{{ $imagen->getClientOriginalName() }}</p>
                                    </div>
                                    <div class="py-2 my-auto">
                                        @svg('heroicon-s-check-circle', 'w-6 text-green-400')
                                    </div>
                                </div>
                            @endif
                            <label for="imagen" class="cursor-pointer text-left italic text-[#393E46] text-sm mb-4">
                                <div
                                    class="hover:bg-teal-600 bg-teal-500 text-white flex text-center text-sm not-italic mx-auto align-middle py-2 px-2 rounded-md  w-full justify-center gap-4">
                                    <div class="px-1 capitalize font-bold">Imagen</div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                                    </svg>
                                </div>
                            </label>
                            <input type="file" name="imagen" accept="image/" placeholder="Imagen" id="imagen"
                                hidden wire:model="imagen">
                        </div>
                    </x-input-doble>

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
                    <x-input-doble>
                        <x-input-with-label wire="nombre" label="Nombre" name="nombre" id="nombre" type="text" value="" placeholder="nombre" maxlength="100" disabled/>
                        <x-select wire="habitacion_id" label="Habitacion" name="habitacion_id" id="habitacion_id" value="" disabled>
                            <x-slot name="option">
                                <option value="" selected>Seleccionar</option>
                                @foreach ($consultaHabitacion as $item)
                                    <option value="{{ $item->id }}">
                                        {{ $item->nombre }}
                                    </option>
                                @endforeach
                            </x-slot>
                        </x-select>
                    </x-input-doble>
                    <div class="flex flex-wrap gap-2 justify-evenly">
                        @if ($imagen_data)
                            <div class="w-32 h-32 overflow-hidden">
                                <img src="{{ asset($imagen_data) }}" alt="ver imagen" class="w-full">
                            </div>
                        @endif
                    </div>
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