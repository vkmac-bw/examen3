@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 gap-4">
        <h1 class="text-2xl font-bold text-gray-900">Directores</h1>
        <a href="{{ route('directores.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full md:w-auto text-center">
            Nuevo Director
        </a>
    </div>

    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full table-auto">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">Nombre</th>
                        <th class="py-3 px-6 text-left hidden sm:table-cell">Nacionalidad</th>
                        <th class="py-3 px-6 text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                    @foreach($directores as $director)
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left whitespace-nowrap">{{ $director->nombre }}</td>
                        <td class="py-3 px-6 text-left hidden sm:table-cell">{{ $director->nacionalidad }}</td>
                        <td class="py-3 px-6 text-center">
                            <div class="flex flex-col sm:flex-row item-center justify-center gap-2 sm:gap-0">
                                <a href="{{ route('directores.edit', $director) }}" class="text-blue-500 hover:text-blue-700 sm:mx-2">
                                    <span class="sm:hidden"><i class="fas fa-edit mr-1"></i></span>
                                    <span class="hidden sm:inline">Editar</span>
                                </a>
                                <form action="{{ route('directores.destroy', $director) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700 sm:mx-2" onclick="return confirm('¿Estás seguro?')">
                                        <span class="sm:hidden"><i class="fas fa-trash mr-1"></i></span>
                                        <span class="hidden sm:inline">Eliminar</span>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Mostrar mensaje cuando no hay directores -->
    @if($directores->isEmpty())
    <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 mt-4" role="alert">
        <p>No se encontraron directores registrados.</p>
    </div>
    @endif
</div>
@endsection