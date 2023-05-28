@extends('layouts.master')

@section('content')

<div class="flex justify-center items-center h-screen bg-gray-100">
  <div class="container mx-auto px-4">
    <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg p-8">
      <h2 class="text-3xl font-bold mb-8">Qui som</h2>
      <p class="text-gray-800 leading-relaxed mb-8">
        Som un equip d’estudiants de l’Escola Pia Santa Anna que hem participat en el projecte del Circuit de Barcelona Catalunya de MetrópolisFPLAB. Hem desenvolupat una solució innovadora per al Circuit de Barcelona Catalunya. El nostre objectiu és facilitar la gestió de les reserves d’espais del circuit, tant per als organitzadors d’esdeveniments com per als usuaris finals. Per això, hem creat una aplicació mòbil i una web que permeten consultar la disponibilitat dels espais, fer reserves online, pagar amb seguretat i rebre confirmacions instantànies. Amb la nostra solució, el Circuit de Barcelona Catalunya podrà optimitzar l’ús de les seves instal·lacions, millorar l’experiència dels seus clients i augmentar els seus ingressos.
      </p>
      <div class="flex justify-center items-center">
        <img src="/images/metropolis.png" alt="MetropolisFPLAB Logo" class="h-10 mx-4">
        <img src="/images/amb.png" alt="Area Metropolitana de Barcelona Logo" class="h-10 mx-4">
      </div>
    </div>
  </div>
</div>

@endsection
