<div>
    <div class=" bg-gray-200">
        <section class="s_cover pb-24 pt-24 bg-cover bg-black-25" style="background-image: url(/img/menu.webp) ;">
            <div class="s_parallax_bg" style="background-position: 50% 0px;"></div>
            <div class="container mx-auto flex justify-center">
                <div class="w-full lg:w-auto lg:max-w-screen-xl">
                    <div class="s_title pt-0 pb-0">
                        <h1 class="text-5xl lg:text-6xl text-center text-gray-200 font-bold">{{$submenu->nombre}}</h1>
                    </div>
                </div>
            </div>
        </section>

        <div class="container mx-auto">
            <div class="row">
                <div class="col-12 text-center pt-12">
                    <hr class="border-t-2 border-red-800 w-full mx-auto mb-8">
                    <p class="lead mb-0 text-black-800">{{$submenu->descripcion}}</p>
                    <div class="s_hr pt-16 ">
                        <hr class="border-t-2 border-red-800 w-full mx-auto mb-8">
                    </div>
                </div>
            </div>
        </div>

        <div class="container mx-auto mt-10">
            <div class="flex items-center">
                <!-- Imagen a la izquierda -->
                <div class="pl-8 pb-20 mx-auto max-w-sm">
                    <img src="{{ asset($submenu->imagen) }}" alt="Descripción de la imagen" class="block mx-auto w-full rounded-lg">
                </div>
                <!-- Información y botones a la derecha -->
                <div class="w-1/2">
                    <h2 class="text-3xl font-bold mb-2">{{$submenu->subtitulo}}</h2>
                    <ul class="pl-6 list-disc text-lg text-black-800 mb-2">
                        @foreach ($submenu->contenido as $item)
                            <li><p>{{$item['value']}}</p></li>
                        @endforeach
                    </ul>
                    <div class="pt-6 flex items-center">
                        <!-- Botón rojo -->
                        <a href="{{ route('contactos') }}" class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600 transition-colors mr-2 mb-8">CONTÁCTANOS</a>
                        <!-- Botón blanco -->
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
