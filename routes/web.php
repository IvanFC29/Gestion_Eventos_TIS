<<<<<<< HEAD
=======
<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/eventos', function () {
    return view('eventos-vista');
});

>>>>>>> 3d199e02e95f1413b8e0242c4a28931a3a6bc559
