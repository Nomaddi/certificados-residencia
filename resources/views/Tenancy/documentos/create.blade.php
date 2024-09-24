<x-tenancy-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tipos de documentos') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-7">

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

            <form action=" {{route('documento.store')}}" method="POST">

                @csrf
                <div class="mb-2">
                    <x-input-label>
                    id
                    </x-input-label>
                </div>
                <x-text-input type='text' name='id' class="w-full" placeholder='Ingrese el id' />

                <div class="mb-2 mt-4">
                    <x-input-label>
                    Tipo de documento
                    </x-input-label>
                </div>
                <x-text-input type='text' name='tipoDocumento' class="w-full" placeholder='Ingrese el nombre del documento' />

                <div class="flex justify-end">
                    <button class="btn btn-blue mt-4">
                        guardar
                    </button>
                </div>
            </form>
        </div>
    </div>

</x-tenancy-layout>
