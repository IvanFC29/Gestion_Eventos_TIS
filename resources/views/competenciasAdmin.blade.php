<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Competencias</title>
  <link rel="stylesheet" href="{{ asset('css/sinLogin.css') }}" TYPE="text/css">  
  <link rel="stylesheet" href="{{ asset('css/competencia_admin.css') }}" TYPE="text/css"> 
  <link rel="stylesheet" href="{{ asset('css/eventos_usuario.css') }}" TYPE="text/css">  
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <script src="{{ asset('js/nuevo_evento.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
    
    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

    <link rel="stylesheet" href="{{ asset('css/loginAdmin.css') }}" type="text/css">  
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
</head>
<!-- Tailwind CSS Link -->
<link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
<body>
      
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
                    <a href="#works" class="dropdown-toggle"  data-toggle="dropdown">Competencias <span class="caret"></span></a>
                    <ul class="dropdown-menu animated fadeInLeft" role="menu">
                    <li><a href="#" class="dropdown-item ">Ver Competencias</a></li>
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
          <div class="row">
              @foreach ($listados as $competencias)


                  <div class="modal" id="modal-{{ $competencias->id }}">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title">{{ $competencias->nombreComp }}</h5>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                              <div class="modal-body">
                                  <p>{{ $competencias->descripcion }}</p>
                                  <br>
                                  <p class="card-text">Referencias:</p>
                                  <p class="card-text">{{ $competencias->correo_referencia }}</p>
                                  <p class="card-text">{{ $competencias->cel_referencia }}</p>
                                  <!-- Agrega aquí más detalles del competencias si es necesario -->
                              </div>
                               <!-- Botón para abrir el formulario en el modal-->
                                <a href="{{ url('/formcompetencias', ['nombreComp' => $competencias->nombreComp]) }}" class="btn btn-primary">
                                  Registrarse
                                </a>

                          </div>
                      </div>
                  </div>

                  

                  <!-- Agrega un botón para abrir el modal -->
                  <div class="col-md-4">
                      <div class="card eventocard">
                          <img src="{{ asset('images/eventos.jpg') }}" alt="Card Image" class="imgevento">
                          <div class="card-body eventobodycard">
                              <h5 class="card-title">{{ $competencias->nombreComp }}</h5>
                              <p class="card-text">{{ $competencias->descripcion }}</p>

                              <button type="button" class="btn btn-primary abrirmodales" data-toggle="modal" data-target="#modal-{{ $competencias->id }}">
                                  Ver detalles
                              </button>
                          </div>
                      </div>
                       
                        
                      <br>
                  </div>

                  <div class="modal fade" id="modal-principal" tabindex="-1" role="dialog" aria-labelledby="modal-principal-label" aria-hidden="true">
                    <!-- ... (código anterior del modal principal) ... -->
                    
                  </div>

                                
                  
                @endforeach
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

              $(document).ready(function() {
              // Abre el formulario cuando se hace clic en "Registrarse a Evento"
                  $('#open-form').on('click', function() {
                        $('#registro-form').show();
                  });

              // Cierra el formulario cuando se hace clic en "Cerrar"
                  $('#close-form').on('click', function() {
                        $('#registro-form').hide();
                  });
              });
          </script>
</body>
</html>