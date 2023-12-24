<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="{{ asset('css/formulario.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/eventos_admin.css') }}" TYPE="text/css">  
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}" TYPE="text/css">  
    <link rel="stylesheet" href="{{ asset('css/crearcompetencia.css') }}" type="text/css">  
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

  <title>Crear Competencia</title> 
    
</head>

<body>


<header>
    <!-- Contenido del encabezado (header) -->
    <!-- Page Content -->
    <nav class="navbar custom-navbar navbar-expand-lg">
        <div class="container-fluid">
            <div class="divtitulom">
                <h1 class="titulomalo">ICPC</h1>
            </div>
        </div>
        @if(auth()->user()->rol=='coach')
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
                    </div>    
                </li>                   
            </ul>
        </div> 
        @endif     
    </nav>
</header>

<div class="container-fluid">
    <div class="row">
        <!-- Barra de navegación izquierda (aside) -->
        <aside class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <!-- Contenido de tu barra de navegación izquierda -->
                @if(auth()->user()->rol=='admin')
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
                                <li><a href="/ver-eventos-editables" class="dropdown-item">Lista de Eventos</a></li>
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
                                <li><a href="/listaCoachs" class="dropdown-item ">Ver coachs</a></li>
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
                @else
                <nav class="navbar navbar-inverse" id="sidebar-wrapper" role="navigation">
                    <ul class="nav sidebar-nav">
                        <div class="sidebar-header">
                            <div class="sidebar-brand ">
                            <i class="bi bi-person-circle"></i>
                            <a href="#">Coach</a>
                            </div>        
                        </div>
                        <ul class="nav flex-column">
                            
                            <li class="dropdown">
                                <a href="#works" class="dropdown-toggle"  data-toggle="dropdown">Competencias <span class="caret"></span></a>
                                <ul class="dropdown-menu animated fadeInLeft" role="menu">
                                @if(auth()->user()->permisoComp == 1)
                                    <li><a href="/competencias-coach" class="dropdown-item">Ver Competencias</a></li>
                                    <li><a href="/crearcompetencias" class="dropdown-item">Crear Competencia</a></li>
                                @else
                                    <li><a href="/competencias-coach" class="dropdown-item">Ver Competencias</a></li>
                                @endif
                                </ul>
                            </li>
                            
                            @if(auth()->user()->permisoCoach == 1)
                            <li class="dropdown">
                                <a href="#works" class="dropdown-toggle"  data-toggle="dropdown">Coachs <span class="caret"></span></a>
                                <ul class="dropdown-menu animated fadeInLeft" role="menu">
                                        <li><a href="/registerCoach" class="dropdown-item ">Nuevo Coach</a></li>
                                        @if(auth()->user()->permisoReportes == 1)
                                            <li><a href="/listaCoachs" class="dropdown-item ">Ver coachs</a></li>
                                        @endif
                                </ul>
                            </li>
                            @endif
                            <!--revisardespues-->
                            @if(auth()->user()->permisoReportes == 1)
                            <li class="dropdown">
                                <a href="#works" class="dropdown-toggle"  data-toggle="dropdown">Coachs <span class="caret"></span></a>
                                <ul class="dropdown-menu animated fadeInLeft" role="menu">
                                        
                                    <li><a href="/listaCoachs" class="dropdown-item ">Ver coachs</a></li>
                                        
                                </ul>
                            </li>
                            @endif
                            @if(auth()->user()->permisoReportes == 1)
                                    <li class="dropdown">
                                        <a href="#works" class="dropdown-toggle"  data-toggle="dropdown">Reportes <span class="caret"></span></a>
                                        <ul class="dropdown-menu animated fadeInLeft" role="menu">
                                            <li><a href="{{ route('reporteC') }}" class="dropdown-item ">Competencias</a></li>
                                            <li><a href="{{ route('reporteE') }}">Eventos</a></li>
                                        </ul>
                                    </li>
                            @endif
                            <li class="nav-item">
                                <a class="nav-link" href="/full-calendar">
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
                @endif
                <!-- ... (agrega más opciones según sea necesario) ... -->
            </div>
        </aside>
        
        <!-- Contenido principal -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <!-- Contenido principal de tu página -->

                
        <form method="post" action="{{ route('eventos.guardarCompetencia') }}" enctype="multipart/form-data">
                
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
                            <div id="botonMensaje"> 
                                <a href="/competencias-adm" id="botonMensaje" type="button"> Ver Competencias</a>
                            </div>
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'> </button>
                        </div>
                    </div>
                @endif
            <div class="section">
                <form method="post" action="{{ route('eventos.guardarCompetencia') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="containerTitulo">      
                            <h1> <b>CREAR COMPETENCIA</b> </h1>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Nombre de la Competencia:<span class="text-danger">*</span></label>
                                    <input type="text" name="nombreComp" class="form-control" value="" placeholder="Ingrese nombre" minlength="3" required>
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Descripción de la Competencia:</label>
                                    <textarea class="form-control" id="message-text" name="descripcionCompetencia" required ></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Fecha de Inicio:<span class="text-danger">*</span></label>
                                    <input type="date" name="fechaInicio" class="form-control" id="fechaInicio" min="<?php echo date('Y-m-d'); ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label>Fecha de Finalización:<span class="text-danger">*</span></label>
                                    <input type="date" name="fechaFin" class="form-control" id="fechaFin" min="<?php echo date('Y-m-d'); ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Ubicación de la Competencia:</label>
                                    <textarea class="form-control" id="message-text" name="ubicacionCompetencia" required ></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>E-mail de contacto:<span class="text-danger">*</span></label>
                                    <input type="text" name="email" class="form-control input_user" value="" placeholder="ej: gpmcheco@mail.com" required maxlength="50">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Telefono/Celular de contacto:<span class="text-danger">*</span></label>
                                    <input type="text" name="telefonoCompetencia" class="form-control input_user" value="" placeholder="Ingrese numero telef/cel" oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength); this.value = this.value.replace(/[^0-9]/,'')" minlength="7" maxlength="8" min="40000000" max="79999999" required>
                                </div>
                            </div>
                        </div>
                        <div class="row opcional" id="requisitos">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Requisitos:</label>
                                    <input type="text" name="requisitos" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row opcional" id="reglas">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Reglas:</label>
                                    <input type="text" name="reglas" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row opcional" id="links">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Links:</label>
                                    <input type="text" name="links" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row opcional" id="infextra">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Información Extra:</label>
                                    <input type="text" name="infextra" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row opcional" id="costo">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Costo:</label>
                                    <input type="text" name="costo" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row opcional" id="actividades">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Actividades:</label>
                                    <input type="text" name="actividades" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="umss">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Los participantes deben ser obligatoriamente de la UMSS?:</label>
                                    <select name="umss" class="form-control form-control-lg">
                                        <option>No</option>
                                        <option>Si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Cantidad de participantes en la Competencia?:</label>
                                    <select name="numeroParticipantes" class="form-control form-control-lg">
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- Agrega campos adicionales para las otras opciones -->
                        <div class="section2">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Campos adicionales:</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="chkRequisitos" name="chkRequisitos">
                                        <label class="form-check-label" for="chkRequisitos">Requisitos</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="chkReglas" name="chkReglas">
                                        <label class="form-check-label" for="chkReglas">Reglas</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="chkInfextra" name="chkInfextra">
                                        <label class="form-check-label" for="chkInfextra">Información Extra</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label></label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="chkLinks" name="chkLinks">
                                        <label class="form-check-label" for="chkLinks">Links</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="chkCosto" name="chkCosto">
                                        <label class="form-check-label" for="chkCosto">Costo</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary guardar" name="editable" value="0">Guardar</button>
                            <a type="button" href="/competencias-adm" class="btn btn-secondary cancelar">Cancelar</a>
                        </div>

                </form>   
            </div>
        </div>
        </main>
    </div>
</div>    

    <!-- Agrega este script al final de tu formulario -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {
            // Oculta inicialmente los campos opcionales
            $('.opcional').hide();

            // Maneja el cambio en los checkboxes
            $('input[type="checkbox"]').change(function () {
                var campo = $(this).attr('id').substring(3).toLowerCase(); // Obtiene el nombre del campo
                $('#' + campo).toggle(); // Muestra u oculta el campo según el estado del checkbox
            });
        });
    </script>
   
</body>
</html>