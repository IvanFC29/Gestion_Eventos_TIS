<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Eventos</title>
  <link rel="stylesheet" href="{{ asset('css/sinLogin.css') }}" TYPE="text/css">  
  <link rel="stylesheet" href="{{ asset('css/eventos_admin.css') }}" TYPE="text/css"> 
  <link rel="stylesheet" href="{{ asset('css/eventos_usuario.css') }}" TYPE="text/css">  
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    
    <!-- Tailwind CSS Link-->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
    <!-- Agrega Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.2/dist/css/bootstrap.min.css">

    <!-- Agrega Bootstrap JavaScript (jQuery y Popper.js son necesarios) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.2/dist/js/bootstrap.min.js"></script>
</head>
<body>
      
      <!--MENU SIDEBAR-->  
    <!--<div id="wrapper">
        <div class="overlay"></div>
          
          <-- Sidebar --
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
                <-- /#sidebar-wrapper --

                <-- Page Content --
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
              <-- /#page-content-wrapper --
        </div>
    </div>-->
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg  custom-navbar">
        <a class="navbar-brand" href="/index">Competencias - Programación Bolivia</a>
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
                    <a class="nav-link" href="#">Competencias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login">Iniciar Sesion</a>
                </li>
              @endif
            </ul>
        </div>
    </nav>
      <!--modal crear evento
      Para rescatar los datos--
      <div class="container mt-4">
          <div class="row">
            @foreach ($listados as $i)
              <div class="col-md-4">
                <div class="card eventocard">
                <a href="#" data-toggle="modal" data-target="#miModal"><img src="{{ asset('images/eventos.jpg') }}" alt="Card Image" class="imgevento"></a>
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
      </div>-->
      <!-- Puedes colocar este formulario donde desees, por ejemplo, en tu barra de navegación -->
      <form action="{{ route('buscar.eventos') }}" method="GET">
          <input type="text" name="query" placeholder="Buscar eventos...">
          <button type="submit">Buscar</button>
      </form>

      <div class="container mt-4">
          <div class="row">
              @foreach ($listados as $evento)


                  <div class="modal" id="modal-{{ $evento->id }}">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title">{{ $evento->nombre }}</h5>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                              <div class="modal-body">
                                  <p>{{ $evento->descripcion }}</p>
                                  <br>
                                  <p>Fecha de inicio: {{ $evento->fecha_inicio }}</p>
                                  <p>Fecha de fin: {{ $evento->fecha_fin }}</p>
                                  <!-- Agrega aquí más detalles del evento si es necesario -->
                              </div>
                               <!-- Botón para abrir el formulario en el modal -->
                                <a href="{{ url('/registro-eventos', ['nombre' => $evento->nombre]) }}" class="btn btn-primary">
                                  Registrase
                                </a>
                          </div>
                      </div>
                  </div>

                  

                  <!-- Agrega un botón para abrir el modal -->
                  <div class="col-md-4">
                      <div class="card eventocard">
                          <img src="{{ asset( $evento->afiche ) }}" alt="Card Image" class="imgevento">
                          <div class="card-body eventobodycard">
                              <h5 class="card-title">{{ $evento->nombre }}</h5>
                              <p class="card-text">{{ $evento->descripcion }}</p>
                              <p class="card-text">{{ $evento->fecha_inicio }}</p>
                              <p class="card-text">{{ $evento->fecha_fin }}</p>
                              <button type="button" class="btn btn-primary abrirmodales" data-toggle="modal" data-target="#modal-{{ $evento->id }}">
                                  Ver detalles
                              </button>
                          </div>
                      </div>
                       
                        
                      <br>
                  </div>

                  <div class="modal fade" id="modal-principal" tabindex="-1" role="dialog" aria-labelledby="modal-principal-label" aria-hidden="true">
                    <!-- ... (código anterior del modal principal) ... -->
                    <div class="modal-body">
                        <!-- Formulario de registro (inicialmente oculto) -->
                        <form id="registro-form" style="display: none">
                            <h4>Registrarse a Evento</h4>
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>
                            <div class="form-group">
                                <label for="correo">Correo Electrónico:</label>
                                <input type="email" class="form-control" id="correo" name="correo" required>
                            </div>
                            <div class="form-group">
                                <label for="comentarios">Comentarios:</label>
                                <textarea class="form-control" id="comentarios" name="comentarios"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                            <button type="button" class="btn btn-secondary" id="close-form">Cerrar</button>
                        </form>
                    </div>
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

              $(document).ready(function () {
                $('a[data-target="#miModal"]').click(function () {
                    // Aquí puedes cargar y mostrar datos desde tu lista "listados" en el modal
                    <p class="card-text">{{ $i->descripcion }}</p>
                        <p class="card-text">{{ $i->fecha_inicio }}</p>
                        <p class="card-text">{{ $i->fecha_fin }}</p>
                    var datos = "Contenido de la lista";
                    $('.modal-body').html(datos);
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