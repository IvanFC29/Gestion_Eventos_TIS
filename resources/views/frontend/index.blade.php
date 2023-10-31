<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BCB</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" TYPE="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body >
    <div class="d-flex flex-column">
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg  custom-navbar">
        <a class="navbar-brand" href="/index">BCBuilders</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse color-letra" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/eventos">Eventos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Competencias</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Iniciar Sesion
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/login">Administrador</a>
                    <a class="dropdown-item" href="#">Participante</a>
                    
                </li>
                
            </ul>
        </div>
    </nav>

    <!-- Encabezado -->
    <header class="jumbotron text-center header-bg " style="z-index: 1; position: relative;">
    

    <h1>Bienvenido a ICPC</h1>
    <p>Eventos de competencias de programación.</p>
    <a href="/nuevoUsuario" class="btn btn-color">Regístrate</a>
    
    </header>
    
    <!-- Sección de características -->
    <section class="container dimensiones">
        <div class="row">
            <div class="col-md-4">
                <h3>ICPC-FCYT</h3>
                <p>Descripción ....</p>
                <a href="https://www.umss.edu.bo/competencia-latinoamericana-de-programacion-icpc-2022/" class="btn btn-primary">Ir</a>
            </div>
            <div class="col-md-4">
                <h3>ICPC-BOLIVIA</h3>
                <p>Descripción ....</p>
                <a href="https://umsa-2023.clei.org/inicio/eventos-asociados/clp/" class="btn btn-primary">Ir</a>
            </div>
            <div class="col-md-4" >
                <h3 >ICPC-Mundial </h3>
                <p>Descripción ....</p>
                <a href="https://icpc.global/" class="btn btn-primary">Ir</a>
            </div>
        </div>
    </section>
    
    </div>
    
        <!-- Pie de página -->
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
    
    

    <!-- Scripts de Bootstrap y jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
