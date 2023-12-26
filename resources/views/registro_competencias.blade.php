<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    
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
    <!-- Incluye Bootstrap CSS en la sección head de tu HTML -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Incluye Bootstrap JS justo antes del cierre del body -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

   
    <title>Registro Competencias</title> 
    <!-- Agrega esto en el head de tu documento HTML -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <style>
        form {
            background-color: rgb(255, 249, 77) !important;
        }
        .section {
            background-color: rgb(255, 249, 77) !important;
            margin-top: 3%;
        }
        .titulobueno {
            font-weight: bold;    /* Negrita */
            font-size: 20px;      /* Tamaño de fuente más grande */
            font-family: Verdana; /* Utiliza una fuente elegante */
            /* Agrega otros estilos de letras elegantes si es necesario */
        }
    </style>
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
                        <a class="dropdown-item" href="/editarPerfil">Editar Perfil</a>
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
            @if(auth()->user()->rol=='coach')
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
                                <a href="#works" class="dropdown-toggle"  data-toggle="dropdown">Eventos <span class="caret"></span></a>
                                <ul class="dropdown-menu animated fadeInLeft" role="menu">
                                @if(auth()->user()->permisoEve == 1)
                                    <li><a href="/crear-evento" class="dropdown-item ">Crear Evento</a></li>
                                    <li><a href="/home" class="dropdown-item">Lista de Eventos</a></li>
                                @else
                                <li><a href="/home" class="dropdown-item">Lista de Eventos</a></li>
                                @endif
                                </ul>
                            </li>
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
            </ul>        <!-- ... (agrega más opciones según sea necesario) ... -->
            </div>
        </aside>
        
        <!-- Contenido principal -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <!-- Contenido principal de tu página -->
            <div class="bg-sky-500">
                <!--@if (session('error'))
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
                @endif-->
                <div class="section">
                    <form method="post" action="{{ route('eventos.registroUsuComp') }}" id="registroForm" enctype="multipart/form-data">
                        @if (session('success'))
                            <div class='alert alert-success alert-dismissible fade show' role='alert'>
                                <strong>{{ session('success') }}</strong>
                                <!-- Agrega aquí cualquier otro contenido o botones que desees mostrar en el mensaje -->
                                <a href="/competencias-adm" id="botonMensaje" type="button"> Ver Competencias</a>
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>
                        @endif
                        @if (session('error'))
                            <div id='mensaje'>
                                <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                    <strong> {{ session('error') }}</strong>
                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                </div>
                            </div>
                        @endif
                        @csrf
                        <div class="containerTitulo"> 
                            <p class="titulo titulobueno" >{{ $nombreComp }}</p>     
                            <!--<h1><b>Registro a Competencia VARIABLE</b></h1>-->
                            <input type="hidden" name="nombreComp" value="{{ $nombreComp }}">
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label>Nombre del Equipo:<span class="text-danger"></span></label>
                                    <input type="text" name="nombreEquipo" class="form-control" value="" placeholder="Ingrese nombre" minlength="5" title="Ingrese al menos 5 letras" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label>Integrantes del Equipo:<span class="text-danger"></span></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label>Nombre:<span class="text-danger">*</span></label>
                                        <input type="text" name="nombre1" class="form-control" value="" placeholder="Ingrese nombre" pattern="[A-Za-z\s]{5,}" oninput="javascript: if (this.value.length > 0) this.value = this.value.replace(/[^A-Za-z\s]/g, '');" title="Solo se permiten carácteres alfabéticos, con un mínimo de 5 caracteres" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label>E-mail de contacto:<span class="text-danger">*</span></label>
                                        <input type="text" name="email1" class="form-control input_user" value="" placeholder="ej: gpmcheco@mail.com" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" required >
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label>Número de celular:<span class="text-danger">*</span></label>
                                        <input type="text" name="celular1" class="form-control input_user" value="" placeholder="" minlength="7" pattern="[0-9+ ]+" title="Se requiere mínimo 7 números y solo se permiten números, espacios y el símbolo '+'" oninput="javascript: if (this.value.length > 0) this.value = this.value.replace(/[^0-9+ ]/g, '');" required>
                                    </div>
                                </div>
                                <div class="col-md-3  sis-field">
                                    <div class="mb-3">
                                        <label>Código Sis:<span class="text-danger">*</span></label>
                                        <input type="number" name="sis1" id="sis1" class="form-control input_user" value="" placeholder="" min="195000000" max="202400000">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label>Nombre:<span class="text-danger">*</span></label>
                                        <input type="text" name="nombre2" class="form-control" value="" placeholder="Ingrese nombre del segundo participante" pattern="[A-Za-z\s]{5,}" oninput="javascript: if (this.value.length > 0) this.value = this.value.replace(/[^A-Za-z\s]/g, '');" title="Solo se permiten carácteres alfabéticos, con un mínimo de 5 caracteres" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label>E-mail de contacto:<span class="text-danger">*</span></label>
                                        <input type="text" name="email2" class="form-control input_user" value="" placeholder="ej: gpmcheco@mail.com" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label>Número de celular:<span class="text-danger">*</span></label>
                                        <input type="text" name="celular2" class="form-control input_user" value="" placeholder="" minlength="7" title="Se requiere mínimo 7 números" oninput="javascript: if (this.value.length > 0) this.value = this.value.replace(/[^0-9]/g, '');" required >
                                    </div>
                                </div>
                                <div class="col-md-3  sis-field">
                                    <div class="mb-3">
                                        <label>Código Sis:<span class="text-danger">*</span></label>
                                        <input type="number" name="sis2" id="sis2" class="form-control input_user" value="" placeholder="" min="195000000" max="202400000">
                                    </div>
                                </div>
                            </div>
                            <div class="row botonesparticipante2">
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-primary" onclick="agregarParticipante3()">Agregar Participante</button>
                                </div>
                            </div>
                            <div class="row participante3" style="display: none;">
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label>Nombre:<span class="text-danger">*</span></label>
                                        <input type="text" name="nombre3" class="form-control" value="" placeholder="Ingrese el nombre del tercer participante" pattern="[A-Za-z\s]{5,}" oninput="javascript: if (this.value.length > 0) this.value = this.value.replace(/[^A-Za-z\s]/g, '');" title="Solo se permiten carácteres alfabéticos, con un mínimo de 5 caracteres">
                                    </div>
                                </div>
                                <div class="col-md-3">                       
                                    <div class="mb-3">
                                        <label>E-mail de contacto:<span class="text-danger">*</span></label>
                                        <input type="text" name="email3" class="form-control input_user" value=""  placeholder="ej: gpmcheco@mail.com" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label>Número de celular:<span class="text-danger">*</span></label>
                                        <input type="text" name="celular3" class="form-control input_user" value="" placeholder="" minlength="7" title="Se requiere mínimo 7 números" oninput="javascript: if (this.value.length > 0) this.value = this.value.replace(/[^0-9]/g, '');" >
                                    </div>
                                </div>
                                <div class="col-md-3  sis-field">
                                    <div class="mb-3">
                                        <label>Código Sis:<span class="text-danger">*</span></label>
                                        <input type="number" name="sis3" id="sis3" class="form-control input_user" value="" placeholder="" min="195000000" max="202400000">
                                    </div>
                                </div>
                            </div>
                            <div class="row botonesparticipante3" style="display: none;">
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-primary" onclick="agregarParticipante4()">Agregar Participante</button>
                                </div>
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-primary" onclick="quitarParticipante3()">Quitar Participante</button>
                                </div>
                            </div>
                            <div class="row participante4" style="display: none;">
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label>Nombre:<span class="text-danger">*</span></label>
                                        <input type="text" name="nombre4" class="form-control" value="" placeholder="Ingrese el nombre del cuarto participante" pattern="[A-Za-z\s]{5,}" oninput="javascript: if (this.value.length > 0) this.value = this.value.replace(/[^A-Za-z\s]/g, '');" title="Solo se permiten carácteres alfabéticos, con un mínimo de 5 caracteres">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label>E-mail de contacto:<span class="text-danger">*</span></label>
                                        <input type="text" name="email4" class="form-control input_user" value="" placeholder="ej: gpmcheco@mail.com" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label>Número de celular:<span class="text-danger">*</span></label>
                                        <input type="text" name="celular4" class="form-control input_user" value="" placeholder="" minlength="7" title="Se requiere mínimo 7 números" oninput="javascript: if (this.value.length > 0) this.value = this.value.replace(/[^0-9]/g, '');">
                                    </div>
                                </div>
                                <div class="col-md-3 sis-field">
                                    <div class="mb-3">
                                        <label>Código Sis:<span class="text-danger">*</span></label>
                                        <input type="number" name="sis4" id="sis4" class="form-control input_user" value="" placeholder="" min="195000000" max="202400000">
                                    </div>
                                </div>
                                <!-- Repite lo mismo para los demás campos que quieres ocultar/mostrar -->

                            <div class="row botonesparticipante4" style="display: none;">
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-primary" onclick="quitarParticipante4()">Quitar Participante</button>
                                </div>
                            </div>
                        
                        </div>
                        <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Nombre del Coach:<span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="coachcompentencia" name="coachEncargado" pattern="[A-Za-z\s]{5,}" required></textarea>
                                </div>
                        </div>
                        <div class="modal-footer">
                                
                                <button type="submit" onclick="validarSIS()" class="btn btn-secondary">Registrarse</button>

                                <a type="button" href="/eventos" class="btn btn-secondary cancelar">Cancelar</a>
                        </div>
                    </form>
   
                </div>
        </div>
        </main>
    </div>
</div>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var numIntegrantes = @json($numIntegrantes);

                function toggleBotones(numIntegrantes) {
                    // Oculta todas las clases
                    
                    if (numIntegrantes == 2) {
                        document.querySelector('.botonesparticipante2').style.display = 'none';
                    } else if (numIntegrantes == 3) {
                        document.querySelector('.botonesparticipante3').style.display = 'none';
                    } else if (numIntegrantes == 4) {
                        // No hace nada, puedes añadir lógica aquí si es necesario en el futuro
                    }
                }

                toggleBotones(numIntegrantes);

                // Puedes agregar un listener para cambios dinámicos si es necesario
            });
        </script>

    


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Obtener el valor de $umssValue
            var umss = "{{ $umss }}";

            // Función para ocultar o mostrar campos según el valor de $umssValue
            function toggleSisFields(umss) {
                if (umss === "No") {
                    // Ocultar campos si $umssValue es "No"
                    document.querySelectorAll('.sis-field').forEach(function (element) {
                        element.style.display = 'none';
                    });
                } else {
                    // Mostrar campos si $umssValue no es "No"
                    document.querySelectorAll('.sis-field').forEach(function (element) {
                        element.style.display = 'block';
                    });
                }
            }

            // Llamar a la función inicialmente con el valor actual de $umssValue
            toggleSisFields(umss);

            // Agregar un listener al cambio del valor (por si cambia dinámicamente)
            // Puedes ajustar el selector del elemento que contiene el valor de $umssValue
            document.querySelector('#umss').addEventListener('change', function () {
                umss = this.value;
                toggleSisFields(umss);
            });
        });
    </script>

    <script>
        function agregarParticipante3() {
            var numIntegrantes = @json($numIntegrantes);
            if (numIntegrantes == 3) {
               document.querySelector('.botonesparticipante3').style.display = 'none';               
               document.querySelector('.botonesparticipante2').style.display = 'none';
               document.querySelector('.participante3').style.display = 'flex'; // Cambiado de 'block' a 'flex'
            } else if (numIntegrantes == 4) {
                    // No hace nada, puedes añadir lógica aquí si es necesario en el futuro
                    // Ocultar botonesparticipante2
                    document.querySelector('.botonesparticipante2').style.display = 'none';
                    // Mostrar participante3 y botonesparticipante3
                    document.querySelector('.participante3').style.display = 'flex'; // Cambiado de 'block' a 'flex'
                    document.querySelector('.botonesparticipante3').style.display = 'flex'; // Cambiado de 'block' a 'flex'
            }
        }

        function quitarParticipante3() {
            // Ocultar participante3 y botonesparticipante3
            document.querySelector('.participante3').style.display = 'none';
            document.querySelector('.botonesparticipante3').style.display = 'none';

            // Mostrar botonesparticipante2
            document.querySelector('.botonesparticipante2').style.display = 'flex'; // Cambiado de 'block' a 'flex'
        }

        function agregarParticipante4() {
            // Ocultar botonesparticipante3
            document.querySelector('.botonesparticipante3').style.display = 'none';

            // Mostrar participante4 y botonesparticipante4
            document.querySelector('.participante4').style.display = 'flex'; // Cambiado de 'block' a 'flex'
            document.querySelector('.botonesparticipante4').style.display = 'flex'; // Cambiado de 'block' a 'flex'
        }

        function quitarParticipante4() {
            // Ocultar participante4 y botonesparticipante4
            document.querySelector('.participante4').style.display = 'none';
            document.querySelector('.botonesparticipante4').style.display = 'none';

            // Mostrar botonesparticipante3
            document.querySelector('.botonesparticipante3').style.display = 'flex'; // Cambiado de 'block' a 'flex'
        }
    </script>

    <!-- ... (resto del código) ... -->

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Incluye Bootstrap CSS en la sección head de tu HTML -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- Incluye Bootstrap JS justo antes del cierre del body -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    

</body>
</html>