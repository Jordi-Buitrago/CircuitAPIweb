@extends('layouts.master')

@section('content')

<div class="container mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold mb-4">Crear comanda</h2>
    <div class="w-1/2">
        <form action="{{ route('comandes.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="lletra_espai" class="block font-bold">Lletra Espai:</label>
                <input type="text" name="lletra_espai" id="lletra_espai" class="form-control" required>
            </div>
            <div class="mb-4">
                <label for="nom" class="block font-bold">Nom:</label>
                <input type="text" name="nom" id="nom" class="form-control" required>
            </div>
            <div class="mb-4">
                <label for="cognom" class="block font-bold">Cognom:</label>
                <input type="text" name="cognom" id="cognom" class="form-control" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block font-bold">Email:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="mb-4">
                <label for="telèfon" class="block font-bold">Telèfon:</label>
                <input type="text" name="telèfon" id="telèfon" class="form-control" required>
            </div>
            <div class="mb-4">
                <label for="num_atendents" class="block font-bold">Num. Atendents:</label>
                <input type="number" name="num_atendents" id="num_atendents" class="form-control" required>
            </div>
            <div class="mb-4">
                <label for="espais_id" class="block font-bold">Espais:</label>
                <select name="espais_id" id="espais_id" class="form-control" required>
                    @foreach($espais as $espai)
                    <option value="{{ $espai->id }}">{{ $espai->nom }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="data_entrada" class="block font-bold">Data Entrada:</label>
                <input type="date" name="data_entrada" id="data_entrada" class="form-control" required>
            </div>
            <div class="mb-4">
                <label for="data_sortida" class="block font-bold">Data Sortida:</label>
                <input type="date" name="data_sortida" id="data_sortida" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
    </div>
</div>