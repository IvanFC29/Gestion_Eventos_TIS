<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Competencias - Programación Bolivia</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" TYPE="text/css">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/modal.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body >
    <div class="d-flex flex-column">
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg  custom-navbar">
        <div id="titulo">
            <h2>Competencias - Programación Bolivia</h2>
        </div>
        <br>
        <div class="collapse navbar-collapse color-letra" id="navbarNav">
            <ul class="navbar-nav ml-auto">

                

              @if(auth()->check())

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <b>{{auth()->user()->name}}  {{auth()->user()->apellidoP}}      </b>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                   
                <a class="dropdown-item" href="/loginEstudiante">Ver perfil</a>
                <a class="dropdown-item" href="#">Editar Perfil</a>
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
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Iniciar Sesión
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/login">Administrador</a>
                <a class="dropdown-item" href="/loginEstudiante">Participante</a>
                <a class="dropdown-item" href="#">Coach</a>
            </li>
            @endif
                
            </ul>
        </div>
    </nav>


    <!-- Encabezado -->
<header class="jumbotron text-center header-bg " style="z-index: 1; position: relative;">
    
<div id="sidebarTitulo">
    <h1>Bienvenido a ICPC</h1>
    <p>Eventos de competencias de programación.</p>
    <a href="#" id="modalUser" class="btn btn-color">Regístrate</a>
</div>
   <div id="modal" class="modal">
        <div class="modal-content">
            <h5 class="modal-title" id="exampleModalLabel">El rol del estudinte!!</h5>
            <span id="closeModalBtn" class="close">&times;</span>
            <div class="modal-body">
                <div class="row">
                    <center>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <img src="{{ asset('images/grupo_icpc.png') }}" width="120%">
                        </div>
                        <div class="mb-3">
                            <p>Participan en concursos y competencias de programación</p>
                            <p>Inscripciones a talleres de todo tipo para fomentar su conocimiento</p>
                        </div><br><br>
                        <div class="mb-3">
                            <a href="/nuevoUsuario" class="btn btn-color"> Participante </a>
                        </div>
                    </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
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
            <p><b>Contactanos</b></p>
            <p><i class="fa fa-envelope" aria-hidden="true"></i> bc.builders.100@gmail.com</p>
            <p><i class="fa fa-phone" aria-hidden="true"></i> +591 71761280, +591 76906952, +591 77933620</p>
        </div>
        <div class="text-center">
            <p>&copy; 2023 BolCodeBuilders. Todos los derechos reservados.</p>
        </div>
    </footer>
    
    

    <!-- Scripts de Bootstrap y jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.getElementById("modalUser").addEventListener("click", function() {
            document.getElementById("modal").style.display = "block";
        });

        document.getElementById("closeModalBtn").addEventListener("click", function() {
            document.getElementById("modal").style.display = "none";
        });

        window.addEventListener("click", function(event) {
            if (event.target === document.getElementById("modal")) {
                document.getElementById("modal").style.display = "none";
            }
        });

    </script>
</body>

</html>
