

<nav class="bg-gray-900">

<div class="max-w-6xl px-4 py-5 mx-auto">
    <div class="flex justify-between"> <!-- justify-between-->

        <div class="flex space-x-4">
            <!-- logo -->
            <div>
                
            </div>
        </div>
        <div class="items-end mt-2">
            <!-- menu princinpal -->
            <div class="items-center hidden space-x-1 md:flex">
                <a href="/" class="px-3 py-2 font-bold text-white bg-gray-700 hover:bg-gray-400 rounded-md">Home</a>
                <a href="/show"
                   class="px-3 py-2 font-bold text-white bg-gray-700 rounded-md hover:bg-gray-400">Registro</a>
                <a href="/resultados"
                   class="px-3 py-2 font-bold text-white bg-gray-700 rounded-md hover:bg-gray-400">Resumen</a>

            </div>
        </div>



        <!-- Boton menu Movil -->
        <div class="flex items-center md:hidden">
            <button class="mobile-menu-button">
                <svg class="w-6 h-6 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </div>
</div>

<!-- mobile menu -->
<div class="hidden mobile-menu md:hidden px-5 ">
    <ul>
        <li>
            <a href="/"
               class="px-3 py-2 font-bold text-white bg-red-600 rounded-md hover:bg-blue-700">
                Home
            </a>
        </li>
        <br>
        <li>
            <a href="/show"
               class="px-3 py-2 font-bold text-white bg-red-600 rounded-md hover:bg-blue-700">Registros
                
            </a>
        </li>
        <br>
        <li>
            <a href="/resultados"
               class="px-3 py-2 font-bold text-white bg-red-600 rounded-md hover:bg-blue-700">Resumen
            </a>
        </li>

    </ul>

</div>
<br>

</nav>
