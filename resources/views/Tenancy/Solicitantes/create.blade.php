<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Solicitantes') }}
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
                    <x-text-input type='text' name='id' class="w-full" required placeholder='Ingrese el id' />
                </div>

                <div class="mb-2 mt-4">
                    <x-input-label>
                    fecha de registro
                    </x-input-label>
                    <x-text-input type='date' name='id_solicitud' class="w-full" required placeholder='Ingrese la fecha de registro' />
                </div>

                <div class="mb-2 mt-4">
                    <x-input-label>
                    Primer nombre 
                    </x-input-label>
                    <x-text-input type='text' name='fecha_validacion' class="w-full" placeholder='Ingrese el primer nombre' />
                </div>

                <div class="mb-2 mt-4">
                    <x-input-label>
                    segundo nombre
                    </x-input-label>
                    <x-text-input type='text' name='validacion_salud' class="w-full" placeholder='Ingrese el segundo nombre' />
                </div>

                <div class="mb-2 mt-4">
                    <x-input-label>
                    primer apellido
                    </x-input-label>
                    <x-text-input type='text' name='evidencia_salud' class="w-full" placeholder='Ingrese el primer apellido' />
                </div>

                <div class="mb-2 mt-4">
                    <x-input-label>
                    segundo apellido
                    </x-input-label>
                    <x-text-input type='text' name='validacion_elecciones' class="w-full" placeholder='Ingrese el segundo apellido' />
                </div>

                <div class="mb-2 mt-4">
                    <x-input-label>
                    correo electronico
                    </x-input-label>
                    <x-text-input type='email' name='evidencia_elecciones' class="w-full" placeholder='Ingrese el correo electronico' />
                </div>

                <div class="mb-2 mt-4">
                    <x-input-label>
                    telefono
                    </x-input-label>
                    <x-text-input type='tel' name='validacion_juntas' class="w-full" placeholder='Ingrese el telefono' />
                </div>

                <div class="mb-2 mt-4">
                    <x-input-label>
                    id tipo de solicitante
                    </x-input-label>
                    <x-text-input type='text' name='evidencia_juntas' class="w-full" placeholder='Ingrese el id tipo de solicitante' />
                </div>

                <div class="mb-2 mt-4">
                    <x-input-label>
                    id tipo de documento
                    </x-input-label>
                    <x-text-input type='text' name='evidencia_juntas' class="w-full" placeholder='Ingrese el id tipo de documento' />
                </div>

                <div class="mb-2 mt-4">
                    <x-input-label>
                    numero de identificación
                    </x-input-label>
                    <x-text-input type='text' name='evidencia_juntas' class="w-full" placeholder='Ingrese el numero de identificación' />
                </div>

                <div class="mb-2 mt-4">
                    <x-input-label>
                    Ciudad de expediciones
                    </x-input-label>
                    <x-text-input type='text' name='evidencia_juntas' class="w-full" placeholder='Ingrese la Ciudad de expediciones' />
                </div>

                <div class="mb-2 mt-4">
                    <x-input-label>
                    fecha de nacimiento
                    </x-input-label>
                    <x-text-input type='date' name='evidencia_juntas' class="w-full" placeholder='Ingrese la fecha de nacimiento' />
                </div>

                <div class="mb-2 mt-4">
                    <x-input-label>
                    id nivel de estudio
                    </x-input-label>
                    <x-text-input type='text' name='evidencia_juntas' class="w-full" placeholder='Ingrese el id nivel de estudio' />
                </div>

                <div class="mb-2 mt-4">
                    <x-input-label>
                    id genero
                    </x-input-label>
                    <x-text-input type='text' name='evidencia_juntas' class="w-full" placeholder='Ingrese el id genero' />
                </div>

                <div class="mb-2 mt-4">
                    <x-input-label>
                    ocupacion
                    </x-input-label>
                    <x-text-input type='text' name='evidencia_juntas' class="w-full" placeholder='Ingrese la ocupacion' />
                </div>

                <div class="mb-2 mt-4">
                    <x-input-label>
                    rol
                    </x-input-label>
                    <x-text-input type='text' name='evidencia_juntas' class="w-full" placeholder='Ingrese el rol' />
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