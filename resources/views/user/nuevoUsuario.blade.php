<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
    <link rel="stylesheet" href="{{ asset('css/formulario.css') }}" TYPE="text/css">
    <link rel="stylesheet" href="{{ asset('css/sinLogin.css') }}" TYPE="text/css">  
	<!-- Agrega el enlace a la hoja de estilos de Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 

    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    </head>
	<title>Crear Usuario</title>
</head>
<body>



<nav class="navbar custom-navbar navbar-expand-lg " >
    <div class="container-fluid ">
        <div class="divtitulom">
            <h1 class="titulomalo">CP-Bol</h1>
        </div>
        <div>
            <a href="/">ATRAS</a>
        </div>
    </div>                
</nav>



<br>
<div class="bg-sky-500">

    @if (session('success'))
        <div id='mensaje'>
            <div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong> {{ session('success') }}</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'> </button>
            </div>
              </div>
    @endif

<div class="section">
  		<form method="post" action="{{ route('user.guardarUsuario') }}" enctype="multipart/form-data">
            @csrf
            <div class="containerTitulo">      
                <h1 class="letratitulo">Registro de Usuario</h1>  
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label>Nombre:<span class="text-danger">*</span></label>
                        <input type="text" name="nombre" class="form-control" value="" placeholder="Ingrese nombre" oninput="this.value = this.value.replace(/[^\a-\z\A-\Z\ñ\Ñ ]/g,'')" minlength="3" maxlength="30" required>
                    </div>
                    <div class="mb-3">
                        <label>Apellido Paterno:</label>
                        <input type="text" name="apellidoP" class="form-control" value="" placeholder="Ingrese apellido paterno" oninput="this.value = this.value.replace(/[^\a-\z\A-\Z\ñ\Ñ ]/g,'')" minlength="3" maxlength="30">
                    </div>
                    <div class="mb-3">
                    <label>Apellido Materno:</label>
                        <input type="text" name="apellidoM" class="form-control" value="" placeholder="Ingrese apellido materno" oninput="this.value = this.value.replace(/[^\a-\z\A-\Z\ñ\Ñ ]/g,'')" minlength="3" maxlength="30">

                    </div>
                    <div class="mb-3">
                        <label>Fecha de nacimiento:<span class="date-danger">*</span></label>
                        <input type="date" name="nacimiento" class="form-control" id="fechaInicio" max="<?php echo date('Y-m-d'); ?>" required>
                    </div>
                </div>
                
                <div class="col-md-6">
                    
                    <div class="mb-3">
                        <label>Correo Electronico:<span class="text-danger">*</span></label>
                        <input type="text" name="email" class="form-control input_user" value="" placeholder="ej: gpmcheco@mail.com" required maxlength="50">
                    </div>
                    <div class="mb-3">
                        <label>Telefono/Celular:<span class="text-danger">*</span></label>
                        <input type="text" name="cel" class="form-control input_user" value="" placeholder="Ingrese numero telef/cel" oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength); this.value = this.value.replace(/[^0-9]/,'')" minlength="7" maxlength="8" min="40000000" max="79999999" required>
                    </div>
                    <div class="mb-3">
                        <label>Universidad:<span class="text-danger">*</span></label>
                        <input type="text" name="universidad" class="form-control" value="" placeholder="Ingrese su universidad" oninput="this.value = this.value.replace(/[^\a-\z\A-\Z\ñ\Ñ ]/g,'')" minlength="3" maxlength="90" required>
                    </div>
                    <div class="mb-3">
                        <label>Carnet de Identidad:<span class="text-danger">*</span></label>
                        <input type="text" name="ci" class="form-control" value="" placeholder="Ingrese su ci" oninput="this.value = this.value.replace(/[^\0-\9 ]/g,'')" minlength="8" maxlength="10" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer mb-3">
            <button type="submit" class="btn btn-primary guardar" name="editable" value="0">Registrar</button>
                <a type="button" href="/eventos" class="btn btn-primary cancelar">Cancelar</a>
            </div>
        </form>
	</div>
          <!-- /#page-content-wrapper -->

</div>


<br>
<footer class="bg-dark text-white text-center py-4">
        <div>
            <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="text-left">
            <p>&copy; 2023 BCBuilders. Todos los derechos reservados.</p>
            <p><i class="fa fa-envelope" aria-hidden="true"></i> bc.builders.100@gmail.com</p>
            <p><i class="fa fa-phone" aria-hidden="true"></i> +591 71761280, +591 76906952, +591 77933620</p>
        </div>
    </footer>
</body>
</html>