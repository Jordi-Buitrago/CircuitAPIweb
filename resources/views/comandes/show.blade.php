@extends('layouts.master')

@section('content')
<div class="container my-4">
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12">
            <div class="bg-white shadow-md rounded-lg">
                <div class="bg-gray-100 py-4 px-6">
                    <h1 class="text-center text-2xl font-bold">Detalls de la Comanda</h1>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <h5 class="font-bold">Informació del Client</h5>
                            <p><strong>Nom:</strong> {{ $comanda->Nom }} {{ $comanda->cognom }}</p>
                            <p><strong>Email:</strong> {{ $comanda->email }}</p>
                            <p><strong>Telèfon:</strong> {{ $comanda->telèfon }}</p>
                            <p><strong>Número d'Atenents:</strong> {{ $comanda->num_atendents }}</p>
                        </div>
                        <div>
                            <h5 class="font-bold">Informació de la Comanda</h5>
                            <p><strong>Lletra Espai:</strong> {{ $comanda->lletra_espai }}</p>
                            <p><strong>Espai:</strong> {{ $comanda->espai->nom }}</p>
                            <p><strong>Data d'entrada:</strong> {{ $comanda->data_entrada }}</p>
                            <p><strong>Data de sortida:</strong> {{ $comanda->data_sortida }}</p>
                            <p><strong>Hora d'entrada:</strong> {{ $comanda->hora_entrada }}</p>
                            <p><strong>Hora de sortida:</strong> {{ $comanda->hora_sortida }}</p>
                            <p><strong>Estat:</strong> {{ $comanda->estat }}</p>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-100 py-4 px-6 text-center">
                    <a href="{{ route('comandes.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Tornar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
