@extends('layout.layout')
@section('content')

        <section class="section">
            <div class="column">
                <div class="column is-one-third">
                    <a href="/articulo" class="button is-primary">
                        Regresar
                    </a>
                </div>
                <div class="column">
                    <p class="title">
                        Detalles de {{ $articulo->producto }}
                    </p>
                </div>
            </div>
        </section>

        <section class="section">
            <p class="has-text-justify">Articulo: {{ $articulo->producto }}</p>
            <p class="has-text-justify">Cantidad: {{ $articulo->cantidad }}</p>
            <p class="has-text-justify">Precio: {{ $articulo->precio }} pesos</p>
        </section>

@endsection