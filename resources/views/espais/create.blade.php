@extends('layouts.master')

@section('content')

<div class="container my-8 flex flex-col items-center">
    <h2 class="text-2xl font-bold mb-4">Crear Espai</h2>
    <form action="{{ route('espais.store') }}" method="POST" class="bg-gray-200 rounded-lg shadow-md p-6">
        @csrf
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <div class="mb-4">
                    <label for="nom" class="font-bold mb-2 text-red-600">Nom</label>
                    <input name="nom" id="nom" placeholder="Nom" type="text" class="form-input rounded-lg w-full">
                </div>
                <div class="mb-4">
                    <label for="descripcio" class="font-bold mb-2 text-red-600">Descripcio</label>
                    <input name="descripcio" id="descripcio" placeholder="descripcio" type="text" class="form-input rounded-lg w-full">
                </div>
                <div class="mb-4">
                    <label for="ubicacio" class="font-bold mb-2 text-red-600">Ubicació</label>
                    <input name="ubicacio" id="ubicacio" placeholder="Ubicació" type="text" class="form-input rounded-lg w-full">
                </div>
                <div class="mb-4">
                    <label for="tipus" class="font-bold mb-2 text-red-600">Tipus</label>
                    <input name="tipus" id="tipus" placeholder="Tipus" type="text" class="form-input rounded-lg w-full">
                </div>
            </div>
        </div>
        <button type="submit" class="bg-white text-red-600 font-bold py-2 px-4 rounded focus:outline-none mt-4">Crear</button>
    </form>
</div>
@endsection