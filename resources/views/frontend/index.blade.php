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
            <h2>ICPC</h2>
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
                <a class="nav-link" href="/competencias-usuario">Competencias</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Iniciar Sesión
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/login">Administrador</a>
                
                <a class="dropdown-item" href="/loginCoach">Coach</a>
            </li>
            @endif
                
            </ul>
        </div>
    </nav>
</div>

    <!-- Encabezado -->
<header class="jumbotron text-center header-bg " style="z-index: 1; position: relative;">
    <div id="sidebarTitulo">
        <br><br><h1>Bienvenido a ICPC</h1><br><br><br>
    </div>
</header>
    
    <!-- Sección de características -->
    <section class="container dimensiones">
        <div class="row">
            <div class="col-md-4">
                <h4>ICPC-FCYT</h4>
                <p>A nivel universitario, el ICPC es una oportunidad para que los estudiantes de informática de todas las universidades del mundo demuestren sus habilidades de programación. La competencia ayuda a los estudiantes a desarrollar sus habilidades de resolución de problemas, lógica, algoritmos y programación.</p>

                <a href="https://www.umss.edu.bo/competencia-latinoamericana-de-programacion-icpc-2022/" class="btn btn-color" target="_blanck">Visitar</a>
            </div>
            <div class="col-md-4">
                <h4>ICPC-BOLIVIA</h4>
                <p>A nivel nacional, el ICPC se organiza en diferentes países del mundo. En Bolivia, el ICPC se organiza por la Federación Boliviana de Ciencias de la Computación. La competencia nacional boliviana se celebra anualmente y los equipos ganadores clasifican para la fase regional de América Latina.</p>

                <a href="https://umsa-2023.clei.org/inicio/eventos-asociados/clp/" class="btn btn-color" target="_blanck">Visitar</a>
            </div>
            <div class="col-md-4" >
                <h4>ICPC-Mundial </h4>
                <p>A nivel mundial, el ICPC se divide en dos fases: la fase regional y la fase mundial. En la fase regional, los equipos de estudiantes de universidades de todo el mundo compiten entre sí para clasificarse para la fase mundial. La fase regional se celebra en diferentes sedes de todo el mundo, en fechas y horarios diferentes.</p>

                <a href="https://icpc.global/" class="btn btn-color" target="_blanck">Visitar</a>
            </div>
        </div><br>
    </section>
    <br><br><br><br><br>
    <div class="container">
        <div class="section-title" data-aos="zoom-out">
            <h2>Fotos relevantes</h2>
        </div>
        <div class="row portfolio-container" data-aos="fade-up">
            <div class="col-lg-4 col-md-6 portfolio-item">
                <div class="portfolio-img"><img src="{{ asset('images/noticia.jpg') }}" class="img-fluid" alt="Estudiantes compitiendo"></div>
                    <div class="portfolio-info">
                        <h4>Competencias del ICPC</h4>
                    </div>   
                </div>
            </div>         
        </div>       
    </div><br>
    <div class="container">
        <div class="section-title" data-aos="zoom-out">
            <h2>Un poco de Historia</h2>
        </div>
        <div class="row portfolio-container" data-aos="fade-up">
            <div class="col-lg-4 col-md-6 portfolio-item">
                <div class="portfolio-img"></div>
                    <div class="portfolio-info">
                        <p>La ACM-ICPC es una competición que se realizó por primera vez en la Universidad A&M de Texas en 1970. La misma pasó a ser una competición con varias rondas clasificatorias en 1977 y la final mundial se organizó en colaboración con la ACM Computer Science Conference.</p>
                    </div>
                    <div class="portfolio-info">
                        <p>De 1977 a 1989, competieron principalmente equipos de Estados Unidos y Canadá. La sede central está ubicada en la Universidad de Baylor desde 1989, las competiciones regionales se ubican en universidades de todo el mundo, bajo el auspicio de la ACM y la colaboración de grandes empresas de la industria informática. La ACM-ICPC ha ido aumentando en número de participantes y países y ahora es una competición mundial con equipos de 84 países (en 2005).</p>
                    </div> 
                    <div class="portfolio-info">
                        <p>Desde 1997 el principal patrocinador es IBM y la participación en la competición se ha incrementado de un 10 a un 20% cada año. En 1997 participaron 840 equipos de 560 universidades. En 2005, 5606 equipos de 1737 universidades.</p>
                    </div>  
                </div>
            </div>
        </div>
    </div> <br>
    <br>
    
    
    
    <!-- Pie de página -->
    <footer class="footerlanding bg-dark text-white text-center py-4">
        <!--<div class="column-right">
            <div>
                <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
            </div>
        </div>-->
        <div class="column-left">
            <div class="text-left">
                <p>
                    <div class="iconos">
                        <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    </div>
                </p>
                <p class="clearfix"><i class="fa fa-envelope" aria-hidden="true"></i> bc.builders.100@gmail.com
                    
                </p>
                <p><i class="fa fa-phone" aria-hidden="true"></i> +591 71761280, +591 76906952, +591 77933620</p>
            </div>
            <div class="text-center">
                <p>&copy; 2023 BolCodeBuilders. Todos los derechos reservados.</p>
            </div>
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
