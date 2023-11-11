<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="{{ asset('css/loginAdmin.css') }}" type="text/css">   
  <link rel="stylesheet" href="{{ asset('css/correo.css') }}" type="text/css">   
  <link rel="stylesheet" href="{{ asset('css/eventos_admin.css') }}" TYPE="text/css">  
  <link rel="stylesheet" href="{{ asset('css/fondoazulito.css') }}" TYPE="text/css"> 
   <link rel="stylesheet" href="{{ asset('css/formulario.css') }}" TYPE="text/css"> 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
    
    
    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

</head>
<body>
  <div id="background-container">
    <img src="{{ asset('images/fondo3.jpg') }}" alt="Fondo de la página">  
  </div>
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
                    <li><a href="/ver-eventos-editables">Eventos Editables</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#works" class="dropdown-toggle"  data-toggle="dropdown">Coachs <span class="caret"></span></a>
                    <ul class="dropdown-menu animated fadeInLeft" role="menu">
                    <li><a href="/registerCoach" class="dropdown-item ">Nuevo Coach</a></li>
                    <li><a href="#">Ver coachs</a></li>
                    </ul>
                </li>
                <li><a href="#about">Reportes</a></li>
                <li><a href="#events">Calendario</a></li>
                @if(auth()->check())
                    <li>
                      <a href="{{ route('login.destroy') }}" >Cerrar Sesion</a>
                    </li>
                    @else
                    <li class="mx-6">
                      <a href="{{ route('login.index') }}" class="font-semibold hover-bg-indigo-700 py-3 px-4 rounded-md">Iniciar Sesión</a>
                    </li>
                    @endif
                
                </ul>
            </nav>
                <!-- /#sidebar-wrapper -->

                <!-- Page Content -->
                <nav class="navbar custom-navbar navbar-expand-lg">
                  <div class="container-fluid">
                    <div class="divtitulom">
                      <h1 class="titulomalo">Competencias - Programación Bolivia</h1>
                    </div>
                  </div>
                </nav>
                
              <div id="page-content-wrapper">
                  <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
                      <span class="hamb-top"></span>
                <span class="hamb-middle"></span>
              <span class="hamb-bottom"></span>
                  </button>
                  
              </div>
              <!-- /#page-content-wrapper -->
        </div>
    </div>

<div id="formCorreo">
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
</div>
    
    
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
      </body>
</html>