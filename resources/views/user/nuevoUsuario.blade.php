<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{ asset('css/eventos_admin.css') }}" TYPE="text/css">

	<!-- Agrega el enlace a la hoja de estilos de Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/eventos-lista.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
    <script src="{{ asset('js/nuevo_evento.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}" TYPE="text/css">  
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
    </head>
	<title>Crear Usuario</title>
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
                <li><a href="#pictures" class="dropdown-item " data-toggle="modal" data-target="#eventoModal" data-whatever="@getbootstrap">Crear Evento</a></li>
                <li><a href="#videos">Editar Evento</a></li>
                </ul>
            </li>
            <li><a href="#about">Reportes</a></li>
            <li><a href="#events">Calendario</a></li>
            <li><a href="#team">Cerrar Sesión</a></li>
            
            </ul>
        </nav>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <nav class="navbar custom-navbar navbar-expand-lg " >

                <div class="container-fluid ">
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
            </div>

            <div class="section">
  		<form method="post" action="{{ route('eventos.guardarEvento') }}" enctype="multipart/form-data">
            @csrf
            <div class="containerTitulo">      
                <h1> Nueva Cuenta</h1>  
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label>Nombre:<span class="text-danger">*</span></label>
                        <input type="text" name="nombre" class="form-control" value="" placeholder="Ingrese nombre" oninput="this.value = this.value.replace(/[^\a-\z\A-\Z\ñ\Ñ ]/g,'')" minlength="3" maxlength="30" required>
                    </div>
                    <div class="mb-3">
                        <label>Apellido Paterno:<span class="text-danger">*</span></label>
                        <input type="text" name="apellidoP" class="form-control" value="" placeholder="Ingrese apellido paterno" oninput="this.value = this.value.replace(/[^\a-\z\A-\Z\ñ\Ñ ]/g,'')" minlength="3" maxlength="30" required>
                    </div>
                    <div class="mb-3">
                        <label>Apellido Materno:<span class="text-danger">*</span></label>
                        <input type="text" name="apellidoM" class="form-control" value="" placeholder="Ingrese apellido materno" oninput="this.value = this.value.replace(/[^\a-\z\A-\Z\ñ\Ñ ]/g,'')" minlength="3" maxlength="30" required>
                    </div>
                    <div class="mb-3">
                        <label>Fecha de nacimiento:<span class="date-danger">*</span></label>
                        <input type="date" name="fechaEventoInicio" class="form-control" id="fechaInicio" max="<?php echo date('Y-m-d'); ?>">
                    </div>
                </div>
                
                <div class="col-md-6">
                    
                    <div class="mb-3">
                        <label>Correo Electronico:<span class="text-danger">*</span></label>
                        <input type="text" name="email" class="form-control input_user" value="" placeholder="ej: gpmcheco@mail.com" required maxlength="50">
                    </div>
                    <div class="mb-3">
                        <label>Telefono/Celular:<span class="text-danger">*</span></label>
                        <input type="text" name="telefonoevento" class="form-control input_user" value="" placeholder="Ingrese numero telef/cel" oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength); this.value = this.value.replace(/[^0-9]/,'')" minlength="7" maxlength="8" min="40000000" max="79999999" required>
                    </div>
                    <div class="mb-3">
                        <label>Universidad:<span class="text-danger">*</span></label>
                        <input type="text" name="nombre" class="form-control" value="" placeholder="Ingrese su universidad" oninput="this.value = this.value.replace(/[^\a-\z\A-\Z\ñ\Ñ ]/g,'')" minlength="3" maxlength="30" required>
                    </div>
                </div>
            </div>
            
            
            <div class="modal-footer mb-3">
                <button type="submit" class="btn btn-primary guardar" name="editable" value="0">Guardar</button>
                <a type="button" href="/eventos" class="btn btn-primary cancelar">Cancelar</a>
            </div>
        </form>
	</div>
          <!-- /#page-content-wrapper -->

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
  </script>


</body>
</html>