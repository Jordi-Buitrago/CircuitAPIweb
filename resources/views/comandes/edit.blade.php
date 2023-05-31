@extends('layouts.master')

@section('content')
    <div class="container my-8 flex flex-col items-center">
        <form action="{{ route('comandes.update', $comanda->id) }}" method="POST" class="bg-gray-200 rounded-lg shadow-md p-6">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <div class="mb-4">
                        <label for="nom" class="font-bold mb-2 text-red-600">Nombre</label>
                        <input name="nom" id="nom" placeholder="Nombre" type="text" value="{{ $comanda->Nom }}" class="form-input rounded-lg w-full">
                    </div>

                    <div class="mb-4">
                        <label for="cognom" class="font-bold mb-2 text-red-600">Apellido</label>
                        <input name="cognom" id="cognom" placeholder="Apellido" type="text" value="{{ $comanda->cognom }}" class="form-input rounded-lg w-full">
                    </div>

                    <div class="mb-4">
                        <label for="email" class="font-bold mb-2 text-red-600">Email</label>
                        <input name="email" id="email" placeholder="Email" type="email" value="{{ $comanda->email }}" class="form-input rounded-lg w-full">
                    </div>

                    <div class="mb-4">
                        <label for="telefon" class="font-bold mb-2 text-red-600">Teléfono</label>
                        <input name="telèfon" id="telefon" placeholder="Teléfono" type="text" value="{{ $comanda->telefon }}" class="form-input rounded-lg w-full">
                    </div>

                    <div class="mb-4">
                        <label for="num_atendents" class="font-bold mb-2 text-red-600">Número de asistentes</label>
                        <input name="num_atendents" id="num_atendents" placeholder="Número de asistentes" type="text" value="{{ $comanda->num_atendents }}" class="form-input rounded-lg w-full">
                    </div>
                </div>

                <div>
                    <div class="mb-4">
                        <label for="espais_id" class="font-bold mb-2 text-red-600">Espacios</label>
                        <select name="espais_id" id="espais_id" class="form-select rounded-lg w-full">
                            @foreach($espais as $espai)
                            <option value="{{ $espai->id }}" @if ($comanda->espais_id == $espai->id) selected @endif>{{ $espai->nom }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="data_entrada" class="font-bold mb-2 text-red-600">Fecha de entrada</label>
                        <input name="data_entrada" id="data_entrada" placeholder="Fecha de entrada" type="date" value="{{ $comanda->data_entrada }}" class="form-input rounded-lg w-full">
                    </div>

                    <div class="mb-4">
                        <label for="data_sortida" class="font-bold mb-2 text-red-600">Fecha de salida</label>
                        <input name="data_sortida" id="data_sortida" placeholder="Fecha de salida" type="date" value="{{ $comanda->data_sortida }}" class="form-input rounded-lg w-full">
                    </div>

                    <div class="mb-4">
                        <label for="hora_entrada" class="font-bold mb-2 text-red-600">Hora de entrada</label>
                        <input name="hora_entrada" id="hora_entrada" placeholder="Hora de entrada" type="time" value="{{ $comanda->hora_entrada }}" class="form-input rounded-lg w-full">
                    </div>

                    <div class="mb-4">
                        <label for="hora_sortida" class="font-bold mb-2 text-red-600">Hora de salida</label>
                        <input name="hora_sortida" id="hora_sortida" placeholder="Hora de salida" type="time" value="{{ $comanda->hora_sortida }}" class="form-input rounded-lg w-full">
                    </div>

                    <div class="mb-4">
                        <label for="estat" class="font-bold mb-2 text-red-600">Estado</label>
                        <select name="estat" id="estat" class="form-select rounded-lg w-full">
                            <option value="pendiente" @if ($comanda->estat == 'pendiente') selected @endif>Pendiente</option>
                            <option value="confirmada" @if ($comanda->estat == 'confirmada') selected @endif>Confirmada</option>
                            <option value="cancelada" @if ($comanda->estat == 'cancelada') selected @endif>Cancelada</option>
                        </select>
                    </div>
                </div>
            </div>

            <button type="submit" class="bg-white text-red-600 font-bold py-2 px-4 rounded focus:outline-none mt-4">Actualizar</button>
        </form>
    </div>
@endsection
