<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('css/formulario.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/eventos_admin.css') }}" TYPE="text/css">  
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}" TYPE="text/css">  

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
    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS y dependencias (jQuery y Popper.js) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <title>Crear Evento</title> 
    
</head>

<body>

  <!--MENU SIDEBAR-->  

<header>
    <!-- Contenido del encabezado (header) -->
    <!-- Page Content -->
    <nav class="navbar custom-navbar navbar-expand-lg">
        <div class="container-fluid">
            <div class="divtitulom">
                <h1 class="titulomalo">ICPC</h1>
            </div>
        </div>
                    
    </nav>
</header>
        

<div class="container-fluid">
    <div class="row">
        <!-- Barra de navegación izquierda (aside) -->
        <aside class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <!-- Contenido de tu barra de navegación izquierda -->
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
                            <li><a href="/eventos" class="dropdown-item">Lista de Eventos</a></li>
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
            </ul>        <!-- ... (agrega más opciones según sea necesario) ... -->
            </div>
        </aside>
        
        <!-- Contenido principal -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <!-- Contenido principal de tu página -->                   
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
                                <a href="/eventos" id="botonMensaje" type="button"> Ver Eventos</a>
                                <a href="/lista-afiches" id="botonMensaje" type="button"> Crear Afiche</a>
                            </div>
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'> </button>
                        </div>
                    </div>
                @endif
                <div class="section">
                    <form method="post" action="{{ route('eventos.guardarEvento') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="containerTitulo">      
                            <h1> <b>CREAR EVENTO</b> </h1>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Nombre del Evento:<span class="text-danger">*</span></label>
                                    <input type="text" name="nombre" class="form-control" value="" placeholder="Ingrese nombre"  minlength="3" maxlength="100" required>
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Descripción del evento:<span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="message-text" name="descripcionevento" required></textarea>
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
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>E-mail de Coach:</label>
                                    <input type="text" name="emailCoach" class="form-control input_user" value="" placeholder="ej: gpmcheco@mail.com"  maxlength="50">
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
                                    <label>Telefono/Celular de contacto: <span class="text-danger" id="telefonoError" style="color: red;">*</span></label>
                                    <input type="text" name="telefonoevento" id="telefonoevento" class="form-control input_user" value="" placeholder="Ingrese numero telef/cel" minlength="8" maxlength="8" pattern="^[764][0-9]{7}$" required>
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
                        <div class="row opcional" id="contenido">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Contenido:</label>
                                    <!--<input type="text" name="contenido" class="form-control">-->
                                    <textarea class="form-control" name="contenido"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row opcional"  id="cronograma">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Cronograma:</label>
                                    <input type="text" name="cronograma" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row opcional"  id="costo">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Costo:</label>
                                    <input type="text" name="costo" class="form-control">
                                </div>
                            </div>
                        </div>
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
                                        <input class="form-check-input" type="checkbox" id="chkLinks" name="chkLinks">
                                        <label class="form-check-label" for="chkLinks">Links</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="chkCosto" name="chkCosto">
                                        <label class="form-check-label" for="chkCosto">Costo</label>
                                    </div>
                                    <!-- Agrega checkboxes para las otras opciones -->
                                </div>
                                <div class="col-md-6">
                                    <label></label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="chkInfextra" name="chkInfextra">
                                        <label class="form-check-label" for="chkInfextra">Información Extra</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="chkContenido" name="chkContenido">
                                        <label class="form-check-label" for="chkContenido">Contenido</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="chkCronograma" name="chkCronograma">
                                        <label class="form-check-label" for="chkCronograma">Cronograma</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary guardar" name="editable" value="0">Guardar</button>
                            <!--<button type="submit" class="btn btn-primary editar" name="editable" value="1">Editar luego</button>-->
                            <a type="button" href="/eventos" class="btn btn-secondary cancelar">Cancelar</a>
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
<script src="{{ asset('js/nuevo_evento.js') }}"></script>


</body>
</html>