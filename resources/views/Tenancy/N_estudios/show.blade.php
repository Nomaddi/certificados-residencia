<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tipos de solicitantes') }}
        </h2>
    </x-slot>
    
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-3 pb-2 flex justify-end max-sm:pr-2">
        
        <a href="{{-- {{route('tasks.show', $task)}} --}}" class="btn btn-blue ">
            
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="block sm:hidden w-6 h-6 size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
            
            
            <span class="hidden sm:block">Agregar</span>

        </a>
        
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">

        
        <div class="relative overflow-x-auto sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 rounded-lg">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 max-mobile:px-4 py-3">
                            id
                        </th>
                        <th scope="col" class="px-6 max-mobile:px-2 py-3">
                            nivel de estudio
                        </th>
                        <th scope="col" class="px-6 py-3">
                        
                        </th>

                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($collection as $item) --}}
                        
                    <tr class="bg-white border-b  ">
                        <th scope="row" class="px-6 max-mobile:px-4 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            {{-- task->id --}}1
                        </th>
                        <td class="px-6 max-mobile:px-2 py-4 text-gray-700">
                            {{-- task->tipo_documento --}}cedula de ciudadania
                        </td>
                        </th>
                        <td class="px-6 max-mobile:px-2 py-4 text-gray-700">
                            <div class="flex justify-end ">
                                
                                <a href="" class="btn btn-green mx-2">
                                    
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="block sm:hidden w-6 h-6 size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                                    </svg>
                                    
                                    
                                    <span class="hidden sm:block">Editar</span>
                                </a>
                                
                                <form action="" method="POST"> 
                                    @csrf

                                    @method('DELETE')
                                    <button href="" class="btn btn-red mx-2">

                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="block sm:hidden w-6 h-6 size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                        </svg>

                                        <span class="hidden sm:block">Eliminar</span>
                                    </button>
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
