<div class="mt-16">
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}

    <div class="overflow-hidden">
        <x-input wire:model.live="search" class="md:float-right py-1 px-2
        w-80 text-stone-700" placeholder="Buscar Post"/>
    </div>

    @if(count($post))
        <div wire:loading.class="opacity-55" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
            @foreach($post as $onepost)
                <article class="bg-gray-200 m-10 p-4">
                    <div>
                        <img src="{{$onepost->imagen}}" alt="">
                    </div>
                    <div>
                        <h2 class="text-center text-2xl text-gray-500 my-2">{{$onepost->titulo}}</h2>
                        <p>{{$onepost->fecha->toFormattedDateString()}}</p>
                        <p class="text-left my-2 text-gray-500">{{$onepost->extracto}}</p>

                            <button class="mx-auto text-center text-gray-700 rounded-3xl p-1 block
                            bg-gray-400 w-32 hover:bg-gray-500 hover:text-white
                            transition duration-150">Saber Mas</button>
                    </div>
                </article>
            @endforeach
        </div>
    @else
        <div class="text-center text-xl text-red-500">No se encontraron registros</div>
    @endif
{{-- 
    Paginator Reference: [C:\xampp\htdocs\apps\app_blog\resources\views\vendor\livewire]  
    Key Word: $paginator->onFirstPage()
    Este archivo nos ayudara a ppersonalizar los botones del paginador, por
     ejemplo, a darle un tono mas oscuro al cuadro, o bloquear ell cursos con 
     hover:cursor-not-allowed
    --}}
    @if ($post->hasPages())
    <div class="pp-2 bg-stone-200">
        {{ $post->links() }}
    </div>
    @endif

</div>
