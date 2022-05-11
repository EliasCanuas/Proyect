<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IntegradorController;


Route::resources([
    'integrador'   => IntegradorController::class
]);

Route::get('integrador/datatable', 
[IntegradorController::class, 'datatable']);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
