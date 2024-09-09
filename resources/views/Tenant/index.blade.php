<x-app-layout>

    
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Inquilinos
            </h2>
        </x-slot>

        <x-container class="py-12">

            <div class="justify-end px-6 py-4 ">
                <a href="{{route('inquilino.create')}}" class="btn btn-blue" >
                    Nuevo inquilino
                </a>
            </div>  

            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">Id</th>
                        <th scope="col" class="px-6 py-3">Dominio</th>
                    </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($inquilinos as $inquilino)
                                                         
                            <tr class="bg-white border-b text-gray-700">
                                <th scope="row" class="px-6 py-4 ">
                                    {{$inquilino->id}}
                                </th>
                                <td class="px-10 py-4">
                                    {{$inquilino->domains->first()->domain ?? '' }}
                                </td>
                                <td class="px-6 py-4 ">
                                    <div class="flex justify-end">
                                        <form method="POST" action="{{route('inquilino.destroy', $inquilino) }}" >
                                            @csrf
                                            @method('DELETE')
                                            <input type = "submit" value="Delete" class="btn-red mr-2 btn"/>
                                        </form>    

                                        <a href="{{route('inquilino.edit', $inquilino) }}" class=" btn-blue btn "> 
                                            Editar
                                        </a>
                                    </div>
                                </td>    
                                      
                            </tr>
                         @endforeach 
                    </tbody>
                </table>
            </div>  
            
            
           


        </x-container>





</x-app-layout>