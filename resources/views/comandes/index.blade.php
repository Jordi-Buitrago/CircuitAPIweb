@extends('layouts.master')

@section('content')
<div class="container my-4">
    <h1 class="mb-4">Comandes</h1>
    <a class="btn btn-success mb-4" href="{{ route('comandes.create') }}">Crear comanda</a>

    <form action="{{ route('comandes.filter') }}" method="POST" class="mb-4">
        @csrf
        <div class="form-group">
            <label for="estado">Filtrar per estat:</label>
            <select class="form-control" id="estado" name="estado">
                <option value="">Totes</option>
                <option value="pendent">Pendent</option>
                <option value="confirmada">Confirmada</option>
                <option value="denegada">Denegada</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Filtrar</button>
    </form>

    <div class="row">
        @foreach($comandes as $comanda)
        <div class="col-md-6">
            <div class="card mb-4 border border-2 @if($comanda->estat == 'pendent') border-warning @elseif($comanda->estat == 'confirmada') border-success @else border-danger @endif">
                <div class="card-body">
                    <h5 class="card-title">{{ $comanda->Nom }} {{ $comanda->cognom }}</h5>
                    <p class="card-text"><strong>Email:</strong> {{ $comanda->email }}</p>
                    <p class="card-text"><strong>Telèfon:</strong> {{ $comanda->telèfon }}</p>
                    <p class="card-text"><strong>Espai:</strong> {{ $comanda->espai->nom }}</p>
                    <p class="card-text"><strong>Data d'entrada:</strong> {{ $comanda->data_entrada }}</p>
                    <p class="card-text"><strong>Data de sortida:</strong> {{ $comanda->data_sortida }}</p>
                    <p class="card-text"><strong>Estat:</strong> {{ $comanda->estat }}</p>
                    <div class="mt-3">
                        <a class="btn btn-primary btn-sm mr-2" href="{{ route('comandes.show', ['comande' => $comanda->id]) }}">Veure</a>
                        <a class="btn btn-secondary btn-sm mr-2" href="{{ route('comandes.edit', ['comande' => $comanda->id]) }}">Editar</a>
                        <form action="{{ route('comandes.destroy', ['comande' => $comanda->id]) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Esteu segur que voleu eliminar aquesta comanda?')">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
