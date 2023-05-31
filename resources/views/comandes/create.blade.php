@extends('layouts.master')

@section('content')

<div class="container my-8 flex flex-col items-center">
    <h2 class="text-2xl font-bold mb-4">Crear comanda</h2>
    <form action="{{ route('comandes.store') }}" method="POST" class="bg-gray-200 rounded-lg shadow-md p-6">
        @csrf
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <div class="mb-4">
                    <label for="nom" class="font-bold mb-2 text-red-600">Nom</label>
                    <input name="nom" id="nom" placeholder="Nom" type="text" class="form-input rounded-lg w-full">
                </div>
                <div class="mb-4">
                    <label for="cognom" class="font-bold mb-2 text-red-600">Cognom</label>
                    <input name="cognom" id="cognom" placeholder="Cognom" type="text" class="form-input rounded-lg w-full">
                </div>
                <div class="mb-4">
                    <label for="email" class="font-bold mb-2 text-red-600">Email</label>
                    <input name="email" id="email" placeholder="Email" type="email" class="form-input rounded-lg w-full">
                </div>
                <div class="mb-4">
                    <label for="telefon" class="font-bold mb-2 text-red-600">Telèfon</label>
                    <input name="telefon" id="telefon" placeholder="Telèfon" type="text" class="form-input rounded-lg w-full">
                </div>
                <div class="mb-4">
                    <label for="num_atendents" class="font-bold mb-2 text-red-600">Número d'assistents</label>
                    <input name="num_atendents" id="num_atendents" placeholder="Número d'assistents" type="text" class="form-input rounded-lg w-full">
                </div>
            </div>
            <div>
                <div class="mb-4">
                    <label for="espais_id" class="font-bold mb-2 text-red-600">Espais</label>
                    <select name="espais_id" id="espais_id" class="form-select rounded-lg w-full">
                        @foreach($espais as $espai)
                        <option value="{{ $espai->id }}">{{ $espai->nom }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="data_entrada" class="font-bold mb-2 text-red-600">Data d'entrada</label>
                    <input name="data_entrada" id="data_entrada" placeholder="Data d'entrada" type="date" class="form-input rounded-lg w-full">
                </div>
                <div class="mb-4">
                    <label for="data_sortida" class="font-bold mb-2 text-red-600">Data de sortida</label>
                    <input name="data_sortida" id="data_sortida" placeholder="Data de sortida" type="date" class="form-input rounded-lg w-full">
                </div>
                <div class="mb-4">
                    <label for="hora_entrada" class="font-bold mb-2 text-red-600">Hora d'entrada</label>
                    <input name="hora_entrada" id="hora_entrada" placeholder="Hora d'entrada" type="time" class="form-input rounded-lg w-full">
                </div>
                <div class="mb-4">
                    <label for="hora_sortida" class="font-bold mb-2 text-red-600">Hora de sortida</label>
                    <input name="hora_sortida" id="hora_sortida" placeholder="Hora de sortida" type="time" class="form-input rounded-lg w-full">
                </div>
            </div>
        </div>
        <button type="submit" class="bg-white text-red-600 font-bold py-2 px-4 rounded focus:outline-none mt-4">Crear</button>
    </form>
</div>
@endsection