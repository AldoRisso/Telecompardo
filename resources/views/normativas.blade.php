<x-app-layout>

    <p class="text-5xl text-center font-bold mt-20">Normativas</p>
    <p class="text-lg text-center font-bold">Información del servicio de telecomunicaciones</p>

    <table class="rounded-t-lg m-5 w-5/6 mx-auto text-gray-100 bg-gradient-to-l from-indigo-300 to-indigo-400">
      <tr class="text-left border-b-2 border-indigo-300">
        <th class="px-4 py-3 text-center">Normativa</th>
        <th class="px-4 py-3 text-center">Decreto</th>
        <th class="px-4 py-3 text-center">Formato</th>
        <th class="px-4 py-3 text-center">Descargar</th>
      </tr>
      @foreach ($normativas as $normativa)
          
     
      <tr class="border-b border-indigo-400">
        <td class="px-4 py-3 text-center">{{$normativa["nombre"]}}</td>
        <td class="px-4 py-3 text-center">{{$normativa["decreto"]}}</td>
        <td class="px-4 py-3 text-center">PDF</td>
        <td class="px-4 py-3">
          <a href="{{asset($normativa["archivo"])}}" download class="w-full flex justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
    </svg>
  </a>
  </td>
      </tr>   

      @endforeach
      
    </table>


</x-app-layout>