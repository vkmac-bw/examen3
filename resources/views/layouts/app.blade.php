<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentales App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow-lg">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center py-4 px-2">
                    <span class="font-bold text-2xl text-blue-600">Documentales App</span>
                </div>

                <!-- Botón de menú móvil -->
                <div class="md:hidden flex items-center">
                    <button class="mobile-menu-button outline-none" onclick="toggleMenu()">
                        <svg class="w-6 h-6 text-gray-500" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>

                <!-- Menú de navegación -->
                <div class="hidden md:flex items-center space-x-4" id="menu">
                    <a href="{{ route('documentales.index') }}" class="py-4 px-3 text-gray-700 hover:text-blue-600 font-medium transition duration-300">Documentales</a>
                    <a href="{{ route('directores.index') }}" class="py-4 px-3 text-gray-700 hover:text-blue-600 font-medium transition duration-300">Directores</a>
                    <a href="{{ route('documentales.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                        Nuevo Documental
                    </a>
                </div>
            </div>

            <!-- Menú móvil -->
            <div class="md:hidden hidden" id="mobile-menu">
                <div class="flex flex-col space-y-2 pb-4">
                    <a href="{{ route('documentales.index') }}" class="py-2 px-3 text-gray-700 hover:text-blue-600 font-medium transition duration-300">Documentales</a>
                    <a href="{{ route('directores.index') }}" class="py-2 px-3 text-gray-700 hover:text-blue-600 font-medium transition duration-300">Directores</a>
                    <a href="{{ route('documentales.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                        Nuevo Documental
                    </a>
                </div>
            </div>
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

    <!-- Script para el menú móvil -->
    <script>
        function toggleMenu() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        }
    </script>
</body>
</html>