<div>

    <div class="relative mb-8">
        <div class="bg-[url('{{ asset($blog->foto_portada ?? '') }}')] bg-cover bg-center">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <p class="text-4xl lg:text-6xl font-light text-white text-center py-14 relative z-10 px-8 sm:px-24 lg:px-40">
                {{$blog->titulo ?? ''}}
            </p>
        </div>
    </div>

    <nav class="flex justify-center px-4 py-0 pb-10 mb-3 bg-transparent">
        <ol class="list-none flex">
            <li class="breadcrumb-item mr-5">
                <a href="{{ route('blog') }}" class="text-red-500 hover:text-red-700">All Blogs > </a>
            </li>
            <li class="breadcrumb-item text-truncate active">
                <span class="text-gray-500">{{ $blog->titulo ?? '' }}</span>
            </li>
        </ol>
    </nav>


    <div class="flex justify-center pb-20 px-4">
        <div class="max-w-md sm:max-w-2xl font-light">
            <img src="{{ asset($blog->foto_portada ?? '') }}" alt="{{ $blog->titulo }} imagen" class="max-w-full h-auto mb-4">

            {{$blog->descripcion ?? ''}}

            @foreach ($blog->contenido as $item)
                @switch($item['type'])
                    @case('image')
                        <img src="{{ asset($item['value'] ?? '') }}" alt="image" class="max-w-full h-auto">
                    @break
                    @case('subtitle')
                        <p class="text-2xl mb-2 py-4">
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
                        <li class="pl-6 text-lg font-light">
                            {{ $item['value'] ?? '' }}
                        </li>
                    @break
                @endswitch
            @endforeach
        </div>
    </div>

    <div class="pt-15 relative mb-8">
        <div class="bg-[url('{{ asset($nextBlog->foto_portada ?? '') }}')]  bg-cover bg-center">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            @if($nextBlogTitle)
                <div class="text-4xl lg:text-6xl font-light text-white text-center py-14 relative z-10 px-8 sm:px-24 lg:px-40">
                    <p>
                        {{ $nextBlogTitle }}
                    </p>
                    <a href="{{ route('blogview', $nextBlogId) }}" class="z-50 right-0 mr-8 mb-8 text-white px-4 py-2">
                        >
                    </a>

                </div>

            @else
                <p class="text-4xl lg:text-6xl font-light text-white text-center py-14 relative z-10 px-8 sm:px-24 lg:px-40">
                    No hay más blogs disponibles
                </p>
            @endif
        </div>
    </div>
</div>
