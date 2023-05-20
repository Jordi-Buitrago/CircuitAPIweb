@extends('layouts.master')

@section('content')
<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-md-8 align-self-center">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title text-center">Detalls de la Comanda</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5><strong>Informació del Client</strong></h5>
                            <p><strong>Nom:</strong> {{ $comanda->Nom }} {{ $comanda->cognom }}</p>
                            <p><strong>Email:</strong> {{ $comanda->email }}</p>
                            <p><strong>Telèfon:</strong> {{ $comanda->telèfon }}</p>
                            <p><strong>Número d'Atenents:</strong> {{ $comanda->num_atendents }}</p>
                        </div>
                        <div class="col-md-6">
                            <h5><strong>Informació de la Comanda</strong></h5>
                            <p><strong>Espai:</strong> {{ $comanda->lletra_espai }}</p>
                            <p><strong>Data d'entrada:</strong> {{ $comanda->data_entrada }}</p>
                            <p><strong>Data de sortida:</strong> {{ $comanda->data_sortida }}</p>
                            <p>
                                <strong>Estat:</strong>
                                <span class="dot {{ $comanda->estat == 'pendent' ? 'dot-warning' : ($comanda->estat == 'confirmada' ? 'dot-success' : 'dot-danger') }}"></span>
                                {{ $comanda->estat }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <a href="{{ route('comandes.index') }}" class="btn btn-primary">Tornar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

