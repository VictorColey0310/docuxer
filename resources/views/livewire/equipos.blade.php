<div>
    <div class="pt-20 ">
        <div class="pl-10 pr-10 pb-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12 md:gap-6  lg:mx-48">
            @foreach ($consulta_equipo as $equipo)
                <div class="col-span-1 sm:col-span-1 lg:col-span-1 py-3  pb-20">
                    <div class="max-w-sm pb-8 mx-auto bg-white border rounded-2xl text-gray-900 ">
                        <div class="p-4 text-center">
                            <div class="mx-auto w-40 h-40 relative -mt-16 mb-4 border rounded-full overflow-hidden">
                                <img src="{{ asset($equipo->imagen) }}" class="object-cover object-center"
                                    alt="Team Image">
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
</div>
