<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
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


/*Route::get('/home', function () {
    return view('home');
})->middleware('auth');*/

Route::get('/register', [RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');



Route::get('/login', [SessionsController::class, 'create'])
    ->middleware('guest')
    ->name('login.index');

Route::post('/login', [SessionsController::class, 'store'])
    ->name('login.store');

Route::get('/logout', [SessionsController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');


Route::get('/admin',[Admin\AdminController::class, 'index']);

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

