<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro Eventos</title>

  <link rel="stylesheet" href="{{ asset('css/loginAdmin.css') }}" type="text/css"> 
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" type="text/css">  
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
    
  
    
    
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" TYPE="text/css">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/modal.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    
    <link rel="stylesheet" href="{{ asset('css/fondoazulito.css') }}" TYPE="text/css">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    


  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      align-items: center;
      justify-content: center;
      height: 100vh;
      background-color: #f4f4f4;
    }

    form {
      background-color: rgb(217, 212, 58) !important;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      width: 500px !important;
    }

    label {
      display: block;
      margin-bottom: 8px;
    }

    input {
      width: 100%;
      padding: 8px;
      margin-bottom: 16px;
      box-sizing: border-box;
    }

    button {
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
      background-color: #007BFF;
      color: #fff;
      border: none;
      border-radius: 5px;
    }

    button:hover {
      background-color: #0056b3;
    }

    .titulo {
        font-size: 25px;
        font-weight: 800;
        font-family: Georgia, 'Times New Roman', Times, serif;
        color: Black;
        text-align: center;
    }

    .centrar{
      display: grid;
      place-items: center;
      padding-top: 4%;
    }

  </style>
</head>
<body>

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

  <div class="centrar">
    <form method="post" action="{{ route('eventos.registroUsuEvent') }}" enctype="multipart/form-data">
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
      @csrf
      <p class="titulo" >{{ $nombre }}</p>
      <label for="nombre">Nombre:<span class="text-danger">*</span></label>
      <input type="text" id="nombre" name="nombre" title="Solo se permiten letras" placeholder="Ingrese su nombre" oninput="this.value = this.value.replace(/[^\a-\z\A-\Z\ñ\Ñ ]/g,'')" minlength="3" maxlength="30" required>

      <label for="apellidos">Apellidos:<span class="text-danger">*</span></label>
      <input type="text" id="apellidos" name="apellidos" title="Solo se permiten letras" placeholder="Ingrese sus apellidos" oninput="this.value = this.value.replace(/[^\a-\z\A-\Z\ñ\Ñ ]/g,'')" minlength="3" maxlength="30" required>

      <label for="correo">Correo:<span class="text-danger">*</span></label>
      <input type="email" id="correo" name="correo" placeholder="Ingrese su correo electronico" required>

      <label for="telefono">Número de Celular:<span class="text-danger">*</span></label>
      <input type="tel" id="telefono" name="telefono" pattern="[0-9]+" title="Solo se permiten números y caracteres especiales"placeholder="Ingrese su numero de telefono" value="" oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength); this.value = this.value.replace(/[^0-9\+ ]/,'')" minlength="7" maxlength="12" min="40000000" max="79999999" required>

      <label for="edad">Edad:<span class="text-danger">*</span></label>
      <input type="number" id="edad" name="edad" placeholder="Ingrese su edad" oninput="validarEdad(this)" maxlength="2">

      <input type="hidden" name="eventoinscrito" value="{{ $nombre }}">

      <label >(*)<span class="text-danger">*</span> Campos Obligatorios</label>
      <button type="submit">Enviar</button>
    </form>
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
    function validarEdad(input) {
      // Elimina cualquier carácter que no sea un dígito
      input.value = input.value.replace(/\D/g, '');
    
      // Limita la longitud del valor a dos dígitos
      if (input.value.length > 2) {
        input.value = input.value.slice(0, 2);
      }
    }
  </script>

</body>
</html>
