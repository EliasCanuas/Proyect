@extends('layout.layout')
@section('content')

        <section class="section">
            <div class="column">
                <div class="column is-one-third">
                    <a href="/modificar" class="button is-primary">
                        Regresar
                    </a>
                </div>
                <div class="column">
                    <p class="title">
                        Detalles de {{ $modificar->producto }}
                    </p>
                </div>
            </div>
        </section>

        <section class="section">
            <p class="has-text-justify">Articulo: {{ $modificar->producto }}</p>
            <p class="has-text-justify">Cantidad: {{ $modificar->cantidad }}</p>
            <p class="has-text-justify">Precio: {{ $modificar->precio }} pesos</p>
        </section>

@endsection