<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Docuxer, cucuta, tecnologia, cyberseguridad, venta , ia,bucaramanga, Colombia" />
    <meta name="description"
        content="ESPECIALISTAS EN LA IMPLEMENTACIÓN DE SOLUCIONES TECNOLOGICAS EMPRESARIALES," />
    <meta name="author" content="U-site" />
    <meta name="copyright" content="U-site" />
    <link rel="icon" type="image/ico" href="favicon.ico">
    <meta property="og:image" content="/img/logo.jpg">
    <meta property="og:url" content="https://docuxer.com">
    <meta property="og:title" content="Docuxer">
    <meta property="og:type" content="Web" />
    <meta property="og:description"
        content="ESPECIALISTAS EN LA IMPLEMENTACIÓN DE SOLUCIONES TECNOLOGICAS EMPRESARIALES," />
    <link rel="canonical" href="https://docuxer.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Docuxer</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css" media="screen" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href=" https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"/>


    @livewireStyles
    <style>
        body {
            overflow-x: hidden;
        }
        .degradado {
            /* Altura del degradado */
            background: linear-gradient(to bottom, #e8f0f2, #f7f8f9); /* De arriba hacia abajo */
        }
        .degradado2 {
            /* Altura del degradado */
            background: linear-gradient(to bottom, #f7f8f9, #edf1f5); /* De arriba hacia abajo */
        }
        .slick-prev, .slick-next {
            z-index: 9999; /* Asegura que las flechas estén en la capa superior */
            position: absolute; /* Coloca las flechas en una posición absoluta */
            top: 50%; /* Alinea verticalmente las flechas en el centro */
            transform: translateY(-50%); /* Ajusta la posición vertical para centrar las flechas */
            background: transparent; /* Fondo transparente para las flechas */
            border: none; /* Sin borde para las flechas */
            cursor: pointer; /* Cambia el cursor a una mano */
            color: white; /* Color de las flechas */

        }

        /* Estilo para la flecha izquierda */
        .slick-prev {
            left: 20px; /* Ajusta la posición izquierda */
        }

        /* Estilo para la flecha derecha */
        .slick-next {
            right: 20px; /* Ajusta la posición derecha */
        }
        .carousel2 .slick-slide.zoomed img {
          transform: scale(1.2); /* Escala de zoom al 120% */
          transition: transform 20s ease; /* Transición suave de transformación */
      }
    </style>

    <div class="shadow-xl z-40 sm:space-x-10 w-full bg-white py-2">

        <nav class="sm:flex justify-between pt-2 sm:px-8 max-w-8xl mx-auto">
            <div class="flex items-center justify-between pl-2 lg:px-4 w-full">
                <div class="w-48 -mt-2">
                    <div class="object-fill cover max-w-xs">
                        <x-application-logo />
                    </div>
                </div>
                <button id="menu-toggle" class="block lg:hidden mr-4">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="lg:pr-16 sm:pr-8 pr-4">

                <ul id="menu" class="hidden lg:flex lg:justify-end  lg:top-0  lg:right-[200px] my-auto uppercase font-semibold text-sm">
                    @foreach ($menus as $menu)
                        @if ($menu->submenu->count() > 0)
                            <li class="text-right py-2 hover:text-[#C50000] text-gray-800 px-2 relative group">
                                <a href="{{ $menu->url }}" class="cursor-pointer md:flex md:items-center">
                                    <span>{{ $menu->nombre }}</span>
                                    <svg fill="#C50000" class="ml-2 -mt-0.1 hidden md:inline-block" height="8px" width="8px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 490 490" xml:space="preserve">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <polygon points="245,456.701 490,33.299 0,33.299 "></polygon>
                                        </g>
                                    </svg>
                                </a>
                                <ul class="absolute hidden bg-white text-left rounded-lg mt-2 py-1 w-64 text-gray-800 z-50 group-hover:block right-0 lg:right-auto lg:-left-36
                                ">
                                    @foreach ($menu->submenu as $submenu)
                                        <li>
                                            <a href="{{ route('submenuview', $submenu->id)}}" class="block px-4 py-2 hover:text-[#C50000] cursor-pointer">{{ $submenu->nombre }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>

                        @else
                            <li class="text-right py-2 hover:text-[#C50000] text-gray-800 px-2">
                                @if (!empty($menu->url))
                                    <a href="{{ route($menu->url) }}" class="cursor-pointer"> {{ $menu->nombre }} </a>
                                @else
                                    <a href="#" class="cursor-pointer"> {{ $menu->nombre }} </a>
                                @endif
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </nav>
    </div>
</head>

<body class="font-[Poppins] antialiased">
    {{ $slot }}

    @livewireScripts
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <x-livewire-alert::scripts />
    <x-livewire-alert::flash />
</body>


<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
    AOS.init();
</script>
<script>
    const menuToggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('menu');

    menuToggle.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>
<script>
  $(document).ready(function(){
    $('.carousel2').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false, // Desactiva el avance automático
        arrows: true,
        dots: false,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            }
        ]
    });

    // Manejar el cambio de contenido
    $('.carousel2').on('afterChange', function(event, slick, currentSlide){
        // Ocultar todos los contenidos
        $('#contenidoImagen7, #contenidoImagen8, #contenidoImagen9').slideUp();

        // Mostrar el contenido correspondiente a la imagen
        switch (currentSlide) {
            case 0:
                $('#contenidoImagen7').slideDown();
                break;
            case 1:
                $('#contenidoImagen8').slideDown();
                break;
            case 2:
                $('#contenidoImagen9').slideDown();
                break;
            default:
                // No se hace nada
        }
    });

    // Aplicar el zoom cuando el carrusel se detiene
    $('.carousel2').on('afterChange', function(event, slick, currentSlide){
      $('.slick-slide').removeClass('zoomed'); // Remover la clase de todas las imágenes
      $('.slick-active').addClass('zoomed'); // Agregar la clase solo a la imagen activa
    });

    // Quitar el zoom cuando el carrusel se mueve
    $('.carousel2').on('beforeChange', function(event, slick, currentSlide, nextSlide){
      $('.slick-slide').removeClass('zoomed'); // Remover la clase de todas las imágenes
    });

    // Aplicar el zoom al primer slide al inicio
    $('.slick-active').addClass('zoomed');

    // Iniciar temporizador para aplicar el zoom hacia atrás
    var timer;

    function startTimer() {
      timer = setInterval(function() {
          $('.carousel2').slick('slickPrev');
      }, 20000); // Cambia la imagen cada 20 segundos
    }

    startTimer();

    // Detener temporizador cuando el carrusel se desliza manualmente
    $('.carousel2').on('beforeChange', function(event, slick, currentSlide, nextSlide){
      clearInterval(timer); // Detener temporizador
    });

    // Reiniciar temporizador cuando el carrusel se detiene
    $('.carousel2').on('afterChange', function(event, slick, currentSlide){
      startTimer(); // Reiniciar temporizador
    });

});
</script>


<footer>
    <section>
        <div class="bg-white-100 h-full w-full">
            <div class="container mx-auto flex flex-col text-white max-w-7xl my-10 text-sm pt-16">
                <div class="text-lg flex flex-wrap justify-center md:justify-between mb-6 flex-col md:flex-row">
                    <!-- Primer listado -->
                    <div class="pl-10 w-full md:w-1/4 mb-6 md:mb-0 flex justify-center">
                        <div class="text-center flex-wrap justify-center pr-10 md:text-left">
                            <a href="/">
                                <span role="img" aria-label="Logo of Docuxer" title="Docuxer">
                                    <img src="{{asset('/img/logo.png')}}" class="img img-fluid logo" alt="Docuxer" height="200px" width="200px">
                                </span>
                            </a>
                        </div>
                    </div>
                    <!-- Segundo listado -->
                    <div class="w-full md:w-1/4 mb-6 md:mb-0 ml-[-13px] flex justify-center">
                        <ul>
                            <li class="pb-4">
                                <h2 class="text-3xl font-bold text-red-700 mb-2 mr-2">CÚCUTA</h2>
                                <div class="flex items-center mr-2">
                                    <x-carbon-enterprise class="flex items-start text-red-500 w-4 h-4 mr-2"/>
                                    <p class="text-base font-semibold text-gray-700">Avenida 9E #11 - 52  La Rivera</p>
                                </div>
                            </li>
                            <li class="pb-4">
                                <div class="flex items-center mr-2">
                                    <x-heroicon-s-phone class="flex items-start text-red-500 w-4 h-4 mr-2"/>
                                    <p class="text-base font-semibold text-gray-700">+(57) 316 74 30 292</p>
                                </div>
                                <div class="flex items-center mr-2">
                                    <x-heroicon-s-phone class="flex items-start text-red-500 w-4 h-4 mr-2"/>
                                    <p class="text-base font-semibold text-gray-700">+(607) 594 82 86</p>
                                </div>
                            </li>

                            <li>
                                <div class="flex items-center mr-2">
                                    <x-css-mail class="flex items-start text-red-500 w-4 h-4 mr-2"/>
                                    <p class="text-base font-semibold text-gray-700">ventas@docuxer.com</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full md:w-1/4 mb-6 md:mb-0 ml-[-13px] flex justify-center">
                        <ul>
                            <li class="pb-4">
                                <h2 class="text-3xl font-bold text-red-700 mb-2 mr-2">BUCARAMANGA</h2>
                                <div class="flex items-center mr-2">
                                    <x-carbon-enterprise class="flex items-start text-red-500 w-4 h-4 mr-2"/>
                                    <p class="text-base font-semibold text-gray-700 whitespace-pre-line">Carrera 29 No. 45 - 45
                                    Oficina 810</p>
                                </div>
                                <p class="text-base font-semibold text-gray-700 whitespace-pre-line">Edificio Metropolitan Business
                                Park Torre 29 - Barrio Sotomayor</p>
                            </li>
                            <li>
                                <div class="flex items-center mr-2">
                                    <x-heroicon-s-phone class="flex items-start text-red-500 w-4 h-4 mr-2"/>
                                    <p class="text-base font-semibold text-gray-700">+(60 7) 6 83 9718</p>
                                </div>
                            </li>
                            <li class="pb-4">
                                <div class="flex items-center mr-2">
                                    <x-heroicon-s-phone class="flex items-start text-red-500 w-4 h-4 mr-2"/>
                                    <p class="text-base font-semibold text-gray-700">+(57) 316 74 31 555</p>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center mr-2">
                                    <x-css-mail class="flex items-start text-red-500 w-4 h-4 mr-2"/>
                                    <p class="text-base font-semibold text-gray-700">ventas@docuxer.com</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    {{-- <div class="w-full md:w-1/4 mb-6 md:mb-0 ml-[13px] flex justify-center">
                        <ul>
                            <li>
                                <h2 class="text-3xl font-bold text-red-700 mb-2">SUSCRIBETE</h2>
                                <p class=" text-base font-semibold text-gray-700 whitespace-pre-line">¡Te vas a sorprender! ¡No te pierdas de ninguna promoción!</p>
                            </li>

                        </ul>
                    </div> --}}
                </div>
            </div>

            <hr class="md:col-span-3 border-t-1 border-white">
            <div class="bg-red-800 h-full w-full">
                <div class="container px-8 mx-auto md:px-40 flex text-center items-center py-2">
                    <div class="my-6 text-xs text-white md:pl-12 mx-auto text-center">
                        Desarrollado con 💚 por <a href="https:u-site.app" target="_blank">U-site</a> &copy; 2024
                        <br>Docuxer | All rights reserved
                    </div>
                </div>
            </div>
    </section>
</footer>

</html>
