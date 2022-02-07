<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

Route::view('/', 'inicio') -> name('inicio');

Route::view('crearchollo', 'crearchollo') -> name('crearchollo');

Route::get('chollos', [ PagesController::class, 'chollos' ]) -> name('chollos');
    // notas.detalle (notas es una carpeta y detalle el archivo que está dentro)
    Route::get('chollos/{id?}', [ PagesController::class, 'detalle' ]) -> name('chollos.detalle');
    //Para eliminar chollo
    Route::delete('eliminar/{id}', [ PagesController::class, 'eliminar' ]) -> name('chollos.eliminar');
    //Para Crear chollo
    Route::post('chollos', [PagesController::class, 'crearChollo']) -> name('chollos.crear');
    //Para editar y actualizar chollo
    Route::get('editar/{id}', [ PagesController::class, 'editar' ]) -> name('chollos.editar');
    Route::put('editar/{id}', [ PagesController::class, 'actualizar' ]) -> name('chollos.actualizar');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Destacado y nuevo

Route::view('destacados', 'destacado')->name('destacado');
Route::view('nuevos', 'nuevos')->name('nuevos');

Route::get('destacados', [PagesController::class, 'destacados'])->name('destacados');

Route::get('nuevos', [PagesController::class, 'nuevos'])->name('nuevos');




//Logeo
/*Route::get('login', function(){
    return view('auth/login');
})-> name('login');*/

Route::get('login', [PagesController::class, 'autenticacion'])-> name('login');
//Route::view('auth/login', 'login')->name('login');

Auth::routes();

Route::post('chollos', [HomeController::class, 'crearChollo']) -> name('chollos.crear');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('auth/logout', [PagesController::class, 'logout'])-> name('logout');