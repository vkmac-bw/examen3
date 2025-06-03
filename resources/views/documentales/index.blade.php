@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold text-gray-900">Documentales</h1>
    <a href="{{ route('documentales.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Nuevo Documental
    </a>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach($documentales as $documental)
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <img src="{{ Storage::url($documental->poster) }}" alt="{{ $documental->titulo }}" class="w-full h-48 object-cover">
        <div class="p-4">
            <h2 class="text-xl font-semibold text-gray-800">{{ $documental->titulo }}</h2>
            <p class="text-gray-600">Director: {{ $documental->director->nombre }}</p>
            <p class="text-gray-600">Duración: {{ $documental->duracion }} minutos</p>
            <div class="mt-4 flex justify-end space-x-2">
                <a href="{{ route('documentales.edit', $documental) }}" class="text-blue-500 hover:text-blue-700">Editar</a>
                <form action="{{ route('documentales.destroy', $documental) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:text-red-700" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection