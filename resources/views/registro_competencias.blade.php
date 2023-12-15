<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="{{ asset('css/formulario.css') }}" type="text/css">
    
    </head>
    
    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">


    <title>Crear Evento</title> 
    <!-- Agrega esto en el head de tu documento HTML -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    
</head>

<body>

            <div class="bg-sky-500">
                <!--@if (session('error'))
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
                @endif-->
                <div class="section">
                    <form method="post" action="{{ route('eventos.registroUsuComp') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="containerTitulo"> 
                            <p class="titulo" >{{ $nombreComp }}</p>     
                            <!--<h1><b>Registro a Competencia VARIABLE</b></h1>-->
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label>Nombre del Equipo:<span class="text-danger"></span></label>
                                    <input type="text" name="nombreEquipo" class="form-control" value="" placeholder="Ingrese nombre" minlength="3" maxlength="100" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label>Integrantes del Equipo:<span class="text-danger"></span></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label>Nombre:<span class="text-danger">*</span></label>
                                        <input type="text" name="nombre1" class="form-control" value="" placeholder="Ingrese nombre" minlength="3" maxlength="100" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label>E-mail de contacto:<span class="text-danger">*</span></label>
                                        <input type="text" name="email1" class="form-control input_user" value="" placeholder="ej: gpmcheco@mail.com" required maxlength="50">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label>Número de celular:<span class="text-danger">*</span></label>
                                        <input type="text" name="celular1" class="form-control input_user" value="" placeholder="ej: gpmcheco@mail.com" required maxlength="50">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label>Código Sis:<span class="text-danger">*</span></label>
                                        <input type="text" name="sis1" class="form-control input_user" value="" placeholder="ej: gpmcheco@mail.com" required maxlength="50">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label>Nombre:<span class="text-danger">*</span></label>
                                        <input type="text" name="nombre2" class="form-control" value="" placeholder="Ingrese nombre" minlength="3" maxlength="100" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label>E-mail de contacto:<span class="text-danger">*</span></label>
                                        <input type="text" name="email2" class="form-control input_user" value="" placeholder="ej: gpmcheco@mail.com" required maxlength="50">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label>Número de celular:<span class="text-danger">*</span></label>
                                        <input type="text" name="celular2" class="form-control input_user" value="" placeholder="ej: gpmcheco@mail.com" required maxlength="50">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label>Código Sis:<span class="text-danger">*</span></label>
                                        <input type="text" name="sis2" class="form-control input_user" value="" placeholder="ej: gpmcheco@mail.com" required maxlength="50">
                                    </div>
                                </div>
                            </div>
                            <div class="row botonesparticipante2">
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-primary" onclick="agregarParticipante3()">Agregar Participante</button>
                                </div>
                            </div>
                            <div class="row participante3" style="display: none;">
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label>Nombre:<span class="text-danger">*</span></label>
                                        <input type="text" name="nombre3" class="form-control" value="" placeholder="Ingrese nombre" minlength="3" maxlength="100" required>
                                    </div>
                                </div>
                                <div class="col-md-3">                                        <div class="mb-3">
                                        <label>E-mail de contacto:<span class="text-danger">*</span></label>
                                        <input type="text" name="email3" class="form-control input_user" value="" placeholder="ej: gpmcheco@mail.com" required maxlength="50">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label>Número de celular:<span class="text-danger">*</span></label>
                                        <input type="text" name="celular3" class="form-control input_user" value="" placeholder="ej: gpmcheco@mail.com" required maxlength="50">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label>Código Sis:<span class="text-danger">*</span></label>
                                        <input type="text" name="sis3" class="form-control input_user" value="" placeholder="ej: gpmcheco@mail.com" required maxlength="50">
                                    </div>
                                </div>
                            </div>
                            <div class="row botonesparticipante3" style="display: none;">
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-primary" onclick="agregarParticipante4()">Agregar Participante</button>
                                </div>
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-primary" onclick="quitarParticipante3()">Quitar Participante</button>
                                </div>
                            </div>
                            <div class="row participante4" style="display: none;">
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label>Nombre:<span class="text-danger">*</span></label>
                                        <input type="text" name="nombre4" class="form-control" value="" placeholder="Ingrese nombre" minlength="3" maxlength="100" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label>E-mail de contacto:<span class="text-danger">*</span></label>
                                        <input type="text" name="email4" class="form-control input_user" value="" placeholder="ej: gpmcheco@mail.com" required maxlength="50">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label>Número de celular:<span class="text-danger">*</span></label>
                                        <input type="text" name="celular4" class="form-control input_user" value="" placeholder="ej: gpmcheco@mail.com" required maxlength="50">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label>Código Sis:<span class="text-danger">*</span></label>
                                        <input type="text" name="sis4" class="form-control input_user" value="" placeholder="ej: gpmcheco@mail.com" required maxlength="50">                                        </div>
                                    </div>
                                </div>
                            <div class="row botonesparticipante4" style="display: none;">
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-primary" onclick="quitarParticipante4()">Quitar Participante</button>
                                </div>
                            </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Nombre del Coach:<span class="text-danger">*</span></label>
                                <textarea class="form-control" id="coachcompentencia" name="descripcionevento" required></textarea>
                            </div>
                        </div>
                    </div>
                        <div class="modal-footer">
                            
                            <button type="submit">Enviar</button>

                            <a type="button" href="/eventos" class="btn btn-secondary cancelar">Cancelar</a>
                        </div>
                    </form>
   
                </div>
        </div>

<script>
    function agregarParticipante3() {
        // Ocultar botonesparticipante2
        document.querySelector('.botonesparticipante2').style.display = 'none';

        // Mostrar participante3 y botonesparticipante3
        document.querySelector('.participante3').style.display = 'flex'; // Cambiado de 'block' a 'flex'
        document.querySelector('.botonesparticipante3').style.display = 'flex'; // Cambiado de 'block' a 'flex'
    }

    function quitarParticipante3() {
        // Ocultar participante3 y botonesparticipante3
        document.querySelector('.participante3').style.display = 'none';
        document.querySelector('.botonesparticipante3').style.display = 'none';

        // Mostrar botonesparticipante2
        document.querySelector('.botonesparticipante2').style.display = 'flex'; // Cambiado de 'block' a 'flex'
    }

    function agregarParticipante4() {
        // Ocultar botonesparticipante3
        document.querySelector('.botonesparticipante3').style.display = 'none';

        // Mostrar participante4 y botonesparticipante4
        document.querySelector('.participante4').style.display = 'flex'; // Cambiado de 'block' a 'flex'
        document.querySelector('.botonesparticipante4').style.display = 'flex'; // Cambiado de 'block' a 'flex'
    }

    function quitarParticipante4() {
        // Ocultar participante4 y botonesparticipante4
        document.querySelector('.participante4').style.display = 'none';
        document.querySelector('.botonesparticipante4').style.display = 'none';

        // Mostrar botonesparticipante3
        document.querySelector('.botonesparticipante3').style.display = 'flex'; // Cambiado de 'block' a 'flex'
    }
</script>

<!-- ... (resto del código) ... -->


    

</body>
</html>