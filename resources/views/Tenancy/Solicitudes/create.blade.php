<x-tenancy-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Solicitudes') }}
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
                    fecha de Solicitud
                    </x-input-label>
                    <x-text-input type='date' name='id_solicitud' class="w-full" required placeholder='Ingrese la fecha de solicitud' />
                </div>

                <div class="mb-2 mt-4">
                    <x-input-label>
                    numero de identificacion
                    </x-input-label>
                    <x-text-input type='text' name='fecha_validacion' class="w-full" placeholder='Ingrese el numero de identificacion ' />
                </div>

                <div class="mb-2 mt-4">
                    <x-input-label>
                    fecha actual
                    </x-input-label>
                    <x-text-input type='date' name='validacion_salud' class="w-full" placeholder='Ingrese la fecha actual' />
                </div>

                <div class="mb-2 mt-4">
                    <x-input-label>
                    id barrio
                    </x-input-label>
                    <x-text-input type='text' name='evidencia_salud' class="w-full" placeholder='Ingrese la id barrio' />
                </div>

                <div class="mb-2 mt-4">
                    <x-input-label>
                    direccion
                    </x-input-label>
                    <x-text-input type='text' name='validacion_elecciones' class="w-full" placeholder='Ingrese la dirreccion' />
                </div>

                <div class="mb-2 mt-4">
                    <x-input-label>
                    ubicacion
                    </x-input-label>
                    <x-text-input type='text' name='evidencia_elecciones' class="w-full" placeholder='Ingrese la ubicacion' />
                </div>

                <div class="mb-2 mt-4">
                    <x-input-label>
                    evidencia pdf
                    </x-input-label>
                    <x-text-input type='file' name='validacion_juntas' class="" placeholder='Ingrese la evidencia' />


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

</x-tenancy-layout>
