<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario con Estilos</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      background-color: #f4f4f4;
    }

    form {
      background-color: rgb(217, 212, 58) !important;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      width: 500px !important;
    }

    label {
      display: block;
      margin-bottom: 8px;
    }

    input {
      width: 100%;
      padding: 8px;
      margin-bottom: 16px;
      box-sizing: border-box;
    }

    button {
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
      background-color: #007BFF;
      color: #fff;
      border: none;
      border-radius: 5px;
    }

    button:hover {
      background-color: #0056b3;
    }

    .titulo {
        font-size: 25px;
        font-weight: 800;
        font-family: Georgia, 'Times New Roman', Times, serif;
        color: Black;
        text-align: center;
    }
  </style>
</head>
<body>

<form>
    <p class="titulo">{{ $nombre }}</p>
  <label for="nombres">Nombres:</label>
  <input type="text" id="nombres" name="nombres" pattern="[A-Za-z]+" title="Solo se permiten letras" required>

  <label for="apellidos">Apellidos:</label>
  <input type="text" id="apellidos" name="apellidos" pattern="[A-Za-z]+" title="Solo se permiten letras" required>

  <label for="correo">Correo:</label>
  <input type="email" id="correo" name="correo" required>

  <label for="telefono">Número de Celular:</label>
  <input type="tel" id="telefono" name="telefono" pattern="[0-9]+" title="Solo se permiten números y caracteres especiales">

  <label for="edad">Edad:</label>
  <input type="number" id="edad" name="edad" min="1" required>

  <button type="submit">Enviar</button>
</form>

</body>
</html>
