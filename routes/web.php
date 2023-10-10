<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\Controller;
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
Route::get('/'', [App\Http\Controllers\Frontend\FrontendController::class,'index']);
*/

Route::get('/', function () {
    return view('frontend.index');
});
Route::get('/admin',[Admin\AdminController::class, 'index']);


