<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Validaciones') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-7">

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

            <form action="{{-- {{route('tasks.update', $task)}} --}}" method="POST">
            
                @csrf
                <div class="mb-2">
                    <div class="mb-2">
                        <x-input-label>
                        id
                        </x-input-label>
                        <x-text-input type='text' name='id' class="w-full" required placeholder='Ingrese el id' />
                    </div>
    
                    <div class="mb-2 mt-4">
                        <x-input-label>
                        id solicitud
                        </x-input-label>
                        <x-text-input type='text' name='id_solicitud' class="w-full" required placeholder='Ingrese el id solicitud' />
                    </div>
    
                    <div class="mb-2 mt-4">
                        <x-input-label>
                        fecha validacion
                        </x-input-label>
                        <x-text-input type='data' name='fecha_validacion' class="w-full" placeholder='Ingrese la fecha validacion' />
                    </div>
    
                    <div class="mb-2 mt-4">
                        <x-input-label>
                        validacion salud
                        </x-input-label>
                        <x-text-input type='text' name='validacion_salud' class="w-full" placeholder='Ingrese la validacion salud' />
                    </div>
    
                    <div class="mb-2 mt-4">
                        <x-input-label>
                        evidencia salud
                        </x-input-label>
                        <x-text-input type='file' name='evidencia_salud' class="w-full" placeholder='Ingrese la evidencia salud' />
                    </div>
    
                    <div class="mb-2 mt-4">
                        <x-input-label>
                        validacion elecciones
                        </x-input-label>
                        <x-text-input type='text' name='validacion_elecciones' class="w-full" placeholder='Ingrese la validacion elecciones' />
                    </div>
    
                    <div class="mb-2 mt-4">
                        <x-input-label>
                        evidencia elecciones
                        </x-input-label>
                        <x-text-input type='file' name='evidencia_elecciones' class="w-full" placeholder='Ingrese la evidencia elecciones' />
                    </div>
    
                    <div class="mb-2 mt-4">
                        <x-input-label>
                        validacion juntas
                        </x-input-label>
                        <x-text-input type='text' name='validacion_juntas' class="w-full" placeholder='Ingrese la validacion juntas' />
                    </div>
    
                    <div class="mb-2 mt-4">
                        <x-input-label>
                        evidencia juntas
                        </x-input-label>
                        <x-text-input type='file' name='evidencia_juntas' class="w-full" placeholder='Ingrese la evidencia juntas' />
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