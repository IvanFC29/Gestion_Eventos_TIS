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
            <?php foreach($registros as $registro): ?>
                <tr>
                    <td><?php echo $registro->id; ?></td>
                    <td><?php echo $registro->eventoinscrito; ?></td>
                    <td><?php echo $registro->nombre; ?></td>
                    <td><?php echo $registro->apellidos; ?></td>
                    <td><?php echo $registro->correo; ?></td>
                    <td><?php echo $registro->telefono; ?></td>
                    <td><?php echo $registro->edad; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
