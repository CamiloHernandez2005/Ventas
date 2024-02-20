@extends('ventas.client')
@section('content')
<div class="py-6">
    <div class="max-w-7xl mx-auto sm:px6 lg:px-6">

        @if(session()->has('message'))
            <div class="bg-teal-100 rounded-b text-teal-900 px-4 py-4 shadow-md my-3" role="alert">
                <div class="flex">
                    <div>
                        <h4>{{ session('message')}}</h4>
                    </div>
                </div>
            </div>
        @endif


        <button wire:click="crear()" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 my-3" >Nuevo</button>
          @if($modal)
            @include('livewire.crearventas')   
        @endif     

        <table class="table-fixed w-full">
        <thead>
            <tr class="bg-black text-white">
              <th class="px-4 py-2">Id</th>
              <th class="px-4 py-2">Id Cliente</th>
              <th class="px-4 py-2">Fecha</th>
              <th class="px-4 py-2">Nº de factura</th>
              <th class="px-4 py-2">Vendedor</th>
              <th class="px-4 py-2">Forma de pago</th>
              <th class="px-4 py-2">Valor</th>
              <th class="px-2 py-2">Observaciones</th>
              <th class="px-4 py-2">Total Bruto</th>
              <th class="px-4 py-2">Total Impuesto</th>
              <th class="px-4 py-2">Total Neto</th>
              <th class="px-4 py-2">Total</th>  
              <th class="px-4 py-2">Acciones</th> 
            </tr>
        </thead>
        <tbody>
            @foreach($ventas as $venta)
            <tr>
              <td class="border px-4 py-2">{{$venta->id}}</td>
              <td class="border px-4 py-2">{{$venta->id_cliente}}</td>
              <td class="border px-4 py-2">{{$venta->fecha}}</td>
              <td class="border px-4 py-2">{{$venta->numero_factura}}</td>
              <td class="border px-4 py-2">{{$venta->vendedor}}</td>
              <td class="border px-4 py-2">{{$venta->forma_pago}}</td>
              <td class="border px-4 py-2">{{$venta->valor}}</td>
              <td class="border px-4 py-2">{{$venta->observaciones}}</td>
              <td class="border px-4 py-2">{{$venta->total_bruto}}</td>
              <td class="border px-4 py-2">{{$venta->total_impcargo}}</td>
              <td class="border px-4 py-2">{{$venta->total_neto}}</td>
              <td class="border px-4 py-2">{{$venta->valor_total}}</td>
                <td class="border px-4 py-2 text-center">
                    <button wire:click="editar({{$venta->id}})" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4">Editar</button>
                    <button wire:click="borrar({{$venta->id}})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4">Borrar</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
       
    </div>
</div>


              

       
