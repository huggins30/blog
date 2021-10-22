<div {{$attributes->merge(['class' => "bg-$color-100 border-l-4 border-$color-500 text-orange-700 p-4"])}} role="alert">
    <p class="font-bold">Investigar</p>
    <p>{{$slot}}</p>
    {{$prueba()}}
  </div>
