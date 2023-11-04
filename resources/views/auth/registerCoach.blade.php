@extends('layouts.landing')

@section('title', 'Register')

@section('content')

    @if (session('success'))
        <div id='mensaje'>
            <div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong> {{ session('success') }}</strong>
                <div>
                  <a href="#" type="button"> Enviar cuenta </a>  
                </div>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'> </button>
            </div>
        </div>
    @endif
<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 
rounded-lg shadow-lg">

  <h1 class="text-3xl text-center font-bold">Nuevo Coach</h1>

<div class="bg-sky-500">
  <form class="mt-4" method="POST" action="/guardar-coach">
    @csrf
    <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full
    text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Correo"
    id="email" name="email">

    @error('email')        
      <p class="border border-red-500 rounded-md bg-red-100 w-full
      text-red-600 p-2 my-2">* {{ $message }}</p>
    @enderror

    <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full
    text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Password"
    id="password" name="password">

    @error('password')        
      <p class="border border-red-500 rounded-md bg-red-100 w-full
      text-red-600 p-2 my-2">* {{ $message }}</p>
    @enderror
    <button type="submit" class="rounded-md bg-indigo-500 w-full text-lg
    text-white font-semibold p-2 my-3 hover:bg-indigo-600">Guardar</button>
    </div>

  </form>


</div>

@endsection