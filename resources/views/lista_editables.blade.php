<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('css/eventos_admin.css') }}" TYPE="text/css">
  <title>Eventos</title>
</head>
<body>
  <header class="bg-primary text-white text-center py-3">
    <h1>CP-BOL</h1>
  </header>
  <aside class="bg-light p-3">
    <div class="text-center">
      <i class="bi bi-person-circle fs-4"></i>
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
  </aside>
  <div class="container mt-4">
    <div class="row">
      @foreach ($lista_editables as $i)
        <div class="col-md-4">
          <div class="card">
            <img src="https://via.placeholder.com/150" alt="Card Image">
            <div class="card-body">
              <h5 class="card-title">{{ $i->nombre }}</h5>
              <p class="card-text">{{ $i->descripcion }}</p>
              <p class="card-text">{{ $i->fecha_inicio }}</p>
              <p class="card-text">{{ $i->fecha_fin }}</p>
            </div>
          </div>
        </div>
      @endforeach
      
      <div class="col-md-4">
        <div class="card">
          <img src="https://via.placeholder.com/150" alt="Card Image">
          <div class="card-body">
            <h5 class="card-title">Tarjeta 2</h5>
            <p class="card-text">Descripción de la tarjeta 2.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="https://via.placeholder.com/150" alt="Card Image">
          <div class="card-body">
            <h5 class="card-title">Tarjeta 3</h5>
            <p class="card-text">Descripción de la tarjeta 3.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
