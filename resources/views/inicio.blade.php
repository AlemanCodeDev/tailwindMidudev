@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        <header class="text-center mb-6">
            <h1 class="text-4xl font-bold text-blue-600">
                Bienvenido a Laravel + Tailwind CSS
            </h1>
        </header>

        <main>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <h2 class="text-2xl font-semibold text-gray-800">Tarjeta 1</h2>
                    <p class="mt-2 text-gray-600">Este es un ejemplo de tarjeta utilizando Tailwind CSS.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <h2 class="text-2xl font-semibold text-gray-800">Tarjeta 2</h2>
                    <p class="mt-2 text-gray-600">Tailwind facilita el diseño de interfaces con clases de utilidad.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <h2 class="text-2xl font-semibold text-gray-800">Tarjeta 3</h2>
                    <p class="mt-2 text-gray-600">Puedes personalizar el diseño fácilmente utilizando clases.</p>
                </div>
            </div>
        </main>

        <div class="bg-white dark:bg-gray-800 rounded-lg px-6 py-8 ring shadow-xl ring-gray-900/5">
            <div>
                <span class="inline-flex items-center justify-center rounded-md bg-indigo-500 p-2 shadow-lg">
                <svg class="h-6 w-6 stroke-white" ...>
                    <!-- ... -->
                </svg>
                </span>
            </div>
            <h3 class="text-gray-900 dark:text-white mt-5 text-base font-medium tracking-tight ">Writes upside-down</h3>
            <p class="text-gray-500 dark:text-gray-400 mt-2 text-sm ">
                The Zero Gravity Pen can be used to write in any orientation, including upside-down. It even works in outer space.
            </p>    
        </div>


        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <h1>Suma de dos numeros</h1>
                <form action="/inicio" method="post">
                    @csrf
                    <input type="number" name="numero1" placeholder="Número 1">
                    <input type="number" name="numero2" placeholder="Número 2">
                    <button type="submit">Sumar</button>
                </form>

                @if(isset($resultado))
                    <h1>El resultado de la suma es: {{ $resultado }}</h1>
                @endif
            </div>
        </div>

        <footer class="mt-8 text-center text-gray-500">
            <p>&copy; {{ date('Y') }} Tu empresa. Todos los derechos reservados.</p>
        </footer>
    </div>
@endsection