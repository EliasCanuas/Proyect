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
                        Detalles de {{ $integrador->articulo }}
                    </p>
                </div>
            </div>
        </section>

        <section class="section">
            <p class="title">Cantidad que se compro: {{ $integrador->stock }}</p>
            <p class="subtitle">Precio unitario: {{ $integrador->precio }} pesos</p>
            <p class="has-text-justify">Numero de venta: {{ $integrador->venta }}</p>
        </section>

@endsection