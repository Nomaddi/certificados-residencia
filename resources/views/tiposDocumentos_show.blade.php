<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tipos de documentos') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-7">

                

<div class="relative overflow-x-auto sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 rounded-lg">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    id
                </th>
                <th scope="col" class="px-6 py-3">
                    tipo de documento
                </th>
                <th scope="col" class="px-6 py-3">
                    
                </th>

            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($collection as $item) --}}
                
            <tr class="bg-white border-b  ">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                    {{-- task->id --}}1
                </th>
                <td class="px-6 py-4 text-gray-700">
                    {{-- task->tipo_documento --}}cedula de ciudadania
                </td>
                </th>
                <td class="px-6 py-4 text-gray-700">
                    <div class="flex justify-end ">
                        <a href="{{-- {{route('tasks.show', $task)}} --}}" class="btn btn-blue mx-2">ver</a>
                        <a href="" class="btn btn-green mx-2">Editar</a>
                        
                        <form action="" method="POST"> 
                            @csrf

                            @method('DELETE')
                        <button href="" class="btn btn-red mx-2">Eliminar</button>
                        </form>
                    </div>    
                </td>
            </tr>
            
            {{-- @endforeach --}}
        </tbody>
    </table>
</div>

        
    </div>  

</x-app-layout>
