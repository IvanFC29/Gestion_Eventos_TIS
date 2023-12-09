@extends('layouts.landing')

@section('title', 'LOGIN')

@section('content')

<style>
    
    .content-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin-top: 5px; /* Ajusta según sea necesario */
    }

    .profile-container {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        max-width: 800px; /* Ajusta según sea necesario */
        width: 100%;
        text-align: center;
        padding: 20px;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .form-title {
        font-size: 28px; /* Tamaño de fuente ajustable según tus preferencias */
        font-weight: bold; /* Texto en negrita */
        text-align: center;
        margin-bottom: 20px; /* Espaciado inferior para separar el título de los campos */
        width: 100%; /* Asegurar que ocupe todo el ancho */
    }

    .profile-column {
        width: 48%; /* Ajusta según sea necesario */
        text-align: left;
        display: inline-block;
    }

    .profile-column1 {
        width: 48%; /* Ajusta según sea necesario */
        margin-top: 0%;
        text-align: left;
        display: inline-block;
    }

    .profile-picture {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        margin: 0 auto 20px;
        display: block;
    }

    .profile-field {
        margin-bottom: 15px;
    }

    .profile-field label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .profile-field span {
        display: block;
        margin-top: 5px;
        color: #555;
    }

    .profile-field input {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .button-container {
        text-align: center;
        margin-top: 20px;
    }

    .button-container button {
        margin-right: 10px;
        background-color: #4CAF50; /* Color de fondo verde */
        color: white; /* Color del texto blanco */
        border: none; /* Sin borde */
        padding: 10px 20px; /* Relleno */
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius: 4px; /* Bordes redondeados */
        cursor: pointer;
    }

    .button-container a {
        background-color: #f44336; /* Color de fondo rojo */
        color: white; /* Color del texto blanco */
        border: none; /* Sin borde */
        padding: 10px 20px; /* Relleno */
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius: 4px; /* Bordes redondeados */
        cursor: pointer;
    }
     /* Agrega este código a tu estilo CSS existente */

     .profile-picture-container {
        position: relative;
        margin-bottom: 20px; /* Ajusta según sea necesario */
    }

    .profile-picture {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        margin: 0 auto 10px;
        display: block;
    }

    /* Estilos adicionales para el input de la imagen */
    input[type="file"] {
        display: block;
        margin: 0 auto;
    }

</style>

<div class="content-container">
    <div class="profile-container">
       
          <div id="alert-container" style="display: none; margin-left: 25%;"></div>
    @if (session('success'))
        <script>
        document.getElementById('alert-container').style.display = 'block';
        document.getElementById('alert-container').innerHTML = '<div class="alert alert-success">{{ session('success') }}</div>';
        </script>
    @endif
        <div class="form-title">
            <h2>Editar Datos</h2>
        </div>

        <div class="profile-column">
            

            <form action="{{ route('update', auth()->user()->id) }}" method="POST" enctype="multipart/form-data">
            
                @csrf

                @method('PUT')
                <div class="profile-field">
                    <label for="profile_picture">Foto de perfil:</label>
                    <div class="profile-picture-container">
                        <img class="profile-picture" src="{{ asset('storage/images/fotosPerfil/' . auth()->user()->foto) }}" alt="Profile Picture">

                        <input type="file" name="foto">
                    </div>
                </div>
                
                <div class="profile-field">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="name" value="{{ auth()->user()->name }}">
                </div>

                <div class="profile-field">
                    <label for="apellidoP">Apellido Paterno:</label>
                    <input type="text" name="apellidoP" value="{{ auth()->user()->apellidoP }}">
                </div>
            </div> <!-- Cerrar la primera columna -->

            <div class="profile-column1">
                <!-- Abrir la segunda columna -->
                <div class="profile-field">
                    <label for="apellidoM">Apellido Materno:</label>
                    <input type="text" name="apellidoM" value="{{ auth()->user()->apellidoM }}">
                </div>

                <div class="profile-field">
                    <label for="carnet">Carnet:</label>
                    <input type="text" name="carnet" value="{{ auth()->user()->carnet }}">
                </div>

                <div class="profile-field phone">
                    <label for="telefono">Teléfono:</label>
                    <input type="text" name="telefono" value="{{ auth()->user()->telefono}}">
                </div>

                <div class="profile-field">
                    <label for="direccion">Direccion:</label>
                    <input type="text" name="direccion" value="{{ auth()->user()->direccion}}">
                </div>

                <div class="button-container">
                    <button type="submit">Guardar cambios</button>
                    <a href="/eventos" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
            <!-- Cerrar la segunda columna -->
        </div>
    </div>
</div>

@endsection
