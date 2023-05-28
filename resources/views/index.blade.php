@extends('layouts.master')

@section('slider')
<!-- home page with tailwind flowbite slider -->
<div id="default-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden md:h-96">
        <!-- Items del slider -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/images/formula1.jpg" class="max-h-full max-w-full absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/images/motogp.jpg" class="max-h-full max-w-full absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/images/visites.jpg" class="max-h-full max-w-full absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/images/tandes.jpg" class="max-h-full max-w-full absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Indicadores del slider -->
    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
    </div>
    <!-- Controles del slider -->
    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-white bg-opacity-50 group-hover:bg-opacity-75">
            <svg class="w-4 h-4 text-black transition duration-300 ease-in-out fill-current group-hover:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12l4.58-4.59z" />
            </svg>
        </span>
    </button>
    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-white bg-opacity-50 group-hover:bg-opacity-75">
            <svg class="w-4 h-4 text-black transition duration-300 ease-in-out fill-current group-hover:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M8.59 16.59L10 18l6-6-6-6-1.41 1.41L13.17 12l-4.58 4.59z" />
            </svg>
        </span>
    </button>
</div>
@endsection

@section('content')
<div class="container mt-6">
    <div class="flex flex-col items-center justify-center bg-gray-100">
        <div class="w-full max-w-4xl px-6 py-16 mx-auto md:px-12 md:py-24">
            <div class="flex flex-col items-center justify-center mb-16 text-center md:items-center">
                <h2 class="mt-6 mb-6 text-3xl font-bold leading-none tracking-tighter text-black lg:text-6xl">
                Velocitat i diversió al <strong class="text-red-500">Circuit de Barcelona Catalunya</strong> 
                </h2>
                <p class="pr-0 mb-8 text-xl text-gray-700 md:text-center lg:text-lg md:pr-24 md:mb-8">
                    🏁🏁 <strong>Benvinguts al Circuit de Barcelona Catalunya</strong> 🏁🏁<br></br>

                    El Circuit de Barcelona Catalunya és el temple de la velocitat a Catalunya. Aquí podràs gaudir de les millors curses de Fórmula 1 🏎️, MotoGP 🏍️, GT 🚗 i molt més. També podràs viure l’experiència de conduir un cotxe o una moto de competició en el nostre traçat. 🚦<br></br>

                    Però el Circuit no és només per als aficionats al motor. També és un espai ideal per a celebrar tot tipus d’esdeveniments: reunions 🗣️, congressos 🎙️, presentacions 📽️, festes 🎉, etc. Disposem de sales equipades 💻, zones verdes 🌳, pàrquing 🅿️ i serveis de càtering 🍽️ i animació 🎭.<br></br>

                    Si vols reservar algun dels nostres espais, només has de fer clic al botó de “Reservar” 💯 i omplir el formulari amb les teves dades i preferències. Et respondrem el més aviat possible amb una proposta personalitzada. ✅<br></br>

                    No t’ho pensis més i vine al Circuit de Barcelona Catalunya. T’esperem amb els braços oberts 🤗 i els motors encesos 🔥.
                </p>
                <div class="flex items-center justify-center">
                    <a href="{{ route('comandes.create') }}" class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-red-500 hover:bg-red-700 focus:shadow-outline focus:outline-none">Fes una comanda</a>
                </div>
            </div>
            <div class="container flex flex-col items-center justify-center max-w-2xl md:flex-row mt-3">
                <div class="w-full h-full mb-8 overflow-hidden rounded shadow-lg md:w-1/2 lg:h-120">
                    <img src="/images/cataleg.jpg" class="object-cover w-full h-full" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
