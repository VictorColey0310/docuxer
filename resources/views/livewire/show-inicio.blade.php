<div>

    {{--<div x-data="{
        activeSlide: 0,
        slides: [
            {
                image: './img/docuxer1.jpg',
                title: 'aQUÍ COMIENZA',
                subtitle1: 'SU CRECIMIENTO',
                subtitle2: 'cONTAMOS CON LA EXPERIENCIA PARA LLEVAR SU EMPRESA AL SIGUIENTE',
                subtitle3: 'NIVEL EN INNOVACIÓN.',
                link: '/contactus'
            },
            {
                image: './img/docuxer2.jpg',
                title: 'Nuestro portafolio',
                subtitle1: 'Somos Especialistas en la implementación de soluciones tecnológicas empresariales,',
                subtitle2: 'contamos con el respaldo y acompañamiento de marcas mundialmente reconocidas,',
                subtitle3: 'lo que nos da la tranquilidad y seguridad de entregar lo mejor a nuestros clientes.',
                link: '#portafolio'
            }
        ]
    }">
    <div class="max-w-full h-400px mx-auto overflow-hidden">
        <div class="relative h-full">
            <div class="overflow-hidden bg-black h-full">
                <div class="flex transition-transform duration-1000 ease-out" :style="'transform: translateX(-' + (activeSlide * 100) + '%)'">
                    <template x-for="(slide, index) in slides" :key="index">
                        <div class="w-full flex-shrink-0" x-bind:class="{ 'opacity-100': activeSlide === index, 'opacity-0': activeSlide !== index }">
                            <img class="w-full transition-all duration-1000 ease-out" x-bind:src="slide.image" alt="Slide Image" x-show="activeSlide === index" :class="{ 'scale-125': activeSlide === index }">
                            <div class="absolute top-0 left-0 w-full h-full flex flex-col justify-center items-center text-white bg-black bg-opacity-50">
                                <h2 x-text="slide.title" class="text-4xl font-bold mb-4"></h2>
                                <h3 x-text="slide.subtitle1" class="text-lg mb-2"></h3>
                                <h3 x-text="slide.subtitle2" class="text-lg mb-2"></h3>
                                <h3 x-text="slide.subtitle3" class="text-lg mb-4"></h3>
                                <a x-bind:href="slide.link" class="bg-white text-black py-2 px-4 rounded-full hover:bg-gray-300">Ver más</a>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
            <div class="absolute bottom-0 left-0 right-0 flex justify-center px-4 pb-4">
                <template x-for="(slide, index) in slides" :key="index">
                    <button @click="activeSlide = index" :class="{ 'bg-white': activeSlide === index, 'bg-gray-300': activeSlide !== index }" class="h-2 w-2 rounded-full mx-1"></button>
                </template>
            </div>
        </div>
    </div>--}}

    <section id="sliderInfo" class="relative h-[80vh] flex flex-col justify-center items-center bg-[#F8F9FA]">
        <!-- Contenedor de imagenes de fondo -->
        <div class="absolute inset-0 overflow-hidden z-0" style="filter: brightness(0.5);">
            <div class="carousel2 min-w-full min-h-full object-cover">
                <div class="h-[62rem] sm:h-[82rem] lg:h-[96rem] xl:h-[50rem] overflow-hidden">
                    <img src="{{ asset('img/docuxer1.jpg') }}" class="object-cover w-full h-full" alt="Imagen 1">
                </div>
                <div class="h-[62rem] sm:h-[82rem] lg:h-[96rem] xl:h-[50rem] overflow-hidden">
                    <img src="{{ asset('img/docuxer2.jpg') }}" class="object-cover w-full h-full" alt="Imagen 2">
                </div>
            </div>
        </div>

        <div id="contenidoImagen7" class="w-[90%] md:p-20 text-white text-center md:text-left -mt-28 z-10">
            <p class="text-lg md:text-4xl semibold mb-4">AQUÍ COMIENZA</p>
            <h1 class="text-4xl font-bold md:text-8xl mb-4">SU CRECIMIENTO</h1>
            <p class="text-lg md:text-xl mb-8 semibold md:whitespace-pre-line">CONTAMOS CON LA EXPERIENCIA PARA LLEVAR SU EMPRESA AL SIGUIENTE
            NIVEL EN INNOVACIÓN.</p>
            <a href="{{ route('contactos') }}" class="text-white text-sm tracking-[0.1rem]">
                CONTÁCTANOS
            </a>
        </div>

        <div id="contenidoImagen8" class="w-[90%] md:p-20 text-white text-center md:text-right -mt-28 z-10" style="display: none;">
            <h1 class="text-4xl font-bold md:text-8xl mb-4">NUESTRO PORTAFOLIO</h1>
            <p class="text-lg md:text-xl semibold mb-8 md:whitespace-pre">SOMOS ESPECIALISTAS EN LA IMPLEMENTACIÓN DE SOLUCIONES TECNOLOGICAS EMPRESARIALES,
            CONTAMOS CON EL RESPALDO Y ACOMPAÑAMIENTO DE MARCAS MUNDIAMENTE RECONOCIDAS,
            LO QUE NOS DA LA TRANQUILIDAD Y SEGURIDAD DE ENTREGAR LO MEJOR A NUESTROS CLIENTES.</p>
            <a href="#"class="text-white semibold text-sm tracking-[0.1rem]">
                PORTAFOLIO
            </button>
            </a>
        </div>

    </section>

    <div class="pt-20 bg-[#F8F9FA] items-center">
        <div class="container mx-auto text-black">
            <div class="text-center">
                <h1 class="text-5xl font-semibold  max-w-2xl mx-auto" data-aos="fade-up" data-aos-easing="linear"
                    data-aos-duration="500">Portafolio DocuXer</h1>
            </div>
        </div>
    </div>


    <div class="bg-[#F8F9FA]">
        <div class="pb-10 pt-20 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mx-4 md:mx-10 lg:mx-48" data-aos="fade-up" data-aos-easing="linear"
        data-aos-duration="500">
          @foreach ($consulta_tarjetas as $item )
          <div class=" pb-4 rounded-lg flex flex-col md:flex-row md:items-start">
            <div class="text-white flex items-center justify-center mr-4">
              <img src="{{ asset($item->imagen) }}" alt="" class="w-40 h-40 md:w-full md:h-full object-cover rounded-lg">
            </div>
            <div class="md:w-[50rem]">
              <h3 class="text-lg font-bold">{{ $item->nombre }}</h3>
              <p class="text-black text-sm pb-4">{{ $item->descripcion }}</p>
              <a href="{{ route('submenuview', $item->submenu_id)}}" class="text-[#8b1917] font-semibold hover:text-[#7c1816]">MÁS INFORMACIÓN</a>
            </div>
        </div>
        @endforeach
        </div>
    </div>


    <div class="container mx-auto mt-12 mb-12 bg-white-100 p-6">
        <div class="flex flex-col md:flex-row items-center" data-aos="fade-up" data-aos-easing="linear"
        data-aos-duration="500">
            <!-- Imagen a la izquierda -->
            <div class="w-full md:w-1/2 mr-0 md:mr-4 mb-4 md:mb-0">
                <img src="./img/nosotros.png" alt="Descripción de la imagen" class="w-full h-auto rounded-lg">
            </div>
            <!-- Información y botones a la derecha -->
            <div class="w-full md:w-1/2">
                <hr class="border-t-2 border-gray-600 w-full mx-auto mb-8">
                <h2 class="text-3xl md:text-5xl font-semibold mb-2">Nosotros</h2>
                <p class="text-black text-justify text-lg mb-4">En Docuxer, impulsamos la transformación Digital de nuestros clientes, ofreciendo soluciones y servicios de tecnología, con un personal altamente calificado y comprometido en generar soluciones innovadoras, lo que nos permite generar un altísimo nivel de satisfacción, confianza y tranquilidad a todos nuestros clientes, permitiendo que ellos logren dedicarse por completo a la razón de ser de su negocio.</p>
                <div class="flex flex-col md:flex-row items-center">
                    <!-- Botón rojo -->
                    <a href="{{ route('nosotros') }}" class="bg-[#c10000] text-white py-2 px-4 rounded hover:bg-red-600 transition-colors mb-2 md:mb-0 md:mr-2">NUESTRO EQUIPO</a>
                    <!-- Botón blanco -->
                    <a href="{{ route('contactos') }}" class="bg-white text-black py-2 px-4 rounded border border-gray-300 hover:bg-gray-100 transition-colors md:ml-2">CONTÁCTANOS</a>
                </div>
            </div>
        </div>
    </div>

    <div class="py-20 degradado items-center flex">
        <div class="container mx-auto text-black">
            <div class="pr-10 pl-10 text-center">
                <hr class="border-t-2 border-gray-600 w-full mx-auto mb-8">
                <h1 class="text-5xl font-semibold mb-2 max-w-2xl mx-auto" data-aos="fade-up" data-aos-easing="linear"
                    data-aos-duration="500">Nuestros aliados más importantes</h1>
            </div>
        </div>
    </div>

    <div class="pl-10 pr-10 pb-20 degradado2 mx-auto">
        <div class="grid grid-cols-6 gap-0 md:mx-48">
            @foreach ($consulta_aliados as $aliados )
            <div class="col-span-6 sm:col-span-3 md:col-span-2 lg:col-span-1">
                <div class="p-2 text-center border border-gray-300 flex items-center justify-center">
                    <img class="transition duration-500 ease-in-out transform hover:scale-110 img img-fluid client-image o_visible object-contain w-[150px] h-[150px]" src="{{ asset($aliados->imagen) }}" alt="Client Image 01">
                </div>
            </div>
            @endforeach
        </div>
    </div>


    <div class="pt-20 bg-white-500 items-center flex">
        <div class="container mx-auto text-black">
            <div class="pl-10 pr-10 text-center">
                <hr class="border-t-2 border-gray-600 w-full mx-auto mb-8">
                <h1 class="text-5xl font-semibold mb-10 max-w-2xl mx-auto" data-aos="fade-up" data-aos-easing="linear"
                    data-aos-duration="500">Datos de interés sobre nosotros </h1>
            </div>
        </div>
    </div>

    <div class="pb-5 mb-14 container mx-auto">
        <div class="text-center grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
            <div>
                <h2 class="pb-4 text-4xl sm:text-6xl font-bold text-red-800">400+</h2>
                <p class="font-semibold">Clientes atendidos <br>
                    en la Región</p>
            </div>
            <div>
                <h2 class="pb-4 text-4xl sm:text-6xl font-bold text-red-800">250+</h2>
                <p class="font-semibold">Proyectos de IT <br>
                    Implementados</p>
            </div>
            <div>
                <h2 class="pb-4 text-4xl sm:text-6xl font-bold text-red-800">97 % </h2>
                <p class="font-semibold">Nivel de Satisfacción de <br>
                    nuestros clientes </p>
            </div>
            <div>
                <h2 class="pb-4 text-4xl sm:text-6xl font-bold text-red-800">50+</h2>
                <p class="font-semibold">Especializaciones técnicas en <br>
                    tecnologías de información</p>
            </div>
        </div>
    </div>

    <div class="pt-20 bg-gray-100">
        <div class="pl-10 pr-10 pb-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12 md:gap-4 lg:mx-48">
            @foreach ($consulta_equipo as $equipo )
            <div class="col-span-1 sm:col-span-1 lg:col-span-1 py-3 " data-aos="fade-up" data-aos-easing="linear"
            data-aos-duration="500">
                <div class="max-w-sm pb-8 mx-auto bg-white shadow-xl rounded-lg text-gray-900 ">
                    <div class="p-4 text-center">
                        <div class="mx-auto w-40 h-40 relative -mt-16 mb-4 border-4 border-white shadow-xl  rounded-full overflow-hidden">
                            <img src="{{ asset($equipo->imagen) }}" class="" alt="Team Image">
                        </div>
                        <div>
                            <h4 class="text-xl font-semibold">{{ $equipo->nombre }}</h4>
                            <p class="text-gray-500">{{ $equipo->cargo }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="pb-20 pt-20 container mx-auto">
        <div class="pl-10 pr-10 text-center">
          <hr class="border-t-2 border-gray-600 w-full mx-auto mb-8">
          <h2 class="text-lg font-semibold mb-4">Somos un equipo de trabajo que se encuentra en la búsqueda de la mejora continua, el aprendizaje y soluciones óptimas para cada uno de nuestros clientes.</h2>
          <a href="{{ route('equipos') }}" class="bg-[#C50000] text-white py-2 px-4 rounded hover:bg-red-600 transition-colors mr-2">VER MÁS</a>
        </div>
    </div>


    <section class="s_cover pb-24 pt-24 bg-cover bg-black-25" style="background-image: url(./img/fondo.webp);">
        <div class="s_parallax_bg" style="background-position: 50% 0px;"></div>
        <div class="container mx-auto flex justify-center">
            <div class="w-full lg:w-auto lg:max-w-screen-xl">
                <div class="s_title pt-0 pb-0">
                    <h1 class="text-4xl text-center text-gray-200 font-bold">Síguenos En Redes Sociales</h1>
                     <div class="flex justify-center mt-4">
                        <div class="p-4 rounded-full flex space-x-3">
                            <a href="https://www.facebook.com/Docuxer/" target="_blank" class="s_share_facebook">
                                <button class="bg-white w-20 h-20 flex items-center justify-center">
                                    <svg viewBox="-5 0 20 20" version="1.1" width="30" height="30" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#3b5998"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>facebook [@docuxer]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-385.000000, -7399.000000)" fill="#3b5998"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M335.821282,7259 L335.821282,7250 L338.553693,7250 L339,7246 L335.821282,7246 L335.821282,7244.052 C335.821282,7243.022 335.847593,7242 337.286884,7242 L338.744689,7242 L338.744689,7239.14 C338.744689,7239.097 337.492497,7239 336.225687,7239 C333.580004,7239 331.923407,7240.657 331.923407,7243.7 L331.923407,7246 L329,7246 L329,7250 L331.923407,7250 L331.923407,7259 L335.821282,7259 Z" id="facebook-[#3b5998]"> </path> </g> </g> </g> </g></svg>
                                </button>
                            </a>
                            <a href="https://twitter.com/docuxer?s=11" target="_blank" class="s_share_twitter">
                                <button class="bg-white w-20 h-20 flex items-center justify-center">
                                    <svg viewBox="0 -2 20 20" version="1.1"  width="30" height="30" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#1da1f2"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>twitter [@docuxer]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-60.000000, -7521.000000)" fill="#1da1f2"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M10.29,7377 C17.837,7377 21.965,7370.84365 21.965,7365.50546 C21.965,7365.33021 21.965,7365.15595 21.953,7364.98267 C22.756,7364.41163 23.449,7363.70276 24,7362.8915 C23.252,7363.21837 22.457,7363.433 21.644,7363.52751 C22.5,7363.02244 23.141,7362.2289 23.448,7361.2926 C22.642,7361.76321 21.761,7362.095 20.842,7362.27321 C19.288,7360.64674 16.689,7360.56798 15.036,7362.09796 C13.971,7363.08447 13.518,7364.55538 13.849,7365.95835 C10.55,7365.79492 7.476,7364.261 5.392,7361.73762 C4.303,7363.58363 4.86,7365.94457 6.663,7367.12996 C6.01,7367.11125 5.371,7366.93797 4.8,7366.62489 L4.8,7366.67608 C4.801,7368.5989 6.178,7370.2549 8.092,7370.63591 C7.488,7370.79836 6.854,7370.82199 6.24,7370.70483 C6.777,7372.35099 8.318,7373.47829 10.073,7373.51078 C8.62,7374.63513 6.825,7375.24554 4.977,7375.24358 C4.651,7375.24259 4.325,7375.22388 4,7375.18549 C5.877,7376.37088 8.06,7377 10.29,7376.99705" id="twitter-[#1da1f2]"> </path> </g> </g> </g> </g></svg>
                                </button>
                            </a>
                            <a href="https://www.instagram.com/docuxer?igsh=MXFrbWQwNjg5b2FmeQ==" target="_blank" class="s_share_instagram">
                                <button class="bg-white w-20 h-20 flex items-center justify-center" aria-label="Visita nuestro Instagram">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="30" height="30" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 551.034 551.034" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><title>Instagram [@docuxer]</title><g><linearGradient id="a" x1="275.517" x2="275.517" y1="4.57" y2="549.72" gradientTransform="matrix(1 0 0 -1 0 554)" gradientUnits="userSpaceOnUse"><stop offset="0" style="stop-color:#E09B3D" stop-color="#e09b3d"></stop><stop offset=".3" style="stop-color:#C74C4D" stop-color="#c74c4d"></stop><stop offset=".6" style="stop-color:#C21975" stop-color="#c21975"></stop><stop offset="1" style="stop-color:#7024C4" stop-color="#7024c4"></stop></linearGradient><path d="M386.878 0H164.156C73.64 0 0 73.64 0 164.156v222.722c0 90.516 73.64 164.156 164.156 164.156h222.722c90.516 0 164.156-73.64 164.156-164.156V164.156C551.033 73.64 477.393 0 386.878 0zM495.6 386.878c0 60.045-48.677 108.722-108.722 108.722H164.156c-60.045 0-108.722-48.677-108.722-108.722V164.156c0-60.046 48.677-108.722 108.722-108.722h222.722c60.045 0 108.722 48.676 108.722 108.722v222.722z" style="fill:url(#a);" fill=""></path><linearGradient id="b" x1="275.517" x2="275.517" y1="4.57" y2="549.72" gradientTransform="matrix(1 0 0 -1 0 554)" gradientUnits="userSpaceOnUse"><stop offset="0" style="stop-color:#E09B3D" stop-color="#e09b3d"></stop><stop offset=".3" style="stop-color:#C74C4D" stop-color="#c74c4d"></stop><stop offset=".6" style="stop-color:#C21975" stop-color="#c21975"></stop><stop offset="1" style="stop-color:#7024C4" stop-color="#7024c4"></stop></linearGradient><path d="M275.517 133C196.933 133 133 196.933 133 275.516s63.933 142.517 142.517 142.517S418.034 354.1 418.034 275.516 354.101 133 275.517 133zm0 229.6c-48.095 0-87.083-38.988-87.083-87.083s38.989-87.083 87.083-87.083c48.095 0 87.083 38.988 87.083 87.083 0 48.094-38.989 87.083-87.083 87.083z" style="fill:url(#b);" fill=""></path><linearGradient id="c" x1="418.31" x2="418.31" y1="4.57" y2="549.72" gradientTransform="matrix(1 0 0 -1 0 554)" gradientUnits="userSpaceOnUse"><stop offset="0" style="stop-color:#E09B3D" stop-color="#e09b3d"></stop><stop offset=".3" style="stop-color:#C74C4D" stop-color="#c74c4d"></stop><stop offset=".6" style="stop-color:#C21975" stop-color="#c21975"></stop><stop offset="1" style="stop-color:#7024C4" stop-color="#7024c4"></stop></linearGradient><circle cx="418.31" cy="134.07" r="34.15" style="fill:url(#c);" fill=""></circle></g></svg>
                                </button>
                            </a>
                            <a href="https://www.linkedin.com/company/docuxer" target="_blank" class="s_share_linkedin">
                                <button class="bg-white w-20 h-20 flex items-center justify-center">
                                    <svg viewBox="0 0 20 20" version="1.1" width="25" height="25" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#0077b5"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>Linkedin [@docuxer]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-180.000000, -7479.000000)" fill="#0077b5"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M144,7339 L140,7339 L140,7332.001 C140,7330.081 139.153,7329.01 137.634,7329.01 C135.981,7329.01 135,7330.126 135,7332.001 L135,7339 L131,7339 L131,7326 L135,7326 L135,7327.462 C135,7327.462 136.255,7325.26 139.083,7325.26 C141.912,7325.26 144,7326.986 144,7330.558 L144,7339 L144,7339 Z M126.442,7323.921 C125.093,7323.921 124,7322.819 124,7321.46 C124,7320.102 125.093,7319 126.442,7319 C127.79,7319 128.883,7320.102 128.883,7321.46 C128.884,7322.819 127.79,7323.921 126.442,7323.921 L126.442,7323.921 Z M124,7339 L129,7339 L129,7326 L124,7326 L124,7339 Z" id="linkedin-[#0077b5]"> </path> </g> </g> </g> </g></svg>
                                </button>
                            </a>
                            <a href="mailto:ventas@docuxer.com" class="s_share_email">
                                <button class="bg-white w-20 h-20 flex items-center justify-center">
                                    <svg fill="#c10000" viewBox="0 0 14 14" width="33" height="33" role="img" focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title>E-mail [@docuxer]</title><path d="m 13,5.325895 v 5.31696 q 0,0.44197 -0.31473,0.7567 -0.31473,0.31473 -0.7567,0.31473 H 2.07143 q -0.441966,0 -0.756698,-0.31473 Q 1,11.084825 1,10.642855 v -5.31696 q 0.294643,0.32812 0.676339,0.58259 2.424111,1.64732 3.328121,2.31026 0.3817,0.28125 0.61942,0.43862 0.23773,0.15737 0.63282,0.32143 0.39509,0.16406 0.7366,0.16406 h 0.0134 q 0.34151,0 0.7366,-0.16406 0.39509,-0.16406 0.63282,-0.32143 0.23772,-0.15737 0.61942,-0.43862 1.13839,-0.82366 3.33482,-2.31026 Q 12.71205,5.647325 13,5.325895 z m 0,-1.96875 q 0,0.52902 -0.32812,1.01116 -0.32813,0.48214 -0.81697,0.82366 -2.51786,1.74777 -3.13393,2.17634 -0.067,0.0469 -0.2846,0.20424 -0.21763,0.15737 -0.3616,0.25446 -0.14398,0.0971 -0.34822,0.21764 -0.20424,0.12053 -0.38504,0.1808 -0.18081,0.0603 -0.33482,0.0603 H 6.9933 q -0.15401,0 -0.33482,-0.0603 -0.1808,-0.0603 -0.38504,-0.1808 Q 6.0692,7.924105 5.92522,7.827005 5.78125,7.729905 5.56362,7.572545 5.34598,7.415175 5.27902,7.368305 4.66964,6.939735 3.52455,6.146205 2.37946,5.352675 2.15179,5.191965 1.736607,4.910715 1.368304,4.418525 1,3.926335 1,3.504465 1,2.982145 1.277902,2.633925 1.555804,2.285715 2.07143,2.285715 h 9.85714 q 0.43527,0 0.75335,0.31473 Q 13,2.915175 13,3.357145 z"></path></g></svg>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
