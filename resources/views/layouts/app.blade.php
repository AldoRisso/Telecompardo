<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Allison&family=Anton&family=Archivo+Black&family=Bungee&family=Carter+One&family=DM+Serif+Display&family=Passion+One&family=Staatliches&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-white">

        @livewire('navigation')

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    <footer class="text-gray-600 body-font">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
            <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                <a href="/inicio" class="flex-shrink-0 flex items-center text-left">
                    <img class="block lg:hidden h-8 w-auto" src="{{ asset('imagenes/Logo.png') }}" alt="Telecompardo">
                    <img class="hidden lg:block h-8 w-auto" src="{{ asset('imagenes/Logo.png') }}" alt="Telecompardo">
                </a>
                <span class="ml-3 text-xl">Telecompardo</span>
            </a>
            <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2020
                Telecompardo —
            </p>

        </div>
    </footer>

    @stack('modals')
    <script src="//unpkg.com/alpinejs" defer></script>
    @livewireScripts
    @stack('js')
</body>

</html>
