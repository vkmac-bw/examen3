@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto">
    <h1 class="text-2xl font-bold text-gray-900 mb-6">Editar Director</h1>

    <form action="{{ route('directores.update', $director) }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="nombre">
                Nombre
            </label>
            <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $director->nombre) }}"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                required>
            @error('nombre')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="nacionalidad">
                Nacionalidad
            </label>
            <input type="text" name="nacionalidad" id="nacionalidad" value="{{ old('nacionalidad', $director->nacionalidad) }}"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                required>
            @error('nacionalidad')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center justify-between">
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Actualizar
            </button>
            <a href="{{ route('directores.index') }}"
                class="text-gray-500 hover:text-gray-700 font-bold py-2 px-4 rounded">
                Cancelar
            </a>
        </div>
    </form>
</div>
@endsection