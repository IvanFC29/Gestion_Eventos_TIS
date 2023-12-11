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
                    <form method="post" action="{{ route('eventos.guardarEvento') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="containerTitulo">      
                            <h1><b>Registro a Competencia VARIABLE</b></h1>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label>Nombre del Equipo:<span class="text-danger"></span></label>
                                    <input type="text" name="nombre" class="form-control" value="" placeholder="Ingrese nombre" minlength="3" maxlength="100" required>
                                </div>
                                <!--<div class="mb-3">
                                    <label>Tipo de evento:<span class="text-danger col-form-label">*</span></label>
                                    <select name="tipoEvento" class="form-control form-control-lg">
                                        <option></option>
                                        <option>Convocatoria</option>
                                        <option>Capacitación</option>
                                        <option>Clasificación</option>
                                        <option>Competencia</option>
                                    </select>
                                </div>-->
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label>Primer integrante del Equipo:<span class="text-danger"></span></label>
                                </div>
                            </div>
                            <div class="row" id="dynamic-columns">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label>E-mail de contacto:<span class="text-danger">*</span></label>
                                        <input type="text" name="email" class="form-control input_user" value="" placeholder="ej: gpmcheco@mail.com" required maxlength="50">
                                    </div>
                                    <button type="button" class="btn btn-primary" onclick="agregarColumna()">Agregar Columna</button>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Descripción del evento:<span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="message-text" name="descripcionevento" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label>Fecha a realizarse:<span class="text-danger">*</span></label>
                                    <input type="date" name="fechaEventoInicio" class="form-control" id="fechaInicio" min="<?php echo date('Y-m-d'); ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label>Fecha de culminación:<span class="text-danger">*</span></label>
                                    <input type="date" name="fechaEventoFin" class="form-control" id="fechaFin" min="<?php echo date('Y-m-d'); ?>" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label>E-mail de contacto:<span class="text-danger">*</span></label>
                                    <input type="text" name="email" class="form-control input_user" value="" placeholder="ej: gpmcheco@mail.com" required maxlength="50">
                                </div>
                                <div class="mb-3">
                                    <label>Telefono/Celular de contacto:<span class="text-danger">*</span></label>
                                    <input type="text" name="telefonoevento" class="form-control input_user" value="" placeholder="Ingrese numero telef/cel" oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength); this.value = this.value.replace(/[^0-9]/,'')" minlength="7" maxlength="8" min="40000000" max="79999999" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary guardar" name="editable" value="0">Guardar</button>
                            <button type="submit" class="btn btn-primary editar" name="editable" value="1">Editar luego</button>
                            <a type="button" href="/eventos" class="btn btn-secondary cancelar">Cancelar</a>
                        </div>
                    </form>
   
                </div>
        </div>
                </div>
        </div>
        

    
    <script>
        function agregarColumna() {
            var nuevaColumna = '<div class="col-md-4"><div class="mb-3"><label>Nuevo Campo:<span class="text-danger">*</span></label><input type="text" name="nuevoCampo" class="form-control" value="" placeholder="Nuevo campo" required></div></div>';
            $('#dynamic-columns').append(nuevaColumna);
        }
    </script>

</body>
</html>