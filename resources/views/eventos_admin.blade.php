<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Eventos</title>
  
  <link rel="stylesheet" href="{{ asset('css/eventos_admin.css') }}" TYPE="text/css">  
  <link rel="stylesheet" href="{{ asset('css/loginAdmin.css') }}" type="text/css"> 
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" type="text/css">  
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
    
  
    
    
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" TYPE="text/css">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/modal.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    
    <link rel="stylesheet" href="{{ asset('css/fondoazulito.css') }}" TYPE="text/css">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    

  </head>
    
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
                        <a class="dropdown-item" href="/editarPerfil">Editar Perfil</a>
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

      <!--modal crear evento
      Para rescatar los datos--
      <div class="container mt-4">
          <div class="row">
            @foreach ($lista as $i)
              <div class="col-md-4">
                <div class="card eventocard">
                  <img src="{{ asset('images/eventos.jpg') }}" alt="Card Image" class="imgevento">
                  <div class="card-body eventobodycard">
                    <h5 class="card-title">{{ $i->nombre }}</h5>
                    <p class="card-text">{{ $i->descripcion }}</p>
                    <p class="card-text">{{ $i->fecha_inicio }}</p>
                    <p class="card-text">{{ $i->fecha_fin }}</p>
                  </div>
                </div>
                <br>
              </div>
            @endforeach
      </div>
       CHAT GPT -->
       <div class="container mt-4">
          <div class="row">
              @foreach ($lista as $evento)
                  <div class="modal" id="modal-{{ $evento->id }}">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title">{{ $evento->nombre }}</h5>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                              <div class="modal-body">
                                  <p>{{ $evento->descripcion }}</p>
                                  <p>Fecha de inicio: {{ $evento->fecha_inicio }}</p>
                                  <p>Fecha de fin: {{ $evento->fecha_fin }}</p>
                                  <!-- Agrega aquí más detalles del evento si es necesario -->
                              </div>
                          </div>
                      </div>
                  </div>

                  <!-- Agrega un botón para abrir el modal -->
                  <div class="col-md-4">
                      <div class="card eventocard">
                          <img src="{{ asset('images/eventos.jpg') }}" alt="Card Image" class="imgevento">
                          <div class="card-body eventobodycard">
                              <h5 class="card-title">{{ $evento->nombre }}</h5>
                              <p class="card-text">{{ $evento->descripcion }}</p>
                              <p class="card-text">{{ $evento->fecha_inicio }}</p>
                              <p class="card-text">{{ $evento->fecha_fin }}</p>
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-{{ $evento->id }}">
                                  Ver detalles
                              </button>
                          </div>
                      </div>
                        
                      <br>
                  </div>
                @endforeach
          </div>
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
            
</body>
</html>