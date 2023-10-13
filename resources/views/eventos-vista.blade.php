<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de Tailwind CSS</title>
    <!-- Agrega el enlace a la hoja de estilos de Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/events.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    

    <div class="sidebar">
        <div class="top">
            <div class="logo">
                <i class="bx bxl-codepen"></i>
                <span>CodeComerce</span>
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
                <a href="#">
                    <i class="bx bx-list-ul"></i>
                    <span class="nav-item">Eventos</span>

                </a>
                <span class="tooltrip">Eventos</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-plus-medical"></i>
                    <span class="nav-item">Crear</span>

                </a>
                <span class="tooltrip">Crear</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-edit-alt"></i>
                    <span class="nav-item">Editar</span>

                </a>
                <span class="tooltrip">Editar</span>
            </li>
            
        </ul>
    </div>



    <div class="main-content">
        <!--<div class="conteiner">
            <h1>Code Comerce</h1>
        </div>-->
        <div class="navbar">
            <div class="titulo">Mi Sitio Web</div>
            <div class="botones">
                <button class="boton">Botón 1</button>
                <button class="boton">Botón 2</button>
                <button class="boton">Botón 3</button>
            </div>
        </div>

        <div class="bodyEvents">
            <!--<div class="card">
                <div class="img-card"></div>
                <div class="content">
                    <div class="title">
                        <h3>Evento 1</h3>
                        <span>1 dia antes</span>
                    </div>
                    <div class="textEvent">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perferendis enim similique quasi, explicabo cumque dolore incidunt impedit molestias deserunt? Quos sapiente corporis ea rerum aliquid nulla praesentium veritatis distinctio laudantium.</p>
                    </div>
                    <div class="btn-container">
                        <button>Ver mas</button>
                    </div>
                </div>
            </div>-->
            
            <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700" class="cards">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="/docs/images/blog/image-4.jpg" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                </div>
            </a>

        </div>
    </div>

</body>

<script>
    let btn = document.querySelector('#btn');
    let sidebar = document.querySelector('.sidebar');

    btn.onclick = function (){
        sidebar.classList.toggle('active');
    };
</script>

</html>