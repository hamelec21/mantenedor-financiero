
<div class="bg-gray-200">


<!-- resumen-->


<div class="">
        <div class="bg-gray-100 flex items-center justify-center  font-sans">

            <div class="w-full lg:w-5/6">
            @livewire('resultados')

            <div>
        <div>
</div>






<div class="bg-gray-100 flex items-center justify-center  font-sans overflow-hidden">
    <div class="w-full lg:w-5/6">
        <div class="container flex justify-center mx-auto">
            
        @livewire('crear')
        </div>
    </div>
</div>


<!-- show registros  -->
<div class="overflow-x-auto">
        <div class="bg-gray-100 flex items-center justify-center  font-sans overflow-hidden">
            <div class="w-full lg:w-5/6">
                <div class="bg-white shadow-md rounded my-6">

              
                    <table class=" w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">fecha</th>    
                                <th class="py-3 px-6 text-left">Items</th>
                                <th class="py-3 px-6 text-left">Valor</th>
                                <th class="py-3 px-6 text-left">Tipo Transaccion</th>
                                <th class="py-3 px-6 text-left">observacion</th>
                                <th class="py-3 px-6 text-left">Referencia</th>
                                <th class="py-3 px-6 text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                        @foreach($registros as $registro)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                            
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">

                                   
                                        
                                        <span class="font-medium uppercase">{{ date('d-m-Y', strtotime($registro->fecha)) }}</span>
                                    </div>
                                </td>
                            
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        
                                        <span class="font-medium uppercase">{{ $registro->items}}</span>
                                    </div>
                                </td>

                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        
                                    <span class="font-medium uppercase">${{ number_format($registro['valor'], 0) }}</span>
                                    </div>
                                </td>


                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center ">
                                        
                                    <span class="font-medium uppercase text-center">{{ $registro->tipo_transaccion}}</span>
                                    </div>
                                </td>

                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        
                                    <span class="font-medium uppercase">{{ $registro->observacion}}</span>
                                    </div>
                                </td>

                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        
                                    <span class="font-medium uppercase">{{ $registro->referencia}}</span>
                                    </div>
                                </td>

                               

                                <td class="py-3 px-6 text-center">
                                    <div class="flex item-center justify-center">
                                        
                                        <div class="mr-2">
                                        @livewire('editar',['registro'=>$registro],key($registro->id))
                                        </div>                                     
                                        
                                        <div class=" mr-2  transform hover:text-purple-500 hover:scale-110">
                                        <a onclick="confirm('Estas Seguro de Eliminar El Registro!')||event.stopImmediatePropagation()" wire:click="destroy({{$registro->id}})"><button class="bg-red-600 text-white hover:bg-red-600 rounded-md px-4 py-2" >Eliminar</button> </a>
                                        </div> 
                                        
                                    </div>
                                </td>

                            </tr>

                            @endforeach
                            
                        </tbody>
                    </table>

                </div>
                {{ $registros->links() }}
            </div>
            
        </div>
    </div>



















</div>
