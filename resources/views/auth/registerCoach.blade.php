<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="{{ asset('css/eventos_admin.css') }}" TYPE="text/css">  
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}" TYPE="text/css">  
  <link rel="stylesheet" href="{{ asset('css/fondoazulito.css') }}" TYPE="text/css">  
  <link rel="stylesheet" href="{{ asset('css/formulario.css') }}" TYPE="text/css">  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
        
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

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
  <div id="background-container">
    <img src="{{ asset('images/fondo3.jpg') }}" alt="Fondo de la página">  
  </div>

  <!--MENU SIDEBAR-->     
<header>
    <!-- Contenido del encabezado (header) -->
    <!-- Page Content -->
    <nav class="navbar custom-navbar navbar-expand-lg">
        <div class="container-fluid">
            <div class="divtitulom">
                <h1 class="titulomalo">ICPC</h1>
            </div>
        </div>
                      
    </nav>
</header>


<div class="container-fluid">
    <div class="row">
        <!-- Barra de navegación izquierda (aside) -->
        <aside class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <!-- Contenido de tu barra de navegación izquierda -->
            <nav class="navbar navbar-inverse" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <div class="sidebar-header">
                    <div class="sidebar-brand ">
                    <i class="bi bi-person-circle"></i>
                    <a href="#">Admin</a>
                    </div>        
                </div>
                <ul class="nav flex-column">
                    <li class="dropdown">
                        <a href="#works" class="dropdown-toggle"  data-toggle="dropdown">Eventos <span class="caret"></span></a>
                        <ul class="dropdown-menu animated fadeInLeft" role="menu">
                            <li><a href="/crear-evento" class="dropdown-item ">Crear Evento</a></li>
                            <li><a href="/eventos" class="dropdown-item">Lista de Eventos</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#works" class="dropdown-toggle"  data-toggle="dropdown">Competencias <span class="caret"></span></a>
                        <ul class="dropdown-menu animated fadeInLeft" role="menu">
                            <li><a href="/competencias-adm" class="dropdown-item ">Ver Competencias</a></li>
                            <li><a href="/crearcompetencias" class="dropdown-item ">Crear Competencia</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#works" class="dropdown-toggle"  data-toggle="dropdown">Coachs <span class="caret"></span></a>
                        <ul class="dropdown-menu animated fadeInLeft" role="menu">
                            <li><a href="/registerCoach" class="dropdown-item ">Nuevo Coach</a></li>
                            <li><a href="#" class="dropdown-item ">Ver coachs</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#works" class="dropdown-toggle"  data-toggle="dropdown">Reportes <span class="caret"></span></a>
                        <ul class="dropdown-menu animated fadeInLeft" role="menu">
                            <li><a href="{{ route('reporteC') }}" class="dropdown-item ">Competencias</a></li>
                            <li><a href="{{ route('reporteE') }}">Eventos</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/full-calendar">
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
        
        <!-- Contenido principal -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <!-- Contenido principal de tu página -->
          @if (session('success'))
              <div id='mensaje'>
                  <div class='alert alert-success alert-dismissible fade show' role='alert'>
                      <strong> {{ session('success') }}</strong>
                      <div id="botonMensaje">
                        <a href="/escribir-correo" type="button"> Enviar cuenta </a>  
                      </div>
                      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'> </button>
                  </div>
              </div>
          @endif
      <div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 
      rounded-lg shadow-lg">

        <h1 class="text-3xl text-center font-bold">Nuevo Coach</h1>

        <div class="bg-sky-500">
            <form class="mt-4" method="POST" action="/guardar-coach">
              @csrf
          
              <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
                text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Nombre"
                id="nombre" name="nombre">
          
              @error('nombre')        
                <p class="border border-red-500 rounded-md bg-red-100 w-full
                  text-red-600 p-2 my-2">* {{ $message }}</p>
              @enderror
          
              <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
                text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Apellido Paterno"
                id="apellidoP" name="apellidoP">
          
              @error('apellidoP')        
                <p class="border border-red-500 rounded-md bg-red-100 w-full
                  text-red-600 p-2 my-2">* {{ $message }}</p>
              @enderror
          
              <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
                text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Apellido Materno"
                id="apellidoM" name="apellidoM">
          
              @error('apellidoM')        
                <p class="border border-red-500 rounded-md bg-red-100 w-full
                  text-red-600 p-2 my-2">* {{ $message }}</p>
              @enderror

              <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
                text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Universidad"
                id="universidad" name="universidad">
          
              @error('universidad')        
                <p class="border border-red-500 rounded-md bg-red-100 w-full
                  text-red-600 p-2 my-2">* {{ $message }}</p>
              @enderror
          
              <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full
                text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Correo"
                id="email" name="email">
          
              @error('email')        
                <p class="border border-red-500 rounded-md bg-red-100 w-full
                  text-red-600 p-2 my-2">* {{ $message }}</p>
              @enderror
          
              <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full
                text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Contraseña"
                id="password" name="password">
          
              @error('password')        
                <p class="border border-red-500 rounded-md bg-red-100 w-full
                  text-red-600 p-2 my-2">* {{ $message }}</p>
              @enderror
              <button type="submit" class="rounded-md bg-blue-500 w-full text-lg
              text-white font-semibold p-2 my-3 hover:bg-blue-600">Guardar</button>

            </form>
          </div>
          
      </main>
    </div>
</div>
</body>
</html>