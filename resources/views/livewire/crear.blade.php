
<div>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>



<!--df -->
<div class="flex h-full hover:scale-110">
    <div class="flex items-center justify-center flex-1 h-full p-2 border border-gray-400 rounded-lg bg-blue-800">
    

        <div class="text-white" wire:click="$set('open_crear', true)">
            Crear Nuevo Registro

        </div>
    </div>          
</div>
<!-- df-->


<x-jet-dialog-modal wire:model="open_crear" maxWidth="2xl">
        <x-slot name="title">
            <div class="text-white bg-gradient-to-r from-sky-600 to-cyan-400 shadow-lg text-center font-bold pt-4 pb-4 w-full rounded-lg">
                Crear Nuevo Producto
            </div>

        </x-slot>

        <x-slot name="content" >

       <div class="bg-cyan-500 rounded-lg">
            
        <form>
        <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4">
            <label class="px-2">Fecha</label>
            <input wire:model="fecha" type="date" name="fecha" id="" placeholder=""
                class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
            @error('fecha') <span class="error text-red-600 text-xs">{{ $message }}</span> @enderror
        </div>

    <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4">
        <label class="px-2">Tipo de Transaccion</label>
        <select wire:model="tipo_transaccion" type="text" name="tipo_transaccion" id="" placeholder=""
            class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
            <option value="">Seleccione</option>
            <option value="ingreso">Ingreso</option>
            <option value="egreso">Egreso</option>
        </select>
        @error('tipo_transaccion') <span class="error text-red-600 text-xs">{{ $message }}</span> @enderror
    </div>

        <div class=" text-left text-gray-900 font-bold py-1 text-sm px-2">
            <label class="px-2">Item</label>
            <input wire:model="items" type="text" name="item" id="" placeholder="Ejem:Arriendo"
                class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
            @error('item') <span class="error text-red-600 text-xs">{{ $message }}</span> @enderror
        </div>


        <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4">
            <label class="px-2">valor</label>
            <input wire:model="valor" type="text" name="precio" id="" placeholder="1000"
                class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent">
            @error('valor') <span class="error text-red-600 text-xs">{{ $message }}</span> @enderror
        </div>



        <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4">
            <label class="px-2">Observación</label>
            <textarea wire:model="observacion" type="text" name="nombre" id="" placeholder="Observación"
                    minlength="10"
                    class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"></textarea>

            @error('observacion') <span
                class="error text-red-600 text-xs">{{ $message }}</span> @enderror
        </div>


        <div class=" text-left text-gray-900 font-bold py-1 text-sm px-4">
            <label class="px-2">Referencia</label>
            <textarea wire:model="referencia" type="text" name="referencia" id="" placeholder="Referencia"
                    minlength="10"
                    class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-1 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"></textarea>

            @error('referencia') <span
                class="error text-red-600 text-xs">{{ $message }}</span> @enderror
        </div>




        </form>
        </div>
        </x-slot>

        <x-slot name="footer">
            

            <x-jet-button class="ml-4 bg-blue-800" wire:click="save">
               Guardar
            </x-jet-button>

            <x-jet-secondary-button class="ml-4" wire:click="$set('open_crear',false)">
                Cancelar
            </x-jet-secondary-button>
        </x-slot>
    </x-jet-dialog-modal>

    
    
        
</div>