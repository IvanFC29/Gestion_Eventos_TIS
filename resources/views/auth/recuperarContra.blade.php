@extends('layouts.landing')

@section('title','LOGIN')

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
</style>


    <h2>Recuperación de contraseña</h2>
    <p>Hola,</p>
    <p>Por favor, ingresa tu dirección de correo electrónico a continuación para solicitar la recuperación de contraseña:</p>
    <form action="{{ route('enviar-correo')}}" method="POST" >
        @csrf
        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required>
        <div class="button-container">
            <br>
            <button class="button" type="submit">Solicitar recuperación de contraseña</button>
        </div>
        
    </form>
    



@endsection
