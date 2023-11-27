<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con Nombre</title>
</head>
<body>
    <h1>Formulario con Nombre</h1>
    <p>Este formulario es para el evento: {{ $nombre }}</p>

    <!-- Agrega aquí tu formulario HTML, campos de entrada, botones, etc. -->
    <form action="{{ url('/procesar-formulario') }}" method="post">
        @csrf
        <!-- Campos del formulario -->
        <!-- ... -->
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
