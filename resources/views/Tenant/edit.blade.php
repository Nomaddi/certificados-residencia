<x-app-layout>


        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Inquilino
            </h2>
        </x-slot>


    <x-container class="py-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('inquilino.index') }}">Atras</a>
                    
                        
                                    
                    <form method="POST" action="{{ route('inquilino.update', $inquilino->id) }}">
                        @method('PUT')
                        @csrf
                        <div class="mb-4">
                            <input-label>
                            Nombre
                            </input-label>
                            <x-text-input name="id" type="text" value="{{$inquilino->id}}" class="w-full mt-2" />
                                {{--Mostrar mensajes de error con input-error --}}
                            <x-input-error :messages="$errors->first('id')"/>
                        </div>
                        <div class="flex justify-end">
                            <button class="btn btn-blue">
                                Actualizar
                            </button>
                        </div>
                            
                    </form>
                   
            </div>
        </div>
    </x-container>




</x-app-layout>