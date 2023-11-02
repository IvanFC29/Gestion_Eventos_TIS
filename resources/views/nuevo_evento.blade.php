<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/eventos_admin.css') }}" type="text/css">
    
    <link rel="stylesheet" href="{{ asset('css/formulario.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">  
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
  <title>Eventos</title> 
    

    <title>Crear Evento</title>
</head>

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
                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
            </li>
            <li class="dropdown">
                <a href="#works" class="dropdown-toggle"  data-toggle="dropdown">Eventos <span class="caret"></span></a>
                <ul class="dropdown-menu animated fadeInLeft" role="menu">
                <li><a href="/crear-evento" class="dropdown-item">Crear Evento</a></li>
                <li><a href="/ver-eventos-editables">Eventos Editables</a></li>
                </ul>
            </li>
            <li><a href="#about">Reportes</a></li>
            <li><a href="#events">Calendario</a></li>
            @if(auth()->check())
                <li>
                  <a href="{{ route('login.destroy') }}" >Cerrar Sesión</a>
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

<div class="bg-sky-500">
    @if (session('error'))
        <div id='mensaje'>
            <div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong> {{ session('error') }}</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'> </button>
            </div>
        </div>
    @endif
    @if (session('success'))
        <div id='mensaje'>
            <div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong> {{ session('success') }}</strong>
                <div id="opciones_post_evento">
                    <a href="/eventos" type="button"> Ver Eventos </a>
                    <a href="/canvas" type="button"> Realizar Afiche </a>
                </div>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'> </button>
            </div>
        </div>
    @endif
    <div class="section">
        <form id="formEvento" method="post" action="{{ route('eventos.guardarEvento') }}" enctype="multipart/form-data">
            @csrf
            <div class="containerTitulo">      
                <h1> <b>CREAR EVENTO</b> </h1>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label>Nombre del Evento:<span class="text-danger">*</span></label>
                        <input type="text" name="nombre" id="nombre" class="form-control" value="" placeholder="Ingrese nombre" oninput="this.value = this.value.replace(/[^\a-\z\A-\Z\ñ\Ñ-\á\é\í\ó\ú ]/g,'')" minlength="3" maxlength="80" required>
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Descripción del evento:</label>
                        <textarea class="form-control" id="message-text" name="descripcionevento"></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label>Fecha a realizarse:<span class="text-danger">*</span></label>
                        <input type="date" name="fechaEventoInicio" class="form-control" id="fechaInicio" min="<?php echo date('Y-m-d'); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label>Fecha de culminación:<span class="text-danger">*</span></label>
                        <input type="date" name="fechaEventoFin" class="form-control" id="fechaFin" min="<?php echo date('Y-m-d'); ?>" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label>Tipo de evento:<span class="text-danger col-form-label">*</span></label>
                        <select name="tipoEvento" class="form-control form-control-lg">
                            <option></option>
                            <option>Convocatoria</option>
                            <option>Capacitación</option>
                            <option>Clasificación</option>
                            <option>Competencia</option>
                        </select>
                    </div>
                </div>
                <!--<div class="col-md-6">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Afiche del evento:</label>
                        <input type="file" name="aficheEvento" class="form-control-file">
                    </div>
                </div>-->
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label>E-mail de contacto:<span class="text-danger">*</span></label>
                        <input type="text" name="email" id="email" class="form-control input_user" value="" placeholder="ej: gpmcheco@mail.com" required maxlength="50">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label>Telefono/Celular de contacto:<span class="text-danger">*</span></label>
                        <input type="text" name="telefonoevento" id="cel" class="form-control input_user" value="" placeholder="Ingrese numero telef/cel" oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength); this.value = this.value.replace(/[^0-9]/,'')" minlength="7" maxlength="8" min="40000000" max="79999999" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary guardar" name="editable" value="0">Guardar</button>
                <button type="submit" class="btn btn-primary editar" name="editable" value="1">Editar luego</button>
                <a type="button" href="/eventos" class="btn btn-secondary cancelar">Cancelar</a>
            </div>
        </form>   
    </div>
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
</script>
<script src="{{ asset('js/nuevo_evento.js') }}"></script>
</body>
</html>