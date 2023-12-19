<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Evento</title>
    <link rel="stylesheet" href="{{ asset('css/eventos_admin.css') }}" TYPE="text/css">  
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}" TYPE="text/css">  
    <link rel="stylesheet" href="{{ asset('css/formulario.css') }}" TYPE="text/css">  
        
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
                            <li><a href="#" class="dropdown-item ">Ver coachs</a></li>
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
            </ul>        <!-- ... (agrega más opciones según sea necesario) ... -->
            </div>
        </aside>
        
        <!-- Contenido principal -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <!-- Contenido principal de tu página -->
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
                        <a href="{{ route('notificar', ['emailCoach' => $evento_editar->emailCoach, 'id' => $evento_editar->id]) }}" id="botonMensaje" type="button">Notificar cambio </a>
                    </div>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'> </button>
                </div>
            </div>
            @endif
            <br>
            <div class="section">
                <form method="post" action="{{ route('eventos.modificar', $id ) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="containerTitulo">      
                        <h1> <b>EDITAR EVENTO nro {{ $id }}</b> </h1>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Nombre del Evento:<span class="text-danger">*</span></label>
                                <input type="text" name="nombre" class="form-control" value="{{ $evento_editar->nombre }}" placeholder=""  minlength="3" maxlength="100" required>
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Descripción del evento:<span class="text-danger">*</span></label>
                                <textarea class="form-control" id="message-text" name="descripcionevento" required>{{ $evento_editar->descripcion }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Fecha a realizarse:<span class="text-danger">*</span></label>
                                <input type="date" name="fechaEventoInicio" class="form-control" id="fechaInicio" value="{{ $evento_editar->fecha_inicio }}" min="<?php echo date('Y-m-d'); ?>" required>
                            </div>
                            <div class="mb-3">
                                <label>Fecha de culminación:<span class="text-danger">*</span></label>
                                <input type="date" name="fechaEventoFin" class="form-control" id="fechaFin" value="{{ $evento_editar->fecha_fin }}" min="<?php echo date('Y-m-d'); ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Tipo de evento:<span class="text-danger col-form-label">*</span></label>
                                <select name="tipoEvento" class="form-control form-control-lg" required>
                                    <option></option>
                                    <option {{ $evento_editar->tipo == 'Convocatoria' ? 'selected' : '' }}>Convocatoria</option>
                                    <option {{ $evento_editar->tipo == 'Capacitación' ? 'selected' : '' }}>Capacitación</option>
                                    <option {{ $evento_editar->tipo == 'Clasificación' ? 'selected' : '' }}>Clasificación</option>
                                    <option {{ $evento_editar->tipo == 'Competencia' ? 'selected' : '' }}>Competencia</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Costo: (Bs)</label>
                                <input type="int" name="costoevento" class="form-control input_user" value="{{ $evento_editar->costo }}" oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength); this.value = this.value.replace(/[^0-9]/,'')" maxlength="3">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>E-mail de contacto:<span class="text-danger">*</span></label>
                                <input type="text" name="email" class="form-control input_user" value="{{ $evento_editar->correo_referencia }}"  required maxlength="50">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Telefono/Celular de contacto:<span class="text-danger">*</span></label>
                                <input type="text" name="telefonoevento" class="form-control input_user" value="{{ $evento_editar->cel_referencia }}"  oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength); this.value = this.value.replace(/[^0-9]/,'')" minlength="7" maxlength="8" min="40000000" max="79999999" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Coach asignado:</label>
                                <input type="text" name="elcoach" class="form-control input_user" value="{{ $evento_editar->emailCoach }}" maxlength="100">
                            </div>
                        </div>
                        <!--  Otro campo -->
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary guardar" name="id" value="{{ $evento_editar->id }}">Editar</button>
                        <!-- <button type="submit" class="btn btn-primary editar" name="editable" value="1">Editar luego</button>-->
                        <a type="button" href="/eventos" class="btn btn-secondary cancelar">Cancelar</a>
                    </div>
                </form>   
            </div>
        </div>
    </main>
<script src="{{ asset('js/nuevo_evento.js') }}"></script>
</body>
</html>