<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\Admin\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
});

/* Rodri este es el tuyo xd
Route::get('/eventos', function () {
    return view('eventos-vista');
});*/

Route::get('/admin',[Admin\AdminController::class, 'index']);

// Rutas relacionadas a los Eventos
Route::get('/eventos', [EventoController::class, 'index'])->name('eventos.index');

Route::get('/crear-evento', [EventoController::class, 'crearEvento'])->name('eventos.crearEvento');

Route::post('/guardar-evento', [EventoController::class, 'guardarEvento'])->name('eventos.guardarEvento');
