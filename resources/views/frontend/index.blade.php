<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BCB</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" TYPE="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg  custom-navbar">
        <a class="navbar-brand" href="#">BCBuilders</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse color-letra" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Eventos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Competencias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Iniciar Sesion</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Encabezado -->
    <header class="jumbotron text-center">
        <h1>Bienvenido a ICPC</h1>
        <p>Eventos de competencias de programacion.</p>
        <a href="#" class="btn btn-color">Más información</a>
    </header>

    <!-- Sección de características -->
    <section class="container">
        <div class="row">
            <div class="col-md-4">
                <h3>ICPC-FCYT</h3>
                <p>Descripción ....</p>
            </div>
            <div class="col-md-4">
                <h3>ICPC-BOlIVIA</h3>
                <p>Descripción ....</p>
            </div>
            <div class="col-md-4">
                <h3>ICPC-Mundial</h3>
                <p>Descripción ....</p>
            </div>
        </div>
    </section>

    <!-- Pie de página -->
    <footer class="bg-dark text-white text-center py-3">
        <p>Redes Sociales..</p>
    </footer>

    <!-- Scripts de Bootstrap y jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
