<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
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

/* Enrutado muy básico */
/* Route::get('/', function () {
    return "Bienvenido";
}); */

Route::get('/', HomeController::class);

Route::resource('cursos', CursoController::class);
// Si no se llaman igual.
//Route::resource('asignaturas', CursoController::class)->parameters([ 'asignaturas' => 'curso' ])->names('cursos');
