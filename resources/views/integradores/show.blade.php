@extends('layout.layout')
@section('content')

<section class="section">
    <div class="column">
        <div class="column is-one-third">
            <a href="/integrador" class="button is-primary">
                Regresar
            </a>
        </div>
        <div class="column">
            <p class="title">
                Detalles de la compra de {{ $integrador->articulo }}
            </p>
        </div>
    </div>
</section>

<section class="section">
    <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
        <thead>
            <tr>
                <th>
                    <p class="has-text-justi">Cantidad que se compro</p>
                </th>
                <th>
                    <p class="has-text-justi">Precio unitario</p>
                </th>
                <th>
                    <p class="has-text-justify">Numero de venta</p>
                </th>
                <th>
                    <p class="has-text-justify">Total a pagar</p>
                </th>
            </tr>
        </thead>

        <thead>
            <tr>
                <th>
                    <p class="has-text-justi">{{ $integrador->stock }}</p>
                </th>
                <th>
                    <p class="has-text-justi">$ {{ $integrador->precio }} pesos</p>
                </th>
                <th>
                    <p class="has-text-justify">{{ $integrador->venta }}</p>
                </th>
                <th>
                    <p class="has-text-justify">$ {{ $integrador->precio * $integrador->cantidad }} pesos</p>
                </th>
            </tr>
        </thead>
</section>
@endsection