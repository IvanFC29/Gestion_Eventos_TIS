<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminOficialController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\NuevocoachController;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
Route::get('/'', [App\Http\Controllers\Frontend\FrontendController::class,'index']);
*/
Route::view('/','frontend.index');


Route::get('/home', function () {
    return view('home');
})->middleware('auth');

Route::get('/register', [RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');



Route::get('/login', [AdminOficialController::class, 'create'])
    ->middleware('guest')
    ->name('login.index');

Route::post('/login', [AdminOficialController::class, 'store'])
    ->name('login.store');

Route::get('/logout', [AdminOficialController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');


//Route::get('/admin',[Admin\AdminController::class, 'index']);

// Rutas relacionadas a los Eventos
Route::get('/home', [EventoController::class, 'index'])
->name('eventos.index')
->middleware('auth');;

Route::get('/eventos', [EventoController::class, 'index'])
->name('eventos.index')
->middleware('auth');;

Route::get('/crear-evento', [EventoController::class, 'crearEvento'])->name('eventos.crearEvento');

Route::post('/guardar-evento', [EventoController::class, 'guardarEvento'])->name('eventos.guardarEvento');

Route::get('/ver-eventos-editables', [EventoController::class, 'verEditables'])->name('eventos.verEditables');


// Rutas Kevin


Route::get('/nuevoUsuario',[UserController::class, 'nuevoU']);
Route::get('/nuevoCoach',[CoachController::class, 'nuevoC']);
Route::get('/registerCoach',[NuevocoachController::class, 'nCoach']);












// Rutas Rodri

Route::get('/usuario-eventos', [EventoController::class, 'uEventos'])->name('eventos.uEventos');














// Rutas Fab
Route::get('/RecuperarContraseña', [AdminOficialController::class, 'recuperarC']);
//Route::get('/send', [AdminOficialController::class, 'sendmail']);    
Route::post('enviar-correo',  [AdminOficialController::class, 'sendmail'])->name('enviar-correo');  

Route::get('/loginCoach', [AdminOficialController::class, 'loginC']);
Route::get('/loginEstudiante', [AdminOficialController::class, 'loginE']);
Route::post('/loginCoach', [CoachController::class, 'store']);
   // ->name('login.store');








// Rutas Ivan
Route::post('/guardar-participante', [UserController::class, 'guardarUsuario'])->name('user.guardarUsuario');
Route::post('/initSesion-participante', [UserController::class, 'store']);
Route::post('/guardar-coach', [CoachController::class, 'guardarCoach']);
Route::get('/escribir-correo', [AdminController::class, 'editorCorreo']);
Route::post('/enviar-cuenta-coach', [AdminController::class, 'sendmail']);









  // Fin rutas
  