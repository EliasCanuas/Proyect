<?php

use App\Http\Controllers\AlmacenController;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\InformeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IntegradorController;
use App\Http\Controllers\JefeController;
use App\Http\Controllers\ModificarController;
use App\Models\modificar;

Route::resources([
    'integrador'   => IntegradorController::class
]);

Route::resources([
    'jefe'   => JefeController::class
]);

Route::resources([
    'articulo'   => ArticuloController::class
]);

Route::resources([
    'modificar'   => ModificarController::class
]);

Route::resources([
    'almacen'   => AlmacenController::class
]);

Route::resources([
    'informe'   => InformeController::class
]);

Route::get('integrador/datatable', 
[IntegradorController::class, 'datatable']);

Route::get('jefe/datatable', 
[JefeController::class, 'datatable']);

Route::get('articulo/datatable', 
[ArticuloController::class, 'datatable']);

Route::get('modificar/datatable', 
[ModificarController::class, 'datatable']);

Route::get('almacen/datatable', 
[AlmacenController::class, 'datatable']);

Route::get('informe/datatable', 
[InformeController::class, 'datatable']);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
