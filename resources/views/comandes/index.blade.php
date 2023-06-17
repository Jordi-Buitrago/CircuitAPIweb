@extends('layouts.master')

@section('content')
<div class="container my-4 mt-6">
    <div class="flex justify-between items-center mb-4">
        <form action="{{ route('comandes.filter') }}" method="POST" class="flex">
            @csrf
            <div class="mr-4">
                <label for="estado" class="block">Filtrar per estat:</label>
                <select class="form-select" id="estado" name="estado">
                    <option value="">Totes</option>
                    <option value="pendent">Pendent</option>
                    <option value="confirmada">Confirmada</option>
                    <option value="cancelada">Denegada</option>
                </select>
            </div>
            <button type="submit" class="bg-red-500 text-white px-3 py-2 rounded-md mb-4 inline-block text-sm">Filtrar</button>
        </form>
        <a class="bg-red-500 text-white px-4 py-2 rounded-lg mb-4 inline-block" href="{{ route('comandes.create') }}">Crear comanda</a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        @foreach($comandes as $comanda)
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h5 class="text-xl font-bold mb-2">{{ $comanda->Nom }} {{ $comanda->cognom }}</h5>
            <p class="mb-2"><strong>Email:</strong> {{ $comanda->email }}</p>
            <p class="mb-2"><strong>Telèfon:</strong> {{ $comanda->telefon }}</p>
            <p class="mb-2"><strong>Espai:</strong> {{ $comanda->espai->nom }}</p>
            <p class="mb-2"><strong>Data d'entrada:</strong> {{ $comanda->data_entrada }}</p>
            <p class="mb-2"><strong>Data de sortida:</strong> {{ $comanda->data_sortida }}</p>
            <p class="mb-2"><strong>Hora d'entrada:</strong> {{ $comanda->hora_entrada }}</p>
            <p class="mb-2"><strong>Hora de sortida:</strong> {{ $comanda->hora_sortida }}</p>
            <p class="mb-2"><strong>Estat:</strong> <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium leading-4 {{ $comanda->estat == 'pendent' ? 'bg-orange-500 text-black' : ($comanda->estat == 'confirmada' ? 'bg-green-500 text-white' : 'bg-red-500 text-white') }}">
                {{ $comanda->estat }}
            </span>
            </p>
            <div class="mt-3 flex justify-end">
                <a class="bg-blue-500 text-white px-2 py-1 rounded-lg mr-2" href="{{ route('comandes.show', ['comande' => $comanda->id]) }}">Veure</a>
                <a class="bg-gray-500 text-white px-2 py-1 rounded-lg mr-2" href="{{ route('comandes.edit', ['comande' => $comanda->id]) }}">Editar</a>
                <form action="{{ route('comandes.destroy', ['comande' => $comanda->id]) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button class="bg-red-500 text-white px-2 py-1 rounded-lg" type="submit" onclick="return confirm('Esteu segur que voleu eliminar aquesta comanda?')">Eliminar</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
