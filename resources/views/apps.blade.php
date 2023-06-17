@extends('layouts.master')

@section('content')
<div class="flex items-center justify-center h-screen">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        <!-- Comandes -->
        <div class="bg-white shadow rounded-lg p-6">
            <div class="flex items-center justify-center h-24">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-12 h-12 text-blue-500">
                    <path fill="currentColor" d="M12 2C6.485 2 2 6.485 2 12c0 5.515 4.485 10 10 10s10-4.485 10-10c0-5.515-4.485-10-10-10zm0 18.5c-4.135 0-7.5-3.365-7.5-7.5S7.865 5.5 12 5.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5zm0-14c-3.038 0-5.5 2.462-5.5 5.5S8.962 17.5 12 17.5s5.5-2.462 5.5-5.5S15.038 6 12 6zm-.5 3.5h-2v2H11v-2zm0 3h-2v4h2v-4z" />
                </svg>
            </div>
            <h2 class="text-xl font-semibold mt-4">Comandes</h2>
            <p class="mt-2 text-gray-600">Una aplicació per gestionar i processar comandes de forma eficient.</p>
            <a href="/comandes" class="block mt-4 text-blue-500">Obre l'App Comandes</a>
        </div>

        <!-- Espais -->
        <div class="bg-white shadow rounded-lg p-6">
            <div class="flex items-center justify-center h-24">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-12 h-12 text-green-500">
                    <path fill="currentColor" d="M19.98 7.367v8.266c0 1.125-.903 2.04-2.02 2.04h-1.605c-.335 0-.616-.103-.923-.313l-2.743-1.582c-1.828-1.053-3.687-1.053-5.513 0L5.53 16.06c-.307.21-.588.313-.923.313H3.002c-1.116 0-2.02-.915-2.02-2.04V7.367c0-1.126.904-2.04 2.02-2.04h1.605c.335 0 .616.103.923.313l2.743 1.582c1.827 1.053 3.687 1.053 5.513 0l2.743-1.582c.308-.21.589-.313.923-.313h1.605c1.117 0 2.02.915 2.02 2.04zM6.67 14.06l.718-.416c.307-.21.588-.313.922-.313h1.605c.335 0 .616.103.923.313l.717.416c1.153.667 2.344.667 3.497 0l.717-.416c.308-.21.589-.313.923-.313h1.605c.334 0 .616.103.922.313l.717.416c1.154.667 2.345.667 3.498 0l.717-.416c.308-.21.589-.313.923-.313h1.605c.334 0 .616.103.923.313l.717.416c.768.444 1.448 1.07 1.996 1.845v-7.84c-.548.775-1.228 1.401-1.996 1.845l-.717.416c-.307.21-.589.313-.923.313h-1.605c-.334 0-.616-.103-.922-.313l-.717-.416c-1.153-.667-2.344-.667-3.497 0l-.717.416c-.307.21-.589.313-.923.313h-1.605c-.334 0-.616-.103-.923-.313l-.717-.416c-1.153-.667-2.344-.667-3.497 0l-.717.416c-.308.21-.589.313-.923.313H6.67v-.001zM19.98 5.408v.923h-1.605c-.335 0-.616-.103-.923-.313l-.717-.416c-1.153-.667-2.344-.667-3.497 0l-.717.416c-.307.21-.589.313-.923.313H6.67v-.923c0-.243.195-.44.436-.44h11.728c.241 0 .436.197.436.44z" />
                </svg>
            </div>
            <h2 class="text-xl font-semibold mt-4">Espais</h2>
            <p class="mt-2 text-gray-600">Una aplicació per gestionar i organitzar els espais de manera eficient.</p>
            <a href="/espais" class="block mt-4 text-blue-500">Obre l'App Espais</a>
        </div>

        <!-- Serveis -->
        <div class="bg-white shadow rounded-lg p-6">
            <div class="flex items-center justify-center h-24">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-12 h-12 text-red-500">
                    <path fill="currentColor" d="M14 4h4v2h-4zM6 4h4v2H6zM19 6h-1v14H6V6H5V4h14v2zm-8 0h6v2h-6zM6 8h6v2H6zm0 4h6v2H6zm0 4h6v2H6zm8-8h6v2h-6zm0 4h6v2h-6zm0 4h6v2h-6zm0 4h6v2h-6z" />
                </svg>
            </div>
            <h2 class="text-xl font-semibold mt-4">Serveis</h2>
            <p class="mt-2 text-gray-600">Una aplicació per gestionar i oferir serveis de forma eficient.</p>
            <a href="/serveis" class="block mt-4 text-blue-500">Obre l'App Serveis</a>
        </div>
    </div>
</div>
@endsection