@extends('layout.layout')
@section('content')


<section class="hero is-dark">
    <div class="hero-body">
        <center><p class="title">Iniciar sesion como:</p></center>
</section>

<section class="hero is-light">
<div class="hero-body">
<div class="hero-body">
<div class="hero-body">
    <div class="buttons has-addons is-centered">
        <a class="button is-primary is-medium is-rounded" href="/integrador">
            Empleado</a>
            </div>

            
            <div class="buttons has-addons is-centered">
        <a class="button is-link is-medium is-rounded" href="/jefe">
            Administrador</a>


        <a class="button is-link is-medium is-rounded" href="/articulo">
            Articulo</a>

            <a class="button is-link is-medium is-rounded" href="/modificar">
            Modificar</a>

            <a class="button is-link is-medium is-rounded" href="/almacen">
            Almacen</a>

            <a class="button is-link is-medium is-rounded" href="/informe">
            Informe</a>

            </div>
        @endsection