<x-tenancy-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tipos de solicitantes') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-7">

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

            <form action="{{-- {{route('tasks.update', $task)}} --}}" method="POST">

                @csrf

                @method('PUT')

                <div class="mb-2">
                    <x-input-label>
                    id
                    </x-input-label>

                    <x-text-input type='text' name='id' class="w-full" value='{{-- {{old('id', $task->id)}} --}}' placeholder='Ingrese el nuevo id' />
                </div>

                <div class="mb-2 mt-4">
                    <x-input-label>
                    tipo de solicitante
                    </x-input-label>

                    <x-text-input type='text' name='tipoDocumento' class="w-full" value='{{-- {{old('tipoDocumento', $task->tipoDocument)}} --}}' placeholder='Ingrese el nuevo tipo de solicitante' />
                </div>

                <div class="flex justify-end">
                    <button class="btn btn-blue mt-4">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"  class="block sm:hidden w-6 h-6 size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg>
                        <p class="hidden sm:block">Actualizar</p>
                    </button>
                </div>
            </form>
        </div>
    </div>

</x-tenancy-layout>
