<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Registros</title>
</head>
<body>
    <h1>Listado de Registros</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Evento Inscrito</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Edad</th>
            </tr>
        </thead>
        <tbody>
            @foreach($registros as $registro)
                <tr>
                    <td>{{ $registro->id }}</td>
                    <td>{{ $registro->eventoinscrito }}</td>
                    <td>{{ $registro->nombre }}</td>
                    <td>{{ $registro->apellidos }}</td>
                    <td>{{ $registro->correo }}</td>
                    <td>{{ $registro->telefono }}</td>
                    <td>{{ $registro->edad }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
