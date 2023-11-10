@extends('layouts.landing')

@section('content')
<style>
    .container {
        background-color: #fff;
        max-width: 600px;
        margin: 20px auto; /* Centra el contenedor horizontalmente en la página */
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: left; /* Restablece la alineación del texto a la izquierda dentro del contenedor */
    }

    h2 {
        color: #333;
    }

    label {
        font-weight: bold;
        display: block;
        margin-top: 10px;
    }

    input[type="email"] {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .button-container {
        text-align: center; /* Centra los botones horizontalmente */
    }

    .button {
        background-color: #007BFF;
        color: #fff;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
        
        display: inline-block;
        width: 100%;
        height: 80%;
    }

    .button:hover {
        background-color: #0056b3;
    }
    .large-heading {
        font-weight: bold;
        display: block;
    text-align: center;
    font-size: 24px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.0);
}
</style>


    <h2 class="large-heading">Envio de Cuentas</h2>
    <br>
    <form action="/enviar-cuenta-coach" method="POST">
        @csrf
        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required>
        <label for="contenido">Mensaje:</label>
        <textarea id="contenido" name="contenido" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="___________ De parte de la administración del ICPC, le hacemos llegar su cuenta con la que podra hacer seguimiento del equipo que se le fue asignado." required rows="4" cols="40"></textarea>
        <div class="button-container">
            <br>
            <button class="button" type="submit">Enviar correo</button>
        </div>
        @error('message')        
      <p class="border border-red-500 rounded-md bg-red-100 w-full
     text-red-600 p-2 my-2">* {{ $message }}</p>
  @enderror
        <div id="alert-container" style="display: none;"></div>
     @if (session('success'))
    <script>
        document.getElementById('alert-container').style.display = 'block';
        document.getElementById('alert-container').innerHTML = '<div class="alert alert-success">{{ session('success') }}</div>';
    </script>
    @endif

    </form>
    
    



@endsection
