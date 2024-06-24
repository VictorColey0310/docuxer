<div class="overflow-hidden">

    <div class="min-h-[200px] bg-teal-500 flex items-center justify-center">
        <div class=" py-20 bg-teal-500  items-center ">
            <div class="container mx-auto text-white">

                <div class=" text-center">
                    <h1 class="text-4xl font-bold mb-2 max-w-2xl mx-auto " data-aos="fade-down" data-aos-easing="linear"
                        data-aos-duration="500">CONVENIOS</h1>
                </div>

            </div>
        </div>
        <div class="av-extra-border-element border-extra-arrow-down bg-teal-500"></div>
    </div>


    @foreach ($grupo_convenios as $grupo_convenio)
        <div class=" mx-auto w-full justify-between px-4 lg:px-20">
            <h4 class="text-xl text-[#3DC1B7] text-center font-bold my-4 uppercase" data-aos="fade-down"
                data-aos-easing="linear" data-aos-duration="500">{{ $grupo_convenio->titulo }}</h4>
            <div class="max-w-7xl mx-auto lg:my-12 flex justify-end">
                <!-- Aquí agregué 'justify-end' para alinear a la derecha -->
                <div class=" mx-auto sm:justify-between sm:flex sm:space-x-4  space-y-4 sm:space-y-0">
                    @foreach ($grupo_convenio->convenios as $convenio)
                        <div class=" border rounded-lg overflow-hidden max-w-lg ">
                            <div class="p-4">
                                <h4 class="text-xl text-[#3DC1B7] font-bold uppercase mb-2">{{ $convenio->nombre }}</h4>
                                <div class="max-w-xs mx-auto my-2">
                                    <img src="{{ asset($convenio->imagen) }}" class="w-full sm:w-48 object-cover mx-auto" alt="Imagen 1"  data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500">
                                  
                                </div>
                                <p class="text-gray-700">{{ $convenio->descripcion }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endforeach

</div>
