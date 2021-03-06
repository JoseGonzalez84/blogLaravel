<?php

use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', HomeController::class)->name('home');

Route::resource('cursos', CursoController::class);
// Si no se llaman igual.
//Route::resource('asignaturas', CursoController::class)->parameters([ 'asignaturas' => 'curso' ])->names('cursos');

Route::view('nosotros', 'nosotros')->name('nosotros');

Route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos.index');

Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');
