<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Reporte de Eventos</title>
  
  <link rel="stylesheet" href="{{ asset('css/eventos_admin.css') }}" TYPE="text/css">  
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}" TYPE="text/css">
  
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
<body>
      

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
                        <a class="dropdown-item" href="/editarPerfil">Editar Perfil</a>
                        <a class="dropdown-item" href="{{ route('login.destroy') }}" >Cerrar Sesion</a>
                    </div>    
                </li>                   
            </ul>
        </div>              
    </nav>
</header>

<!--MENU SIDEBAR-->  

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
                        <a class="nav-link" href="#">
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

  <div class="container mt-4">
    <div id="contenido">
        <!-- Sección de los eventos próximos o cercanos  -->
        <div>
            <h2 class="titulo-grande">Lista de Eventos</h2>
        </div>
        
        <br>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Reporte de Inscritos</th>
                    <th>Reporte de Resultados</th>
                 
                </tr>
            </thead>
            <tbody>
                @foreach ($eventos as $evento)
                    <tr>
                        <td>{{ $evento->id }}</td>
                        <td>{{ $evento->nombre }}</td>
                        <td>{{ $evento->fecha_inicio }}</td>
                        <td>{{ $evento->fecha_fin }}</td>
                        <td>
                          <!-- Enlace para imprimir con estilos de hoja de estilos -->
                          <a href="#" onclick="imprimirEvento('{{ $evento->nombre}}')" class="btn btn-info">Imprimir </a>
                        </td>


                        <td>
                            <!-- Enlace para imprimir con estilos de hoja de estilos -->
                          <a href="#" onclick="imprimirEvento('{{ $evento->nombre}}')" class="btn btn-info">Imprimir </a>
                        </td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

    <!-- ... -->
    </main>
    </div>
</div>
    


          
<!-- /#wrapper -->
<script>      
    $(document).ready(function() {
        // Cierra el modal al presionar el botón "Cerrar" dentro del modal
        $('.modal .close').on('click', function() {
            $(this).closest('.modal').modal('hide');
        });
    });
</script>
<!-- Agrega esta función en una sección de scripts -->
<!-- Agrega esta función en una sección de scripts -->
<!-- Agrega esta función en una sección de scripts -->
<script>
  function imprimirEvento(nombre) {
      // Redirigir a la página de registros en PDF con el ID como parámetro
      window.location.href = '/reportePDF?nombre=' + nombre;
  }
</script>





<style>
  .titulo-grande {
      font-size: 28px; /* Tamaño de fuente más grande según tu preferencia */
      font-weight: bold; /* Opcional: Puedes hacerlo en negrita */
      /* Otros estilos que desees aplicar */
  }
  /* En tu hoja de estilos CSS o en la sección de estilos de tu HTML */


</style>
            
</body>
</html>