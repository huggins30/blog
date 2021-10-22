<div>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Registro y Control de Servicio Comunitario ULA
        </h2>
    </x-slot>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <h1>Servicio Comunitario ULA</h1>

   <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">



    <!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <div class="px-6 py-4 flex items-center">

                <x-jet-input class="flex-1 mr-6" placeholder="Ingrese la información a buscar" type="text" wire:model="search"/>
                @livewire('create-post')

            </div>
            @if ($posts->count())




            <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col"  class=" cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                wire:click="order('id')">
                  ID
                </th>
                <th scope="col" class=" cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                wire:click="order('title')">
                  Titulo
                </th>
                <th scope="col" class=" cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                wire:click="order('content')">
                  Contenido
                </th>
                  <th scope="col" class="relative px-6 py-3">
                  <span class="sr-only">Edit</span>
                </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($posts as $post)


              <tr>

                <td class="px-6 py-4 ">
                  <div class="text-sm text-gray-900">
                      {{$post->id}}
                  </div>

                </td>
                <td class="px-6 py-4 ">
                  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                    {{$post->title}}
                  </span>
                </td>
                <td class="px-6 py-4 text-sm text-gray-500">
                    {{$post->content}}
                </td>
                <td class="px-6 py-4  text-right text-sm font-medium">
                  <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                </td>
              </tr>
              @endforeach

              <!-- More people... -->
            </tbody>
          </table>
          @else
          <div>
              No se encontraron registros
          </div>
          @endif
        </div>
      </div>
    </div>
  </div>

</div>

</div>
