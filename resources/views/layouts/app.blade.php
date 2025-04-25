<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- Asegúrate de que Vite esté cargado correctamente -->
</head>
<body>
  <a href="/">Laravel</a> |
  <a href="/inicio">Suma</a> |
  <a href="/template">Template|</a>
  <a href="/productos">Productos</a>
  @yield('content') 

  Hola Soy el template
</body>
</html>