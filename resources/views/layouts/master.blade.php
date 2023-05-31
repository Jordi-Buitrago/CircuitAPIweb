<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circuit de Catalunya</title>

    <!-- Flowbite Slider Import -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script> 

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @livewireStyles

    <!-- Scripts -->
    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
    <script type="module" src="{{ asset('js/app.js') }}" defer></script>
</head>

<style>
    .logo {
        height: 75px;
    }
</style>

<header class="top-0 left-0 right-0 z-50 bg-[#EE2426] py-4">
    <div class="text-lg">
        <div class="container mx-auto flex items-center justify-between">
            <a href="/"><img class="logo w-auto h-auto" src="/images/logo.jpg" alt="Logo"></a>
            <nav class="flex items-center justify-center">
                @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-8 flex items-center">
                        <div class="text-center">
                            <a href="{{ route('qui-som') }}" class="font-semibold text-white hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 mr-4">Qui som?</a>
                            @auth
                                <a href="{{ url('/apps') }}" class="font-semibold text-white hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 mr-4">Apps</a>
                            @else
                                <a href="{{ route('login') }}" class="font-semibold text-white hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 mr-4">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="font-semibold text-white hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                @endif
                            @endauth
                        </div>
                    </div>
                @endif
            </nav>
        </div>
    </div>
</header>
    <body>
        <div id="slider" class="mx-auto">@yield('slider')</div>
        <div class="container mx-auto">@yield('content')</div>
    </body>
</html>