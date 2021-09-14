<nav class="___class_+?0___" x-data="{ open: false }">
  <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 flex justify-between">
    <div class="relative flex items-center h-16">


      <style>
        .active{
          color:blue;
          font-weight: bold;
        }
      </style>
      <!-- Mobile menu button-->
      <div class="absolute inset-y-0  flex items-center sm:hidden">

        <button x-on:click="open = true"
          class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
          aria-controls="mobile-menu" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <!--
              Icon when menu is closed.

              Heroicon name: outline/menu

              Menu open: "hidden", Menu closed: "block"
            -->
          <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <!--
              Icon when menu is open.

              Heroicon name: outline/x

              Menu open: "block", Menu closed: "hidden"
            -->
          <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
    <div class="flex sm:flex-1 items-center sm:items-stretch sm:justify-start">
      {{-- Logotipos --}}
      <div class="flex items-center space-x-2">
      <a href="/inicio" class="flex-shrink-0 flex items-center text-left">
        <img class="block lg:hidden h-16 w-auto" src="{{ asset('imagenes/Logo.png') }}" alt="Telecompardo">
        <img class="hidden lg:block h-16 w-auto" src="{{ asset('imagenes/Logo.png') }}" alt="Telecompardo">
      </a>
      <span class="text-4xl font-semibold text-gray-900 font-monospace">Telecompardo</span>
      </div>
      {{-- Menu lg --}}
      <div class="hidden sm:block sm:ml-6 justify-end w-full items-center">
        <div class="flex space-x-4 justify-end items-center mt-4">
          <a href="/inicio"
            class="text-gray-900 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-xl font-bold {{request()->routeIs("inicio") ? "active" : ""}}" aria-current="page">Inicio</a>
          {{-- <a href="/nosotros"
            class="text-gray-900 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium {{request()->routeIs("nosotros") ? "active" : ""}}">Nosotros</a> --}}
          <a href="/contactanos"
            class="text-gray-900 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-xl font-bold {{request()->routeIs("contactanos") ? "active" : ""}}">Contactanos</a>
          <a href="/normativas"
            class="text-gray-900 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-xl font-bold {{request()->routeIs("normativas") ? "active" : ""}}">Normativas</a>
            <a target="_blank" href="http://190.110.98.75/cliente/login"
            class="text-gray-900 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-xl font-bold">Acceso CLientes</a>
        </div>
      </div>
    </div>
  </div>

  {{-- Menu Mobile --}}
  <div class="sm:hidden" x-show="open" x-on:click.away="open = false">
    <div class="px-2 pt-2 pb-3 space-y-1">

      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
      <a href="/inicio" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium"
        aria-current="page">Inicio</a>
      <a href="/nosotros"
        class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Nosotros</a>
      <a href="/contactanos"
        class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Contactanos</a>
      <a href="/normativas"
        class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Normativas</a>
    </div>
  </div>
</nav>
