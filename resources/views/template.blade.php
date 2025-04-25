@extends('layouts.app')  

@section('content')
  
  <h1>Suma de dos numeros en la vista Template</h1>
    <form action="/inicio" method="post">
        @csrf
        <input type="number" name="numero1" placeholder="Número 1">
        <input type="number" name="numero2" placeholder="Número 2">
        <button type="submit">Sumar</button>
    </form>

    @if(isset($resultado))
        <h1>El resultado de la suma es: {{ $resultado }}</h1>
    @endif

@endsection