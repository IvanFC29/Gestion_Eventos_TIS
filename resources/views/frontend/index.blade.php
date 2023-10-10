<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BCB</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" TYPE="text/css">   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar custom-navbar navbar-expand-lg ">
      <div class="container-fluid ">
      <i class="bi bi-list"></i>
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
                Login
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Personal</a></li>
                <li><a class="dropdown-item" href="#">Participante</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            
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
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Crear evento</button>

    </div>
    
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Evento</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                <textarea class="form-control" id="message-text" name="nombrepersonal"></textarea>
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
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
              </div>
              <div class="mb-3">
                <label >Correo Electronico:<span class="text-danger">*</span></label><br>
                <input type="text" name="email" class="form-control input_user" value="" placeholder= "ej: gpmcheco@mail.com" required maxlength="50">
              </div>
                            
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit_name" class="btn btn-primary">Crear Evento</button>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
</body>
</html>