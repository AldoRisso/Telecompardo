<x-app-layout>
  <div class="flex flex-col">
    <div class="relative w-full mb-4">
      <p class="sm:hidden absolute w-full text-white text-6xl text-center font-serif top-48">TelecomPardo</p>
      <p class="sm:hidden absolute w-full text-white text-6xl text-center font-serif top-60">LA TECNOLOGÍA QUE TU
        NECESITAS</p>

      <img class="object-cover"
        src="https://www.naturamedici.ch/wp-content/uploads/sites/50/universe-1566161_1920-e1533728871852.jpg"
        alt="Telecompardo">
    </div>
    <div class="grid grid-cols-3 gap-1 mx-4">
      <div class="flex flex-col rounded-lg shadow-lg bg-gray-100 px-6 py-6 space-y-8">
        <div class="flex flex-col text-center">
          <span class="text-blue-700 font-bold uppercase text-4xl">Internet</span>
          <span class="text-gray-400 font-semibold">$18.000/mes</span>
        </div>
        <hr>
        <ul class="text-gray-400">
          <li>Internet Fibra Óptica</li>
          <li>Hasta 50 Mb Bajada</li>
          <li>Red Wifi</li>
        </ul>
        <x-modal>
          <x-slot name="trigger">
            <button class="hover:bg-indigo-600 rounded-full hover:text-white font-semibold py-4 px-4">
              Mostrar
            </button>
          </x-slot>
          <p>Aqui tu formulario</p>
        </x-modal>
      </div>
      <div class="bg-red-600 flex flex-col">
        <x-modal texto="Contratar">
          <x-slot name="trigger">
            <a >
              Mostrar
            </button>
          </x-slot>
          <p>Aqui tu formulario 2</p>
        </x-modal>
      </div>
      <div class="bg-red-600 flex flex-col">
        <x-modal texto="Contratar">
          <x-slot name="trigger">
            <button class="hover:bg-indigo-600 rounded-full hover:text-white font-semibold py-4 px-4">
              Mostrar
            </button>
          </x-slot>
          <p>Aqui tu formulario 3</p>
        </x-modal>
      </div>
    </div>
  </div>

  @push('js')
    <script>
      const modalInternet = () => {
        return {
          show: false,
        }
      }
    </script>
  @endpush
</x-app-layout>
