<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BCB</title>
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" TYPE="text/css">  
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
    </head>
<body>
    <nav class="navbar custom-navbar navbar-expand-lg " >
      <div class="container-fluid ">
        <i class="bi bi-braces"></i>
        <a class="navbar-brand " href="#">BCBuilders</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Competencias</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Eventos</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Iniciar Sesión
              </a>
              <ul class="dropdown-menu">
                <li>
                <button type="button" class="dropdown-item " data-toggle="modal" data-target="#loginPersonalModal" data-whatever="@getbootstrap">Personal</button>

                </li>
                <li><button type="button" class="dropdown-item " data-toggle="modal" data-target="#loginParticipanteModal" data-whatever="@getbootstrap">Participante</button>

                
                </li>
                
              </ul>
            </li>
            <li></li>
            
          </ul>
            
            <form class="d-flex" role="search">
            
            </form>
        </div>
      </div>
    </nav>
    <div class="img">
    <img src="{{ asset('images/Min-fcyt.jpg') }}" alt="Mi Imagen" class="img-dimesiones">
    </div>
    <div>
        Acerca de.....
    </div>
    <div class="container textcenter">
    <h1></h1>
    

    </div>

    <!--modal crear evento-->
    <div>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#eventoModal" data-whatever="@mdo">Crear Evento</button>
    </div>
    <div>
      
      <div class="modal fade" id="eventoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Nuevo Evento</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
              <div class="mb-3">
                <label>Nombre del Evento:<span class="text-danger">*</span></label>
                <input type="text" name="nombrepersonal" class="form-control " value="" placeholder= "Ingrese nombre"  
                   oninput="this.value = this.value.replace(/[^\a-\z\A-\Z\ñ\Ñ ]/g,'')"  minlength ="3" maxlength ="30" required>
              </div>
              
              <div class="mb-3">
                <label for="message-text" class="col-form-label">Descripción del evento:</label>
                <textarea class="form-control" id="message-text" name="descripcionevento"></textarea>
              </div>
              <div class="mb-3">
                <label>Fecha a realizarse:<span class="date-danger">*</span></label>
                <input type="date" name="fechaevento" class="form-control" id="fechaevento" min="<?php echo date('Y-m-d'); ?>">

              </div>
              <div class="mb-3">
                <label >Tipo de evento:<span class="text-danger col-form-label">*</span></label>
                
                <select class="form-control form-control-lg">
                  <option></option>
                  <option>Capacitacion</option>
                  <option>Entrenamiento</option>
                  <option>Competencia</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Afiche del evento:</label>
                <input type="file" name="aficheevento"class="form-control-file" >
              </div>
              <div class="mb-3">
                <label >E-mail de contacto:<span class="text-danger">*</span></label><br>
                <input type="text" name="email" class="form-control input_user" value="" placeholder= "ej: gpmcheco@mail.com" required maxlength="50">
              </div>
              <div class="mb-3">
                <label >Telefono/Celular de contacto:<span class="text-danger">*</span></label>
                <input type="text" name="telefonoevento" class="form-control input_user" value="" placeholder="Ingrese numero telef/cel"
                        oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength); this.value = this.value.replace(/[^0-9]/,'')" minlength ="7" maxlength ="8" min="40000000" max="79999999" required>
                    
              </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary">Guardar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--modal inicio de sesion-->
    <div>
      <div class="modal fade" id="loginPersonalModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header" style="padding:35px 50px;">
              <h4><span class="glyphicon glyphicon-lock"></span> Inicio de Sesión</h4>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
              <form role="form">
                <div class="form-group">
                  <label for="usrname"><span class="glyphicon glyphicon-user"></span> Nombre de usuario:</label>
                  <input type="text" class="form-control" id="usrname" placeholder="Ingrese nombre de usuario o contraseña">
                </div>
                <div class="form-group">
                  <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Contraseña:</label>
                  <input type="text" class="form-control" id="psw" placeholder="Ingrese contraseña">
                </div>
                <div class="checkbox">
                  <label><input type="checkbox" value="" checked>Recordar contraseña</label>
                </div>
                  <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Ingresar</button>
              </form>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
              <p>¿Olvidó su nombre de usuario o contraseña? <a href="#">Recuperar</a></p>
            </div>
            
            
            
          </div>
        </div>
      </div>
    </div>
    

</body>
</html>