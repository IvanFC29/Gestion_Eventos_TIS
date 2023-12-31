<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Registros</title>
</head>
<body>
    <h1>Listado de Inscritos por equipos</h1>

    <table border="1">
        <thead>
            <tr>
                
                <th>Nombre Competencia</th>
                <th>Nombre Equipo</th>
                <th>Coach Encargado</th>               
                <th>NombreParticipante_1</th>
                <th>NombreParticipante_2</th>
                <th>NombreParticipante_3</th>
            </tr>
        </thead>
        <tbody>
            @foreach($registros as $registro)
                <tr>
                    
                    <td>{{ $registro->nombreComp }}</td>
                    <td>{{ $registro->nombreEquipo }}</td>
                    <td>{{ $registro->coachEncargado }}</td>
                    <td>{{ $registro->nombre1 }}</td>
                    <td>{{ $registro->nombre2 }}</td>
                    <td>{{ $registro->nombre3 }}</td>
                   
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
