<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Barrios') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-7">

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

            <form action="{{-- {{route('tasks.update', $task)}} --}}" method="POST">
            
                @csrf
                <div class="mb-2">
                    <x-input-label>
                    id
                    </x-input-label>
                    <x-text-input type='text' name='id' class="w-full" placeholder='Ingrese el id' />
                </div>

                <div class="mb-2 mt-4">
                    <x-input-label>
                    nombre del barrio
                    </x-input-label>
                    <x-text-input type='text' name='nombre_barrio' class="w-full" placeholder='Ingrese el nombre del barrio' />
                </div>

                <div class="mb-2 mt-4">
                    <x-input-label>
                    upz
                    </x-input-label>
                    <x-text-input type='text' name='upz' class="w-full" placeholder='Ingrese el upz' />
                </div>

                <div class="mb-2 mt-4">
                    <x-input-label>
                    tipo
                    </x-input-label>
                    <x-text-input type='text' name='tipo_barrio' class="w-full" placeholder='Ingrese el tipo' />
                </div>

                <div class="mb-2 mt-4">
                    <x-input-label>
                    sector
                    </x-input-label>
                    <x-text-input type='text' name='sector_barrio' class="w-full" placeholder='Ingrese el sector' />
                </div>

                <div class="flex justify-end">
                    <button class="btn btn-blue mt-4">
                        
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"  class="block sm:hidden w-6 h-6 size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg>
                        
                        <span class="hidden sm:block">Agregar</span>
                        
                    </button>
                </div>
            </form>
        </div>
    </div>  

</x-app-layout>