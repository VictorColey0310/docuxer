<div>
    <div class="min-h-[200px] bg-teal-500 flex items-center justify-center">
        <div class=" py-20 bg-teal-500  items-center ">
            <div class="container mx-auto text-white">

                <div class=" text-center">
                    <h1 class="text-4xl font-bold mb-2 max-w-2xl mx-auto " data-aos="fade-down" data-aos-easing="linear"
                        data-aos-duration="500">AUXILIOS</h1>
                </div>

            </div>
        </div>
        <div class="av-extra-border-element border-extra-arrow-down bg-teal-500"></div>
    </div>

    <div class="container mx-auto px-4 lg:px-20">
        <h4 class="text-xl text-[#3DC1B7] text-center font-bold my-4 sm:my-8 uppercase" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500">FONDO DE SOLIDARIDAD Y BIENESTAR SOCIAL</h4>
        <p class="text-lg text-gray-700 mb-4" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500">El Fondo de Solidaridad otorga a los asociados los siguientes auxilios:</p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Primer cuadro -->
            <div class="border rounded-lg overflow-hidden">
                <img src="{{ asset('img/auxilio1.webp') }}" class="w-full h-auto" alt="Imagen 1">
                <div class="p-4">
                    <h4 class="text-xl text-[#3DC1B7] font-bold uppercase mb-2">Auxilio por nacimiento de hijos del asociado</h4>
                    <p class="text-lg text-gray-700 mb-2">MONTO DEL AUXILIO = $500.000</p>
                    <div x-data="{ open: false }">
                            <h4 class="text-xl text-[#3DC1B7] font-bold uppercase mb-2"></h4>
                            <button @click="open = !open" class="flex items-center justify-between w-full text-left py-2 px-4 rounded-md text-gray-500 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:bg-gray-200" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500">
                                <span>Ver requisitos</span>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                                </svg>
                            </button>
                            <div x-show="open" class="bg-white shadow-lg py-2 px-4 mt-2 rounded-lg mb-1">
                                <ul class=" pl-6" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500">
                                    <li class="text-lg text-gray-700 mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="w-6 h-6 inline-block mr-2 text-[#3DC1B7]">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                        </svg>
                                        Formulario de Auxilio de Solidaridad debidamente diligenciado.
                                    </li>
                                    <li class="text-lg text-gray-700 mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="w-6 h-6 inline-block mr-2 text-[#3DC1B7]">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                        </svg>
                                        Copia Registro Civil de Nacimiento.
                                    </li>
                                    <li class="text-lg text-gray-700 mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="w-6 h-6 inline-block mr-2 text-[#3DC1B7]">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                        </svg>
                                        3 meses de antigüedad.
                                    </li>
                                </ul>
                            </div>
                    </div>
                </div>
            </div>

            <!-- Segundo cuadro -->
            <div class="border rounded-lg overflow-hidden">
                <img src="{{ asset('img/auxilio2.webp') }}" class="w-full h-auto" alt="Imagen 2">
                <div class="p-4">
                    <h4 class="text-xl text-[#3DC1B7] font-bold uppercase mb-2">Auxilio por matrimonio</h4>
                    <p class="text-lg text-gray-700 mb-2">MONTO DEL AUXILIO = $500.000</p>
                    <div x-data="{ open: false }">
                        <h4 class="text-xl text-[#3DC1B7] font-bold uppercase mb-2"></h4>
                        <button @click="open = !open" class="flex items-center justify-between w-full text-left py-2 px-4 rounded-md text-gray-500 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:bg-gray-200" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500">
                            <span>Ver requisitos</span>
                            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                            </svg>
                        </button>
                        <div x-show="open" class="bg-white shadow-lg py-2 px-4 mt-2 rounded-lg mb-1">
                            <ul class=" pl-6" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500">
                                <li class="text-lg text-gray-700 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 inline-block mr-2 text-[#3DC1B7]">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                    </svg>
                                    Formulario de Auxilio de Solidaridad debidamente diligenciado.
                                </li>
                                <li class="text-lg text-gray-700 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 inline-block mr-2 text-[#3DC1B7]">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                    </svg>
                                    Copia Registro Civil de Matrimonio.
                                </li>
                                <li class="text-lg text-gray-700 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 inline-block mr-2 text-[#3DC1B7]">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                    </svg>
                                    3 meses de antigüedad.
                                </li>
                            </ul>
                        </div>
                </div>
                </div>
            </div>

            <!-- Tercer cuadro -->
            <div class="border rounded-lg overflow-hidden">
                <img src="{{ asset('img/auxilio3.webp') }}" class="w-full h-auto" alt="Imagen 3">
                <div class="p-4">
                    <h4 class="text-xl text-[#3DC1B7] font-bold uppercase mb-2">Auxilio Oftalmológico</h4>
                    <p class="text-lg text-gray-700 mb-2">MONTO DEL AUXILIO = $150.000</p>
                    <div x-data="{ open: false }">
                        <h4 class="text-xl text-[#3DC1B7] font-bold uppercase mb-2"></h4>
                        <button @click="open = !open" class="flex items-center justify-between w-full text-left py-2 px-4 rounded-md text-gray-500 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:bg-gray-200" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500">
                            <span>Ver requisitos</span>
                            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                            </svg>
                        </button>
                        <div x-show="open" class="bg-white shadow-lg py-2 px-4 mt-2 rounded-lg mb-1">
                            <ul class=" pl-6" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500">
                                <li class="text-lg text-gray-700 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 inline-block mr-2 text-[#3DC1B7]">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                    </svg>
                                    Factura Electrónica.
                                </li>
                                <li class="text-lg text-gray-700 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 inline-block mr-2 text-[#3DC1B7]">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                    </svg>
                                    3 meses de antigüedad.
                                </li>
                            </ul>
                        </div>
                </div>
                </div>
            </div>

            <!-- Cuarto cuadro -->
            <div class="border rounded-lg overflow-hidden">
                <img src="{{ asset('img/auxilio4.webp') }}" class="w-full h-auto" alt="Imagen 4">
                <div class="p-4">
                    <h4 class="text-xl text-[#3DC1B7] font-bold uppercase mb-2">Auxilio por muerte del asociado y su grupo básico familiar</h4>
                    <p class="text-lg text-gray-700 mb-2">MONTO DEL AUXILIO = $500.000</p>
                    <div x-data="{ open: false }">
                        <h4 class="text-xl text-[#3DC1B7] font-bold uppercase mb-2"></h4>
                        <button @click="open = !open" class="flex items-center justify-between w-full text-left py-2 px-4 rounded-md text-gray-500 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:bg-gray-200" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500">
                            <span>Ver requisitos</span>
                            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                            </svg>
                        </button>
                        <div x-show="open" class="bg-white shadow-lg py-2 px-4 mt-2 rounded-lg mb-1">
                            <ul class=" pl-6" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500">
                                <li class="text-lg text-gray-700 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 inline-block mr-2 text-[#3DC1B7]">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                    </svg>
                                    Copia Registro Civil de defunción para auxilio por muerte de un familiar.
                                </li>
                                <li class="text-lg text-gray-700 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 inline-block mr-2 text-[#3DC1B7]">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                    </svg>
                                    3 meses de antigüedad.
                                </li>
                            </ul>
                        </div>
                </div>
                </div>
            </div>

            <!-- Quinto cuadro -->
            <div class="border rounded-lg overflow-hidden">
                <img src="{{ asset('img/auxilio5.webp') }}" class="w-full h-auto" alt="Imagen 5">
                <div class="p-4">
                    <h4 class="text-xl text-[#3DC1B7] font-bold uppercase mb-2">Por accidentes o eventualidades graves del asociado.</h4>
                    <p class="text-lg text-gray-700 mb-2">MONTO DEL AUXILIO = $500.000</p>
                    <div x-data="{ open: false }">
                        <h4 class="text-xl text-[#3DC1B7] font-bold uppercase mb-2"></h4>
                        <button @click="open = !open" class="flex items-center justify-between w-full text-left py-2 px-4 rounded-md text-gray-500 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:bg-gray-200" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500">
                            <span>Ver requisitos</span>
                            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                            </svg>
                        </button>
                        <div x-show="open" class="bg-white shadow-lg py-2 px-4 mt-2 rounded-lg mb-1">
                            <ul class=" pl-6" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500">
                                <li class="text-lg text-gray-700 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 inline-block mr-2 text-[#3DC1B7]">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                    </svg>
                                    Formulario de Auxilio de Solidaridad debidamente diligenciado.
                                </li>
                                <li class="text-lg text-gray-700 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 inline-block mr-2 text-[#3DC1B7]">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                    </svg>
                                    Certificados de la entidad correspondiente de acuerdo a la calamidad o contingencia del
                                    asociado.
                                </li>
                                <li class="text-lg text-gray-700 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 inline-block mr-2 text-[#3DC1B7]">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                    </svg>
                                    3 meses de antigüedad.
                                </li>
                            </ul>
                        </div>
                </div>
                </div>
            </div>

            <!-- Sexto cuadro -->
            <div class="border rounded-lg overflow-hidden">
                <img src="{{ asset('img/auxilio6.webp') }}" class="w-full h-auto" alt="Imagen 6">
                <div class="p-4">
                    <h4 class="text-xl text-[#3DC1B7] font-bold uppercase mb-2">Pensionado retirado de la compañía</h4>
                    <p class="text-lg text-gray-700 mb-2">MONTO DEL AUXILIO = $500.000</p>
                    <div x-data="{ open: false }">
                        <h4 class="text-xl text-[#3DC1B7] font-bold uppercase mb-2"></h4>
                        <button @click="open = !open" class="flex items-center justify-between w-full text-left py-2 px-4 rounded-md text-gray-500 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:bg-gray-200" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500">
                            <span>Ver requisitos</span>
                            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                            </svg>
                        </button>
                        <div x-show="open" class="bg-white shadow-lg py-2 px-4 mt-2 rounded-lg mb-1">
                            <ul class=" pl-6" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500">
                                <li class="text-lg text-gray-700 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 inline-block mr-2 text-[#3DC1B7]">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                    </svg>
                                    Formulario de Auxilio de Solidaridad debidamente diligenciado.
                                </li>
                                <li class="text-lg text-gray-700 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 inline-block mr-2 text-[#3DC1B7]">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                    </svg>
                                    Copia Resolución de Pensión.
                                </li>
                                <li class="text-lg text-gray-700 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 inline-block mr-2 text-[#3DC1B7]">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                    </svg>
                                    3 meses de antigüedad.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 my-8 lg:px-20">
        <h4 class="text-xl text-[#3DC1B7] text-center font-bold my-4 uppercase" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500">SOLICITUD Y TÉRMINO</h4>
        <p class="text-lg text-gray-700 mb-4" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500">Los asociados tienen un plazo de tres (3) meses a partir de la
            fecha en que sucedan los hechos, pasado este tiempo se perderá el derecho a solicitarlo.</p>
    </div>

    <div class=" pb-8 bg-gray-50  my-8 ">
        <div class="container mx-auto flex flex-wrap ">
            <div class="w-full md:w-1/2 md:px-8 px-4">

                 <h1 class="text-2xl text-[#3DC1B7] text-center font-bold my-8" data-aos="fade-down"
                    data-aos-easing="linear" data-aos-duration="500">PÓLIZA DE PREVISIÓN EXEQUIAL</h1>

                 <p class="text-lg text-gray-700 mb-4" data-aos="fade-down" data-aos-easing="linear"
                    data-aos-duration="500">Con el objetivo de beneficiar a los asociados y a sus familias el
                    Fondo de Empleados pone a su disposición la póliza de Previsión Exequial Coorserpark, la cual no
                    tiene ningún costo para los asociados y ofrece un cobertura total para el asociado y su grupo
                    familiar.</p>
            </div>

            <div class="w-full md:w-1/2 md:px-8 px-4">
                <div class="w-full md:w-1/2 ">
                    <h4 class="text-xl text-[#3DC1B7] font-bold uppercase mb-2 p-8">¡PREVISIÓN ES PENSAR EN EL FUTURO DE QUIENES AMAMOS!</h4>
                    <img src="./img/coorserpark.webp" alt="Descripción de la imagen" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500" class="w-full h-full rounded-2xl ">
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 lg:px-20">
        <h4 class="text-xl text-[#3DC1B7] text-center font-bold my-4 sm:my-8 uppercase" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500">BENEFICIOS CUBIERTOS POR LA PÓLIZA EXEQUIAL</h4>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Primer cuadro -->
            <div class="border rounded-lg overflow-hidden">
                <img src="{{ asset('img/presidencial.webp') }}" class="w-full sm:h-48 object-cover" alt="Imagen 1">
                <div class="p-4">
                    <h4 class="text-xl text-[#3DC1B7] font-bold uppercase mb-2">PLAN PRESIDENCIAL</h4>
                    <p class="text-lg text-gray-700 mb-2">
                        1 TITULAR + <br>
                        11 BENEFICIARIOS
                    </p>
                    <div x-data="{ open: false }">
                        <h4 class="text-xl text-[#3DC1B7] font-bold uppercase mb-2"></h4>
                        <button @click="open = !open" class="flex items-center justify-between w-full text-left py-2 px-4 rounded-md text-gray-500 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:bg-gray-200" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500">
                            <span>Ver beneficios</span>
                            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                            </svg>
                        </button>
                        <div x-show="open" class="bg-white shadow-lg py-2 px-4 mt-2 rounded-lg mb-1">
                            <ul class=" pl-6" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500">
                                <li class="text-lg text-gray-700 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 inline-block mr-2 text-[#3DC1B7]">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                    </svg>
                                    4 personas sin límite de edad (entre titular cónyuge, padres o suegros)
                                </li>
                                <li class="text-lg text-gray-700 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 inline-block mr-2 text-[#3DC1B7]">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                    </svg>
                                    8 personas restantes de beneficiarios menores a 65 años. Se acepta una mascota
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border rounded-lg overflow-hidden">
                <img src="{{ asset('img/mascotas.webp') }}" class="w-full sm:h-48 object-cover" alt="Imagen 1">
                <div class="p-4">
                    <h4 class="text-xl text-[#3DC1B7] font-bold uppercase mb-2">PLAN MASCOTAS</h4>
                    <div x-data="{ open: false }">
                        <h4 class="text-xl text-[#3DC1B7] font-bold uppercase mb-2"></h4>
                        <button @click="open = !open" class="flex items-center justify-between w-full text-left py-2 px-4 rounded-md text-gray-500 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:bg-gray-200" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500">
                            <span>Ver beneficios</span>
                            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                            </svg>
                        </button>
                        <div x-show="open" class="bg-white shadow-lg py-2 px-4 mt-2 rounded-lg mb-1">
                            <ul class=" pl-6" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500">
                                <li class="text-lg text-gray-700 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 inline-block mr-2 text-[#3DC1B7]">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                    </svg>
                                    Retiro de la mascota en lugar de fallecimiento
                                </li>
                                <li class="text-lg text-gray-700 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 inline-block mr-2 text-[#3DC1B7]">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                    </svg>
                                    Cofre fúnebre
                                </li>
                                <li class="text-lg text-gray-700 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 inline-block mr-2 text-[#3DC1B7]">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                    </svg>
                                        Recordatorio
                                </li>
                                <li class="text-lg text-gray-700 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 inline-block mr-2 text-[#3DC1B7]">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                    </svg>
                                        Cremación colectiva
                                </li>
                                <li class="text-lg text-gray-700 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 inline-block mr-2 text-[#3DC1B7]">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                    </svg>
                                        Sala de acompañamiento hasta por 3 horas
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border rounded-lg overflow-hidden">
                <img src="{{ asset('img/abuelos.webp') }}" class="w-full sm:h-48 object-cover" alt="Imagen 1">
                <div class="p-4">
                    <h4 class="text-xl text-[#3DC1B7] font-bold uppercase mb-2">PLAN ABUELOS</h4>
                    <p class="text-lg text-gray-700 mb-2">
                        Protégete y protegelos es la mejor muestra de amor
                    </p>
                </div>
            </div>

        </div>
    </div>



                {{-- <h3 class="text-xl text-[#3DC1B7] text-center font-bold my-4" data-aos="fade-down"
                    data-aos-easing="linear" data-aos-duration="500">BENEFICIARIOS CUBIERTOS POR LA PÓLIZA EXEQUIAL
                </h3>

                <h3 class="text-lg text-[#3DC1B7] font-bold my-4" data-aos="fade-down" data-aos-easing="linear"
                    data-aos-duration="500">CASADO:</h3>

                <ul class="pl-6" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="500">

                    <li class="text-lg text-gray-700 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor"
                            class="w-6 h-6 inline-block mr-2 text-[#3DC1B7]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                        ESPOSA O COMPAÑERA
                    </li>
                    <li class="text-lg text-gray-700 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor"
                            class="w-6 h-6 inline-block mr-2 text-[#3DC1B7]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                        HIJOS SIN LÍMITE DE EDAD
                    </li>
                    <li class="text-lg text-gray-700 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor"
                            class="w-6 h-6 inline-block mr-2 text-[#3DC1B7]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                        PADRES O SUEGROS
                    </li>
                    <li class="text-lg text-gray-700 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor"
                            class="w-6 h-6 inline-block mr-2 text-[#3DC1B7]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                        DOS (2) NIETOS PREVIAMENTE INSCRITOS
                    </li>
                </ul>

                <h3 class="text-lg text-[#3DC1B7]  font-bold my-4" data-aos="fade-down" data-aos-easing="linear"
                    data-aos-duration="500">SOLTERO:</h3>

                <ul class="pl-6" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="500">

                    <li class="text-lg text-gray-700 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor"
                            class="w-6 h-6 inline-block mr-2 text-[#3DC1B7]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                        PADRES
                    </li>
                    <li class="text-lg text-gray-700 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor"
                            class="w-6 h-6 inline-block mr-2 text-[#3DC1B7]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                        UN HIJO SIN LIMITE DE EDAD
                    </li>
                    <li class="text-lg text-gray-700 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor"
                            class="w-6 h-6 inline-block mr-2 text-[#3DC1B7]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                        HERMANOS SIN LIMITE DE EDAD
                    </li>
                    <li class="text-lg text-gray-700 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor"
                            class="w-6 h-6 inline-block mr-2 text-[#3DC1B7]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                        DOS (2) SOBRINOS PREVIAMENTE INSCRITOS
                    </li>
                </ul>


                <p class="text-lg text-gray-700 my-4" data-aos="fade-down" data-aos-easing="linear"
                    data-aos-duration="500">El asociado que desee podrá afiliar familiares que no se
                    encuentren dentro de su grupo básico y que sean menores de 65 años por un valor mensual de $2.500
                    por persona enviado los siguientes datos Nombre, No. de documento de identidad, parentesco y fecha
                    de nacimiento.</p>

                    <h3 class="text-xl text-[#3DC1B7] text-center font-bold my-8" data-aos="fade-down"
                    data-aos-easing="linear" data-aos-duration="500">SERVICIO FUNERARIO:</h3>
                <ul class="pl-6" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="500">
                    <li class="text-lg text-gray-700 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor"
                            class="w-6 h-6 inline-block mr-2 text-[#3DC1B7]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                        Tramites legales y notariales.
                    </li>
                    <li class="text-lg text-gray-700 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor"
                            class="w-6 h-6 inline-block mr-2 text-[#3DC1B7]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                        Traslado del cuerpo al laboratorio y a la funeraria.
                    </li>
                    <li class="text-lg text-gray-700 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor"
                            class="w-6 h-6 inline-block mr-2 text-[#3DC1B7]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                        Preparación y conservación del cuerpo.
                    </li>
                    <li class="text-lg text-gray-700 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor"
                            class="w-6 h-6 inline-block mr-2 text-[#3DC1B7]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                        Cofre fúnebre. Sala de velación por 24 horas.
                    </li>
                    <li class="text-lg text-gray-700 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor"
                            class="w-6 h-6 inline-block mr-2 text-[#3DC1B7]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                        Servicio telefónico local y de cafetería dentro de la Sala de velación.
                    </li>
                    <li class="text-lg text-gray-700 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor"
                            class="w-6 h-6 inline-block mr-2 text-[#3DC1B7]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                        Carroza fúnebre a la Iglesia y al Campo Santo.
                    </li>
                    <li class="text-lg text-gray-700 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor"
                            class="w-6 h-6 inline-block mr-2 text-[#3DC1B7]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                        Vehículo para acompañantes. Ceremonia Religiosa (cualquier religión).
                    </li>
                    <li class="text-lg text-gray-700 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor"
                            class="w-6 h-6 inline-block mr-2 text-[#3DC1B7]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                        Suministro de dos copias del Registro de Defunción.
                    </li>
                </ul> --}}
            </div>
            <div class="w-full md:w-1/2 md:px-8 px-4">

                {{-- <h3 class="text-xl text-[#3DC1B7] text-center font-bold my-4" data-aos="fade-down"
                    data-aos-easing="linear" data-aos-duration="500">SERVICIO CEMENTERIO:</h3>

                <ul class="pl-6" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="500">
                    <li class="text-lg text-gray-700 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor"
                            class="w-6 h-6 inline-block mr-2 text-[#3DC1B7]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                        Salas de Lujo Cofre de Lujo Bóveda en uso temporal y Osario.
                    </li>
                    <li class="text-lg text-gray-700 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor"
                            class="w-6 h-6 inline-block mr-2 text-[#3DC1B7]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                        Traslado del cuerpo al laboratorio y a la funeraria.
                    </li>
                    <li class="text-lg text-gray-700 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor"
                            class="w-6 h-6 inline-block mr-2 text-[#3DC1B7]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                        Lote en uso temporal y Osario.
                    </li>
                    <li class="text-lg text-gray-700 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor"
                            class="w-6 h-6 inline-block mr-2 text-[#3DC1B7]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                        Cremación y urna para las cenizas y cenízaro.
                    </li>
                    <li class="text-lg text-gray-700 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor"
                            class="w-6 h-6 inline-block mr-2 text-[#3DC1B7]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                        Cementerios Distritales o Municipales y Parque Cementerio.
                    </li>
                    <li class="text-lg text-gray-700 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor"
                            class="w-6 h-6 inline-block mr-2 text-[#3DC1B7]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                        Traslado aéreo o terrestre para la persona fallecida entre dos localidades.
                    </li>
                    <li class="text-lg text-gray-700 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor"
                            class="w-6 h-6 inline-block mr-2 text-[#3DC1B7]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                        Dama de Compañía.
                    </li>
                </ul>

                <div data-aos="fade-right" data-aos-easing="linear" data-aos-duration="500" class="text-gray-700 my-4">
                    <p class="text-lg">El afiliado Titular y sus beneficiarios son protegidos sin restricciones de salud, cobertura
                        fallecimiento por enfermedades como cáncer, sida o cualquier enfermedad terminal y suicidio.</p>
                    <br>
                    <p class="text-lg">Seguro de Vida amparando la muerte por cualquier causa incluye suicidio u homicidio, incapacidad
                        total y permanente hasta los 75 años del afiliado principal que haya ingresado en perfecto estado de
                        salud al Plan por $5’000.000</p>
                </div> --}}

    </div>

</div>
