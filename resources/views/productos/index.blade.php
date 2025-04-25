@extends('layouts.app')  

@section('content')

<table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
  <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
    <th scope="col" class="px-6 py-3">ID</th>
    <th scope="col" class="px-6 py-3">Nombre</th>
    <th scope="col" class="px-6 py-3">Precio</th>
    <th scope="col" class="px-6 py-3">Descripcion</th>
  </thead>
  <tbody>
    @foreach ($productos as $producto)
      <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
        <td class="px-6 py-4">{{ $producto->id }}</td>
        <td class="px-6 py-4">{{ $producto->nombre }}</td>
        <td class="px-6 py-4">{{ $producto->precio }}</td>
        <td class="px-6 py-4">{{ $producto->descripcion }}</td>
      </tr>
    @endforeach
  </tbody>
</table>

@endsection