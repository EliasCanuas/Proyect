@extends('layout.layout')
@section('content')

        <section class="section">
            <div class="column">
                <div class="column is-one-third">
                    <a href="/almacen" class="button is-primary">
                        Regresar
                    </a>
                </div>
                <div class="column">
                    <p class="title">
                        Detalles de {{ $almacen->producto }}
                    </p>
                </div>
            </div>
        </section>

        <section class="section">
            <p class="has-text-justify">Articulo: {{ $almacen->producto }}</p>
            <p class="has-text-justify">Cantidad: {{ $almacen->cantidad }}</p>
        </section>

@endsection