@extends('layouts.master')

@section('content')
<div class="container my-4 mt-6">
    <div class="flex justify-between items-center mb-4">
        @csrf
        <a class="bg-red-500 text-white px-4 py-2 rounded-lg mb-4 inline-block" href="{{ route('serveis.create') }}">Crear servei</a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        @foreach($serveis as $servei)
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h5 class="text-xl font-bold mb-2"> {{ $servei->nom }} </h5>
            <p class="mb-2"><strong>Descripció:</strong> {{ $servei->descripcio }}</p>
            <p class="mb-2"><strong>Preu:</strong> {{ $servei->preu }}€</p>
            <div class="mt-3 flex justify-end">
                <a class="bg-blue-500 text-white px-2 py-1 rounded-lg mr-2" href="{{ route('serveis.show', ['servei' => $servei->id]) }}">Veure</a>
                <a class="bg-gray-500 text-white px-2 py-1 rounded-lg mr-2" href="{{ route('serveis.edit', ['servei' => $servei->id]) }}">Editar</a>
                <form action="{{ route('serveis.destroy', ['servei' => $servei->id]) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button class="bg-red-500 text-white px-2 py-1 rounded-lg" type="submit" onclick="return confirm('Esteu segur que voleu eliminar aquesta servei?')">Eliminar</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
