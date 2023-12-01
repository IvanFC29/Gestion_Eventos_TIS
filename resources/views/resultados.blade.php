<!-- recursos/views/resultados.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2>Resultados de la búsqueda</h2>

        @foreach ($resultados as $resultado)
            <!-- Mostrar los resultados de la búsqueda aquí -->
            <p>{{ $resultado->nombre }} - {{ $resultado->descripcion }}</p>
        @endforeach
    </div>
@endsection
