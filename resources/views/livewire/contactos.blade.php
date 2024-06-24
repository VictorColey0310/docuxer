<div>

    <section class="s_cover pb-24 pt-24 bg-cover bg-black-25" style="background-image: url(./img/menu.webp) ;">
        <div class="s_parallax_bg" style="background-position: 50% 0px;"></div>
        <div class="container mx-auto flex justify-center">
            <div class="w-full lg:w-auto lg:max-w-screen-xl">
                <div class="s_title pt-0 pb-0">
                    <h1 class="text-5xl lg:text-6xl text-center text-gray-200 font-bold">Contáctenos</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-white sm:py-0 py-5">
        <div class="container mx-auto">
            <div class="flex flex-wrap items-center shadow-2xl overflow-hidden hover:shadow-lg transition duration-300 ease-in-out rounded-2xl lg:my-20">
                <div class="w-full md:w-1/2 px-10 py-12">
                    <div class="mb-4">
                        <label for="nombre" class="block text-black-100 font-bold mb-2">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" wire:model="nombre"
                            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-[#3DC1B7]" required
                            x-model="nombre">
                    </div>
                    <div class="mb-4">
                        <label for="telefono" class="block text-black-100 font-bold mb-2">Telefono:</label>
                        <input type="tel" id="telefono" name="telefono" wire:model="telefono"
                            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-[#3DC1B7]" required
                            x-model="telefono">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-black-100 font-bold mb-2">E-mail:</label>
                        <input type="email" id="email" name="email" wire:model="email"
                            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-[#3DC1B7]" required
                            x-model="email">
                    </div>
                    <div class="mb-4">
                        <label for="empresa" class="block text-black-100 font-bold mb-2">Empresa:</label>
                        <input type="text" id="empresa" name="empresa" wire:model="empresa"
                            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-[#3DC1B7]" required
                            x-model="empresa">
                    </div>
                    <div class="mb-4">
                        <label for="asunto" class="block text-black-100 font-bold mb-2">Asunto:</label>
                        <input type="text" id="asunto" name="asunto" wire:model="asunto"
                            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-[#3DC1B7]" required
                            x-model="asunto">
                    </div>
                    <div class="mb-4">
                        <label for="descripcion" class="block text-black-100 font-bold mb-2">Descripción:</label>
                        <textarea id="descripcion" name="descripcion" wire:model="descripcion"
                            class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-[#3DC1B7]" rows="8" required
                            x-model="descripcion"></textarea>
                    </div>
                    <button wire:click="enviarEmail"
                        class="bg-red-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                       >Enviar</button>
                </div>

                <div class="w-full md:w-1/2 px-10 text-center sm:pb-0 pb-10 text-lg" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500">
                    <hr class="border-t-2 border-gray-600 w-full mx-auto mb-8">
                    <p class="text-base text-black-100 text-left font-semibold my-4 uppercase" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500">Contáctenos sobre cualquier cosa relacionada con nuestra empresa o nuestros servicios.
                        Haremos todo lo posible por darle respuesta a la brevedad.</p>
                        <ul>
                            <li class="pb-4">
                                <h2 class="text-3xl font-bold text-red-700 mb-2 mr-2">DOCUXER SAS</h2>
                                <div class="flex items-center mr-2">
                                    <x-carbon-enterprise class="flex items-start text-gray-700 hover:text-blue-400 w-4 h-4 mr-2"/>
                                    <p class="text-base font-semibold text-gray-700">Avenida 9E #11 - 52 La Rivera - Cúcuta</p>
                                </div>
                            </li>
                            <li class="pb-4">
                                <div class="flex items-center mr-2">
                                    <x-carbon-enterprise class="flex items-start text-gray-700 hover:text-blue-400 w-4 h-4 mr-2"/>
                                    <p class="text-base font-semibold text-gray-700">Carrera 29 No. 45 - 45
                                        Oficina 810

                                        Edificio Metropolitan Business
                                        Park Torre 29 - Barrio Sotomayor - Bucaramanga</p>
                                </div>
                            </li>
                            <li class="pb-4">
                                <div class="flex items-center mr-2">
                                    <x-heroicon-s-phone class="flex items-start text-gray-700 hover:text-blue-400 w-4 h-4 mr-2"/>
                                    <p class="text-base font-semibold text-gray-700">6075948286 - 6076839718</p>
                                </div>
                            </li>
                            <li class="pb-4">
                                <div class="flex items-center mr-2">
                                    <x-css-mail class="flex items-start text-gray-700 hover:text-blue-400 w-4 h-4 mr-2"/>
                                    <p class="text-base font-semibold text-gray-700">ventas@docuxer.com</p>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center mr-2">
                                    <x-zondicon-location class="flex items-start text-gray-700 hover:text-blue-400 w-4 h-4 mr-2"/>
                                    <a href="https://www.google.com/maps/place/Av.+9+Este+%23+11-52,+C%C3%BAcuta,+Norte+de+Santander/@7.8875298,-72.4936046,17z/data=!3m1!4b1!4m6!3m5!1s0x8e66450a0250ef9f:0x42366b01b4c20b7a!8m2!3d7.8875298!4d-72.4910297!16s%2Fg%2F11j3kywpr8?entry=ttu" class="text-base font-semibold text-red-700">
                                        Google Maps
                                    </a>
                                </div>
                            </li>
                        </ul>
                </div>

            </div>
        </div>
    </div>

    <script>
        document.getElementById("myForm").addEventListener("submit", function(event) {
            var formIsValid = true;
            var inputs = document.getElementsByTagName("input");
            for (var i = 0; i < inputs.length; i++) {
                if (!inputs[i].checkValidity()) {
                    formIsValid = false;
                    break;
                }
            }
            var textareas = document.getElementsByTagName("textarea");
            for (var i = 0; i < textareas.length; i++) {
                if (!textareas[i].checkValidity()) {
                    formIsValid = false;
                    break;
                }
            }
            if (!formIsValid) {
                event.preventDefault();
                alert("Por favor complete todos los campos correctamente.");
            }
        });
    </script>

</div>
