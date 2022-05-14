<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IntegradorController;
use App\Http\Controllers\JefeController;


Route::resources([
    'integrador'   => IntegradorController::class
]);

Route::get('integrador/datatable', 
[IntegradorController::class, 'datatable']);

Route::get('jefe/datatable', 
[JefeController::class, 'datatable']);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
