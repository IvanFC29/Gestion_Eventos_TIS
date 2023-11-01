@extends('layouts.landing')

@section('title','LOGIN')

@section('content')

<div class="login-container">
  <img src="admin-image.jpg" >
  <h2>Coach</h2>
  <form action="" method="post">
    @csrf
      <input type="email" name="email" placeholder="Correo Electrónico" required>
      <div class="password-container">
          <input type="password" name="password" id="password" placeholder="Contraseña" required>
          <span class="password-toggle" id="password-toggle" onclick="togglePasswordVisibility()">👁️</span>
      </div>
      @error('message')        
      <p class="border border-red-500 rounded-md bg-red-100 w-full
     text-red-600 p-2 my-2">* {{ $message }}</p>
  @enderror
      <input type="submit" value="Iniciar Sesión">
  </form>
  <a href="olvidar_contrasena.html">¿Olvidaste tu contraseña?</a>
</div>
<script>
  function togglePasswordVisibility() {
      const passwordInput = document.getElementById("password");
      const passwordToggle = document.getElementById("password-toggle");

      if (passwordInput.type === "password") {
          passwordInput.type = "text";
          passwordToggle.textContent = "👁️ Mostrar contraseña";
      } else {
          passwordInput.type = "password";
          passwordToggle.textContent = "👁️ Ocultar contraseña";
      }
  }
</script>


@endsection
