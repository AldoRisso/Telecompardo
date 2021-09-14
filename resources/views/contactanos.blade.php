<x-app-layout>

    <form action="{{route("contactanos.store")}}" method="POST">

        @csrf

        <section class="text-gray-600 body-font relative">
            <div class="container px-5 py-24 mx-auto">
              <div class="flex flex-col text-center w-full mb-12">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Contacto</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Para contratar nuestros servicios, ingrese su información en el formulario</p>
              </div>
              <div class="lg:w-1/2 md:w-2/3 mx-auto">
                <div class="flex flex-wrap -m-2">
                  <div class="p-2 w-1/2">
                    <div class="relative">
                      <label for="name" class="leading-7 text-sm text-gray-600">Nombre</label>
                      <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                      @error('name')
                      <p><strong>{{$message}}</strong></p>
                  @enderror
                    </div>
                  </div>
                  <div class="p-2 w-1/2">
                    <div class="relative">
                      <label for="apellido" class="leading-7 text-sm text-gray-600">Apellido</label>
                      <input type="text" id="apellido" name="apellido" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                      @error('apellido')
                      <p><strong>{{$message}}</strong></p>
                  @enderror
                    </div>
                  </div>
                  <div class="p-2 w-1/2">
                    <div class="relative">
                      <label for="telefono" class="leading-7 text-sm text-gray-600">Teléfono</label>
                      <input type="integer" id="telefono" name="telefono" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                      @error('telefono')
                      <p><strong>{{$message}}</strong></p>
                  @enderror
                    </div>
                  </div>
                  <div class="p-2 w-1/2">
                    <div class="relative">
                      <label for="correo" class="leading-7 text-sm text-gray-600">Email</label>
                      <input type="email" name="correo" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                      @error('correo')
                      <p><strong>{{$message}}</strong></p>
                  @enderror
                </div>
                  </div>
                  <div class="p-2 w-full">
                    <div class="relative">
                      <label for="mensaje" class="leading-7 text-sm text-gray-600">Mensaje</label>
                      <textarea name="mensaje" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                      @error('mensaje')
                      <p><strong>{{$message}}</strong></p>
                  @enderror
                    </div>
                  </div>

                  <div class="p-2 w-full">
                    <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" type="submit">Enviar</button>
                  </div>
                  
                  <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">
                    <a class="text-indigo-500">telecompardoltda@yahoo.com</a>
                    <p class="leading-normal my-5">Aníbal Pinto 037
                      <br>Chol Chol, Chile
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </section>
    </form>

    @if(session("info"))
    <script>
        alert("{{session("info")}}");
    </script>
    @endif
</x-app-layout>