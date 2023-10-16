@extends('layouts.landing')

@section('title','LOGIN')

@section('content')

  <form method="POST" action="" id="loginPersonalForm">
    @csrf
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <h4><span class="glyphicon glyphicon-lock"></span> Inicio de Sesión</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <div class="form-group">
            <label for="email"><span class="glyphicon glyphicon-user"></span> Nombre de usuario:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese nombre de usuario o contraseña">
          </div>
          <div class="form-group">
            <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Contraseña:</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese contraseña">
          </div>
          <div class="checkbox">
            <label><input type="checkbox" value="" checked>Recordar contraseña</label>
          </div>
          @error('message')        
             <p class="border border-red-500 rounded-md bg-red-100 w-full
            text-red-600 p-2 my-2">* {{ $message }}</p>
         @enderror
          <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Ingresar</button>
        </div>
        <div class="modal-footer">
          
          
          <p>¿Olvidó su nombre de usuario o contraseña? <a href="#">Recuperar</a></p>
        </div>
      </div>
    </div>
  </form>


@endsection