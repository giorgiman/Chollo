<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

