
<style>
    
    .content-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin-top: 15px; /* Ajusta según sea necesario */
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
        background-color: rgb(193, 231, 241);
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
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil</title>
  
  <link rel="stylesheet" href="{{ asset('css/eventos_admin.css') }}" TYPE="text/css">  
  <link rel="stylesheet" href="{{ asset('css/menu.css') }}" TYPE="text/css">  
  <link rel="stylesheet" href="{{ asset('css/elbuscar.css') }}" TYPE="text/css"> 
  <link rel="stylesheet" href="{{ asset('css/elbuscarAdmin.css') }}" TYPE="text/css">  
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    
    <link rel="stylesheet" href="{{ asset('css/fondoazulito.css') }}" TYPE="text/css">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
</head>
<body>
      
  <!--MENU SIDEBAR-->  

<header>
    <!-- Contenido del encabezado (header) -->
    <!-- Page Content -->
    <nav class="navbar custom-navbar navbar-expand-lg">
        <div class="container-fluid">
            <div class="divtitulom">
                <h1 class="titulomalo">CP Bol - Competencias Programación Bolivia</h1>
            </div>
        </div>
        <div class="collapse navbar-collapse color-letra" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <b>{{auth()->user()->name}}  {{auth()->user()->apellidoP}}      </b>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">   
                        <a class="dropdown-item" href="/perfil">Ver perfil</a>
                        <a class="dropdown-item" href="/editCoach">Editar Perfil</a>
                        <a class="dropdown-item" href="{{ route('login.destroy') }}" >Cerrar Sesion</a>
                    </div>    
                </li>                   
            </ul>
        </div>              
    </nav>
</header>
<aside class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <!-- Contenido de tu barra de navegación izquierda -->
            <nav class="navbar navbar-inverse" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <div class="sidebar-header">
                    <div class="sidebar-brand ">
                    <i class="bi bi-person-circle"></i>
                    <a href="#">Coach</a>
                    </div>        
                </div>
                <ul class="nav flex-column">
                    
                    <li class="dropdown">
                        <a href="#works" class="dropdown-toggle"  data-toggle="dropdown">Competencias <span class="caret"></span></a>
                        <ul class="dropdown-menu animated fadeInLeft" role="menu">
                            <li><a href="/competencias-coach" class="dropdown-item ">Ver Competencias</a></li>
                           
                        </ul>
                    </li>
                    
                    
                    <li class="nav-item">
                        <a class="nav-link" href="/calendarioC">
                            Calendario
                        </a>
                    </li>
                    @if(auth()->check())
                        <li>
                            <a href="{{ route('login.destroy') }}" >Cerrar Sesion</a>
                        </li>
                    @else
                        <li class="mx-6">
                            <a href="{{ route('login.index') }}" class="font-semibold hover-bg-indigo-700 py-3 px-4 rounded-md">Log In</a>
                        </li>
                    @endif   
                </ul>
            </nav>
            </ul>        <!-- ... (agrega más opciones según sea necesario) ... -->
            </div>
        </aside>

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
                            @error('name')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
        
                        <div class="profile-field">
                            <label for="apellidoP">Apellido Paterno:</label>
                            <input type="text" name="apellidoP" value="{{ auth()->user()->apellidoP }}">
                            @error('apellidoP')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div> <!-- Cerrar la primera columna -->
        
                    <div class="profile-column1">
                        <!-- Abrir la segunda columna -->
                        <div class="profile-field">
                            <label for="apellidoM">Apellido Materno:</label>
                            <input type="text" name="apellidoM" value="{{ auth()->user()->apellidoM }}">
                            @error('apellidoM')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
        
                        <div class="profile-field">
                            <label for="carnet">Carnet:</label>
                            <input type="text" name="carnet" value="{{ auth()->user()->carnet }}">
                            @error('carnet')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
        
                        <div class="profile-field phone">
                            <label for="telefono">Teléfono:</label>
                            <input type="text" name="telefono" value="{{ auth()->user()->telefono}}">
                            @error('telefono')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
        
                        <div class="profile-field">
                            <label for="direccion">Direccion:</label>
                            <input type="text" name="direccion" value="{{ auth()->user()->direccion}}">
                            @error('direccion')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
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

</body>
