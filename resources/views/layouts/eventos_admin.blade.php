<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Agrega el enlace a la hoja de estilos de Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/events.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Crear Evento </title>
</head>
<body>

<div class="main-content">
    <div class="navbar">
        <div class="titulo">CP-BOL</div>
    </div>
</div>
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

</body>
<script>
    let btn = document.querySelector('#btn');
    let sidebar = document.querySelector('.sidebar');

    btn.onclick = function (){
        sidebar.classList.toggle('active');
    };
</script>
</html>