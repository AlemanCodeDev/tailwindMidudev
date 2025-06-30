<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- Asegúrate de que Vite esté cargado correctamente -->
</head>
<body>
  <div class="bg-mint-500 bg-clip-padding p-5">
    <h1 class="bg-gradient-to-r from-pink-500 to-violet-500 bg-clip-text text-5xl font-extrabold text-transparent" style="line-height: 100px;">My First Template</h1>
  </div>
  <section>
    <a href="/">Laravel</a> |
    <a href="/inicio">Suma</a> |
    <a href="/template">Template|</a>
    <a href="/productos">Productos|</a>
    <a href="/curso">Tailwind (midudev)|</a>
    <a href="/svg">Svg Convert</a>
  </section>
  <p class="font-script">This will use the Great Vibes font family. (template)</p>
  
  @yield('content') 

  Hola Soy el template
</body>
</html>