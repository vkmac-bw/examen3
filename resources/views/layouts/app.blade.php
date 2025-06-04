<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentales App</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Íconos de Font Awesome para el menú hamburguesa -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow-lg">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-7">
                    <div class="flex items-center py-4 px-2">
                        <span class="font-bold text-2xl text-blue-600">Documentales App</span>
                    </div>
                    <!-- Menú principal - oculto en móviles -->
                    <div class="hidden md:flex items-center space-x-4">
                        <a href="{{ route('documentales.index') }}" class="py-4 px-3 text-gray-700 hover:text-blue-600 font-medium transition duration-300">Documentales</a>
                        <a href="{{ route('directores.index') }}" class="py-4 px-3 text-gray-700 hover:text-blue-600 font-medium transition duration-300">Directores</a>
                    </div>
                </div>
                <!-- Botón nuevo documental - oculto en móviles -->
                <div class="hidden md:flex items-center">
                    <a href="{{ route('documentales.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                        Nuevo Documental
                    </a>
                </div>
                <!-- Botón del menú hamburguesa - solo visible en móviles -->
                <div class="md:hidden flex items-center">
                    <button class="outline-none mobile-menu-button">
                        <i class="fas fa-bars text-gray-700 text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Menú móvil -->
        <div class="hidden mobile-menu">
            <ul class="">
                <li class="active"><a href="{{ route('documentales.index') }}" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 transition duration-300">Documentales</a></li>
                <li><a href="{{ route('directores.index') }}" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 transition duration-300">Directores</a></li>
                <li>
                    <a href="{{ route('documentales.create') }}" class="block px-4 py-3 text-blue-600 hover:bg-blue-50 transition duration-300 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                        Nuevo Documental
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mx-auto px-4 py-8">
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        @yield('content')
    </div>

    <script>
        // Script para el menú hamburguesa
        const btn = document.querySelector(".mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");

        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    </script>
</body>
</html>