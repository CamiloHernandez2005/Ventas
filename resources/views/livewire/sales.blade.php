@extends('sales.index')
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
            @include('livewire.sales-create')   
        @endif     

        <table class="table-fixed w-full">
        <thead>
            <tr class="bg-black text-white">
              <th class="px-4 py-2">Id</th>
              <th class="px-4 py-2">Fecha</th>
              <th class="px-4 py-2">Nº de factura</th>
              <th class="px-4 py-2">Vendedor</th>
              <th class="px-4 py-2">Forma de pago</th>
              <th class="px-2 py-2">Observaciones</th>
              <th class="px-2 py-2">Total descuento</th>
              <th class="px-4 py-2">Total Bruto</th>
              <th class="px-4 py-2">Total Impuesto</th>
              <th class="px-4 py-2">Total Neto</th>
              <th class="px-4 py-2">Total</th>  
              <th class="px-4 py-2">Acciones</th> 
            </tr>
        </thead>
        <tbody>
            @foreach($sales as $sale)
            <tr>
              <td class="border px-4 py-2">{{$sale->id}}</td>
              <td class="border px-4 py-2">{{$sale->dates}}</td>
              <td class="border px-4 py-2">{{$sale->bill_numbers}}</td>
              <td class="border px-4 py-2">{{$sale->sellers}}</td>
              <td class="border px-4 py-2">{{$sale->payments_methods}}</td>
              <td class="border px-4 py-2">{{$sale->observations}}</td>
              <td class="border px-4 py-2">{{$sale->discounts_total}}</td>
              <td class="border px-4 py-2">{{$sale->gross_totals}}</td>
              <td class="border px-4 py-2">{{$sale->taxes_total}}</td>
              <td class="border px-4 py-2">{{$sale->net_total}}</td>
              <td class="border px-4 py-2">{{$sale->values_total}}</td>
                <td class="border px-4 py-2 text-center">
                    <button wire:click="editar({{$sale->id}})" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4">Editar</button>
                    <button wire:click="borrar({{$sale->id}})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4">Borrar</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
       
    </div>
</div>


              

       
