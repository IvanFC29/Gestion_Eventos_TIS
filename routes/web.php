<?php
use App\Http\Controllers\reporteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Admin2Controller;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminOficialController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\NuevocoachController;
use App\Http\Controllers\CanvasController;
use Illuminate\Http\Request; 
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\CalendarController;
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
Route::view('/','frontend.index')->middleware('guest');




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


// Rutas relacionadas a los Eventos
Route::get('/home', [EventoController::class, 'index'])
->middleware('auth.admin')
->name('eventos.index');

Route::get('/eventos', [EventoController::class, 'index'])
->name('eventos.index')
->middleware('auth.admin');

Route::get('/crear-evento', [EventoController::class, 'crearEvento'])
->middleware('auth.admin')
->name('eventos.crearEvento');

Route::post('/guardar-evento', [EventoController::class, 'guardarEvento'])
->middleware('auth.admin')
->name('eventos.guardarEvento');
/*
Route::get('/ver-eventos-editables', [EventoController::class, 'verEditables'])
->middleware('auth.admin')
->name('eventos.verEditables');*/


// Rutas Kevin


Route::get('/nuevoUsuario',[UserController::class, 'nuevoU'])->middleware('auth.admin');
Route::get('/nuevoCoach',[CoachController::class, 'nuevoC']);
Route::get('/registerCoach',[NuevocoachController::class, 'nCoach'])->middleware('auth.admin');












// Rutas Rodri

Route::get('/usuario-eventos', [EventoController::class, 'uEventos'])->name('eventos.uEventos')->middleware('guest');

Route::get('/registro-eventos/{nombre}', [EventoController::class, 'mostrarFormularioRegistro'])->name('eventos.mostrarFormularioRegistro');

Route::get('/competencias-adm', [EventoController::class, 'mostrarCompetenciasAdmin'])->name('eventos.mostrarCompetenciasAdmin')->middleware('auth.admin');
Route::get('/competencias-coach', [EventoController::class, 'mostrarCompetenciasCoach'])->name('eventos.mostrarCompetenciasCoach')->middleware('auth.coach');
Route::get('/formcompetencias/{nombre}', [EventoController::class, 'mostrarFormulario'])->name('eventos.mostrarFormulario');
Route::get('/competencias-usuario', [EventoController::class, 'mostrarCompetenciasUsuario'])->name('eventos.mostrarCompetenciasUsuario')->middleware('guest');
Route::get('/crearcompetencias', [EventoController::class, 'crearCompetencias'])->name('eventos.crearCompetencias')->middleware('auth');

Route::post('/guardarCompetencia', [EventoController::class, 'guardarCompetencia'])
->name('eventos.guardarCompetencia');

Route::post('/registrarUsuEvent', [EventoController::class, 'registroUsuEvent'])
->name('eventos.registroUsuEvent');

Route::get('/buscar-eventos', [EventoController::class, 'buscarEventos'])->name('buscar.eventos');
Route::get('/buscar-eventosA', [EventoController::class, 'buscarEventosA'])->name('buscar.eventosA');
Route::get('/buscar-competencias', [EventoController::class, 'buscarCompetencias'])->name('buscar.competencias');
Route::get('/buscar-competenciasU', [EventoController::class, 'buscarCompetenciasU'])->name('buscar.competenciasU');
Route::get('/registrarUsCompetencia/{nombre}', [EventoController::class, 'registrarUsCompetencia'])
->name('eventos.registrarUsCompetencia');

Route::post('/registroUsuComp', [EventoController::class, 'registroUsuComp'])
->name('eventos.registroUsuComp');





// Rutas Fab
Route::get('/RecuperarContraseña', [AdminOficialController::class, 'recuperarC'])->name('recuperarContra')
->middleware('guest');
  
Route::post('enviar-correo',  [AdminOficialController::class, 'sendmail'])
->name('enviar-correo');  

Route::get('/loginCoach', [AdminOficialController::class, 'loginC'])
->middleware('guest');

Route::post('/loginCoach', [CoachController::class, 'storeCoach']);
   // ->name('login.store');
Route::view('/perfil','verPerfil')->middleware('auth.coach');

Route::get('/editCoach', [CoachController::class, 'editCoach'])->name("editCoach")->middleware('auth.coach');
Route::post('/listaCoachs', [CoachController::class, 'filtrarCoachs'])->name('coachs.filtrar');
Route::put('/actualizarDatos', [CoachController::class, 'update'])->name("update")->middleware('auth.coach');
Route::get('/listaCoachs', [CoachController::class, 'listarCoachs'])->name("listaCoach")->middleware('auth.admin');
Route::get('/reportePDF', [reporteController::class, 'mostrarRegistrosPDF'])->middleware('auth.admin');
Route::get('/reporteEventos', [EventoController::class, 'listarEventos'])->name("reporteE")->middleware('auth.admin');
Route::get('/reporteCompetencias', [EventoController::class, 'listarCompetencias'])->name("reporteC")->middleware('auth.admin');
Route::post('/reporteEventos', [EventoController::class, 'filtrarEventos'])->name('eventos.filtrar');
Route::post('/reporteCompetencias', [EventoController::class, 'filtrarCompetencias'])->name('competencias.filtrar');
Route::get('/reporteCompPDF', [reporteController::class, 'mostrarRegistrosComPDF']);
Route::get('/pdfComRes', [reporteController::class, 'mostrarResultadoC']);
Route::get('/pdf', [reporteController::class, 'mostrarEventos']);
Route::get('/pdfEveRes', [reporteController::class, 'mostrarResultadoE']);
// Rutas Ivan
Route::post('/guardar-participante', [UserController::class, 'guardarUsuario'])->name('user.guardarUsuario');
Route::post('/initSesion-participante', [UserController::class, 'store']);
Route::post('/guardar-coach', [CoachController::class, 'guardarCoach']);
Route::get('/escribir-correo', [AdminController::class, 'editorCorreo'])->middleware('auth.admin');
Route::post('/enviar-cuenta-coach', [AdminController::class, 'sendmail']);

Route::get('/canvas/{image}', [CanvasController::class, 'index'])->middleware('auth.admin')->name('canvas');
Route::get('/canvas_new_version', [CanvasController::class, 'blanco'])->middleware('auth.admin')->name('canvas_new');
Route::get('/lista-afiches', function () {
    return view('lienzo.afiches');
})->middleware('auth.admin');

Route::post('/guardar-imagen', [ImagenController::class, 'guardarImagen'])->middleware('auth.admin');


Route::get('/menu', function () {
    return view('admin.menu');
}); //->middleware('auth.admin');

Route::get('/editar-Evento{id}', [EventoController::class, 'editarEvento'])->middleware('auth.admin')->name('editar-Evento');
Route::post('/modificar-evento{id}', [EventoController::class, 'modificar'])->middleware('auth.admin')->name('eventos.modificar');

Route::get('/notificar/{emailCoach}/{id}', [EventoController::class, 'notificarCambio'])->middleware('auth.admin')->name('notificar');
Route::post('/enviar-cambio', [Admin2Controller::class, 'sendmail']);

Route::get('/full-calendar', [CalendarController::class, 'index'])->middleware('auth');

Route::post('/actualizar-permisoComp/{id}',[CoachController::class,'actualizarPermisoComp'])->name('coach.actualizarPermisoComp');
Route::post('/actualizar-permisoEve/{id}',[CoachController::class,'actualizarPermisoEve'])->name('coach.actualizarPermisoEve');
Route::post('/actualizar-permisoCoach/{id}',[CoachController::class,'actualizarPermisoCoach'])->name('coach.actualizarPermisoCoach');
Route::post('/actualizar-permisoReportes/{id}',[CoachController::class,'actualizarPermisoReportes'])->name('coach.actualizarPermisoReportes');
Route::get('/pdfEveResU', [reporteController::class, 'mostrarResultadoEU']);