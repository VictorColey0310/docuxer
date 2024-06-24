<div>
    <style>
        .custom-truncate {
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 5;
        -webkit-box-orient: vertical;
        line-height: 1.2;
    }
    </style>
    <section class="s_cover pb-24 pt-24 bg-cover bg-[#d0d0d0]" style="background-image: url('/img/portada.webp');" >
        <div class="s_parallax_bg" style="background-position: 50% 0px;"></div>
        <div class="container mx-auto flex justify-center">
            <div class="w-full lg:w-auto lg:max-w-screen-xl">
                <div class="s_title pt-0 pb-0">
                    <h1 class="text-5xl lg:text-6xl text-center text-red-800 font-semibold">DocuBlog</h1>
                    <p class="text-lg font-semibold text-center text-red-800">Tranformación tecnologica.</p>
                </div>
            </div>
        </div>
    </section>
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 pt-8">
        @foreach ($blogs as $blog)
            <div class="pb-8 mx-2 md:mx-0">
                <a href="{{ route('blogview', $blog->id) }}" class="cursor-pointer">
                    <div class="w-full h-64">
                        <img src="{{ asset($blog->foto_portada) }}" class="object-cover w-full h-full group hover:filter hover:saturate-150" alt="imagen {{$blog->titulo}}">
                    </div>
                    <p class="text-xl font-semibold pt-2 pb-1 mb-1">
                        {{$blog->titulo }}
                    </p>
                    <p class="text-md custom-truncate pb-1">
                        {{$blog->descripcion }}
                    </p>
                </a>
                <p class="text-xs font-bold">
                    {{$blog->created_at->locale('es')->format('M. d, Y')}}
                </p>
            </div>
        @endforeach
        <div class="py-8 flex justify-center">
            {{ $blogs->links() }}
        </div>
    </div>
</div>
