<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{ asset('css/eventos_admin.css') }}" TYPE="text/css">

	<!-- Agrega el enlace a la hoja de estilos de Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/events.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
    <script src="{{ asset('js/nuevo_evento.js') }}"></script>
	<title>Crear Evento</title>
</head>
<body>

<aside>
     <div class="sidebar">
        <div class="top">
            <div class="logo">
                <i class="bx bxl-codepen"></i>
                <span>CP-BOL</span>
            </div>
            <i class="bx bx-menu" id="btn"></i>
        </div>
        <div class="user">
            <img src="{{ asset('userrr.png') }}" alt="me" class="user-img">
            <div>
                <p class="bold">Admin B.</p>
                <p>Admin</p>
            </div>
        </div>
        <ul>
            <li>
                <a type="button" href="{{ route('eventos.crearEvento') }}">
                    <i class="bx bx-plus-medical"></i>
                    <span class="nav-item">Crear Eventos</span>
                </a>
            </li>
            <li>
                <a type="button" href="#">
                    <i class="bx bx-edit-alt"></i>
                    <span class="nav-item">Eventos Editables</span>
                </a>
            </li>
        </ul>
    </div>
</aside>

<div class="main-content">
   	<div class="navbar">
       	<div class="titulo">CP-BOL</div>
  	</div>
  	<div class="section">
  		<form method="post" action="{{ route('eventos.guardarEvento') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label>Nombre del Evento:<span class="text-danger">*</span></label>
                        <input type="text" name="nombre" class="form-control" value="" placeholder="Ingrese nombre" oninput="this.value = this.value.replace(/[^\a-\z\A-\Z\ñ\Ñ ]/g,'')" minlength="3" maxlength="30" required>
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Descripción del evento:</label>
                        <textarea class="form-control" id="message-text" name="descripcionevento"></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label>Fecha a realizarse:<span class="date-danger">*</span></label>
                        <input type="date" name="fechaEventoInicio" class="form-control" id="fechaInicio" min="<?php echo date('Y-m-d'); ?>">
                    </div>
                    <div class="mb-3">
                        <label>Fecha de culminación:<span class="date-danger">*</span></label>
                        <input type="date" name="fechaEventoFin" class="form-control" id="fechaFin" min="<?php echo date('Y-m-d'); ?>">
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
                            <option>Entrenamiento</option>
                            <option>Clasificación</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Afiche del evento:</label>
                        <input type="file" name="aficheEvento" class="form-control-file">
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
                        <input type="text" name="telefonoevento" class="form-control input_user" value="" placeholder="Ingrese numero telef/cel" oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength); this.value = this.value.replace(/[^0-9]/,'')" minlength="7" maxlength="8" min="40000000" max="79999999" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <button type="submit" class="btn btn-secondary">Editar mas tarde</button>
                <button type="button" class="btn btn-primary">Cancelar</button>
            </div>
        </form>
	</div>
</div>
</section>


</body>
</html>