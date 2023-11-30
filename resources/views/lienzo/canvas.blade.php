<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Crear Afiche</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/4.2.0/fabric.min.js"></script>
	<link rel="stylesheet" href="{{ asset('css/canvas.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/loginAdmin.css') }}" type="text/css">  
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" type="text/css"> 
	 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
    </head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="nuevo-hash" crossorigin="anonymous">


    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

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
</div>	

<div id="toolbar">
	<button type="button" id="saveButton" class="btn btn-success" title="Descargar">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
           <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"></path>
           <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"></path>
        </svg>  
    </button>
	<button type="button" class="btn btn-primary" title="Guardar">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy2" viewBox="0 0 16 16">
  			<path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v3.5A1.5 1.5 0 0 1 11.5 6h-7A1.5 1.5 0 0 1 3 4.5V1H1.5a.5.5 0 0 0-.5.5m9.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5z"></path>
		</svg>
    </button>
	  <br><hr><br>
   	<button id="addText" class="btn btn-secondary" type="button">Agregar Texto</button>
   	<input type="file" id="imageInput" accept="image/*">
   	<button id="addImage" class="btn btn-secondary" type="button">Agregar Imagen</button>
   	<label for="colorPicker">Color de fondo</label>
   	<input type="color" id="colorPicker" value="#ffffff"> 
</div>	
<br>
<div class="bg-sky-500">
	<div class="section">
		<canvas id="canvas" width="850" height="900"></canvas>
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
<script>
  const ctx = canvas.getContext('2d');
  const imageUrl = "{{ asset('images/plantillas/') }}/{{ $image }}";
</script>
<script src="{{ asset('js/canvas.js') }}"></script>
</body>
</html>