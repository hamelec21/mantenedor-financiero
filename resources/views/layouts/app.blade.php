<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        

        <!-- Scripts -->
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
     @include('menu')
        

        <div class="min-h-screen bg-gray-100">

      
            

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


        <!--Scrip de alertas-->

        <script>
            Livewire.on('insert', function(message) {

                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Registro Creado Exitosamente',
                    showConfirmButton: false,
                    timer: 1500
                })
            })
        </script>
        <!--mensajes para editar-->
        <script>
            Livewire.on('editar', function(message) {

                Swal.fire({
                    position: 'top-end',
                    icon: 'info',
                    title: 'Registro Actualizado',
                    showConfirmButton: false,
                    timer: 1500
                })
            })
        </script>
        <!--mensajes para Eliminar-->
        <script>
            Livewire.on('borrar', function(message) {

                Swal.fire({
                    position: 'top-end',
                    icon: 'warning',
                    title: 'Registro Eliminado',
                    showConfirmButton: false,
                    timer: 1500
                })

            })
        </script>







    </body>
</html>
