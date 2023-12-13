<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Eventos</title>
  
  <link rel="stylesheet" href="{{ asset('css/eventos_admin.css') }}" TYPE="text/css">  
  <link rel="stylesheet" href="{{ asset('css/loginAdmin.css') }}" type="text/css"> 
  
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
      
  <!--MENU SIDEBAR-->  
  <div id="wrapper">
    <div class="overlay"></div>
    
    <!-- Sidebar -->
    
    <nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
      
      <ul class="nav sidebar-nav">
        
        
        
        <div class="sidebar-header">
          <div class="sidebar-brand ">
            <i class="bi bi-person-circle"></i>
            <a href="#">Admin</a>
          </div>        
        </div>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Inicio</a>
        </li>
        <li class="dropdown">
          <a href="#works" class="dropdown-toggle"  data-toggle="dropdown">Eventos <span class="caret"></span></a>
          <ul class="dropdown-menu animated fadeInLeft" role="menu">
            <li><a href="/crear-evento" class="dropdown-item ">Crear Evento</a></li>
            <!--<li><a href="/ver-eventos-editables">Eventos Editables</a></li>-->
          </ul>
        </li>
        <li class="dropdown">
          <a href="#works" class="dropdown-toggle"  data-toggle="dropdown">Competencias <span class="caret"></span></a>
          <ul class="dropdown-menu animated fadeInLeft" role="menu">
            <li><a href="/competencias-adm" class="dropdown-item ">Ver Competencias</a></li>
            <li><a href="/crearcompetencias">Crear Competencia</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#works" class="dropdown-toggle"  data-toggle="dropdown">Coachs <span class="caret"></span></a>
          <ul class="dropdown-menu animated fadeInLeft" role="menu">
            <li><a href="/registerCoach" class="dropdown-item ">Nuevo Coach</a></li>
            <li><a href="#">Ver coachs</a></li>
          </ul>
        </li>
        <li><a href="/reporte">Reportes</a></li>
        <li><a href="#events">Calendario</a></li>
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
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <nav class="navbar custom-navbar navbar-expand-lg">
      <div class="container-fluid">
        <div class="divtitulom">
          <h1 class="titulomalo">CP-Bol</h1>
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
            </li>                 
            
          </ul>
        </div>
        
      </nav>
      
      <div id="page-content-wrapper">
        <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
          <span class="hamb-top"></span>
          <span class="hamb-middle"></span>
          <span class="hamb-bottom"></span>
        </button>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
              <h1></h1>
            </div>
          </div>
        </div>
      </div>
      <!-- /#page-content-wrapper -->
    </div>
  </div>


  <div class="container mt-4">
    <div id="contenido">
        <!-- Sección de los eventos próximos o cercanos  -->
        <div>
            <h2 class="titulo-grande">Lista de eventos</h2>
        </div>
        
        <br>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Imprimir</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
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
                          <a href="#" onclick="imprimirEvento('{{ $evento->nombre}}')" class="btn btn-info">Imprimir</a>
                      </td>
                      


                      

                        <td>
                            <!-- Botón para editar -->
                            <span class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal_editar_evento" onclick="editarEvento('{{ $evento->id }}')">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </span>
                        </td>
                        <td>
                            <!-- Agrega aquí tu lógica para eliminar -->
                            <!-- Puedes colocar un botón o enlace según tu preferencia -->
                            <span class="btn btn-danger">Eliminar</span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


    


          
<!-- /#wrapper -->
<script>
    $(document).ready(function () {
        var trigger = $('.hamburger'),
        overlay = $('.overlay'),
        isClosed = false;

        trigger.click(function () {
          hamburger_cross();      
        });

        function hamburger_cross() {
          if (isClosed == true) {          
            overlay.hide();
            trigger.removeClass('is-open');
            trigger.addClass('is-closed');
            isClosed = false;
          } else {   
            overlay.show();
            trigger.removeClass('is-closed');
            trigger.addClass('is-open');
            isClosed = true;
          }
        }
              
        $('[data-toggle="offcanvas"]').click(function () {
            $('#wrapper').toggleClass('toggled');
        });  
    });
              
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