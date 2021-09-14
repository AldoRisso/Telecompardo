<x-app-layout>
    <div class="bg-gray-200">

        <div class="w-full mb-6">
            @if (session('info'))

                <div class="px-4 py-2 -mx-3">
                    <div class="mx-3">
                        <span class="font-semibold text-green-500 dark:text-green-400">Exito</span>
                        <p class="text-sm text-gray-600 dark:text-gray-200">{{ session('info') }}</p>
                    </div>
                </div>

            @endif
        </div>
        <p
            class="absolute w-full text-white text-xl sm:text-xl md:text-2xl lg:text-3xl xl:text-6xl text-center font-alfa-slab-one top-24 xl:top-40 lg:top-36 md:top-28 ">
            TelecomPardo</p>
        <p
            class="absolute w-full text-white text-xl sm:text-xl md:text-2xl lg:text-3xl xl:text-6xl text-center font-anton top-32 xl:top-60 lg:top-44 md:top-36">
            LA TECNOLOGÍA QUE NECESITAS</p>

        <img class="object-cover"
            src="https://www.naturamedici.ch/wp-content/uploads/sites/50/universe-1566161_1920-e1533728871852.jpg"
            alt="Telecompardo">
    </div>

    <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-2 py-12 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">Planes</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-gray-500 text-xl">Destacados Fibra Óptica</p>
            </div>

            <div class="flex flex-wrap -m-4 justify-center">

                {{-- Plan 1 --}}
                <div class="p-3 xl:w-1/4 md:w-1/2 w-full bg-gray-100 rounded-lg">
                    <div class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
                        <h2 class="text-sm tracking-widest title-font mb-1 font-medium">Internet</h2>
                        <h1
                            class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
                            <span>$18.000</span>
                            <span class="text-lg ml-1 font-normal text-gray-500">/mes</span>
                        </h1>
                        <p class="flex items-center text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Internet Fibra Óptica
                        </p>
                        <p class="flex items-center text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Hasta 50Mb Bajada
                        </p>
                        <p class="flex items-center text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Red Wifi
                        </p>
                        <a href="contactanos"
                            class="flex items-center mt-auto text-white bg-gray-400 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-500 rounded">Contrátalo
                            Aquí
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                {{-- Plan 2 --}}
                <div class="p-2 xl:w-1/4 md:w-1/2 w-full bg-gray-100 rounded-lg">
                    <div
                        class="h-full p-6 rounded-lg border-2 border-indigo-500 flex flex-col relative overflow-hidden">
                        <span
                            class="bg-indigo-500 text-white px-3 py-1 tracking-widest text-xs absolute right-0 top-0 rounded-bl">POPULAR</span>
                        <h2 class="text-sm tracking-widest title-font mb-1 font-medium ">DuoPack</h2>
                        <h1
                            class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
                            <span>$28.000</span>
                            <span class="text-lg ml-1 font-normal text-gray-900">/mes</span>
                        </h1>
                        <p class="flex items-center text-gray-900 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-900 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Tv cable Fibra Óptica
                        </p>
                        <p class="flex items-center text-gray-900 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-900 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>52 Canales
                        </p>
                        <p class="flex items-center text-gray-900 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-900 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Internet Fibra Óptica
                        </p>
                        <p class="flex items-center text-gray-900 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-900 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Hasta 50Mb Bajada
                        </p>
                        <p class="flex items-center text-gray-900 mb-6">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-900 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Red Wifi
                        </p>
                        <a href="contactanos"
                            class="flex items-center mt-auto text-white bg-indigo-500 border-0 py-2 px-4 w-full focus:outline-none hover:bg-indigo-600 rounded">Contrátalo
                            Aquí
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                {{-- Plan 3 --}}
                <div class="p-3 xl:w-1/4 md:w-1/2 w-full bg-gray-100 rounded-lg">
                    <div class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
                        <h2 class="text-sm tracking-widest title-font mb-1 font-medium">Tv Cable</h2>
                        <h1
                            class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
                            <span>$13.000</span>
                            <span class="text-lg ml-1 font-normal text-gray-500">/mes</span>
                        </h1>
                        <p class="flex items-center text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Tv Cable Fibra Óptica
                        </p>
                        <p class="flex items-center text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>52 Canales
                        </p>
                        <p class="flex items-center text-gray-600 mb-2">
                            <span
                                class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Canales HD
                        </p>
                        <a href="contactanos"
                            class="flex items-center mt-auto text-white bg-gray-400 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-500 rounded">Contrátalo
                            Aquí
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container px-5 mx-auto bg-white p-8 pt-18 ">
        <div class="grid grid-rows-3 grid-flow-col gap-4 justify-center ">

            <div class="row-span-3">
                <div id="map" style="height: 400px; width: 800px"></div>
                @push('js')


                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDHWwKFlrFhIWDCivDdnGyXaapFflJaa0g&callback=initMap&libraries=&v=weekly"async></script>
                    <script>
                        let map;

                        function initMap() {
                            map = new google.maps.Map(document.getElementById("map"), {
                                center: {
                                    lat: -38.59855149059936,
                                    lng: -72.84204634939104
                                },
                                zoom: 18,
                            });
                        }
                    </script>

                @endpush
            </div>

            <div class="col-span-2">
                <div class="flex w-full justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div class="text-center text-xl sm:text-xs md:text-xs lg:text-sm xl:text-sm">
                <p class="text-3xl py-4">Horario de Trabajo</p>
                <p>Lunes a viernes: 9:00 - 18:00 Hrs</p>
                <p>Fin de semana y festivos: Cerrado</p>
              </div>
            </div>
            <div class="row-span-2 col-span-2">
                <div class="flex w-full justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <div class="text-center text-xl sm:text-xs md:text-xs lg:text-sm xl:text-sm">
                <p class="text-3xl py-4">Contacto</p>
                <p>Aníval Pinto 037 - Chol Chol, Chile</p>
                <p>Teléfono: +569 99201640</p>
                <p>Email: Telecompardo@yahoo.com</p>
                <p>Telecompardoltda@yahoo.com</p>
              </div>
            </div>
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
