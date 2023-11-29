@extends('layouts.landing')

@section('title', 'LOGIN')

@section('content')

<style>
    


    .content-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin-top: 20px; /* Ajusta según sea necesario */
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

    .profile-column {
        width: 48%; /* Ajusta según sea necesario */
        text-align: left;
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
</style>



<div class="content-container">
    <div class="profile-container">
        <div class="profile-column">
            @if(Storage::exists('public/' . auth()->user()->foto))
                <img class="profile-picture" src="{{ asset('storage/' . auth()->user()->foto) }}" alt="Profile Picture">
            @else
                <p>No se encontró la imagen</p>
            @endif     

            <div class="profile-field">
                <label for="nombre">Nombre:</label>
                <span>{{auth()->user()->name}} </span>
            </div>

            <div class="profile-field">
                <label for="apellidoP">Apellido Paterno:</label>
                <span>{{auth()->user()->apellidoP}} </span>
            </div>
            <div class="profile-field">
                <label for="apellidoM">Apellido Materno:</label>
                <span>{{auth()->user()->apellidoM}} </span>
            </div>
           
           
        </div>

        <div class="profile-column">
            <div class="profile-field">
                <label for="email">Email:</label>
                <span>{{auth()->user()->email}} </span>
            </div>
            <div class="profile-field">
                <label for="fechaN">Fecha de Nacimiento:</label>
                <span>{{auth()->user()->fechaN}}</span>
            </div>

            <div class="profile-field">
                <label for="carnet">Carnet:</label>
                <span>{{auth()->user()->carnet}}</span>
            </div>

            <div class="profile-field phone">
                <label for="telefono">Teléfono:</label>
                
                <span>{{auth()->user()->telefono}}</span>
            </div>

            <div class="profile-field">
                <label for="direccion">Direccion:</label>
                <span>{{auth()->user()->direccion}}</span>
            </div>
            <div class="profile-field">
                <label for="universidad">Universidad:</label>
                <span>{{auth()->user()->universidad}}</span>
            </div>


        </div>
    </div>
</div>

@endsection
