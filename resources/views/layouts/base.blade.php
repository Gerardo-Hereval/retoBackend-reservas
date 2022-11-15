<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Vive la aventura...</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>


    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <!-- Mobile menu button-->
                    <button id="boton" type="button" class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex flex-shrink-0 items-center">
                        <img class="block h-10 w-auto lg:hidden transition-ease-in duration-700 hover:scale-150" src="img/img.png" alt="Company">
                        <img class="hidden h-10 w-auto lg:block transition-ease-in duration-700 hover:scale-150" src="img/img.png" alt="Company">
                    </div>
                    <div id="menu" class="hidden sm:ml-6 sm:block" >
                        <div class="flex space-x-4">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <a href="/" class="bg-gray-800 hover:bg-gray-700 text-gray-300 px-3 py-2 rounded-md text-sm font-medium border-b-2 border-gray-600 transition-ease-in duration-700 hover:scale-110">Inicio</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div id="menu" class="sm:hidden hidden">
            <div class="space-y-1 px-2 pt-2 pb-3">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="/" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium border-b-2 border-gray-600 transition-ease-in duration-700 hover:scale-110">Inicio</a>

                <a href="/buscar" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium border-b-2 border-gray-600 transition-ease-in duration-700 hover:scale-110">Buscar</a>

            </div>
        </div>
    </nav>


    <h1> @yield('titulo')</h1>

<hr>
    @yield('contenido')

</body>


</html>
