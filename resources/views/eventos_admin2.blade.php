@extends('layouts.app')

@section('styles')
    <!-- Incluye tus archivos CSS aquí -->
    <link rel="stylesheet" href="{{ asset('css/events.css') }}">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
    </head>
@endsection

@section('title', 'Home')

@section('content')
    <!--modal crear evento
      Para rescatar los datos-->
      <div class="container mt-4">
        <div class="row">
          @foreach ($lista as $i)
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
    </div>
     

@endsection
