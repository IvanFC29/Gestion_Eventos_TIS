<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Competencias</title>
  <!--<link rel="stylesheet" href="{{ asset('css/sinLogin.css') }}" TYPE="text/css">  -->
  <link rel="stylesheet" href="{{ asset('css/competencia_admin.css') }}" TYPE="text/css"> 
  <!--<link rel="stylesheet" href="{{ asset('css/eventos_usuario.css') }}" TYPE="text/css">  -->
  <link rel="stylesheet" href="{{ asset('css/elbuscar.css') }}" TYPE="text/css"> 
  <link rel="stylesheet" href="{{ asset('css/elbuscarAdmin.css') }}" TYPE="text/css">  
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
      
<nav class="navbar navbar-expand-lg  custom-navbar">
        <a class="navbar-brand" href="/index">ICPC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse color-letra" id="navbarNav">
            <ul class="navbar-nav ml-auto">


              @if(auth()->check())
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <b>{{auth()->user()->name}} {{auth()->user()->apellidoP}}</b>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                   
                <a class="dropdown-item" href="">Ver perfil</a>
                <a class="dropdown-item" href="">Editar Perfil</a>
                <a class="dropdown-item" href="{{ route('login.destroy') }}" >Cerrar Sesion</a>
              </li>
              @else
              
                <li class="nav-item">
                    <a class="nav-link" href="/">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/usuario-eventos">Eventos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/competencias-usuario">Competencias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login">Iniciar Sesion</a>
                </li>
              @endif
            </ul>
        </div>
    </nav>
      
      <div class="elbuscar">
        <div class="elotrobuscar">
          <form action="{{ route('buscar.competenciasU') }}" method="GET">
              <div class="cajadebuscar">
                  <input type="text" name="query" placeholder="Buscar eventos...">
              </div>
              <button type="submit">Buscar</button>
          </form>
        </div>
      </div>
      <div class="container mt-4">
          <div class="row">
            @if(count($listados) > 0)
              @foreach ($listados as $competencias)


                  <div class="modal" id="modal-{{ $competencias->idComp }}">
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

                              <button type="button" class="btn btn-primary abrirmodales" data-toggle="modal" data-target="#modal-{{ $competencias->idComp }}">
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
            @else
                    <div id='mensaje'>
                        <div class='alert alert-success alert-dismissible fade show' role='alert'>
                            <strong> {{ session('success') }}</strong>
                            <div id="botonMensaje"> 
                                <a href="#" id="botonMensaje" type="button"> No se encontraron eventos relacionados con la búsqueda.</a>
                            </div>
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'> </button>
                    </div>
            @endif
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