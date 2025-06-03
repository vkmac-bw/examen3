@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-100 to-gray-200 py-6 flex flex-col justify-center sm:py-12">
    <div class="relative py-3 sm:max-w-xl sm:mx-auto">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-400 to-blue-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl"></div>
        <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20 transition-all duration-300 hover:shadow-xl">
            <div class="max-w-md mx-auto">
                <div class="divide-y divide-gray-200">
                    <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                        <h2 class="text-3xl font-extrabold mb-8 text-gray-900 text-center">Crear Nuevo Director</h2>
                        <form method="POST" action="{{ route('directores.store') }}" class="space-y-6">
                            @csrf
                            <div class="space-y-2">
                                <label for="nombre" class="block text-sm font-semibold text-gray-700">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition duration-200" required>
                            </div>
                            <div class="space-y-2">
                                <label for="nacionalidad" class="block text-sm font-semibold text-gray-700">Nacionalidad</label>
                                <input type="text" name="nacionalidad" id="nacionalidad" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition duration-200" required>
                            </div>
                            <div class="flex items-center justify-end mt-8">
                                <button type="submit" class="bg-gradient-to-r from-blue-500 to-blue-700 text-white font-bold py-3 px-6 rounded-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-200 ease-in-out hover:shadow-lg">
                                    Guardar Director
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection