<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex gap-10 py-12">
    <div class="w-64">
        <a href="" class="block w-full py-4 mb-10  text-white bg-blue-800 hover:bg-blue-500 bg-contain bg-center rounded-md text-center font-bold">Preguntar</a>
      <ul>
            @foreach($categories as $category)
            <li class="mb-2">
                <a href="#" wire:click.prevent="filterByCategory('{{ $category -> id}}')" class="py-2 rounded-md flex bg-slate-800 items-center gap-2 text-white/60 hover:text-white font-semibold text-sm capitalize">
                <span class="w-2 h-2 rounded-full" style="background-color: {{ $category -> color}};"></span>    
                {{ $category -> nombre}}
                </a>
            </li>
            @endforeach
            <li>
                <a href="#" wire:click.prevent="filterByCategory('')" class="py-2 rounded-md flex bg-slate-800 items-center gap-2 text-white/60 hover:text-white font-semibold text-sm capitalize">
                <span class="w-2 h-2 rounded-full" style="background-color: #000;"></span>    
                Todos los resultados
                </a>
            </li>
        </ul>
</div>
    <div class="w-full">
        <!-- Formulario -->
       
        <form action="" class="mb-4">
            <input 
                type="text" 
                placeholder="Buscar..." 
                class="bg-slate-700 border-0 rounded-md w-1/3 p-3 text-white/60 text-xs"
                wire:model.live="search"
            >
        </form>       
       
       
        @foreach($threads as $thread)
        <div class="rounded-md bg-gradient-to-r from-slate-800 to-slate-900 hover:to-slate-800 mb-4">
            <div class="p-4 flex gap-4">
                <div>
                    <img src="{{ $thread->user->avatar() }}" alt="{{ $thread->user->name }}"
                    class="round-md">
                </div>
                <div class="w-full">
                    <h2 class="mb-4 flex items-start justify-between">
                        <a href="{{ route('thread', $thread) }}" class="text-xl font-semibold text-white/90">
                            {{ $thread->title }}
                        </a>
                        <span 
                        class="rounded-full text-xs py-4 px-4 capitalize" 
                        style="color: {{ $thread->category->color }}; border: 1px solid {{ $thread->category->nombre }};">
                        {{ $thread->category->nombre }}
                        </span>
                    </h2>
                    <p class="flex items-center justify-between w-full text-xs">
                        <span class="text-blue-600 font-semibold">
                            {{ $thread->user->name }}
                                <span class="text-white/90">
                                    {{ $thread->created_at->diffForHumans() }}
                                </span>
                        </span>
                        <span class="flex items-center gap-1 text-slate-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M4.848 2.771A49.144 49.144 0 0112 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97-1.94.284-3.916.455-5.922.505a.39.39 0 00-.266.112L8.78 21.53A.75.75 0 017.5 21v-3.955a48.842 48.842 0 01-2.652-.316c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.68 3.348-3.97z" clip-rule="evenodd" />
                            </svg>

                            {{ $thread->replies_count }}    
                            Respuesta{{ $thread->replies_count !== 1 ? 's' : ''}} 
                        
                            |
                            <a href="" class="hover:text-white">Editar</a>
                        </span>
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

